var Site = window.Site || {};
(function($) {
  $(function() {

    // PLACEHOLDER

    $('input, textarea').placeholder();
    
    // PANEL NAV
    
    $('.wrapper').click(function(){
      if ($('body').hasClass('open-nav')){
        $('body').removeClass('open-nav');
      }
    });
    
    $('header .nav-toggle').click(function(){
      event.stopPropagation();
      $('body').toggleClass('open-nav');
    });
    
    // FAQ TOGGLES

    $('.faq-list h4 a').click(function(){
      $(this).parent('h4').siblings('.answer').slideToggle();
    });
    
    // SLIDER
    
    $('.slider').flexslider({
      animation: "fade"
    });
    
    // FITVIDS
    
    $('aside.video').fitVids();
    
    // FANCYBOX
    
    $('.thumb-gallery li a, .sm-gallery li a').fancybox({
      openEffect	: 'none',
      closeEffect	: 'none'
    });
    
    // VENDOR FILTERS
    
    var loadCatName = $(".select-box").find(":selected").text();
    $(".select-box label").text(loadCatName);
    
		$(".select-box select").change(function(){
			var changeCatLink = $(this).find(":selected").attr("value");
			var changeCatName = $(this).find(":selected").text();
			$(".select-box label").text(changeCatName);
			window.location.assign(changeCatLink);
			return false;
		})

  });
})(jQuery);