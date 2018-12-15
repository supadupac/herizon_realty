(function($){

  $(document).ready(function() {
    $('#responsive-menu-button').sidr({
      name: 'sidr-main',
      source: '#navigation',
      side: 'right',
      timing: '.30s'
    });
  });

  $(document).ready(function () {
    $(window).resize(function () {
        if ($(window).width() > 767) {
            $.sidr('close', 'sidr-main');
        }
    });
  });
  
  $(document).ready(function() {
    $('#sidr-id-close-menu-button').off('click').on('click',function(){
      $.sidr('close', 'sidr-main');
    });
  });

})(jQuery);
