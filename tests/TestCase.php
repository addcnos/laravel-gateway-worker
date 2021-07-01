<?php
/**
 * This file is part of addcnos/laravel-gateway-worker.
 *
 * @link     https://code.addcn.com/addcnos/laravel-gateway-worker
 * @document https://code.addcn.com/addcnos/laravel-gateway-worker/blob/1.x/README.md
 * @contact  huangdijia@gmail.com
 * @license  https://code.addcn.com/addcnos/laravel-gateway-worker/blob/1.x/LICENSE
 */
namespace Addcnos\GatewayWorker\Tests;

/**
 * @internal
 * @coversNothing
 */
class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Your code here
    }

    protected function getPackageProviders($app)
    {
        return [
            \Addcnos\GatewayWorker\GatewayWorkerServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            // 'Acme' => 'Acme\Facade',
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        // $app['config']->set('database.default', 'testbench');
        // $app['config']->set('database.connections.testbench', [
        //     'driver'   => 'sqlite',
        //     'database' => ':memory:',
        //     'prefix'   => '',
        // ]);
    }
}
