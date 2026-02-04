 @include('layouts.header')
 <main>
   <section>
     <div class="banner_mainBox">
       <div class="banner_image">
         <img src="{{ENV('APP_URL')}}assets/images/banners/meeting_room.webp" alt="Business Center" class="img-fluid">
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
           <h1 class="heading">Best Meeting Rooms in <span>UAE</span></h1>
           <p>Webizz is a reputable and experienced provider of premium meeting room facilities in UAE, giving workspace solutions that are suited to real-world company needs. With extensive experience in business setup and corporate support services, Webizz understands the need of a professional meeting environment that fosters effective communication, confidentiality, and decision-making.</p>
           <p>Webizz, supported by industry expertise, offers well-designed conference rooms with cutting-edge technology such as high-speed internet, powerful audiovisual equipment, presentation screens, and video conferencing options. Each meeting space is intended to accommodate a variety of business needs, such as board meetings, client presentations, interviews, training sessions, and strategic discussions. Comfortable furniture, soundproofing, and smart layouts make each session enjoyable, private, and productive.</p>
           <p>We operate from professionally managed business centers in the UAE, providing businesses with prime sites and well-maintained amenities. Webizz's flexible booking choices, which include hourly, half-day, and full-day usage, make it an efficient and cost-effective choice for startups, SMEs, consultants, and established enterprises seeking exceptional meeting space without long-term commitments.</p>
           <p>Webizz's service standards place a strong focus on authority and trust. From clean and secure premises to dedicated reception support and seamless administrative assistance, every aspect is handled professionally and openly. Businesses benefit from a stable environment in which meetings run smoothly, clients feel confident, and employees work well together.</p>
         </div>
       </div>
     </div>
   </div>
   <div class="premiumServices_section meeting-room-section">
     <div class="container">
       <div class="premiumServices_text" data-aos="fade-up" data-aos-duration="1000">
         <div class="heading">What You Get with a Business Center <span>Meeting Room</span></div>
         <div class="custom_listing">
           <ul class="p-0">
             <li>Fully furnished meeting room</li>
             <li>Whiteboards, screens, and presentation tools</li>
             <li>High-speed Wi-Fi</li>
             <li>AV equipment</li>
             <li>On-demand refreshments (tea/coffee/water)</li>
             <li>Reception/waiting area for guests</li>
             <li>Hourly, half-day, or full-day bookings</li>
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