<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Options;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
        Paginator::defaultView('vendor.pagination.default');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $site_info = Options::where('type', 'general')->first();
        $site_info = json_decode($site_info->content);
        $menuMain  = Menu::where('parent_id', null)->orderBy('position')->get()->groupBy('id_group');
        view()->share(compact('site_info', 'menuMain'));
        require_once app_path(). '/Function/function.php';
    }
}
