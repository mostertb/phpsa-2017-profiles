<?php

namespace mostertb\PHPSA2017Profiles\Profiles;


use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class FrancoisSteynProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Francois Steyn';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'Francois recently joined Zando and is currently busy with a lot of optimizations';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://avatars1.githubusercontent.com/u/1469570?v=4&s=460';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'TFyre';
    }

}
