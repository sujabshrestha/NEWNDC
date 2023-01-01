<?php
return [
    'prefix' => [
        'backend' => '',
        'api' => 'api',
        'engineer' => 'site-engineer',
        'receptionist' => 'receptionist'
    ],
    'namespace' => [
        'backend' => 'Auth\Http\Controllers\Backend',
        'engineer' => 'Auth\Http\Controllers\Backend',
        'receptionist' => 'Auth\Http\Controllers\Backend',
        'frontend' => 'Auth\Http\Controllers\Frontend',
        'api' => 'Auth\Http\Controllers\Api',
    ],
    'as' => [
        'backend' => 'backend.auth.',
        'engineer' => 'engineer.auth.',
        'receptionist' => 'receptionist.auth.',
    ]
];
