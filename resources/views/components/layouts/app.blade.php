<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @yield('page')>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Partybooker</title>
    @yield('title')
    @stack('head')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>

<div class="app">

    @include('app.partials.navigation')


    <div class="app-content">
        <div class="container position-relative">
            @if ($message = Session::get('success'))
                <x-notification.popup :type="NotificationType::SUCCESS" :message="$message"/>
            @endif

            @if ($message = Session::get('error'))
                <x-notification.popup :type="NotificationType::ERROR" :message="$message"/>
            @endif
        </div>

        {{$slot}}
    </div>
</div>


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

        Alpine.data('partnerTop', () => ({
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
