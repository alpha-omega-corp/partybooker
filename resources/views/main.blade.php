<x-layouts.app>
    @yield('content')
</x-layouts.app>


<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('modal', (modal) => ({
            open() {
                document.getElementById('modalBtn' + modal).click()
            },
        }))

        Alpine.data('accordion', (name) => ({
            toggle() {
                document.getElementById(`accordion-${name}`).click()
            },
        }))

        Alpine.data('carousel', (name, count) => ({
            init() {
                const glide = new Glide(`#${name}`, {
                    type: 'carousel',
                    perView: count,
                    breakpoints: {
                        1500: {
                            perView: 2,
                        },
                        1000: {
                            perView: 1,
                        },
                    },
                })

                this.$nextTick(() => {
                    glide.mount(GlideControls)
                })
            },
        }))

        Alpine.data('top', () => ({
                multiple: true,
                values: [],
                options: [],

                async init() {
                    this.values = await $.ajax({
                        url: '{{route('guest.ajax.tops')}}',
                        type: 'GET',
                    })
                    console.log(this.values)

                    for (let i = 0; i < this.values.length; i++) {
                        this.options.push({
                            value: this.values[i].id,
                            label: `${this.values[i].name}, ${this.values[i].company}`,
                            top: this.values[i].top
                        });
                    }

                    this.bootstrap()
                },
                bootstrap() {
                    let bootSelect2 = () => {
                        $(this.$refs.select).select2({
                            multiple: this.multiple,
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

                        this.value = this.multiple
                            ? currentSelection.map(i => i.id)
                            : currentSelection[0].id
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
                }
                ,
            }),
        )

        Alpine.data('list', () => ({
            adverts: [],
            displayedAdverts: [],
            input: '',

            async init() {
                this.adverts = await $.ajax({
                    url: '{{route('guest.ajax.listing')}}',
                    type: 'GET',
                })
            },
            filterAdvert(item) {
                return item.toLowerCase().includes(this.input.toLowerCase())
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
