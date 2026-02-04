  @include('layouts.header')
    <main>
      <section>
        <div class="banner_mainBox">
            <div class="banner_image">
                <img src="{{ENV('APP_URL')}}assets/images/banners/Co_working_Space.webp" alt="Business Center" class="img-fluid">
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
      <div class="first_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-10">
              <div class="heading">Co-working <span>Space</span></div>
              <p>Discover a flexible, inspiring workspace designed for modern professionals. At WEBIZZ, our coworking spaces bring together freelancers, entrepreneurs, and growing teams in a vibrant, collaborative environment. Whether you need a hot desk or a dedicated space for your team, we’ve got you covered — with all the amenities of a modern office and the energy of a creative community.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="premiumServices_section coworking-space-section">
        <div class="container">
          <div class="premiumServices_text" data-aos="fade-up" data-aos-duration="1000">
            <div class="heading">What’s a Co-working Space in a <span>Business Center?</span></div>
            <p> </p>
            <p>It’s a shared office environment within a professional business setup. You get access to:</p>
            <div class="custom_listing">
                <ul class="p-0">
                    <li>Hot desks or dedicated desks</li>
                    <li>Private offices (optional)</li>
                    <li>Meeting rooms</li>
                    <li>Business address</li>
                    <li>Reception services</li>
                    <li>Fast internet, utilities, and more</li>
                </ul>
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


   