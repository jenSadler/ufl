
<?php get_header();?>
<div class="container">
    <main class="main-container">
<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;?>

</main>
</div>
 
 <?php get_footer();?>
