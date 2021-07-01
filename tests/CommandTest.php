<?php
/**
 * This file is part of addcnos/laravel-gateway-worker.
 *
 * @link     https://github.com/addcnos/laravel-gateway-worker
 * @document https://github.com/addcnos/laravel-gateway-worker/blob/1.x/README.md
 * @contact  huangdijia@gmail.com
 * @license  https://github.com/addcnos/laravel-gateway-worker/blob/1.x/LICENSE
 */
namespace Addcnos\GatewayWorker\Tests;

/**
 * @internal
 * @coversNothing
 */
class CommandTest extends TestCase
{
    public function testPublish()
    {
        $this->artisan('vendor:publish', [
            '--provider' => '"Addcnos\GatewayWorker\GatewayWorkerServiceProvider"',
        ])
            ->assertExitCode(0);
    }

    public function testStartCommand()
    {
        $this->artisan('gateway-worker:serve start --daemon')->assertExitCode(0);
    }

    public function testStatusCommand()
    {
        $this->artisan('gateway-worker:serve status')->assertExitCode(0);
    }

    public function testStopCommand()
    {
        $this->artisan('gateway-worker:serve stop')->assertExitCode(0);
    }
}
