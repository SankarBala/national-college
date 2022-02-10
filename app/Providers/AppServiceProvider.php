<?php

namespace App\Providers;

use App\Models\Notice;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
    public function boot(Request $request)
    {
        // if(!($request->is('admin/*') || $request->is('admin'))) {
        //    view()->share('notices', Notice::take(8)->orderBy('id', 'desc')->get());
        // }
    }
}
