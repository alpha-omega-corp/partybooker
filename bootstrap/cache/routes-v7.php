<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/stripe/webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier.webhook',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DNnA4dqWLfcRLvLy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/exceptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jOmK8P9Jz0sAPSxQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/dumps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OCjr5J3RYCErm2zL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IsXvBiTOgL5MvUSj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GZjLTULIwP5wpW1y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ksavkPmN5Pv5Y2yi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/batches' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NVFeklLqNoe6GSuE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KnTOPY3FwHBKMx45',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/gates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f78P69SFOhbxkRor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vuMaeiKSl58LPZCP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/queries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uxhxdZSAMfmyQhCp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/models' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DriR6upwbbcvvsJg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cP6taE8UaP6IQCnI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/views' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FgZP5TTz98Rduby9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/commands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::raIAVaTVL6jpKLIF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6TT7Jdt5Uwy4hG2l',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/redis' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e3R7lYderIVrgqEU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/client-requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::urGRMDqFKTjOlYqF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/monitored-tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IqKKtHZHQzITEHCD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SwzKyarJfUtDb5me',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/monitored-tags/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jiKwLgWiVzht78IM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/toggle-recording' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b7pKXv6lId7jIx8Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/telescope/telescope-api/entries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e7coTMWtqF1ECdET',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZK2ffBCYLzRyhXp9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::voiBXKf75lVswb2B',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/partner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QPqWB5pCAUKNozzV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/partner/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PPlwe3NnadvCsmFP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/listings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bbBfZnl1kQFZCiRQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/listings-filtered' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::031i4VIYNgwcTg90',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/aboutus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cqzZL7xJyw57LDMW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/partner-terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BCgCY48zDP6BjfSp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/sitemap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1EDbZSqELRersQUU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d4waALE540LSYbk1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/commentaires' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1bC40Ib9eFaAkiYJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partenaire' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QZlTD6jFXfrUu0fp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partenaire/inscription' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DagNfQLc02U6fgtG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/annonces' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9U4iYaiU4qL2jlj1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/annonces-filtered' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qtxR8qWDR5GHmxtL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/a-propos-de-nous' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nJqRwtLUUiPrnWAT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/conditions-generales-partnaires' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3yGbS3ZkckyNHTuU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/plan-du-site' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UiguHe7rKGuG10O0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rfXQWDDwJxErvuN3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7DJJMBdD1EVrVhwp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wbNaCGlPXeZ3i9Cu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dLifegOSEC8zGwlR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner/reg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M0kQO1R9R8qEwEqe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JhBnC4XTH0KEF54i',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/leave-phone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'question.phone',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f7lf59XIhWlcWR9W',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MnnLbm74xJohkmJg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZQiXTFIWsN3mEfaQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rQD81FpvdTlfrnZR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IipxYBaZ9hmAOmO9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aSgj4IrBhZf7bqbV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email-verifyed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WGAWclqrCF2BJ78y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email-verification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rzUdXF4hHgPIQD9I',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-event-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-et-admin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/top-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'top-service.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-image-alt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'alt.update.admin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/top-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'top-services',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oouyI3ahLDJVwFcF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/listing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bwQLoNIw3QBzz1iz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d0t1a87cS9hGXtID',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/blog/new-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I0C4cuz2YkyzrXC1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FeEpHEP5lmBUZdfE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cp-stripe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/update-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plan.update.admin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/add-new-partner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.create.admin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/create-new-partner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EU459KCMgRss4kCj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GzhjQbIoxJFBnO5r',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/setting/admin-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W2P5qo4BLc58Ykej',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/setting/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nGDSbRwdIBV8XL2n',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/setting/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k6SFLEk8sSaF28SH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/setting/user-terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V53sWVMm4ps6bgTy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/setting/partner-terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8tanvTgLKd2MwBtc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EiHbcucf52AH91Wf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/add-new-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ALRbhErmG1CSwZU9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T18j7AfJAy7RggtU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::trwautbU31oWf2lw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lBiB9vV7u21pY9Ok',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-phone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k4vU4vMP4cB0qwJP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-fb' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l8INQH5Lv5EBtqDV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-ln' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BPlfmojwsv1czlWn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-gl' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i1GxSoi0l1PpLhST',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-tw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eI0haRYDefLZQzNU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-inst' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5lvO8wOpNR7auu4q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-user-terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EnkgDm3zr6cY1Za7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/settings/edit-service-terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6XW04GT8eh1HuRs4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/faq/add-new-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LFV4OmrCINhYmHEA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/faq/del-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f4xL3LpH1czapqV5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/faq/edit-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Gcanv3cYkCqN1RY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/read-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sDaIOApqLg1kQFNF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/read-direct-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gM0TSOHNYmODPl1K',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/blog/create-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oErTr18qDrXSkYmW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/draft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DvcZs0ZId0pwExw0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/publish' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4ZhRk5gCFJRlgbda',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/blog/edit-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wzn8Ik2bgA4jU1sb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/create-advert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vMKOfdEiuxxtPsiW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/admin/set-discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::buGI4Xs5S5uOQ2Bt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/change-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NaX8InnTrPbAmK85',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/set-commission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::erpoDuY6IGgkxNFR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/get-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FnfnUb9sn5U2A1W8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/set-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SoXadwrWVOo75sOY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rhV1YnOrMKd3QPHU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.update.admin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-company-location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TL1wbyWY3dJxRwZC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-company-description' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company-description.update.admin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-www' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NQYxLAWvs8rWKPfw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-seo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bj2K8wsEXuusS2kM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-images-alt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VqxiL9AfktLcpxIu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-option' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'option.update.admin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QM2zQFdjG3uqJE7L',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bTZcVyzdpAWg3frf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-specialties' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l9ejcDwHxVtoNRGS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-food' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L8izZVEH9STRZ0vF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/edit-vip-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h8ATmklSxjUM3VsN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/del-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kvvy4H1OVwmt4hfI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/del-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NmF9nWII3HBVtyTH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/publish' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lSdsaalGGvjIqiuM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/partner-cp/vip-plan-set' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ygnRhZiKEu4gGFj8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/service-images/thumbnail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thumbnail.update.admin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/swisswin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::au1BYoJKPuCN9qtJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/swisswin/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I4YIsH35AfjW5a9e',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/swisswin/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xmDuGZaAtEoHhwFn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cp/adverts/del-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JvmogBVsmCZYap5F',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-event-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-et',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-image-alt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'alt.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service-images/thumbnail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thumbnail.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/create-advert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s01whA37l48OEGvU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner-contact',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GmBPro8bv5CSRY4r',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-company' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-company-description' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'company-description.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-company-location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DMT61Wwm8e8f8LLz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-www' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WDZtuqvFRVadHOPH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-option' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'option.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c0kwdduBI9fiGJQO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5emqdoJedDJNMD1o',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/select-free-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YqPEDtqyLThWco9e',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZN4gsrtWLBoUTlUL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-specialties' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RtQ9HE9kltPiGx0M',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-other' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3kRBSqviTzEuXIGH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-food' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Zr8CgsJORDgWsnC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/del-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D7A7egHqQtRd5S6B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/del-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J51p5LNgg77iOngr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/publish' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0ftjOcztTAhJ2cjh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/payment/cash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KBDQi1wUmv2oEofc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/payment/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rQJBScBaOePdtpma',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/payment/card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9teBPqlevOgCjBXJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/vip-plan-payment/card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pD0CeKx4gcPCBIsd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/edit-vip-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iImDIp3sE0gugokq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/payment/paypal-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/adverts/del-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SdTU5AQonILp5kP8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.start',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/switch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.switch',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/resume' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.resume',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partner-cp/update-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contacts/claim-requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WqcmMFosoWAQPEIN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/request/partner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'request.commission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/request/caterer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'request.caterer',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/request/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'request.general',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/stripe/payment/([^/]++)(*:31)|/telescope(?|/telescope\\-api/(?|m(?|ail/([^/]++)(?|(*:89)|/(?|preview(*:107)|download(*:123)))|odels/([^/]++)(*:147))|e(?|xceptions/([^/]++)(?|(*:181))|vents/([^/]++)(*:204))|logs/([^/]++)(*:226)|notifications/([^/]++)(*:256)|jobs/([^/]++)(*:277)|batches/([^/]++)(*:301)|gates/([^/]++)(*:323)|c(?|ache/([^/]++)(*:348)|ommands/([^/]++)(*:372)|lient\\-requests/([^/]++)(*:404))|queries/([^/]++)(*:429)|re(?|quests/([^/]++)(*:457)|dis/([^/]++)(*:477))|views/([^/]++)(*:500)|schedule/([^/]++)(*:525))|(?:/((?:.*)))?(*:548))|/livewire/preview\\-file/([^/]++)(*:589)|/([^/]++)/([^/]++)/(?|e(?|vent\\-place(*:634)|quipment(*:650)|ntertainment(*:670))|caterer(*:686)|wine(*:698))|/en/listing(?|s/([^/]++)(?|(*:734)|/([^/]++)(*:751))|/([^/]++)(*:769))|/a(?|nnonce(?|s/([^/]++)(?|(*:805)|/([^/]++)(*:822))|/([^/]++)(*:840))|uth/redirect/([^/]++)(*:870)|dverts/([^/]++)/(?|e(?|vent\\-places(*:913)|quipment(*:929)|ntertainment(*:949)|dit\\-(?|s(?|chedule(*:976)|pecialties(*:994))|rates(*:1008)|catering(*:1025)|general(*:1041)|other(*:1055)|food(*:1068)))|caterer(*:1086)|wine\\-lovers(*:1107)))|/c(?|allback/([^/]++)(*:1139)|p/(?|p(?|artner\\-cp/(?|([^/]++)/(?|advert(*:1189)|plans(*:1203))|edit\\-comment/([^/]++)(*:1235))|lan\\-options/([^/]++)(*:1266))|blog/(?|post/([^/]++)(*:1297)|remove/([^/]++)(*:1321))|s(?|e(?|ttings/plans/([^/]++)(?|(*:1363)|/remove(*:1379))|rvice\\-images/(?|upload/([^/]++)/([^/]++)(*:1430)|remove/([^/]++)(*:1454)))|wisswin/(?|remove/([^/]++)(*:1491)|([^/]++)(*:1508)))|adverts/([^/]++)/(?|e(?|vent\\-places(*:1555)|quipment(*:1572)|ntertainment(*:1593)|dit\\-(?|s(?|chedule(*:1621)|pecialties(*:1640))|rates(*:1655)|catering(*:1672)|general(*:1688)|other(*:1702)|food(*:1715)))|caterer(*:1733)|wine\\-lovers(*:1754))))|/p(?|a(?|ssword/reset/([^/]++)(*:1796)|rtner(?|/([^/]++)/plan\\-options(*:1836)|\\-cp/(?|([^/]++)/(?|advert(*:1871)|plans(*:1885)|faq(*:1897)|terms(*:1911))|edit\\-comment/([^/]++)(*:1943))))|lan\\-options/([^/]++)(*:1976))|/blog/([^/]++)(*:2000)|/s(?|itemap_([^/\\.]++)\\.xml(*:2036)|e(?|rvice\\-images/(?|upload/([^/]++)/([^/]++)(*:2090)|remove/([^/]++)(*:2114))|tlocale/([^/]++)(*:2140)))|/verify/([^/]++)/([^/]++)(*:2176)|/user/invoice/([^/]++)(*:2207)|/(.*)(*:2221))/?$}sDu',
    ),
    3 => 
    array (
      31 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier.payment',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      89 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AR2TOSvh8NYod5kM',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cPQbaZFg3rVrk2qa',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mm0dNtiGsdaWV7Wx',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JfUYXpYOTd6Q1pk6',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      181 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VkyBCAcsH6hWUDaj',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LssNtl8x4WJjopTt',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      204 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v4DzXOuPM9Iybk6Z',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::twdGq1TkGQAKTQOw',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2LN90c4V1FNGujCp',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n64fBNUEpbKI98sD',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LVbEfPkIRP4EZp6K',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8CIP8JjwsvVgwdT9',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6jOZDludCwmw7L4L',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4MwF8OnHrhEZvhYJ',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zQrmtlR3pWvOwxHo',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rTLH2Xcdq0SQKsnZ',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xx4ijTJfv3b38q4z',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iwjDnl6Ps8yqVKy1',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      500 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IvPgfwfFiAIe91U0',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bKKeFDMiLZoLIS8f',
          ),
          1 => 
          array (
            0 => 'telescopeEntryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      548 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'telescope',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      589 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create-event-place',
          ),
          1 => 
          array (
            0 => 'partnerId',
            1 => 'advertId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create-equipment',
          ),
          1 => 
          array (
            0 => 'partnerId',
            1 => 'advertId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      670 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create-entertainment',
          ),
          1 => 
          array (
            0 => 'partnerId',
            1 => 'advertId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create-caterer',
          ),
          1 => 
          array (
            0 => 'partnerId',
            1 => 'advertId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create-wine',
          ),
          1 => 
          array (
            0 => 'partnerId',
            1 => 'advertId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      734 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G0r76ZEmxPAi4BXv',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ehpilf0Tmedj6bQV',
          ),
          1 => 
          array (
            0 => 'cat',
            1 => 'subcat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uaKdhZWs2pLCoH0x',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1Je0HEkGeRO0xi6e',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      822 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hOAbLq0p7yUzzaBx',
          ),
          1 => 
          array (
            0 => 'cat',
            1 => 'subcat',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      840 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nBJFamxX72W7VcMG',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      870 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e9yBmec3wfE7ZXfY',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CH7f0UYwqZPzNHI5',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2xnYlwn9JXeCcpdU',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      949 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Huays1t3HPl1m9dG',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      976 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pQPQOyvytp1cxjeU',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      994 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WNlh65TwGTArRNcQ',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1008 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WaT5WfVlqWowGFvS',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1025 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B9wLc8D0ixCUrF7W',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1041 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::soSMS0xDfeA6s9jH',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N3xbDhQgolUo8Zis',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xGpwvKnTz3SthizG',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1086 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BrOpXps5uRUsHgEe',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9N7ytfu4y4ttTkEE',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::efd54TYgMoPNmLSu',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile-advert-admin',
          ),
          1 => 
          array (
            0 => 'id_partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile-plans-admin',
          ),
          1 => 
          array (
            0 => 'id_partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e5ACI4Riml7NFvAp',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6GW6EM5lCKSrIjZB',
          ),
          1 => 
          array (
            0 => 'idPartner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a7nOKX6yPTkoTcRF',
          ),
          1 => 
          array (
            0 => 'post_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ltv7o5fNBOPdqbqE',
          ),
          1 => 
          array (
            0 => 'postid',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u0nW7C5Q0eS9NYh8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hq5i0LuPYWAF8ZHL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vh7ePUjku594ye3k',
          ),
          1 => 
          array (
            0 => 'id_partner',
            1 => 'category',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MDPItFMUIq7mm92Q',
          ),
          1 => 
          array (
            0 => 'image_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iyiws2L21CMWdaxT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QjI2Wje0cEKNKBiB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XKIg8KaI9kwT37Xz',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Aoo89Pfe0oEOynFi',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0cqphVPzQGminuxB',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OD3q1dUhvpt7rd3l',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8QeEDUneaV8jRYco',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EI9lt0IvXud2cVrZ',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TB9oqhNL0pwcyaQg',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ep9CsuFvWdISvARv',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qBYtuNDDmoWqJ0G7',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fcS8tgusbX7WY3OD',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1733 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oihrbZe0Z2DWkZ4M',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1754 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3jNodNWw4rgadjMB',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aOTgKHrzjVSNtbrj',
          ),
          1 => 
          array (
            0 => 'id_partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1871 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile-advert',
          ),
          1 => 
          array (
            0 => 'id_partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile-plans',
          ),
          1 => 
          array (
            0 => 'id_partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1897 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E7Nj9DMaE0Ib0EMW',
          ),
          1 => 
          array (
            0 => 'id_partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1911 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6OTPsevLWqK5M52o',
          ),
          1 => 
          array (
            0 => 'id_partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1943 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2TlKtkgZWbNK1eS4',
          ),
          1 => 
          array (
            0 => 'advertId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1976 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sBxsFWmVtMyGJZ9P',
          ),
          1 => 
          array (
            0 => 'idPartner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2000 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kUS6YF3QK1xZhtlY',
          ),
          1 => 
          array (
            0 => 'post_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2036 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f3Amma7NQj52YZ2d',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AEbcSynK0XXUCJgr',
          ),
          1 => 
          array (
            0 => 'id_partner',
            1 => 'category',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2114 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OgSBZShieZwX48lx',
          ),
          1 => 
          array (
            0 => 'image_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setlocale',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ryxbfEPJabgZFztu',
          ),
          1 => 
          array (
            0 => 'email',
            1 => 'email_hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FyUk808yg4Q1p0TC',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'cashier.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe/payment/{id}',
      'action' => 
      array (
        'uses' => 'Laravel\\Cashier\\Http\\Controllers\\PaymentController@show',
        'controller' => 'Laravel\\Cashier\\Http\\Controllers\\PaymentController@show',
        'as' => 'cashier.payment',
        'namespace' => 'Laravel\\Cashier\\Http\\Controllers',
        'prefix' => 'stripe',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashier.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stripe/webhook',
      'action' => 
      array (
        'uses' => 'Laravel\\Cashier\\Http\\Controllers\\WebhookController@handleWebhook',
        'controller' => 'Laravel\\Cashier\\Http\\Controllers\\WebhookController@handleWebhook',
        'as' => 'cashier.webhook',
        'namespace' => 'Laravel\\Cashier\\Http\\Controllers',
        'prefix' => 'stripe',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DNnA4dqWLfcRLvLy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/mail',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::DNnA4dqWLfcRLvLy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AR2TOSvh8NYod5kM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/mail/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::AR2TOSvh8NYod5kM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cPQbaZFg3rVrk2qa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/mail/{telescopeEntryId}/preview',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailHtmlController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailHtmlController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::cPQbaZFg3rVrk2qa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mm0dNtiGsdaWV7Wx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/mail/{telescopeEntryId}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MailEmlController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MailEmlController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::mm0dNtiGsdaWV7Wx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jOmK8P9Jz0sAPSxQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/exceptions',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::jOmK8P9Jz0sAPSxQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VkyBCAcsH6hWUDaj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/exceptions/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::VkyBCAcsH6hWUDaj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LssNtl8x4WJjopTt' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'telescope/telescope-api/exceptions/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@update',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ExceptionController@update',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::LssNtl8x4WJjopTt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OCjr5J3RYCErm2zL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/dumps',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\DumpController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\DumpController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::OCjr5J3RYCErm2zL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IsXvBiTOgL5MvUSj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/logs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::IsXvBiTOgL5MvUSj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::twdGq1TkGQAKTQOw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/logs/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\LogController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::twdGq1TkGQAKTQOw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GZjLTULIwP5wpW1y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/notifications',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::GZjLTULIwP5wpW1y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2LN90c4V1FNGujCp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/notifications/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\NotificationsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::2LN90c4V1FNGujCp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ksavkPmN5Pv5Y2yi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/jobs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::ksavkPmN5Pv5Y2yi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n64fBNUEpbKI98sD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/jobs/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::n64fBNUEpbKI98sD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NVFeklLqNoe6GSuE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/batches',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::NVFeklLqNoe6GSuE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LVbEfPkIRP4EZp6K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/batches/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueueBatchesController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::LVbEfPkIRP4EZp6K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KnTOPY3FwHBKMx45' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/events',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::KnTOPY3FwHBKMx45',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v4DzXOuPM9Iybk6Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/events/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\EventsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::v4DzXOuPM9Iybk6Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f78P69SFOhbxkRor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/gates',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::f78P69SFOhbxkRor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8CIP8JjwsvVgwdT9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/gates/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\GatesController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::8CIP8JjwsvVgwdT9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vuMaeiKSl58LPZCP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::vuMaeiKSl58LPZCP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6jOZDludCwmw7L4L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/cache/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CacheController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::6jOZDludCwmw7L4L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uxhxdZSAMfmyQhCp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/queries',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::uxhxdZSAMfmyQhCp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rTLH2Xcdq0SQKsnZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/queries/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\QueriesController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::rTLH2Xcdq0SQKsnZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DriR6upwbbcvvsJg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/models',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::DriR6upwbbcvvsJg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JfUYXpYOTd6Q1pk6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/models/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ModelsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::JfUYXpYOTd6Q1pk6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cP6taE8UaP6IQCnI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/requests',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::cP6taE8UaP6IQCnI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xx4ijTJfv3b38q4z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/requests/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RequestsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::xx4ijTJfv3b38q4z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FgZP5TTz98Rduby9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/views',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::FgZP5TTz98Rduby9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IvPgfwfFiAIe91U0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/views/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ViewsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::IvPgfwfFiAIe91U0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::raIAVaTVL6jpKLIF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/commands',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::raIAVaTVL6jpKLIF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4MwF8OnHrhEZvhYJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/commands/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\CommandsController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::4MwF8OnHrhEZvhYJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6TT7Jdt5Uwy4hG2l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/schedule',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::6TT7Jdt5Uwy4hG2l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bKKeFDMiLZoLIS8f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/schedule/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ScheduleController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::bKKeFDMiLZoLIS8f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e3R7lYderIVrgqEU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/redis',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::e3R7lYderIVrgqEU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iwjDnl6Ps8yqVKy1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/redis/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RedisController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::iwjDnl6Ps8yqVKy1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::urGRMDqFKTjOlYqF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/client-requests',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::urGRMDqFKTjOlYqF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zQrmtlR3pWvOwxHo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/client-requests/{telescopeEntryId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@show',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\ClientRequestController@show',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::zQrmtlR3pWvOwxHo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IqKKtHZHQzITEHCD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/telescope-api/monitored-tags',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::IqKKtHZHQzITEHCD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SwzKyarJfUtDb5me' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/monitored-tags',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@store',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@store',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::SwzKyarJfUtDb5me',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jiKwLgWiVzht78IM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/monitored-tags/delete',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@destroy',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\MonitoredTagController@destroy',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::jiKwLgWiVzht78IM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b7pKXv6lId7jIx8Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'telescope/telescope-api/toggle-recording',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\RecordingController@toggle',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\RecordingController@toggle',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::b7pKXv6lId7jIx8Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e7coTMWtqF1ECdET' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'telescope/telescope-api/entries',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\EntriesController@destroy',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\EntriesController@destroy',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'generated::e7coTMWtqF1ECdET',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'telescope' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'telescope/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'telescope',
        'uses' => 'Laravel\\Telescope\\Http\\Controllers\\HomeController@index',
        'controller' => 'Laravel\\Telescope\\Http\\Controllers\\HomeController@index',
        'namespace' => 'Laravel\\Telescope\\Http\\Controllers',
        'prefix' => 'telescope',
        'where' => 
        array (
        ),
        'as' => 'telescope',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/update',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'controller' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'livewire.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZK2ffBCYLzRyhXp9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'controller' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'as' => 'generated::ZK2ffBCYLzRyhXp9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::voiBXKf75lVswb2B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009b50000000000000000";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::voiBXKf75lVswb2B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create-event-place' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{partnerId}/{advertId}/event-place',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'advertisement',
        ),
        'uses' => 'App\\Livewire\\CreateEventPlace@__invoke',
        'controller' => 'App\\Livewire\\CreateEventPlace',
        'namespace' => 'App\\Livewire',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create-event-place',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create-caterer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{partnerId}/{advertId}/caterer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'advertisement',
        ),
        'uses' => 'App\\Livewire\\CreateCaterer@__invoke',
        'controller' => 'App\\Livewire\\CreateCaterer',
        'namespace' => 'App\\Livewire',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create-caterer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create-equipment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{partnerId}/{advertId}/equipment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'advertisement',
        ),
        'uses' => 'App\\Livewire\\CreateEquipment@__invoke',
        'controller' => 'App\\Livewire\\CreateEquipment',
        'namespace' => 'App\\Livewire',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create-equipment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create-entertainment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{partnerId}/{advertId}/entertainment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'advertisement',
        ),
        'uses' => 'App\\Livewire\\CreateEntertainment@__invoke',
        'controller' => 'App\\Livewire\\CreateEntertainment',
        'namespace' => 'App\\Livewire',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create-entertainment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create-wine' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{partnerId}/{advertId}/wine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'advertisement',
        ),
        'uses' => 'App\\Livewire\\CreateWine@__invoke',
        'controller' => 'App\\Livewire\\CreateWine',
        'namespace' => 'App\\Livewire',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create-wine',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QPqWB5pCAUKNozzV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/partner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@partner',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@partner',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::QPqWB5pCAUKNozzV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PPlwe3NnadvCsmFP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/partner/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::PPlwe3NnadvCsmFP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'partner-register',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bbBfZnl1kQFZCiRQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/listings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ListingController@index',
        'controller' => '\\App\\Http\\Controllers\\Web\\ListingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::bbBfZnl1kQFZCiRQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::031i4VIYNgwcTg90' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/listings-filtered',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ListingController@filtered',
        'controller' => '\\App\\Http\\Controllers\\Web\\ListingController@filtered',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::031i4VIYNgwcTg90',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G0r76ZEmxPAi4BXv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/listings/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ListingController@category',
        'controller' => '\\App\\Http\\Controllers\\Web\\ListingController@category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::G0r76ZEmxPAi4BXv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ehpilf0Tmedj6bQV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/listings/{cat}/{subcat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ListingController@subcategory',
        'controller' => '\\App\\Http\\Controllers\\Web\\ListingController@subcategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::Ehpilf0Tmedj6bQV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uaKdhZWs2pLCoH0x' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/listing/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ListingController@service',
        'controller' => '\\App\\Http\\Controllers\\Web\\ListingController@service',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::uaKdhZWs2pLCoH0x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cqzZL7xJyw57LDMW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/aboutus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@aboutus',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@aboutus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::cqzZL7xJyw57LDMW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BCgCY48zDP6BjfSp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/partner-terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@partnerterms',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@partnerterms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::BCgCY48zDP6BjfSp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1EDbZSqELRersQUU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\PageController@siteMap',
        'controller' => '\\App\\Http\\Controllers\\Web\\PageController@siteMap',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::1EDbZSqELRersQUU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d4waALE540LSYbk1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::d4waALE540LSYbk1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'general-comments',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1bC40Ib9eFaAkiYJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'commentaires',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1bC40Ib9eFaAkiYJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'general-comments',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QZlTD6jFXfrUu0fp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partenaire',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@partner',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@partner',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QZlTD6jFXfrUu0fp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DagNfQLc02U6fgtG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partenaire/inscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DagNfQLc02U6fgtG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'partner-register',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9U4iYaiU4qL2jlj1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'annonces',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ListingController@index',
        'controller' => '\\App\\Http\\Controllers\\Web\\ListingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9U4iYaiU4qL2jlj1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qtxR8qWDR5GHmxtL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'annonces-filtered',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ListingController@filtered',
        'controller' => '\\App\\Http\\Controllers\\Web\\ListingController@filtered',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qtxR8qWDR5GHmxtL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1Je0HEkGeRO0xi6e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'annonces/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ListingController@category',
        'controller' => '\\App\\Http\\Controllers\\Web\\ListingController@category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1Je0HEkGeRO0xi6e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hOAbLq0p7yUzzaBx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'annonces/{cat}/{subcat}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ListingController@subcategory',
        'controller' => '\\App\\Http\\Controllers\\Web\\ListingController@subcategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hOAbLq0p7yUzzaBx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nBJFamxX72W7VcMG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'annonce/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ListingController@service',
        'controller' => '\\App\\Http\\Controllers\\Web\\ListingController@service',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nBJFamxX72W7VcMG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nJqRwtLUUiPrnWAT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'a-propos-de-nous',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@aboutus',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@aboutus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nJqRwtLUUiPrnWAT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3yGbS3ZkckyNHTuU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'conditions-generales-partnaires',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@partnerterms',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@partnerterms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3yGbS3ZkckyNHTuU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UiguHe7rKGuG10O0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'plan-du-site',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\PageController@siteMap',
        'controller' => '\\App\\Http\\Controllers\\Web\\PageController@siteMap',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UiguHe7rKGuG10O0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FyUk808yg4Q1p0TC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:60:"function () {
        return \\response()->view(\'404\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008900000000000000000";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FyUk808yg4Q1p0TC',
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e9yBmec3wfE7ZXfY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/redirect/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialController@redirect',
        'controller' => 'App\\Http\\Controllers\\SocialController@redirect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::e9yBmec3wfE7ZXfY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::efd54TYgMoPNmLSu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialController@callback',
        'controller' => 'App\\Http\\Controllers\\SocialController@callback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::efd54TYgMoPNmLSu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@home',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@home',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rfXQWDDwJxErvuN3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@userterms',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@userterms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rfXQWDDwJxErvuN3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7DJJMBdD1EVrVhwp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@faq',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@faq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7DJJMBdD1EVrVhwp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wbNaCGlPXeZ3i9Cu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@contacts',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@contacts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wbNaCGlPXeZ3i9Cu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dLifegOSEC8zGwlR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@blog',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@blog',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dLifegOSEC8zGwlR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kUS6YF3QK1xZhtlY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{post_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@post',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kUS6YF3QK1xZhtlY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M0kQO1R9R8qEwEqe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner/reg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@register',
        'controller' => 'App\\Http\\Controllers\\partnerController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::M0kQO1R9R8qEwEqe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JhBnC4XTH0KEF54i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@subscribe',
        'controller' => 'App\\Http\\Controllers\\ajaxController@subscribe',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JhBnC4XTH0KEF54i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'question.phone' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'leave-phone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\mainWebsite@phoneQuestion',
        'controller' => 'App\\Http\\Controllers\\mainWebsite@phoneQuestion',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'question.phone',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f7lf59XIhWlcWR9W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@contact',
        'controller' => 'App\\Http\\Controllers\\ajaxController@contact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::f7lf59XIhWlcWR9W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MnnLbm74xJohkmJg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'rate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@rate',
        'controller' => 'App\\Http\\Controllers\\ajaxController@rate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MnnLbm74xJohkmJg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZQiXTFIWsN3mEfaQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@statClicks',
        'controller' => 'App\\Http\\Controllers\\ajaxController@statClicks',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZQiXTFIWsN3mEfaQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f3Amma7NQj52YZ2d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap_{lang}.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteMapController@sitemap',
        'controller' => 'App\\Http\\Controllers\\SiteMapController@sitemap',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::f3Amma7NQj52YZ2d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rQD81FpvdTlfrnZR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rQD81FpvdTlfrnZR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IipxYBaZ9hmAOmO9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IipxYBaZ9hmAOmO9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ryxbfEPJabgZFztu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify/{email}/{email_hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\emailVerify@index',
        'controller' => 'App\\Http\\Controllers\\emailVerify@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ryxbfEPJabgZFztu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sBxsFWmVtMyGJZ9P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'plan-options/{idPartner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\PlanOptionController@getPlanOptionsAjax',
        'controller' => '\\App\\Http\\Controllers\\Web\\PlanOptionController@getPlanOptionsAjax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sBxsFWmVtMyGJZ9P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aSgj4IrBhZf7bqbV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\CategoryController@getCategoriesAjax',
        'controller' => '\\App\\Http\\Controllers\\Web\\CategoryController@getCategoriesAjax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aSgj4IrBhZf7bqbV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aOTgKHrzjVSNtbrj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partner/{id_partner}/plan-options',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\PartnerController@getOptionsAjax',
        'controller' => '\\App\\Http\\Controllers\\Web\\PartnerController@getOptionsAjax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aOTgKHrzjVSNtbrj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WGAWclqrCF2BJ78y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email-verifyed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\emailVerify@verified',
        'controller' => 'App\\Http\\Controllers\\emailVerify@verified',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WGAWclqrCF2BJ78y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rzUdXF4hHgPIQD9I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email-verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'email-ok',
        ),
        'uses' => 'App\\Http\\Controllers\\emailVerify@verification',
        'controller' => 'App\\Http\\Controllers\\emailVerify@verification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rzUdXF4hHgPIQD9I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile-advert-admin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/partner-cp/{id_partner}/advert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@advert',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@advert',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile-advert-admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile-plans-admin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/partner-cp/{id_partner}/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@adminPlans',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@adminPlans',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile-plans-admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-et-admin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-event-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@updateEventTypes',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@updateEventTypes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-et-admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'top-service.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/top-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@updateTopServices',
        'controller' => 'App\\Http\\Controllers\\adminController@updateTopServices',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'top-service.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'alt.update.admin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-image-alt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\ProfileController@editImagesAlt',
        'controller' => 'App\\Http\\Controllers\\Web\\ProfileController@editImagesAlt',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'alt.update.admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@index',
        'controller' => 'App\\Http\\Controllers\\adminController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'top-services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/top-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@topServices',
        'controller' => 'App\\Http\\Controllers\\adminController@topServices',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'top-services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oouyI3ahLDJVwFcF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@messages',
        'controller' => 'App\\Http\\Controllers\\adminController@messages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oouyI3ahLDJVwFcF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bwQLoNIw3QBzz1iz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/listing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@listing',
        'controller' => 'App\\Http\\Controllers\\adminController@listing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bwQLoNIw3QBzz1iz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d0t1a87cS9hGXtID' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@blog',
        'controller' => 'App\\Http\\Controllers\\adminController@blog',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::d0t1a87cS9hGXtID',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a7nOKX6yPTkoTcRF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/blog/post/{post_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@post',
        'controller' => 'App\\Http\\Controllers\\adminController@post',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::a7nOKX6yPTkoTcRF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I0C4cuz2YkyzrXC1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/blog/new-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@newpost',
        'controller' => 'App\\Http\\Controllers\\adminController@newpost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::I0C4cuz2YkyzrXC1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FeEpHEP5lmBUZdfE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@faq',
        'controller' => 'App\\Http\\Controllers\\adminController@faq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FeEpHEP5lmBUZdfE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cp-stripe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@stripe',
        'controller' => 'App\\Http\\Controllers\\adminController@stripe',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cp-stripe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plan.update.admin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/update-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\ProfileController@updatePlan',
        'controller' => 'App\\Http\\Controllers\\Web\\ProfileController@updatePlan',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'plan.update.admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.create.admin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/add-new-partner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@addPartner',
        'controller' => 'App\\Http\\Controllers\\adminController@addPartner',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'partner.create.admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EU459KCMgRss4kCj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/create-new-partner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@createPartner',
        'controller' => 'App\\Http\\Controllers\\adminController@createPartner',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EU459KCMgRss4kCj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GzhjQbIoxJFBnO5r' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@removePartner',
        'controller' => 'App\\Http\\Controllers\\adminController@removePartner',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GzhjQbIoxJFBnO5r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W2P5qo4BLc58Ykej' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/setting/admin-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\settingPages@profile',
        'controller' => 'App\\Http\\Controllers\\settingPages@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::W2P5qo4BLc58Ykej',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nGDSbRwdIBV8XL2n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/setting/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\settingPages@plans',
        'controller' => 'App\\Http\\Controllers\\settingPages@plans',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nGDSbRwdIBV8XL2n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k6SFLEk8sSaF28SH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/setting/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\settingPages@contacts',
        'controller' => 'App\\Http\\Controllers\\settingPages@contacts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::k6SFLEk8sSaF28SH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V53sWVMm4ps6bgTy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/setting/user-terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\settingPages@userterms',
        'controller' => 'App\\Http\\Controllers\\settingPages@userterms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::V53sWVMm4ps6bgTy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8tanvTgLKd2MwBtc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/setting/partner-terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\settingPages@partnerterms',
        'controller' => 'App\\Http\\Controllers\\settingPages@partnerterms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8tanvTgLKd2MwBtc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EiHbcucf52AH91Wf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\editProfile@edit',
        'controller' => 'App\\Http\\Controllers\\editProfile@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EiHbcucf52AH91Wf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ALRbhErmG1CSwZU9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/add-new-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\PlanController@store',
        'controller' => 'App\\Http\\Controllers\\PlanController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ALRbhErmG1CSwZU9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u0nW7C5Q0eS9NYh8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/settings/plans/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\PlanController@readAjax',
        'controller' => 'App\\Http\\Controllers\\PlanController@readAjax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::u0nW7C5Q0eS9NYh8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hq5i0LuPYWAF8ZHL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/settings/plans/{id}/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\PlanController@delete',
        'controller' => 'App\\Http\\Controllers\\PlanController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Hq5i0LuPYWAF8ZHL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T18j7AfJAy7RggtU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\PlanController@update',
        'controller' => 'App\\Http\\Controllers\\PlanController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::T18j7AfJAy7RggtU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::trwautbU31oWf2lw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\editSettings@address',
        'controller' => 'App\\Http\\Controllers\\editSettings@address',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::trwautbU31oWf2lw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lBiB9vV7u21pY9Ok' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\editSettings@email',
        'controller' => 'App\\Http\\Controllers\\editSettings@email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lBiB9vV7u21pY9Ok',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k4vU4vMP4cB0qwJP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-phone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\editSettings@phone',
        'controller' => 'App\\Http\\Controllers\\editSettings@phone',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::k4vU4vMP4cB0qwJP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l8INQH5Lv5EBtqDV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-fb',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\editSettings@facebook',
        'controller' => 'App\\Http\\Controllers\\editSettings@facebook',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::l8INQH5Lv5EBtqDV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BPlfmojwsv1czlWn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-ln',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\editSettings@linkedin',
        'controller' => 'App\\Http\\Controllers\\editSettings@linkedin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BPlfmojwsv1czlWn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i1GxSoi0l1PpLhST' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-gl',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\editSettings@google',
        'controller' => 'App\\Http\\Controllers\\editSettings@google',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::i1GxSoi0l1PpLhST',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eI0haRYDefLZQzNU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-tw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\editSettings@twitter',
        'controller' => 'App\\Http\\Controllers\\editSettings@twitter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eI0haRYDefLZQzNU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5lvO8wOpNR7auu4q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-inst',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\editSettings@instagram',
        'controller' => 'App\\Http\\Controllers\\editSettings@instagram',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5lvO8wOpNR7auu4q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EnkgDm3zr6cY1Za7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-user-terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\editSettings@userterms',
        'controller' => 'App\\Http\\Controllers\\editSettings@userterms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EnkgDm3zr6cY1Za7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6XW04GT8eh1HuRs4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/settings/edit-service-terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\editSettings@serviceterms',
        'controller' => 'App\\Http\\Controllers\\editSettings@serviceterms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6XW04GT8eh1HuRs4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LFV4OmrCINhYmHEA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/faq/add-new-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\newFaq@create',
        'controller' => 'App\\Http\\Controllers\\newFaq@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LFV4OmrCINhYmHEA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f4xL3LpH1czapqV5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/faq/del-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\newFaq@remove',
        'controller' => 'App\\Http\\Controllers\\newFaq@remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::f4xL3LpH1czapqV5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Gcanv3cYkCqN1RY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/faq/edit-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\newFaq@edit',
        'controller' => 'App\\Http\\Controllers\\newFaq@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5Gcanv3cYkCqN1RY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sDaIOApqLg1kQFNF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'read-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@read',
        'controller' => 'App\\Http\\Controllers\\ajaxController@read',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sDaIOApqLg1kQFNF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gM0TSOHNYmODPl1K' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'read-direct-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@readDirectMessage',
        'controller' => 'App\\Http\\Controllers\\ajaxController@readDirectMessage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gM0TSOHNYmODPl1K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oErTr18qDrXSkYmW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/blog/create-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\newPost@create',
        'controller' => 'App\\Http\\Controllers\\newPost@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oErTr18qDrXSkYmW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DvcZs0ZId0pwExw0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'draft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@draft',
        'controller' => 'App\\Http\\Controllers\\ajaxController@draft',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DvcZs0ZId0pwExw0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4ZhRk5gCFJRlgbda' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@publish',
        'controller' => 'App\\Http\\Controllers\\ajaxController@publish',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4ZhRk5gCFJRlgbda',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ltv7o5fNBOPdqbqE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/blog/remove/{postid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\newPost@remove',
        'controller' => 'App\\Http\\Controllers\\newPost@remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Ltv7o5fNBOPdqbqE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wzn8Ik2bgA4jU1sb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/blog/edit-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\newPost@edit',
        'controller' => 'App\\Http\\Controllers\\newPost@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wzn8Ik2bgA4jU1sb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vMKOfdEiuxxtPsiW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/create-advert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@activateOption',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@activateOption',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vMKOfdEiuxxtPsiW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::buGI4Xs5S5uOQ2Bt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/admin/set-discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\adminController@setDiscount',
        'controller' => 'App\\Http\\Controllers\\adminController@setDiscount',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::buGI4Xs5S5uOQ2Bt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NaX8InnTrPbAmK85' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/change-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@ChangePlanByAdmin',
        'controller' => 'App\\Http\\Controllers\\partnerController@ChangePlanByAdmin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NaX8InnTrPbAmK85',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::erpoDuY6IGgkxNFR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/set-commission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\PartnerController@setCommission',
        'controller' => '\\App\\Http\\Controllers\\Web\\PartnerController@setCommission',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::erpoDuY6IGgkxNFR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FnfnUb9sn5U2A1W8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/get-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@getCategories',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@getCategories',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FnfnUb9sn5U2A1W8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SoXadwrWVOo75sOY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/set-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@setAdditionalCategories',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@setAdditionalCategories',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SoXadwrWVOo75sOY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rhV1YnOrMKd3QPHU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editContacts',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editContacts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rhV1YnOrMKd3QPHU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.update.admin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompany',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'company.update.admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TL1wbyWY3dJxRwZC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-company-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompanyLocation',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompanyLocation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TL1wbyWY3dJxRwZC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company-description.update.admin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-company-description',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompanyDescription',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompanyDescription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'company-description.update.admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NQYxLAWvs8rWKPfw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-www',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editWww',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editWww',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NQYxLAWvs8rWKPfw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bj2K8wsEXuusS2kM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-seo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editSeo',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editSeo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Bj2K8wsEXuusS2kM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VqxiL9AfktLcpxIu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-images-alt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editImagesAlt',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editImagesAlt',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VqxiL9AfktLcpxIu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'option.update.admin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-option',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\PlanOptionController@editOption',
        'controller' => '\\App\\Http\\Controllers\\Web\\PlanOptionController@editOption',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'option.update.admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QM2zQFdjG3uqJE7L' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@editCategory',
        'controller' => 'App\\Http\\Controllers\\partnerController@editCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QM2zQFdjG3uqJE7L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bTZcVyzdpAWg3frf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@editSchedule',
        'controller' => 'App\\Http\\Controllers\\partnerController@editSchedule',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bTZcVyzdpAWg3frf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l9ejcDwHxVtoNRGS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-specialties',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@editSpecialties',
        'controller' => 'App\\Http\\Controllers\\partnerController@editSpecialties',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::l9ejcDwHxVtoNRGS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L8izZVEH9STRZ0vF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-food',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@editFood',
        'controller' => 'App\\Http\\Controllers\\partnerController@editFood',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::L8izZVEH9STRZ0vF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h8ATmklSxjUM3VsN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-vip-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\VipPlanController@updateData',
        'controller' => 'App\\Http\\Controllers\\VipPlanController@updateData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::h8ATmklSxjUM3VsN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kvvy4H1OVwmt4hfI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/del-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@partnerDelfile',
        'controller' => 'App\\Http\\Controllers\\ajaxController@partnerDelfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kvvy4H1OVwmt4hfI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NmF9nWII3HBVtyTH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/del-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceImageController@remove',
        'controller' => 'App\\Http\\Controllers\\ServiceImageController@remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NmF9nWII3HBVtyTH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lSdsaalGGvjIqiuM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@partnerPublish',
        'controller' => 'App\\Http\\Controllers\\ajaxController@partnerPublish',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lSdsaalGGvjIqiuM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ygnRhZiKEu4gGFj8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/vip-plan-set',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\VipPlanPaymentController@setVipStatusAdmin',
        'controller' => 'App\\Http\\Controllers\\VipPlanPaymentController@setVipStatusAdmin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ygnRhZiKEu4gGFj8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vh7ePUjku594ye3k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/service-images/upload/{id_partner}/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceImageController@upload',
        'controller' => 'App\\Http\\Controllers\\ServiceImageController@upload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vh7ePUjku594ye3k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thumbnail.update.admin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/service-images/thumbnail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceImageController@thumbnail',
        'controller' => 'App\\Http\\Controllers\\ServiceImageController@thumbnail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thumbnail.update.admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MDPItFMUIq7mm92Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/service-images/remove/{image_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceImageController@remove',
        'controller' => 'App\\Http\\Controllers\\ServiceImageController@remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MDPItFMUIq7mm92Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::au1BYoJKPuCN9qtJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/swisswin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\SwisswinDirectoryController@swisswin',
        'controller' => 'App\\Http\\Controllers\\SwisswinDirectoryController@swisswin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::au1BYoJKPuCN9qtJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iyiws2L21CMWdaxT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/swisswin/remove/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\SwisswinDirectoryController@remove',
        'controller' => 'App\\Http\\Controllers\\SwisswinDirectoryController@remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iyiws2L21CMWdaxT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I4YIsH35AfjW5a9e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/swisswin/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\SwisswinDirectoryController@store',
        'controller' => 'App\\Http\\Controllers\\SwisswinDirectoryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::I4YIsH35AfjW5a9e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xmDuGZaAtEoHhwFn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/swisswin/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\SwisswinDirectoryController@update',
        'controller' => 'App\\Http\\Controllers\\SwisswinDirectoryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xmDuGZaAtEoHhwFn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QjI2Wje0cEKNKBiB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/swisswin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\SwisswinDirectoryController@getAjax',
        'controller' => 'App\\Http\\Controllers\\SwisswinDirectoryController@getAjax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QjI2Wje0cEKNKBiB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6GW6EM5lCKSrIjZB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cp/plan-options/{idPartner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\PlanOptionController@getPlanOptionsAjax',
        'controller' => '\\App\\Http\\Controllers\\Web\\PlanOptionController@getPlanOptionsAjax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6GW6EM5lCKSrIjZB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XKIg8KaI9kwT37Xz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/event-places',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\EventPlaceController@create',
        'controller' => '\\App\\Http\\Controllers\\Web\\EventPlaceController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XKIg8KaI9kwT37Xz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oihrbZe0Z2DWkZ4M' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/caterer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\CatererController@create',
        'controller' => '\\App\\Http\\Controllers\\Web\\CatererController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oihrbZe0Z2DWkZ4M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3jNodNWw4rgadjMB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/wine-lovers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\WineController@create',
        'controller' => '\\App\\Http\\Controllers\\Web\\WineController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3jNodNWw4rgadjMB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Aoo89Pfe0oEOynFi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/equipment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\EquipmentController@create',
        'controller' => '\\App\\Http\\Controllers\\Web\\EquipmentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Aoo89Pfe0oEOynFi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0cqphVPzQGminuxB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/entertainment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\EntertainmentController@create',
        'controller' => '\\App\\Http\\Controllers\\Web\\EntertainmentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0cqphVPzQGminuxB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OD3q1dUhvpt7rd3l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/edit-schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editSchedule',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editSchedule',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OD3q1dUhvpt7rd3l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EI9lt0IvXud2cVrZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/edit-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editRates',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editRates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EI9lt0IvXud2cVrZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TB9oqhNL0pwcyaQg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/edit-catering',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editCatering',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editCatering',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TB9oqhNL0pwcyaQg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ep9CsuFvWdISvARv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/edit-general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editGeneral',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editGeneral',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ep9CsuFvWdISvARv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qBYtuNDDmoWqJ0G7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/edit-other',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editOther',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editOther',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qBYtuNDDmoWqJ0G7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8QeEDUneaV8jRYco' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/edit-specialties',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\CatererController@editSpecialties',
        'controller' => '\\App\\Http\\Controllers\\Web\\CatererController@editSpecialties',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8QeEDUneaV8jRYco',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fcS8tgusbX7WY3OD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/{advertId}/edit-food',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\WineController@editFood',
        'controller' => '\\App\\Http\\Controllers\\Web\\WineController@editFood',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fcS8tgusbX7WY3OD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e5ACI4Riml7NFvAp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/partner-cp/edit-comment/{advertId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editComment',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editComment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::e5ACI4Riml7NFvAp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JvmogBVsmCZYap5F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cp/adverts/del-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\CatererController@removeMenu',
        'controller' => '\\App\\Http\\Controllers\\Web\\CatererController@removeMenu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JvmogBVsmCZYap5F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile-advert' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partner-cp/{id_partner}/advert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
          4 => 'subscribed',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\ProfileController@advert',
        'controller' => 'App\\Http\\Controllers\\Web\\ProfileController@advert',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile-advert',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile-plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partner-cp/{id_partner}/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\ProfileController@plans',
        'controller' => 'App\\Http\\Controllers\\Web\\ProfileController@plans',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile-plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-et' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-event-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\ProfileController@updateEventTypes',
        'controller' => 'App\\Http\\Controllers\\Web\\ProfileController@updateEventTypes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-et',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'alt.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-image-alt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\ProfileController@editImagesAlt',
        'controller' => 'App\\Http\\Controllers\\Web\\ProfileController@editImagesAlt',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'alt.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thumbnail.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'service-images/thumbnail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceImageController@thumbnail',
        'controller' => 'App\\Http\\Controllers\\ServiceImageController@thumbnail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thumbnail.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E7Nj9DMaE0Ib0EMW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partner-cp/{id_partner}/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@faq',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@faq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::E7Nj9DMaE0Ib0EMW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6OTPsevLWqK5M52o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partner-cp/{id_partner}/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@terms',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@terms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6OTPsevLWqK5M52o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s01whA37l48OEGvU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/create-advert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@activateOption',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@activateOption',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::s01whA37l48OEGvU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner-contact' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@partnerContact',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@partnerContact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'partner-contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GmBPro8bv5CSRY4r' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editContacts',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editContacts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GmBPro8bv5CSRY4r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-company',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompany',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompany',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'company.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'company-description.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-company-description',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompanyDescription',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompanyDescription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'company-description.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DMT61Wwm8e8f8LLz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-company-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompanyLocation',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editCompanyLocation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DMT61Wwm8e8f8LLz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WDZtuqvFRVadHOPH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-www',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\ProfileController@editWww',
        'controller' => '\\App\\Http\\Controllers\\Web\\ProfileController@editWww',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WDZtuqvFRVadHOPH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'option.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-option',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\PlanOptionController@editOption',
        'controller' => '\\App\\Http\\Controllers\\Web\\PlanOptionController@editOption',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'option.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c0kwdduBI9fiGJQO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@editCategory',
        'controller' => 'App\\Http\\Controllers\\partnerController@editCategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::c0kwdduBI9fiGJQO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5emqdoJedDJNMD1o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@editImages',
        'controller' => 'App\\Http\\Controllers\\partnerController@editImages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5emqdoJedDJNMD1o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YqPEDtqyLThWco9e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/select-free-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@ChoseFreePlan',
        'controller' => 'App\\Http\\Controllers\\partnerController@ChoseFreePlan',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YqPEDtqyLThWco9e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZN4gsrtWLBoUTlUL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@editSchedule',
        'controller' => 'App\\Http\\Controllers\\partnerController@editSchedule',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZN4gsrtWLBoUTlUL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RtQ9HE9kltPiGx0M' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-specialties',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@editSpecialties',
        'controller' => 'App\\Http\\Controllers\\partnerController@editSpecialties',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RtQ9HE9kltPiGx0M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3kRBSqviTzEuXIGH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-other',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@editOther',
        'controller' => 'App\\Http\\Controllers\\partnerController@editOther',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3kRBSqviTzEuXIGH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Zr8CgsJORDgWsnC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-food',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\partnerController@editFood',
        'controller' => 'App\\Http\\Controllers\\partnerController@editFood',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3Zr8CgsJORDgWsnC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D7A7egHqQtRd5S6B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/del-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@partnerDelfile',
        'controller' => 'App\\Http\\Controllers\\ajaxController@partnerDelfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D7A7egHqQtRd5S6B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J51p5LNgg77iOngr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/del-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceImageController@remove',
        'controller' => 'App\\Http\\Controllers\\ServiceImageController@remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::J51p5LNgg77iOngr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0ftjOcztTAhJ2cjh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ajaxController@partnerPublish',
        'controller' => 'App\\Http\\Controllers\\ajaxController@partnerPublish',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0ftjOcztTAhJ2cjh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KBDQi1wUmv2oEofc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/payment/cash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@cashPayment',
        'controller' => 'App\\Http\\Controllers\\PaymentController@cashPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KBDQi1wUmv2oEofc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rQJBScBaOePdtpma' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/payment/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@paypalPayment',
        'controller' => 'App\\Http\\Controllers\\PaymentController@paypalPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rQJBScBaOePdtpma',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9teBPqlevOgCjBXJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/payment/card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@CardPayment',
        'controller' => 'App\\Http\\Controllers\\PaymentController@CardPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9teBPqlevOgCjBXJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pD0CeKx4gcPCBIsd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/vip-plan-payment/card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\VipPlanPaymentController@CardPayment',
        'controller' => 'App\\Http\\Controllers\\VipPlanPaymentController@CardPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pD0CeKx4gcPCBIsd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iImDIp3sE0gugokq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-vip-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\VipPlanController@updateData',
        'controller' => 'App\\Http\\Controllers\\VipPlanController@updateData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iImDIp3sE0gugokq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partner-cp/payment/paypal-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentController@getPaymentStatus',
        'controller' => 'App\\Http\\Controllers\\PaymentController@getPaymentStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AEbcSynK0XXUCJgr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'service-images/upload/{id_partner}/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceImageController@upload',
        'controller' => 'App\\Http\\Controllers\\ServiceImageController@upload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AEbcSynK0XXUCJgr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OgSBZShieZwX48lx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'service-images/remove/{image_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceImageController@remove',
        'controller' => 'App\\Http\\Controllers\\ServiceImageController@remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OgSBZShieZwX48lx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CH7f0UYwqZPzNHI5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/event-places',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\EventPlaceController@create',
        'controller' => '\\App\\Http\\Controllers\\Web\\EventPlaceController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CH7f0UYwqZPzNHI5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BrOpXps5uRUsHgEe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/caterer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\CatererController@create',
        'controller' => '\\App\\Http\\Controllers\\Web\\CatererController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BrOpXps5uRUsHgEe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9N7ytfu4y4ttTkEE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/wine-lovers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\WineController@create',
        'controller' => '\\App\\Http\\Controllers\\Web\\WineController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9N7ytfu4y4ttTkEE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2xnYlwn9JXeCcpdU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/equipment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\EquipmentController@create',
        'controller' => '\\App\\Http\\Controllers\\Web\\EquipmentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2xnYlwn9JXeCcpdU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Huays1t3HPl1m9dG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/entertainment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\EntertainmentController@create',
        'controller' => '\\App\\Http\\Controllers\\Web\\EntertainmentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Huays1t3HPl1m9dG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pQPQOyvytp1cxjeU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/edit-schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editSchedule',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editSchedule',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pQPQOyvytp1cxjeU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WaT5WfVlqWowGFvS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/edit-rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editRates',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editRates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WaT5WfVlqWowGFvS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2TlKtkgZWbNK1eS4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/edit-comment/{advertId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editComment',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editComment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2TlKtkgZWbNK1eS4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B9wLc8D0ixCUrF7W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/edit-catering',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editCatering',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editCatering',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::B9wLc8D0ixCUrF7W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::soSMS0xDfeA6s9jH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/edit-general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editGeneral',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editGeneral',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::soSMS0xDfeA6s9jH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N3xbDhQgolUo8Zis' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/edit-other',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\AdvertController@editOther',
        'controller' => '\\App\\Http\\Controllers\\Web\\AdvertController@editOther',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::N3xbDhQgolUo8Zis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WNlh65TwGTArRNcQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/edit-specialties',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\CatererController@editSpecialties',
        'controller' => '\\App\\Http\\Controllers\\Web\\CatererController@editSpecialties',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WNlh65TwGTArRNcQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xGpwvKnTz3SthizG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/{advertId}/edit-food',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\WineController@editFood',
        'controller' => '\\App\\Http\\Controllers\\Web\\WineController@editFood',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xGpwvKnTz3SthizG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SdTU5AQonILp5kP8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'adverts/del-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => '\\App\\Http\\Controllers\\Web\\CatererController@removeMenu',
        'controller' => '\\App\\Http\\Controllers\\Web\\CatererController@removeMenu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SdTU5AQonILp5kP8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/invoice/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\BillingController@invoice',
        'controller' => 'App\\Http\\Controllers\\BillingController@invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.start' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\BillingController@subscribe',
        'controller' => 'App\\Http\\Controllers\\BillingController@subscribe',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscription.start',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.switch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/switch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\BillingController@switch',
        'controller' => 'App\\Http\\Controllers\\BillingController@switch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscription.switch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\BillingController@cancel',
        'controller' => 'App\\Http\\Controllers\\BillingController@cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscription.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.resume' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/resume',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\BillingController@resume',
        'controller' => 'App\\Http\\Controllers\\BillingController@resume',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscription.resume',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'partner-cp/update-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'partner',
          3 => 'email',
        ),
        'uses' => 'App\\Http\\Controllers\\BillingController@updatePayment',
        'controller' => 'App\\Http\\Controllers\\BillingController@updatePayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WqcmMFosoWAQPEIN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contacts/claim-requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactsController@SendClaimOrDeleteRequest',
        'controller' => 'App\\Http\\Controllers\\ContactsController@SendClaimOrDeleteRequest',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WqcmMFosoWAQPEIN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'request.commission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'request/partner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceRequestController@commissionFormAction',
        'controller' => 'App\\Http\\Controllers\\ServiceRequestController@commissionFormAction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'request.commission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'request.caterer' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'request/caterer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceRequestController@catererFormAction',
        'controller' => 'App\\Http\\Controllers\\ServiceRequestController@catererFormAction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'request.caterer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'request.general' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'request/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceRequestController@requestFormAction',
        'controller' => 'App\\Http\\Controllers\\ServiceRequestController@requestFormAction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'request.general',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setlocale' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setlocale/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LocaleController@setLocale',
        'controller' => 'App\\Http\\Controllers\\LocaleController@setLocale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setlocale',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
