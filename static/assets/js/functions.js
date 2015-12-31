var resizeSmoothScroll = function() {
  if ($(window).width() > 999){ $('.faq-list a').smoothScroll({offset: -84}); }
  else { $('.faq-list a').smoothScroll(); }
};

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
    
    // SMOOTH-SCROLL

    resizeSmoothScroll();
    
    // CALENDAR
    
    $(".responsive-calendar").responsiveCalendar({
      startFromSunday: '1'
    });
    
    $(document).on('click', '.day a', function(){
      var price = '$XXX.XX';
      var dataDay = $(this).data('day');
      var dataMonth = $(this).data('month');
      var dataYear = $(this).data('year');
      $('body').append('
        <div class="modal-overlay">
          <div class="modal-box">
            <p>Available</p>
            <h4>Date: '+dataMonth+'/'+dataDay+'/'+dataYear+'</h4>
            <h2>'+price+'</h2>
            <a class="button" href="javascirpt:void(0)">Request this Date</a>
          </div>
        </div>
      ').hide().fadeIn(300);
    });
    
    $(document).on('click', '.modal-overlay', function(){
      $(this).fadeOut(300, function(){
        $(this).remove();
      });
    });

    $(document).on('click', '.modal-box', function(e){
      e.stopPropagation();
    });
    
    // SLIDER
    
    $('.slider').flexslider({
      animation: "slide"
    });
    
    // FITVIDS
    
    $('aside.video').fitVids();
    
    // FANCYBOX
    
    $('.thumb-gallery li a, .sm-gallery li a').fancybox({
      openEffect	: 'none',
      closeEffect	: 'none'
    });
    
    // VENDOR FILTERS
    
    $('select.filters').change(function(){
      var currentCat = $('option:selected').val();
      if (currentCat == 'all'){
        $('.vendor-list li').show();
      }
      else {
        $('.vendor-list li').hide().filter('.'+currentCat).show();
      }
    });

  });
})(jQuery);