<?php

namespace mostertb\PHPSA2017Profiles\Profiles;

use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class KyleHicksonProfile extends AbstractProfile
{
    public function getName()
    {
        return 'Kyle Hickson';
    }

    public function getBiography()
    {
        return 'Senior developer at <a href="https://za.linkedin.com/company/tencent-africa" target="_blank">Tencent 
                    Africa Services</a> and passionate about machine learning ';
    }

    public function getGitHubUsername()
    {
        return 'KillaZA';
    }

    public function getProfileImageURL()
    {
        return 'https://s.gravatar.com/avatar/57657257c94ea11ff998cd89a90898c6?s=80';
    }
}
