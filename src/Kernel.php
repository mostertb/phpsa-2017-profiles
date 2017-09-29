<?php

namespace mostertb\PHPSA2017Profiles;

use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

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
            if (strpos($file, 'Profile') > 1) {
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
