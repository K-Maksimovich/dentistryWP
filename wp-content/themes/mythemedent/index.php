
<?php session_start(); ?>

<?php get_header(); ?>


    <?php
        if (have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        } else{
            _e("Sorry, no posts", 'textdomain');
        }
    ?>



    <?php get_footer(); ?>
