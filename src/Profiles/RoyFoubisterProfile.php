<?php

namespace mostertb\PHPSA2017Profiles\Profiles;


use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class RoyFoubisterProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Roy Foubister';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'Roy serves coffee to his team of UX, designers and devs.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://s.gravatar.com/avatar/ae9f0ada620b856b11473c23f9a95751?s=80';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'dodge107';
    }
}
