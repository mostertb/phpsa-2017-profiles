<?php

namespace mostertb\PHPSA2017Profiles\Controllers;

use mostertb\PHPSA2017Profiles\Controllers\Controller as Controller;

class ProfileController extends Controller
{
    public function show($request, $response, $args)
    {
        $slug = $args['slug'];

        foreach ($this->profiles as $profile) {
            if ($profile->getSlug() == $slug) {
                return $this->view->render($response, 'profiles/show.twig', ['profile' => $profile]);
            }
        }

        return $response->withRedirect('home');
    }
}
