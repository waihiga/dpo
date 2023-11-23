<?php
return [

    'source' => config('app.name'),

    'query-queue' => config('app.name').'query',
    'command-queue' => config('app.name').'command',
    'event-queue' => config('app.name').'queue',

    'routes_files' => [],

    'targets' => [
        'system-name' => [
            'event' => 'event-queue-name',
            'query' => 'query-queue-name',
            'command' => 'command-queue-name'
        ]
    ],
];