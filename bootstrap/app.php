<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
            'http://127.0.0.1:8000/announces',
            'http://127.0.0.1:8000/announces/*',
            'http://localhost:8000/announces',
            'http://localhost:8000/announces/*',
            'https://announceapi-production.up.railway.app/announces/*',
            'https://announceapi-production.up.railway.app/announces',
            'http://localhost:3000/announces/*',
            'http://localhost:3000/announces',
            'https://announcereact-a19f76.gitlab.io/announces/*',
            'https://announcereact-a19f76.gitlab.io/announces',
            'http://localhost:3000',

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();