@include('layouts.header')
    <main class="vat_registration investment_and_asset">
      <section>
        <div class="banner_mainBox">
          <div class="banner_image">
            <img
              src="{{ENV('APP_URL')}}assets/images/banners/asset-management.webp"
              alt="Business Center"
              class="img-fluid"
            />
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
              <div class="heading">
                Investment and <span>Asset Management</span>
              </div>
              <p>
                Investment and asset management services designed to meet the
                diverse needs of individuals, businesses, and institutions. Our
                goal is to help you grow, protect, and optimize your wealth
                through tailored strategies and expert management.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="additional_benefits_sec main-categories" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row">
          <div class="col-md-12">
            <div class="additional_benefits_box">
              <div class="heading center_heading">Our <span>Services Include</span></div>
              <div class="row">
                <div class="benefits_inner_box">
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/asset-management/services-include-01.png" alt="">
                    </div>
                    <h4>Portfolio Management</h4>
                    <p>Customized investment portfolios aligned with your risk tolerance and financial goals.</p>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/asset-management/services-include-02.png" alt="">
                    </div>
                    <h4>Wealth Planning</h4>
                    <p>Strategic planning to preserve and transfer wealth across generations.</p>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/asset-management/services-include-03.png" alt="">
                    </div>
                    <h4>Asset Allocation</h4>
                    <p>Diversification across asset classes including equities, fixed income, real estate, and alternative investments.</p>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/asset-management/services-include-04.png" alt="">
                    </div>
                    <h4>Risk Management</h4>
                    <p>Identifying and mitigating risks to safeguard your assets.</p>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/asset-management/services-include-05.png" alt="">
                    </div>
                    <h4>Real Estate Investment</h4>
                    <p>Guidance on property acquisition, development, and management for stable returns.</p>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/asset-management/services-include-06.png" alt="">
                    </div>
                    <h4>Private Equity Venture Capital</h4>
                    <p>Access to exclusive investment opportunities in startups and growth companies.</p>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/asset-management/services-include-07.png" alt="">
                    </div>
                    <h4>Retirement Planning</h4>
                    <p>Long-term strategies to ensure financial independence post-retirement.</p>
                  </div>
                  <div class="benefits_box">
                    <div class="icon-container">
                      <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/asset-management/services-include-08.png" alt="">
                    </div>
                    <h4>Tax Optimization</h4>
                    <p>Structuring investments to minimize tax liabilities and maximize net returns.</p>
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

