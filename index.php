<!DOCTYPE html>


       <?php wp_nav_menu(
           array(
            'menu' => 'menu1'
        ) ); ?>
        
        <?php wp_nav_menu(
           array(
            'menu' => 'menu2'
        ) ); ?>
        
        <?php wp_nav_menu(
           array(
            'menu' => 'menu3'
        ) ); ?>
        
        <?php get_header(); ?>
        <?php get_sidebar("home_right_1"); ?>
        <?php 
        if (have_posts()) {
         while (have_posts()) {
            the_post(); ?>
            <h2 id="post-<?php the_ID(); ?>">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
            <?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y') ?>  by <?php the_author() ?> </small>
            <?php the_content();
         }
        }
        
       ?>
        
 
 
 
 
 
 
       <?php get_footer();?> 


