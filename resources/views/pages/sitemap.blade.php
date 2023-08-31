@extends('main')

@section('page')
	page="site-map"
@endsection

@section('title')
	<title>{{__('main.sitemap')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@push('header')
	<style>
		ul li a{
			color: black;
		}

		ul li a:hover{
			color: #fe8a02;
		}
	</style>
@endpush



@section('content')
	<section class="header not-full">
		@include('common.header-nav')
		<div class="cover abs">
			<img src="/images/home-header-bg.jpg" class="bg abs" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h1>{{__('main.sitemap')}}</h1>
				</div>
			</div>
		</div>
		@include('common.social')
	</section>


	<section class="contact-section" style="color: black">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 class="h3">{{__('main.pages')}}</h3>
					<ul>
						@foreach($categories as $category)
							<li>
								<a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $category->lang->slug)}}"><b>{{$category->lang->name}}</b></a>
								<ul>
									@foreach($category->subCategories as $sub)
										<li>
											<a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $category->lang->slug . '/' . $sub->lang->slug)}}">{{$sub->lang->name}}</a>
										</li>
									@endforeach
								</ul>
							</li>
							<br>
						@endforeach
					</ul>
				</div>

				<div class="col-md-4">
					<h3 class="h3">{{__('main.articles')}}</h3>
						<ul>
							@foreach($articles as $article)
								<li>
									<a href="{{url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.blog') . '/' . $article->slug)}}">{{app()->getLocale() == 'en' ? $article->title_en : $article->title_fr }}</a>
								</li>
							@endforeach
						</ul>
				</div>
			</div>
		</div>
	</section>
@endsection
