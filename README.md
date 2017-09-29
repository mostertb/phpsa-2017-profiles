# PHP South Africa 2017 Profiles
[![Build Status](https://travis-ci.org/mostertb/phpsa-2017-profiles.svg?branch=master)](https://travis-ci.org/mostertb/phpsa-2017-profiles)

This is a fun project intended to provide a safe environment in which to practice the mechanics of contributing to a 
GitHub project.
It was spawn out of the [PHP South Africa Conference](http://phpsouthafrica.com/). For more details, visit our
[homepage](http://www.phpsa2017profiles.co.za).

Come take part to get involved in Open Source, promote projects, win stickers and introduce yourself.

# View this project online

The master branch is regularly rolled out to production. It can be viewed online at [http://www.phpsa2017profiles.co.za/](http://www.phpsa2017profiles.co.za)

## Instructions 

### Step One
Fork this Repo

### Step Two

Extend the `mostertb\PHPSA2017Profiles\Abstracts\AbstractProfile` class as `mostertb\PHPSA2017Profiles\Profiles\<YourName>Profile`

### Step Three 

Implement the following methods:
* getName()
* getBiography()
* getGitHubUsername()
* getProfileImageURL() (optional)
* getMaintainedProjects() (optional)
* getInvolvedProjects() (optional)

If you get stuck, just look at someone else's Profile class for inspiration...

### Step Four

Run the PHPUnit test and check that they pass:

In the root directory of the project:
 ```bash
    $ vendor/phpunit/phpunit/phpunit
 ```

### Step Five
Submit Pull Request  ([How TO](https://help.github.com/articles/about-pull-requests/) | [Pull Request from a fork](https://help.github.com/articles/creating-a-pull-request-from-a-fork))

### Step Six 

Tweet your Pull Request [@PHPSouthAfrica](https://twitter.com/PHPSouthAfrica) with the tag [#PHPSA2017Profiles](https://twitter.com/search?f=tweets&q=%23PHPSA2017Profiles)

*This step is super important to the humor :)*

### Step Seven
PROFIT $$

Once your Pull Request is accepted, go say hi to Brad Mostert and he'll give you a GitHub sticker!

## Where To Next
Now that you are one more 'OpenSource' contribution stronger, why not go have a look at Digital Ocean's 
[Hacktoberfest](https://hacktoberfest.digitalocean.com/) initiative.

Alternatively, have a look at the projects that the other contributors to PHP South Africa 2017 Profile are involved in and go code
  with your fellow conference attendees
  
Why not also have a look at the `TODO.md` file in this repository for ideas if you would like to continue to contribute to 
this project
  
## Running Locally
You can easily run a version of this project on your local dev environment by:
 
 First running a `composer install` to generate an autoloader:
 ```bash
    $ composer install
 ```
 
 Switch to the `public` directory
  ```bash
    $ cd public
  ```
  Serve using the built-in PHP webserver:
  ```bash
    $ php -S 127.0.0.1:8000
  ```
  
  Open the page in your web browser by going to [http://127.0.0.1:8000/index.php](http://127.0.0.1:8000/index.php)
