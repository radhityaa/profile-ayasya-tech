<nav class="layout-navbar py-0 shadow-none">
    <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-md-8 px-3">
            <!-- Menu logo wrapper: Start -->
            <div class="navbar-brand app-brand demo d-flex py-lg-2 me-xl-8 me-4 py-0">
                <!-- Mobile menu toggle: Start-->
                <button class="navbar-toggler me-4 border-0 px-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="ti ti-menu-2 ti-lg text-heading fw-medium align-middle"></i>
                </button>
                <!-- Mobile menu toggle: End-->
                <a href="/" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <img src="{{ asset('assets/img/logo.png') }}" width="40" height="40">
                    </span>
                    <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Ayasya Tech Indonesia</span>
                </a>
            </div>
            <!-- Menu logo wrapper: End -->
            <!-- Menu wrapper: Start -->
            <div class="navbar-collapse landing-nav-menu collapse" id="navbarSupportedContent">
                <button class="navbar-toggler text-heading position-absolute scaleX-n1-rtl end-0 top-0 border-0"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti ti-x ti-lg"></i>
                </button>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="/#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="/portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="/#landingFeatures">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="/#landingTeam">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="/#landingFAQ">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="/#landingContact">Kontak Kami</a>
                    </li>
                </ul>
            </div>
            <div class="landing-menu-overlay d-lg-none"></div>
            <!-- Menu wrapper: End -->
            <!-- Toolbar: Start -->
            <ul class="navbar-nav align-items-center ms-auto flex-row">
                <!-- Style Switcher -->
                <li class="nav-item dropdown-style-switcher dropdown me-xl-1 me-2">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <i class="ti ti-lg"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                <span class="align-middle"><i class="ti ti-sun me-3"></i>Light</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                <span class="align-middle"><i class="ti ti-moon-stars me-3"></i>Dark</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                <span class="align-middle"><i
                                        class="ti ti-device-desktop-analytics me-3"></i>System</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- / Style Switcher-->
            </ul>
            <!-- Toolbar: End -->
        </div>
    </div>
</nav>
