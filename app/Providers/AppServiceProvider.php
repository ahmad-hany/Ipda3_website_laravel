<?php

namespace App\Providers;

use App\Models\Client;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Service;
use App\Models\Project;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['*'], function ($view) {
            // Logic here
            $view->with('setting', Setting::all()->toArray());
            $view->with('page', Page::all()->toArray());
            $view->with('service', Service::all()->toArray());
            $view->with('project', Project::all()->toArray());
            $view->with('photo', Photo::all()->toArray());
            $view->with('post', Post::all()->toArray());
            $view->with('client', Client::all()->toArray());
        });
    }
}
