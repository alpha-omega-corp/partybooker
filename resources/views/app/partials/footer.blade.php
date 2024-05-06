<footer class="bg-home-gray container-xl">
    <div class="app-footer shadow-lg">
        <div class="app-footer-contacts">
            <a href="{{$footerContacts->instagram}}">
                <img src="{{Vite::social('instagram')}}" alt="instagram">
            </a>

            <a href="{{$footerContacts->facebook}}">
                <img src="{{Vite::social('facebook')}}" alt="facebook">
            </a>
            <a href="{{$footerContacts->linkedin}}">
                <img src="{{Vite::social('linkedin')}}" alt="linkedin">
            </a>
        </div>

        <div class="app-footer-nav">
            <div class="app-footer-links">
                <div class="app-footer-link">
                    <h4 class="app-footer-title">{{__('home.sitemap')}}</h4>

                    <div class="app-footer-list">
                        <a href="{{route(__('route.home'))}}">{{__('nav.home')}}</a>
                        <a href="{{route(__('route.listing'))}}">{{__('nav.listing')}}</a>
                        <a href="{{route(__('route.about'))}}">{{__('nav.about')}}</a>
                        <a href="{{route(__('route.partnership'))}}">{{__('nav.partnership')}}</a>
                        <a href="{{route(__('route.blog'))}}">{{__('nav.blog')}}</a>
                        <a href="{{route(__('route.faq'))}}">{{__('nav.faq')}}</a>
                    </div>
                </div>

                <div class="app-footer-link">
                    <h4 class="app-footer-title">{{__('home.footer')}}</h4>
                    <div class="app-footer-list">
                        <a href="{{route(__('route.sitemap'))}}">{{__('nav.sitemap')}}</a>
                        <a href="{{route(__('route.terms'))}}">{{__('nav.terms')}}</a>
                        <a href="{{route(__('route.contact'))}}">{{__('nav.contact')}}</a>
                    </div>
                </div>

                <div class="app-footer-link">
                    <h4 class="app-footer-title">{{__('home.categories')}}</h4>

                    <div class="app-footer-list">
                        @foreach($footerCategories as $category)
                            <a href="{{route(__('route.listing'), $category->locale->slug)}}">
                                {{strtolower($category->locale->title)}}
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="app-footer-link">
                    <h4 class="app-footer-title">{{__('home.contacts')}}</h4>

                    <div class="app-footer-list">
                        <p>{{$footerContacts->email}}</p>
                        <p>{{$footerContacts->phone}}</p>
                        <p>{{$footerContacts->address}}</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

</footer>
