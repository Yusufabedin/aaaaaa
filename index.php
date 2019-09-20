<?php get_header(); ?>
<div class="container">
    <div class="row">
<?php
if(have_posts()){
while (have_posts()) {
    the_post();

?>

<div class="col-md-12">
<a href="<?php the_permalink(); ?>">
<h1 class="title-text"><?php the_title(); ?></h1>
</a>
<?php the_tags(); ?>
</div> 




<div class="col-md-6">
<a href="<?php the_permalink(); ?>">
<img class="image" src="<?php the_post_thumbnail_url(); ?>" alt="" />
</a>

</div>


<div class="col-md-6 content-text">
<?php 
$readmore = __( 'read more', 'mythemepo st' );
$more = '<p> <a href=" '. get_permalink() .' "> '. $readmore .' </a> </p>';
echo wp_trim_words( get_the_content(), 30, $more );

 ?>
 <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>"><?php echo get_the_author_meta('display_name'); ?></a>
 <a href="<?php bloginfo('url'); ?>/<?php the_time('Y') ?>/<?php the_time('m') ?>/<?php the_time('j') ?>"><?php echo get_the_date(); ?></a>
 </div>

<?php
}

}else "No post Here";
// echo 'hello';
?>

<div class="col-md-6 mr-auto"> 
<?php 
the_posts_pagination(array(
    "screen_reader_text"=>" ",
    "prev_text"=> "New posts",
    "netx_text"=> "Old posts",

));

?>
</div>

</div>
<div class="col-md-12">
    <?php wp_list_categories(); ?>
</div>

<?php if(dynamic_sidebar('level_up_new_widget_area')) : else : endif; ?>
</div>

<?php wp_footer(); ?>


<script src="https://kit.fontawesome.com/d7804158f3.js"></script>
</body>
</html>