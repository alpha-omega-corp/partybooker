<?php


use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as Trail;

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

