<!-- footer -->
<div class="footer">
  <div class="container">
    <div class="w3_agile_footer_grids">

    <div class="w3ls_address_mail_footer_grids">
      <div class="col-md-4 w3ls_footer_grid_left">
        <div class="wthree_footer_grid_left">
          <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
        </div>
        <p>Jl. Pulomas Selatan Kav. 23, <span>Jakarta Timur, 13210</span></p></a>
      </div>
      <div class="col-md-4 w3ls_footer_grid_left">
        <div class="wthree_footer_grid_left">
          <i class="fa fa-phone" aria-hidden="true"></i>
        </div>
        <p>+(000) 123 4565 32 <span>+(010) 123 4565 35</span></p>
      </div>
      <div class="col-md-4 w3ls_footer_grid_left">
        <div class="wthree_footer_grid_left">
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </div>
        <p><a href="mailto:info@example.com">info@example1.com</a>
          <span><a href="mailto:info@example.com">info@example2.com</a></span></p>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="agileinfo_copyright">
      <p>Copyright © 2017 Fakultas Psikologi Jayabaya | <a href="www.psikologijayabaya.ac.id">www.psikologijayabaya.ac.id</a></p>
    </div>
  </div>
</div>
<!-- //footer -->
<!-- menu -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
<!-- password-script -->
<script type="text/javascript">
  window.onload = function () {
    document.getElementById("password1").onchange = validatePassword;
    document.getElementById("password2").onchange = validatePassword;
  }

  function validatePassword() {
    var pass2 = document.getElementById("password2").value;
    var pass1 = document.getElementById("password1").value;
    if (pass1 != pass2)
      document.getElementById("password2").setCustomValidity("Passwords Don't Match");
    else
      document.getElementById("password2").setCustomValidity('');
    //empty string means no validation error
  }
</script>
<!-- //password-script -->

<!-- //js -->
<script src="js/bars.js"></script>

<script type="text/javascript" src="js/jquery.slicebox.js"></script>
<script type="text/javascript">
  $(function () {

    var Page = (function () {

      var $navArrows = $('#nav-arrows').hide(),
        $navDots = $('#nav-dots').hide(),
        $nav = $navDots.children('span'),
        $shadow = $('#shadow').hide(),
        slicebox = $('#sb-slider').slicebox({
          onReady: function () {

            $navArrows.show();
            $navDots.show();
            $shadow.show();

          },
          onBeforeChange: function (pos) {

            $nav.removeClass('nav-dot-current');
            $nav.eq(pos).addClass('nav-dot-current');

          }
        }),

        init = function () {

          initEvents();

        },
        initEvents = function () {

          // add navigation events
          $navArrows.children(':first').on('click', function () {

            slicebox.next();
            return false;

          });

          $navArrows.children(':last').on('click', function () {

            slicebox.previous();
            return false;

          });

          $nav.each(function (i) {

            $(this).on('click', function (event) {

              var $dot = $(this);

              if (!slicebox.isActive()) {

                $nav.removeClass('nav-dot-current');
                $dot.addClass('nav-dot-current');

              }

              slicebox.jump(i + 1);
              return false;

            });

          });

        };

      return {
        init: init
      };

    })();

    Page.init();

  });
</script>
<!-- Stats -->
<script src="js/waypoints.min.js"></script>
<script src="js/counterup.min.js"></script>
<script>
  jQuery(document).ready(function ($) {
    $('.counter').counterUp({
      delay: 10,
      time: 2000
    });
  });
</script>
<!-- //Stats -->

<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- flexisel -->
<script type="text/javascript">
  $(window).load(function () {
    $("#flexiselDemo1").flexisel({
      visibleItems: 4,
      animationSpeed: 1000,
      autoPlay: true,
      autoPlaySpeed: 3000,
      pauseOnHover: true,
      enableResponsiveBreakpoints: true,
      responsiveBreakpoints: {
        portrait: {
          changePoint: 480,
          visibleItems: 1
        },
        landscape: {
          changePoint: 640,
          visibleItems: 2
        },
        tablet: {
          changePoint: 768,
          visibleItems: 2
        }
      }
    });

  });
</script>
<!-- //flexisel -->
<!-- //flexisel -->
<!-- js for portfolio lightbox -->
<script src="js/jquery.chocolat.js "></script>
<!-- //menu -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
      event.preventDefault();
      $('html,body').animate({
        scrollTop: $(this.hash).offset().top
      }, 1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
  $(document).ready(function () {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear'
      };
    */

    $().UItoTop({
      easingType: 'easeOutQuart'
    });

  });
</script>
<!-- //here ends scrolling icon -->
</body>

</html>
