<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::macro('apiResourceFull', function ($uri, $controller) {
            $param = Str::of($uri)->singular()->camel();
            Route::post("{$uri}/{{$param}}/restore", [$controller, 'restore'])->name("{$uri}.restore");
            Route::delete("{$uri}/{{$param}}/force-delete", [$controller, 'forceDelete'])->name("{$uri}.force-delete");
            return Route::apiResource($uri, $controller);
        });
    }
}
