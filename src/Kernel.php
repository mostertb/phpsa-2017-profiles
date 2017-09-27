<?php
namespace mostertb\PHPSA2017Profiles;

use jonathanbossenger\PHPSA2017Profiles\Profiles\JonathanBossengerProfile;
use mostertb\PHPSA2017Profiles\Profiles\AbstractProfile;
use mostertb\PHPSA2017Profiles\Profiles\BradMostertProfile;

class Kernel
{
    /**
     * @var AbstractProfile[]
     */
    private $profiles;

    /**
     * Kernel constructor.
     */
    public function __construct()
    {
        $this->profiles = array(
            new BradMostertProfile(),
	        new JonathanBossengerProfile()
        );
    }

    /**
     * @return AbstractProfile[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }
}