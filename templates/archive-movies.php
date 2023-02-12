<?php
get_header();
?>

<h2>I'm the Archive-Movies Page</h2>

<?php
 
while(have_posts()){
   the_post(); ?>
   <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
   <?php the_content(); ?>
<?php
}
 
get_footer();