<?php

namespace mostertb\PHPSA2017Profiles\Profiles;

use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class DuwayneBrownProfile extends AbstractProfile
{
    public function getName()
    {
        return 'Duwayne Brown';
    }

    public function getBiography()
    {
        return 'Just really wants a JetBrains license - have a look at <a href"http://www.hashtec.co.za">Hashtec</a>';
    }

    public function getGitHubUsername()
    {
        return 'MisterBrownRSA';
    }

    public function getProfileImageURL()
    {
        return 'https://en.gravatar.com/userimage/109408562/73388ef3fa14073232fee688482851d4.jpg?size=80';
    }
}
