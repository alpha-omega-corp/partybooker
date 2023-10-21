<?php

return [


    //'default' => env('FILESYSTEM_DRIVER', 'local'),
    'default' => env('FILESYSTEM_DRIVER', 'public'),

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],
    ],

];
