var swiper = new Swiper(".destinationsSwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    centeredSlides: false,            
    grabCursor: true,
    loop: true,
    pagination: {
        el: ".vehicleSwiperPagination",
        clickable: true,
    },
    navigation: {
        nextEl: '.destinationsSwiperNext',
        prevEl: '.destinationsSwiperPrev',
    },
    breakpoints: {        
        0: {
            slidesPerView: 1,
        },
        500: {
            slidesPerView: 1,
        },
        650: {
            slidesPerView: 2,
        },
        800: {
            slidesPerView: 2,
        },
        900: {
            slidesPerView: 3,
        },
        1100: {
            slidesPerView: 3,
        },
        1300: {
            slidesPerView: 4,
        }
    }
});

var swiper = new Swiper(".vehicleSwiper", {
    slidesPerView: 4,    
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
        400: {
            slidesPerView: 1,
        },
        450: {
            slidesPerView: 2,
        },
        767: {
            slidesPerView: 2,
        }
    }
});