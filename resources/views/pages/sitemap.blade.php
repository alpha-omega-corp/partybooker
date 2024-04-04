@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('page')
    page="site-map"
@endsection

@section('title')
    <title>{{__('main.sitemap')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('service')
    <section class="sitemap-section">
        <div class="container">
            <h1 class="text-uppercase text-center fw-bold">{{__('main.sitemap')}}</h1>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <h3 class="h3 fw-bold text-uppercase">{{__('main.pages')}}</h3>
                        <hr>
                        <ul>
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{url(LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $category->lang->slug)}}"><b>{{$category->lang->name}}</b></a>
                                    <ul>
                                        @foreach($category->subCategories as $sub)
                                            <li>
                                                <a href="{{url(LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $category->lang->slug . '/' . $sub->lang->slug)}}">{{$sub->lang->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <br>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <div class="col-md-6 col-sm-12">

                    <div class="card">
                        <h3 class="h3 fw-bold text-uppercase">{{__('main.articles')}}</h3>
                        <hr>

                        <ul>
                            @foreach($articles as $article)
                                <li>
                                    <a href="{{url(LocaleMiddleware::getLocale() . '/blog/' . $article->slug)}}">{{app()->getLocale() == 'en' ? $article->title_en : $article->title_fr }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
