<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'spatie/laravel-newsletter' => 
  array (
    'providers' => 
    array (
      0 => 'Spatie\\Newsletter\\NewsletterServiceProvider',
    ),
    'aliases' => 
    array (
      'Newsletter' => 'Spatie\\Newsletter\\NewsletterFacade',
    ),
  ),
);