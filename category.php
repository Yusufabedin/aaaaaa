<?php get_header(); ?>
<?php 
if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_title();
		the_content();

	
 // echo " hello";


?>
<div class="col-md-6">
<a href="<?php the_permalink(); ?>">
<img class="image" src="<?php the_post_thumbnail_url(); ?>" alt="" />
</a>
<?php
}

}else {echo "no post here";}
?>
</div>
