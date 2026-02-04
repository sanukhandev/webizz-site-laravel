  @include('layouts.header')
    <div class="main">
      <div class="hero_section">
        <div class="hero_banner_inner owl-carousel1 owl-carousel">
          <div class="item">
            <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/banners/banner-demo1.webp" alt="home banner">
            <div class="container">
              <div class="banner_content">
                <div class="banner_text_box">
                  <h1>"Grow Your Business. Build Your Brand" <br> Partnering with <span  style="color: #fe6b01;" >WEBIZZ</span></h1>
                </div>
                <div class="explore_more">
                  <a href="{{ENV('APP_URL')}}#about-us">Explore <span>More</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="" id="about-us"></a>
      </div>

      <div class="about_us_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="about_right">
                <div class="about_right_inner">
                  <div class="heading">Welcome to <span>WEBIZZ</span></div>
                  <p>
                    We are a young and dynamic organization driven by innovation, passion and a commitment to excellence.
                    <br> <br>
                    With a fresh perspective and a forward thinking approach, we thrive on challenges and embrace change as an opportunity
                    for growth.<br><br>
                    With a focus on flexibility, reliability, and professionalism, WEBIZZ delivers tailored services that simplify business
                    setup and enhance operational efficiency.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="welcome_img">
                <img
                class="img-fluid"
                src="{{ENV('APP_URL')}}assets/images/welcome-image.webp"
                alt="welcome image">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="our_services_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container-lg">
          <div class="row">
            <div class="col-md-12">
              <div class="heading text-center">Our <span>Services</span></div>
              <div class="services_tabbing">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button
                      class="nav-link active"
                      id="our_services_tab1"
                      data-bs-toggle="tab"
                      data-bs-target="#our_services1"
                      type="button"
                      role="tab"
                      aria-controls="our_services1"
                      aria-selected="true"
                    >
                      Business <span>Center</span>
                    </button>
                    <button
                      class="nav-link"
                      id="our_services_tab2"
                      data-bs-toggle="tab"
                      data-bs-target="#our_services2"
                      type="button"
                      role="tab"
                      aria-controls="our_services2"
                      aria-selected="false"
                    >
                      Business <span>Setup</span>
                    </button>
                    <button
                      class="nav-link"
                      id="our_services_tab3"
                      data-bs-toggle="tab"
                      data-bs-target="#our_services3"
                      type="button"
                      role="tab"
                      aria-controls="our_services3"
                      aria-selected="false"
                    >
                      PRO <span>Services</span>
                    </button>
                    <button
                      class="nav-link"
                      id="our_services_tab4"
                      data-bs-toggle="tab"
                      data-bs-target="#our_services4"
                      type="button"
                      role="tab"
                      aria-controls="our_services4"
                      aria-selected="false"
                    >
                      Financial <span>Services</span>
                    </button>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="services_tabbing_data">
          <div class="container-fluid">
            <div class="tab-content" id="nav-tabContent">
              <div
                class="tab-pane fade show active"
                id="our_services1"
                role="tabpanel"
                aria-labelledby="our_services_tab1">
                <div class="row">
                  <div class="col-md-12">
                    <div class="inner_service_data justify-content-center">
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/smart.webp"
                            alt="Smart Workspace"
                            loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Premium Office</div>
                          <p>
                            This is a physical location that provides temporary office solutions for all types...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}premium-office">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Executive-Office.webp"
                            alt="Executive Office"
                            loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Executive Office</div>
                          <p>
                            Step into a workspace that reflects your professionalism.
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}executive-office-space">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/virtual.webp"
                            alt="Virtual Office"
                            loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Virtual Office</div>
                          <p>
                            Virtual offices are perfectly legal when set up through legitimate channels...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}virtual-office">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/co-working.webp"
                            alt="Co-working Space"
                            loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Co-working Space</div>
                          <p>
                            An arrangement in which workers for different companies share an office space.
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}coworking-space">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Meeting-Room.webp"
                            alt="Meeting Room"
                            loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Meeting Room</div>
                          <p>
                            We ensure a perfect environment so that you can hold the most productive meetings...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}meeting-room">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/networking-and-meetup-events.webp"
                            alt="networking and meetup events"
                            loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">
                            Networking And Meetup Events
                          </div>
                          <p>
                            This facility that is offered by a business center is a space for meetings and events...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}networking-and-meetup">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="our_services2"
                role="tabpanel"
                aria-labelledby="our_services_tab2">
                <div class="row">
                  <div class="col-md-12">
                    <div class="inner_service_data justify-content-center">
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/startup.webp"
                            alt="business startup services"
                            loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Business Startup Services</div>
                          <p>
                            We make starting a business simple, efficient, and stress-free. Our comprehensive...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}business-startup-services">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/mainland.webp"
                            alt="mainland"
                            loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Mainland</div>
                          <p>
                            Setting up a business in the UAE Mainland opens the door to unlimited growth...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}mainland">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Freezone.webp"
                            alt="Freezone" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Freezone</div>
                          <p>
                            We helps startups, SMEs, and global investors launch in top UAE free zones—offering...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}freezone-setup">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Offshore.webp"
                            alt="Offshore" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Offshore</div>
                          <p>
                            We simplify offshore setup with secure, tax-efficient solutions for global entrepreneurs.
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}offshore">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Trademark.webp"
                            alt="Trademark" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Trademark Services</div>
                          <p>
                            Secure your business identity with WEBIZZ. We simplify the trademark registration...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}trademark-services">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="our_services3"
                role="tabpanel"
                aria-labelledby="our_services_tab3"
              >
                <div class="row">
                  <div class="col-md-12">
                    <div class="inner_service_data justify-content-center">
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Golden-Visa.webp"
                            alt="Golden Visa" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Golden Visa</div>
                          <p>
                            Secure Long-Term Residency with the UAE Golden Visa WEBIZZ simplifies the Golden
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}golden-visa">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Silver-Visa.webp"
                            alt="Silver Visa" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Silver Visa</div>
                          <p>
                            The Silver Visa offers a 5-year residency for skilled professionals, entrepreneurs...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}silver-visa">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Dependent-Visa.webp"
                            alt="Dependent Visa" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Partner Visa</div>
                          <p>
                            The Partner/Investor Visa allows business owners to live, work, and grow their...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}partner-visa">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Partner-Visa.webp"
                            alt="Partner Visa" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Dependent Visa</div>
                          <p>
                            We makes it easy to sponsor your spouse, children, or parents in the UAE.
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}dependent-visa">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Freelance-Visa.webp"
                            alt="Freelance Visa" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Freelance Visa</div>
                          <p>
                            We helps creatives, consultants, and independent professionals secure their...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}freelance-visa">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Employee-Visa.webp"
                            alt="Employee Visa" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Employee Visa</div>
                          <p>
                            We simplifies the process of obtaining employment visas for businesses...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}employee-visa">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Maid-Visa.webp"
                            alt="Maid Visa" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Maid Visa</div>
                          <p>
                            We provides end-to-end assistance for sponsoring housemaids...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}maid-visa">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="our_services4"
                role="tabpanel"
                aria-labelledby="our_services_tab4"
              >
                <div class="row">
                  <div class="col-md-12">
                    <div class="inner_service_data justify-content-center">
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/investment-and-asset-management.webp"
                            alt="investment and asset management" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">
                            Investment & Asset Management
                          </div>
                          <p>
                            We offer strategic investment and asset management services tailored...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}investment-and-asset-management">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/vat.webp"
                            alt="VAT Registration" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">VAT Registration</div>
                          <p>
                            We simplifies VAT registration for businesses in the UAE, ensuring full compliance...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}vat-registration">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/tax.webp"
                            alt="Tax Registration" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">
                            Corporate Tax Registration
                          </div>
                          <p>
                            We ensures your business meets UAE corporate tax requirements with fast...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}corporate-tax-registration">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Accounting.webp"
                            alt="Accounting" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">
                            Accounting and Bookkeeping
                          </div>
                          <p>
                            We provides accurate, reliable accounting and bookkeeping services to keep...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}accounting-and-bookkeping">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Audit-Reports.webp"
                            alt="Audit Reports" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">Audit Reports</div>
                          <p>
                            We delivers thorough and reliable audit reports that meet UAE regulatory standards.
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}audit-reports">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Bank-Account.webp"
                            alt="Bank Account" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">
                            Corporate Bank Account Opening
                          </div>
                          <p>
                            We guides your business through the corporate bank account opening process...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}corporate-bank-account-opening">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Compliance-Registration.webp"
                            alt="Compliance Registration" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">
                            AML & ESR Compliance Registration
                          </div>
                          <p>
                            We ensures your business meets Anti-Money Laundering (AML) and Economic...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}aml-esr-compliance-registration">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="service_box">
                        <div class="service_img">
                          <img
                            class="img-fluid"
                            src="{{ENV('APP_URL')}}assets/images/services/Certificate-TRC.webp"
                            alt="Certificate TRC" loading="lazy">
                        </div>
                        <div class="service_content">
                          <div class="service_heading">
                            Tax Residency Certificate- TRC
                          </div>
                          <p>
                            Maximize Your Tax Benefits We assists businesses and individuals in obtaining...
                          </p>
                          <div class="read_more">
                            <a href="{{ENV('APP_URL')}}tax-residency-certificate">Read <span>More</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="why_us_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row justify-content-center ">
            <div class="col-lg-10 col-md-12">
              <div class="why_us_inner text-center">
                <div class="heading">Why <span>Us</span></div>
              </div>
            </div>
            <div class="col-lg-10 col-md-12">
              <div class="why_us_inner">
                <p class="text-center">
                  At WEBIZZ we will be your guide to ensure that you exactly get
                  what your business demands. With the expertise of our
                  experienced team and their professional and personalized
                  approach, we will help you to kick-start your business journey
                  in the UAE smoothly and successfully. Let us handle the
                  complexities in your business journey so that your focus stays
                  on the growth and establishment of your business.
                </p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center align-items-center mt-4">
            <div class="col-lg-6 ">
              <div class="why_img">
                <img src="{{ENV('APP_URL')}}assets/images/why-img.webp" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-6 ">
              <div class="advantages_text  why-sub-tab" >
              <div class="heading">From Business Setup to Smart Workspaces — <span>Everything You Need, in One Place</span></div>
              <ul>
                <li>Premium office space with customization</li>
                <li>Premium office address with Virtual Ejari</li>
                <li>Tailored solutions for your business needs </li>
                <li>End-to-end support—from setup to scaling</li>
                <li>A local team with deep market understanding of the UAE</li>
                <li>Seamless handling of documentation, licensing, and compliance</li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>

      <div class="our_gallary_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container-fluid m-0">
          <div class="row align-items-end">
            <div class="col-md-6">
              <div class="row justify-content-end">
                <div class="col-md-10">
                  <div class="heading">Our <span>Gallery</span></div>
                  <!-- <p>We are a young and dynamic organization driven by innovation, passion and a commitment to excellence. With a fresh perspective and a forward thinking approach, we thrive on challenges and embrace change as an opportunity for growth.</p> -->
                  <div id="sync2" class="owl-carousel owl-theme">
                    <div class="item">
                      <img
                        class="img-fluid"
                        src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-1.webp"
                        alt="office pictures" loading="lazy">
                    </div>
                    <div class="item">
                      <img
                        class="img-fluid"
                        src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-2.webp"
                        alt="office pictures" loading="lazy">
                    </div>
                    <div class="item">
                      <img
                        class="img-fluid"
                        src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-3.webp"
                        alt="office pictures" loading="lazy">
                    </div>
                    <div class="item">
                      <img
                        class="img-fluid"
                        src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-4.webp"
                        alt="office pictures" loading="lazy">
                    </div>
                    <div class="item">
                      <img
                        class="img-fluid"
                        src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-5.webp"
                        alt="office pictures" loading="lazy">
                    </div>
                    <div class="item">
                      <img
                        class="img-fluid"
                        src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-6.webp"
                        alt="office pictures" loading="lazy">
                    </div>
                    <div class="item">
                      <img
                        class="img-fluid"
                        src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-7.webp"
                        alt="office pictures" loading="lazy">
                    </div>
                    <div class="item">
                      <img
                        class="img-fluid"
                        src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-8.webp"
                        alt="office pictures" loading="lazy">
                    </div>
                    <div class="item">
                      <img
                        class="img-fluid"
                        src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-9.webp"
                        alt="office pictures" loading="lazy">
                    </div>
                    <div class="item">
                      <img
                        class="img-fluid"
                        src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-10.webp"
                        alt="office pictures" loading="lazy">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 m-0 p-0">
              <div id="sync1" class="owl-carousel owl-theme">
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-1.webp"
                    alt="office pictures" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-2.webp"
                    alt="office pictures" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-3.webp"
                    alt="office pictures" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-4.webp"
                    alt="office pictures" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-5.webp"
                    alt="office pictures" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-6.webp"
                    alt="office pictures" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-7.webp"
                    alt="office pictures" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-8.webp"
                    alt="office pictures" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-9.webp"
                    alt="office pictures" loading="lazy">
                </div>
                 <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/gallery/office-pictures-10.webp"
                    alt="" loading="lazy">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="our_channel_partner_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center m-0 mb-md-2">
              <div class="why_us_inner text-center">
                <div class="heading">Our <span>Channel Partners</span></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="channel_partner_slider owl-carousel">
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/afz_logo.webp"
                    alt="afz logo" loading="lazy"                  >
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/amer.webp"
                    alt="amer logo" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/DMCC-logo.webp"
                    alt="DMCC logo" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/jafza-logo.webp"
                    alt="jafza logo" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/IFZA-LOGO.webp"
                    alt="IFZA logo" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/dubai-economy.webp"
                    loading="lazy"
                    alt="dubai economy logo"
                  >
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/land-department.webp"
                    loading="lazy"
                    alt="land department logo"
                  >
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/Meydan_Free_Zone.webp"
                    loading="lazy"
                    alt="Meydan Free Zone logo"
                  >
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/mobile-rak-logo.webp"
                    loading="lazy"
                    alt="mobile rak logo"
                  >
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/spc-logo.webp"
                    loading="lazy"
                    alt="spc logo"
                  >
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/tasheel.webp"
                    loading="lazy"
                    alt="tasheel logo"
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 text-center m-0 mb-md-2 pt-5">
              <div class="why_us_inner text-center">
                <div class="heading">Our <span>Clients</span></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="our_clients_slider">
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/Origin_company_logo.webp"
                    alt="afz logo" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/QuicKart_logo.webp"
                    alt="amer logo" loading="lazy">
                </div>
                <div class="item">
                  <img
                    class="img-fluid"
                    src="{{ENV('APP_URL')}}assets/images/logos/voiv-logo.webp"
                    alt="amer logo" loading="lazy">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="testimonials_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-10">
              <div class="testimonials_inner owl-carousel2 owl-carousel">
                <div class="item">
                  <div
                    class="inner_item justify-content-center align-items-center"
                  >
                    <div class="heading">Client <span>Testimonials</span></div>
                    <p>
                      Setting up a business can feel overwhelming — unless you have WEBIZZ by your side. From paperwork to precision, their team made the entire process smooth, quick, and surprisingly stress-free. It felt less like service, more like partnership. Highly recommended for anyone serious about starting smart.
                    </p>
                    <div class="client_testimonials">
                        <b>Pravin Rai</b>, Founder & CEO, QuicKart
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div
                    class="inner_item justify-content-center align-items-center"
                  >
                    <div class="heading">Client <span>Testimonials</span></div>
                    <p>
                      WEBIZZ was instrumental in helping me obtain my company license. Her expertise, guidance, and support throughout the entire process were invaluable. The team was responsive, professional, and ensured that everything was done efficiently. Thanks to the team I was able to navigate the licensing process smoothly. I highly recommend WEBIZZ services to anyone looking for assistance with company licenses.
                    </p>
                    <div class="client_testimonials">
                        <b>Anuradaa T</b>, CEO of ARAMAA LUXURY Real Estate
                    </div>
                  </div>
                </div>
                <!-- <div class="item">
                  <div
                    class="inner_item justify-content-center align-items-center"
                  >
                    <div class="heading">Client <span>Testimonials</span></div>
                    <p>
                      Setting up a business can feel overwhelming — unless you have Webizz by your side. From paperwork to precision, their team made the entire process smooth, quick, and surprisingly stress-free. It felt less like service, more like partnership. Highly recommended for anyone serious about starting smart.
                    </p>
                    <div class="client_testimonials">
                        <b>Pravin Rai</b>, Founder & CEO, QuicKart
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="get_in_touch">
          <div class="container">
              <div class="row justify-content-end">
                  <div class="col-md-6">
                      <div class="heading">Get In <span>Touch</span></div>
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
                                  <textarea name="messages" class="form-control" placeholder="Your Message" rows="5" required></textarea>
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

