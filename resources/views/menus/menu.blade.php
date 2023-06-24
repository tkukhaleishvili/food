@extends('layouts.master')

@section('content')
    <section id="menu" class="menu">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Menu</h2>
                <p>Check Our <span>Mada Menu</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200"
                role="tablist">
                @foreach ($categories as $category)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link show" data-bs-toggle="tab" data-bs-target="#{{ $category->name }}"
                            aria-selected="false" role="tab" tabindex="-1">
                            <h4>{{ $category->name }}</h4>
                        </a>
                    </li><!-- End tab nav item -->
                @endforeach
            </ul>

            <div class="tab-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                @foreach ($categories as $category)
                    <div class="tab-pane fade" id="{{ $category->name }}" role="tabpanel">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>{{ $category->name }}</h3>
                        </div>

                        <div class="row gy-5">

                            @foreach ($category->menus as $item)
                                <div class="col-lg-4 menu-item">
                                    <a href="assets/img/menu/menu-item-1.png" class="glightbox">
                                        <img src="{{ asset($item->image) }}" class="menu-img img-fluid" alt="">
                                    </a>
                                    <h4>{{ $item->name }}</h4>
                                    <p class="ingredients">
                                        {{ $item->description }}
                                    </p>
                                    <p class="price">
                                        {{ $item->price }}$
                                    </p>
                                </div><!-- Menu Item -->
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
