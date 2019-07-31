<?php
namespace Impecty\RXYJunitLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class JunitServiceProvide extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'sjunit'
        );
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Impecty\RXYJunitLaravel\Http\Controllers',
            'prefix' => 'sjunit',
        ];
    }
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        });
    }
}
?>