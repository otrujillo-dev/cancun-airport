var swiper = new Swiper(".vehicleSwiper", {
    slidesPerView: 4,
    spaceBetween: 10,
    centeredSlides: false,            
    grabCursor: true,
    loop: true,
    pagination: {
        el: ".vehicleSwiperPagination",
        clickable: true,
    },
    navigation: {
        nextEl: '.custom-next',
        prevEl: '.custom-prev',
    },
    breakpoints: {
        100: {
            slidesPerView: 1,
        },
        350: {
            slidesPerView: 2,
        },
        500: {
            slidesPerView: 3,
        },
        767: {
            slidesPerView: 2,
        },
        900: {
            slidesPerView: 3,
        },
        1100: {
            slidesPerView: 4,
        }
    }
});