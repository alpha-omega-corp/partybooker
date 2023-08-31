{{ Request::header('Content-Type : text/xml') }}
<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	@foreach ($categories as $category)
		<url>
			@if($lang == 'en')
				<loc>{{ url('/en/listings/' . $category->locales()->where('lang',$lang)->first()->slug) }}</loc>
			@else
				<loc>{{ url('/annonces/' . $category->locales()->where('lang', $lang)->first()->slug) }}</loc>
			@endif
			<changefreq>monthly</changefreq>
			<priority>1</priority>
		</url>
		@foreach($category->subCategories as $subs)
			<url>
				@if($lang == 'en')
					<loc>{{ url('/en/listings/' . $category->locales()->where('lang', $lang)->first()->slug . '/' . $subs->locales()->where('lang', $lang)->first()->slug) }}</loc>
				@else
					<loc>{{ url('/annonces/' . $category->locales()->where('lang', $lang)->first()->slug . '/' . $subs->locales()->where('lang', $lang)->first()->slug) }}</loc>
				@endif
				<changefreq>monthly</changefreq>
				<priority>1</priority>
			</url>
		@endforeach
	@endforeach

	@foreach ($articles as $article)
		<url>
			<loc>{{ url(($lang == 'en' ? '/en/blog/' : '/blog/') . $article->slug) }}</loc>
			<lastmod>{{ $article->updated }}</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
		</url>
	@endforeach
</urlset>
