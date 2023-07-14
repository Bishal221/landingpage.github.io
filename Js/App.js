$(document).ready(function() {
    $("i.bi.bi-list").click(function() {
      $("div.main-menu").toggleClass("active");
    });
    
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 10) {
          $("nav.navbar").addClass("scroll");
        } else {
          $("nav.navbar").removeClass("scroll");
        }
      });
      var currentYear = new Date().getFullYear();
      $("#year").text(currentYear);
      console.log("Mabe by Bishal Kayal --> https://fullstackguru.in/");
      
  });

  const swiper = new Swiper('.swiper', {
    direction: 'vertical',
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });
  const swiper2 = new Swiper('.swiper2', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });
