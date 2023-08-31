@extends('admin.admin')

@section('page')
page="blog"
@endsection

@section('title')
<title>{{ __('partybooker-cp.blog')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
<div id="page">
	<div class="container">
		<div class="row">
			<div class="col-md-3 border-right">
				<div class="messages">
					<div class="success">{{ __('partybooker-cp.edit_success')}}</div>
					<div class="error">{{ __('partybooker-cp.edit_error')}}</div>
				</div>
				<div class="setting-nav form-nav">
					<ul class="blog-filter">
						<li><a href="#" class="active" status="all">{{ __('partybooker-cp.show_all')}}</a></li>
						<li><a href="#" status="1">{{ __('partybooker-cp.show_published')}}</a></li>
						<li><a href="#" status="0">{{ __('partybooker-cp.show_draft')}}</a></li>
					</ul>
					<a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/new-post')}}" class="button">{{ __('partybooker-cp.add_new_article')}}</a>
				</div>
			</div>
			
			<div class="col-md-9">	
				<h1>{{ __('partybooker-cp.blog')}}</h1>
				
				<div class="blog-list">
					@foreach ($posts as $post)
						@if ($post->status == 1)
						<a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/post/'.$post->slug)}}" status="1">
						@else
						<a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/post/'.$post->slug)}}" status="0">	
						@endif
							<div class="post">
								<ul>
									<li>{{$post->updated}}</li>
									@if (app()->getLocale() == 'en')
										<li>{{$post->title_en}}</li>
									@else
										<li>{{$post->title_fr}}</li>
									@endif
									@if ($post->status == 1)
										<li>{{ __('partybooker-cp.published')}}</li>
									@else
										<li>{{ __('partybooker-cp.not_published')}}</li>
									@endif
								</ul>
							</div>
						</a>
					@endforeach
				</div>			
			</div>
		</div>
	</div>
</div>
@endsection
