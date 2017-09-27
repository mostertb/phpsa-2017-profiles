<?php

    namespace App\Controllers;

    use App\Controllers\Controller as Controller;

    class HomeController extends Controller
    {
        public function index($request, $response)
        {
            return $this->view->render($response, 'home.twig', ['profiles' => $this->profiles]);
        }
    }