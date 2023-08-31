@extends('admin.admin')

@section('page')
page="post-edit"
@endsection

@section('title')
@if (app()->getLocale() == 'en')
	<title>{{$post[0]->title_en}} | {{ __('partybooker-cp.www')}}</title>
@else
	<title>{{$post[0]->title_fr}} | {{ __('partybooker-cp.www')}}</title>
@endif
@endsection


@push('head')
	<script src="https://cdn.tiny.cloud/1/{{env('TINYMCE_API_KEY')}}/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init( {
			selector: 'textarea',
			// plugins: 'print preview fullpage paste  save code fullscreen link template codesample table charmap hr  advlist lists wordcount noneditable charmap',
			plugins: 'fullpage paste code fullscreen link template hr advlist lists wordcount noneditable charmap',
			menubar: 'edit view format table',
			toolbar: 'bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | removeformat | fullscreen  preview  | link anchor',
			toolbar_sticky: true,
			height: 900,
			setup: function (editor) {
				editor.on('change', function () {
					editor.save();
					var lang = $('div.lang-nav ul li.active').attr('lan');
					if($('#'+editor.id+'_ifr').contents().find('body')[0].innerText.length > 1) {
						$('li.post.'+lang+' span').addClass('ok').html('OK');
					} else {
						$('li.post.'+lang+' span').removeClass('ok').html('NaN');
					}
				});
			}
		});

		$(document).ready(function() {$('.tox-notification__dismiss').click();});
	</script>
@endpush


@section('content')
<div id="page" class="post-edit" postid="{{$post[0]->post_id}}">
	<div class="container">
		<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/edit-post')}}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-3 border-right">
					<input type="text" name="post_id" value="{{$post[0]->post_id}}" hidden />
					<input type="text" name="slug" class="post-slug" placeholder="slug" value="{{$post[0]->slug}}" required />
                                        <input type="text" name="author" placeholder="author name" value="{{$post[0]->author}}" required />
					<div class="img-prev">
						<label>{{ __('partybooker-cp.main_img')}}</label>
						<input type="file" name="main-img" id="main-img" />
						<input type="text" name="main-img-old" value="{{$post[0]->main_img}}" hidden />
						<img src="{{ asset('storage/posts/'.$post[0]->main_img) }}" alr="preview" />
					</div>
                                        <input type="text" name="main_img_alt"  placeholder="Image alt" value="{{$post[0]->main_img_alt}}"  />
					<input type="text" name="main_img_alt_fr"  placeholder="Image alt FR" value="{{$post[0]->main_img_alt_fr}}"  />

                                        <!--<div class="img-prev">
						<label>{{ __('partybooker-cp.sec_img')}}</label>
						<input type="file" name="sec-img" id="sec-img" />
						<input type="text" name="sec-img-old" class="sec-img" value="{{$post[0]->sec_img}}" hidden />
						@if ($post[0]->sec_img)
							<img src="{{ asset('storage/posts/'.$post[0]->sec_img) }}" alr="preview" />
							<div class="del"></div>
						@else
							<img src="" alr="preview" />
							<div class="del" style="display:none"></div>
						@endif
					</div>-->
				</div>
				<div class="col-md-6 col-lg-7">
					<div class="lang-nav">
						<ul>
							<li lan="en">En</li>
							<li lan="fr">Fr</li>
						</ul>
					</div>
					<div class="terms-en lang-tab" lan="en">
						<input type="text" name="title_en" class="post-title" placeholder="{{ __('partybooker-cp.post_title')}}" value="{{$post[0]->title_en}}" required />
						<textarea name="post_en" id="post_en" class="post-text" required >{{$post[0]->article_en}}</textarea>
					</div>
					<div class="terms-fr lang-tab" lan="fr">
						<input type="text" name="title_fr" class="post-title" placeholder="{{ __('partybooker-cp.post_title')}}" value="{{$post[0]->title_fr}}" required />
						<textarea name="post_fr" id="post_fr" class="post-text" required >{{$post[0]->article_fr}}</textarea>
					</div>
				</div>

				<div class="col-md-3 col-lg-2 border-left">
					<div class="messages">
						<div class="success">{{ __('partybooker-cp.edit_success')}}</div>
						<div class="error">{{ __('partybooker-cp.edit_error')}}</div>
					</div>
					<button id="btn-post">{{ __('partybooker-cp.save')}}</button>

					<div class="status">
						<ul class="control">
							@if ($post[0]->status == 0)
								<li class="public">{{ __('partybooker-cp.not_published')}}</li>
								<li><span id="publish">{{ __('partybooker-cp.publish_it')}}</span></li>
							@else
								<li class="public">{{ __('partybooker-cp.published')}}</li>
								<li>{{ __('partybooker-cp.make')}} <span id="draft">{{ __('partybooker-cp.draft')}}</span></li>
							@endif
							<li id="delete"><a href="#">{{ __('partybooker-cp.delete')}}</a></li>
						</ul>
						<ul ln="en" class="st">
							<label>EN</label>
							<li item="title">{{ __('partybooker-cp.title')}} <span class="ok">OK</span></li>
							<li class="post en" item="post">{{ __('partybooker-cp.post')}} <span class="ok">OK</span></li>
						</ul>
						<ul ln="fr" class="st">
							<label>FR</label>
							<li item="title">{{ __('partybooker-cp.title')}} <span class="ok">OK</span></li>
							<li class="post fr" item="post">{{ __('partybooker-cp.post')}} <span class="ok">OK</span></li>
						</ul>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@include('admin.popups.remove-post')
@endsection
