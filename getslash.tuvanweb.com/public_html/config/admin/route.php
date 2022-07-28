<?php
	$except = ['show'];
    return [
        'recruitments' => [
            'name' => 'recruitments',
            'except' => $except,
            'multi_del' => true,
        ],

        'styles' => [
            'name' => 'styles',
            'except' => $except,
            'multi_del' => true,
        ],

        'posttype' => [
            'name' => 'posttype',
            'except' => $except,
            'multi_del' => true,
        ],
	];