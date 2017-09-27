<?php
/**
 * Created by PhpStorm.
 * User: ron
 * Date: 2017/09/27
 * Time: 1:45 PM
 */

namespace mostertb\PHPSA2017Profiles\Profiles;


class RonDarbyProfile extends AbstractProfile {

  /**
   * Provides the full name of the person that the profile is about
   *
   * @return string
   */
  public function getName() {
    return 'Ron Darby';
  }

  /**
   * Provides a paragraph of text about the person that the profile is about
   *
   * @return string
   */
  public function getBiography() {
    $bio = 'I\'m a freelance full stack developer. I started coding back in 2007 as a hobby, and pretty quickly it became<br>
    an obsession which then became my primary source of income. my resume is available online at https://www.resumonk.com/rondarby.<br> 
    <br>
    I\'m married to my high school sweet heart, have 4 kids and a cat. I ride a motorcycle and am a founder member of The Anonymous Riders SMC.<br> 
    <i>I dream in code and live for learning new stuff.</i>';

    return $bio;
  }

  public function getProfileImageURL()
  {
    return 'https://secure.gravatar.com/avatar/5cb559a7459354dbfb5c4cc0f7c28256';
  }

  /**
   * Should return the GitHub username of the person the bio is about. This is used to generate links to the person's
   * OpenSource projects
   *
   * @return string
   */
  public function getGitHubUsername()
  {
    return 'rondarby';
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
      'mostertb/phpsa-2017-profiles' => 'https://github.com/mostertb/phpsa-2017-profiles'
    );
  }
  
}