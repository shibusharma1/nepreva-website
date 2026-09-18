@extends('themes.default.common.master')
@section('content')

    <!-- HERO -->
    <section id="hero-section" class="relative">
        <!-- VIDEO HERO -->
        <div class="relative h-[440px] sm:h-[480px] lg:h-[520px] xl:h-[520px] overflow-hidden">
            <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="auto">
                <source src="{{ asset('themes-assets/vdo/banner.webm') }}" type="video/mp4">
            </video>
            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-primary/90 via-primary/60 to-black/20"></div>
            <!-- Content -->
            <div class="absolute inset-0 flex items-center">
                <div class="container-custom">
                    <div class="max-w-3xl">
                        <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white text-sm font-medium px-4 py-2 mb-6">
                            <span class="w-2 h-2 bg-secondary rounded-full animate-pulse"></span>
                            {{ $banner->caption }}
                        </span>
                        <h1 class="text-white font-black text-[30px] sm:text-[38px] md:text-[46px] xl:text-[56px] leading-[1.08]">
                            {{ $banner->title }}
                        </h1>
                        <p class="mt-6 text-white/90 text-base md:text-lg xl:text-xl leading-relaxed max-w-2xl">
                          {{ $banner->content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </section>
    
    <section class="relative z-20 -mt-10 md:-mt-12 xl:-mt-16">
        <div class="container-custom">
            <div class="border bg-white border-slate-200 shadow-[0_15px_40px_rgba(0,0,0,.08)]">
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <!-- FIND DOCTOR (Hidden on Mobile) -->
                    <a href="{{ url('doctors-at-ciwec.html') }}"
                        class="hidden md:flex group items-center gap-4 p-5 md:p-7 border-r border-slate-200 hover:bg-slate-100 transition-all duration-300">
                        <div
                            class="w-14 h-14 bg-primary/10 text-primary flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:bg-primary group-hover:text-white">
                            <i class="fa-solid fa-user-doctor text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-primary text-lg font-bold">Find a Doctor</h3>
                            <p class="text-slate-500 text-sm mt-1">Search specialists</p>
                        </div>
                        <i
                            class="fa-solid fa-arrow-right text-secondary text-sm transition-all duration-300 group-hover:translate-x-1"></i>
                    </a> <!-- INQUIRY (Hidden on Mobile) --> <a href="{{ url('page/contact.html') }}"
                        class="hidden md:flex group items-center gap-4 p-5 md:p-7 border-r border-slate-200 hover:bg-slate-100 transition-all duration-300">
                        <div
                            class="w-14 h-14 bg-primary/10 text-primary flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:bg-primary group-hover:text-white">
                            <i class="fa-solid fa-comments text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-primary text-lg font-bold">Inquiry</h3>
                            <p class="text-slate-500 text-sm mt-1">Contact our team</p>
                        </div>
                        <i
                            class="fa-solid fa-arrow-right text-secondary text-sm transition-all duration-300 group-hover:translate-x-1"></i>
                    </a> <!-- APPOINTMENT (Visible on All Devices) --> <a href="{{ url('page/bookappointment.html') }}"
                        class="group flex items-center gap-4 p-5 md:p-7 bg-primary text-white hover:bg-secondary transition-all duration-300 w-full">
                        <div class="w-12 h-12 md:w-14 md:h-14 bg-white/10 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-calendar-check text-lg md:text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-base md:text-lg font-bold">Appointment</h3>
                            <!-- Visible on Mobile & Desktop -->
                            <p class="text-white/80 text-sm mt-1">Schedule your visit</p>
                        </div>
                        <i
                            class="fa-solid fa-arrow-right text-white text-sm transition-all duration-300 group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="speciality-section section-padding">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="flex items-end justify-between mb-10">
                <div>
                    <span class="section-label"> {{ $specialitiesheading->sub_title }} </span>
                    <h2 class="section-title mb-0">{{ $specialitiesheading->post_title }}</h2>
                </div>
                <a href="{{ url('services.html') }}"
                    class="hidden lg:inline-flex items-center gap-2 text-primary font-semibold hover:text-secondary transition">
                    View All <i class="fa-solid fa-arrow-right"></i> </a>
            </div>
        </div>
        <!-- SWIPER -->
        <div class="specialitySwiper">
            <div class="swiper-wrapper">
                @foreach ($specialities as $speciality)
                    <div class="swiper-slide">
                            <a href="{{ url('services/' . $speciality->uri . '.html') }}" class="speciality-card group"> 
                                <img
                                src="{{ $speciality->banner ? asset('uploads/medium/' . $speciality->banner) : asset('assets/img/no-image.jpg') }}"
                                alt="{{ $speciality->post_title }}" class="speciality-image">
                            <div class="speciality-overlay"></div>
                            <div class="speciality-content">
                                <span class="speciality-badge"> {{ $speciality->sub_title }} </span>
                                <h3 class="speciality-title">{{ $speciality->post_title }}</h3>
                                <p class="speciality-desc">{{ $speciality->post_excerpt }}</p>
                                <div class="speciality-btn">
                                    Learn More <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="speciality-pagination mt-8"></div>
        </div>
    </section>

    <!-- #currently working -->
  <section class="relative overflow-hidden bg-slate-100 py-8 md:py-12 lg:py-14">
    <div class="absolute inset-x-0 bottom-0 z-0 hidden lg:block">
        {{-- <img src="{{ asset('uploads/medium/' . $whyciwecheading->banner) }}"
            class="mx-auto h-auto w-[120%] object-contain opacity-[0.25] lg:w-full"> --}}
    </div>
    <div class="relative z-10 container-custom">
        <div class="mb-6 max-w-3xl lg:mb-8">
            <span class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                <span class="h-1.5 w-1.5 bg-secondary"></span>
                {{ $whyciwecheading->sub_title }}
            </span>

            <h2 class="text-primary text-2xl md:text-3xl font-black leading-tight mb-6" data-aos="fade-up">
                {{ $whyciwecheading->post_title }}
            </h2>

            <p class="text-slate-600 text-base md:text-lg leading-8 mb-8 max-w-2xl">
                {{ $whyciwecheading->post_excerpt }}
            </p>
        </div>

        <div id="ciwecModelSection">
            <div class="relative mt-6 lg:mt-8">
                <div class="grid items-center gap-5 lg:grid-cols-3 lg:gap-6">

                    <!-- LEFT -->
                    <div class="order-2 space-y-3 lg:order-1 lg:space-y-4">
                        @foreach ($leftCards as $index => $item)
                            <button
                                class="left-card model-item {{ $index == 0 ? 'active' : '' }}"
                                data-image="{{ asset('uploads/medium/' . $item->banner) }}">
                                <i class="{{ $item->associated_title }} flex-shrink-0 text-2xl text-secondary sm:text-3xl"></i>

                                <div>
                                    <h3 class="text-sm font-bold text-primary sm:text-base">
                                        {{ $item->post_title }}
                                    </h3>
                                </div>
                            </button>
                        @endforeach
                    </div>

                    <!-- CENTER IMAGE -->
                    <div class="relative order-1 flex justify-center lg:order-2">
                        <div class="ciwec-ring"></div>

                        <div class="ciwec-image-wrapper">
                            <img
                                id="centerImage"
                                src="{{ $whyciwec->count() ? asset('uploads/medium/' . $whyciwec->first()->banner) : '' }}"
                                class="ciwec-image"
                                alt="{{ $whyciwecheading->post_title }}">
                        </div>
                    </div>

                    <!-- RIGHT -->
                    <div class="order-3 space-y-3 lg:space-y-4">
                        @foreach ($rightCards as $item)
                            <button
                                class="right-card model-item"
                                data-image="{{ asset('uploads/medium/' . $item->banner) }}">
                                <i class="{{ $item->associated_title }} flex-shrink-0 text-2xl text-secondary sm:text-3xl"></i>

                                <div>
                                    <h3 class="text-sm font-bold text-primary sm:text-base">
                                        {{ $item->post_title }}
                                    </h3>
                                </div>
                            </button>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Statistics section -->
    <section class="relative section-padding bg-slate-200 overflow-hidden">
        <div class="container-custom">
            <div class="grid xl:grid-cols-2 gap-12 xl:gap-20 items-center">
                <!-- LEFT -->
                <div>
                    <span class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                        <span class="w-2 h-2 bg-secondary"></span> {{ $trustedworldwide->sub_title }} </span>
                    <h2 class="text-primary text-2xl md:text-3xl font-black leading-tight mb-6">
                        {{ $trustedworldwide->post_title }}
                    </h2>
                    <p class="text-slate-600 text-base md:text-lg leading-8 mb-8 max-w-2xl">
                        {{ $trustedworldwide->post_excerpt }}
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ url('about-us.html') }}"
                            class="border border-primary text-white font-bold px-7 py-4 bg-primary hover:bg-secondary hover:text-white transition-all duration-300">
                            Learn More </a> <a href="{{ url('page/contact.html') }}"
                            class="border border-primary text-primary font-bold px-7 py-4 hover:bg-primary hover:text-white transition-all duration-300">
                            Contact Us </a>
                    </div>
                </div>
                <!-- RIGHT -->
                <div class="relative">
                    <!-- GLOW -->
                    <div class="absolute inset-0 bg-primary/5 blur-3xl"></div>
                    <img src="{{ asset('themes-assets/img/world-map.svg') }}" alt="World Map" class="relative z-10 w-full max-w-[700px] mx-auto">
                    <div class="absolute top-[38%] left-[73%] z-20">
                        <div class="map-pin-marker relative h-8 w-8 -translate-x-1/2 -translate-y-full">
                            <!-- Soft pulse beneath the pin -->
                            <span class="map-pin-pulse" aria-hidden="true"></span>
                            <!-- Pin -->
                            <svg viewBox="0 0 32 40" class="map-pin-icon relative z-10 h-full w-full drop-shadow-md" aria-label="Map location marker" role="img">
                                <path d="M16 39 C12 32 2 22 2 14 A14 14 0 1 1 30 14 C30 22 20 32 16 39Z" fill="#EA4335" stroke="#FFFFFF" stroke-width="1.5" />
                                <circle cx="16" cy="14" r="5" fill="#FFFFFF" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- STATS -->
            <div class="grid grid-cols-2 xl:grid-cols-4 gap-3 md:gap-4 mt-10 xl:mt-12">
                <!-- ITEM -->
                <div class="border border-slate-200 bg-white p-4 md:p-5 text-center hover:border-secondary transition-all duration-300">
                    <h3 class="counter text-primary text-[clamp(1.5rem,2vw,1.875rem)] font-bold leading-tight" data-target="20000">
                        0
                    </h3>
                    <p class="text-slate-600 mt-2 text-[clamp(0.75rem,1vw,0.875rem)] leading-snug">International Patients</p>
                </div>
                <!-- ITEM -->
                <div
                    class="border border-slate-200 bg-white p-4 md:p-5 text-center hover:border-secondary transition-all duration-300">
                    <h3 class="counter text-primary text-[clamp(1.5rem,2vw,1.875rem)] font-bold leading-tight" data-target="130">
                        0
                    </h3>
                    <p class="text-slate-600 mt-2 text-[clamp(0.75rem,1vw,0.875rem)] leading-snug">Countries Served</p>
                </div>
                <!-- ITEM -->
                <div
                    class="border border-slate-200 bg-white p-4 md:p-5 text-center hover:border-secondary transition-all duration-300">
                    <h3 class="counter text-primary text-[clamp(1.5rem,2vw,1.875rem)] font-bold leading-tight" data-target="40">
                        0
                    </h3>
                    <p class="text-slate-600 mt-2 text-[clamp(0.75rem,1vw,0.875rem)] leading-snug">Years Of Excellence</p>
                </div>
                <!-- ITEM -->
                <div
                    class="border border-slate-200 bg-white p-4 md:p-5 text-center hover:border-secondary transition-all duration-300">
                    <h3 class="counter text-primary text-[clamp(1.5rem,2vw,1.875rem)] font-bold leading-tight" data-target="2">
                        0
                    </h3>
                    <p class="text-slate-600 mt-2 text-[clamp(0.75rem,1vw,0.875rem)] leading-snug">Hospital Locations</p>
                </div>
            </div>
        </div>
    </section>

    @include('themes.default.common.historytimelinesection')

<section class="section-padding relative isolate overflow-hidden bg-slate-100">
    <!-- Subtle background image -->
    <div class="pointer-events-none absolute inset-x-0 bottom-0 z-0 hidden lg:block">
        {{-- <img
            src="{{ asset('uploads/medium/' . $doctorssection->banner) }}"
            alt=""
            aria-hidden="true"
            loading="lazy"
            class="mx-auto h-auto w-full object-contain opacity-[0.18]"
        > --}}
    </div>

    <div class="container-custom relative z-10">
        <div class="grid items-stretch gap-5 xl:grid-cols-[1fr_1fr_1.05fr] xl:gap-6">

            <!-- DOCTOR 1 -->
            <article class="group flex min-w-0 flex-col overflow-hidden border border-slate-200 bg-white transition-colors duration-300 hover:border-secondary">
                <div class="relative overflow-hidden">
                    <img
                        src="{{ asset('uploads/medium/' . $ktmdoctors->banner) }}"
                        alt="{{ $ktmdoctors->post_title }}"
                        loading="lazy"
                        class="h-[280px] w-full object-cover transition-transform duration-700 group-hover:scale-[1.03] sm:h-[320px] xl:h-[300px]"
                    >

                    <span class="absolute left-4 top-4 border border-white/20 bg-primary px-3 py-1.5 text-[11px] font-semibold uppercase tracking-[0.12em] text-white">
                        {{ $ktmdoctors->icon }}
                    </span>
                </div>

                <div class="flex flex-1 flex-col p-5 sm:p-6">
                    <h3 class="text-[clamp(1.125rem,1.5vw,1.375rem)] font-bold leading-snug text-primary">
                        {{ $ktmdoctors->post_title }}
                    </h3>

                    <p class="mt-2 text-sm font-medium leading-6 text-secondary">
                        {{ $ktmdoctors->sub_title }}
                    </p>

                    <div class="mt-5">
                        <button
                            type="button"
                            onclick="openHomeDoctor('ktm')"
                            class="inline-flex items-center gap-3 text-sm font-semibold text-primary"
                        >
                            <span>View Profile</span>
                            <span class="flex h-8 w-8 items-center justify-center bg-secondary text-white transition-transform duration-300 group-hover:translate-x-1">
                                <i class="fa-solid fa-arrow-right text-[11px]"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </article>

            <!-- DOCTOR 2 -->
            <article class="group flex min-w-0 flex-col overflow-hidden border border-slate-200 bg-white transition-colors duration-300 hover:border-secondary">
                <div class="relative overflow-hidden">
                    <img
                        src="{{ asset('uploads/medium/' . $pkhdoctors->banner) }}"
                        alt="{{ $pkhdoctors->post_title }}"
                        loading="lazy"
                        class="h-[280px] w-full object-cover transition-transform duration-700 group-hover:scale-[1.03] sm:h-[320px] xl:h-[300px]"
                    >

                    <span class="absolute left-4 top-4 border border-white/20 bg-primary px-3 py-1.5 text-[11px] font-semibold uppercase tracking-[0.12em] text-white">
                        {{ $pkhdoctors->icon }}
                    </span>
                </div>

                <div class="flex flex-1 flex-col p-5 sm:p-6">
                    <h3 class="text-[clamp(1.125rem,1.5vw,1.375rem)] font-bold leading-snug text-primary">
                        {{ $pkhdoctors->post_title }}
                    </h3>

                    <p class="mt-2 text-sm font-medium leading-6 text-secondary">
                        {{ $pkhdoctors->sub_title }}
                    </p>

                    <div class="mt-5">
                        <button
                            type="button"
                            onclick="openHomeDoctor('pkh')"
                            class="inline-flex items-center gap-3 text-sm font-semibold text-primary"
                        >
                            <span>View Profile</span>
                            <span class="flex h-8 w-8 items-center justify-center bg-secondary text-white transition-transform duration-300 group-hover:translate-x-1">
                                <i class="fa-solid fa-arrow-right text-[11px]"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </article>

            <!-- INTRO / VIEW ALL -->
            <div class="flex min-w-0 flex-col justify-center border border-slate-200 bg-white/90 p-6 sm:p-8 xl:p-9">
                <span class="mb-4 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.18em] text-secondary">
                    <span class="h-1.5 w-1.5 flex-shrink-0 bg-secondary"></span>
                    {{ $doctorssection->sub_title }}
                </span>

                <h2 class="text-[clamp(1.5rem,2.2vw,2rem)] font-bold leading-tight text-primary">
                    {{ $doctorssection->post_title }}
                </h2>

                <div class="my-5 h-1 w-10 bg-secondary"></div>

                <p class="text-sm leading-7 text-slate-600 sm:text-base">
                    {{ $doctorssection->post_excerpt }}
                </p>

                <div class="mt-7">
                    <a
                        href="{{ url('doctors-at-ciwec.html') }}"
                        class="btn-primary inline-flex items-center gap-3"
                    >
                        View All Doctors
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
    @if ($patientStoriesHeading && $patientStories->isNotEmpty())
        @php
            $featuredStory = $patientStories->first();
            $otherStories = $patientStories->skip(1)->take(4);
        @endphp
        <section class="section-padding relative overflow-hidden">
            <div class="container-custom">
                <!-- HEADING -->
                <div class="text-center mb-8 md:mb-10">
                    @if ($patientStoriesHeading->sub_title)
                        <span
                            class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                            <span class="w-2 h-2 bg-secondary"></span> {{ $patientStoriesHeading->sub_title }} </span>
                        @endif @if ($patientStoriesHeading->post_title)
                            <h2 class="text-primary text-2xl md:text-3xl font-black leading-tight mb-6">
                                {{ $patientStoriesHeading->post_title }}
                            </h2>
                            @endif @if ($patientStoriesHeading->post_excerpt)
                                <p class="max-w-3xl mx-auto text-gray-600 text-sm md:text-base leading-relaxed">
                                    {{ $patientStoriesHeading->post_excerpt }}
                                </p>
                            @endif
                </div>
                <!-- ===================================================== DESKTOP STORIES GRID ===================================================== -->
                <div class="hidden xl:grid grid-cols-12 gap-6">
                    <!-- FEATURED STORY -->
                    @if ($featuredStory)
                        @php
                            $featuredVideoId = youtubeVideoId($featuredStory->post_excerpt);
                            $featuredThumbnail = youtubeThumbnail($featuredStory->post_excerpt);
                            $featuredEmbed = youtubeEmbed($featuredStory->post_excerpt);
                        @endphp
                        <div class="col-span-6">
                            <div class="story-card h-[620px]"
                                @if ($featuredEmbed) data-video="{{ $featuredEmbed }}" @endif>
                                @if ($featuredThumbnail)
                                    <img src="{{ $featuredThumbnail }}" alt="{{ $featuredStory->post_title }}"
                                        class="story-image" loading="lazy"
                                        onerror="this.src='https://i.ytimg.com/vi/{{ $featuredVideoId }}/hqdefault.jpg'">
                                @endif
                                <div class="story-overlay"></div>
                                @if ($featuredEmbed)
                                    <button type="button" class="story-play-btn"
                                        aria-label="Play {{ $featuredStory->post_title }} video">
                                        <i class="fa-solid fa-play"></i> </button>
                                @endif
                                <div class="story-content">
                                    @if ($featuredStory->associated_title)
                                        <span
                                            class="inline-block px-3 py-1 bg-secondary text-white text-xs font-semibold uppercase tracking-[1px] mb-4">
                                            {{ $featuredStory->associated_title }} </span>
                                    @endif
                                    <h3 class="story-title !text-[34px]">{{ $featuredStory->post_title }}</h3>
                                    @if ($featuredStory->sub_title)
                                        <p class="story-subtitle">{{ $featuredStory->sub_title }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif <!-- RIGHT STORIES -->
                    <div class="col-span-6">
                        <div class="grid grid-cols-2 gap-6 h-full">
                            @foreach ($otherStories as $story)
                                @php
                                    $videoId = youtubeVideoId($story->post_excerpt);
                                    $thumbnail = youtubeThumbnail($story->post_excerpt);
                                    $embed = youtubeEmbed($story->post_excerpt);
                                @endphp
                                <div class="story-card h-[300px]"
                                    @if ($embed) data-video="{{ $embed }}" @endif>
                                    @if ($thumbnail)
                                        <img src="{{ $thumbnail }}" alt="{{ $story->post_title }}"
                                            class="story-image" loading="lazy"
                                            onerror="this.src='https://i.ytimg.com/vi/{{ $videoId }}/hqdefault.jpg'">
                                    @endif
                                    <div class="story-overlay"></div>
                                    @if ($embed)
                                        <button type="button" class="story-play-btn"
                                            aria-label="Play {{ $story->post_title }} video"> <i
                                                class="fa-solid fa-play"></i> </button>
                                    @endif
                                    <div class="story-content">
                                        <h3 class="story-title">{{ $story->post_title }}</h3>
                                        @if ($story->sub_title)
                                            <p class="story-subtitle">{{ $story->sub_title }}</p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- ===================================================== MOBILE / TABLET SLIDER ===================================================== -->
                <div class="xl:hidden">
                    <div class="swiper patientStoriesSwiper">
                        <div class="swiper-wrapper">
                            @foreach ($patientStories as $story)
                                @php
                                    $videoId = youtubeVideoId($story->post_excerpt);
                                    $thumbnail = youtubeThumbnail($story->post_excerpt);
                                    $embed = youtubeEmbed($story->post_excerpt);
                                @endphp
                                <div class="swiper-slide">
                                    <div class="story-card h-[420px]"
                                        @if ($embed) data-video="{{ $embed }}" @endif>
                                        @if ($thumbnail)
                                            <img src="{{ $thumbnail }}" alt="{{ $story->post_title }}"
                                                class="story-image" loading="lazy"
                                                onerror="this.src='https://i.ytimg.com/vi/{{ $videoId }}/hqdefault.jpg'">
                                        @endif
                                        <div class="story-overlay"></div>
                                        @if ($embed)
                                            <button type="button" class="story-play-btn"
                                                aria-label="Play {{ $story->post_title }} video"> <i
                                                    class="fa-solid fa-play"></i> </button>
                                        @endif
                                        <div class="story-content">
                                            <h3 class="story-title">{{ $story->post_title }}</h3>
                                            @if ($story->sub_title)
                                                <p class="story-subtitle">{{ $story->sub_title }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="patient-story-pagination mt-8"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===================================================== YOUTUBE VIDEO MODAL ===================================================== -->
        <div id="videoModal" class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/90 p-4">
            <div class="relative w-full max-w-6xl">
                <!-- CLOSE -->
                <button id="closeVideoModal" type="button" aria-label="Close video"
                    class="absolute -top-14 right-0 w-11 h-11 bg-white text-primary hover:bg-secondary hover:text-white transition-all duration-300">
                    <i class="fa-solid fa-xmark text-lg"></i> </button> <!-- YOUTUBE VIDEO -->
                <div class="w-full h-[75vh] bg-black">
                    <iframe id="storyVideo" class="w-full h-full" src="" title="Patient Story Video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    @endif

    <!-- TESTIMONIAL -->
    {{-- <section class="section-padding bg-slate-200 overflow-hidden">
        <div class="container-custom">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-12">
                <div class="max-w-3xl">
                    <span
                        class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                        <span class="w-2 h-2 bg-secondary"></span>
                        {{ $testimonialheading->sub_title ?? 'PATIENT FEEDBACK' }} </span>
                    <h2 class="text-primary text-2xl md:text-3xl font-black leading-tight mb-4">
                        {{ $testimonialheading->post_title }}
                    </h2>
                    <p class="text-slate-600 text-base md:text-lg leading-8">
                        {{ $testimonialheading->post_excerpt }}
                    </p>
                </div>
                <!-- GOOGLE RATING -->
                <div class="border border-slate-200 bg-white px-6 py-5">
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-10 h-10">
                            <path fill="#FFC107"
                                d="M43.611 20.083H42V20H24v8h11.303C33.655 32.657 29.203 36 24 36c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.277 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z" />
                            <path fill="#FF3D00"
                                d="M6.306 14.691l6.571 4.819C14.655 16.108 18.961 13 24 13c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.277 4 24 4 16.318 4 9.656 8.337 6.306 14.691z" />
                            <path fill="#4CAF50"
                                d="M24 44c5.176 0 9.86-1.977 13.409-5.192l-6.19-5.238C29.143 35.091 26.715 36 24 36c-5.181 0-9.625-3.327-11.287-7.946l-6.522 5.025C9.507 39.556 16.227 44 24 44z" />
                            <path fill="#1976D2"
                                d="M43.611 20.083H42V20H24v8h11.303c-.792 2.237-2.231 4.166-4.084 5.57l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z" />
                        </svg>
                        <div>
                            <div class="flex text-[#f59e0b] text-lg mb-1">★★★★★</div>
                            <div class="text-primary font-black text-xl">
                                {{ $testimonialheading->associated_title ?? '4.9/5 Rating' }}
                            </div>
                            <div class="text-slate-500 text-sm">Based on Google Reviews</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- REVIEWS -->
            <div class="swiper reviewSwiper">
                <div class="swiper-wrapper">
                    @forelse($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <article
                                class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                                <!-- USER -->
                                <div class="flex items-center gap-4 mb-6">
                                    <img src="{{ asset('uploads/medium/' . $testimonial->banner) }}"
                                        class="w-16 h-16 object-cover" alt="{{ $testimonial->post_title }}">
                                    <div>
                                        <h3 class="text-primary text-lg font-bold">
                                            {{ $testimonial->post_title }}
                                        </h3>
                                        <div class="text-[#f59e0b] text-sm">
                                            @php $rating = (int) $testimonial->associated_title; @endphp @for ($i = 0; $i < $rating; $i++)
                                                ★
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <!-- REVIEW TEXT -->
                                <p class="text-slate-600 leading-8 mb-6">
                                    {{ $testimonial->post_excerpt }}
                                </p>
                                <a href="{{ url($testimonial->uri) }}"
                                    class="inline-flex items-center gap-2 text-primary font-semibold text-sm"> Read Full
                                    Story <i class="fa-solid fa-arrow-right text-secondary"> </i>
                                </a>
                            </article>
                        </div>
                    @empty
                        <div class="swiper-slide">
                            <article class="bg-white p-10 text-center border border-slate-200">
                                <h3 class="text-primary text-xl font-bold">
                                    No Testimonials Available
                                </h3>
                            </article>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section> --}}
{{-- =========================================================
     TESTIMONIAL / PATIENT FEEDBACK SECTION
     ========================================================= --}}

<section class="section-padding bg-slate-200 overflow-hidden">

    <div class="container-custom">

        {{-- =====================================================
             HEADER
             ===================================================== --}}
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-10">

            <div class="max-w-3xl">

                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">

                    <span class="w-2 h-2 bg-secondary"></span>

                    {{ $testimonialheading->sub_title ?? 'PATIENT FEEDBACK' }}

                </span>


                <h2 class="text-primary text-2xl md:text-3xl font-black leading-tight mb-4">

                    {{ $testimonialheading->post_title }}

                </h2>


                <p class="text-slate-600 text-base md:text-lg leading-8">

                    {{ $testimonialheading->post_excerpt }}

                </p>

            </div>


            {{-- =================================================
                 GOOGLE RATING
                 ================================================= --}}
            <div class="border border-slate-200 bg-white px-6 py-5 shrink-0">

                <div class="flex items-center gap-4">

                    {{-- GOOGLE ICON --}}
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 48 48"
                        class="w-10 h-10 shrink-0">

                        <path fill="#FFC107"
                            d="M43.611 20.083H42V20H24v8h11.303C33.655 32.657 29.203 36 24 36c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.277 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z" />

                        <path fill="#FF3D00"
                            d="M6.306 14.691l6.571 4.819C14.655 16.108 18.961 13 24 13c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.277 4 24 4 16.318 4 9.656 8.337 6.306 14.691z" />

                        <path fill="#4CAF50"
                            d="M24 44c5.176 0 9.86-1.977 13.409-5.192l-6.19-5.238C29.143 35.091 26.715 36 24 36c-5.181 0-9.625-3.327-11.287-7.946l-6.522 5.025C9.507 39.556 16.227 44 24 44z" />

                        <path fill="#1976D2"
                            d="M43.611 20.083H42V20H24v8h11.303c-.792 2.237-2.231 4.166-4.084 5.57l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z" />

                    </svg>


                    <div>

                        <div class="flex text-[#f59e0b] text-lg mb-1">
                            ★★★★★
                        </div>

                        <div class="text-primary font-black text-xl">
                            {{ $testimonialheading->associated_title ?? '4.9/5 Rating' }}
                        </div>

                        <div class="text-slate-500 text-sm">
                            Based on Google Reviews
                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
             REVIEWS
             ===================================================== --}}
        <div class="swiper reviewSwiper">

            <div class="swiper-wrapper">

             @forelse($testimonials as $testimonial)
    <div class="swiper-slide h-auto">
        <a href="#testimonial-lightbox-{{ $testimonial->id }}"
            data-glightbox="type: inline"
            class="testimonial-lightbox group block h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">

            <!-- USER -->
            <div class="flex items-center gap-4 mb-6">
                <div class="relative shrink-0">
                    <img src="{{ $testimonial->banner
                        ? asset('uploads/medium/' . $testimonial->banner)
                        : asset('assets/img/no-image.jpg') }}"
                        class="w-16 h-16 object-cover rounded-full"
                        alt="{{ $testimonial->post_title }}">

                    <span
                        class="absolute -bottom-1 -right-1 w-6 h-6 bg-secondary text-white rounded-full flex items-center justify-center border-2 border-white">
                        <i class="fa-solid fa-quote-left text-[9px]"></i>
                    </span>
                </div>

                <div class="min-w-0">
                    <h3 class="text-primary text-lg font-bold truncate">
                        {{ $testimonial->post_title }}
                    </h3>

                    @if ($testimonial->sub_title)
                        <p class="text-slate-500 text-xs mt-0.5">
                            {{ $testimonial->sub_title }}
                        </p>
                    @endif

                    <div class="text-[#f59e0b] text-sm mt-1">
                        @php
                            $rating = min(5, max(0, (int) $testimonial->associated_title));
                        @endphp

                        @for ($i = 0; $i < $rating; $i++)
                            ★
                        @endfor
                    </div>
                </div>
            </div>

            <!-- REVIEW TEXT -->
            <div class="relative mb-6">
                <i class="fa-solid fa-quote-left absolute -top-2 -left-1 text-primary/10 text-3xl"></i>

                <p class="relative pl-5 text-slate-600 leading-8">
                    {{ strip_tags($testimonial->post_excerpt) }}
                </p>
            </div>

            <!-- READ FULL STORY -->
            <div class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                Read Full Story
                <i class="fa-solid fa-arrow-right text-secondary transition-transform duration-300 group-hover:translate-x-1"></i>
            </div>

        </a>
    </div>
@empty

                    {{-- =================================================
                         EMPTY STATE
                         ================================================= --}}
                    <div class="swiper-slide">

                        <div class="bg-white border border-slate-200 p-10 text-center">

                            <h3 class="text-primary text-xl font-bold">

                                No Testimonials Available

                            </h3>

                        </div>

                    </div>

                @endforelse

            </div>

        </div>


        {{-- =====================================================
             OPTIONAL SWIPER PAGINATION
             ===================================================== --}}
        <div class="review-pagination mt-7 text-center"></div>

    </div>

</section>



{{-- =========================================================
     TESTIMONIAL GLIGHTBOX CONTENT
     ========================================================= --}}

@foreach ($testimonials as $testimonial)

    <div
        id="testimonial-lightbox-{{ $testimonial->id }}"
        class="hidden">

        <div class="testimonial-lightbox-content">

            {{-- =================================================
                 IMAGE
                 ================================================= --}}
            <div class="testimonial-lightbox-image">

                <img
                    src="{{ $testimonial->banner
                        ? asset('uploads/medium/' . $testimonial->banner)
                        : asset('assets/img/no-image.jpg') }}"
                    alt="{{ $testimonial->post_title }}">

            </div>


            {{-- =================================================
                 CONTENT
                 ================================================= --}}
            <div class="testimonial-lightbox-body">

                {{-- TOP LABEL --}}
                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[2px] mb-3">

                    <span class="w-1.5 h-1.5 bg-secondary"></span>

                    Patient Experience

                </span>


                {{-- NAME --}}
                <h2
                    class="text-primary text-2xl md:text-3xl font-black leading-tight break-words">

                    {{ $testimonial->post_title }}

                </h2>


                {{-- SUBTITLE --}}
                @if ($testimonial->sub_title)

                    <p class="mt-1 text-slate-500 text-sm break-words">

                        {{ $testimonial->sub_title }}

                    </p>

                @endif


                {{-- RATING --}}
                <div class="flex flex-wrap items-center gap-3 mt-4">

                    <div class="flex text-[#f59e0b] text-lg">

                        @php
                            $rating = min(
                                5,
                                max(
                                    0,
                                    (int) $testimonial->associated_title
                                )
                            );
                        @endphp


                        @for ($i = 0; $i < $rating; $i++)

                            ★

                        @endfor

                    </div>


                    <span class="text-slate-400 text-sm">

                        Verified Patient Experience

                    </span>

                </div>


                {{-- DIVIDER --}}
                <div class="w-12 h-[3px] bg-secondary my-6"></div>


                {{-- FULL CONTENT --}}
                <div class="testimonial-full-content">

                    @if (
                        trim(
                            strip_tags(
                                $testimonial->post_content ?? ''
                            )
                        ) !== ''
                    )

                        {!! $testimonial->post_content !!}

                    @else

                        <p>

                            {{ $testimonial->post_excerpt }}

                        </p>

                    @endif

                </div>


                {{-- DATE --}}
                @if ($testimonial->post_date)

                    <div
                        class="mt-7 pt-5 border-t border-slate-200 flex items-center gap-2 text-slate-400 text-xs">

                        <i class="fa-regular fa-calendar"></i>

                        <span>
                            {{ \Carbon\Carbon::parse($testimonial->post_date)->format('d F, Y') }}
                        </span>

                    </div>

                @endif

            </div>

        </div>

    </div>

@endforeach


    @if ($awardheading && $awards->isNotEmpty())
        <section class="relative py-12 md:py-16 bg-slate-100 overflow-hidden">
            <div class="absolute inset-x-0 bottom-0 z-0 hidden lg:block">
                {{-- <img src="{{ asset('uploads/medium/' . $awardheading->banner) }}" alt="{{ $awardheading->post_title }}"
                    loading="lazy"
                    class="mx-auto w-[140%] sm:w-[125%] md:w-[110%] lg:w-full h-auto object-fill opacity-[0.4]"> --}}
            </div>
            <div class="relative z-10 container-custom">
                <!-- HEADER -->
                <div class="max-w-3xl mb-12">
                    @if ($awardheading->sub_title)
                        <span
                            class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                            <span class="w-2 h-2 bg-secondary"></span> {{ $awardheading->sub_title }} </span>
                        @endif @if ($awardheading->post_title)
                            <h2 class="text-primary text-2xl md:text-3xl font-black leading-tight mb-4">
                                {{ $awardheading->post_title }}
                            </h2>
                            @endif @if ($awardheading->post_excerpt)
                                <p class="text-slate-600 text-base md:text-lg leading-8">
                                    {{ $awardheading->post_excerpt }}
                                </p>
                            @endif
                </div>
                <!-- SWIPER -->
                <div class="swiper awardSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($awards as $award)
                            <div class="swiper-slide h-auto">
                                <div
                                    class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                                    <div
                                        class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                                    </div>
                                    @if ($award->banner)
                                        <img src="{{ asset('uploads/medium/' . $award->banner) }}"
                                            alt="{{ $award->post_title }}"
                                            class="relative z-10 h-24 w-auto object-contain" loading="lazy">
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($publications)
        <section class="section-padding overflow-hidden relative">
            <div class="container-custom z-10 relative">
                <!-- HEADER -->
                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
                    <div class="max-w-3xl">
                        @if ($publications->sub_title)
                            <span
                                class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                                <span class="w-2 h-2 bg-secondary"></span> {{ $publications->sub_title }} </span>
                            @endif @if ($publications->post_title)
                                <h2 class="text-primary text-2xl md:text-3xl font-black leading-tight mb-4">
                                    {{ $publications->post_title }}
                                </h2>
                                @endif @if ($publications->post_excerpt)
                                    <p class="text-slate-600 text-base md:text-lg leading-8">
                                        {{ $publications->post_excerpt }}
                                    </p>
                                @endif
                    </div>
                </div>
                <!-- FILTER BAR -->
                <div class="border border-slate-200 bg-slate-100 p-5 md:p-6 mb-6">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">
                        <!-- LEFT -->
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-semibold text-primary"> Show </span> <select id="perPage"
                                class="h-11 px-4 border border-slate-300 bg-white text-sm text-slate-700 focus:border-secondary outline-none">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                            </select> <span class="text-sm text-slate-600"> entries </span>
                        </div>
                        <!-- SEARCH -->
                        <div class="relative w-full lg:w-[320px]">
                            <input type="text" id="searchInput" placeholder="Search publications..."
                                autocomplete="off"
                                class="w-full h-11 pl-11 pr-4 border border-slate-300 bg-white text-sm outline-none focus:border-secondary">
                            <i
                                class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                            </i>
                        </div>
                    </div>
                </div>
                <!-- LOADER -->
                <div id="publicationLoader" class="hidden py-12">
                    <div
                        class="w-12 h-12 border-[3px] border-slate-200 border-t-secondary rounded-full animate-spin mx-auto">
                    </div>
                </div>
                <!-- CONTENT -->
                <div id="publicationContent">
                    <!-- TABLE -->
                    <div class="overflow-x-auto border border-slate-200 bg-white">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th class="px-5 py-4 text-left text-sm font-bold uppercase tracking-wide">
                                        #
                                    </th>
                                    <th class="px-5 py-4 text-left text-sm font-bold uppercase tracking-wide">
                                        Publication Title
                                    </th>
                                    <th class="px-5 py-4 text-center text-sm font-bold uppercase tracking-wide">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="publicationTable"><!-- JS will insert documents here --></tbody>
                        </table>
                    </div>
                    <!-- PAGINATION -->
                    <div id="publicationPagination" class="flex flex-wrap justify-center gap-2 mt-8">
                    </div>
                </div>
            </div>
        </section>
    @endif

    <script>
        const items = document.querySelectorAll('.model-item');
        const image = document.getElementById('centerImage');

        items.forEach(item => {

            item.addEventListener('click', () => {

                items.forEach(i => i.classList.remove('active'));

                item.classList.add('active');


                image.style.opacity = '0';
                image.style.transform = 'scale(.95)';

                setTimeout(() => {
                    image.src = item.dataset.image;
                    image.style.opacity = '1';
                    image.style.transform = 'scale(1)';
                }, 250);

            });

        });

        const videoModal = document.getElementById("videoModal");
        const storyVideo = document.getElementById("storyVideo");
        const closeVideoModal = document.getElementById("closeVideoModal");
        if (videoModal && storyVideo) {
            document.querySelectorAll(".story-card[data-video]").forEach((card) => {
                const playButton = card.querySelector(".story-play-btn");
                if (!playButton) return;
                playButton.addEventListener("click", (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    const video = card.dataset.video;
                    if (!video) return;
                    const separator = video.includes("?") ? "&" : "?";
                    storyVideo.src = `${video}${separator}autoplay=1&rel=0&modestbranding=1`;
                    videoModal.classList.remove("hidden");
                    videoModal.classList.add("flex");
                    document.body.style.overflow = "hidden";
                });
            });
            const closeModal = () => {
                videoModal.classList.add("hidden");
                videoModal.classList.remove("flex");
                storyVideo.src = "";
                document.body.style.overflow = "";
            };
            closeVideoModal?.addEventListener("click", closeModal);
            videoModal.addEventListener("click", (e) => {
                if (e.target === videoModal) {
                    closeModal();
                }
            });
            document.addEventListener("keydown", (e) => {
                if (
                    e.key === "Escape" && !videoModal.classList.contains("hidden")
                ) {
                    closeModal();
                }
            });
        }
    </script>

    <script>
        const publications = {!! json_encode(
            $publications->documents->map(function ($doc) {
                    return [
                        'id' => $doc->id,
                        'title' => $doc->title,
                        'file' => asset('uploads/doc/' . $doc->document),
                    ];
                })->values(),
        ) !!};
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const publicationTable = document.getElementById("publicationTable");
            if (!publicationTable) {
                return;
            }
            const pagination = document.getElementById("publicationPagination");
            const loader = document.getElementById("publicationLoader");
            const content = document.getElementById("publicationContent");
            const searchInput = document.getElementById("searchInput");
            const perPageSelect = document.getElementById("perPage");
            let currentPage = 1;
            let perPage = parseInt(perPageSelect?.value || 5);
            let search = "";

            function showLoader() {
                if (loader) {
                    loader.classList.remove("hidden");
                }
                if (content) {
                    content.style.opacity = ".3";
                    content.style.pointerEvents = "none";
                }
            }

            function hideLoader() {
                if (loader) {
                    loader.classList.add("hidden");
                }
                if (content) {
                    content.style.opacity = "1";
                    content.style.pointerEvents = "auto";
                }
            }

            function escapeHtml(value) {
                const div = document.createElement("div");
                div.textContent = value ?? "";
                return div.innerHTML;
            }

            function renderTable(data) {
                publicationTable.innerHTML = "";
                if (!data.length) {
                    publicationTable.innerHTML = `
                    <tr>
                        <td colspan="3"
                            class="px-5 py-8 text-center text-slate-500">
                            No publications found
                        </td>
                    </tr>
                `;
                    return;
                }
                data.forEach((item, index) => {
                    const serialNumber =
                        (currentPage - 1) * perPage + index + 1;
                    publicationTable.innerHTML += `
                    <tr class="border-b border-slate-200 hover:bg-slate-100 transition">
                        <td class="px-5 py-4 font-semibold text-primary">
                            ${serialNumber}
                        </td>
                        <td class="px-5 py-4 text-slate-700">
                            <strong>
                                ${escapeHtml(item.title)}
                            </strong>
                        </td>
                        <td class="px-5 py-4 text-center">
                            <a
                                href="${item.file}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 text-primary font-semibold">
                                <i class="fa-solid fa-file-pdf text-secondary"></i>
                                View PDF
                            </a>
                        </td>
                    </tr>
                `;
                });
            }

            function renderPagination(totalPages) {
                if (!pagination) {
                    return;
                }
                pagination.innerHTML = "";
                if (totalPages <= 1) {
                    return;
                }
                for (let i = 1; i <= totalPages; i++) {
                    pagination.innerHTML += `
                    <button
                        type="button"
                        data-page="${i}"
                        class="publication-page-btn px-4 py-2 border transition
                        ${
                            currentPage === i
                                ? "bg-primary text-white border-primary"
                                : "bg-white text-primary border-slate-300 hover:bg-primary hover:text-white"
                        }">
                        ${i}
                    </button>
                `;
                }
                document
                    .querySelectorAll(".publication-page-btn")
                    .forEach(button => {
                        button.addEventListener("click", function() {
                            currentPage = parseInt(this.dataset.page);
                            fetchPublications();
                        });
                    });
            }

            function fetchPublications() {
                showLoader();
                setTimeout(function() {
                    const searchTerm = search.trim().toLowerCase();
                    const filtered = publications.filter(item => {
                        return (item.title || "")
                            .toLowerCase()
                            .includes(searchTerm);
                    });
                    const totalPages =
                        Math.ceil(filtered.length / perPage);
                    if (currentPage > totalPages && totalPages > 0) {
                        currentPage = 1;
                    }
                    const start =
                        (currentPage - 1) * perPage;
                    const data =
                        filtered.slice(start, start + perPage);
                    renderTable(data);
                    renderPagination(totalPages);
                    hideLoader();
                }, 300);
            }
            if (perPageSelect) {
                perPageSelect.addEventListener("change", function() {
                    perPage = parseInt(this.value);
                    currentPage = 1;
                    fetchPublications();
                });
            }
            if (searchInput) {
                let typingTimer;
                searchInput.addEventListener("input", function() {
                    clearTimeout(typingTimer);
                    const value = this.value;
                    typingTimer = setTimeout(function() {
                        search = value;
                        currentPage = 1;
                        fetchPublications();
                    }, 300);
                });
            }
            fetchPublications();
        });
    </script>
    @php
        $homeDoctors = [
            'ktm' => [
                'id' => $ktmdoctors->id,
                'slug' => $ktmdoctors->uri,
                'name' => $ktmdoctors->post_title,
                'department' => $ktmdoctors->sub_title,
                'qualification' => $ktmdoctors->post_excerpt,
                'experience' => $ktmdoctors->associated_title,
                'about' => strip_tags($ktmdoctors->post_content),

                'location' => $ktmdoctors->icon,
                'languages' => 'English, Nepali',
                'patients' => '5000+',
                'research' => '12',
                'education' => [],

                'image' => !empty($ktmdoctors->banner)
                    ? asset('uploads/medium/' . $ktmdoctors->banner)
                    : asset('uploads/medium/david-IMsaOobp4lk4Er82hHTKnU9LoaxxMES6SqAyyURl.webp'),
            ],

            'pkh' => [
                'id' => $pkhdoctors->id,
                'slug' => $pkhdoctors->uri,
                'name' => $pkhdoctors->post_title,
                'department' => $pkhdoctors->sub_title,
                'qualification' => $pkhdoctors->post_excerpt,
                'experience' => $pkhdoctors->associated_title,
                'about' => strip_tags($pkhdoctors->post_content),

                'location' => $pkhdoctors->icon,
                'languages' => 'English, Nepali',
                'patients' => '5000+',
                'research' => '12',
                'education' => [],

                'image' => !empty($pkhdoctors->banner)
                    ? asset('uploads/medium/' . $pkhdoctors->banner)
                    : asset('uploads/medium/david-IMsaOobp4lk4Er82hHTKnU9LoaxxMES6SqAyyURl.webp'),
            ],
        ];
    @endphp
    @push('scripts')
        <script>
            const homeDoctors = @json($homeDoctors);
            const doctorModal = document.getElementById("doctorModal");
            const doctorModalContent = document.getElementById("doctorModalContent");

            function openHomeDoctor(key) {
                const doctor = homeDoctors[key];
                if (!doctor) return;
                doctorModalContent.innerHTML = `
                    <div class="grid lg:grid-cols-12">
                        <!-- IMAGE -->
                        <div class="lg:col-span-5">
                            <img
                                src="${doctor.image || "./assets/img/doctor-placeholder.jpg"}"
                                class="w-full h-[280px] lg:h-full object-cover">
                        </div>
                    
                        <!-- DETAILS -->
                        <div class="lg:col-span-7 p-3 lg:p-4">
                            <span
                                class="inline-block bg-secondary/10 text-secondary px-3 py-1 text-sm font-semibold">
                                ${doctor.department}
                            </span>
                    
                            <h2 class="text-primary text-3xl font-black mt-3">
                                ${doctor.name}
                            </h2>
                    
                            <p class="text-slate-600 mt-2 text-sm">
                                ${doctor.qualification}
                            </p>
                            <!-- STATS -->
                            <div class="grid grid-cols-3 gap-3 mt-4">
                                <div class="text-center">
                                    <div class="text-primary text-2xl font-black">
                                        ${doctor.experience}
                                    </div>
                    
                                    <p class="text-xs text-slate-500">
                                        Experience
                                    </p>
                                </div>
                                <div class="text-center">
                                    <div class="text-primary text-2xl font-black">
                                        ${doctor.patients}
                                    </div>
                                    <p class="text-xs text-slate-500">
                                        Patients
                                    </p>
                                </div>
                                <div class="text-center">
                                    <div class="text-primary text-2xl font-black">
                                        ${doctor.research}
                                    </div>
                    
                                    <p class="text-xs text-slate-500">
                                        Publications
                                    </p>
                                </div>
                            </div>
                            <!-- ABOUT -->
                            <div class="mt-4">
                                <h3 class="text-primary text-lg font-black mb-2">
                                    About Doctor
                                </h3>
                                <p class="text-slate-600 leading-6 text-sm">
                                    ${doctor.about}
                                </p>
                            </div>
                            <!-- EDUCATION -->
                            <div class="mt-4">
                                <h3 class="text-primary text-lg font-black mb-2">
                                    Education
                                </h3>
                                <ul class="space-y-2">
                                    ${doctor.education
                                        .map(
                                            (item) => `
                                                                                                <li class="flex items-start gap-2 text-sm text-slate-600">
                                                                                                    <i class="fa-solid fa-circle-check text-secondary mt-1 text-xs"></i>
                                                                                                    <span>${item}</span>
                                                                                                </li>
                                                                                            `,
                                        )
                                        .join("")}
                                </ul>
                            </div>
                            <!-- LANGUAGES -->
                            <div class="mt-4">
                                <h3 class="text-primary text-lg font-black mb-2">
                                    Languages
                                </h3>
                                <p class="text-slate-600 text-sm">
                                    ${doctor.languages}
                                </p>
                            </div>
                            <!-- BUTTON -->
                            <a href="{{ url('page/bookappointment.html') }}"
                                class="btn-primary mt-6 inline-flex">
                                Book Appointment
                            </a>
                        </div>
                    </div>
                    `;
                doctorModal.classList.remove("hidden");
                document.body.style.overflow = "hidden";
            }

            function closeDoctor() {
                doctorModal.classList.add("hidden");
                document.body.style.overflow = "";

            }
            document
                .getElementById("closeDoctorModal")
                .addEventListener("click", closeDoctor);
            document
                .getElementById("doctorOverlay")
                .addEventListener("click", closeDoctor);
        </script>
    @endpush
@endsection
