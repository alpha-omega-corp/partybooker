<?php
/*
 * Secret key and Site key get on https://www.google.com/recaptcha
 * */

use ReCaptcha\RequestMethod\Post;

return [
    'secret' => env('CAPTCHA_SECRET', 'default'),
    'sitekey' => env('CAPTCHA_SITEKEY'),
    'request_method' => new Post(),
    'options' => [
        'multiple' => false,
        'lang' => app()->getLocale(),
    ],
    'attributes' => [
        'theme' => 'light'
    ],
];
