<?php
return [
    'prefix' => [
        'backend' => 'backend/user',
        'engineer' => 'engineer',
        'api' => 'api/user',
    ],
    'namespace' => [
        'backend' => 'Engineer\Http\Controllers\Backend',
        'engineer' => 'Engineer\Http\Controllers\Engineer',
        'api' => 'Engineer\Http\Controllers\Api',
    ],
    'as' => [
        'backend' => 'backend.user.',
        'engineer' => 'engineer.',
    ]
];
