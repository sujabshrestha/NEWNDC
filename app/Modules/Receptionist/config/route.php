<?php
return [
    'prefix' => [
        'backend' => 'admin',
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
        'backend' => 'admin.',
        'engineer' => 'engineer.',
        'receptionist' => 'receptionist.',
    ]
];
