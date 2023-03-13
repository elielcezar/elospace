(function ($) {
  $(document).ready(function () {
    const w = window.innerWidth;
    const h = window.innerHeight;
    const mobile = w < 1300;
    const desktop = h < w;
    const menuMobile = document.querySelector('.menu-mobile .mainMenu');
    
    window.onresize = function(){ 
      const newW = window.innerWidth;
      if(newW != w){
        location.reload(); 
      }      
    };

    $('p.accordion').click(function () {
      $p = $(this).parent();
      $container = $(this).parents('.fornecedor');
      if ($p.hasClass('active')) {
        $p.removeClass('active');
        $container.removeClass('active');
      } else {
        $('.fornecedor').removeClass('active');
        $p.addClass('active');
        $container.addClass('active');
      }
      $('.item.active').not($p).removeClass('active');
      //$('.item.active').not($container).removeClass('active');
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

    document.addEventListener( 'wpcf7submit', function( event ) {
      console.log('teste');
      location = 'https://www.elospace.com.br/contato-enviado-com-sucesso/';
    }, false );

    if (mobile) {
      $('.menu-menu-secundario-container').appendTo('.menu-menu-principal-container').show();

      /* botão do menu */
      $('.menuBtn').click(function () {
        $('.menuBtn').toggleClass('act');
        if ($('.menuBtn').hasClass('act')) {
          $('.mainMenu').addClass('act');
        } else {
          $('.mainMenu').removeClass('act');
        }
      });
    }else{
      /* botão do menu */
      $('.menuBtn').click(function () {
        $(this).toggleClass('act');
        if ($(this).hasClass('act')) {
          $('.menu-menu-secundario-container').addClass('act');
        } else {
          $('.menu-menu-secundario-container').removeClass('act');
        }
      });
    }

    /* CONTADOR EVENTO */
    // Set the date we're counting down to
    const datePicker = document.querySelector('#datePicker').innerHTML;
    var countDownDate = new Date(datePicker).getTime();

    console.log(countDownDate);

    // Update the countdown every 1 second
    var x = setInterval(function () {
      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the countdown date
      var distance = countDownDate - now;

      // Calculate the days, hours, minutes and seconds left
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the HTML elements
      document.getElementById("days").innerHTML = days.toString().padStart(2, "0");
      document.getElementById("hours").innerHTML = hours
        .toString()
        .padStart(2, "0");
      document.getElementById("minutes").innerHTML = minutes
        .toString()
        .padStart(2, "0");
      document.getElementById("seconds").innerHTML = seconds
        .toString()
        .padStart(2, "0");

      // If the countdown is over, show a message
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
      }
    }, 1000);

    
  });
})(jQuery);
