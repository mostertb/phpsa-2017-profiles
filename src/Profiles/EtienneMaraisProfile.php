<?php

namespace mostertb\PHPSA2017Profiles\Profiles;

use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class EtienneMaraisProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Etienne Marais';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'Etienne is passionate about clean code, Good music '
            . 'and great coffee. He loves coding for the web and create '
            . 'amazing api\'s';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://avatars3.githubusercontent.com/u/4479918?v=4&s=460';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'etiennemarais';
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
        return array(
            'etiennemarais/lumen-starter-api' => 'https://github.com/etiennemarais/lumen-starter-api',
            'laravel-notification-channels/clickatell' => 'https://github.com/laravel-notification-channels/clickatell',
            'etiennemarais/hubot-yesnowtf' => 'https://github.com/etiennemarais/hubot-yesnowtf',
        );
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
        return array(
            'spatie/last-fm-now-playing' => 'https://github.com/spatie/last-fm-now-playing',
            'mjmlio/mjml' => 'https://github.com/mjmlio/mjml',
            'Superbalist/monolog-google-cloud-json-formatter' => 'https://github.com/Superbalist/monolog-google-cloud-json-formatter',
        );
    }
}
