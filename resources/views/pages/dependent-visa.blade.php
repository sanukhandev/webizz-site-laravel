 @include('layouts.header')
    <main class="freezone_setup_main">
      <section>
        <div class="banner_mainBox">
          <div class="banner_image">
            <img
              src="{{ENV('APP_URL')}}assets/images/banners/dependent-visa.webp"
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
              <div class="heading">Dependent <span>Visa</span></div>
              <p>
                A Dependent Visa allows a UAE resident (sponsor) to bring their
                immediate family (wife/husband, children, and sometimes parents)
                to live with them in the UAE.
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
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col" class="col19">Category</th>
                      <th scope="col">Details</th>
                    </tr>
                  </thead>
                  <tbody class="align-middle">
                    <tr>
                      <th scope="row">Who can sponsor?</th>
                      <td>
                        UAE residents with a valid residency visa (employee,
                        investor, freelancer)
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Who can be sponsored?</th>
                      <td>
                        - Spouse<br />
                        - Children (sons usually until 18 or 21 if studying,
                        daughters until marriage)<br />
                        - Parents (special conditions apply)
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Minimum Salary Requirement</th>
                      <td>
                        - AED 4,000/month or AED 3,000 + accommodation (for
                        sponsoring spouse/children)<br />
                        - Around AED 20,000–25,000/month (for sponsoring
                        parents)
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Visa Duration</th>
                      <td>2 years (depending on sponsor’s visa), renewable</td>
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

   