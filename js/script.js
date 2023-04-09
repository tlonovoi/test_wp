jQuery(function(){
   jQuery( '.popup_menu a' ).click(function(){
   jQuery('#mob_menu').slideToggle(500); 
   jQuery('#mob_menu').toggleClass('expand');
   jQuery('.popup_menu a').toggleClass('change_icon');
   })
})

jQuery(document).ready(function() {
  var text = jQuery('.header_title h1').text().split(' ');
  var newText = text[0] + ' <span>' + text[1] + '</span>' + ' ' + text.slice(2).join(' ');
  jQuery('.header_title h1').html(newText);
});