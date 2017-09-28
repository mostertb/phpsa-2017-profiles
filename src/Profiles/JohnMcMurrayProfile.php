<?php

namespace mostertb\PHPSA2017Profiles\Profiles;

use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class JohnMcMurrayProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'John McMurray';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'John is a PHP / embedded C developer and serial entrepreneur... He live at the sea and often does trail running in an effort to combat his chocolate binges';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://en.gravatar.com/userimage/1413968/cf9c8ba50e2b240a590dcc95b40d8c98.jpeg';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'jsmcm';
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
            'jsmcm/editor' => 'https://github.com/jsmcm/editor',
            'jsmcm/spam-trap-for-contact-form-7' => 'https://github.com/jsmcm/spam-trap-for-contact-form-7',
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
        return array();
    }
}
