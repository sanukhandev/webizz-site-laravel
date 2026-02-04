<!DOCTYPE html>
<html lang="en">

<head>
    <?php $canonicalUrl = url()->current(); ?>
    <?php if (!empty($data_arr)) { ?>
        <title><?php echo $data_arr['title'] ?></title>
        <meta name="keywords" content="<?php echo $data_arr['keywords'] ?>">
        <meta name="description" content="<?php echo $data_arr['description'] ?>">
        <link rel="canonical" href="<?php echo e($canonicalUrl); ?>">
    <?php } ?>
    <link rel="preload" fetchpriority="high" as="image" href="{{ENV('APP_URL')}}assets/images/logo-final-300.webp" type="image/webp">
    <link rel="preload" fetchpriority="high" as="image" href="{{ENV('APP_URL')}}assets/images/banners/main-banner.webp" type="image/webp">
    <link rel="preload" fetchpriority="high" as="image" href="{{ENV('APP_URL')}}assets/images/welcome-image.webp" type="image/webp">
    <link rel="preload" href="{{ENV('APP_URL')}}assets/fonts/Lato-Thin.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="{{ENV('APP_URL')}}assets/fonts/Lato-Light.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="{{ENV('APP_URL')}}assets/fonts/Lato-Regular.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="{{ENV('APP_URL')}}assets/fonts/Lato-Bold.woff" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="{{ENV('APP_URL')}}assets/fonts/Lato-Black.woff" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ENV('APP_URL')}}assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.green.min.css">
    <link rel="icon" type="image/x-icon" href="{{ENV('APP_URL')}}assets/images/fev-icon.webp">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://webizz.ae/"
            }, {
                "@type": "ListItem",
                "position": 2,
                "name": "About Us",
                "item": "https://webizz.ae/about-us"
            }, {
                "@type": "ListItem",
                "position": 3,
                "name": "Premium Office",
                "item": "https://webizz.ae/premium-office"
            }, {
                "@type": "ListItem",
                "position": 4,
                "name": "Executive Office",
                "item": "https://webizz.ae/executive-office-space"
            }, {
                "@type": "ListItem",
                "position": 5,
                "name": "Virtual Office",
                "item": "https://webizz.ae/virtual-office"
            }, {
                "@type": "ListItem",
                "position": 6,
                "name": "Co-working Space",
                "item": "https://webizz.ae/coworking-space"
            }, {
                "@type": "ListItem",
                "position": 7,
                "name": "Meeting Room",
                "item": "https://webizz.ae/meeting-room"
            }, {
                "@type": "ListItem",
                "position": 8,
                "name": "Networking and Meetup Events",
                "item": "https://webizz.ae/networking-and-meetup"
            }, {
                "@type": "ListItem",
                "position": 9,
                "name": "Business Startup Services",
                "item": "https://webizz.ae/business-startup-services"
            }, {
                "@type": "ListItem",
                "position": 10,
                "name": "Mainland",
                "item": "https://webizz.ae/mainland"
            }, {
                "@type": "ListItem",
                "position": 11,
                "name": "Freezone",
                "item": "https://webizz.ae/freezone-setup"
            }, {
                "@type": "ListItem",
                "position": 12,
                "name": "Offshore",
                "item": "https://webizz.ae/offshore"
            }, {
                "@type": "ListItem",
                "position": 13,
                "name": "Trademark Services",
                "item": "https://webizz.ae/trademark-services"
            }, {
                "@type": "ListItem",
                "position": 14,
                "name": "Golden Visa",
                "item": "https://webizz.ae/golden-visa"
            }, {
                "@type": "ListItem",
                "position": 15,
                "name": "Silver Visa",
                "item": "https://webizz.ae/silver-visa"
            }, {
                "@type": "ListItem",
                "position": 16,
                "name": "Partner Visa",
                "item": "https://webizz.ae/partner-visa"
            }, {
                "@type": "ListItem",
                "position": 17,
                "name": "Dependent Visa",
                "item": "https://webizz.ae/dependent-visa"
            }, {
                "@type": "ListItem",
                "position": 18,
                "name": "Freelance Visa",
                "item": "https://webizz.ae/freelance-visa"
            }, {
                "@type": "ListItem",
                "position": 19,
                "name": "Employee Visa",
                "item": "https://webizz.ae/employee-visa"
            }, {
                "@type": "ListItem",
                "position": 20,
                "name": "Maid Visa",
                "item": "https://webizz.ae/maid-visa"
            }, {
                "@type": "ListItem",
                "position": 21,
                "name": "Investment and Asset Management",
                "item": "https://webizz.ae/investment-and-asset-management"
            }, {
                "@type": "ListItem",
                "position": 22,
                "name": "VAT Registration",
                "item": "https://webizz.ae/vat-registration"
            }, {
                "@type": "ListItem",
                "position": 23,
                "name": "Corporate Tax Registration",
                "item": "https://webizz.ae/corporate-tax-registration"
            }, {
                "@type": "ListItem",
                "position": 24,
                "name": "Accounting and Bookkeeping",
                "item": "https://webizz.ae/accounting-and-bookkeping"
            }, {
                "@type": "ListItem",
                "position": 25,
                "name": "Audit Reports",
                "item": "https://webizz.ae/audit-reports"
            }, {
                "@type": "ListItem",
                "position": 26,
                "name": "Corporate Bank Account Opening",
                "item": "https://webizz.ae/corporate-bank-account-opening"
            }, {
                "@type": "ListItem",
                "position": 27,
                "name": "AML & ESR Compliance Registration",
                "item": "https://webizz.ae/aml-esr-compliance-registration"
            }, {
                "@type": "ListItem",
                "position": 28,
                "name": "Tax Residency Certificate- TRC",
                "item": "https://webizz.ae/tax-residency-certificate"
            }, {
                "@type": "ListItem",
                "position": 29,
                "name": "Contact Us",
                "item": "https://webizz.ae/contact"
            }]
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "WEBIZZ",
            "url": "https://webizz.ae/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://webizz.ae/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "WEBIZZ",
            "image": "https://webizz.ae/assets/images/logo-500.webp",
            "url": "https://webizz.ae/",
            "telephone": "971 45526801",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Single business tower 35th floor office number 3501-3506, Business Bay Dubai UAE",
                "addressLocality": "Dubai",
                "addressCountry": "AE"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 25.188440419062964,
                "longitude": 55.2583221558244
            },
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Saturday",
                    "Sunday"
                ],
                "opens": "09:00",
                "closes": "18:00"
            }, {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Friday",
                "opens": "09:00",
                "closes": "18:30"
            }],
            "sameAs": [
                "https://www.instagram.com/webizz_group_/",
                "https://www.linkedin.com/in/webizz-business-center-18258936a"
            ]
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Webizz Business Center",
            "url": "https://webizz.ae/",
            "logo": "https://webizz.ae/assets/images/logo-500.webp",
            "sameAs": [
                "https://www.facebook.com/people/Webizz-Business-Center/61580375472829/",
                "https://www.instagram.com/webizz_group_",
                "https://www.linkedin.com/in/webizz-business-center-18258936a",
                "https://webizz.ae/",
                "https://www.tumblr.com/webizzbusinesscenter?source=share"
            ]
        }
    </script>


</head>

<body>

    <div class="header_main" id="sticky-header">
        <header>
            <div class="container">
                <div class="header_inner">
                    <div class="logo">
                        <a href="{{ENV('APP_URL')}}">
                            <img class="img-fluid" src="{{ENV('APP_URL')}}assets/images/logo-500.webp" alt="Logo"><br>
                            <!-- <span>Your dream is our passion</span> -->
                        </a>
                    </div>
                    <div class="header_contact">
                        <div class="social_media">
                            <!-- <a href="">
                        <img src="{{ENV('APP_URL')}}assets/images/facebook.png" alt="facebook" class="img-fluid">
                         <div class="social_media1"></div>
                    </a> -->
                            <a href="https://www.instagram.com/webizz_group_?igsh=MWR1ZmtsZW5jMDcwOQ%3D%3D&utm_source=qr" target="_blank">
                                <img src="{{ENV('APP_URL')}}assets/images/new-instagram.png" alt="instagram" class="img-fluid">
                                <div class="social_media2"></div>
                            </a>
                            <a href="https://www.linkedin.com/in/webizz-business-center-18258936a" target="_blank">
                                <img src="{{ENV('APP_URL')}}assets/images/new-linkedin.png" alt="linkedin" class="img-fluid">
                                <div class="social_media3"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav aria-label="Primary">
            <div class="mobile_btn">
                <i class="fas fa-bars"></i>
            </div>
            <div class="main_menu">
                <ul>
                    <li><a href="{{ENV('APP_URL')}}" class="active">Home</a></li>
                    <li><a href="{{ENV('APP_URL')}}about-us">About Us</a></li>
                    <li class="mega_menu_dropdown has_dropdown">
                        <a href="#">Our Expertise <i class="fas fa-angle-down"></i></a>
                        <div class="mega_menu sub_menu">
                            <div class="mega_menu_item">
                                <h3>Business Center</h3>
                                <a href="{{ENV('APP_URL')}}premium-office">Premium Office</a>
                                <a href="{{ENV('APP_URL')}}executive-office-space">Executive Office</a>
                                <a href="{{ENV('APP_URL')}}virtual-office">Virtual Office</a>
                                <a href="{{ENV('APP_URL')}}coworking-space">Co-working Space</a>
                                <a href="{{ENV('APP_URL')}}meeting-room">Meeting Room</a>
                                <a href="{{ENV('APP_URL')}}networking-and-meetup">Networking And Meetup Events</a>
                            </div>
                            <div class="mega_menu_item">
                                <h3>Business Setup</h3>
                                <a href="{{ENV('APP_URL')}}business-startup-services">Business Startup Services</a>
                                <a href="{{ENV('APP_URL')}}mainland">Mainland</a>
                                <a href="{{ENV('APP_URL')}}freezone-setup">Freezone</a>
                                <a href="{{ENV('APP_URL')}}offshore">Offshore</a>
                                <a href="{{ENV('APP_URL')}}trademark-services">Trademark Services</a>
                            </div>
                            <div class="mega_menu_item">
                                <h3>PRO Services</h3>
                                <a href="{{ENV('APP_URL')}}golden-visa">Golden Visa</a>
                                <a href="{{ENV('APP_URL')}}silver-visa">Silver Visa</a>
                                <a href="{{ENV('APP_URL')}}partner-visa">Partner Visa</a>
                                <a href="{{ENV('APP_URL')}}dependent-visa">Dependent Visa</a>
                                <a href="{{ENV('APP_URL')}}freelance-visa">Freelance Visa</a>
                                <a href="{{ENV('APP_URL')}}employee-visa">Employee Visa</a>
                                <a href="{{ENV('APP_URL')}}maid-visa">Maid Visa</a>
                            </div>
                            <div class="mega_menu_item">
                                <h3>Financial Sevices</h3>
                                <a href="{{ENV('APP_URL')}}investment-and-asset-management">Investment And Asset Management</a>
                                <a href="{{ENV('APP_URL')}}vat-registration">VAT Registration</a>
                                <a href="{{ENV('APP_URL')}}corporate-tax-registration">Corporate Tax Registration</a>
                                <a href="{{ENV('APP_URL')}}accounting-and-bookkeping">Accounting and Bookkeeping</a>
                                <a href="{{ENV('APP_URL')}}audit-reports">Audit Reports</a>
                                <a href="{{ENV('APP_URL')}}corporate-bank-account-opening">Corporate Bank Account Opening</a>
                                <a href="{{ENV('APP_URL')}}aml-esr-compliance-registration">AML and ESR Compliance Registration</a>
                                <a href="{{ENV('APP_URL')}}tax-residency-certificate">Tax Residency Certificate- TRC</a>
                            </div>
                        </div>
                    </li>
                    <li class="contact_us_menu"><a href="{{ENV('APP_URL')}}contact">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </div>
