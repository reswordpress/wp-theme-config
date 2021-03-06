<?php

/**
 * Add open graph meta tags to head
 *
 * TODO: fix thumbnail bit
 */

return function($value)
{
    add_action('wp_head', function()
    {
        global $post;

        if ( ! is_object($post)) {
            return false;
        }

        setup_postdata($post);

        $thumbnail = '';
        $description = '';

        if (has_post_thumbnail($post->ID)) {
            $thumb_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
            $thumbnail = $thumb_src[0];
        } else {

            // Fallback image path?
            if ($this->config['social.fallback-image-path']) {
                $thumbnail = $this->config['social.fallback-image-path'];
            }
        }

        // Advanced custom fields image field?
        if ($this->config['social.advanced-custom-fields-image-field']) {
            $field = get_field($this->config['social.advanced-custom-fields-image-field'], $post->ID);

            if (isset($field['sizes']) && isset($field['sizes']['large'])) {
                $thumbnail = $field['sizes']['large'];
            }
        }

        // Advanced custom fields description field?
        if ($this->config['social.advanced-custom-fields-description-field']) {
          $field = get_field($this->config['social.advanced-custom-fields-description-field'], $post->ID);

          $description = $field ? $field : get_the_excerpt($post);
        }

        ?>

        <?php if ($this->config['social.facebook-app-id']) : ?>
          <meta property="fb:app_id" content="<?php echo $this->config['social.facebook-app-id'] ?>" />
        <?php endif ?>

        <meta property="og:title" content="<?php wp_title( '|', true, 'right' ) ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo get_permalink() ?>" />
        <meta property="og:image" content="<?php echo $thumbnail ?>" />
        <meta property="og:site_name" content="<?php bloginfo('name') ?>" />
        <meta property="og:description" content="<?php echo $description ?>" />
        <?php
    });
};
