var sticky = document.querySelector('.navbar');

window.onscroll = function(){
if(window.scrollY > 0) {
    sticky.style.height = '100px';
    sticky.style.backgroundColor = "#EAE8E2";
    sticky.style.transition = "0.3s";
}else {
    sticky.style.height = '100px';
    sticky.style.backgroundColor = "transparent";
    logo.style.height = '180px';
    logo.style.width = '180px';
}
}










$(function() {

	if ( $('.owl-2').length > 0 ) {
        $('.owl-2').owlCarousel({
            center: false,
            items: 1,
            loop: true,
            stagePadding: 0,
            margin: 20,
            smartSpeed: 1000,
            autoplay: false,
            nav: true,
            dots: true,
            pauseOnHover: false,
            responsive:{
                600:{
                    margin: 20,
                    nav: true,
                  items: 2
                },
                1000:{
                    margin: 20,
                    stagePadding: 0,
                    nav: true,
                  items: 3
                }
            }
        });            
    }

})