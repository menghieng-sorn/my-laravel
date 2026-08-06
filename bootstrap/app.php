<?php

use App\Http\Middleware\CheckRoleMiddleware;
use App\Http\Middleware\TestMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->append(TestMiddleware::class);
        // $middleware->append(CheckRoleMiddleware::class);

        //group middleware
        // $middleware->appendToGroup('test-group',[
        //     TestMiddleware::class,
        //     CheckRoleMiddleware::class
        // ]);

        //WEB
        // $middleware->web(append:[
        //     TestMiddleware::class,
        //     CheckRoleMiddleware::class
        // ]);

        //Alias
        $middleware->alias([
            'checkRole'=> CheckRoleMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

