@extends('layouts.home.app')

@section('title', 'Ayasya Tech Indonesia')

@push('page-css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page-landing.css') }}" />
@endpush

@section('content')
    <!-- Hero: Start -->
    <section id="home">
        <div id="landingHero" class="section-py landing-hero position-relative">
            <img src="{{ asset('assets/img/front-pages/backgrounds/hero-bg.png') }}"
                class="position-absolute start-50 translate-middle-x object-fit-cover w-100 h-100 top-0" data-speed="1" />
            <div class="container">
                <div class="hero-text-box position-relative text-center">
                    <h1 class="text-primary hero-title display-6 fw-extrabold">
                        Inovasi Digital untuk Mendukung Kemajuan Bisnis dan Pemerintah
                    </h1>
                    <h2 class="hero-sub-title h6 mb-6">
                        Memberikan solusi teknologi berupa pembuatan website, aplikasi, dan multimedia yang terintegrasi.
                    </h2>
                    <div class="landing-hero-btn d-inline-block position-relative">
                        <span class="hero-btn-item position-absolute d-none d-md-flex fw-medium">Layanan Kami
                            <img src="{{ asset('assets/img/front-pages/icons/Join-community-arrow.png') }}"
                                class="scaleX-n1-rtl" /></span>
                        <a href="#landingFeatures" class="btn btn-primary btn-lg">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div id="heroDashboardAnimation" class="hero-animation-img">
                    <a href="../vertical-menu-template/app-ecommerce-dashboard.html" target="_blank">
                        <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                            <img src="{{ asset('assets/img/front-pages/landing-page/hero-dashboard-light.png') }}"
                                class="animation-img" data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                                data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                            <img src="{{ asset('assets/img/front-pages/landing-page/hero-elements-light.png') }}"
                                class="position-absolute hero-elements-img animation-img start-0 top-0"
                                data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                                data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="landing-hero-blank"></div>
    </section>
    <!-- Hero: End -->

    <!-- Layanan Kami: Start -->
    <section id="landingFeatures" class="section-py landing-features">
        <div class="container">
            <div class="mb-4 text-center">
                <span class="badge bg-label-primary">Layanan Kami</span>
            </div>
            <h4 class="mb-1 text-center">
                <span class="position-relative fw-extrabold z-1">Layanan personalisasi
                    <img src="{{ asset('assets/img/front-pages/icons/section-title-icon.png') }}"
                        class="section-title-img position-absolute object-fit-contain z-n1 bottom-0" />
                </span>
                untuk kebutuhan spesifik setiap klien.
            </h4>
            <p class="mb-12 text-center">
                {{--  --}}
            </p>
            <div class="features-icon-wrapper row gx-0 gy-6 g-sm-12">
                <div class="col-lg-6 col-sm-6 features-icon-box text-center">
                    <div class="mb-4 text-center">
                        <img src="{{ asset('assets/img/front-pages/icons/laptop.png') }}" />
                    </div>
                    <h5 class="mb-2">IT Konsultan</h5>
                    <p class="features-icon-description">
                        Kami membantu Anda merancang, mengimplementasikan, dan mengoptimalkan solusi teknologi sesuai
                        kebutuhan bisnis Anda. Dengan pendekatan berbasis analisis dan pengalaman, kami menyediakan strategi
                        yang efektif untuk mendukung transformasi digital dan meningkatkan efisiensi operasional.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-6 features-icon-box text-center">
                    <div class="mb-4 text-center">
                        <img src="{{ asset('assets/img/front-pages/icons/rocket.png') }}" />
                    </div>
                    <h5 class="mb-2">Pengembang Aplikasi</h5>
                    <p class="features-icon-description">
                        Kami menawarkan pengembangan aplikasi berbasis web dan mobile yang dirancang khusus untuk memenuhi
                        kebutuhan Anda. Dari aplikasi bisnis hingga platform e-commerce, solusi kami dirancang untuk
                        meningkatkan produktivitas, skalabilitas, dan pengalaman pengguna.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-6 features-icon-box text-center">
                    <div class="mb-4 text-center">
                        <img src="{{ asset('assets/img/front-pages/icons/paper.png') }}" />
                    </div>
                    <h5 class="mb-2">Penyedia Server</h5>
                    <p class="features-icon-description">
                        Kami bekerja sama dengan penyedia layanan server berkinerja tinggi yang dapat diandalkan untuk
                        mendukung kebutuhan bisnis Anda. Dengan teknologi terbaru, kami memastikan infrastruktur server Anda
                        aman, cepat, dan selalu tersedia.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-6 features-icon-box text-center">
                    <div class="mb-4 text-center">
                        <img src="{{ asset('assets/img/front-pages/icons/keyboard.png') }}" />
                    </div>
                    <h5 class="mb-2">Animasi 3D</h5>
                    <p class="features-icon-description">
                        Kami menciptakan animasi 3D yang mengesankan untuk mendukung kebutuhan branding, promosi, dan
                        visualisasi proyek Anda. Dengan kreativitas dan teknologi terkini, kami menghasilkan karya yang
                        estetis dan berkualitas tinggi.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Layanan Kami: End -->

    <!-- Real customers reviews: Start -->
    <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
        <!-- What people say slider: Start -->
        <div class="container">
            <div class="row align-items-center gx-0 gy-4 g-lg-5 pb-md-5 mb-5">
                <div class="col-md-6 col-lg-5 col-xl-3">
                    <div class="mb-4">
                        <span class="badge bg-label-primary">Ulasan</span>
                    </div>
                    <h4 class="mb-1">
                        <span class="position-relative fw-extrabold z-1">Cerita dari Pelanggan Kami
                            <img src="{{ asset('assets/img/front-pages/icons/section-title-icon.png') }}"
                                class="section-title-img position-absolute object-fit-contain z-n1 bottom-0" />
                        </span>
                    </h4>
                    <p class="mb-md-12 mb-5">
                        Lihat bagaimana layanan kami telah<br class="d-none d-xl-block" />
                        membantu banyak bisnis berkembang.
                    </p>
                    <div class="landing-reviews-btns">
                        <button id="reviews-previous-btn" class="btn btn-label-primary reviews-btn scaleX-n1-rtl me-4"
                            type="button">
                            <i class="ti ti-chevron-left ti-md"></i>
                        </button>
                        <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn scaleX-n1-rtl"
                            type="button">
                            <i class="ti ti-chevron-right ti-md"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-9">
                    <div class="swiper-reviews-carousel overflow-hidden">
                        <div class="swiper" id="swiper-reviews">
                            <div class="swiper-wrapper">
                                {{-- <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <div class="mb-4">
                                                <img src="../../assets/img/front-pages/branding/logo-1.png"
                                                    class="client-logo img-fluid" />
                                            </div>
                                            <p>
                                                “Vuexy is hands down the most useful front end Bootstrap theme I've ever
                                                used. I can't wait
                                                to use it again for my next project.”
                                            </p>
                                            <div class="text-warning mb-4">
                                                <i class="ti ti-star-filled"></i>
                                                <i class="ti ti-star-filled"></i>
                                                <i class="ti ti-star-filled"></i>
                                                <i class="ti ti-star-filled"></i>
                                                <i class="ti ti-star-filled"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-3">
                                                    <img src="../../assets/img/avatars/1.png"
                                                        class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Cecilia Payne</h6>
                                                    <p class="small text-muted mb-0">CEO of Airbnb</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- What people say slider: End -->
        <hr class="mt-md-12 m-0 mt-6" />
        <!-- Logo slider: Start -->
        <div class="container">
            <div class="swiper-logo-carousel py-8">
                <div class="swiper" id="swiper-clients-logos">
                    <div class="swiper-wrapper">
                        {{-- <div class="swiper-slide">
                            <img src="../../assets/img/front-pages/branding/logo_1-light.png" alt="client logo"
                                class="client-logo" data-app-light-img="front-pages/branding/logo_1-light.png"
                                data-app-dark-img="front-pages/branding/logo_1-dark.png" />
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Logo slider: End -->
    </section>
    <!-- Real customers reviews: End -->

    <!-- Our great team: Start -->
    <section id="landingTeam" class="section-py landing-team">
        <div class="container">
            <div class="mb-4 text-center">
                <span class="badge bg-label-primary">Team Hebat Kami</span>
            </div>
            <h4 class="mb-1 text-center">
                <span class="position-relative fw-extrabold z-1">Dedikasi dan Kompetensi
                    <img src="{{ asset('assets/img/front-pages/icons/section-title-icon.png') }}"
                        class="section-title-img position-absolute object-fit-contain z-n1 bottom-0" />
                </span>
                Tanpa Batas.
            </h4>
            <p class="mb-md-11 pb-xl-12 pb-0 text-center">Team kami adalah pilar utama kesuksesan PT Ayasya Tech Indonesia.
            </p>
            <div class="row gy-12 mt-2">
                <div class="col-lg-3 col-sm-6">
                    <div class="card mt-lg-0 mt-3 shadow-none">
                        <div
                            class="bg-label-success border-bottom-0 border-label-success position-relative team-image-box border">
                            <img src="{{ asset('assets/img/front-pages/landing-page/team-member-2.png') }}"
                                class="position-absolute card-img-position start-50 scaleX-n1-rtl bottom-0" />
                        </div>
                        <div class="card-body border-top-0 border-label-success border text-center">
                            <h5 class="card-title mb-0">Rama Adhitya Setiadi</h5>
                            <p class="text-muted mb-0">Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card mt-lg-0 mt-3 shadow-none">
                        <div
                            class="bg-label-info border-bottom-0 border-label-info position-relative team-image-box border">
                            <img src="{{ asset('assets/img/front-pages/landing-page/team-member-2.png') }}"
                                class="position-absolute card-img-position start-50 scaleX-n1-rtl bottom-0" />
                        </div>
                        <div class="card-body border-top-0 border-label-info border text-center">
                            <h5 class="card-title mb-0">Ahmad Farid</h5>
                            <p class="text-muted mb-0">Fullstack Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our great team: End -->

    <!-- FAQ: Start -->
    <section id="landingFAQ" class="section-py bg-body landing-faq">
        <div class="container">
            <div class="mb-4 text-center">
                <span class="badge bg-label-primary">FAQ</span>
            </div>
            <h4 class="mb-1 text-center">
                Frequently asked
                <span class="position-relative fw-extrabold z-1">questions
                    <img src="{{ asset('assets/img/front-pages/icons/section-title-icon.png') }}"
                        class="section-title-img position-absolute object-fit-contain z-n1 bottom-0" />
                </span>
            </h4>
            {{-- <p class="pb-md-4 mb-12 text-center">

            </p> --}}
            <div class="row gy-12 align-items-center pt-md-4 mt-4">
                <div class="col-lg-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/front-pages/landing-page/faq-boy-with-logos.png') }}"
                            class="faq-image" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion" id="accordionExample">
                        <div class="card accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                    Kenapa Harus Kami?
                                </button>
                            </h2>

                            <div id="accordionOne" class="accordion-collapse show collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <span>Kami adalah mitra terbaik untuk solusi digital Anda, karena:</span>
                                    <ul>
                                        <li>
                                            <strong>Pengalaman dan Keahlian</strong> Team kami terdiri dari para profesional
                                            dengan pengalaman luas di berbagai bidang teknologi.
                                        </li>
                                        <li>
                                            <strong>Solusi Kustom dan Tepat Sasaran</strong> Kami memahami bahwa setiap
                                            klien memiliki kebutuhan unik, sehingga kami memberikan solusi yang dira
                                            ncang
                                            khusus untuk Anda.
                                        </li>
                                        <li>
                                            <strong>Kualitas Terjamin</strong> Kami mengutamakan kualitas dalam setiap
                                            layanan yang kami tawarkan, mulai dari desain hingga implementasi.
                                        </li>
                                        <li>
                                            <strong>Dukungan Penuh</strong> Kami selalu siap memberikan dukungan penuh,
                                            mulai dari perencanaan, eksekusi, hingga pemeliharaan proyek Anda.
                                        </li>
                                        <li>
                                            <strong>Harga Kompetitif</strong> Kami menawarkan layanan premium dengan harga
                                            yang kompetitif untuk mendukung keberhasilan proyek Anda.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                    Mengapa Memilih Kami?
                                </button>
                            </h2>
                            <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <span>Kami hadir untuk memastikan transformasi digital Anda berjalan sukses dengan
                                        alasan berikut:</span>
                                    <ul>
                                        <li>
                                            <strong>Inovasi Terdepan</strong> Kami selalu menggunakan teknologi terkini
                                            untuk menciptakan solusi digital yang modern dan efektif.
                                        </li>
                                        <li>
                                            <strong>Kerja Sama yang Fleksibel</strong> Kami bekerja sama dengan klien dalam
                                            suasana yang terbuka dan fleksibel untuk memastikan hasil terbaik.
                                        </li>
                                        <li>
                                            <strong>Efisiensi dan Ketepatan Waktu</strong> Kami memastikan setiap proyek
                                            diselesaikan tepat waktu dengan hasil yang optimal.
                                        </li>
                                        <li>
                                            <strong>Integritas dan Transparansi</strong> Kami menjunjung tinggi kepercayaan
                                            klien dengan proses yang transparan dan etika kerja yang profesional.
                                        </li>
                                        <li>
                                            <strong>Layanan All-in-One</strong> Dari pembuatan website hingga multimedia,
                                            kami menyediakan layanan lengkap untuk memenuhi kebutuhan Anda.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionThree" aria-expanded="false"
                                    aria-controls="accordionThree">
                                    Apa yang Membuat Kami Berbeda?
                                </button>
                            </h2>
                            <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <strong>Pendekatan Berbasis Data</strong> Kami menggunakan analisis mendalam
                                            untuk memahami kebutuhan dan tujuan Anda.
                                        </li>
                                        <li>
                                            <strong>Komitmen Jangka Panjang</strong> Kami bukan hanya vendor, tetapi juga
                                            mitra yang mendukung pertumbuhan bisnis Anda dalam jangka panjang.
                                        </li>
                                        <li>
                                            <strong>Kreativitas Tanpa Batas</strong> Desain dan solusi kami selalu unik dan
                                            sesuai dengan identitas Anda.
                                        </li>
                                        <li>
                                            <strong>Team Ahli Multidisiplin</strong> Dengan keahlian di berbagai bidang,
                                            kami
                                            dapat menangani proyek Anda dari berbagai aspek teknologi.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ: End -->

    <!-- CTA: Start -->
    <section id="landingCTA" class="section-py landing-cta position-relative p-lg-0 pb-0">
        <img src="{{ asset('assets/img/front-pages/backgrounds/cta-bg-light.png') }}"
            class="position-absolute scaleX-n1-rtl h-100 w-100 z-n1 bottom-0 end-0"
            data-app-light-img="front-pages/backgrounds/cta-bg-light.png"
            data-app-dark-img="front-pages/backgrounds/cta-bg-dark.png" />
        <div class="container">
            <div class="row align-items-center gy-12">
                <div class="col-lg-6 text-sm-center text-lg-start text-start">
                    <h3 class="cta-title text-primary fw-bold mb-0">Yuk diskusi dengan kami</h3>
                    <h5 class="text-body mb-8">Jika mempunyai pertanyaan mengenai digital silahkan hubungi kami!</h5>
                    <a href="#landingContact" class="btn btn-lg btn-primary">Konsultasi Sekarang!</a>
                </div>
                <div class="col-lg-6 pt-lg-12 text-lg-end text-center">
                    <img src="{{ asset('assets/img/front-pages/landing-page/cta-dashboard.png') }}"
                        class="img-fluid mt-lg-4" />
                </div>
            </div>
        </div>
    </section>
    <!-- CTA: End -->

    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py bg-body landing-contact">
        <div class="container">
            <div class="mb-4 text-center">
                <span class="badge bg-label-primary">Hubungi Kami</span>
            </div>
            <h4 class="mb-1 text-center">
                <span class="position-relative fw-extrabold z-1">Mari kita
                    <img src="{{ asset('assets/img/front-pages/icons/section-title-icon.png') }}"
                        class="section-title-img position-absolute object-fit-contain z-n1 bottom-0" />
                </span>
                bekerja sama
            </h4>
            <p class="pb-md-4 mb-12 text-center">Memiliki pertanyaan atau ingin konsultasi kepada kami?</p>
            <div class="row g-6">
                <div class="col-lg-5">
                    <div class="contact-img-box position-relative h-100 border p-2">
                        <img src="{{ asset('assets/img/front-pages/icons/contact-border.png') }}"
                            class="contact-border-img position-absolute d-none d-lg-block scaleX-n1-rtl" />
                        <img src="{{ asset('assets/img/front-pages/landing-page/contact-customer-service.png') }}"
                            class="contact-img w-100 scaleX-n1-rtl" />
                        <div class="p-4 pb-2">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-12 col-xl-7">
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-label-primary p-1_5 me-3 rounded"><i
                                                class="ti ti-mail ti-lg"></i></div>
                                        <div>
                                            <p class="mb-0">Email</p>
                                            <h6 class="mb-0">
                                                <a href="mailto:ayasyatech@gmail.com"
                                                    target="_blank
                                                    class="text-heading">ayasyatechindonesia@gmail.com</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-5">
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-label-success p-1_5 me-3 rounded">
                                            <i class="ti ti-phone-call ti-lg"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Whatsapp</p>
                                            <h6 class="mb-0"><a href="https://wa.me/62895347113987"
                                                    class="text-heading">0895-3471-13987</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="mb-2">Kirim Pesan</h4>
                            <p class="mb-6">
                                Jika Anda ingin mendiskusikan apa pun yang berkaitan dengan website, digital marketing, dll
                                atau jika ingin bekerja sama dengan kami.
                            </p>
                            <form>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label" for="contact-form-fullname">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="contact-form-fullname"
                                            placeholder="john" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="contact-form-email">Email</label>
                                        <input type="text" id="contact-form-email" class="form-control"
                                            placeholder="johndoe@gmail.com" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="contact-form-message">Pesan</label>
                                        <textarea id="contact-form-message" class="form-control" rows="7" placeholder="Tulis Pesan Disini"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us: End -->
@endsection

@push('page-js')
    <script src="{{ asset('assets/js/front-page-landing.js') }}"></script>
@endpush
