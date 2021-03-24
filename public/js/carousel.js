<!-- Initialize Swiper -->
$(document).ready(function (){
    var swiper = new Swiper(".swiper-container", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
            bottom:"0",
        },
        loop: true,
        slidesPerView: 3,
        spaceBetween: 20,
        // effect: 'coverflow',
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        speed: 600,
        parallax: true,
    })
});
