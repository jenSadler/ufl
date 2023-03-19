<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unitarian Fellowship of London</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/navbar-v2.css">
    <?php wp_head()?>
  </head>

  <body>
  

  

  <nav class="navbar navbar-expand-md navbar-dark" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    
        
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'my-custom-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarSupportedContent',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
   
    </div>
</nav>
<div class="rainbow-box"></div>
<header class="hold-header">
   
   <div class="container">
     <div class="header-container">
       <div class="header-text-container">
       <h1 class="header-title">Unitarian Fellowship of London</h1>
       <p class="header-subtitle">Lorum Ipsum Dolor Sit. Lorum Ipsum Dolor Sit. Lorum Ipsum Dolor Sit</p>
       </div>
     </div>
   </div>
 </header>
  
