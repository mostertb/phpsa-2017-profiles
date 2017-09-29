<?php

$app->get('/', 'mostertb\PHPSA2017Profiles\Controllers\HomeController:index')->setName('home');

$app->get('/profile/{slug}', 'mostertb\PHPSA2017Profiles\Controllers\ProfileController:show')->setName('profile.show');
