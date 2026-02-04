<footer>
      <div class="container">
        <div class="footer_inner">
          <div class="row">
            <div class="col-md-12">
              <div class="footer_box">
                <div class="row align-items-center">
                  <div class="col-md-12">
                    <div class="footer_contact">
                      <div class="footer_contact_left">
                        <a href="{{ENV('APP_URL')}}">
                          <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/logo.webp" alt="Logo">
                        </a>
                      </div>
                      <div class="footer_contact_center">
                        <div class="quick_link_section">
                          <div class="footer_heading">Quick Links</div>
                          <ul>
                            <li><a href="{{ENV('APP_URL')}}">Home</a></li>
                            <li><a href="{{ENV('APP_URL')}}about-us">About Us</a></li>
                            <li><a href="{{ENV('APP_URL')}}contact">Contact Us</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="footer_contact_right">
                          <div class="email_box">
                            <div class="icon_box">
                              <div class="icon_box1"></div>
                              <img src="{{ENV('APP_URL')}}assets/images/footer_location.png" alt="Location">
                            </div>
                            <span>Single Business Tower 35 <sup>th</sup> Floor Office Number 3501-3506, Business Bay Dubai UAE</span>
                          </div>
                          <div class="email_box">
                            <div class="icon_box">
                              <div class="icon_box2"></div>
                              <img src="{{ENV('APP_URL')}}assets/images/footer_call.png" alt="Call">
                            </div>
                            <div class="contact_number_box d-flex flex-wrap gap-3 gap-sm-3 gap-md-1 gap-lg-3">
                              <a class="ml-2" href="tel:+971 45526801">+971 45526801</a> <a href="tel:+971 501056811">+971 501056811</a>
                               <a href="tel:+971 522190733">+971 522190733</a>
                            </div>
                          </div>
                          <div class="email_box">
                            <div class="icon_box">
                              <div class="icon_box3"></div>
                              <img src="{{ENV('APP_URL')}}assets/images/footer_email.png" alt="email">
                            </div>
                           <div class="d-flex flex-wrap gap-3 gap-sm-3 gap-md-1 gap-lg-3">
                              <a href="mailto:info@webizz.ae">info@webizz.ae </a>
                              <a href="mailto:operation@webizz.ae"> operation@webizz.ae</a>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</footer>

    <!-- Js Start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Owl Carousel JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

    <script>
      $(".owl-carousel1").owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
      $(".owl-carousel2").owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });

      $(".channel_partner_slider").owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: true,
          },
          600: {
            items: 3,
            nav: true,
          },
          992: {
            items: 5,
          },
        },
      });


      $(".officeimage_slider").owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: true,
          },
          992: {
            items: 1,
          },
        },
      });

    </script>

    <script>
      $(document).ready(function () {
        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 2; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1
          .owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            autoplay: true,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200,
            navText: [
              '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"></svg>',
              '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"></svg>',
            ],
          })
          .on("changed.owl.carousel", syncPosition);

        sync2
          .on("initialized.owl.carousel", function () {
            sync2.find(".owl-item").eq(0).addClass("current");
          })
          .owlCarousel({
            items: slidesPerPage,
            dots: false,
            nav: false,
            smartSpeed: 200,
            slideSpeed: 200,
            slideBy: slidesPerPage, 
            responsiveRefreshRate: 100,
          })
          .on("changed.owl.carousel", syncPosition2);

        function syncPosition(el) {
         
          var count = el.item.count - 1;
          var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

          if (current < 0) {
            current = count;
          }
          if (current > count) {
            current = 0;
          }

          //end block

          sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
          var onscreen = sync2.find(".owl-item.active").length - 1;
          var start = sync2.find(".owl-item.active").first().index();
          var end = sync2.find(".owl-item.active").last().index();

          if (current > end) {
            sync2.data("owl.carousel").to(current, 100, true);
          }
          if (current < start) {
            sync2.data("owl.carousel").to(current - onscreen, 100, true);
          }
        }

        function syncPosition2(el) {
          if (syncedSecondary) {
            var number = el.item.index;
            sync1.data("owl.carousel").to(number, 100, true);
          }
        }

        sync2.on("click", ".owl-item", function (e) {
          e.preventDefault();
          var number = $(this).index();
          sync1.data("owl.carousel").to(number, 300, true);
        });
      });
    </script>

    <script>
      $(function ($) {
        $(".mobile_btn").on("click", function () {
          $(".main_menu").slideToggle();
          $(".mobile_btn i").toggleClass("fa-xmark fa-xl");
        });

        if ($(window).width() < 768) {
          $(".main_menu  ul li a").on("click", function () {
            $(this)
              .parent(".has_dropdown")
              .children(".sub_menu")
              .css({ "padding-left": "15px" })
              .stop()
              .slideToggle();

            $(this)
              .parent(".has_dropdown")
              .children("a")
              .find(".fa-angle-right")
              .stop()
              .toggleClass("fa-rotate-90");
          });
        }
      });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
      document.querySelector('.mobile_btn').addEventListener('click', function() {
          document.querySelector('.main_menu').classList.toggle('menu_open');
      });
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
        var header = document.getElementById("sticky-header");
        var stickyPosition = header.offsetTop + header.offsetHeight;
        window.onscroll = function() {
          if (window.pageYOffset > stickyPosition) {
            header.classList.add("sticky");
            document.querySelectorAll('body')[0].style.marginTop = header.offsetHeight + "px";
          } else {
            header.classList.remove("sticky");
            document.querySelectorAll('body')[0].style.marginTop = "0px";
          }
        };
    </script>


  </body>
</html>

    