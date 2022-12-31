<?php
return [
    'prefix' => [
        'backend' => 'backend/user',
        'engineer' => 'engineer',
        'receptionist' => 'receptionist',
        'api' => 'api/user',
    ],
    'namespace' => [
        'backend' => 'Receptionist\Http\Controllers\Backend',
        'engineer' => 'Receptionist\Http\Controllers\Engineer',
        'receptionist' => 'Receptionist\Http\Controllers\Receptionist',
        'api' => 'Receptionist\Http\Controllers\Api',
    ],
    'as' => [
        'backend' => 'backend.user.',
        'engineer' => 'engineer.',
        'receptionist' => 'receptionist.',
    ]
];
