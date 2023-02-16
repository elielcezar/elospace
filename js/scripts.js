(function ($) {
  $(document).ready(function () {
    const w = window.innerWidth;
    const h = window.innerHeight;
    const mobile = w < h;
    const desktop = h < w;
    const menuMobile = document.querySelector('.menu-mobile .mainMenu');

    $('p.accordion').click(function () {
      $p = $(this).parent();
      if ($p.hasClass('active')) {
        $p.removeClass('active');
      } else {
        $p.addClass('active');
      }
      $('.item.active').not($p).removeClass('active');
    });

    /* CARROSSEL */
    $('.carrossel').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      dots: true,
      infinite: true,
      arrows: false,
      adaptiveHeight: true,
      fade: true,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            //sdots: false,
          },
        },
      ],
    });

    $('.depoimentos').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      dots: false,
      infinite: true,
      arrows: true
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

    document.addEventListener( 'wpcf7submit', function( event ) {
      console.log('teste');
      location = 'https://www.elospace.com.br/contato-enviado-com-sucesso/';
    }, false );

    /*if (mobile) {
      $('<a/>', {
        class: 'voltar',
        text: 'Voltar',
      }).prependTo('.menu-item-has-children .sub-menu');      
      $('li.menu-item-has-children > a').click(function (e) {
        e.preventDefault();
        $('ul#menu-menu-1').addClass('slide on');
      });
      $('.sub-menu .voltar').click(function () {
        $('ul#menu-menu-1').removeClass('slide on');
      });
    }*/
  });
})(jQuery);
