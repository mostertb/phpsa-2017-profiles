<?php

    $app->get('/', 'App\Controllers\HomeController:index')->setName('home');

    $app->get('/profile/{slug}', 'App\Controllers\ProfileController:show')->setName('profile.show');