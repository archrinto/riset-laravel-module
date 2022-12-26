<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\API\DataTableController;
use Yajra\DataTables\Services\DataTable;
use App\DataTables\ProductDataTable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(DataTableController::class)->needs(DataTable::class)->give(function () {
            return (new ProductDataTable);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
