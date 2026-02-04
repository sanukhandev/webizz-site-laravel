  @include('layouts.header')
    <main class="freezone_setup_main">
      <section>
        <div class="banner_mainBox">
            <div class="banner_image">
                <img src="{{ENV('APP_URL')}}assets/images/banners/freezone.webp" alt="Business Center" class="img-fluid">
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
              <div class="heading">Freezone <span>Setup</span></div>
              <p>Setting up a business in one of Dubai’s free zones offers numerous benefits, like tax incentives, access to modern infrastructure, and 100 percent foreign ownership. If you are considering establishing a company in a Dubai Free Zone, it is important to understand the process and requirements involved Hassle-free business setup process</p>
            </div>
          </div>
        </div>
      </div>
      <div class="premiumServices_section freezone_setup_section">
        <div class="container">
          <div class="premiumServices_text" data-aos="fade-up" data-aos-duration="1000">
            <div class="heading">Business <span>Setup Process</span></div>
            <div class="custom_listing">
              <ul class="p-0">
                <li>Perform business activity within the zone</li>
                <li>Each freezone is dedicated to respective businesses</li>
                <li>Access skilled workforce</li>
                <li>Business-friendly environment</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="additional_benefits_sec" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row">
          <div class="col-md-12">
            <div class="additional_benefits_box">
              <div class="heading">
                Benefits<span></span>
              </div>
              <div class="row">
                <div class="benefits_inner_box">
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/freezone-setup/ownership.png" alt="">
                    </div>
                    <h4>100% Ownership</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/freezone-setup/Profit.png" alt="">
                    </div>
                    <h4>100% Profit Repatriation</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/freezone-setup/corporate-tax.png" alt="">
                    </div>
                    <h4>9% Corporate Tax</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/freezone-setup/import-export .png" alt="">
                    </div>
                    <h4>Simplified Import and Export Processes</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/freezone-setup/strategic-location.png" alt="">
                    </div>
                    <h4>Strategic Location</h4>
                  </div>

                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/freezone-setup/global-connectivity.png" alt="">
                    </div>
                    <h4>Global Connectivity</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/freezone-setup/business-activities.png" alt="">
                    </div>
                    <h4>Vast Range of Business Activities</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/freezone-setup/time-saving.png" alt="">
                    </div>
                    <h4>Time-Saving and Simple Registration Process</h4>
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


    
