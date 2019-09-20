<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Luckiest+Guy&display=swap" rel="stylesheet">

</head>
<body>

<?php wp_head(); ?>
<div class="container">
    <div class="col-md-10">
<?php

while (have_posts()) {
    //start loop.
    the_post();

?>

<a href="<?php the_permalink(); ?>">
<h1 class="title-text"><?php the_title(); ?></h1>
</a>

<img class="image" src="<?php the_post_thumbnail_url(); ?>" alt="" />

  <p><?php the_content(); ?></p>







<?php
}
// echo 'hello';
?>



</div>
   
<?php the_posts_pagination(); ?>  
<?php wp_footer(); ?>


<script src="https://kit.fontawesome.com/d7804158f3.js"></script>
    
</body>
</html>