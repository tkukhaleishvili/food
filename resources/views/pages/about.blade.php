@extends('layouts.master')


@section('slider')

<section id="hero" class="hero d-flex align-items-center section-bg">
  <div class="container">
    <div class="row justify-content-between gy-5">
      <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
        <h2 data-aos="fade-up">Georgian <br>Home made Food</h2>
        <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <a href="#book-a-table" class="btn-book-a-table hidden">Delivery</a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
        <img src="{{asset('assets/img/cheese-pie4 copy.jpg')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
      </div>
    </div>
  </div>
</section><!-- End Hero Section -->

@endsection
@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>About Us</h2>
            <p>Learn More <span>About Us</span></p>
          </div>
  
          <div class="row gy-4">
            <div class="col-lg-7 position-relative about-img" style="background-image: url('{{asset('assets/img/cheese-pie4 copy.jpg')}}');" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
              <div class="call-us position-absolute">
                <h4>Delivery Now</h4>
                <p>+1 718 336 5556</p>
              </div>
            </div>
            <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                </p>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
@endsection