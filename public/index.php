<?php
require_once __DIR__ . '/../vendor/autoload.php';

$kernel = new mostertb\PHPSA2017Profiles\Kernel();
$loader = new Twig_Loader_Filesystem(__DIR__ . '/../src/templates');
$twig = new Twig_Environment($loader, [
    'cache' => __DIR__ . '/../storage/cache/compilation_cache',
]);

echo $twig->render('index.html.twig', [
        'profiles' => $kernel->getProfiles(),
]);

