  <!-- jQuery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slideshow -->
  <script src="js/slideshow.js" type="text/javascript" ></script>

  <!-- owlCarousel jQuery -->
  <script src="js/owl.carousel.min.js" type="text/javascript" ></script>

  <script>
    $(window).on('load', function(){
      $('.owl-carousel').owlCarousel({
          margin:10,
          loop:true,
          autoWidth:true,
          items:4
      })
    })
  </script>

  <!-- scrollreveal -->
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

  <script>
    $(window).on('load', function(){
      ScrollReveal().reveal('#profile');
    })
  </script>

  <!-- Unviel -->
  <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>

  <script>

    $(window).on('load', function() {
      $('img').lazyload({
        threshold: 1000,
        effect: 'fadeIn'
      });
    });

  </script>

  <!-- lightbox -->
  <script src="js/lightbox.min.js" type="text/javascript"></script>
  <script src="js\lightbox-plus-jquery.min.js" type="text/javascript"></script>


  <!-- Mobile Menu -->
  <script type="text/javascript">
    $(window).on('load', function(){
        $('.toggle').click(function(){
            $('ul').toggleClass('active')
        })
      })
  </script>
