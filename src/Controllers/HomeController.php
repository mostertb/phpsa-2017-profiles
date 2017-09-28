<?php

    namespace mostertb\PHPSA2017Profiles\Controllers;

    use App\Controllers\Controller as Controller;

    class HomeController extends Controller
    {
        public function index($request, $response)
        {
            return $this->view->render($response, 'home.twig', ['profiles' => $this->profiles]);
        }
    }