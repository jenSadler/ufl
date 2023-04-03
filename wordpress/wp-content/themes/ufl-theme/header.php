<?php  $event_id = get_the_ID(); // Or you can get it from request parameters
       $data = get_post_meta($event_id, 'mec_fields', true);
      
       if($data == ""){
        $isEvent = false;
       }
       else{
        $isEvent = true;
       }
?>
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
  <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
   

  

  <nav class="navbar navbar-expand-sm navbar-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="brand" href="<?php echo get_home_url();?>"><?php if (has_site_icon()): ?>
        <img src="<?php echo get_site_icon_url();?>" class="nav-logo"  alt="logo"/>
        
      <?php else:?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/universalist-logo.png" class="nav-logo"  alt="logo"/>
          
      <?php endif;?>UFL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    
        
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'main-nav',
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
<?php if(is_front_page()):?>
  <?php if(has_post_thumbnail()): ?>
      <header class="hold-header front-header main-header" style="background-image:linear-gradient(to bottom, rgba(60, 58, 115, 0.60), rgba(60, 58, 115, 0.80)),url('<?php echo $large_image_url[0]?>');">
   <?php else: ?>
      <header class="hold-header front-header main-header">
  <?php endif; ?>
   <div class="container">
     <div class="header-container">
      <?php if (has_site_icon()): ?>
        <img src="<?php echo get_site_icon_url();?>" class="header-logo"  alt="logo"/>
        
      <?php else:?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/universalist-logo.png" class="header-logo"  alt="logo"/>
          
      <?php endif;?>

      
       <div class="header-text-container">
         <h1 class="header-title"><?php echo get_bloginfo( 'name' ); ?></h1>
       <p class="header-subtitle"><?php echo get_bloginfo( 'description' ); ?></p>
       </div>
     </div>
   </div>
   </header>
   <?php elseif( has_post_thumbnail() && !$isEvent ) :?>
   
    <header class="hold-header front-header main-header" style="background-image:linear-gradient(to bottom, rgba(60, 58, 115, 0.60), rgba(60, 58, 115, 0.80)),url('<?php echo $large_image_url[0]?>');">
   
   <div class="container">
     <div class="header-container">
     
       <div class="header-text-container">
         <h1 class="header-title"><?php echo get_the_title();?></h1>
    
       </div>
     </div>
   </div>
   </header>
   
  <?php elseif(!$isEvent):?>
    <header class="non-hold main-header">
    <div class="container">
    <h1 class="non-front"><?php echo get_the_title();?></h1>
   </div>
   </header>

   <?php else:?>
    <header class="non-hold main-header">
    <div class="container">
   </div>
   </header>
   <?php endif; ?>
 
  
