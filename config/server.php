<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Server Driver
    |--------------------------------------------------------------------------
    |
    | Available Drivers: "tcp", "http", "web_socket"
    |
    */

    'driver' => 'http',

    /*
    |--------------------------------------------------------------------------
    | Unix Sock File
    |--------------------------------------------------------------------------
    */

    'unix_sock' => storage_path('framework/server.sock'),

    /*
    |--------------------------------------------------------------------------
    | Server Options
    |--------------------------------------------------------------------------
    */

    'options' => [

        /*
        |--------------------------------------------------------------------------
        | Worker Process
        |--------------------------------------------------------------------------
        */

        'worker_num'      => 16,

        'task_worker_num' => 16,

        /*
        |--------------------------------------------------------------------------
        | 日志记录
        |--------------------------------------------------------------------------
        */

        'log_level' => 2,

        'log_file' => storage_path('logs/swoole.log'),

        /*
        |--------------------------------------------------------------------------
        | 慢日志记录
        |--------------------------------------------------------------------------
        */

        'request_slowlog_timeout' => 5,

        'request_slowlog_file' => storage_path('logs/swoole-slow-trace.log'),

        'trace_event_worker' => true,

        /*
        |--------------------------------------------------------------------------
        | 处理相关
        |--------------------------------------------------------------------------
        */

        'max_request' => 1000,

        'reload_async' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | Port Listens
    |--------------------------------------------------------------------------
    */

    'listens' => [
        [
            'protocol' => 'http',
            'host'     => '0.0.0.0',
            'port'     => 8080,
            'handler'  => Lawoole\Http\HttpServerSocketHandler::class,
        ],
        // [
        //     'protocol' => 'whisper',
        //     'host'     => '0.0.0.0',
        //     'port'     => 8081,
        //     'handler'  => Lawoole\Homer\Transport\Whisper\WhisperServerSocketHandler::class,
        // ],
        // [
        //     'protocol' => 'http',
        //     'host'     => '0.0.0.0',
        //     'port'     => 8082,
        //     'handler'  => Lawoole\Homer\Transport\Http\HttpServerSocketHandler::class,
        // ]
    ],

];
