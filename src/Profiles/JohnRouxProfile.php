<?php

namespace mostertb\PHPSA2017Profiles\Profiles;


class JohnRouxProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName()
    {
        return 'John Roux';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return 'John is a Dev and DevOps Engineer, currently working at HyveMobile in Cape Town<br>'.
            'He is a regular at PHP meetups, involved in a lot of Scouts work and in invested in civic tech<br>'
            'Otherwise he\'s just a regular guy, always keen for a beer/wine/tea/coffee and chat :)'
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://ca.slack-edge.com/T03A23LJR-U1MP3JV24-1d2f8eb3950a-512';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'Vulcanit3';
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
            'MetaScout' => 'https://www.metascout.co.za',
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
            'MetaScout' => 'https://www.metascout.co.za',
            'ZATech' => 'https://zatech.co.za'
        );
    }
}