<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php
        if ( is_singular() && comments_open() && get_option('thread_comments') )
          wp_enqueue_script( 'comment-reply' );
        ?>
        <?php
            // wp_head();
        ?>
    </head>
    <body>
      <p>I'm the content</p>
    </body>
</html>