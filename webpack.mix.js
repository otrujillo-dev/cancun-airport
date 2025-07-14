let mix = require('laravel-mix');
mix.setPublicPath('public');

const DATA = {
    RESOURCES: "resources", // source files
    PUBLIC_FOLDER: "public/assets" //build assets files
};

mix.sass(DATA.RESOURCES+'/scss/base/index.scss', DATA.PUBLIC_FOLDER + "/css/base.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/home.scss', DATA.PUBLIC_FOLDER + "/css/website/home.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/terminals.scss', DATA.PUBLIC_FOLDER + "/css/website/terminals.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/terminal-particular.scss', DATA.PUBLIC_FOLDER + "/css/website/terminal-particular.min.css");

mix.js(DATA.RESOURCES+'/js/bookingbox/transportation.js', DATA.PUBLIC_FOLDER + "/js/bookingbox/transportation.min.js");
mix.sass(DATA.RESOURCES+'/scss/transportation/index.scss', DATA.PUBLIC_FOLDER + "/css/transportation/index.min.css");
mix.sass(DATA.RESOURCES+'/scss/transportation/process/list.scss', DATA.PUBLIC_FOLDER + "/css/transportation/process/list.min.css");
mix.sass(DATA.RESOURCES+'/scss/transportation/process/detail.scss', DATA.PUBLIC_FOLDER + "/css/transportation/process/detail.min.css");
mix.sass(DATA.RESOURCES+'/scss/transportation/process/login.scss', DATA.PUBLIC_FOLDER + "/css/transportation/process/login.min.css");
mix.sass(DATA.RESOURCES+'/scss/transportation/process/success.scss', DATA.PUBLIC_FOLDER + "/css/transportation/process/success.min.css");
mix.sass(DATA.RESOURCES+'/scss/transportation/process/error.scss', DATA.PUBLIC_FOLDER + "/css/transportation/process/error.min.css");
mix.combine([DATA.RESOURCES+'/js/libs/validator.js', DATA.RESOURCES+'/js/libs/sweetalert2.js', DATA.RESOURCES+'/js/transportation/process/detail.js'], DATA.PUBLIC_FOLDER + '/js/transportation/process/detail.min.js');
mix.combine([DATA.RESOURCES+'/js/libs/sweetalert2.js', DATA.RESOURCES+'/js/transportation/process/payment.js'], DATA.PUBLIC_FOLDER + '/js/transportation/process/payment.min.js');

mix.sass(DATA.RESOURCES+'/scss/website/terms-and-conditions.scss', DATA.PUBLIC_FOLDER + "/css/website/terms-and-conditions.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/privacy-policy.scss', DATA.PUBLIC_FOLDER + "/css/website/privacy-policy.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/cookies-policy.scss', DATA.PUBLIC_FOLDER + "/css/website/cookies-policy.min.css");

mix.sass(DATA.RESOURCES+'/scss/transportation/process/payment.scss', DATA.PUBLIC_FOLDER + "/css/transportation/process/payment.min.css");
mix.sass(DATA.RESOURCES+'/scss/transportation/process/rez-detail.scss', DATA.PUBLIC_FOLDER + "/css/transportation/process/rez-detail.min.css");

mix.sass(DATA.RESOURCES+'/scss/car-rental/index.scss', DATA.PUBLIC_FOLDER + "/css/car-rental/index.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/arrivals.scss', DATA.PUBLIC_FOLDER + "/css/website/arrivals.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/departures.scss', DATA.PUBLIC_FOLDER + "/css/website/departures.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/airport-parking.scss', DATA.PUBLIC_FOLDER + "/css/website/airport-parking.min.css");

mix.js(DATA.RESOURCES+'/js/base/index.js', DATA.PUBLIC_FOLDER + "/js/base/index.min.js");
mix.combine([DATA.RESOURCES+'/js/libs/swiper.js', DATA.RESOURCES+'/js/home/index.js'], DATA.PUBLIC_FOLDER + '/js/home/index.min.js');
mix.combine([DATA.RESOURCES+'/js/libs/swiper.js', DATA.RESOURCES+'/js/transportation/index.js'], DATA.PUBLIC_FOLDER + '/js/transportation/index.min.js');


//Blog
mix.sass(DATA.RESOURCES+'/scss/press/index.scss', DATA.PUBLIC_FOLDER + "/css/press/index.min.css");
mix.sass(DATA.RESOURCES+'/scss/press/post.scss', DATA.PUBLIC_FOLDER + "/css/press/post.min.css");
mix.sass(DATA.RESOURCES+'/scss/press/category.scss', DATA.PUBLIC_FOLDER + "/css/press/category.min.css");

//Tours
mix.sass(DATA.RESOURCES+'/scss/tours/index.scss', DATA.PUBLIC_FOLDER + "/css/tours/index.min.css");

/*


mix.js(DATA.RESOURCES+'/js/bookingbox/index.js', DATA.PUBLIC_FOLDER + "/js/bookingbox/index.min.js");
mix.js(DATA.RESOURCES+'/js/destinations/index.js', DATA.PUBLIC_FOLDER + "/js/destinations/index.min.js");

mix.sass(DATA.RESOURCES+'/scss/website/terms-and-conditions.scss', DATA.PUBLIC_FOLDER + "/css/website/terms-and-conditions.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/about.scss', DATA.PUBLIC_FOLDER + "/css/website/about.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/contact.scss', DATA.PUBLIC_FOLDER + "/css/website/contact.min.css");
mix.sass(DATA.RESOURCES+'/scss/website/reviews.scss', DATA.PUBLIC_FOLDER + "/css/website/reviews.min.css");

mix.sass(DATA.RESOURCES+'/scss/destinations/index.scss', DATA.PUBLIC_FOLDER + "/css/destinations/index.min.css");
mix.sass(DATA.RESOURCES+'/scss/destinations/main.scss', DATA.PUBLIC_FOLDER + "/css/destinations/main.min.css");
mix.sass(DATA.RESOURCES+'/scss/destinations/hotel-list.scss', DATA.PUBLIC_FOLDER + "/css/destinations/hotel-list.min.css");
mix.sass(DATA.RESOURCES+'/scss/destinations/hotel.scss', DATA.PUBLIC_FOLDER + "/css/destinations/hotel.min.css");
mix.sass(DATA.RESOURCES+'/scss/services/vehicle.scss', DATA.PUBLIC_FOLDER + "/css/services/vehicle.min.css");

mix.sass(DATA.RESOURCES+'/scss/process/search.scss', DATA.PUBLIC_FOLDER + "/css/process/search.min.css");
mix.sass(DATA.RESOURCES+'/scss/process/checkout.scss', DATA.PUBLIC_FOLDER + "/css/process/checkout.min.css");
mix.sass(DATA.RESOURCES+'/scss/process/processing.scss', DATA.PUBLIC_FOLDER + "/css/process/processing.min.css");
mix.sass(DATA.RESOURCES+'/scss/process/login.scss', DATA.PUBLIC_FOLDER + "/css/process/login.min.css");
mix.sass(DATA.RESOURCES+'/scss/process/detail.scss', DATA.PUBLIC_FOLDER + "/css/process/detail.min.css");
mix.sass(DATA.RESOURCES+'/scss/process/success.scss', DATA.PUBLIC_FOLDER + "/css/process/success.min.css");
mix.sass(DATA.RESOURCES+'/scss/process/error.scss', DATA.PUBLIC_FOLDER + "/css/process/error.min.css");


mix.combine([DATA.RESOURCES+'/js/libs/modal.js', DATA.RESOURCES+'/js/process/search.js'], DATA.PUBLIC_FOLDER + '/js/process/search.min.js');
mix.combine([DATA.RESOURCES+'/js/libs/validator.js', DATA.RESOURCES+'/js/process/checkout.js'], DATA.PUBLIC_FOLDER + '/js/process/checkout.min.js');
*/
if (mix.inProduction()) {
    mix.version();
}

//mix.browserSync('127.0.0.1:8000');