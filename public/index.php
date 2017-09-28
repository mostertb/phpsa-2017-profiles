<?php
    require_once __DIR__ . '/../vendor/autoload.php';

    session_start();

    use \Slim\App as Slim;

    use \Slim\Views\Twig as Twig;
    use \Slim\Views\TwigExtension as TwigExtension;

// Create and configure Slim app
    $config = [
        'settings' => [
            'addContentLengthHeader' => FALSE,
            'displayErrorDetails'    => TRUE,
        ],
    ];
    $app = new Slim($config);
    $container = $app->getContainer();

    $container['view'] = function ($container) {
        $view = new Twig(__DIR__ . '/../views', [
            'cache' => FALSE,
            'debug' => TRUE,
        ]);

        $view->addExtension(new TwigExtension(
            $container->router,
            $container->request->getUri()
        ));

        $view->addExtension(new Twig_Extension_Debug());

        return $view;
    };

    $container['profiles'] = function ($container) {
        $kernel = new \mostertb\PHPSA2017Profiles\Kernel();
        $kernel_profiles = $kernel->getProfiles();

        return $kernel_profiles;
    };

// Define app routes
    require __DIR__ . '/../src/Routes.php';

// Run app
    $app->run();
    $app = new Slim;