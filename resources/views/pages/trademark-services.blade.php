 @include('layouts.header')
    <main class="freezone_setup_main">
      <section>
        <div class="banner_mainBox">
            <div class="banner_image">
                <img src="assets/images/banners/trademark-services.webp" alt="Business Center" class="img-fluid">
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
              <h1 class="heading">Trademark Registration Service in <span>UAE</span></h1>
              <p>Webizz provides comprehensive and expert trademark registration services in UAE, assisting businesses to legally protect their brand identification in a highly competitive market. Webizz protects your intellectual property, including business names and logos, slogans, and unique brand aspects, under UAE trademark law and Ministry of Economy standards.</p>
              <p>Our trademark registration process begins with a thorough trademark availability search to uncover potential conflicts and lower the probability of rejection. We then assist with the right classification of goods and services, accurate application filing, and submission of all necessary papers. Our professional team actively monitors each stage of the application, including examination, publishing, and final registration, to ensure timely updates and clear communication throughout.</p>
              <p>Webizz offers professional assistance in managing oppositions, trademark objections, and legal explanations, assisting businesses in efficiently responding and upholding compliance. We provide trademark renewal, alteration, and brand protection services in addition to registration, guaranteeing your intellectual property's long-term security. Mainland businesses, free zone organizations, startups, SMEs, and foreign brands wishing to enter the UAE market can all benefit from our solutions.</p>
              <p>Webizz streamlines the intricacies of trademark registration in the United Arab Emirates thanks to its solid grasp of regional laws and demonstrated industry knowledge. We create customized solutions that support your company's objectives with an emphasis on accuracy, confidentiality, and client confidence. Selecting Webizz gives you a dependable partner committed to safeguarding your brand, boosting market reputation, and promoting long-term company expansion in the United Arab Emirates.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="premiumServices_section trademarks_section">
        <div class="container">
          <div class="premiumServices_text" data-aos="fade-up" data-aos-duration="1000">
           <div class="heading_box">
              <div class="heading">Federal Law / <span>Trademarks Laws</span></div>
            </div>
            <div class="custom_listing">
              <p>Trademark are words, logo, names, slogans, signatures, letters, figures, color, software, application, website, shape, or a combination of all of these. The United Arab Emirate’s Federal Laws provide protection for the registered trademarks. The trademark law intended to safeguard the interests of both consumers and business in U.A.E. Trademark Laws cover the following main areas:</p>
              <ul class="p-0">
                <li>Definition of trademarks</li>
                <li>Signs that can and cannot be registered as trademarks</li>
                <li>Registration and cancellation procedures for trademarks</li>
                <li>Transfer of ownership of trademarks</li>
                <li>Licensing others to use trademarks</li>
                <li>Penalties for trademark law infringement and general and transitory provisions</li>
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



    