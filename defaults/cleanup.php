<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Head cleanup
    |--------------------------------------------------------------------------
    |
    | * Remove extra features from <head>.
    |
    | http://wpengineer.com/1438/wordpress-header/
    |
    */

    'clean-head' => true,

    /*
    |--------------------------------------------------------------------------
    | Feed cleanup
    |--------------------------------------------------------------------------
    |
    | * Remove WP version from RSS feeds.
    |
    */

    'clean-feed' => true,

    /*
    |--------------------------------------------------------------------------
    | Clean <link> tag
    |--------------------------------------------------------------------------
    |
    | * Clean up output of stylesheet <link> tags
    |
    */

   'clean-link-tag' => true,

   /*
    |--------------------------------------------------------------------------
    | Body class cleanup
    |--------------------------------------------------------------------------
    |
    | * Remove extra body_class() classes
    |
    */

   'clean-body-class' => true,

   /*
    |--------------------------------------------------------------------------
    | Remove unnecessary dashboard widgets
    |--------------------------------------------------------------------------
    |
    | http://www.deluxeblogtips.com/2011/01/remove-dashboard-widgets-in-wordpress.html
    |
    */

   'remove-dashboard-widgets' => true,

   /*
    |--------------------------------------------------------------------------
    | Remove unnecessary self-closing tags
    |--------------------------------------------------------------------------
    */

   'remove-self-closing-tags' => true,

);
