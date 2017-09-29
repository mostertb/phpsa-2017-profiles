<?php

namespace mostertb\PHPSA2017Profiles\Profiles;

use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class EdwardLubbeProfile extends AbstractProfile
{
    public function getName()
    {
        return 'Edward Lubbe';
    }

    public function getBiography()
    {
        return 'http://www.edwardlubbe.co.za';
    }

    public function getGitHubUsername()
    {
        return 'edwardlubbe';
    }
}
