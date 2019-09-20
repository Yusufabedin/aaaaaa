<?php get_header(); ?>
<?php wp_head(); ?>
<?php 
if (have_posts()) {
	while (have_posts()) {
		the_post();
?>
<div class="col-md-12">
	<h1><?php the_title();?></h1>
<a href="<?php the_permalink(); ?>">

<img class="image" src="<?php the_post_thumbnail_url(); ?>" alt=""/>
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
 <a href="<?php bloginfo('url'); ?>/<?php the_time('Y') ?>/<?php the_time('m') ?>/<?php the_time('j') ?>"><?php echo get_the_date(); ?></a>
</a>
<p><?php the_content();?></p>
<?php
}

}else {echo "no post here";}
?>
</div>
