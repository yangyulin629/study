<?php
$server = new swoole_websocket_server("0.0.0.0", 80);
$server->on('workerStart', function(swoole_websocket_server $server){
    $redis = new swoole_redis();
    $redis->connect('redis', 6379, function(swoole_redis $redis, $result){
        if ($result === false) {
            echo "connect to redis server failed.\n";
            return;
        }
    });
    $server->redis = $redis;
});

$server->on('open', function (swoole_websocket_server $server, $request){
    $fd = $request->fd;
    $redis = new swoole_redis();
    $redis->on('message', function(swoole_redis $client, $result) use ($server, $fd) {
        $server->push($fd, array_pop($result));
    });
    $redis->connect('redis', 6379, function(swoole_redis $redis, $result){
        $redis->subscribe('redisChat');
    });
});

$server->on('message', function (swoole_websocket_server $server, $frame){
    $server->redis->publish('redisChat', $frame->data, function(swoole_redis $client, $result) {
        var_dump($result);
    });
});

$server->on('close', function ($ser, $fd) {
    echo "client {$fd} closed\n";
});

$server->start();
