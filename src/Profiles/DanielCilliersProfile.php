<?php

namespace mostertb\PHPSA2017Profiles\Profiles;

class DanielCilliersProfile extends AbstractProfile
{
    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Daniel Cilliers';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'PHP deveolper for PayFast, but skilled in fullstack as well.';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'Danie-ZA';
    }
}