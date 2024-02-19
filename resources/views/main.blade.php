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

    @if(config('app.env') === EnvironmentType::PROD->value)
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-09C5215HQL"></script>
        <!-- Google Analytics -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-54557878-1', 'auto');
            ga('send', 'pageview');
        </script>
    @endif

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

        Alpine.data('partnerSearch', () => ({
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
                    console.log(this.displayedPartners)
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
    })
</script>
</body>
</html>
