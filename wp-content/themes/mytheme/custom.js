//================================================== simple accordian 
jQuery('.acodtxt').click(function(){
    jQuery('.cmptxt').hide();
 jQuery(this).next().show();
  });
//================================================== icon simple accordian 
jQuery('.acflx').click(function(){
    jQuery('.acotxxt').hide();
    jQuery(this).next().show();
    jQuery('.icnn').addClass('addicon');
    jQuery(this).find('.icnn').removeClass('addicon');
  
});


//================================================== icon simple accordian 
jQuery('.acooflx').click(function(){

   jQuery(this). toggleClass('active');
   jQuery(this).parent().find('.accicn').toggleClass('addicon');
   jQuery(this).parent().find('.pgraph').slideToggle(400);
 });

//================================================ header 
jQuery('.btn-submt').click(function(){
jQuery('.banrtxt').css({'color':'#176b68'});
});
//=======================================contact form 
jQuery('.submit').click(function(a){
  a.preventDefault() 
fst = jQuery('.fname').val();
scnd = jQuery('.lname').val();
thrd = jQuery('.email').val();
forth = jQuery('.pasword').val(); 
fifth = jQuery('.masg').val();
jQuery('.result').html('First Name: ' + fst + '<br>Last Name: ' + scnd + '<br>Email: ' + thrd + '<br>Password : ' + forth + '<br>Message: ' + fifth);
});

//===========================================quiz questions 







