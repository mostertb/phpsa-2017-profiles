<?php

namespace mostertb\PHPSA2017Profiles\Profiles;

use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class BernhardBreytenbachProfile extends AbstractProfile
{
    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return '<script>alert('Bernhard Breytenbach');</script>';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'Protector of the ElePHPants.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://secure.gravatar.com/avatar/6ed834a4798f358f7ea663f54dd6d9ea.jpg?s=500';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'xethron';
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
            'Laravel Migrations Generator' => 'https://github.com/Xethron/migrations-generator',
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
            'Symposium' => 'https://github.com/Xethron/symposium',
            'PHPSA 2017 Profiles' => 'https://github.com/Xethron/phpsa-2017-profiles',
        );
    }
}
