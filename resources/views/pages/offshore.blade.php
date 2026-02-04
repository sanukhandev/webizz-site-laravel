@include('layouts.header')
    <main class="offshore_main">
      <section>
        <div class="banner_mainBox">
            <div class="banner_image">
                <img src="{{ENV('APP_URL')}}assets/images/banners/offshore-new.webp" alt="Business Center" class="img-fluid">
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
                    <h1 class="heading">Offshore Company Formation in <span>UAE</span></h1>
                    <p>
                        Webizz is a reputable consultant that specializes in offshore company formation in the UAE. We assist worldwide entrepreneurs, investors, and companies in creating secure and tax-efficient structures in one of the world's most strategic business locations. Webizz, which focuses on transparency, compliance, and efficiency, makes it easier to establish offshore entities in jurisdictions such as Jebel Ali Free Zone (JAFZA), Ras Al Khaimah International Corporate Centre (RAK ICC), and Ajman Offshore.
                    </p>
                    <p>
                        Offshore firms in the UAE are perfect for enterprises that want asset protection, international trade flexibility, and tax optimization. They allow for 100% foreign ownership, full profit repatriation, and corporate and personal income tax exemptions. Webizz offers specialized counsel to help clients choose the best jurisdiction for their sector, financial ambitions, and operational needs.
                    </p>
                    <p>
                        Our services include the whole offshore formation process, from creating incorporation documents and registering trade names to opening overseas bank accounts and guaranteeing compliance with UAE rules. Along with offshore incorporation, Webizz provides comprehensive business startup services, enabling entrepreneurs to confidently launch and expand their companies.
                    </p>
                    <p>
                        Compliance and confidentiality are critical to our operations. Webizz adheres completely to UAE government and offshore authority requirements, guaranteeing that each stage of the procedure is legally sound. Our commitment to client security, transparency, and ethical procedures fosters long-term confidence with our partners.
                    </p>
                    <p>
                        Entrepreneurs who use Webizz receive distinct benefits such as worldwide market access, asset protection techniques, and simpler organizational structures. Whether you are an investor looking for international expansion, a business owner looking to preserve assets, or a corporation looking to maximize tax efficiency, Webizz has the expertise, authority, and integrity you need to successfully establish and build an offshore presence in the UAE.
                    </p>
                </div>
            </div>
        </div>
      </div>
      <div class="premiumServices_section offshore1">
        <div class="container">
          <div class="premiumServices_text" data-aos="fade-up" data-aos-duration="1000">
            <div class="heading">Benefits of Setting Up an <span>Offshore Company in Dubai</span></div>
            <div class="custom_listing">
              <ul class="p-0">
                <li>100% foreign ownership</li>
                <li>Zero corporate tax and income tax</li>
                <li>No import/export duties</li>
                <li>Asset protection and privacy</li>
                <li>Ease of opening international bank accounts</li>
                <li>No physical office requirement</li>
                <li>Access to UAE's strong financial and legal system</li>
                <li>Multi-currency bank accounts</li>
              </ul>
            </div>          
          </div>
        </div>
      </div>
      <div class="advantages_section offshore2">
        <div class="container">
          <div class="advantages_text" data-aos="fade-up" data-aos-duration="1000">
            <div class="heading">
              Key Offshore Jurisdiction <span>in Dubai</span>
            </div>
            <p>JAFZA Offshore (Jebel Ali Free Zone Authority)</p>
            <ul>
              <li>The only offshore jurisdiction in Dubai</li>
              <li>Allows ownership of property in Dubai (unlike Ras Al Khaimah offshore companies)</li>
              <li>Reputable and recognized internationally</li>
              <li>No minimum capital requirement</li>
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
   