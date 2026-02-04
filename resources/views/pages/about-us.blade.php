@include('layouts.header')
<main>
    <section>
        <div class="banner_mainBox">
            <div class="banner_image">
                <img src="{{ENV('APP_URL')}}assets/images/banners/about-us.webp" alt="Business Center" class="img-fluid">
            </div>
            <div class="banner_text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner_heading">About Us</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="about_us_section" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="about-image">
                        <img src="{{ENV('APP_URL')}}assets/images/new-about-us-img.webp" alt="Single Business Tower" class="img-fluid main-image">
                        <div class="experience-badge">
                            <span class="years">Single Business Tower</span>
                            <span class="text"> Business Bay Dubai</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <h1 class="heading">
                        Best Business Setup Consultants in <span>UAE</span>
                    </h1>
                    <p>Webizz is regarded as one of the best business setup consultants in UAE, providing entrepreneurs, startups, and worldwide investors with a straightforward path to establishing and growing their businesses in the region's thriving economy. With years of experience and an established track record, Webizz streamlines the difficulties of company registration, licensing, and compliance, allowing businesses to launch quickly and confidently.</p>
                    <p>Our consulting offers customized solutions for freezone, mainland, and offshore company formation, taking into account industrial needs, budget, and long-term objectives. Webizz provides comprehensive support, including trade name registration, legal documentation, visa processing, and corporate bank account establishment, allowing clients to focus on growth while we manage administrative details.</p>
                    <p>What distinguishes Webizz is our dedication to transparency, compliance, and efficiency. We strictly follow UAE government rules and freezone authority requirements, providing transparent pricing packages with no hidden expenses. We act as a trusted intermediary between investors and authorities, ensuring that each stage of the setup process is legally and financially secure.</p>
                    <p>Our reputation as the top business setup consultants in the UAE is based on trust. Our clients globally appreciate our professionalism, timeliness, and ethical methods. We prioritize secrecy and attention in every project, fostering long-term connections beyond the initial setup.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="vision_and_mission" data-aos="fade-up" data-aos-duration="1000">
        <div class="inner_vision_mission">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading mb-5 pb-2">
                            Mission & <span>Vision</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="vision_box">
                            <span><img class="img-fluid vision_icon" src="{{ENV('APP_URL')}}assets/images/mission.png" alt=""></span>
                            <p>Our mission is to provide our client a cost-effective and personalized services of the highest quality possible, to help establish and expand their businesses. We aim to make the market entry process easy & effortless encouraging all entrepreneurs & brands to grow and build a successful business.</p>
                        </div>
                        <div class="vision_box mb-0">
                            <span><img class="img-fluid vision_icon" src="{{ENV('APP_URL')}}assets/images/vision.png" alt=""></span>
                            <p>Our vision is to be the premier partner for new and established businesses on their journey to global success. We strive to empower our clients with the tools and resources they need to become the best in their respective industries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@include('layouts.footer')