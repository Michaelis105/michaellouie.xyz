(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space


$(document).ready(function(){
    $('.collapsible').collapsible();
    $('.parallax').parallax();
    $('.modal').modal();
    $(".button-collapse").sideNav();
    $('.slider').slider({'height': 100, 'interval':120000});
});


