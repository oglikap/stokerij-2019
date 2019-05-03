(function($) {

  $(".bs-resume-header-frame").hover( function() {
    $("> a > .bs-resume-header", this).fadeToggle('slow');
  });

})( jQuery );
