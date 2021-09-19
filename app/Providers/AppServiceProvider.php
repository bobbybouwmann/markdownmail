<?php

namespace App\Providers;

use Illuminate\Mail\Markdown;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/resources/views' => resource_path('views/vendor/mail'),
            ], 'laravel-mail');
        }

        $this->app->singleton(Markdown::class, function ($app) {
            $config = $app->make('config');

            return new \App\Mail\Markdown($app->make('view'), [
                'theme' => $config->get('mail.markdown.theme', 'default'),
                'paths' => $config->get('mail.markdown.paths', []),
            ]);
        });
    }
}
