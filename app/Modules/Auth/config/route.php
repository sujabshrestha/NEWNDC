<?php
return [
    'prefix' => [
        'backend' => '',
        'api' => 'api',
        'engineer' => 'site-engineer',
        'receiption' => 'editor'
    ],
    'namespace' => [
        'backend' => 'Auth\Http\Controllers\Backend',
        'engineer' => 'Auth\Http\Controllers\Backend',
        'receiption' => 'Auth\Http\Controllers\Backend',
        'frontend' => 'Auth\Http\Controllers\Frontend',
        'api' => 'Auth\Http\Controllers\Api',
    ],
    'as' => [
        'backend' => 'backend.auth.',
        'engineer' => 'engineer.auth.',
        'receiption' => 'receiption.auth.',
    ]
];
