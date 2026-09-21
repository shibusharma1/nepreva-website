@php
    // Dynamic Page Title
    $seoTitle = trim(View::getSection('meta_title'));
    if (empty($seoTitle)) {
        if (isset($data->post_title) && !empty($data->post_title)) {
            $seoTitle = e($data->post_title) . ' | CIWEC Hospital & Travel Medicine Center';
        } elseif (isset($posttype->post_type) && !empty($posttype->post_type)) {
            $seoTitle = e($posttype->post_type) . ' | CIWEC Hospital & Travel Medicine Center';
        } else {
            $seoTitle = 'CIWEC Hospital – Travel Medicine Center in Kathmandu & Pokhara, Nepal';
        }
    }

    // Dynamic Meta Description
    $seoDescription = trim(View::getSection('meta_description'));
    if (empty($seoDescription)) {
        if (isset($data->meta_description) && !empty($data->meta_description)) {
            $seoDescription = e($data->meta_description);
        } elseif (isset($data->post_excerpt) && !empty($data->post_excerpt)) {
            $seoDescription = e(Str::limit(strip_tags($data->post_excerpt), 160));
        } elseif (isset($setting->meta_description) && !empty($setting->meta_description)) {
            $seoDescription = e($setting->meta_description);
        } else {
            $seoDescription = 'CIWEC Hospital and Travel Medicine Center is a world-renowned destination travel medicine hospital in Kathmandu and Pokhara, Nepal, providing 24/7 emergency care, travel health advice, and specialist medical services.';
        }
    }

    // Dynamic Meta Keywords
    $seoKeywords = trim(View::getSection('meta_keywords'));
    if (empty($seoKeywords)) {
        if (isset($data->meta_keyword) && !empty($data->meta_keyword)) {
            $seoKeywords = e($data->meta_keyword);
        } elseif (isset($setting->meta_key) && !empty($setting->meta_key)) {
            $seoKeywords = e($setting->meta_key);
        } else {
            $seoKeywords = 'CIWEC Hospital, Travel Medicine Center Nepal, Kathmandu Hospital, Pokhara Clinic, Travel Health, Altitude Sickness Treatment, Travel Vaccinations Nepal, Emergency Medical Care Nepal';
        }
    }

    // OpenGraph & Social Image
    $seoImage = asset('themes-assets/img/logo.png');
    if (isset($data->banner) && !empty($data->banner)) {
        $seoImage = asset('uploads/medium/' . $data->banner);
    }

    // Canonical URL
    $canonicalUrl = url()->current();

    // Active menu URL helper function
    $checkActiveUrl = function($targetUrl = null, $slug = null) {
        $current = url()->current();
        if ($targetUrl && $current === $targetUrl) {
            return true;
        }
        if ($slug && $slug !== '/') {
            $cleanSlug = trim($slug, '/');
            if (request()->is('page/' . $cleanSlug) || request()->is($cleanSlug) || request()->is('*' . $cleanSlug . '*')) {
                return true;
            }
        }
        return false;
    };
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>{{ $seoTitle }}</title>
    <meta name="title" content="{{ $seoTitle }}">
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="keywords" content="{{ $seoKeywords }}">
    <meta name="author" content="CIWEC Hospital">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <!-- Open Graph / Facebook / LinkedIn / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CIWEC Hospital & Travel Medicine Center">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDescription }}">
    <meta property="og:image" content="{{ $seoImage }}">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $canonicalUrl }}">
    <meta name="twitter:title" content="{{ $seoTitle }}">
    <meta name="twitter:description" content="{{ $seoDescription }}">
    <meta name="twitter:image" content="{{ $seoImage }}">

    <!-- Structured Data (Schema.org / JSON-LD for Google Rich Results) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Hospital",
      "name": "CIWEC Hospital and Travel Medicine Center",
      "alternateName": "CIWEC Clinic",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('themes-assets/img/logo.png') }}",
      "image": "{{ $seoImage }}",
      "description": "{{ $seoDescription }}",
      "telephone": ["+977-1-4424111", "+977-1-4435232"],
      "email": "info@ciwec-clinic.com",
      "priceRange": "$$",
      "address": [
        {
          "@type": "PostalAddress",
          "streetAddress": "Lainchaur, Opposite British Embassy",
          "addressLocality": "Kathmandu",
          "addressRegion": "Bagmati",
          "postalCode": "44600",
          "addressCountry": "NP"
        },
        {
          "@type": "PostalAddress",
          "streetAddress": "Lakeside, Center Point",
          "addressLocality": "Pokhara",
          "addressRegion": "Gandaki",
          "postalCode": "33700",
          "addressCountry": "NP"
        }
      ],
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
      },
      "medicalSpecialty": [
        "Travel Medicine",
        "Emergency Care",
        "Internal Medicine",
        "High Altitude Medicine",
        "Pediatrics"
      ]
    }
    </script>

    <link rel="icon" type="image/png" href="{{ asset('themes-assets/img/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
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
            <img src="{{ asset('themes-assets/img/logo.png') }}" alt="CIWEC Hospital & Travel Medicine Center" class="h-14">
            <button id="closeMenu" class="w-10 h-10 bg-primary text-white">
                <i class="fa-solid fa-xmark">
                </i>
            </button>
        </div>
        <div class="p-5 border-b border-slate-200">
            <form action="{{ route('search') }}" method="GET" class="relative w-full">
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Search..."
                    autocomplete="off" required minlength="2"
                    class="w-full h-12 pl-11 pr-14
               border border-slate-300
               text-[15px]
               outline-none
               focus:border-secondary">

                <!-- Left Search Icon -->
                <i
                    class="fa-solid fa-magnifying-glass
              absolute left-4 top-1/2
              -translate-y-1/2
              text-slate-400
              pointer-events-none">
                </i>

                <!-- Search Button -->
                <button type="submit" aria-label="Search"
                    class="absolute right-0 top-0
               w-12 h-12
               bg-primary text-white
               flex items-center justify-center
               hover:bg-secondary
               transition">

                    <i class="fa-solid fa-arrow-right text-sm"></i>

                </button>

            </form>
        </div>
        <div class="p-5">
            <!-- HOME -->
            @php $isHomeActive = request()->is('/') || request()->path() === '/'; @endphp
            <a href="{{ url('/') }}"
                class="flex items-center justify-between py-4 border-b border-slate-200 text-[15px] font-semibold {{ $isHomeActive ? 'text-secondary' : 'text-slate-800' }} hover:text-secondary transition">
                <span>
                    Home
                </span>
                <i class="fa-solid fa-arrow-right text-[11px] {{ $isHomeActive ? 'text-secondary' : 'text-slate-400' }}">
                </i>
            </a>
            @foreach ($navigations as $row)
                {{-- ABOUT --}}
                @if ($row->id == 1)
                    @php
                        $isAboutActive = false;
                        foreach ($abouts as $about) {
                            $aboutUrl = url(geturl($about->uri, $about->page_key));
                            if ($checkActiveUrl($aboutUrl, $about->uri) || $checkActiveUrl(null, $about->page_key)) {
                                $isAboutActive = true;
                                break;
                            }
                        }
                        if (!$isAboutActive) {
                            $isAboutActive = $checkActiveUrl(url('page/' . posttype_url($row->uri)), $row->uri);
                        }
                    @endphp
                    <div class="mobile-dropdown border-b border-slate-200">
                        <button
                            class="mobile-dropdown-btn w-full flex items-center justify-between py-4 text-[15px] font-semibold {{ $isAboutActive ? 'text-secondary' : 'text-slate-800' }}">
                            <span>
                                {{ $row->post_type }}
                            </span>
                            <i class="fa-solid fa-angle-down mobile-arrow text-[12px] {{ $isAboutActive ? 'text-secondary' : 'text-slate-400' }}">
                            </i>
                        </button>
                        <div class="mobile-dropdown-menu">
                            <div class="pb-4 pl-4 border-l-2 border-slate-100 space-y-3">
                                @foreach ($abouts as $about)
                                    @php
                                        $aboutUrl = url(geturl($about->uri, $about->page_key));
                                        $isItemActive = $checkActiveUrl($aboutUrl, $about->uri) || $checkActiveUrl(null, $about->page_key);
                                    @endphp
                                    <a href="{{ $aboutUrl }}"
                                        class="block text-[14px] {{ $isItemActive ? 'text-secondary font-bold' : 'text-slate-600' }} hover:text-secondary transition">
                                        {{ $about->post_title }}
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    {{-- SERVICES --}}
                @elseif ($row->id == 2)
                    @php
                        $isServiceActive = false;
                        foreach ($services as $service) {
                            $serviceUrl = url(geturl($service->uri));
                            if ($checkActiveUrl($serviceUrl, $service->uri)) {
                                $isServiceActive = true;
                                break;
                            }
                        }
                        if (!$isServiceActive) {
                            $isServiceActive = $checkActiveUrl(url('page/' . posttype_url($row->uri)), $row->uri);
                        }
                    @endphp
                    <div class="mobile-dropdown border-b border-slate-200">
                        <button
                            class="mobile-dropdown-btn w-full flex items-center justify-between py-4 text-[15px] font-semibold {{ $isServiceActive ? 'text-secondary' : 'text-slate-800' }}">
                            <span>
                                {{ $row->post_type }}
                            </span>
                            <i class="fa-solid fa-angle-down mobile-arrow text-[12px] {{ $isServiceActive ? 'text-secondary' : 'text-slate-400' }}">
                            </i>
                        </button>
                        <div class="mobile-dropdown-menu">
                            <div class="pb-4 pl-4 border-l-2 border-slate-100 space-y-3">
                                @foreach ($services as $service)
                                    @php
                                        $serviceUrl = url(geturl($service->uri));
                                        $isItemActive = $checkActiveUrl($serviceUrl, $service->uri);
                                    @endphp
                                    <a href="{{ $serviceUrl }}"
                                        class="block text-[14px] {{ $isItemActive ? 'text-secondary font-bold' : 'text-slate-600' }} hover:text-secondary transition">
                                        {{ $service->post_title }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- NORMAL MENUS --}}
                @else
                    @php
                        $navUrl = url('page/' . posttype_url($row->uri));
                        $isNavActive = $checkActiveUrl($navUrl, $row->uri);
                    @endphp
                    <a href="{{ $navUrl }}"
                        class="flex items-center justify-between py-4 border-b border-slate-200 text-[15px] font-semibold {{ $isNavActive ? 'text-secondary' : 'text-slate-800' }} hover:text-secondary transition">
                        <span>
                            {{ $row->post_type }}
                        </span>
                        <i class="fa-solid fa-arrow-right text-[11px] {{ $isNavActive ? 'text-secondary' : 'text-slate-400' }}">
                        </i>
                    </a>
                @endif
            @endforeach
        </div>
    </div>

    <!-- HEADER -->
    <header id="header" class="sticky top-0 z-50 bg-white border-b border-slate-200">
        <div class="container-custom">
            <div class="h-[74px] lg:h-[86px] flex items-center justify-between">
                <!-- LEFT -->
                <div class="flex items-center justify-between gap-6">
                    <!-- Logo -->
                    <a href="{{ url('/') }}">
                        <img width="128" height="71" src="{{ asset('themes-assets/img/logo.png') }}"
                            alt="CIWEC Hospital & Travel Medicine Center"
                            class="h-[70px] lg:h-[75px] w-auto object-contain transition-all duration-300">
                    </a>
                </div>
                <!-- DESKTOP NAVIGATION -->
                <nav class="hidden xl:flex items-center gap-6">
                    <!-- Home -->
                    <a href="{{ url('/') }}" class="nav-link {{ $isHomeActive ? 'active text-secondary' : '' }}">
                        Home
                    </a>
                    @foreach ($navigations as $row)
                        {{-- ABOUT --}}
                        @if ($row->id == 1)
                            @php
                                $isAboutActive = false;
                                foreach ($abouts as $about) {
                                    $aboutUrl = url(geturl($about->uri, $about->page_key));
                                    if ($checkActiveUrl($aboutUrl, $about->uri) || $checkActiveUrl(null, $about->page_key)) {
                                        $isAboutActive = true;
                                        break;
                                    }
                                }
                                if (!$isAboutActive) {
                                    $isAboutActive = $checkActiveUrl(url('page/' . posttype_url($row->uri)), $row->uri);
                                }
                            @endphp
                            <div class="relative dropdown-parent">
                                <button class="nav-link flex items-center gap-2 dropdown-toggle {{ $isAboutActive ? 'active text-secondary' : '' }}"
                                    data-dropdown="aboutDropdown">
                                    {{ $row->post_type }}
                                    <i
                                        class="fa-solid fa-angle-down text-[13px] transition-all duration-300 dropdown-icon {{ $isAboutActive ? 'text-secondary' : '' }}">
                                    </i>
                                </button>
                                <div id="aboutDropdown"
                                    class="dropdown-menu absolute top-[120%] left-0 w-[340px]
                                            bg-white rounded-xl border border-slate-200
                                            shadow-[0_15px_40px_rgba(0,0,0,0.08)]
                                            opacity-0 invisible translate-y-3
                                            transition-all duration-300 z-50 overflow-hidden">
                                    <div class="py-2">

                                        @foreach ($abouts as $about)
                                            @php
                                                $aboutUrl = url(geturl($about->uri, $about->page_key));
                                                $isItemActive = $checkActiveUrl($aboutUrl, $about->uri) || $checkActiveUrl(null, $about->page_key);
                                            @endphp
                                            <a href="{{ $aboutUrl }}" class="dropdown-item">
                                                <div>
                                                    <h5 class="{{ $isItemActive ? 'text-secondary font-bold' : '' }}">
                                                        {{ $about->post_title }}
                                                    </h5>
                                                    <span>
                                                        {{ $about->sub_title }}
                                                    </span>
                                                </div>
                                                <i class="fa-solid fa-arrow-right {{ $isItemActive ? 'text-secondary' : '' }}">
                                                </i>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            {{-- SERVICES --}}
                        @elseif($row->id == 2)
                            @php
                                $isServiceActive = false;
                                foreach ($services as $service) {
                                    $serviceUrl = url(geturl($service->uri));
                                    if ($checkActiveUrl($serviceUrl, $service->uri)) {
                                        $isServiceActive = true;
                                        break;
                                    }
                                }
                                if (!$isServiceActive) {
                                    $isServiceActive = $checkActiveUrl(url('page/' . posttype_url($row->uri)), $row->uri);
                                }
                            @endphp
                            <div class="relative dropdown-parent">
                                <button class="nav-link flex items-center gap-2 dropdown-toggle {{ $isServiceActive ? 'active text-secondary' : '' }}"
                                    data-dropdown="servicesDropdown">
                                    {{ $row->post_type }}
                                    <i
                                        class="fa-solid fa-angle-down text-[13px] transition-all duration-300 dropdown-icon {{ $isServiceActive ? 'text-secondary' : '' }}">
                                    </i>
                                </button>
                                <div id="servicesDropdown"
                                    class="dropdown-menu absolute top-[120%] left-0 w-[380px]
                                            bg-white rounded-xl border border-slate-200
                                            shadow-[0_15px_40px_rgba(0,0,0,0.08)]
                                            opacity-0 invisible translate-y-3
                                            transition-all duration-300 z-50 overflow-hidden">
                                    <div class="py-2">
                                        @foreach ($services as $service)
                                            @php
                                                $serviceUrl = url(geturl($service->uri));
                                                $isItemActive = $checkActiveUrl($serviceUrl, $service->uri);
                                            @endphp
                                            <a href="{{ $serviceUrl }}" class="dropdown-item">
                                                <div>
                                                    <h5 class="{{ $isItemActive ? 'text-secondary font-bold' : '' }}">
                                                        {{ $service->post_title }}
                                                    </h5>
                                                    <span>

                                                        {{ $service->sub_title }}
                                                    </span>
                                                </div>
                                                <i class="fa-solid fa-arrow-right {{ $isItemActive ? 'text-secondary' : '' }}">
                                                </i>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            {{-- NORMAL MENUS --}}
                        @else
                            @php
                                $navUrl = url('page/' . posttype_url($row->uri));
                                $isNavActive = $checkActiveUrl($navUrl, $row->uri);
                            @endphp
                            <a href="{{ $navUrl }}"
                                class="nav-link {{ $isNavActive ? 'active text-secondary' : '' }}">
                                {{ $row->post_type }}
                            </a>
                        @endif
                    @endforeach
                </nav>
                <div class="flex items-center gap-8">
                    <button
                        class="searchToggle hidden md:flex items-center gap-2 text-slate-600 hover:text-primary transition">
                        <i class="fa-solid fa-magnifying-glass text-lg">
                        </i>
                        <span class="text-sm font-medium">
                            Search
                        </span>
                    </button>
                    <a href="{{ url('page/bookappointment.html') }}"
                        class="hidden lg:inline-flex items-center justify-center h-11 px-5 bg-primary text-white text-sm font-semibold rounded-lg hover:bg-primary-dark transition">
                        Book Appointment
                    </a>
                </div>
                <div class="flex xl:hidden items-center gap-4">
                    <button class="searchToggleMobile text-primary text-xl">
                        <i class="fa-solid fa-magnifying-glass">
                        </i>
                    </button>
                    <button id="menuToggle" class="text-primary text-2xl">
                        <i class="fa-solid fa-bars">
                        </i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- Searchbar -->
    @include('themes.default.common.searchbar')

