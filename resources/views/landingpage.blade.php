@extends('layout.master')
@section('title , Home')
@section('content')
    <div class="container-xxl bg-white p-0">



        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">

            <div class="container-xxl py-5 bg-primary hero-header mb-5" id="hero">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">{{ $website->judul_website }}</h1>
                            <p class="text-white pb-3 animated zoomIn">{{ $website->deskripsi }}
                            </p>

                            <a href="https://wa.me/6283819175265" target="_blank"
                                class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight"> <i
                                    class="fab fa-whatsapp"></i> Kontak
                                Kami</a>
                            <img src="/assets/img/kontakkami.png" alt="" id="kontakkami" style="margin-top: 100px">
                            <a href="https://wa.me/6283819175265" target="_blank" id="kontak"
                                class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight"
                                style="z-index: 999; position:fixed; left: 60rem; top: 31.15rem; ">
                                <i class="fab fa-whatsapp"></i>
                                Kontak
                                Kami</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="{{ asset('fotowebsite/' . $website->foto) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- Tentang kami Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Tentang Kami</h6>
                            <h2 class="mt-2">{{ $tentangkami->judul }}</h2>
                        </div>
                        <p class="mb-4">{{ $tentangkami->deskripsi }}</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i
                                        class="fa fa-check text-primary me-2"></i>{{ $tentangkami->fasilitas_1 }}</h6>
                                <h6 class="mb-0"><i
                                        class="fa fa-check text-primary me-2"></i>{{ $tentangkami->fasilitas_2 }}
                                </h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i
                                        class="fa fa-check text-primary me-2"></i>{{ $tentangkami->fasilitas_3 }}</h6>
                                <h6 class="mb-0"><i
                                        class="fa fa-check text-primary me-2"></i>{{ $tentangkami->fasilitas_4 }}
                                </h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Sosial Media Kami</a>
                            <a class="btn btn-outline-primary btn-square me-3" href="{{ $website->sosmed_fb }}"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href="{{ $website->sosmed_twitter }}"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href="{{ $website->sosmed_instagram }}"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href="{{ $website->sosmed_youtube }}"><i
                                    class="fab fa-youtube"></i></a>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s"
                            src="{{ asset('fototentangkami/' . $tentangkami->foto) }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- Tentang Kami End -->




        <!-- Layanan Start -->
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
                                <a class="btn px-3 mt-auto mx-auto" href="https://wa.me/6283819175265"
                                    target="_blank">Booking Layanan</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Layanan End -->

        <!-- Galeri Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Galeri</h6>
                    <h2 class="mt-2">Galeri Kami</h2>
                </div>

                <div class="row g-4 portfolio-container">
                    @foreach ($galeri as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                            <div class="position-relative rounded overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('fotogaleri/' . $item->foto) }}"
                                    alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-light" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i
                                            class="fa fa-plus fa-2x text-primary"></i></a>
                                    <div class="mt-auto">
                                        <small class="text-white"><i class="fas fa-map-marker-alt"></i>
                                            {{ $item->lokasi }}</small>
                                        <a class="h5 d-block text-white mt-1 mb-0"
                                            href="">{{ $item->judul_foto }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Galeri End -->


        <!-- Testimoni Start -->
        <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($testimoni as $item)
                        <div class="testimonial-item bg-transparent border rounded text-white p-4">
                            <i class="fa fa-quote-left fa-2x mb-3"></i>
                            <p>{{ $item->deskripsi }}</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle"
                                    src="{{ asset('fototestimoni/' . $item->foto) }}" style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h6 class="text-white mb-1">{{ $item->nama }}</h6>
                                    <small>{{ $item->profesi }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimoni End -->





        <!-- Back to Top -->
        <a href="#hero" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i
                class="bi bi-arrow-up"></i></a>
    </div>
@endsection
