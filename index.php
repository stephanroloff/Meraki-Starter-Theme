<?php get_header();?>

<?php 
   if(is_front_page()): require_once(__DIR__ . '/templates/front-page.php'); 
   elseif(is_page()): require_once(__DIR__ . '/templates/page.php');
   elseif(is_single()): require_once(__DIR__ . '/templates/single.php');
   else:
?>
      <h2>I'm the Blog Page</h2>
      <?php get_template_part('template-parts/content', 'test'); ?>
      <?php do_action("action_test"); ?>
      
      <?php while(have_posts()):the_post(); ?>
            <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
            <?php the_content(); ?>
      <?php endwhile; ?>

<?php endif;?>

<?php get_footer();?>