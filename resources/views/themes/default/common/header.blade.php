<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        CIWEC Hospital – CIWEC Hospital and Travel Medicine Center is one of the most reputable destination travel
        medicine hospitals in the world.
    </title>
    <link rel="icon" type="image/png" href="{{ asset('themes-assets/img/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#11497b',
                        secondary: '#d71920',
                        lightbg: '#eef3f7',
                        darktext: '#163a63',
                        bordercolor: '#d7dde5'
                    },
                    fontFamily: {
                        roboto: ['inter', 'sans-serif']
                    },
                    boxShadow: {
                        soft: '0 2px 15px rgba(0,0,0,.06)'
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="{{ asset('themes-assets/css/style.css') }}">
</head>

<body>

    @include('themes.default.common.topbar')
    <!-- MOBILE OVERLAY -->
    <div id="mobileOverlay"
        class="fixed inset-0 bg-black/50 backdrop-blur-sm opacity-0 invisible transition-all duration-300 z-[998]">
    </div>
    <!-- MOBILE MENU -->
    <div id="mobileMenu"
        class="fixed top-0 right-[-100%] w-[88vw] max-w-[380px] h-screen bg-white z-[999] overflow-y-auto transition-all duration-500 shadow-[-20px_0_40px_rgba(0,0,0,.15)]">
        <!-- TOP -->
        <div class="flex items-center justify-between p-5 border-b">
            <img src="{{ asset('themes-assets/img/logo.png') }}" class="h-14">
            <button id="closeMenu" class="w-10 h-10 bg-primary text-white">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="p-5 border-b border-slate-200">
            <div class="relative">
                <input type="text" placeholder="Search..."
                    class="w-full h-12 pl-11 pr-4
                  border border-slate-300
                  text-[15px]
                  outline-none
                  focus:border-secondary">
                <i
                    class="fa-solid fa-magnifying-glass
                  absolute left-4 top-1/2
                  -translate-y-1/2
                  text-slate-400">
                </i>
            </div>
        </div>
        <div class="p-5">
            <!-- HOME -->
            <a href="./index.php"
                class="flex items-center justify-between py-4 border-b border-slate-200 text-[15px] font-semibold text-slate-800 hover:text-secondary transition">
                <span>Home</span>
                <i class="fa-solid fa-arrow-right text-[11px] text-slate-400"></i>
            </a>
            <!-- ABOUT -->
            <div class="mobile-dropdown border-b border-slate-200">
                <button
                    class="mobile-dropdown-btn w-full flex items-center justify-between py-4 text-[15px] font-semibold text-slate-800">
                    <span>About Us</span>
                    <i class="fa-solid fa-angle-down mobile-arrow text-[12px] text-slate-400"></i>
                </button>
                <div class="mobile-dropdown-menu">
                    <div class="pb-4 pl-4 border-l-2 border-slate-100 space-y-3">
                        <a href="./about.php" class="block text-[14px] text-slate-600 hover:text-secondary transition">
                            About Us
                        </a>
                        <a href="./history.php"
                            class="block text-[14px] text-slate-600 hover:text-secondary transition">
                            CIWEC History
                        </a>
                        <a href="./gallery.php"
                            class="block text-[14px] text-slate-600 hover:text-secondary transition">
                            Gallery
                        </a>
                        <a href="./csr.php" class="block text-[14px] text-slate-600 hover:text-secondary transition">
                            CIWEC CSR
                        </a>
                    </div>
                </div>
            </div>
            <!-- SERVICES -->
            <div class="mobile-dropdown border-b border-slate-200">
                <button
                    class="mobile-dropdown-btn w-full flex items-center justify-between py-4 text-[15px] font-semibold text-slate-800">
                    <span>Services</span>
                    <i class="fa-solid fa-angle-down mobile-arrow text-[12px] text-slate-400"></i>
                </button>
                <div class="mobile-dropdown-menu">
                    <div class="pb-4 pl-4 border-l-2 border-slate-100 space-y-3">
                        <a href="./services.php"
                            class="block text-[14px] text-slate-600 hover:text-secondary transition">
                            Services
                        </a>
                        <a href="./doctors.php"
                            class="block text-[14px] text-slate-600 hover:text-secondary transition">
                            Doctors at CIWEC
                        </a>
                        <a href="./healthscreening.php"
                            class="block text-[14px] text-slate-600 hover:text-secondary transition">
                            Family Medicine & Health Screening
                        </a>
                        <a href="./altitudesickness.php"
                            class="block text-[14px] text-slate-600 hover:text-secondary transition">
                            Altitude Illness & Frostbite
                        </a>
                    </div>
                </div>
            </div>
            <!-- HEALTH INFO -->
            <a href="./healthinformation.php"
                class="flex items-center justify-between py-4 border-b border-slate-200 text-[15px] font-semibold text-slate-800 hover:text-secondary transition">
                <span>Health Information</span>
                <i class="fa-solid fa-arrow-right text-[11px] text-slate-400"></i>
            </a>
            <!-- RESEARCH -->
            <a href="./researchandpublication.php"
                class="flex items-center justify-between py-4 border-b border-slate-200 text-[15px] font-semibold text-slate-800 hover:text-secondary transition">
                <span>Research & Publication</span>
                <i class="fa-solid fa-arrow-right text-[11px] text-slate-400"></i>
            </a>
            <!-- CONTACT -->
            <a href="./contactus.php"
                class="flex items-center justify-between py-4 text-[15px] font-semibold text-slate-800 hover:text-secondary transition">
                <span>Contact</span>
                <i class="fa-solid fa-arrow-right text-[11px] text-slate-400"></i>
            </a>
        </div>
    </div>
    <div id="mobileOverlay"
        class="fixed inset-0 bg-black/50 backdrop-blur-[2px]
         opacity-0 invisible
         transition-all duration-500
         z-[998]">
    </div>
    <!-- HEADER -->
    <header id="header" class="sticky top-0 z-50 bg-white border-b border-slate-200">
        <div class="container-custom">
            <div class="h-[74px] lg:h-[86px] flex items-center justify-between">
                <!-- LEFT -->
                <div class="flex items-center justify-between gap-6">
                    <!-- Logo -->
                    <a href="../ciwec/index.php">
                        <img width="128" height="71" src="./assets/img/logo.png"
                            class="h-[70px] lg:h-[75px] w-auto object-contain transition-all duration-300">
                    </a>
                </div>
                <!-- DESKTOP NAVIGATION -->
                <nav class="hidden xl:flex items-center gap-6">
                    <!-- HOME -->
                    <a href="index.php" class="nav-link text-secondary">
                        Home
                    </a>
                    <!-- ABOUT DROPDOWN -->
                    <div class="relative dropdown-parent">
                        <!-- BUTTON -->
                        <button class="nav-link flex items-center gap-2 dropdown-toggle" data-dropdown="aboutDropdown">
                            About Us
                            <i class="fa-solid fa-angle-down text-[13px] transition-all duration-300 dropdown-icon"></i>
                        </button>
                        <div id="aboutDropdown"
                            class="dropdown-menu absolute top-[120%] left-0 w-[340px]
                        bg-white rounded-xl border border-slate-200
                        shadow-[0_15px_40px_rgba(0,0,0,0.08)]
                        opacity-0 invisible translate-y-3
                        transition-all duration-300 z-50 overflow-hidden">
                            <div class="py-2">
                                <a href="./about.php" class="dropdown-item">
                                    <div>
                                        <h5>About Us</h5>
                                        <span>Overview of CIWEC Hospital</span>
                                    </div>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="./history.php" class="dropdown-item">
                                    <div>
                                        <h5>CIWEC History</h5>
                                        <span>Our journey and achievements</span>
                                    </div>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="./gallery.php" class="dropdown-item">
                                    <div>
                                        <h5>Gallery</h5>
                                        <span>Photos and hospital highlights</span>
                                    </div>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="./csr.php" class="dropdown-item">
                                    <div>
                                        <h5>CIWEC CSR</h5>
                                        <span>Community and social initiatives</span>
                                    </div>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- SERVICES DROPDOWN -->
                    <div class="relative dropdown-parent">
                        <!-- BUTTON -->
                        <button class="nav-link flex items-center gap-2 dropdown-toggle"
                            data-dropdown="servicesDropdown">
                            Services
                            <i
                                class="fa-solid fa-angle-down text-[13px] transition-all duration-300 dropdown-icon"></i>
                        </button>
                        <!-- MENU -->
                        <div id="servicesDropdown"
                            class="dropdown-menu absolute top-[120%] left-0 w-[380px]
                        bg-white rounded-xl border border-slate-200
                        shadow-[0_15px_40px_rgba(0,0,0,0.08)]
                        opacity-0 invisible translate-y-3
                        transition-all duration-300 z-50 overflow-hidden">
                            <!-- Links -->
                            <div class="py-2">
                                <a href="./services.php" class="dropdown-item">
                                    <div>
                                        <h5>Services</h5>
                                        <span>Complete range of healthcare services</span>
                                    </div>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="./doctors.php" class="dropdown-item">
                                    <div>
                                        <h5>Doctors at CIWEC</h5>
                                        <span>Meet our experienced medical specialists</span>
                                    </div>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="./healthscreening.php" class="dropdown-item">
                                    <div>
                                        <h5>Family Medicine & Health Screening</h5>
                                        <span>Preventive care, consultations and wellness checks</span>
                                    </div>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="./altitudesickness.php" class="dropdown-item">
                                    <div>
                                        <h5>Altitude Illness & Frostbite</h5>
                                        <span>Specialized mountain and travel medicine care</span>
                                    </div>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- OTHER LINKS -->
                    <a href="./healthinformation.php" class="nav-link">
                        Health Information
                    </a>
                    <a href="./researchandpublication.php" class="nav-link">
                        Research & Publication
                    </a>
                    <a href="./contactus.php" class="nav-link">
                        Contact
                    </a>
                </nav>
                <div class="flex items-center gap-8">
                    <button
                        class="searchToggle hidden md:flex items-center gap-2 text-slate-600 hover:text-primary transition">
                        <i class="fa-solid fa-magnifying-glass text-lg"></i>
                        <span class="text-sm font-medium">
                            Search
                        </span>
                    </button>
                    <a href="./bookappointment.php"
                        class="hidden lg:inline-flex items-center justify-center h-11 px-5 bg-primary text-white text-sm font-semibold rounded-lg hover:bg-primary-dark transition">
                        Book Appointment
                    </a>
                </div>
                <div class="flex xl:hidden items-center gap-4">
                    <button class="searchToggleMobile text-primary text-xl">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <button id="menuToggle" class="text-primary text-2xl">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- Searchbar -->
    @include('themes.default.common.searchbar')
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            /* =========================================
               MOBILE MENU SYSTEM
            ========================================= */
            const menuToggle = document.getElementById("menuToggle");
            const mobileMenu = document.getElementById("mobileMenu");
            const mobileOverlay = document.getElementById("mobileOverlay");
            const closeMenu = document.getElementById("closeMenu");
            const whatsappWidget = document.querySelector(".whatsapp-widget");

            function openMobileMenu() {
                mobileMenu?.classList.add("active");
                mobileOverlay?.classList.add("active");
                document.body.classList.add("menu-open");
                whatsappWidget?.classList.add("hidden");
            }

            function closeMobileMenu() {
                mobileMenu?.classList.remove("active");
                mobileOverlay?.classList.remove("active");
                document.body.classList.remove("menu-open");
                whatsappWidget?.classList.remove("hidden");

                // Collapse any expanded mobile accordions when the menu closes
                mobileDropdowns.forEach(dropdown => {
                    dropdown.classList.remove("active");
                });
            }

            menuToggle?.addEventListener("click", openMobileMenu);
            closeMenu?.addEventListener("click", closeMobileMenu);
            mobileOverlay?.addEventListener("click", closeMobileMenu);


            /* =========================================
               MOBILE ACCORDIONS (DROPDOWNS)
            ========================================= */
            const mobileDropdowns = document.querySelectorAll(".mobile-dropdown");

            mobileDropdowns.forEach(dropdown => {
                const button = dropdown.querySelector(".mobile-dropdown-btn");
                if (!button) return;

                button.addEventListener("click", (e) => {
                    e.preventDefault();
                    e.stopPropagation();

                    // Close other open accordions
                    mobileDropdowns.forEach(item => {
                        if (item !== dropdown && item.classList.contains("active")) {
                            item.classList.remove("active");
                        }
                    });

                    // Toggle the clicked accordion
                    dropdown.classList.toggle("active");
                });
            });

            const searchToggles = document.querySelectorAll(".searchToggle, .searchToggleMobile");
            const searchWrapper = document.getElementById("searchWrapper");
            const searchOverlay = document.getElementById("searchOverlay");
            const closeSearch = document.getElementById("closeSearch");

            function openSearch() {
                searchWrapper?.classList.add("search-active");
                document.body.classList.add("menu-open");
            }

            function closeSearchModal() {
                searchWrapper?.classList.remove("search-active");
                document.body.classList.remove("menu-open");
            }

            /* Attach event to BOTH desktop + mobile search buttons */
            searchToggles.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    openSearch();
                });
            });

            /* close actions */
            closeSearch?.addEventListener("click", closeSearchModal);
            searchOverlay?.addEventListener("click", closeSearchModal);


            /* =========================================
               DESKTOP DROPDOWNS (HOVER & CLICK)
            ========================================= */
            const dropdownParents = document.querySelectorAll(".dropdown-parent");
            const dropdownMenus = document.querySelectorAll(".dropdown-menu");

            function closeAllDropdowns() {
                dropdownMenus.forEach(menu => menu.classList.remove("active"));
                dropdownParents.forEach(parent => parent.classList.remove("active"));
            }

            dropdownParents.forEach(parent => {
                const toggle = parent.querySelector(".dropdown-toggle");
                if (!toggle) return;

                const dropdownId = toggle.dataset.dropdown;
                const menu = document.getElementById(dropdownId);
                if (!menu) return;

                // Desktop Hover States
                parent.addEventListener("mouseenter", () => {
                    if (window.innerWidth >= 1024) {
                        closeAllDropdowns();
                        menu.classList.add("active");
                        parent.classList.add("active");
                    }
                });

                parent.addEventListener("mouseleave", () => {
                    if (window.innerWidth >= 1024) {
                        menu.classList.remove("active");
                        parent.classList.remove("active");
                    }
                });

                // Fallback click handle for desktop touch screens
                toggle.addEventListener("click", (e) => {
                    if (window.innerWidth >= 1024) {
                        e.preventDefault();
                        const isActive = menu.classList.contains("active");
                        closeAllDropdowns();
                        if (!isActive) {
                            menu.classList.add("active");
                            parent.classList.add("active");
                        }
                    }
                });
            });

            // Click outside desktop dropdowns to close them
            document.addEventListener("click", (e) => {
                if (!e.target.closest(".dropdown-parent")) {
                    closeAllDropdowns();
                }
            });


            /* =========================================
               GLOBAL ESC KEYBOARD SHORTCUT
            ========================================= */
            document.addEventListener("keydown", (e) => {
                if (e.key !== "Escape") return;
                closeAllDropdowns();
                closeMobileMenu();
                closeSearchModal();
            });

        });
    </script>
