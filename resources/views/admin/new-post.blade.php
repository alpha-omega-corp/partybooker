@extends('admin.admin')

@section('page')
page="post"
@endsection

@section('title')
<title>{{ __('partybooker-cp.add_new_article')}} | {{ __('partybooker-cp.www')}}</title>
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
<div id="page" class="post">
	<div class="container">
		<form method="POST" id="post" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/create-post')}}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-3 border-right">
					<input type="text" name="slug" class="post-slug" placeholder="slug" required />
                                        <input type="text" name="author"  placeholder="author name" required />
					<div class="img-prev">
						<label>{{ __('partybooker-cp.main_img')}}</label>
						<input type="file" name="main-img" id="main-img" required />
					</div>
                                        <input type="text" name="main_img_alt" placeholder="Image alt" value=""/>
                                        <input type="text" name="main_img_alt_fr" placeholder="Image alt FR" value=""/>
				</div>
				<div class="col-md-6 col-lg-7">	
					<div class="lang-nav">
						<ul>
							<li lan="en">En</li>
							<li lan="fr">Fr</li>
						</ul>
					</div>
					<div class="terms-en lang-tab" lan="en">
						<input type="text" name="title_en" class="post-title" placeholder="{{ __('partybooker-cp.post_title')}}" required />
						<textarea name="post_en" class="post-text" required ></textarea>
					</div>
					<div class="terms-fr lang-tab" lan="fr">
						<input type="text" name="title_fr" class="post-title" placeholder="{{ __('partybooker-cp.post_title')}}" required />
						<textarea name="post_fr" class="post-text" required ></textarea>
					</div>
				</div>
			
				<div class="col-md-3 col-lg-2 border-left">
					<div class="messages">
						<div class="success">{{ __('partybooker-cp.edit_success')}}</div>
						<div class="error">{{ __('partybooker-cp.edit_error')}}</div>
					</div>

					<button type="submit" id="btn-post">{{ __('partybooker-cp.save_publish')}}</button>
					
					<div class="status">
						<ul ln="en" class="st">
							<label>EN</label>
							<li class="title en" item="title">{{ __('partybooker-cp.title')}} <span>NaN</span></li>
							<li class="post en" item="post">{{ __('partybooker-cp.post')}} <span>NaN</span></li>
						</ul>
						<ul ln="fr" class="st">
							<label>FR</label>
							<li class="title fr" item="title">{{ __('partybooker-cp.title')}} <span>NaN</span></li>
							<li class="post fr" item="post">{{ __('partybooker-cp.post')}} <span>NaN</span></li>
						</ul>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
