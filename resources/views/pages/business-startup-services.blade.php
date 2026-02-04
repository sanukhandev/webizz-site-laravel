  @include('layouts.header')
  <main class="freezone_setup_main">
      <section>
          <div class="banner_mainBox">
              <div class="banner_image">
                  <img src="{{ENV('APP_URL')}}assets/images/banners/business-startup.webp" alt="Business Center"
                      class="img-fluid">
              </div>
              <div class="banner_text">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="banner_heading">Business Setup</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <div class="first_section" data-aos="fade-up" data-aos-duration="1000">
          <div class="container">
              <div class="row justify-content-center text-center">
                  <div class="col-md-10">
                      <div class="heading">Business <span>Startup Services</span></div>
                      <p class="mb-3">
                          At WEBIZZ, we offer a full suite of business startup services designed to make your
                          entrepreneurial journey smooth and efficient. Whether you’re relocating your business or
                          setting up a new one, we assist with every detail—from finding the perfect office unit for
                          rent to conducting thorough market surveys that give you valuable insights and a competitive
                          edge.
                      </p>
                      <p class="mb-3">
                          Our dedicated team guides you through the entire process, helping you select strategic
                          locations, negotiate rental agreements, and understand market trends and customer behaviour.
                          With our hands-on support, you gain the confidence and clarity needed to launch your venture
                          successfully and position it for long-term growth.
                      </p>
                      <p>
                          Let WEBIZZ be your trusted partner in turning your business ideas into reality—every step of
                          the way.
                      </p>
                  </div>
              </div>
          </div>
      </div>
      <div class="bus_start_up_services_section" data-aos="fade-up" data-aos-duration="1000">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="additional_benefits_box">
                          <div class="heading">
                              Highlights
                          </div>
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="benefits_inner_box">
                                      <div class="benefits_box">
                                          <div class="icon-container">
                                              <img class="img-fluid"
                                                  src="{{ENV('APP_URL')}}assets/images/mainland/mainland-icon-01.png"
                                                  alt="">
                                          </div>
                                          <h4>Market Studies</h4>
                                          <ul class="bus_start_up_custom_list">
                                              <li>Survey</li>
                                              <li>Technical analysis</li>
                                              <li>Commercial analysis</li>
                                          </ul>
                                      </div>
                                      <div class="benefits_box">
                                          <div class="icon-container">
                                              <img class="img-fluid"
                                                  src="{{ENV('APP_URL')}}assets/images/mainland/mainland-icon-02.png"
                                                  alt="">
                                          </div>
                                          <h4>Office Setup</h4>
                                          <ul class="bus_start_up_custom_list">
                                            <li>Interiors</li>
                                            <li>Fitouts</li>
                                            <li>Unit rental</li>
                                          </ul>
                                      </div>
                                      <div class="benefits_box">
                                          <div class="icon-container">
                                              <img class="img-fluid"
                                                  src="{{ENV('APP_URL')}}assets/images/mainland/mainland-icon-03.png"
                                                  alt="">
                                          </div>
                                          <h4>Relocation</h4>
                                          <ul class="bus_start_up_custom_list">
                                            <li>Company relocation</li>
                                            <li>Employee relocation</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="get_in_touch_strip" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="get_in_touch_strip_inner">
                  <h3 class="">
                    Need assistance? Send your enquiry now!
                  </h3>
                  <!-- Button trigger modal -->
                  <button type="button" class="call_to_action" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Send Enquiry
                  </button>
              </div>
            </div>
          </div>
        </div>        
      </div>
  </main>

      <!-- Modal -->
    <div class="modal fade callto_action_form" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">
               <div class="heading">Get In <span>Touch</span></div>
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="calltoaction">
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="get_in_touch_inner">
                        <div class="form_box">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="form_box">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                        </div>
                        <div class="form_box">
                            <input type="email" name="email" class="form-control" placeholder="Email Id" required>
                        </div>
                        <div class="form_box">
                            <input type="text" name="mobile" class="form-control" placeholder="Mobile No." required>
                        </div>
                        <div class="form_box1">
                            <textarea name="messages" class="form-control" placeholder="Your Message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="submit_btn">
                            Submit <span>Enquiry</span>
                        </button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  @include('layouts.footer')