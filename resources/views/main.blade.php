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
                maxCount: 200,
                isOpen: false,
                canTruncate: false,

                init() {
                    this.truncate()
                    this.canTruncate = !(this.content.length <= this.maxCount)
                },

                truncate() {
                    this.truncated = this.content.length > this.maxCount
                        ? this.content.substring(0, this.maxCount) + '...'
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
                input: null,
                location: null,
                category: null,
                title: $('.app-listing-title'),
                searchContent: $('.listing-search-content'),
                content: $('.app-listing-content'),
                contentContainer: $('.app-listing-content-container'),
                page: 1,
                lastPage: 2,

                init() {
                    this.$watch('input', () => this.search())
                    this.$watch('location', () => this.filter())
                    this.$watch('category', () => this.filter())
                },


                async next() {
                    if (this.page <= this.lastPage) {
                        await $.ajax({
                            url: '{{route('guest.ajax.listing')}}',
                            type: 'GET',
                            data: {
                                page: this.page,
                            },
                        }).done(data => {
                            this.lastPage = data.last
                            this.page = data.next
                            this.content.append(data.adverts);
                        })
                    }
                },


                async search() {
                    if (this.input) {
                        window.scrollTo(0, 0);

                        await $.ajax({
                            url: '{{route('guest.ajax.listing.search')}}',
                            type: 'GET',
                            data: {
                                filter: this.input,
                            },
                        }).done(data => this.searchContent.html(data.adverts))
                        this.content.hide()
                    } else {
                        this.content.show()
                    }
                },

                async filter() {
                    window.scrollTo(0, 0);

                    await $.ajax({
                        url: '{{route('guest.ajax.listing.filter')}}',
                        type: 'GET',
                        data: {
                            location: this.location,
                            category: this.category,
                        },
                    }).done(data => {
                        this.searchContent.html(data.adverts)

                        if (this.location || this.category) {
                            this.content.hide()
                        } else {
                            this.content.show()
                        }
                    })
                },
            }))
        })
    </script>
</x-layouts.app>
