<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/', function (Request $request) use ($app) {
    $supportedLanguages = ['default' => 'en', 'fr'];
    if ($lang = $request->get('lang') and !in_array($lang, $supportedLanguages)) {
        $lang = null;
    }

    if (empty($lang) and (in_array($request->getLanguages()[0], $supportedLanguages))) {
        $lang = $request->getLanguages()[0];
    }

    if (empty($lang) and (in_array($request->getLanguages()[1], $supportedLanguages))) {
        $lang = $request->getLanguages()[1];
    }

    if (empty($lang)) {
        $lang = $supportedLanguages['default'];
    }

    return $app['twig']->render(sprintf('index.%s.html.twig', $lang), $app['pages']['index'][$lang]);
})
->bind('homepage')
;

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
