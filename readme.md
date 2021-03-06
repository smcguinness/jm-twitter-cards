# JM Twitter Cards #

Easy integration of Twitter cards in WordPress. All card types provided.

## Description ##

This is the github version of the official repository for JM Twitter Cards. It's hardly a fork but I'm working on ! I'm trying to improve code structure and I'm adding some cool stuffs.


## Changelog ##

# 5.2.0 #
* 25 Apr 2014
* Add confirmation message for option page when settings are saved
* Add translation in Spanish
* Fix bug with capability name


# 5.1.9 #
* 20 Apr 2014
* Fix fallback All In One SEO title
* Put the card type selected in admin option page as default setting for meta box because it so a pain to select it on each post when meta box is enabled ^^
* Note that if you want to change card type for a particular post you'll need to use this select
* Everything that can be default is now set so even you do not have to set it if you do not want to
* Will save your time !
* Fix bug with get_post_meta and custom fields
* Fix escaping issue with desc and title from WP SEO by Yoast
* Can't wait for Spanish Version \o/
* Rebuild French Translation
* Add tutorial menu with videos explaining how to use the plugin

# 5.1.8 #
* 16 Apr 2014
* fix bug with All In One SEO 
* fix bug with older wordpress version before 3.5 : kinda of gracious degradation
* add the additional parameter src for image as default for every meta image, this should make the Twitterbot treat the image as a unique URL and re-fetches the image

# 5.1.7 #
* 15 Apr 2014
* fix PHP 5.4 warning when calling static method
* compatibility with older versions of PHP 
* fix jetpack error with PHP_INT_MAX BUG

# 5.1.4 #
* 12 Apr 2014
* fix notices undefined var
* last changes and fixes before pushing it on wordpress.org
* change version number for beta tester, they need to have the last fixes ^^

# 5.1.3 #
* 10 Apr 2014
* fix admin menu 
* add styles to about page
* beta version

# 5.1.2 #
* 09 Apr 2014
* add checking for featured image's weight
* reorganize code and pages

# 5.1.1 #
* 08 Apr 2014
* split admin into several pages to make it clearer for users

# 5.1 #
* 06 Apr 2014
* framework cmB update 
* bugfixes with metaboxes, thumbnails and notices

# 5.0 #
* 30 Mar 2014
* Reformat the entire code. Split the code into several files so it's now better for maintenance. 
* Keep the same keys so you do not have to re-set the plugin options
* Delete fancy design - I kinda loved it but it's too far from native WP UI, some users have difficulties in setting it.
* Use now a framework for metabox and other stuffs so I have not to rewrite all the things to add features
* Add src extra parameter to meta image so that the Twitterbot treats the image as a unique URL and re-fetches the image
