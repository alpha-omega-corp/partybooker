<?php


use App\Models\Advert;
use App\Models\AppPost;
use App\Models\Company;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as Trail;

Breadcrumbs::for('home', function (Trail $trail) {
    $trail->push(__('nav.home'), route(__('route.home')));
});

Breadcrumbs::for('about', function (Trail $trail) {
    $trail->parent('home');
    $trail->push(__('nav.about'), route(__('route.about')));
});

Breadcrumbs::for('partnership', function (Trail $trail) {
    $trail->parent('home');
    $trail->push(__('nav.partnership'), route(__('route.partnership')));
});

Breadcrumbs::for('blog', function (Trail $trail) {
    $trail->parent('home');
    $trail->push(__('nav.blog'), route(__('route.blog')));
});

Breadcrumbs::for('faq', function (Trail $trail) {
    $trail->parent('home');
    $trail->push(__('nav.faq'), route(__('route.faq')));
});


Breadcrumbs::for('post', function (Trail $trail, AppPost $post) {
    $trail->parent('blog');
    $trail->push($post->locale->title, route(__('route.post'), ['post' => $post->locale]));
});

Breadcrumbs::for('company', function (Trail $trail, Company $company) {
    $trail->parent('home');

    $trail->push($company->name, route('guest.company.show', [
        'company' => $company->slug
    ]));
});

Breadcrumbs::for('admin', function (Trail $trail) {
    $trail->push(__('nav.admin'), route(__('route.admin')));
});

Breadcrumbs::for('admin.partners', function (Trail $trail) {
    $trail->parent('admin');
    $trail->push(__('nav.admin.partners'), route(__('route.admin-partners')));
});

Breadcrumbs::for('admin.content', function (Trail $trail) {
    $trail->parent('admin');
    $trail->push(__('nav.admin.content'), route(__('route.admin-content')));
});

Breadcrumbs::for('admin.categories', function (Trail $trail) {
    $trail->parent('admin');
    $trail->push(__('nav.admin.categories'), route(__('route.admin-categories')));
});

Breadcrumbs::for('admin.plans', function (Trail $trail) {
    $trail->parent('admin');
    $trail->push(__('nav.admin.plans'), route(__('route.admin-plans')));
});

Breadcrumbs::for('admin.forms', function (Trail $trail) {
    $trail->parent('admin');
    $trail->push(__('nav.admin.forms'), route(__('route.admin-forms')));
});

Breadcrumbs::for('admin.messages', function (Trail $trail) {
    $trail->parent('admin');
    $trail->push(__('nav.admin.messages'), route(__('route.admin-messages')));
});

Breadcrumbs::for('advert', function (Trail $trail, Advert $advert) {
    $trail->parent('company', $advert->company);

    $trail->push($advert->locale->title, route(__('route.advert'), [
        'company' => $advert->company->slug,
        'category' => $advert->category->locale
    ]));
});

Breadcrumbs::for('listing', function (Trail $trail, array $segments) {
    $trail->parent('home');

    $slugs = [];

    foreach ($segments as $key => $segment) {
        if ($key === 0) {
            $trail->push($segment, route(__('route.listing')));
            continue;
        }
        $slugs[] = $segment;
    }

    foreach ($segments as $key => $segment) {
        if ($key === 0) {
            continue;
        }

        $trail->push($segment, route(__('route.listing'), $slugs[0], $slugs[1] ?? null));
    }
});

