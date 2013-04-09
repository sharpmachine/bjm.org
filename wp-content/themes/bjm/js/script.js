/* Author: 

*/

// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function($) {
	
	// // Forces WordPress to place nice with dropdowns
 // 	$("li.dropdown > a").addClass('dropdown-toggle');
	// $("li.dropdown > a").attr('data-toggle','dropdown');
	// $("a.dropdown-toggle").append('<b class="caret"></b>');

	 $("#lifestream").lifestream({
	 	limit: 1, 
    list:[ 
      { 
        service: "facebook_page",
        user: "54557413386"
      }
    ]
  });

	 $(".bethel-menu-toggle").click(function(){
	 	$(".bethel-menu .nav").slideToggle();
	 	$(".chevron").toggleClass("chevron-rotate");
	 });

	 $("a.close-menu").click(function(){
	 	$(".bethel-menu .nav").slideUp();
	 });

	 $('#myCarousel').carousel();

	 $('#myCarousel .item:first-child').addClass('active');

	 $('#myCarousel .dots:first-child').addClass('active');

	 $('#qa-Carousel').carousel();

	 $('#qa-Carousel .item:first-child').addClass('active');

	 $("#searchform input[type=text]").attr('placeholder','Search');

	 $(".donate-materials input.wpcf7-email").attr('placeholder','Email');

	 $(".donate-materials input.material-list").attr('placeholder','List materials to be donated');

	 $('.filter a').tooltip();

   $('#donate-form').submit(function(event){

      var value_entered = $(this).find('input:text[name=amount]').val();

      if($.isNumeric(value_entered)) {
        $(this).find(".control-group").removeClass("error"); 
        $(this).find(".help-inline").remove();  
        $(this).find(".help-inline").text("");
        var submit_path = '/bjm.org/donate?amount=' + value_entered.toString();
        $('#donate-modal').modal({
          remote: submit_path
        });

      } else {
        $(this).find(".control-group").addClass("error").prepend("<span class=\"help-inline\">Please enter a number</span>");           
      }  
      event.preventDefault();
      return false;
   });

   $('#generals-donate-form').submit(function(event){

      var value_entered = $(this).find('input:text[name=amount]').val();

      if($.isNumeric(value_entered)) {
        $(this).find(".control-group").removeClass("error"); 
        $(this).find(".help-inline").remove();  
        $(this).find(".help-inline").text("");
        var submit_path = '/bjm.org/donate?designation=houseofgenerals&amount=' + value_entered.toString();
        $('#donate-modal').modal({
          remote: submit_path
        });

      } else {
        $(this).find(".help-inline").remove();          
        $(this).find(".control-group").addClass("error").prepend("<span class=\"help-inline\">Please enter a number</span>");           
      }  
      event.preventDefault();
      return false;
   });

  $('body').on('hidden', '#donate-modal', function () {
    $(this).removeData('modal');
  }); 

  // Slide in for desktops only
  if( $(window).width() > 768 )
    {
      $.ajax({
        url: '/bjm.org/wp-content/themes/bjm/js/slide-in-min.js',
        dataType: "script"
      });
    }

  //  Placeholder for IE
  $('[placeholder]').focus(function() {
    var input = $(this);
    if (input.val() == input.attr('placeholder')) {
      input.val('');
      input.removeClass('placeholder');
    }
  }).blur(function() {
    var input = $(this);
    if (input.val() == '' || input.val() == input.attr('placeholder')) {
      input.addClass('placeholder');
      input.val(input.attr('placeholder'));
    }
  }).blur().parents('form').submit(function() {
    $(this).find('[placeholder]').each(function() {
      var input = $(this);
      if (input.val() == input.attr('placeholder')) {
        input.val('');
      }
    })
  });
});