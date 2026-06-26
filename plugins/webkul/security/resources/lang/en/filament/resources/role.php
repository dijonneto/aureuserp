<?php

return [
    'form' => [
        'fields' => [
            'web'     => 'Web',
            'sanctum' => 'Sanctum',
        ],
    ],

    'notification' => [
        'system-role-delete' => [
            'title' => 'System Role Cannot Be Deleted',
            'body'  => 'This is a system role and cannot be deleted.',
        ],
    ],

    'exceptions' => [
        'system-role-update' => 'You are not allowed to modify this system role.',
        'system-role-delete' => 'You are not allowed to delete this system role.',
    ],
];
