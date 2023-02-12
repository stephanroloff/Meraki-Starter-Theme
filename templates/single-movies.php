<?php

get_header();
?>
<h2>I'm single-movie.php</h2>
<p>I'm used for individual custom type posts</p>

<h1><?php the_title(); ?></h1>
<a href="<?php echo get_post_type_archive_link('movies'); ?>">All MOVIES</a>

<?php
the_content(); 

get_footer();