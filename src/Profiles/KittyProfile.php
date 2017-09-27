<?php

namespace mostertb\PHPSA2017Profiles\Profiles;


class KittyProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Puss in Bootstrap';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'You worship my code, and I tolerate your github contributions.<br>
                I am lazy, please be patient before I accept your pull requests.<br>
                Meow!';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://www.autostraddle.com/wp-content/uploads/avatars/20416/c1773d96ee2ec3e5e454a58e1df174cd-bpfull.jpg';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'christopherhuman';
    }

    /**
     * Optional function that should return an array of OpenSource projects maintained by this person.
     * The index should contain the name of the project and the value should be a url to the project's homepage (typically
     * a GitHub page)
     *
     * @return array
     */
    public function getMaintainedProjects()
    {
        return array(
            'pest/control' => 'https://github.com/bugsnag/bugsnag-js',
            'tormenting/dogs' => 'https://github.com/stew/dogs',
            'extended/sleep' => 'https://github.com/cloudfoundry-community/autosleep'
        );
    }

    /**
     * Optional function that should return an array of OpenSource projects to which this person has contributed (or at least
     * recommends). The index should contain the name of the project and the value should be a url to the project's
     * homepage (typically a GitHub page)
     *
     * @return array
     */
    public function getInvolvedProjects()
    {
        return array();
    }
}