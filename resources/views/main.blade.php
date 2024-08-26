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
        :validation="true"
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


    <script>
        document.addEventListener('alpine:init', () => {

            Alpine.data('truncate', (data) => ({
                truncated: null,
                content: data.replaceAll('"', ''),
                count: 200,
                isOpen: false,
                canTruncate: false,

                init() {
                    this.truncate()
                    this.canTruncate = !(this.content.length <= this.count)
                },

                truncate() {
                    this.truncated = this.content.length > this.count
                        ? this.content.substring(0, this.count) + '...'
                        : this.content
                },

                expand() {
                    this.isOpen = !this.isOpen

                    this.isOpen
                        ? this.truncated = this.content
                        : this.truncate()
                }
            }));

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


            Alpine.data('list', () => ({
                adverts: [],
                displayedAdverts: [],
                searchInput: null,
                locationInput: null,
                categoryInput: null,
                page: 1,
                el: $('.app-listing-container'),


                async init() {
                    this.adverts = await $.ajax({
                        url: '{{route(__('route.listing-search'))}}',
                        type: 'GET',
                        data: {
                            page: this.page,
                        },
                    })

                    console.log(this.adverts)
                },

                async next() {
                    await $.ajax({
                        url: '{{route(__('route.listing-search'))}}',
                        type: 'GET',
                        data: {
                            page: this.page,
                        },
                    }).done(data => {
                        console.log(data.adverts)
                        console.log(this.page, data.next_page, data.last_page)
                        this.page = data.next_page

                        $(".app-listing-content").append(data.adverts);

                    })

                },

                filterAdvert(item) {
                    if (item) {
                        return item.toLowerCase().includes(this.searchInput.toLowerCase())
                    }
                },


                filterAdverts() {
                    this.displayedAdverts = this.adverts.filter(ad =>
                        this.filterAdvert(ad.title) ||
                        this.filterAdvert(ad.company) ||
                        this.filterAdvert(ad.address)
                    )
                },


                filterLocation() {
                    this.displayedAdverts = this.displayedAdverts.filter(ad => ad.address.toLowerCase().includes(this.locationInput.toLowerCase()))
                },


                search() {
                    if (this.searchInput) {
                        //this.filterLocation()
                        this.filterAdverts()

                        return this.displayedAdverts
                    }

                    return this.adverts
                },
            }))
        })
    </script>
</x-layouts.app>
