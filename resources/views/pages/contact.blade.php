@include('layouts.header')
<main>
    <section>
        <div class="banner_mainBox">
            <div class="banner_image">
                <img src="{{ENV('APP_URL')}}assets/images/banners/contact-us.webp" alt="contact" class="img-fluid contact-banner">
            </div>
            <div class="banner_text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="banner_heading">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section section_padding">
        <div class="contact_mainBox">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="address_mainBox">
                            <div class="address_boxList">
                                <div class="address_contentBox">
                                    <!-- <div class="heading">Connect with <span>us</span></div> -->
                                    <div class="address_list">
                                        <div class="address_icon">
                                            <img src="{{ENV('APP_URL')}}assets/images/address-pin-orange.svg" alt="Address" class="img-fluid">
                                        </div>
                                        <div class="address_text">
                                            <address>Single business tower 35th floor office number 3501-3506, <br>Business Bay Dubai UAE.</address>
                                        </div>
                                    </div>
                                    <div class="address_list">
                                        <div class="address_icon">
                                            <img src="{{ENV('APP_URL')}}assets/images/telephone-orange.svg" alt="Address" class="img-fluid">
                                        </div>
                                        <div class="address_text">
                                            <a href="tel:+97145526801">+971 45526801</a> |
                                            <a href="tel:+971501056811">+971 501056811</a> |
                                            <a href="tel:+971522190733">+971 522190733</a>
                                        </div>
                                    </div>
                                    <div class="address_list mb-0">
                                        <div class="address_icon">
                                            <img src="{{ENV('APP_URL')}}assets/images/paper-plane-orange.svg" alt="Address" class="img-fluid">
                                        </div>
                                        <div class="address_text">
                                           <a href="mailto:Operationwebizz@outlook.com">info@webizz.ae</a> |
                                           <a href="mailto:operation@webizz.ae">operation@webizz.ae</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="address_mapBox">
                                    <iframe title="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14441.784146086457!2d55.23991631163222!3d25.188176373334727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f69d9e86fc297%3A0xe17fc7cce8824796!2sSingle%20Business%20Tower%20-%20Business%20Bay%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1748595151137!5m2!1sen!2sin" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
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
    </section>
    <div class="faq_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center m-0 mb-md-2">
                <div class="why_us_inner text-center">
                    <div class="heading">Have a question? <span>Check out the FAQ</span></div>
                </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-md-4">
                    <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/faq.webp" alt="">
                </div> -->
                <div class="col-md-12">
                    <div class="faq_inner_box">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Do I need to have my own internet connection, DEWA & AC?
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No, all the utilities including DEWA, AC and high speed WIFI is Free and its all including in the Annual rent.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Is office customization possible?
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we genuinely care about our clients and provide them with a wide range of office customization options to meet their specific needs.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapseTwo">
                                        Is it walkable from business bay metro station?
                                </button>
                                </h2>
                                <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our office is easily accessible — just minutes on foot from Business Bay Metro.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        Is the peak rush hour traffic in business bay will affect my daily commute?
                                </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    While Business Bay experiences typical peak-hour traffic, our strategic location near the metro and key access roads ensures a smooth and efficient daily commute.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        Do you offer Ejari for office spaces?
                                </button>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="collapsefive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we provide <b>Ejari-registered</b> office spaces which are fully compliant with UAE government regulations, suitable for licensing and visa purposes.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        Do you provide virtual office services?
                                </button>
                                </h2>
                                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="collapsesix" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we offer <b>virtual office packages</b> with mail handling, business address, and Ejari support for companies looking for a cost-effective setup.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                        Do you help with trade license issuance and renewal?
                                </button>
                                </h2>
                                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="collapseseven" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we handle new trade license applications, renewals, amendments, and all related government documentation through our expert PRO services.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapeeight" aria-expanded="false" aria-controls="collapeeight">
                                        Can you assist with visa processing and immigration services?
                                </button>
                                </h2>
                                <div id="collapeeight" class="accordion-collapse collapse" aria-labelledby="collapeeight" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, our PRO team manages the full visa process for investors, employees, and dependents, ensuring compliance and timely updates.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapenine" aria-expanded="false" aria-controls="collapenine">
                                        Are there any hidden charges?
                                </button>
                                </h2>
                                <div id="collapenine" class="accordion-collapse collapse" aria-labelledby="collapenine" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No, we maintain complete transparency. All costs are discussed upfront, with no hidden or surprise fees.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapeten" aria-expanded="false" aria-controls="collapenine">
                                    Do you offer support for bank account opening?
                                </button>
                                </h2>
                                <div id="collapeten" class="accordion-collapse collapse" aria-labelledby="collapeten" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we guide and assist you throughout the <b>corporate bank account opening process </b> with top local and international banks.
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('layouts.footer')