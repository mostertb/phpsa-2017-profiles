<?php
namespace mostertb\PHPSA2017Profiles;

use mostertb\PHPSA2017Profiles\Profiles\AbdurahimShariffProfile;
use mostertb\PHPSA2017Profiles\Profiles\AbstractProfile;
use mostertb\PHPSA2017Profiles\Profiles\AkinyeleOlubodunProfile;
use mostertb\PHPSA2017Profiles\Profiles\AlexBlakeProfile;
use mostertb\PHPSA2017Profiles\Profiles\BradMostertProfile;
use mostertb\PHPSA2017Profiles\Profiles\GeoffGarbersProfile;
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
    private $profiles;

    /**
     * Kernel constructor.
     */
    public function __construct()
    {
        $this->profiles = array(
            new BradMostertProfile(),
            new JonathanBossengerProfile(),
            new DuwayneBrownProfile(),
            new RonDarbyProfile(),
            new AbdurahimShariffProfile(),
            new DanielCilliersProfile(),
            new AkinyeleOlubodunProfile(),
            new RoyFoubisterProfile(),
            new JohnRouxProfile(),
            new JohnMcMurrayProfile(),
            new VauneenPietersenProfile(),
            new KittyProfile(),
            new AbdurahimShariffProfile(),
            new DanielCilliersProfile(),
            new EdwardLubbeProfile(),
            new EtienneMaraisProfile(),
            new AlexBlakeProfile(),
            new PuffyProfile(),
            new GeoffGarbersProfile(),
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
