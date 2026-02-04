@include('layouts.header')
<main>
  <section>
    <div class="banner_mainBox">
      <div class="banner_image">
        <img src="{{ENV('APP_URL')}}assets/images/banners/virtual-office.webp" alt="Business Center" class="img-fluid">
      </div>
      <div class="banner_text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_heading">Business Center</div>
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
          <h1 class="heading">Virtual Office Setup in <span>UAE</span></h1>
          <p>Webizz is a reputable supplier of virtual office setup in UAE, providing companies with an economical, professional, and compliant means of establishing a legal presence in the area. Webizz guarantees that every virtual office solution satisfies government and licensing authority standards thanks to the support of seasoned business experts who are well-versed in UAE legislation.</p>
          <p>We provide dependable virtual office services in UAE, including a distinguished company address, mail handling, call answering, and access to meeting facilities, according to its years of practical expertise with business startups, SMEs, and multinational corporations. Our knowledgeable staff ensures accuracy, efficiency, and transparency by guiding clients through each stage of the setup process.</p>
          <p>Webizz is renowned for its dedication to moral behavior and its in-depth knowledge of UAE company regulations. We collaborate closely with regulatory agencies and free zones to offer trustworthy virtual office solutions that adhere to the law.</p>
          <p>Whether you are expanding into the UAE market, launching a startup, or managing a remote business, Webizz's virtual office services in the UAE provide scalability, professionalism, and operational convenience. Choose Webizz to establish your UAE business presence with confidence, transparency, and expert guidance.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="premiumServices_section virtual-office-section">
    <div class="container">
      <div class="premiumServices_text" data-aos="fade-up" data-aos-duration="1000">
        <div class="heading"><span>Features:</span></div>
        <p></p>
        <div class="custom_listing">
          <ul class="p-0">
            <li>Prestigious business address in Dubai</li>
            <li>Email handling</li>
            <li>Office reception and admin services</li>
            <li>Meeting room access</li>
            <li>Inspection services (labor, bank telecom etc)</li>
          </ul>
        </div>
        <p>You get the benefits of a physical presence without renting or owning office space.</p>
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