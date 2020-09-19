<?php

/**
 * Extension Manager/Repository config file for ext "pferdehof".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'pferdehof',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'PferdehofAmMuehlibach\\Pferdehof\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Loris Leuenberger',
    'author_email' => 'lorisnico2000@gmail.com',
    'author_company' => 'Pferdehof am Mühlibach',
    'version' => '1.0.0',
];
