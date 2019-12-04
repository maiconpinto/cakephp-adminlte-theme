<?php
$config = [
    'Theme' => [
    	'title' => 'AdminLTE 3',
	    'login' => [
	    	'show_remember' => true,
		    'show_register' => true,
		    'show_social' => true
		],
        'layout' => [
            'boxed' => false,
        	'collapse' => [
        		'sidebar' => false
            ],
        	'fixed' => [
        		'sidebar' => false,
        		'navbar' => false,
        		'footer' => false
        	],
    	],
	    'folder' => ROOT,
	    'skin' => 'blue'
	]
];

return $config;