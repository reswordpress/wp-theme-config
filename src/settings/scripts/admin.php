<?php

/**
 * Register and enqueue admin scripts
 */
return function($scripts)
{
    add_action('admin_enqueue_scripts', function() use ($scripts) {

        foreach ($scripts as $script) {

            wp_enqueue_script(
                $script['handle'],
                get_template_directory_uri() . '/' . $script['src'],
                $script['deps'],
                $script['ver'],
                $script['in_footer']
            );
        }
    });
};