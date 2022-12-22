(function ($) {
  $(document).ready(function () {
    const w = window.innerWidth;
    const h = window.innerHeight;
    const mobile = w < h;
    const desktop = h < w;
    const menuMobile = document.querySelector('.menu-mobile .mainMenu');

    /* CARROSSEL */
    $('.carrossel').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      dots: true,
      infinite: true,
      arrows: true,
      adaptiveHeight: true,
      fade: true,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            dots: false,
          },
        },
      ],
    });

    /* fancybox */
    $('[data-fancybox="gallery"]').fancybox({
      buttons: ['close'],
      loop: false,
      protect: true,
    });

    /* botão do menu */
    $('.menuBtn').click(function () {
      $(this).toggleClass('act');
      if ($(this).hasClass('act')) {
        $('.mainMenu').addClass('act');
      } else {
        $('.mainMenu').removeClass('act');
      }
    });

    if (mobile) {
      $('<a/>', {
        class: 'voltar',
        text: 'Voltar',
      }).prependTo('.menu-item-has-children .sub-menu');
      /* menu */
      $('li.menu-item-has-children > a').click(function (e) {
        e.preventDefault();
        $('ul#menu-menu-1').addClass('slide on');
      });
      $('.sub-menu .voltar').click(function () {
        $('ul#menu-menu-1').removeClass('slide on');
      });
    }
  });
})(jQuery);
