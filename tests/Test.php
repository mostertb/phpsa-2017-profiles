<?php

use mostertb\PHPSA2017Profiles\Kernel;
use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class BasicTest extends PHPUnit_Framework_TestCase
{
    public function testKernelLoadsAtLeastOneProfile()
    {
        $kernel = new Kernel();
        $profileCount = count($kernel->getProfiles());
        $this->assertGreaterThan(0, $profileCount, 'Kernel should load at least one profile');
    }

    /**
     * @dataProvider profileProvider
     * @param AbstractProfile $profile
     */
    public function testNameNotEmpty(AbstractProfile $profile)
    {
        $this->assertNotEmpty(trim($profile->getName()), 'getName() of profile cannot return an empty string');
    }

    /**
     * @dataProvider profileProvider
     * @param AbstractProfile $profile
     */
    public function testBiographyNotEmpty(AbstractProfile $profile)
    {
        $this->assertNotEmpty(trim($profile->getBiography()),
            'getBiography() of profile cannot return an empty string');
    }

    /**
     * @dataProvider profileProvider
     * @param AbstractProfile $profile
     */
    public function testGithubUsernameNotEmpty(AbstractProfile $profile)
    {
        $this->assertNotEmpty(trim($profile->getGitHubUsername()),
            'getGitHubUsername() of profile cannot return an empty string');
    }

    /**
     * Provider that returns an array of all profiles loaded in the Kernel
     *
     * @return array
     */
    public function profileProvider()
    {
        $ret = [];
        foreach ((new Kernel())->getProfiles() as $profile) {
            $ret[] = [$profile];
        }

        return $ret;
    }
}
