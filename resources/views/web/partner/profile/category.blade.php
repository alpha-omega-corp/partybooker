@php use App\Models\Advert; @endphp

<div class="option-active-content">
    @foreach($currentCategories as $iterator => $category)
        @php
            $advert = Advert::where('partners_info_id', \Illuminate\Support\Facades\Auth::user()->partnerInfo->id)
            ->where('view_name', $category->form_name)->first();
        @endphp

        <div class="category-option-card position-relative">

            <div class="text-uppercase fw-bold text-start w-100 p-2">
                {{$category->lang->name}}
            </div>

            <ul class="text-start category-option-ul">
                <ul>
                    @foreach($category->subCategories as $sub)
                        <li>{{$sub->lang->name}}</li>
                    @endforeach
                </ul>
            </ul>

            @if ($advert->status == Advert::STATUS_DRAFT)
                <hr>
                @switch($advert->view_name)
                    @case('event-place')
                        @break

                    @case('caterer')
                        @php($action = Auth::user()->type == 'admin'
                            ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/caterer')
                            : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/caterer')
                        ) @break

                    @case('wine')
                        @php($action = Auth::user()->type == 'admin'
                            ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/wine-lovers')
                            : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/wine-lovers')
                        ) @break

                    @case('equipment')
                        @php($action = Auth::user()->type == 'admin'
                            ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/equipment')
                            : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/equipment')
                        ) @break

                    @case('entertainment')
                        @php($action = Auth::user()->type == 'admin'
                            ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/entertainment')
                            : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/entertainment')
                        ) @break
                @endswitch

                <a id="{{'create' . $iterator}}" href="{{route('create-' . $advert->view_name, $advert->id)}}">
                    Create
                </a>
            @else

                <hr>
                <x-partner.service-details :advert="$advert" :partner="$user->partnerInfo" :iterator="$iterator"/>

                <div class="edit-service">
                    <a id="{{'create' . $iterator}}" href="{{route('create-' . $advert->view_name, $advert->id)}}">
                        @svg('heroicon-o-cog-6-tooth')
                    </a>
                </div>

            @endif
        </div>

        @if(!$loop->last)
            <hr>
        @endif
    @endforeach
</div>




