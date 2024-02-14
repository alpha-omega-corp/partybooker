<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @yield('page')>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Partybooker</title>
    @yield('title')
    @stack('header')

    <!-- Google Analytics -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-09C5215HQL"></script>
    <script>

    </script>


    @filamentStyles
    @vite(['resources/js/app.js'])


</head>

<body>
@include('app.partials.navigation')

<div class="app-content">
    @if ($message = Session::get('success'))
        <x-notification type="success" :message="$message"/>
    @endif

    @if ($message = Session::get('error'))
        <x-notification type="error" :message="$message"/>
    @endif

    @yield('content')
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('modal', (name) => ({
            open() {
                document.getElementById(`toggle-${name}`).click()
            },
        }))

        Alpine.data('accordion', (name) => ({
            toggle() {
                document.getElementById(`accordion-${name}`).click()
            },
        }))

        Alpine.data('partnerSearch', () => ({
                partners: [],
                displayedPartners: [],
                filter: 'all',
                sort: 'newest',
                input: '',

                async init() {
                    this.partners = await $.ajax({
                        url: '{{route('guest.ajax.partners')}}',
                        type: 'GET',
                    })

                    console.log(this.partners)
                },

                filterPartner(partners) {
                    return partners.filter(
                        partner => partner.company.toLowerCase().includes(this.search.toLowerCase())
                    );
                },
                filteredPartners() {
                    switch (this.filter) {
                        case 'all':
                            this.displayedPartners = this.filterPartner(this.partners)
                            break;
                        case 'payed':
                            this.displayedPartners = this.filterPartner(this.filterPayed())
                            break;
                        case 'un-payed':
                            this.displayedPartners = this.filterPartner(this.filterUnPayed())
                            break;
                        case 'event-place':
                            this.displayedPartners = this.filterPartner(this.filterCategory('event-place'))
                            break;
                        case 'caterer':
                            this.displayedPartners = this.filterPartner(this.filterCategory('caterer'))
                            break;
                        case 'wine':
                            this.displayedPartners = this.filterPartner(this.filterCategory('wine'))
                            break;
                        case 'entertainment':
                            this.displayedPartners = this.filterPartner(this.filterCategory('entertainment'))
                            break;
                        case 'equipment':
                            this.displayedPartners = this.filterPartner(this.filterCategory('equipment'))
                            break;
                        case 'none':
                            this.displayedPartners = this.filterPartner(this.filterCategory('none'))
                            break;
                    }

                    switch (this.sort) {
                        case 'name':
                            this.displayedPartners.sort()
                            break;

                        case 'newest':
                            this.displayedPartners.sort((partner) => {
                                return partner.id
                            })
                            break;

                        case 'oldest':
                            this.displayedPartners.sort((partner) => {
                                return partner.id
                            }).reverse()
                            break;
                    }

                    return this.displayedPartners;
                },
                filterPayed() {
                    return this.partners.filter((partner) => {
                        return partner.payment_status === 1;
                    });
                },
                filterUnPayed() {
                    return this.partners.filter((partner) => {
                        return partner.payment_status === 0;
                    });
                },
                filterCategory(category) {
                    return this.partners.filter((partner) => {
                        return partner.categories.includes(category);
                    });
                }
            }),
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
        )
    })
</script>
</body>
</html>
