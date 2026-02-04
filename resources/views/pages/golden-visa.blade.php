@include('layouts.header')
    <main class="freezone_setup_main">
      <section>
        <div class="banner_mainBox">
            <div class="banner_image">
                <img src="{{ENV('APP_URL')}}assets/images/banners/golden-visa.webp" alt="Business Center" class="img-fluid">
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
              <div class="heading">Golden <span>Visa</span></div>
              <p>The Golden Visa in the UAE is a special long-term residency visa that allows foreigners to live, work, or study in the UAE without needing a national sponsor and with 100% ownership of their business on the UAE’s mainland. It&#39;s part of the UAE’s plan to attract talent, investors, and skilled professionals.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="VisaCategory" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="VisaCategory_inner">
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col" class="col19">Category</th>
                      <th scope="col">Details</th>                     
                    </tr>
                  </thead>
                  <tbody class="align-middle">
                    <tr>
                      <th scope="row">Visa Duration</th>
                      <td>10 years (renewable)</td>                          
                    </tr> 
                    <tr>
                      <th scope="row">Eligibility</th>
                      <td>Investors, entrepreneurs, specialized talents (doctors, scientists, creatives, athletes), outstanding students, humanitarian pioneers</td>                          
                    </tr> 
                    <tr>
                      <th scope="row">Benefits</th>
                      <td>Long-term residency, no need for local sponsor, ability to sponsor family members (spouse, children, even parents in some cases), ability to own property and businesses fully</td>                          
                    </tr> 
                    <tr>
                      <th scope="row">Key Requirements</th>
                      <td>Investment thresholds, professional achievements, special talents, high academic scores (for students)</td>                          
                    </tr>                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="additional_benefits_sec main-categories" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row">
          <div class="col-md-12">
            <div class="additional_benefits_box">
              <div class="heading center_heading">Main <span>Categories</span></div>
              <div class="row">
                <div class="benefits_inner_box">
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/golden-visa/Investors.png" alt="">
                    </div>
                    <h4>Investors</h4>
                    <p>Property investments (AED 2 million+), public investments, or owning shares.</p>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/golden-visa/Entrepreneurs.png" alt="">
                    </div>
                    <h4>Entrepreneurs</h4>
                    <p>Having a successful business or a recognized startup.</p>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/golden-visa/talents.png" alt="">
                    </div>
                    <h4>Specialized Talents</h4>
                    <p>Doctors, engineers, creatives, inventors.</p>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/golden-visa/Students.png" alt="">
                    </div>
                    <h4>Students</h4>
                    <p>Top-performing students (high GPA, recognized universities).</p>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/golden-visa/Scientists.png" alt="">
                    </div>
                    <h4>Scientists and Researchers</h4>
                    <p>Approved by emirates scientists council or with recognized patents/publications.</p>
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


    