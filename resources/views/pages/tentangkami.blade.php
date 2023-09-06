@extends('layout.master')
@section('title, Tentang Kami')
@section('content')

    <!-- Tentang kami Start -->
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Tentang Kami</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 mt-10">
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
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>{{ $tentangkami->fasilitas_1 }}
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>{{ $tentangkami->fasilitas_2 }}
                            </h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>{{ $tentangkami->fasilitas_3 }}
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>{{ $tentangkami->fasilitas_4 }}
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


@endsection
