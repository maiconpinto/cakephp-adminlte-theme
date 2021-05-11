<?php
return [
    'Theme' => [
        'title' => 'AdminLTE 3',
        'logo' => 'AdminLTE.AdminLTELogo.png',
        'login' => [
            'show_remember' => true,
            'show_register' => true,
            'show_social' => true,
        ],
        'layout' => [
            'boxed' => false,
            'sidebar_collapse' => false,
            'fixed' => [
                'sidebar' => true,
                'navbar' => false,
                'footer' => false,
            ],
        ],
        // select 'sweetalert', 'toastr', 'default'
        'flash' => 'default',
        'iframe' => false,
    ]
];
