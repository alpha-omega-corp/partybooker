@php use App\Http\Middleware\LocaleMiddleware; @endphp
@props([
    'partners'
])

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
                'href' => url(LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . str_replace("'", '', $partner->slug)),
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
                                    <img src="{{Vite::image('placeholder.png')}}" class="cover rounded"
                                         alt="placeholder">
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

                    @if(Request::has('event_types'))
                        <div class="listing-tags">
                            <template x-for="et in partner.eventTypes" :key="et">
                            <span class="badge text-bg-accent me-3" x-text="et">
                            </span>
                            </template>
                        </div>
                    @endif
                </a>
            </template>
            <hr>
            {{$partners->links()}}

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


