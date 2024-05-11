<x-layouts.app>
    @yield('content')

    <x-modal.index
        :name="ModalName::APP_REGISTER"
        :type="ModalType::CREATE"
        :size="ModalSize::MD"
        :singleton="true"
        :hidden="true"
        :action="false"
        :title="__('app.register')"
        :route="route('auth.register')"
    >
        <x-slot:body>
            <x-forms.input
                name="email"
                :label="__('form.email')">
                @svg('heroicon-o-envelope')
            </x-forms.input>

            <x-forms.input
                name="password"
                :label="__('form.password')"
                type="password">
                @svg('heroicon-o-key')
            </x-forms.input>

            <x-forms.input
                name="password_confirm"
                :label="__('form.password')"
                type="password">
                @svg('heroicon-s-key')
            </x-forms.input>
        </x-slot:body>

    </x-modal.index>

</x-layouts.app>

<script>
    document.addEventListener('alpine:init', () => {

        Alpine.data('truncate', (data) => ({
            content: data,
            count: 500,
            truncated: '',
            expanded: false,

            init() {
                this.truncate()
            },

            truncate() {
                this.truncated = data.length > this.count ? data.substring(0, this.count) + '...' : data
            },

            expand() {
                this.expanded = !this.expanded

                this.expanded
                    ? this.truncated = this.content
                    : this.truncate()
            }
        }));

        Alpine.data('openModal', (name, action, iterator) => ({
            open() {
                console.log(`modalBtnOpen${action}_${name + iterator}`)
                document.getElementById(`modalBtn${action}_${name + iterator}`).click()
            },
        }))

        Alpine.data('file', (id, current) => ({
            id: id,
            activeFile: current,
            upload: null,

            element(item) {
                return document.getElementById(`${item}-${id}`)
            },
            init() {
                if (this.activeFile) {
                    document.getElementById(`imageUpload-${id}`).style.display = 'none';
                    document.getElementById(`imagePreview-${id}`).src = this.activeFile;
                    document.getElementById(`imageLabel-${id}`).style.display = 'block';
                }
            },
            load(files) {
                document.getElementById(`imageLabel-${id}`).style.display = 'block';
                document.getElementById(`imagePreview-${id}`).src = URL.createObjectURL(files[0]);
                document.getElementById(`imageSelect-${id}`).files = files;
            }
        }))

        Alpine.data('modal', (modal) => ({
            open() {
                document.getElementById('modalBtn' + modal).click()
            },
        }))

        Alpine.data('accordion', (id) => ({
            toggle() {
                document.getElementById(id).click()
            },
        }))

        Alpine.data('carousel', (name, count) => ({
            init() {
                const glide = new Glide(`#${name}`, {
                    type: 'carousel',
                    perView: count,
                    breakpoints: {
                        1900: {
                            perView: count - 1,
                        },
                        1300: {
                            perView: count - 2,
                        },
                        900: {
                            perView: 1,
                        },
                    },
                })

                this.$nextTick(() => {
                    glide.mount(GlideControls)
                })
            },
        }))

        Alpine.data('keywords', (data) => ({
            values: [],

            async init() {
                if (data) {
                    JSON.parse(data).forEach(item => {
                        this.values.push({
                            keyword: item
                        })
                    })
                }
            },
            add() {
                this.values.push({
                    keyword: '',
                });
            },
            remove(index) {
                this.values.splice(index, 1);
            }

        }))

        Alpine.data('top', () => ({
                values: [],
                options: [],

                async init() {
                    this.values = await $.ajax({
                        url: '{{route('guest.ajax.tops')}}',
                        type: 'GET',
                    })

                    for (let i = 0; i < this.values.length; i++) {
                        this.options.push({
                            value: this.values[i].id,
                            label: this.values[i].company,
                            top: this.values[i].top
                        })
                    }

                    this.bootstrap()
                },
                bootstrap() {
                    let bootSelect2 = () => {
                        $(this.$refs.select).select2({
                            multiple: true,
                            data: this.options.map(partner => ({
                                id: partner.value,
                                text: partner.label,
                                selected: partner.top,
                            })),
                        })
                    }

                    let refreshSelect2 = () => {
                        $(this.$refs.select).select2('destroy')
                        this.$refs.select.innerHTML = ''
                        bootSelect2()
                    }

                    bootSelect2()

                    $(this.$refs.select).on('change', () => {
                        let currentSelection = $(this.$refs.select).select2('data')

                        this.value = currentSelection.map(i => i.id).reverse()
                    })

                    this.$watch('values', () => refreshSelect2())
                    this.$watch('options', () => refreshSelect2())
                },
            }),
        )

        Alpine.data('partners', () => ({
                partners: [],
                displayedPartners: [],
                planFilter: '{{PlanType::ALL}}',
                categoryFilter: '{{CategoryType::ALL}}',
                sort: '{{PartnerSort::NONE->value}}',
                input: '',

                async init() {
                    this.partners = await $.ajax({
                        url: '{{route('guest.ajax.partners')}}',
                        type: 'GET',
                    })

                    this.displayedPartners = this.partners
                },
                filteredPartners() {

                    this.filterPlan(this.planFilter)

                    if (this.categoryFilter !== '{{CategoryType::ALL}}') {
                        this.filterCategory(this.categoryFilter)
                    }

                    this.sortPartners()

                    return this.displayedPartners;
                },
                filterPartner(partners) {
                    return partners.filter(u => u.company.toLowerCase().includes(this.input.toLowerCase()));
                },
                filterPlan(plan) {
                    if (this.planFilter !== '{{PlanType::ALL}}') {
                        this.displayedPartners = this.filterPartner(this.partners.filter(u => u.plan === plan))
                    } else {
                        this.displayedPartners = this.filterPartner(this.partners)
                    }
                },
                filterCategory(category) {
                    if (category !== '{{CategoryType::ALL}}') {
                        this.displayedPartners = this.displayedPartners.filter(u => u.categories.includes(category));
                    } else {
                        this.displayedPartners = this.filterPartner(this.displayedPartners)
                    }
                }
                ,
                sortPartners() {
                    this.displayedPartners.sort((a, b) => {
                        switch (this.sort) {
                            case '{{PartnerSort::PAYMENT->value}}':
                                return a.sortPayment - b.sortPayment;

                            case '{{PartnerSort::CREATED->value}}':
                                return a.sortCreated - b.sortCreated;
                        }
                    })
                },
            }),
        )

        Alpine.data('list', () => ({
            adverts: [],
            displayedAdverts: [],
            input: '',

            async init() {
                this.adverts = await $.ajax({
                    url: '{{route(__('route.listing-search'))}}',
                    type: 'GET',
                })

                console.log(this.adverts)
            },
            filterAdvert(item) {
                if (item) {
                    return item.toLowerCase().includes(this.input.toLowerCase())
                }
            },
            filterAdverts() {
                this.displayedAdverts = this.adverts.filter(ad =>
                    this.filterAdvert(ad.title) ||
                    this.filterAdvert(ad.company) ||
                    this.filterAdvert(ad.address)
                )
            },
            search() {
                this.filterAdverts();

                return this.displayedAdverts;
            },
        }))
    })
</script>
