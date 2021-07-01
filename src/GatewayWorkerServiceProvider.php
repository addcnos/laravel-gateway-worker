<?php
/**
 * This file is part of addcnos/laravel-gateway-worker.
 *
 * @link     https://code.addcn.com/addcnos/laravel-gateway-worker
 * @document https://code.addcn.com/addcnos/laravel-gateway-worker/blob/1.x/README.md
 * @contact  huangdijia@gmail.com
 * @license  https://code.addcn.com/addcnos/laravel-gateway-worker/blob/1.x/LICENSE
 */
namespace Addcnos\GatewayWorker;

use Illuminate\Support\ServiceProvider;

class GatewayWorkerServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/gatewayworker.php', 'gatewayworker');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config/gatewayworker.php' => $this->app->basePath('config/gatewayworker.php')]);
        }

        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\ServeCommand::class,
            ]);
        }

        Client::$registerAddress = config('gatewayworker.register_address');
    }
}
