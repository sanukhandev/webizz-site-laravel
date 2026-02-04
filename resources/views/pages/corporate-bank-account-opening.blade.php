@include('layouts.header')
<main>
    <section>
        <div class="banner_mainBox">
            <div class="banner_image">
                <img src="{{ENV('APP_URL')}}assets/images/banners/accounting-and-bookkeping.webp" alt="Business Center"
                    class="img-fluid">
            </div>
            <div class="banner_text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_heading">Financial Sevices</div>
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
                    <div class="heading">Corporate Bank <span>Account Opening</span></div>
                    <p>
                        Opening a <strong>corporate bank account in Dubai</strong> is a strategic step for businesses operating in or
                        through the UAE. While Dubai offers a robust banking system with excellent international
                        connectivity, <strong>regulatory scrutiny has increased</strong>, and banks now require thorough documentation
                        and justification of the business model.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="premiumServices_section virtual-office-section corporate-account-opening_section">
        <div class="container">
            <div class="premiumServices_text" data-aos="fade-up" data-aos-duration="1000">
                <!-- <p>
                    Here’s a detailed overview to help you navigate the process:
                </p> -->
                <div class="heading">Benefits of a <span>Corporate Bank Account in Dubai</span></div>
                <div class="custom_listing">
                    <ul class="p-0">
                        <li>Access to <strong>multi-currency accounts</strong></li>
                        <li>No exchange control restrictions</li>
                        <li>Online and mobile banking</li>
                        <li>Stable banking environment with strong privacy</li>
                        <li>International money transfers with ease</li>
                        <li>Acceptance by global partners</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="local_internation_bank_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9">
              <div class="heading center_heading">
                Popular Banks for <span>Corporate Accounts in Dubai</span>
              </div>
              <div class="VisaCategory_inner">
                <table class="table table-responsive mt-4 mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="col50">Local Banks</th>
                      <th scope="col">International Banks</th>                     
                    </tr>
                  </thead>
                  <tbody class="align-middle">
                    <tr>
                      <th scope="row">Emirates NBD</th>
                      <td><strong>HSBC Middle East</strong></td>                          
                    </tr>
                    <tr>
                      <th scope="row">Mashreq Bank</th>
                      <td><strong>Standard Chartered</strong></td>                          
                    </tr>
                    <tr>
                      <th scope="row">RAKBANK (RAK Islamic)</th>
                      <td><strong>Citibank</strong></td>                          
                    </tr>
                    <tr>
                      <th scope="row">Dubai Islamic Bank</th>
                      <td>-</td>                          
                    </tr>
                    <tr>
                      <th scope="row">First Abu Dhabi Bank</th>
                      <td>-</td>                          
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