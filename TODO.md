# To Dos

The base version of this project is very basic. If you're excited to get more involved than just submitting a profile,  
here a a bunch of ideas for things that this project needs.

Pull Request for these idea's will qualify you for a [custom GitHub sticker](https://github.myshopify.com/products/octodex-sticker-packs)
or two.

Before you start to work on one of these, please open a Issue on this project to tell everyone that you are working on it
so that we don't duplicate work.

- [ ] **Default Profile Pic**
Show some default image for Profiles which return an empty string or `null` from `AbstractProfile::getProfileImageURL()
   
- [ ] **Local Profile Pics**
It would be nice to add the option for profiles to commit their images to the project and have them served out of
`/public/media/images` so that the is less reliant on external services

This would need to be done so that it is a non-breaking change

- [ ] **Automatic Loader for Profiles**
It would be helpful to contributors to not have to add their profile class to the `Kernel` constructor. Code to look in
the `src/Profiles` directory for all classes that extend `AbstractProfile` and instantiate an array of objects from them
is the name of the game here

You may want to include some other composer packages to assist with this

- [ ] **Templating Engine** 
Being worked on by @MisterBrownRSA in #14 

Typing out a long biography for `AbstractProfile::getBiography()` is tedious. We should look at replacing this with TWIG.

If your feeling adventurous, the same is true for the index.php page

- [ ] **Load Each Profile on its own page**
Speaks for itself. Bonus points for SEO urls...

# Finished To DOs

- [x] **Tests and CI**  
We need some basic test coverage to make merging PRs easier. Once this is done, we'll add Travis CI integration.

This will probably involve:
 
 * Adding PHP Unit to the project
 * A basic 'functional test' to ensure that the project doesnt fatal error
 * Possibly test that all of the required fields of all of the Profiles are not empty strings (A provider that uses `Kernel::getProfiles()`
   would work well here)