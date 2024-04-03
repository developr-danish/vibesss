// top product carousel
$(function() {
  
  if ( $('.owl-2').length > 0 ) {
    $('.owl-2').owlCarousel({
      center: false,
      items: 1,
            loop: false,
            stagePadding: 0,
            margin: 20,
            smartSpeed: 500,
            autoplay: false,
            nav: true,
            dots: true,
            pauseOnHover: true,
            responsive:{
              0:{
                items:2,
                nav:true
              },
              600:{
                margin: 20,
                nav: true,
                items: 2
              },
              1000:{
                margin: 20,
                stagePadding: 0,
                nav: true,
                items: 4
              }
            }
          });            
        }
        
      })
      // top product carousel