<?php

/*
  |--------------------------------------------------------------------------
  | Detect The Application Environment
  |--------------------------------------------------------------------------
  |
  | Laravel takes a dead simple approach to your application environments
  | so you can just specify a machine name for the host that matches a
  | given environment, then we will automatically detect it for you.
  |
 */
$env = $app->detectEnvironment(function () {
    if (!getenv('APP_ENV')) {
        $environmentPath = __DIR__ . '/../.env';
        
        if (file_exists($environmentPath)) {
            $setEnv = trim(file_get_contents($environmentPath));
            putenv("APP_ENV=$setEnv");
        }
    }
    if (getenv('APP_ENV') && file_exists(__DIR__ . '/../.' . getenv('APP_ENV') . '.env')) {
        Dotenv::load(__DIR__ . '/../', '.' . getenv('APP_ENV') . '.env');
    }
});
