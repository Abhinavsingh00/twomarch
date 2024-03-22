<?php  /* Template Name: contact page */  
 get_header();
?>



<section class="cotct">
    <div class="container">



    <div class="abut">
            <h1>Contact Us</h1>
        </div>
        <div class="cont">
        <h3>Lorem Ipsum is not simply random text. It has roots in a piece  BC, making it over 2000 years old. Richard McClintock,  College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sectionsby Cicero, written in 45 BC. This book is a The first line. </h3>
</div>
        <!-- <div class="context">
    <h1>Contact Us</h1>
        </div> -->

  <div class="card-body">
    <form>
      <label for="name">First Name:</label>
      <input class="fname" type="text" id="fname" name="fname" value="" required>
      <span class="reqrd" id="username"></span>

      <label for="name">Last Name:</label>
      <input class="lname" type="text" id="lname" name="lname" value="" required>
      <span class="reqrd" id="userlname"></span>

      <label for="name">Email:</label>
      <input class="email" type="email" id="email" name="email" value="" required>
      <span class="reqrd" id="userEmail"></span>

      <label for="name">Password:</label>
      <input class="pasword" type="pasword" id="pasword" name="password" value="" required>
      <span class="reqrd" id="userpaswrd"></span>

      <label for="name">Message:</label>
      <input class="mmessageesg" type="message" id="message" name="message" value="" required>
      <span class="reqrd" id="usermessage"></span>
<button class="submit">SUBMIT</button>
    </form>

 

 <div class="fomige">
    <img src="<?php echo get_template_directory_uri(); ?>/images/contact.jpg" alt="box"><div>
</div>
<div class="result"></div>
    </div>
</section>
























<?php get_footer(); ?>