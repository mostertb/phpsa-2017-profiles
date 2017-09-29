<?php
/**
 * @author: Gavin Schreiber gavin@zando.co.za
 */

namespace mostertb\PHPSA2017Profiles\Profiles;

use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class GavinSchreiberProfile extends AbstractProfile
{
    public function getBiography()
    {
        return "Senior fullstack developer @Zando.co.za. If it's not challenging its not fun.";
    }

    public function getName()
    {
        return 'Gavin Schreiber';
    }

    public function getGitHubUsername()
    {
        return 'GavinCS';
    }

    public function getProfileImageURL()
    {
        return 'https://avatars1.githubusercontent.com/u/3840274?v=4&s=460';
    }

    public function getMaintainedProjects()
    {
        return [
            'SnapScan' => 'https://github.com/gavincsch/snap-scan'
        ];
    }

    /**
     * @return array
     */
    public function getInvolvedProjects()
    {
        return [
            'laravel/cashier' => 'https://github.com/laravel/cashier'
        ];
    }

}