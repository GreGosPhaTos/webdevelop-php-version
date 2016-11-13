<?php

// configure your app for the production environment

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

$app['pages'] = array(
    'index' => array(
        'en' => array(
            'lang' => 'en',
            'metaDesc' => 'Adrien Petitjean Web developer',
            'metaKeywords' => 'Adrien Petitjean, web developer, software engineer',
            'title' => 'Adrien Petitjean - Web developer',
            'h2' => 'Web developer',
            'gaId' => "UA-XXXXXXXX-X",
        ),
        'fr' => array(
            'lang' => 'fr',
            'metaDesc' => 'Adrien Petitjean développeur web, webdevelop.fr',
            'metaKeywords' => 'Adrien Petitjean, développeur web, software Engineer, PHP, SQL, nodeJs,  JavaScript, AJAX, web',
            'title' => 'Développeur Web : Adrien Petitjean - webdevelop.fr ',
            'h2' => 'Développeur web',
            'gaId' => "UA-XXXXXXXX-X",
        )
    )
);

