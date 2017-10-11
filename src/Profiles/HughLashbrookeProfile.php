<?php

namespace mostertb\PHPSA2017Profiles\Profiles;

use mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile;

class HughLashbrookeProfile extends AbstractProfile
{
    /**
     * Provides the full name of the person that the bio is about
     *
     * @return string
     */
    public function getName() {
        return 'Hugh Lashbrooke';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography() {
        return 'Hugh is a Community Manager for the global WordPress community where he spends most of his time helping people build open-source communities in their home towns.';
    }

    /**
     * Should return a publicly accessible URL to an image of the person that the bio is about.
     *
     * @return null|string
     */
    public function getProfileImageURL() {
        return 'https://avatars1.githubusercontent.com/u/1543143';
    }

    /**
     * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
     * OpenSource projects
     *
     * @return string
     */
    public function getGitHubUsername() {
        return 'hlashbrooke';
    }

    /**
     * Optional function that should return an array of OpenSource projects maintained by this person.
     * The index should contain the name of the project and the value should be a url to the project's homepage (typically
     * a GitHub page)
     *
     * @return array
     */
    public function getMaintainedProjects() {
        return [
            'WordPress Plugin Template' => 'https://github.com/hlashbrooke/WordPress-Plugin-Template',
        ];
    }

    /**
     * Optional function that should return an array of OpenSource projects to which this person has contributed (or at least
     * recommends). The index should contain the name of the project and the value should be a url to the project's
     * homepage (typically a GitHub page)
     *
     * @return array
     */
    public function getInvolvedProjects() {
        return [
            'WordPress'                   => 'https://github.com/wordpress/wordpress',
            'Seriously Simple Podcasting' => 'https://github.com/TheCraigHewitt/Seriously-Simple-Podcasting',
            'WooCommerce'                 => 'https://github.com/automattic/woocommerce',
        ];
    }
}
