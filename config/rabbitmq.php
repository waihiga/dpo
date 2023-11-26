<?php
return [

    'source' => 'dpo message',

    'query-queue' => 'dpo-query',
    'command-queue' => 'dp-command',
    'event-queue' => 'dpo-queue',

    'routes_files' => [],

    'targets' => [
        'system-name' => [
            'event' => 'event-queue-name',
            'query' => 'query-queue-name',
            'command' => 'command-queue-name'
        ]
    ],
];