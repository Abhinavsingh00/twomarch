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
  a.preventDefault();

  // Get input field values
  var fst = jQuery('.fname').val();
  var scnd = jQuery('.lname').val();
  var thrd = jQuery('.email').val();
  var forth = jQuery('.pasword').val(); 
  var fifth = jQuery('.masg').val();

  // Check if any input field is empty
  if (fst !== '' && scnd !== '' && thrd !== '' && forth !== '' && fifth !== '') {
    // If all fields are not empty, display the result
    var result = 'First Name: ' + fst + '<br>Last Name: ' + scnd + '<br>Email: ' + thrd + '<br>Password : ' + forth + '<br>Message: ' + fifth;
    jQuery('.result').html(result);
  } else {
    // If any field is empty, do not display anything
    jQuery('.result').empty();
  }
});

//===========================================quiz questions 







