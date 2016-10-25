<?php

// configure your app for the production environment

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

$app['pages'] = array(
    'index' => array(
        'en' => array(
            'lang' => 'en',
            'title' => 'Adrien Petitjean - Web developer',
            'h2' => 'Web developer',
        ),
        'fr' => array(
            'lang' => 'fr',
            'title' => 'Adrien Petitjean - Développeur web',
            'h2' => 'Développeur web',
        )
    )
);

