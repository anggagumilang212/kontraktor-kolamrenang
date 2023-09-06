<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>David Pool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        {{-- <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">{{ $website->nama }}<span class="fs-5"></span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="text nav-item nav-link" wire:navigate>Home</a>
                        <a href="/tentangkami" class="text nav-item nav-link" wire:navigate>Tentang Kami</a>
                        <a href="/layanankami" class="text nav-item nav-link" wire:navigate>Layanan Kami</a>
                        <a href="/galerikami" class="text nav-item nav-link" wire:navigate>Galeri Kami</a>
                        <a href="/testimoni" class="text nav-item nav-link" wire:navigate>Testimoni</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> --}}

                    </div>

                </div>
            </nav>


        </div>
        <!-- Navbar & Hero End -->





        <!-- konten -->

        @yield('content')



        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Hubungi Kami</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>{{ $website->alamat }}</p>
                        <p><i class="fa fa-phone-alt me-3"></i>{{ $website->no_telp }}</p>
                        <p><i class="fa fa-envelope me-3"></i>{{ $website->email }}</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="{{ $website->sosmed_twitter }}"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{ $website->sosmed_fb }}"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{ $website->sosmed_youtube }}"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{ $website->sosmed_instagram }}"><i
                                    class="fab fa-instagram"></i></a>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Link</h5>
                        <a class="btn btn-link" href="/tentangkami">Tentang Kami</a>
                        <a class="btn btn-link" href="/layanankami">Layanan Kami</a>
                        <a class="btn btn-link" href="/galerikami">Galeri Kami</a>
                        <a class="btn btn-link" href="/testimoni">Testimoni</a>


                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Galeri Kami</h5>
                        <div class="row g-2">
                            @foreach ($galeri as $item)
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('fotogaleri/' . $item->foto) }}"
                                        alt="Image">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Map</h5>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126791.12193771632!2d108.47163564710486!3d-6.7426852044881604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee2649e6e5bbb%3A0x70a07638a7fe12fe!2sCirebon%2C%20Kota%20Cirebon%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1691587059326!5m2!1sid!2sid"
                            width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center  mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">David Pool</a>, All Right Reserved.
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="#">Angga Gumilang</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i
                class="bi bi-arrow-up"></i></a>
    </div>
    @livewireScripts
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/lib/wow/wow.min.js"></script>
    <script src="/assets/lib/easing/easing.min.js"></script>
    <script src="/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>
    <script>
        // Get all the navigation links with class "text"
        const navigationLinks = document.querySelectorAll('.text');

        // Retrieve the active link from local storage on page load
        document.addEventListener('DOMContentLoaded', () => {
            const activeLink = localStorage.getItem('activeLink');
            if (activeLink) {
                navigationLinks.forEach(link => {
                    if (link.getAttribute('href') === activeLink) {
                        link.classList.add('active');
                    }
                });
            }
        });

        // Click event listener for navigation links
        navigationLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                // Remove "text-active" class from all links
                navigationLinks.forEach(link => link.classList.remove('active'));

                // Add "text-active" class to the clicked link
                link.classList.add('active');

                // Save the active link to local storage
                localStorage.setItem('activeLink', link.getAttribute('href'));
            });
        });
    </script>
</body>

</html>
