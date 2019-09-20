<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php bloginfo("name"); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<?php wp_head(); ?>
    <div class="container">
        <div class="row">
          <div class="col-md-4 logo">
        <?php
            if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
        }
   
        ?>
      </div>
          <div class="col-md-8">
      <div class="nav">
        <?php 
       $args = array(
       'theme_location'  => 'menu-1',
       'menu_class'      => 'nav navbar-nav',
          
        );
       wp_nav_menu($args)
                     
          ?>
      </div>
      

          </div>
        </div>
    </div>
</header>






<script src="https://kit.fontawesome.com/d7804158f3.js"></script>
</body>
</html>

