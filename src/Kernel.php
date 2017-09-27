<?php
namespace mostertb\PHPSA2017Profiles;

use mostertb\PHPSA2017Profiles\Profiles\AbstractProfile;
use mostertb\PHPSA2017Profiles\Profiles\AkinyeleOlubodunProfile;
use mostertb\PHPSA2017Profiles\Profiles\BradMostertProfile;
use mostertb\PHPSA2017Profiles\Profiles\AbdurahimShariffProfile;
use mostertb\PHPSA2017Profiles\Profiles\DanielCilliersProfile;
use mostertb\PHPSA2017Profiles\Profiles\RoyFoubisterProfile;
use mostertb\PHPSA2017Profiles\Profiles\DuwayneBrownProfile;
use mostertb\PHPSA2017Profiles\Profiles\JohnMcMurrayProfile;
use mostertb\PHPSA2017Profiles\Profiles\JohnRouxProfile;
use mostertb\PHPSA2017Profiles\Profiles\KittyProfile;
use mostertb\PHPSA2017Profiles\Profiles\EdwardLubbeProfile;

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
            new AbdurahimShariffProfile(),
            new DanielCilliersProfile(),
            new AkinyeleOlubodunProfile(),
            new RoyFoubisterProfile(),
            new DuwayneBrownProfile(),
            new JohnRouxProfile(),
            new JohnMcMurrayProfile(),
            new KittyProfile(),
            new EdwardLubbeProfile(), 
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
