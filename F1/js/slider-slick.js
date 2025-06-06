$(document).ready(function () {
  $(".SlickCarousel").slick({
    rtl: false, // If RTL Make it true & .slick-slide{float:right;}
    autoplay: true,
    autoplaySpeed: 20000, //  Slide Delay
    speed: 800, // Transition Speed
    slidesToShow: 4.99, // Number Of Carousel
    slidesToScroll: 3, // Slide To Move 
    pauseOnHover: false,
    appendArrows: $(".Container .Head .Arrows"), // Class For Arrows Buttons
    prevArrow: '<span class="Slick-Prev"></span>',
    nextArrow: '<span class="Slick-Next"></span>',
    easing: "linear",
    responsive: [
      {
        breakpoint: 801, settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 641, settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 481, settings: {
          rtl: false, // If RTL Make it true & .slick-slide{float:right;}
          autoplay: true,
          autoplaySpeed: 20000, //  Slide Delay
          speed: 800, // Transition Speed
          slidesToShow: 1, // Number Of Carousel
          slidesToScroll: 1, // Slide To Move 
          pauseOnHover: false,
        }
      },
    ],
  })
})