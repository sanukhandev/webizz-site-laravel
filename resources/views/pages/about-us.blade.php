@include('layouts.header')
    <main>
      <section>
        <div class="banner_mainBox">
            <div class="banner_image">
                <img src="{{ENV('APP_URL')}}assets/images/banners/about-us.webp" alt="Business Center" class="img-fluid">
            </div>
            <div class="banner_text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_heading">About Us</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <div class="about_us_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-7 col-md-6">
              <div class="about-image">
                <img src="{{ENV('APP_URL')}}assets/images/new-about-us-img.webp" alt="Single Business Tower" class="img-fluid main-image">
                <div class="experience-badge">
                  <span class="years">Single Business Tower</span>
                  <span class="text"> Business Bay Dubai</span>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-6">
              <div class="heading">
                About <span>WEBIZZ</span>
              </div>
              <p>WEBIZZ offers tailored consultancy along with end-to-end service for business setup & licensing, business start-up feasibility studies, branding & digital marketing, accounting & PRO services and a wide selection of value-added business services.</p>
              <p>WEBIZZ also provides completely fitted and equipped premium offices and co-working spaces In the most iconic Single Business Tower at Business Bay, Dubai.</p>
              <p>We assure that your new office with us will be with a 360-degree panoramic scenery consisting of Dubai skylines and scenic ocean views.</p>
              <p>With WEBIZZ the commute to your office will be completely traffic-free because of smooth entry-exit access to the Sheikh Zayed Road (SZR).</p>
            </div>
          </div>
        </div>
      </div>
      <div class="vision_and_mission" data-aos="fade-up" data-aos-duration="1000">
        <div class="inner_vision_mission">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="heading mb-5 pb-2">
                  Mission & <span>Vision</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="vision_box">
                  <span><img class="img-fluid vision_icon" src="{{ENV('APP_URL')}}assets/images/mission.png" alt=""></span>
                  <p>Our mission is to provide our client a cost-effective and personalized services of the highest quality possible, to help establish and expand their businesses. We aim to make the market entry process easy & effortless encouraging all entrepreneurs & brands to grow and build a successful business.</p>
                </div>
                <div class="vision_box mb-0">
                  <span><img class="img-fluid vision_icon" src="{{ENV('APP_URL')}}assets/images/vision.png" alt=""></span>
                  <p>Our vision is to be the premier partner for new and established businesses on their journey to global success. We strive to empower our clients with the tools and resources they need to become the best in their respective industries.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </main>
    
  @include('layouts.footer')
   