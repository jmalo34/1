<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/LeetSpeakTranslator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app)
    {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_leetspeak", function () use($app)
    {
        $my_LeetSpeakTranslator = new LeetSpeakTranslator;
        $leet_speaked_phrase = $my_LeetSpeakTranslator->translate($_GET['phrase']);
        return $app['twig']->render('leet_speaked.html.twig', array('result' => $leet_speaked_phrase));
    });

    return $app;

 ?>
