$(document).ready(function (){
    let swiper = new Swiper(".swiper-container", {

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true,
        centeredSlides: true,
        slidesPerView: 4,
        spaceBetween: 10,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        speed: 600,
        parallax: true,
    })
});
