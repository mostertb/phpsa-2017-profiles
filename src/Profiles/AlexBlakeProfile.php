<?php

namespace mostertb\PHPSA2017Profiles\Profiles;


class AlexBlakeProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Alex Blake';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'Alex is the lead developer at <a href="http://assemble.co.za" target="_blank">Assemble</a>, and focused on solving problems. Alex aims to build systems that are scalable and solid, and believes heavily in defensive programming styles. His experience includes: Java, Python, PHP, JS/NodeJS.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://assemble.co.za/files/Member/701457607270.png';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'AlexBlake';
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
          'AlexBlake/polymapper' => 'https://github.com/AlexBlake/polymapper',
          'AlexBlake/php-chartling' => 'https://github.com/AlexBlake/php-chartling',
          'AlexBlake/wpvulndb-query' => 'https://github.com/AlexBlake/wpvulndb-query',
          'AlexBlake/eloquentsearch' => 'https://github.com/AlexBlake/eloquentsearch'
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
        return array(
            'Code4SA/mma-dexter' => 'https://github.com/Code4SA/mma-dexter'
        );
    }
}