<?php  /* Template Name: single page */  
 get_header();
?>

<div class="container">
<div class="abut">
            <h1>SINGLE BLOG PAGE </h1>
        </div>
        <div class="cont">
        <h3>Lorem Ipsum is not simply random text. It haorem Ipsum passage, ssical literature, discovered the undoubtable source. Lorem Ipsum comes from sectionsby Cicero, written in 45 BC. This book is a The first line. </h3>
</div>
   
<h1><?php the_title();?></h1>
<p><?php the_content();?></p>
<section class="blogg">
                     <div class="blogimag">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/business.jpg" alt="box">
                     <div>
      </section>

</div>
















<?php  
 get_footer();
?>