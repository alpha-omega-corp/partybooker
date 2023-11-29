@props([
    'partners'
])
<a href="javascript:" id="return-to-top">
    @svg('heroicon-m-arrow-up', 'text-white fw-bold')
</a>
<div>
    @php
        $partnerValues = $partners->map(function ($partner) {
            return [
                'id' => $partner->id_partner,
                'name' => str_replace("'", '', $partner->user->name),
                'email' => str_replace("'", '', $partner->user->email),
                'company' => app()->getLocale() === 'en'
                ? str_replace(["'"], '', $partner->en_company_name)
                : str_replace("'", '', $partner->fr_company_name),
                'shortDescription' => app()->getLocale() === 'en'
                ? htmlspecialchars(str_replace(["'", "\r", "\n", ","], '', $partner->en_short_descr))
                : htmlspecialchars(str_replace(["'", "\r", "\n", ","], '', $partner->fr_short_descr)),
                'location' => str_replace("'", '', $partner->address),
                'hasThumbnail' => (bool)$partner->main_img,
                'thumbnail' => str_replace("'", "",  $partner->main_img),
                'canton' => __('cantons.' . strtolower($partner->location_code) . '_loc'),
                'address' => str_replace("'", '', $partner->address),
                'eventTypes' => array_values($partner->eventTypes()->get()->map(function ($eventType) {
                    return app()->getLocale() === 'en'
                        ? $eventType->en_name
                        : $eventType->fr_name;
                })->toArray())
            ];
        })->toArray();

        $partnerValues = array_values($partnerValues);
    @endphp

    <section class="service-listing">
        <div
            x-data="searchHandler()"
            x-init="loadPartners('{{json_encode($partnerValues)}}')">
            <div class="mb-5">
                <label for="basic-url" class="form-label text-uppercase">
                </label>
                <div class="input-group">
                    <span class="input-group-text bg-accent" id="basic-addon3">
                        @svg('heroicon-o-magnifying-glass-circle', 'text-white')
                    </span>
                    <input type="text" x-model="search" class="form-control" id="basic-url"
                           aria-describedby="basic-addon3 basic-addon4">
                </div>
                <div class="form-text" id="basic-addon4">
                    {{ __('form.search_listing')}}
                </div>
                <hr>
            </div>


            <template x-for="partner in filteredPartners()" :key="partner.id">
                <a :href="partner.href"
                   class="list-item">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">

                                <div x-show="partner.hasThumbnail">
                                    <img :src="partner.thumbnail"
                                         :alt="partner.thumbnail" class="cover rounded">
                                </div>

                                <div x-show="!partner.hasThumbnail">
                                    <img src="//via.placeholder.com/700x1000/fc0?text=6" class="cover rounded"
                                         alt="...">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase fw-bold listing-card-title"
                                        x-text="partner.company">

                                    </h5>
                                    <div class="card-text description"
                                         x-html="unEscape(partner.shortDescription)">
                                    </div>

                                    <div class="d-flex location-box">
                                        <div class="location">
                                            <img src="{{ Vite::image('map.svg') }}"/>
                                        </div>

                                        <p class="w-full">
                                            <span x-text="partner.canton"></span>
                                            <span x-text="partner.address"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="listing-tags">
                        <template x-for="et in partner.eventTypes" :key="et">
                            <span class="badge text-bg-accent me-3" x-text="et">
                            </span>
                        </template>
                    </div>
                </a>
            </template>

        </div>
    </section>

    <script>
        function searchHandler() {
            return {
                partners: [],
                search: '',
                loadPartners(partners) {
                    if (!partners) {
                        return;
                    }

                    JSON.parse(partners).forEach((field) => {
                        this.partners.push({
                            id: field.id,
                            name: field.name,
                            email: field.email,
                            company: field.company,
                            location: field.location,
                            href: field.href,
                            hasThumbnail: field.hasThumbnail,
                            thumbnail: '/storage/images/thumbnails/' + field.thumbnail,
                            shortDescription: this.unEscape(field.shortDescription),
                            canton: field.canton,
                            address: field.address,
                            eventTypes: field.eventTypes
                        });
                    });
                },

                filteredPartners() {
                    return this.partners.filter(
                        partner => partner.company.toLowerCase().includes(this.search.toLowerCase())
                    );
                },
                unEscape(htmlStr) {
                    htmlStr = htmlStr.replace(/&lt;/g, "<");
                    htmlStr = htmlStr.replace(/&gt;/g, ">");
                    htmlStr = htmlStr.replace(/&quot;/g, "\"");
                    htmlStr = htmlStr.replace(/&#39;/g, "\'");
                    htmlStr = htmlStr.replace(/&amp;/g, "&");
                    return htmlStr;
                }
            }
        }
    </script>
</div>

<script type="module">
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 50) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });
    $('#return-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });
</script>

<style>
    #return-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.7);
        width: 50px;
        height: 50px;
        display: block;
        text-decoration: none;
        -webkit-border-radius: 35px;
        -moz-border-radius: 35px;
        border-radius: 35px;
        display: none;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    #return-to-top svg {
        color: #fff;
        margin: 0;
        position: relative;
        left: 16px;
        top: 13px;
        font-size: 25px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    #return-to-top:hover {
        background: rgba(0, 0, 0, 0.9);
    }

    #return-to-top:hover i {
        color: #fff;
        top: 5px;
    }
</style>

