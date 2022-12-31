<?php
return [
    'prefix' => [
        'backend' => 'cms',
        'engineer' => 'site-engineer',
        'receiption' => 'editor'
    ],
    'namespace' => [
        'backend' => 'CMS\Http\Controllers\Backend',
        'engineer' => 'CMS\Http\Controllers\Engineer',
        'receiption' => 'CMS\Http\Controllers\Receiption',
    ],
    'as' => [
        'backend' => 'backend.cms.',
        'engineer' => 'engineer.cms.',
        'receiption' => 'receiption.cms.',
    ]
];
