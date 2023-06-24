
@extends('layouts.master')

@section('content')
<section id="contact" class="contact">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-header">
        <p>Need Help? <span>Contact Us</span></p>
      </div>

      <div class="mb-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.9111390311!2d-73.96026004913863!3d40.609784170386035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2449448d634fb%3A0x70d3b5bb315e0340!2sTaste%20of%20Georgia!5e0!3m2!1ska!2sge!4v1687609904889!5m2!1ska!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="row gy-4">

        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-map flex-shrink-0"></i>
            <div>
              <h3>Our Address</h3>
              <p>1637 E 18th St Brooklyn, NY 11229 - US</p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item d-flex align-items-center">
            <i class="icon bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>madageorgia23@gmail.com</p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p> +1 718 336 5556 </p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-share flex-shrink-0"></i>
            <div>
              <h3>Opening Hours</h3>
              <div><strong>Mon-Sat:</strong> 10AM - 23PM;
                <strong>Sunday:</strong> Closed
              </div>
            </div>
          </div>
        </div><!-- End Info Item -->

      </div>
    </div>
  </section>
@endsection
