<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/LeetspeakTranslator.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider, array(
        'twig.path' => __DIR__.'/../views/'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get('/results', function() use ($app) {
        $new_translation = new LeetspeakTranslator;
        $inputted_string = $_GET['user_input'];
        $results = $new_translation->translate($inputted_string);

        return $app['twig']->render('view_leet_speak.html.twig', array('translate' => $results));
    });
    return $app;
?>
