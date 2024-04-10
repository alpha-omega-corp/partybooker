<?php


use App\Models\AppPost;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as Trail;

Breadcrumbs::for('home', function (Trail $trail) {
    $trail->push(__('nav.home'), route('guest.home.index'));
});

Breadcrumbs::for('about', function (Trail $trail) {
    $trail->parent('home');
    $trail->push(__('nav.about'), route('guest.home.about'));
});

Breadcrumbs::for('partnership', function (Trail $trail) {
    $trail->parent('home');
    $trail->push(__('nav.partnership'), route('guest.home.partnership'));
});

Breadcrumbs::for('blog', function (Trail $trail) {
    $trail->parent('home');
    $trail->push(__('nav.blog'), route('guest.home.blog'));
});

Breadcrumbs::for('faq', function (Trail $trail) {
    $trail->parent('home');
    $trail->push(__('nav.faq'), route('guest.home.faq'));
});


Breadcrumbs::for('post', function (Trail $trail, AppPost $post) {
    $trail->parent('blog');
    $trail->push($post->locale->title, route('guest.home.post', ['post' => $post]));
});

Breadcrumbs::for('listing', function (Trail $trail, array $segments) {
    $slugs = [];

    foreach ($segments as $key => $segment) {
        if ($key === 0) {
            $trail->push($segment, route('guest.listing.index'));
            continue;
        }
        $slugs[] = $segment;
    }

    foreach ($segments as $key => $segment) {
        if ($key === 0) {
            continue;
        }

        $trail->push($segment, route('guest.listing.index', $slugs[0], $slugs[1] ?? null));
    }
});

