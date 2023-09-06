@extends('layout.master')
@section('title, Layanan Kami')
@section('content')
    <!-- Layanan Start -->
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Layanan Kami</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Layanan</h6>
                <h2 class="mt-2">Layanan Kami</h2>
            </div>
            <div class="row g-4">
                @foreach ($layanankami as $item)
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">{{ $item->nama }}</h5>
                            <p>{{ $item->deskripsi }}</p>
                            <a class="btn px-3 mt-auto mx-auto" href="https://wa.me/6283819175265" target="_blank">Booking
                                Layanan</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Layanan End -->

@endsection
