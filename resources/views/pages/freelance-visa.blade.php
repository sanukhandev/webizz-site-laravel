@include('layouts.header')
    <main class="freezone_setup_main">
      <section>
        <div class="banner_mainBox">
          <div class="banner_image">
            <img
              src="{{ENV('APP_URL')}}assets/images/banners/freelance-visa.webp"
              alt="Business Center"
              class="img-fluid contact-banner"
            />
          </div>
          <div class="banner_text">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="banner_heading">PRO Services</div>
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
              <div class="heading">Freelance <span>Visa</span></div>
              <p>
                A Freelance Visa allows you to legally work for yourself in the
                UAE without needing a company sponsor. You operate as an
                independent contractor — perfect for creatives, tech
                professionals, marketing experts, fitness trainers, tutors, etc.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="VisaCategory" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="VisaCategory_inner">
                <div class="heading center_heading">
                  Here’s a <span>Clean Overview</span>
                </div>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col" class="col19">Category</th>
                      <th scope="col">Details</th>
                    </tr>
                  </thead>
                  <tbody class="align-middle">
                    <tr>
                      <th scope="row">Who can apply?</th>
                      <td>
                        Freelancers in tech, media, design, education,
                        marketing, consultancy, fitness, and more
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Visa Type</th>
                      <td>Residency visa (2 years, renewable)</td>
                    </tr>
                    <tr>
                      <th scope="row">Do you need a sponsor?</th>
                      <td>
                        No — you sponsor yourself! (You’ll get a Freelance
                        Permit + Visa)
                      </td>
                    </tr>
                  </tbody>
                </table>
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

    