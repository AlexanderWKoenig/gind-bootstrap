<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Gind Bootstrap',
    'description' => 'Extends bootstrap package',
    'category' => 'fe',
    'author' => 'Alexander König',
    'author_email' => 'gind@gindserver.duckdns.org',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.9.99',
            'bootstrap_package' => '12.0.0-12.9.99'
        ],
        'conflicts' => [],
    ],
];
