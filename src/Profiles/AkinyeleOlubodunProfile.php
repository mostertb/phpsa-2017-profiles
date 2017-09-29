<?php

namespace mostertb\PHPSA2017Profiles\Profiles;


use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class AkinyeleOlubodunProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Akinyele Olubodun';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'Akinyele Olubodun is the founder of Ogaranya.com, SMS and ChatBot based ordering and payment solution.<br>' .
            'He is also the founder of the Access for youths to information technology initiative. An initiative that teaches kids between ages 7 and 13 how to code from zero to professional <br />' .
            'He is an exceptional leader and he loves Mathematics. <br>' .
            'He loves to changed the world. <br>' . '
            He hates git conflict.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://s.gravatar.com/avatar/d207351c8a34866fb8a05d0a47748697?s=80';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'akinyeleolubodun';
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
            'OpenSourceAfrica/lacecart' => 'https://github.com/OpenSourceAfrica/lacecart',
            'akinyeleolubodun/iCashBook' => 'https://github.com/akinyeleolubodun/iCashBook',
            'akinyeleolubodun/PHP-MS-Dynamics-CRM' => 'https://github.com/akinyeleolubodun/PHP-MS-Dynamics-CRM',
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
        return [];
    }
}
