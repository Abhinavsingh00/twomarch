<?php  /* Template Name: blog page */  
 get_header();
?>
<div class="container">
<div class="abut">
            <h1>BLOG PAGE </h1>
        </div>
        <div class="cont">
        <h3>Lorem Ipsum is not simply random text. It haorem Ipsum passage, ssical literature, discovered the undoubtable source. Lorem Ipsum comes from sectionsby Cicero, written in 45 BC. This book is a The first line. </h3>
</div>




<!-- THIS IS USED FOR TO GET POSTS IN BLOG PAGE  -->

<?php
$args = array(
    'post_type' => 'post',     // Number of posts to display
);

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();?>
      
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); 
    endwhile;
    wp_reset_postdata(); // Reset post data to the main loop
else :
    // No posts found
endif;
?> 

      <section class="blogg">
                     <div class="blogimag">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/worker.jpg" alt="box">
                     <div>
      </section>
        
</div>

<?php 
 get_footer();
?>
