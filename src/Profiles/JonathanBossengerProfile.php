<?php

namespace mostertb\PHPSA2017Profiles\Profiles;

use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class JonathanBossengerProfile extends AbstractProfile
{
    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Jonathan Bossenger';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'Jonathan is a self employed developer, currently focusing on WordPress as a platform and source of income.<br>' . 'He lives in Durbanville with his wife and 2 boys. <br>' . 'In his spare time you will find him training and teaching the art of Gracie Jiu-Jitsu or playing with whatever piece of software technology he wants to learn this week.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://s.gravatar.com/avatar/4fd3f3bbf5f32f9e4738a00d58bdbc57?s=80';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'jonathanbossenger';
    }

    /**
     * Optional function that should return an array of OpenSource projects maintained by this person.
     * The index should contain the name of the project and the value should be a url to the project's homepage (typically
     * a GitHub page)
     *
     * @return array
     */
    public function getMaintainedProjects()
    {
        return [
            'jonathanbossenger/divi-image-overlay-module' => 'https://github.com/jonathanbossenger/divi-image-overlay-module',
            'jonathanbossenger/divi-add-cart-buttons' => 'https://github.com/jonathanbossenger/divi-add-cart-buttons',
            'jonathanbossenger/aw-divi-social' => 'https://github.com/jonathanbossenger/aw-divi-social',
            'jonathanbossenger/aw-divi-auto-title' => 'https://github.com/jonathanbossenger/aw-divi-auto-title',
        ];
    }

    /**
     * Optional function that should return an array of OpenSource projects to which this person has contributed (or at least
     * recommends). The index should contain the name of the project and the value should be a url to the project's
     * homepage (typically a GitHub page)
     *
     * @return array
     */
    public function getInvolvedProjects()
    {
        return [
            'TheCraigHewitt/Seriously-Simple-Podcasting' => 'https://github.com/TheCraigHewitt/Seriously-Simple-Podcasting',
        ];
    }
}
