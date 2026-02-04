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