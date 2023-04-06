
<?php get_header();?>

    <main class="main-container">
<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        if(is_home() || is_single()): ?>
            
            <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
             <header class="hold-header front-header main-header" style="background-image:linear-gradient(to bottom, rgba(60, 58, 115, 0.60), rgba(60, 58, 115, 0.80)),url('<?php echo $large_image_url[0]?>');">
   
                <div class="container">
                    <div class="header-container">
                    
                    <div class="header-text-container">
                    <?php if (has_site_icon()): ?>
                        <img src="<?php echo get_site_icon_url();?>" class="chalice-logo hide-on-screen"  alt="logo"/>
                        <?php endif;?>
      
                        <h1 class="header-title"><?php echo get_the_title();?></h1>
                    
                    </div>
                    </div>
                </div>
        </header>
        
        <?php endif;?>
        <div class="container">
            <?php the_content();?>
            <?php if(is_home()):?>
                <div class="pagination-links">
            <div class="nav-previous "><?php next_posts_link( '〈 View Older Posts' ); ?></div>
            <div class="nav-next "><?php previous_posts_link( 'View Newer Posts 〉' ); ?></div>
            </div>
            <?php endif;?>
        </div>
   <?php endwhile;?>

<?php else:?>
    <?php if(is_home()):?>
        <header class="hold-header front-header main-header" style="background-image:linear-gradient(to bottom, rgba(60, 58, 115, 0.60), rgba(60, 58, 115, 0.80)),url('<?php echo get_template_directory_uri(); ?>/assets/img/background.jpg');">
   
        <div class="container">
       <div class="header-container">
       
       <div class="header-text-container">
         <h1 class="header-title">News</h1>
       
       </div>
       </div>
   </div>
    </header>
   
    <?php $subHeaderContent = "No News Available";?>
    <?php $content = "<p> Sorry, there are currently no news items posted. You may be interested in checking out our other pages: </p>";?>
"
    <?php else:?>
       
    <?php $subHeaderContent = "I couldn't find that page";?>
    <?php $content = "<p> Sorry, there are currently no pages that meet that description. You may be interested in checking out our other pages: </p>";?>
"
    <?php endif;?>
 





    <div class="container">
        <div class="hold-no-posts">
            <div class="no-posts-text">
            <h2><?php echo $subHeaderContent;?></h2>
            <?php echo $content;?>
           <?php wp_nav_menu( array(
            'theme_location'    => 'footer-2',
            'depth'             => 1,
            'container'         => 'div',
            'container_class'   => 'footer-nav social-footer',
            
        ) ); ?>
        
        </div>
    </div>
 
</div>

<?php endif;?>
</main>

 
 <?php get_footer();?>
