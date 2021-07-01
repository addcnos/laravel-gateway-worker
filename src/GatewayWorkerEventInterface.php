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

interface GatewayWorkerEventInterface
{
    public static function onWorkerStart($businessWorker);

    public static function onConnect($clientId);

    public static function onWebSocketConnect($clientId, $data);

    public static function onMessage($clientId, $message);

    public static function onClose($clientId);
}
