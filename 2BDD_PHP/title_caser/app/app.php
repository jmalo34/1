<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/TitleCaserGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use($app)
    {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_title_case", function() use($app)
    {
        $my_TitleCaserGenerator = new TitleCaserGenerator;
        $title_cased_phrase = $my_TitleCaserGenerator->makeTitleCaser($_GET['phrase']);
        return $app['twig']->render('title_caseRd.html.twig', array('result' => $title_cased_phrase));
    });

    return $app;
 ?>
