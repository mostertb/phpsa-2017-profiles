<?php

namespace mostertb\PHPSA2017Profiles\Profiles;


use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class AbdurahimShariffProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Abdurahim Shariff';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'Abdurahim in an intermediate developer at iJet International.<br>';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'abdurahims';
    }

}
