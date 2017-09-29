<?php
namespace mostertb\PHPSA2017Profiles;

use mostertb\PHPSA2017Profiles\Profiles\AbdurahimShariffProfile;
use mostertb\PHPSA2017Profiles\Profiles\AbstractProfile;
use mostertb\PHPSA2017Profiles\Profiles\AkinyeleOlubodunProfile;
use mostertb\PHPSA2017Profiles\Profiles\AlexBlakeProfile;
use mostertb\PHPSA2017Profiles\Profiles\BradMostertProfile;
use mostertb\PHPSA2017Profiles\Profiles\JonathanBossengerProfile;
use mostertb\PHPSA2017Profiles\Profiles\DanielCilliersProfile;
use mostertb\PHPSA2017Profiles\Profiles\DuwayneBrownProfile;
use mostertb\PHPSA2017Profiles\Profiles\EdwardLubbeProfile;
use mostertb\PHPSA2017Profiles\Profiles\EtienneMaraisProfile;
use mostertb\PHPSA2017Profiles\Profiles\JohnMcMurrayProfile;
use mostertb\PHPSA2017Profiles\Profiles\JohnRouxProfile;
use mostertb\PHPSA2017Profiles\Profiles\VauneenPietersenProfile;
use mostertb\PHPSA2017Profiles\Profiles\KittyProfile;
use mostertb\PHPSA2017Profiles\Profiles\PuffyProfile;
use mostertb\PHPSA2017Profiles\Profiles\RonDarbyProfile;
use mostertb\PHPSA2017Profiles\Profiles\RoyFoubisterProfile;

class Kernel
{
    /**
     * @var AbstractProfile[]
     */
    private $profiles = [];

    /**
     * Kernel constructor.
     */
    public function __construct()
    {
        $files = scandir(__DIR__ . '/../src/Profiles', true);
        foreach ($files as $file) {
            if (strpos($file, 'Profile') > 1 ) {
                $className = 'mostertb\\PHPSA2017Profiles\\Profiles\\' . basename($file, '.php');
                $this->profiles[] = new $className();
            }
        }
    }

    /**
     * @return AbstractProfile[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }
}
