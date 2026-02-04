  @include('layouts.header')
    <main class="vat_registration">
      <section>
        <div class="banner_mainBox">
            <div class="banner_image">
                <img src="{{ENV('APP_URL')}}assets/images/banners/vat-vegistration.webp" alt="Business Center" class="img-fluid">
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
      <div class="first_section vat_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-10">
              <div class="heading">VAT <span>Registration</span></div>
              <p>Financial services encompass a broad range of economic activities provided by the finance industry, including banking, investment, insurance, and wealth management. These services play a crucial role in the functioning of the global economy by facilitating the flow of capital, managing risk, and offering tools for individuals and businesses to achieve their financial goals. They enable seamless transactions, support credit availability, and contribute to the efficient allocation of resources across sectors. From personal banking solutions like savings accounts, loans, and credit facilities to complex investment strategies, corporate financing, and retirement planning, financial services address a wide array of financial needs. Insurance services protect against unforeseen risks, while wealth management helps individuals grow and preserve their assets. By offering tailored financial products and expert advice, the industry empowers clients to make informed financial decisions. Ultimately, financial services help build financial stability, support sustained economic growth, and foster confidence in financial systems, making them a vital pillar of modern society.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="vat_highlights_box">
        <div class="container">
          <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
              <div class="vat_registration_box">
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/vat-image-01.webp" alt="">
                  </div>
                  <div class="col-md-6">
                    <p><span>VAT (Value Added Tax)</span> is a 5% tax added to the sale of goods and services in the UAE.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
              <div class="vat_registration_box">
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/services/vat-image-02.webp" alt="">
                  </div>
                  <div class="col-md-6">
                    <p>It started in the UAE on <span>January 1, 2018</span>.</p>
                  </div>
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="vat_highlights">
        <marquee>
          <ul>
              <li><b>VAT (Value Added Tax) </b>is a 5% tax added to the sale of goods and services in the UAE.</li>
              <li>It started in the UAE on <b>January 1, 2018</b>.</li>
          </ul>
        </marquee>
      </div> -->

      <div class="VisaCategory" data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="heading center_heading">
                Who Needs to <span>Register for VAT?</span>
              </div>
              <div class="VisaCategory_inner">
                <table class="table table-responsive mt-4 mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="col19">Type</th>
                      <th scope="col">Condition</th>                     
                    </tr>
                  </thead>
                  <tbody class="align-middle">
                    <tr>
                      <th scope="row">Mandatory Registration</th>
                      <td>If your business turnover (sales/revenue) is <b>more than AED 375,000</b> in the last 12 months or expected in the next 30 days</td>                          
                    </tr> 
                    <tr>
                      <th scope="row">Voluntary Registration</th>
                      <td>If your turnover is <b>more than AED 187,500</b> but less than AED 375,000</td>                          
                    </tr> 
                     <tr>
                      <th scope="row">Not Required</th>
                      <td>If turnover is below AED 187,500</td>                          
                    </tr> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="advantages_section vat_registration_section">
        <div class="container">
          <div class="advantages_text" data-aos="fade-up" data-aos-duration="1500">
            <div class="heading">
              Important <span>Notes</span>
            </div>
            <ul>
              <li>You must <b>charge 5% VAT</b> on your invoices once registered</li>
              <li>You must <b>file VAT returns</b> quarterly (or monthly, if assigned)</li>
              <li>Even if you have <b>zero sales</b>, you must file <b>Nil VAT returns</b> to avoid penalties</li>
              <li><b>Penalties</b> for late registration or mistakes can be heavy (starting from AED 10,000+)</li>
            </ul>
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
   


    