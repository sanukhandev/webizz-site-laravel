@include('layouts.header')
    <main>
      <section>
        <div class="banner_mainBox">
            <div class="banner_image">
                <img src="{{ENV('APP_URL')}}assets/images/banners/smart-workspace.webp" alt="Business Center" class="img-fluid">
            </div>
            <div class="banner_text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_heading">Business Center</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <div class="premium_office_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="officeimage_slider owl-carousel">
                  <div class="item">
                    <img src="{{ENV('APP_URL')}}assets/images/slider/image-3.webp" alt="">
                  </div>
                  <div class="item">
                    <img src="{{ENV('APP_URL')}}assets/images/slider/image-4.webp" alt="">
                  </div>
              </div>
            </div>
            <div class="col-lg-6 align-items-center d-flex">
              <div class="premiumServices_text w-100">
                <div class="heading">Premium <span>Office</span></div>
                <div class="sub_heading">
                  <span style="color:#ff6b00;font-family:Lato-Bold;">Luxury Serviced Offices </span> in Business Bay
                </div>
                <p>Step into your own private office full of luxury and class which is fully furnished with a complete panoramic view of the Business Bay Skylines and Dubai Canal/oceanic views.</p>
                <p class="m-0">Whether you are a startup, a growing team, or an established corporate, our private offices offer the perfect blend of comfort, style, and functionality. Enjoy a vibrant work environment with access to premium amenities and services, all designed to help your business thrive.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features_box" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row flex-md-row-reverse">
            <div class="col-lg-6">
              <div class="Features_img_box">
                  <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/slider/image-1.webp" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-items-center d-flex">
              <div class="advantages_text">
                <div class="heading">
                  <span>Features:</span>
                </div>
                <ul>
                  <li>Size range: 150 – 400 Sq. feet</li>
                  <li>Grandeur interiors</li>
                  <li>Spacious layout </li>
                  <li>Customized solutions </li>
                  <li>Scenic panoramic views</li>
                  <li>Butler services </li>
                  <li>Complimentary access to premium facilities (house beverages, snacks etc) </li>
                  <li>Free high speed Wi-Fi access, electricity, air conditioning etc</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="premiumServices_section d-none">
        <div class="container">
          <div class="premiumServices_text" data-aos="fade-up" data-aos-duration="1000">
            <div class="heading">Premium <span>Office:</span></div>
            <div class="sub_heading">
              <span style="color:#ff6b00;font-family:Lato-Bold;">Luxury serviced offices </span> in Business Bay
            </div>
            <p>Step into your own Private office full of luxury and Class which is fully furnished with a complete Panoramic View of the Business Bay Skylines and Dubai Canal/oceanic views.</p>
            <p>Whether You are a startup, a growing team, or an established Corporate, our private offices offer the perfect blend of comfort, style, and functionality. Enjoy a vibrant work environment with access to premium amenities and services, all designed to help your business thrive.</p>
          </div>
        </div>
      </div>
      <div class="advantages_section d-none">
        <div class="container">
          <div class="advantages_text" data-aos="fade-up" data-aos-duration="1000">
            <div class="heading">
               <span>Features:</span>
            </div>
            <ul>
              <li>Size Range: 150 – 400 Sq. feet</li>
              <li>Grandeur Interiors</li>
              <li>Spacious Layout </li>
              <li>Customized Solutions </li>
              <li>Scenic Panoramic Views</li>
              <li>Butler Services </li>
              <li>Complimentary Access to Premium Facilities (House Beverages, Snacks etc) </li>
              <li>FREE High Speed WIFI Access, Electricity, Air Conditioning etc</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="additional_benefits_sec" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row">
          <div class="col-md-12">
            <div class="additional_benefits_box">
              <div class="heading">
                Amenities & Facilities
              </div>
              <div class="row">
                <div class="benefits_inner_box">
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/360-degree.png" alt="">
                    </div>
                    <h4>Panoramic and Business Bay Skyline</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/Fully-Furnished.png" alt="">
                    </div>
                    <h4>Fully Furnished</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/wifi.png" alt="">
                    </div>
                    <h4>High Speed Wi-Fi</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/Service-Staff.png" alt="">
                    </div>
                    <h4>Butler Service</h4>
                  </div>
                  <!-- <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/parking.png" alt="">
                    </div>
                    <h4>Robotic Car Parking</h4>
                  </div> -->
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/Modern-Interiors.png" alt="">
                    </div>
                    <h4>Modern Interiors</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/Customize-space.png" alt="">
                    </div>
                    <h4>Office Customization</h4>
                  </div>
                  <!-- <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/fbServices.png" alt="">
                    </div>
                    <h4>F&B Services</h4>
                  </div> -->
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/railway-station.png" alt="">
                    </div>
                    <h4>Proximity to Metro Station</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/Office-Lounge.png" alt="">
                    </div>
                    <h4>Office Lounge & Beverages</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/printer.png" alt="">
                    </div>
                    <h4>Printing and Storage</h4>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/Bill.png" alt="">
                    </div>
                    <h4>Free DEWA & AC</h4>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="benefits_box benefits_box_recreation_area">
                    <div class="benefits_box_recreation_area_ions">
                      <div class="icon-container">
                        <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/recreation-area1.png" alt="">
                      </div>
                      <div class="icon-container">
                        <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/recreation-area2.png" alt="">
                      </div>
                      <div class="icon-container">
                        <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/recreation-area3.png" alt="">
                      </div>
                      <div class="icon-container">
                        <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/recreation-area4.png" alt="">
                      </div>
                      <div class="icon-container">
                        <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/smart-work/recreation-area5.png" alt="">
                      </div>
                    </div>
                    <h4>Recreation Area</h4>
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
                    <input type="text" name="premiumoffice" value="premiumoffice" hidden>
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
   