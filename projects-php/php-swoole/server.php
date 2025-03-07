<?php

declare(strict_types=1);

use Swoole\Http\Request;
use Swoole\WebSocket\Server;
use Swoole\WebSocket\Frame;

$server = new Server('0.0.0.0', 8081);

$server->on('start', function (Server $server) {
    echo "WebSocket Server is listening on {$server->host}:{$server->port}", PHP_EOL;
});

$server->on('open', function (Server $server, Request $request) {
    echo "Client connected: {$request->fd}", PHP_EOL;
});

$server->on('message', function (Server $server, Frame $frame) {
    echo "Client {$frame->fd} message: {$frame->data}", PHP_EOL;

    foreach ($server->connections as $connection) {
        if ($connection === $frame->fd) {
            continue;
        }

        $server->push($connection, $frame->data);
    }
});

$server->on('close', function (Server $server, int $fd) {
    echo "Client disconnected: {$fd}", PHP_EOL;
});

$server->start();
