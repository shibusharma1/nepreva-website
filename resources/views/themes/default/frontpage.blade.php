@extends('themes.default.common.master')
@section('content')

    <!-- HERO -->
    <section id="hero-section" class="relative">
        <!-- VIDEO HERO -->
        <div class="relative h-[70vh] md:h-[80vh] xl:h-[90vh] overflow-hidden">
            <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="auto">
                <source src="{{ asset('themes-assets/vdo/banner.webm') }}" type="video/mp4">
            </video>
            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-primary/90 via-primary/60 to-black/20">
            </div>
            <!-- Content -->
            <div class="absolute inset-0 flex items-center">
                <div class="container-custom">
                    <div class="max-w-3xl">
                        <span
                            class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white text-sm font-medium px-4 py-2 mb-6">
                            <span class="w-2 h-2 bg-secondary rounded-full animate-pulse"></span> {{-- Trusted Since 1982 --}}
                            {{ $banner->caption }} </span>
                        <h1 class="text-white font-black leading-tight text-[34px] md:text-[52px] xl:text-[70px]">
                            {{-- International Standard Healthcare in Nepal --}} {{ $banner->title }}
                        </h1>
                        <p class="mt-6 text-white/90 text-base md:text-lg xl:text-xl leading-relaxed max-w-2xl">
                            {{-- Providing world-class travel medicine, family medicine, specialist care and emergency services from Kathmandu and Pokhara for over 40 years. --}} {{ $banner->content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="relative z-20 -mt-10 md:-mt-12 xl:-mt-16">
        <div class="container-custom">
            <div class="bg-white border border-slate-200 shadow-[0_15px_40px_rgba(0,0,0,.08)]">
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

    <section class="speciality-section section-padding bg-white">
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
                        {{-- <a href="{{ url($speciality->uri) }}" class="speciality-card group"> --}} <a href="{{ url('services.html') }}" class="speciality-card group"> <img
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
    <section class="relative section-padding bg-slate-100 overflow-hidden">
        <div class="absolute inset-x-0 bottom-0 z-0 hidden lg:block">
            <img src="{{ asset('uploads/medium/' . $whyciwecheading->banner) }}"
                class="mx-auto w-[140%] sm:w-[125%] md:w-[110%] lg:w-full h-auto object-contain opacity-[0.4]">
        </div>
        <div class="relative z-10 container-custom">
            <div class="max-w-3xl mb-8 lg:mb-10">
                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                    <span class="w-2 h-2 bg-secondary"></span> {{ $whyciwecheading->sub_title }} </span>
                <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-6" data-aos="fade-up">
                    {{ $whyciwecheading->post_title }}
                </h2>
                <p class="text-slate-600 text-base md:text-lg leading-8">
                    {{ $whyciwecheading->post_excerpt }}
                </p>
            </div>
            <div id="ciwecModelSection">
                <div class="relative mt-8 lg:mt-10 mb-4">
                    <div class="grid lg:grid-cols-3 gap-6 lg:gap-8 items-center">
                        <!-- LEFT -->
                        <div class="space-y-3 lg:space-y-5 order-2 lg:order-1">
                            @foreach ($leftCards as $index => $item)
                                <button class="left-card model-item {{ $index == 0 ? 'active' : '' }}"
                                    data-image="{{ asset('uploads/medium/' . $item->banner) }}"> <i
                                        class="{{ $item->associated_title }} text-2xl sm:text-3xl lg:text-4xl text-secondary flex-shrink-0 lg:mb-4 mb-0"></i>
                                    <div>
                                        <h3 class="text-base sm:text-lg font-bold text-primary">
                                            {{ $item->post_title }}
                                        </h3>
                                    </div>
                                </button>
                            @endforeach
                        </div>
                        <!-- CENTER IMAGE -->
                        <div class="relative order-1 lg:order-2 flex justify-center">
                            <div class="ciwec-ring"></div>
                            <div class="ciwec-image-wrapper">
                                <img id="centerImage"
                                    src="{{ $whyciwec->count() ? asset('uploads/medium/' . $whyciwec->first()->banner) : '' }}"
                                    class="ciwec-image">
                            </div>
                        </div>
                        <!-- RIGHT -->
                        <div class="space-y-3 lg:space-y-5 order-3">
                            @foreach ($rightCards as $item)
                                <button class="right-card model-item"
                                    data-image="{{ asset('uploads/medium/' . $item->banner) }}"> <i
                                        class="{{ $item->associated_title }} text-2xl sm:text-3xl lg:text-4xl text-secondary flex-shrink-0 lg:mb-4 mb-0"></i>
                                    <div>
                                        <h3 class="text-base sm:text-lg font-bold text-primary">
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
                    <span
                        class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                        <span class="w-2 h-2 bg-secondary"></span> {{ $trustedworldwide->sub_title }} </span>
                    <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-6">
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
                    <img src="{{ asset('themes-assets/img/world-map.svg') }}" alt="World Map"
                        class="relative z-10 w-full max-w-[700px] mx-auto"> <!-- NEPAL -->
                    <div class="absolute top-[37%] left-[71%] z-20">
                        <span class="absolute inset-0 w-5 h-5 bg-secondary rounded-full animate-ping"> </span> <span
                            class="relative block w-5 h-5 bg-secondary rounded-full shadow-[0_0_20px_rgba(220,38,38,.6)]">
                        </span>
                    </div>
                </div>
            </div>
            <!-- STATS -->
            <div class="grid grid-cols-2 xl:grid-cols-4 gap-5 mt-16 xl:mt-20">
                <!-- ITEM -->
                <div
                    class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                    <h3 class="counter text-primary text-3xl md:text-4xl font-black" data-target="20000">
                        0
                    </h3>
                    <p class="text-slate-600 mt-3 text-sm md:text-base">International Patients</p>
                </div>
                <!-- ITEM -->
                <div
                    class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                    <h3 class="counter text-primary text-3xl md:text-4xl font-black" data-target="130">
                        0
                    </h3>
                    <p class="text-slate-600 mt-3 text-sm md:text-base">Countries Served</p>
                </div>
                <!-- ITEM -->
                <div
                    class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                    <h3 class="counter text-primary text-3xl md:text-4xl font-black" data-target="40">
                        0
                    </h3>
                    <p class="text-slate-600 mt-3 text-sm md:text-base">Years Of Excellence</p>
                </div>
                <!-- ITEM -->
                <div
                    class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                    <h3 class="counter text-primary text-3xl md:text-4xl font-black" data-target="2">
                        0
                    </h3>
                    <p class="text-slate-600 mt-3 text-sm md:text-base">Hospital Locations</p>
                </div>
            </div>
        </div>
    </section>

    @include('themes.default.common.historytimelinesection')

    <section class="section-padding bg-white">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-12">
                <div class="max-w-3xl">
                    <span
                        class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                        <span class="w-2 h-2 bg-secondary"></span> {{ $whatsnewheading->sub_title }} </span>
                    <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-4">
                        {{ $whatsnewheading->post_title }}
                    </h2>
                    <p class="text-gray-600 text-base md:text-lg leading-8">
                        {{ $whatsnewheading->post_excerpt }}
                    </p>
                </div>
            </div>
            <!-- GRID -->
            <div class="grid lg:grid-cols-12 gap-6">
                <!-- FEATURED CARD -->
                <div class="lg:col-span-5">
                    @if ($featuredCard)
                        <article
                            class="group border border-slate-200 bg-white h-full hover:border-secondary transition-all duration-500">
                            <div class="overflow-hidden">
                                <img src="{{ asset('uploads/medium/' . $featuredCard->banner) }}"
                                    alt="{{ $featuredCard->post_title }}"
                                    class="w-full h-[260px] md:h-[340px] object-cover transition duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-6 md:p-8">
                                <span class="text-secondary text-xs uppercase tracking-[2px] font-bold">
                                    {{ $featuredCard->sub_title }} </span>
                                <h3 class="text-primary text-2xl md:text-3xl font-black leading-tight mt-3 mb-4">
                                    {{ $featuredCard->post_title }}
                                </h3>
                                <p class="text-gray-600 leading-8 mb-8">
                                    {{ $featuredCard->post_excerpt }}
                                </p>
                                <a href="{{ url($featuredCard->uri) }}"
                                    class="inline-flex items-center gap-3 text-primary font-bold group"> Learn More <span
                                        class="w-9 h-9 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                                        <i class="fa-solid fa-arrow-right text-xs"></i> </span> </a>
                            </div>
                        </article>
                    @endif
                </div>
                <!-- RIGHT COLUMN -->
                <div class="lg:col-span-7">
                    <div class="grid md:grid-cols-2 gap-6 h-full">
                        @foreach ($smallCards as $card)
                            <article
                                class="border border-slate-200 p-6 md:p-8 hover:border-secondary transition-all duration-500 flex flex-col">
                                <div class="w-14 h-14 bg-primary/5 text-primary flex items-center justify-center mb-6">
                                    <i class="{{ $card->associated_title }} text-xl"></i>
                                </div>
                                <h3 class="text-primary text-xl md:text-2xl font-black mb-4">
                                    {{ $card->post_title }}
                                </h3>
                                <p class="text-gray-600 leading-7 flex-grow">{{ $card->post_excerpt }}</p>
                                <a href="{{ url($card->uri) }}"
                                    class="inline-flex items-center gap-3 text-primary font-bold mt-6"> Learn More <i
                                        class="fa-solid fa-arrow-right text-secondary"></i> </a>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding relative bg-slate-100 overflow-hidden">
        <div class="absolute inset-x-0 bottom-0 z-0 hidden lg:block">
            <img src="{{ asset('uploads/medium/' . $doctorssection->banner) }}" alt="Doctor Background" loading="lazy"
                class="mx-auto w-[140%] sm:w-[125%] md:w-[110%] lg:w-full h-auto object-contain opacity-[0.4]">
        </div>
        <div class="relative z-10 container-custom">
            <div class="grid xl:grid-cols-[1fr_1fr_1.2fr] gap-6 xl:gap-8 items-stretch">
                <!-- ========================= DOCTOR 1 ========================= -->
                <article
                    class="group border border-slate-200 bg-white overflow-hidden transition-all duration-500 hover:border-secondary">
                    <!-- IMAGE -->
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('uploads/medium/' . $ktmdoctors->banner) }}"
                            alt="{{ $ktmdoctors->post_title }}" loading="lazy"
                            class="w-full h-[320px] md:h-[420px] object-cover transition duration-700 group-hover:scale-105">
                        <!-- BRANCH -->
                        <div class="absolute left-5 top-5 bg-secondary px-4 py-2 border border-slate-200">
                            <span class="text-white text-xs font-bold uppercase tracking-[1px]"> {{ $ktmdoctors->icon }}
                            </span>
                        </div>
                    </div>
                    <!-- CONTENT -->
                    <div class="p-6">
                        <h3 class="text-primary text-[24px] font-black leading-tight mb-2">
                            {{-- Dr. Sarah Sharma --}} {{ $ktmdoctors->post_title }}
                        </h3>
                        <p class="text-secondary font-semibold mb-5">{{ $ktmdoctors->sub_title }}</p>
                        <a href="{{ url('doctors-at-ciwec.html') }}"
                            class="inline-flex items-center gap-3 text-primary font-bold text-sm group"> View Profile <span
                                class="w-8 h-8 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                                <i class="fa-solid fa-arrow-right text-[11px]"></i> </span> </a>
                    </div>
                </article>
                <!-- ========================= DOCTOR 2 ========================= -->
                <article
                    class="group border border-slate-200 bg-white overflow-hidden transition-all duration-500 hover:border-secondary">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('uploads/medium/' . $pkhdoctors->banner) }}"
                            alt="{{ $pkhdoctors->post_title }}"
                            class="w-full h-[320px] md:h-[420px] object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute left-5 top-5 bg-secondary px-4 py-2 border border-slate-200">
                            <span class="text-white text-xs font-bold uppercase tracking-[1px]"> {{ $pkhdoctors->icon }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-primary text-[24px] font-black leading-tight mb-2">
                            {{ $pkhdoctors->post_title }}
                        </h3>
                        <p class="text-secondary font-semibold mb-5">{{ $pkhdoctors->sub_title }}</p>
                        <a href="{{ url('doctors-at-ciwec.html') }}"
                            class="inline-flex items-center gap-3 text-primary font-bold text-sm group"> View Profile
                            <span
                                class="w-8 h-8 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                                <i class="fa-solid fa-arrow-right text-[11px]"></i>
                            </span> </a>
                    </div>
                </article>
                <div class="bg-slate-50 border border-slate-200 p-8 md:p-10 xl:p-12 flex flex-col justify-center">
                    <span
                        class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-5">
                        <span class="w-2 h-2 bg-secondary"></span> {{ $doctorssection->sub_title }} </span>
                    <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-6">
                        {{ $doctorssection->post_title }}
                    </h2>
                    <p class="text-slate-600 text-base md:text-lg leading-8 mb-8">
                        {{ $doctorssection->post_excerpt }}
                    </p>
                    <div>
                        <a href="{{ url('doctors-at-ciwec.html') }}" class="btn-primary"> View All Doctors </a>
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
        <section class="section-padding relative bg-white overflow-hidden">
            <div class="container-custom">
                <!-- HEADING -->
                <div class="text-center mb-8 md:mb-10">
                    @if ($patientStoriesHeading->sub_title)
                        <span
                            class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                            <span class="w-2 h-2 bg-secondary"></span> {{ $patientStoriesHeading->sub_title }} </span>
                        @endif @if ($patientStoriesHeading->post_title)
                            <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-6">
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
    <section class="section-padding bg-slate-200 overflow-hidden">
        <div class="container-custom">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-12">
                <div class="max-w-3xl">
                    <span
                        class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                        <span class="w-2 h-2 bg-secondary"></span>
                        {{ $testimonialheading->sub_title ?? 'Patient Feedback' }} </span>
                    <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-4">
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
    </section>

    @if ($awardheading && $awards->isNotEmpty())
        <section class="relative section-padding bg-slate-100 overflow-hidden">
            <div class="absolute inset-x-0 bottom-0 z-0 hidden lg:block">
                <img src="{{ asset('uploads/medium/' . $awardheading->banner) }}" alt="{{ $awardheading->post_title }}"
                    loading="lazy"
                    class="mx-auto w-[140%] sm:w-[125%] md:w-[110%] lg:w-full h-auto object-fill opacity-[0.4]">
            </div>
            <div class="relative z-10 container-custom">
                <!-- HEADER -->
                <div class="max-w-3xl mb-12">
                    @if ($awardheading->sub_title)
                        <span
                            class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                            <span class="w-2 h-2 bg-secondary"></span> {{ $awardheading->sub_title }} </span>
                        @endif @if ($awardheading->post_title)
                            <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-4">
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
        <section class="section-padding bg-white overflow-hidden relative">
            <div class="container-custom z-10 relative">
                <!-- HEADER -->
                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
                    <div class="max-w-3xl">
                        @if ($publications->sub_title)
                            <span
                                class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                                <span class="w-2 h-2 bg-secondary"></span> {{ $publications->sub_title }} </span>
                            @endif @if ($publications->post_title)
                                <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-4">
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
    </script>

    <script>
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
                    storyVideo.src =
                        `${video}${separator}autoplay=1&rel=0&modestbranding=1`;
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
                    e.key === "Escape" &&
                    !videoModal.classList.contains("hidden")
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
@endsection
