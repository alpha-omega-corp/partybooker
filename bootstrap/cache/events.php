<?php return array (
  'App\\Providers\\EventServiceProvider' => 
  array (
    'Illuminate\\Auth\\Events\\Registered' => 
    array (
      0 => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
    ),
    'Laravel\\Cashier\\Events\\WebhookReceived' => 
    array (
      0 => 'App\\Listeners\\StripeEventListener',
    ),
  ),
);