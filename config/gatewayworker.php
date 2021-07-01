<?php
/**
 * This file is part of addcnos/laravel-gateway-worker.
 *
 * @link     https://code.addcn.com/addcnos/laravel-gateway-worker
 * @document https://code.addcn.com/addcnos/laravel-gateway-worker/blob/1.x/README.md
 * @contact  huangdijia@gmail.com
 * @license  https://code.addcn.com/addcnos/laravel-gateway-worker/blob/1.x/LICENSE
 */
return [
    'register' => [
        'bind' => env('GATEWAYWORKER_REGISTER_BIND', '0.0.0.0:1215'),
        'name' => env('GATEWAYWORKER_REGISTER_NAME', 'Register'),
        'processes' => env('GATEWAYWORKER_REGISTER_PROCESSES', 1),
    ],
    'register_address' => env('GATEWAYWORKER_REGISTER_ADDRESS', '127.0.0.1:1215'),
    'gateway' => [
        'bind' => env('GATEWAYWORKER_GATEWAY_BIND', '0.0.0.0:1216'),
        'name' => env('GATEWAYWORKER_GATEWAY_NAME', 'Gateway'),
        'processes' => env('GATEWAYWORKER_GATEWAY_PROCESSES', 1),
        'start_port' => env('GATEWAYWORKER_GATEWAY_START_PORT', 2300),
        'ping_interval' => env('GATEWAYWORKER_GATEWAY_PING_INTERVAL', 30),
        'ping_data' => env('GATEWAYWORKER_GATEWAY_PING_DATA', '{"mode":"heart"}'),
        'ping_not_response_limit' => env('GATEWAYWORKER_GATEWAY_PING_NOT_RESPONSE_LIMIT', 0),
    ],
    'businessworker' => [
        'name' => env('GATEWAYWORKER_BUSINESSWORKER_NAME', 'BusinessWorker'),
        'processes' => env('GATEWAYWORKER_BUSINESSWORKER_PROCESSES', 1),
        'event_handler' => '', // implements \Addcnos\GatewayWorker\GatewayWorkerEventInterface
    ],
    'log_file' => storage_path('logs/workerman.log'),
    'pid_file' => storage_path('logs/workerman.pid'),
];
