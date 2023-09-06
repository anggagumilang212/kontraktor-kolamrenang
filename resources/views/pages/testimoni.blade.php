 @extends('layout.master')
 @section('title, Testimoni')
 @section('content')
     <!-- Testimoni Start -->
     <div class="container-xxl py-5 bg-primary hero-header mb-5">
         <div class="container my-5 py-5 px-lg-5">
             <div class="row g-5 py-5">
                 <div class="col-12 text-center">
                     <h1 class="text-white animated zoomIn">Testimoni</h1>
                     <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                 </div>
             </div>
         </div>
     </div>
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
 @endsection
