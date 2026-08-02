@extends('themes.default.common.master')
@section('content')
<style>
    .model-item {
        width: 100%;
        text-align: left;
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 20px;
        transition: all .4s ease;
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .model-item:hover {
        transform: translateY(-8px);
        border-color: #11497b;
        box-shadow: 0 20px 40px rgba(17, 73, 123, .12);
    }

    .model-item h3 {
        font-size: 22px;
        font-weight: 800;
        color: #11497b;
        margin-bottom: 8px;
    }

    .model-item p {
        color: #64748b;
        line-height: 1.7;
    }

    .model-item.active {
        background: linear-gradient(135deg,
                #11497B,
                #1D5E95);
        border-color: #11497b;
        transform:
            translateY(-8px) scale(1.03);
        box-shadow:
            0 25px 60px rgba(17, 73, 123, .28);
    }

    .model-item.active h3,
    .model-item.active p,
    .model-item.active i {
        color: white;
    }

    .ciwec-image-wrapper {
        width: 420px;
        height: 420px;
        border-radius: 20px;
        overflow: hidden;
        border: 10px solid white;
        box-shadow:
            0 30px 80px rgba(17, 73, 123, .15);
        position: relative;
        z-index: 5;
    }

    .ciwec-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: opacity .5s ease;
    }

    .ciwec-ring {
        position: absolute;
        width: 560px;
        height: 560px;
        left: 50%;
        top: 50%;
        border-radius: 50%;
        border: 3px dashed rgba(17, 73, 123, .12);
        transform: translate(-50%, -50%);
        animation: rotateRing 60s linear infinite;
    }

    .ciwec-ring::before,
    .ciwec-ring::after {
        content: "";
        position: absolute;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #e53935;
    }

    .ciwec-ring::before {
        top: -9px;
        left: 50%;
        transform: translateX(-50%);
    }

    .ciwec-image-wrapper::after {
        content: "";
        position: absolute;
        inset: -20px;
        border-radius: 50px;
        border: 1px solid rgba(17, 73, 123, .08);
        z-index: -1;
    }

    .ciwec-ring::after {
        bottom: -9px;
        left: 50%;
        transform: translateX(-50%);
    }

    /* .ciwec-ring-pulse {
   position: absolute;
   width: 580px;
   height: 580px;
   border-radius: 40px;
   border: 1px solid rgba(17, 73, 123, .10);
   animation: pulseRing 4s infinite;
   } */
    /* Center image animation */
    #centerImage {
        transition:
            opacity .5s ease,
            transform .5s ease;
    }

    #centerImage.changing {
        opacity: 0;
        transform:
            scale(.92) rotate(2deg);
    }

    @keyframes rotateRing {
        from {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        to {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }

    @keyframes pulseRing {
        0% {
            transform: scale(1);
            opacity: .5;
        }

        50% {
            transform: scale(1.03);
            opacity: .15;
        }

        100% {
            transform: scale(1);
            opacity: .5;
        }
    }

    @media (max-width: 1024px) {
        .ciwec-image-wrapper {
            width: 380px;
            height: 380px;
        }

        .ciwec-ring {
            width: 450px;
            height: 450px;
        }

        .ciwec-ring-pulse {
            width: 420px;
            height: 420px;
        }
    }

    @media (max-width: 640px) {
        .ciwec-image-wrapper {
            width: 280px;
            height: 280px;
        }

        .ciwec-ring {
            width: 330px;
            height: 330px;
        }

        .ciwec-ring-pulse {
            width: 300px;
            height: 300px;
        }

        .model-item {
            padding: 20px;
        }

        .model-item h3 {
            font-size: 18px;
        }
    }

    .model-item::after {
        content: "";
        position: absolute;
        top: 50%;
        width: 12px;
        height: 12px;
        background: #fff;
        border: 2px solid #11497b;
        /* border-radius: 999px; */
        border-radius: 40px;
        transform: translateY(-50%);
        z-index: 5;
    }

    .model-item::before {
        content: "";
        position: absolute;
        top: 0;
        left: -120%;
        width: 100%;
        height: 100%;
        background:
            linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, .2),
                transparent);
        transition: .8s;
    }

    .model-item:hover::before {
        left: 120%;
    }

    .left-card::after {
        right: -38px;
    }

    .right-card::after {
        left: -38px;
    }

    .left-card::after {
        content: "";
        position: absolute;
        right: -35px;
        top: 50%;
        width: 12px;
        height: 12px;
        background: white;
        border: 2px solid #11497B;
        border-radius: 50%;
        transform: translateY(-50%);
    }

    .right-card::after {
        content: "";
        position: absolute;
        left: -35px;
        top: 50%;
        width: 12px;
        height: 12px;
        background: white;
        border: 2px solid #11497B;
        border-radius: 50%;
        transform: translateY(-50%);
    }

    @keyframes floatUp {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    @keyframes floatDown {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(8px);
        }
    }

    .left-card {
        animation: floatUp 6s ease-in-out infinite;
    }

    .right-card {
        animation: floatDown 6s ease-in-out infinite;
    }

    .ciwec-image {
        transition:
            opacity .5s ease,
            transform .5s ease;
    }

    .ciwec-image-wrapper::before {
        content: "";
        position: absolute;
        inset: -30px;
        background:
            radial-gradient(circle,
                rgba(17, 73, 123, .15),
                transparent 70%);
        z-index: -1;
    }

    @keyframes imageFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-12px);
        }
    }

    /* .ciwec-image-wrapper {
   animation: imageFloat 8s ease-in-out infinite;
   } */
    .ciwec-center-wrap {
        position: relative;
        width: 520px;
        height: 520px;
        animation: imageFloat 8s ease-in-out infinite;
    }
</style>
<!-- HERO -->
<section id="hero-section" class="relative">
    <!-- VIDEO HERO -->
    <div class="relative h-[70vh] md:h-[80vh] xl:h-[90vh] overflow-hidden">
        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="auto">
            <source src="{{ asset('themes-assets/vdo/banner.webm') }}" type="video/mp4">
        </video>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-primary/90 via-primary/60 to-black/20"></div>
        <!-- Content -->
        <div class="absolute inset-0 flex items-center">
            <div class="container-custom">
                <div class="max-w-3xl">
                    <span
                        class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white text-sm font-medium px-4 py-2 mb-6">
                        <span class="w-2 h-2 bg-secondary rounded-full animate-pulse"></span>
                        {{-- Trusted Since 1982 --}}
                        {{ $banner->caption }}
                    </span>
                    <h1
                        class="text-white font-black leading-tight text-[34px] md:text-[52px] xl:text-[70px]">
                        {{-- International Standard Healthcare in Nepal --}}
                        {{ $banner->title }}
                    </h1>
                    <p
                        class="mt-6 text-white/90 text-base md:text-lg xl:text-xl leading-relaxed max-w-2xl">
                        {{-- Providing world-class travel medicine, family medicine,
                        specialist care and emergency services from Kathmandu and
                        Pokhara for over 40 years. --}}
                        {{ $banner->content }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- =========================================
   QUICK ACTIONS
   ========================================= -->
<section class="relative z-20 -mt-10 md:-mt-12 xl:-mt-16">
    <div class="container-custom">
        <div class="bg-white border border-slate-200 shadow-[0_15px_40px_rgba(0,0,0,.08)]">
            <div class="grid grid-cols-1 md:grid-cols-3">
                <!-- FIND DOCTOR (Hidden on Mobile) -->
                <a href="{{ url('doctors-at-ciwec.html') }}"
                    class="hidden md:flex group items-center gap-4 p-5 md:p-7 border-r border-slate-200 hover:bg-slate-100 transition-all duration-300">
                    <div class="w-14 h-14 bg-primary/10 text-primary flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:bg-primary group-hover:text-white">
                        <i class="fa-solid fa-user-doctor text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-primary text-lg font-bold">
                            Find a Doctor
                        </h3>
                        <p class="text-slate-500 text-sm mt-1">
                            Search specialists
                        </p>
                    </div>
                    <i class="fa-solid fa-arrow-right text-secondary text-sm transition-all duration-300 group-hover:translate-x-1"></i>
                </a>
                <!-- INQUIRY (Hidden on Mobile) -->
                <a href="{{ url('page/contact.html') }}"
                    class="hidden md:flex group items-center gap-4 p-5 md:p-7 border-r border-slate-200 hover:bg-slate-100 transition-all duration-300">
                    <div class="w-14 h-14 bg-primary/10 text-primary flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:bg-primary group-hover:text-white">
                        <i class="fa-solid fa-comments text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-primary text-lg font-bold">
                            Inquiry
                        </h3>
                        <p class="text-slate-500 text-sm mt-1">
                            Contact our team
                        </p>
                    </div>
                    <i class="fa-solid fa-arrow-right text-secondary text-sm transition-all duration-300 group-hover:translate-x-1"></i>
                </a>
                <!-- APPOINTMENT (Visible on All Devices) -->
                <a href="{{ url('page/bookappointment.html') }}"
                    class="group flex items-center gap-4 p-5 md:p-7 bg-primary text-white hover:bg-secondary transition-all duration-300 w-full">
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-white/10 flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-calendar-check text-lg md:text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-base md:text-lg font-bold">
                            Appointment
                        </h3>
                        <!-- Visible on Mobile & Desktop -->
                        <p class="text-white/80 text-sm mt-1">
                            Schedule your visit
                        </p>
                    </div>
                    <i class="fa-solid fa-arrow-right text-white text-sm transition-all duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT -->
<!-- <section class="section-padding bg-white">
   <div class="container-custom">
       <div class="grid lg:grid-cols-2 gap-16 items-center">
           <div>
               <img
                   src="./assets/img/about-ciwec.webp"
                   class="w-full h-[500px] object-cover">
           </div>
           <div>
               <span
                   class="text-secondary uppercase tracking-[3px] text-sm font-semibold">
                   About CIWEC
               </span>
               <h2
                   class="text-primary font-black text-3xl md:text-4xl mt-4 leading-tight">
                   Nepal's Leading Travel Medicine & International Healthcare Provider
               </h2>
               <p
                   class="mt-6 text-slate-600 leading-8">
                   Established in 1982, CIWEC Hospital and Travel Medicine
                   Center has grown from a specialist clinic into one of the
                   world's most respected travel medicine institutions.
               </p>
               <p
                   class="mt-4 text-slate-600 leading-8">
                   With facilities in Kathmandu and Pokhara, we provide
                   international-standard healthcare services to residents,
                   expatriates, travelers and organizations.
               </p>
               <a href="{{ url('about-us.html') }}"
                   class="inline-flex mt-8 bg-primary text-white px-7 py-4 font-semibold hover:bg-primary/90 transition">
                   Learn More
               </a>
           </div>
       </div>
   </div>
   </section> -->
<section class="speciality-section section-padding bg-white">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="flex items-end justify-between mb-10">
            <div>
                <span class="section-label">
                    Centers of Excellence
                </span>
                <h2 class="section-title mb-0">
                    Specialized Medical Services
                </h2>
            </div>
            <a href="{{ url('services.html') }}"
                class="hidden lg:inline-flex items-center gap-2 text-primary font-semibold hover:text-secondary transition">
                View All
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
    <!-- SWIPER -->
    <div class="specialitySwiper">
        <div class="swiper-wrapper">
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#" class="speciality-card group">
                    <img src="./assets/img/speciality/img1.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Travel Medicine
                        </span>
                        <h3 class="speciality-title">
                            Travel & Tropical Medicine
                        </h3>
                        <p class="speciality-desc">
                            Internationally recognized expertise in travel medicine,
                            infectious diseases and preventive healthcare.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="{{ url('services.html') }}" class="speciality-card group">
                    <img src="./assets/img/speciality/img11.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Family Medicine
                        </span>
                        <h3 class="speciality-title">
                            Family Healthcare
                        </h3>
                        <p class="speciality-desc">
                            Comprehensive healthcare services for individuals
                            and families of all ages.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="{{ url('services.html') }}" class="speciality-card group">
                    <img src="./assets/img/speciality/img1.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Travel Medicine
                        </span>
                        <h3 class="speciality-title">
                            Travel & Tropical Medicine
                        </h3>
                        <p class="speciality-desc">
                            Internationally recognized expertise in travel medicine,
                            infectious diseases and preventive healthcare.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="{{ url('services.html') }}" class="speciality-card group">
                    <img src="./assets/img/speciality/img11.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Family Medicine
                        </span>
                        <h3 class="speciality-title">
                            Family Healthcare
                        </h3>
                        <p class="speciality-desc">
                            Comprehensive healthcare services for individuals
                            and families of all ages.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="{{ url('services.html') }}" class="speciality-card group">
                    <img src="./assets/img/speciality/img1.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Travel Medicine
                        </span>
                        <h3 class="speciality-title">
                            Travel & Tropical Medicine
                        </h3>
                        <p class="speciality-desc">
                            Internationally recognized expertise in travel medicine,
                            infectious diseases and preventive healthcare.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="{{ url('services.html') }}" class="speciality-card group">
                    <img src="./assets/img/speciality/img11.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Family Medicine
                        </span>
                        <h3 class="speciality-title">
                            Family Healthcare
                        </h3>
                        <p class="speciality-desc">
                            Comprehensive healthcare services for individuals
                            and families of all ages.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="{{ url('services.html') }}" class="speciality-card group">
                    <img src="./assets/img/speciality/img1.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Travel Medicine
                        </span>
                        <h3 class="speciality-title">
                            Travel & Tropical Medicine
                        </h3>
                        <p class="speciality-desc">
                            Internationally recognized expertise in travel medicine,
                            infectious diseases and preventive healthcare.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="{{ url('services.html') }}" class="speciality-card group">
                    <img src="./assets/img/speciality/img11.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Family Medicine
                        </span>
                        <h3 class="speciality-title">
                            Family Healthcare
                        </h3>
                        <p class="speciality-desc">
                            Comprehensive healthcare services for individuals
                            and families of all ages.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="{{ url('services.html') }}" class="speciality-card group">
                    <img src="./assets/img/speciality/img1.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Travel Medicine
                        </span>
                        <h3 class="speciality-title">
                            Travel & Tropical Medicine
                        </h3>
                        <p class="speciality-desc">
                            Internationally recognized expertise in travel medicine,
                            infectious diseases and preventive healthcare.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="{{ url('services.html') }}" class="speciality-card group">
                    <img src="./assets/img/speciality/img11.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Family Medicine
                        </span>
                        <h3 class="speciality-title">
                            Family Healthcare
                        </h3>
                        <p class="speciality-desc">
                            Comprehensive healthcare services for individuals
                            and families of all ages.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- KEEP SAME PAGINATION -->
        <div class="speciality-pagination mt-10"></div>
    </div>
</section>
<!-- #currently working -->
<section class="relative section-padding bg-slate-100 overflow-hidden">
    <!-- <div class="absolute inset-x-0 bottom-0 z-0 animate-mountain"> -->
    <div class="absolute inset-x-0 bottom-0 z-0 hidden lg:block">
        <img src="{{ asset('themes-assets/img/bg-img1.webp') }}" class="mx-auto w-[140%] sm:w-[125%] md:w-[110%] lg:w-full h-auto object-contain opacity-[0.4]">
    </div>
    <div class="relative z-10 container-custom">
        <!-- <div class="max-w-3xl mb-12"> -->
        <div class="max-w-3xl mb-8 lg:mb-10">
            <span
                class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                <span class="w-2 h-2 bg-secondary"></span>
                Why Choose CIWEC
            </span>
            <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-6" data-aos="fade-up">
                Trusted Healthcare for Travelers and Communities
            </h2>
            <p
                class="text-slate-600 text-base md:text-lg leading-8">
                More than four decades of excellence in travel medicine,
                emergency care, diagnostics and specialist healthcare.
            </p>
        </div>
        <div id="ciwecModelSection">
            <!-- <div class="relative mt-16 mb-16"> -->
            <div class="relative mt-8 lg:mt-10 mb-4">
                <div class="grid lg:grid-cols-3 gap-6 lg:gap-8 items-center">
                    <!-- LEFT -->
                    <div class="space-y-3 lg:space-y-5 order-2 lg:order-1">
                        <button class="left-card model-item active"
                            data-image="./assets/img/travel-clinic.png">
                            <i class="fa-solid fa-earth-asia text-2xl sm:text-3xl lg:text-4xl text-secondary flex-shrink-0 lg:mb-4 mb-0"></i>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-primary">
                                    Travel Medicine Expertise
                                </h3>
                            </div>
                            <!-- <p>Global expertise in travel health and vaccinations.</p> -->
                        </button>
                        <button class="model-item left-card"
                            data-image="./assets/img/patient-rights.png">
                            <i class="fa-solid fa-user-doctor text-2xl sm:text-3xl lg:text-4xl text-secondary flex-shrink-0 lg:mb-4 mb-0"></i>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-primary">80+ Medical Specialists</h3>
                            </div>
                            <!-- <p>Knowledge sharing and evidence-based healthcare.</p> -->
                        </button>
                        <button class="model-item left-card"
                            data-image="./assets/img/patient-rights.png">
                            <i class="fa-solid fa-microscope text-2xl sm:text-3xl lg:text-4xl text-secondary flex-shrink-0 lg:mb-4 mb-0"></i>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-primary">Research & Education</h3>
                            </div>
                            <!-- <p>Knowledge sharing and evidence-based healthcare.</p> -->
                        </button>
                    </div>
                    <!-- CENTER IMAGE -->
                    <div class="relative order-1 lg:order-2 flex justify-center">
                        <!-- Rotating Ring -->
                        <div class="ciwec-ring"></div>
                        <!-- Pulsing Ring -->
                        <!-- <div class="ciwec-ring-pulse"></div> -->
                        <div class="ciwec-image-wrapper">
                            <img
                                id="centerImage"
                                src="./assets/img/history1.webp"
                                class="ciwec-image">
                        </div>
                    </div>
                    <!-- RIGHT -->
                    <div class="space-y-3 lg:space-y-5 order-3">
                        <button class="model-item right-card"
                            data-image="./assets/img/altitude-expert-doctor.png">
                            <i class="fa-solid fa-globe text-2xl sm:text-3xl lg:text-4xl text-secondary flex-shrink-0 lg:mb-4 mb-0"></i>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-primary">International Patients</h3>
                            </div>
                            <!-- <p>Trusted by travelers and expatriates worldwide.</p> -->
                        </button>
                        <button class="model-item right-card"
                            data-image="./assets/img/preventive-guide.png">
                            <i class="fa-solid fa-award text-2xl sm:text-3xl lg:text-4xl text-secondary flex-shrink-0 lg:mb-4 mb-0"></i>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-primary">42+ Years of Excellence</h3>
                            </div>
                            <!-- <p>Protecting health through prevention and education.</p> -->
                        </button>
                        <button class="model-item right-card"
                            data-image="./assets/img/preventive-guide.png">
                            <i class="fa-solid fa-flag text-2xl sm:text-3xl lg:text-4xl text-secondary flex-shrink-0 lg:mb-4 mb-0"></i>
                            <!-- <i class="fa-solid fa-flag"></i> -->
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-primary">170+ Nations Served</h3>
                            </div>
                            <!-- <p>Protecting health through prevention and education.</p> -->
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
<!-- Statistics section -->
<section class="relative section-padding bg-slate-200 overflow-hidden">
    <div class="container-custom">
        <div class="grid xl:grid-cols-2 gap-12 xl:gap-20 items-center">
            <!-- LEFT -->
            <div>
                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                    <span class="w-2 h-2 bg-secondary"></span>
                    Trusted Worldwide
                </span>
                <h2
                    class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-6">
                    Delivering Quality Healthcare To Patients Across The Globe
                </h2>
                <p
                    class="text-slate-600 text-base md:text-lg leading-8 mb-8 max-w-2xl">
                    CIWEC Hospital has served international travelers,
                    diplomats, aid workers, expatriates and local communities
                    for over four decades with trusted healthcare services
                    built on international standards and medical excellence.
                </p>
                <div
                    class="flex flex-wrap gap-4">
                    <a href="{{ url('about-us.html') }}"
                        class="border border-primary text-white font-bold px-7 py-4 bg-primary hover:bg-secondary hover:text-white transition-all duration-300">
                        Learn More
                    </a>
                    <a href="{{ url('page/contact.html') }}"
                        class="border border-primary text-primary font-bold px-7 py-4 hover:bg-primary hover:text-white transition-all duration-300">
                        Contact Us
                    </a>
                </div>
            </div>
            <!-- RIGHT -->
            <div class="relative">
                <!-- GLOW -->
                <div
                    class="absolute inset-0 bg-primary/5 blur-3xl">
                </div>
                <img
                    src="{{ asset('themes-assets/img/world-map.svg') }}"
                    alt="World Map"
                    class="relative z-10 w-full max-w-[700px] mx-auto">
                <!-- NEPAL -->
                <div
                    class="absolute top-[37%] left-[71%] z-20">
                    <span
                        class="absolute inset-0 w-5 h-5 bg-secondary rounded-full animate-ping">
                    </span>
                    <span
                        class="relative block w-5 h-5 bg-secondary rounded-full shadow-[0_0_20px_rgba(220,38,38,.6)]">
                    </span>
                </div>
            </div>
        </div>
        <!-- STATS -->
        <div
            class="grid grid-cols-2 xl:grid-cols-4 gap-5 mt-16 xl:mt-20">
            <!-- ITEM -->
            <div
                class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                <h3
                    class="counter text-primary text-3xl md:text-4xl font-black"
                    data-target="20000">
                    0
                </h3>
                <p
                    class="text-slate-600 mt-3 text-sm md:text-base">
                    International Patients
                </p>
            </div>
            <!-- ITEM -->
            <div
                class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                <h3
                    class="counter text-primary text-3xl md:text-4xl font-black"
                    data-target="130">
                    0
                </h3>
                <p
                    class="text-slate-600 mt-3 text-sm md:text-base">
                    Countries Served
                </p>
            </div>
            <!-- ITEM -->
            <div
                class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                <h3
                    class="counter text-primary text-3xl md:text-4xl font-black"
                    data-target="40">
                    0
                </h3>
                <p
                    class="text-slate-600 mt-3 text-sm md:text-base">
                    Years Of Excellence
                </p>
            </div>
            <!-- ITEM -->
            <div
                class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                <h3
                    class="counter text-primary text-3xl md:text-4xl font-black"
                    data-target="2">
                    0
                </h3>
                <p
                    class="text-slate-600 mt-3 text-sm md:text-base">
                    Hospital Locations
                </p>
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
                    <span class="w-2 h-2 bg-secondary"></span>
                    What's New
                </span>
                <h2
                    class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-4">
                    New Services & Healthcare Innovations
                </h2>
                <p
                    class="text-gray-600 text-base md:text-lg leading-8">
                    Discover the latest healthcare services, specialist programs,
                    diagnostic facilities and patient-focused innovations at CIWEC.
                </p>
            </div>
            <a href="{{ url('services.html') }}"
                class="inline-flex items-center gap-3 text-primary font-bold group">
                View All Updates
                <span
                    class="w-9 h-9 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </span>
            </a>
        </div>
        <!-- GRID -->
        <div class="grid lg:grid-cols-12 gap-6">
            <!-- FEATURED CARD -->
            <div class="lg:col-span-5">
                <article
                    class="group border border-slate-200 bg-white h-full hover:border-secondary transition-all duration-500">
                    <div class="overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=1200"
                            alt=""
                            class="w-full h-[260px] md:h-[340px] object-cover transition duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-6 md:p-8">
                        <span
                            class="text-secondary text-xs uppercase tracking-[2px] font-bold">
                            Featured Service
                        </span>
                        <h3
                            class="text-primary text-2xl md:text-3xl font-black leading-tight mt-3 mb-4">
                            Second Opinion Consultation
                        </h3>
                        <p
                            class="text-gray-600 leading-8 mb-8">
                            Get expert medical advice from experienced specialists
                            before making important treatment decisions.
                        </p>
                        <a href="{{ url('page/bookappointment.html') }}"
                            class="inline-flex items-center gap-3 text-primary font-bold group">
                            Learn More
                            <span
                                class="w-9 h-9 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </span>
                        </a>
                    </div>
                </article>
            </div>
            <!-- RIGHT COLUMN -->
            <div class="lg:col-span-7">
                <div class="grid md:grid-cols-2 gap-6 h-full">
                    <!-- CARD -->
                    <article
                        class="border border-slate-200 p-6 md:p-8 hover:border-secondary transition-all duration-500 flex flex-col">
                        <div
                            class="w-14 h-14 bg-primary/5 text-primary flex items-center justify-center mb-6">
                            <i class="fa-solid fa-capsules text-xl"></i>
                        </div>
                        <h3
                            class="text-primary text-xl md:text-2xl font-black mb-4">
                            Buy Medicine
                        </h3>
                        <p
                            class="text-gray-600 leading-7 flex-grow">
                            Reliable medication delivered safely to your home
                            with professional pharmacy support.
                        </p>
                        <a href="{{ url('doctors-at-ciwec.html') }}"
                            class="inline-flex items-center gap-3 text-primary font-bold mt-6">
                            Learn More
                            <i class="fa-solid fa-arrow-right text-secondary"></i>
                        </a>
                    </article>
                    <!-- CARD -->
                    <article
                        class="border border-slate-200 p-6 md:p-8 hover:border-secondary transition-all duration-500 flex flex-col">
                        <div
                            class="w-14 h-14 bg-primary/5 text-primary flex items-center justify-center mb-6">
                            <i class="fa-solid fa-flask text-xl"></i>
                        </div>
                        <h3
                            class="text-primary text-xl md:text-2xl font-black mb-4">
                            Labs & Diagnostics
                        </h3>
                        <p
                            class="text-gray-600 leading-7 flex-grow">
                            Comprehensive diagnostic services powered by modern
                            equipment and expert laboratory professionals.
                        </p>
                        <a href="{{ url('doctors-at-ciwec.html') }}"
                            class="inline-flex items-center gap-3 text-primary font-bold mt-6">
                            Learn More
                            <i class="fa-solid fa-arrow-right text-secondary"></i>
                        </a>
                    </article>
                    <!-- CARD -->
                    <article
                        class="border border-slate-200 p-6 md:p-8 hover:border-secondary transition-all duration-500 flex flex-col">
                        <div
                            class="w-14 h-14 bg-primary/5 text-primary flex items-center justify-center mb-6">
                            <i class="fa-solid fa-heart-pulse text-xl"></i>
                        </div>
                        <h3
                            class="text-primary text-xl md:text-2xl font-black mb-4">
                            Health Screening
                        </h3>
                        <p
                            class="text-gray-600 leading-7 flex-grow">
                            Preventive healthcare programs tailored for
                            individuals, families and corporate clients.
                        </p>
                        <a href="./healthscreening.php"
                            class="inline-flex items-center gap-3 text-primary font-bold mt-6">
                            Learn More
                            <i class="fa-solid fa-arrow-right text-secondary"></i>
                        </a>
                    </article>
                    <!-- CARD -->
                    <article
                        class="border border-slate-200 p-6 md:p-8 hover:border-secondary transition-all duration-500 flex flex-col">
                        <div
                            class="w-14 h-14 bg-primary/5 text-primary flex items-center justify-center mb-6">
                            <i class="fa-solid fa-user-doctor text-xl"></i>
                        </div>
                        <h3
                            class="text-primary text-xl md:text-2xl font-black mb-4">
                            Specialist Care
                        </h3>
                        <p
                            class="text-gray-600 leading-7 flex-grow">
                            Access expert consultations from experienced doctors
                            across multiple medical specialties.
                        </p>
                        <a href="{{ url('page/bookappointment.html') }}"
                            class="inline-flex items-center gap-3 text-primary font-bold mt-6">
                            Learn More
                            <i class="fa-solid fa-arrow-right text-secondary"></i>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding relative bg-slate-100 overflow-hidden">
    <div class="absolute inset-x-0 bottom-0 z-0 hidden lg:block">
        <img src="{{ asset('themes-assets/img/bg-img5.webp') }}" class="mx-auto w-[140%] sm:w-[125%] md:w-[110%] lg:w-full h-auto object-contain opacity-[0.4]">
    </div>
    <div class="relative z-10 container-custom">
        <div class="grid xl:grid-cols-[1fr_1fr_1.2fr] gap-6 xl:gap-8 items-stretch">
            <!-- =========================
            DOCTOR 1
            ========================= -->
            <article class="group border border-slate-200 bg-white overflow-hidden transition-all duration-500 hover:border-secondary">
                <!-- IMAGE -->
                <div class="relative overflow-hidden">
                    <img src="./assets/img/doctors/doc1.png"
                        alt=""
                        class="w-full h-[320px] md:h-[420px] object-cover transition duration-700 group-hover:scale-105">
                    <!-- BRANCH -->
                    <div class="absolute left-5 top-5 bg-secondary px-4 py-2 border border-slate-200">
                        <span class="text-white text-xs font-bold uppercase tracking-[1px]">
                            Kathmandu
                        </span>
                    </div>
                </div>
                <!-- CONTENT -->
                <div class="p-6">
                    <h3 class="text-primary text-[24px] font-black leading-tight mb-2">
                        Dr. Sarah Sharma
                    </h3>
                    <p class="text-secondary font-semibold mb-5">
                        Senior Consultant Physician
                    </p>
                    <a href="{{ url('doctors-at-ciwec.html') }}" class="inline-flex items-center gap-3 text-primary font-bold text-sm group">
                        View Profile
                        <span class="w-8 h-8 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                            <i class="fa-solid fa-arrow-right text-[11px]"></i>
                        </span>
                    </a>
                </div>
            </article>
            <!-- =========================
            DOCTOR 2
            ========================= -->
            <article
                class="group border border-slate-200 bg-white overflow-hidden transition-all duration-500 hover:border-secondary">
                <div class="relative overflow-hidden">
                    <img src="./assets/img/doctors/doc2.png"
                        alt=""
                        class="w-full h-[320px] md:h-[420px] object-cover transition duration-700 group-hover:scale-105">
                    <div class="absolute left-5 top-5 bg-secondary px-4 py-2 border border-slate-200">
                        <span class="text-white text-xs font-bold uppercase tracking-[1px]">
                            Pokhara
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-primary text-[24px] font-black leading-tight mb-2">
                        Dr. Anisha Gurung
                    </h3>
                    <p class="text-secondary font-semibold mb-5">
                        Travel Medicine Specialist
                    </p>
                    <a href="{{ url('doctors-at-ciwec.html') }}"
                        class="inline-flex items-center gap-3 text-primary font-bold text-sm group">
                        View Profile
                        <span class="w-8 h-8 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                            <i class="fa-solid fa-arrow-right text-[11px]"></i>
                        </span>
                    </a>
                </div>
            </article>
            <div class="bg-slate-50 border border-slate-200 p-8 md:p-10 xl:p-12 flex flex-col justify-center">
                <span class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-5">
                    <span class="w-2 h-2 bg-secondary"></span>
                    Meet Our Experts
                </span>
                <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-6">
                    Healthcare Professionals You Can Trust
                </h2>
                <p class="text-slate-600 text-base md:text-lg leading-8 mb-8">
                    Our experienced physicians in Kathmandu and Pokhara deliver
                    evidence-based healthcare, travel medicine expertise,
                    preventive care and specialist consultations for patients
                    from Nepal and around the world.
                </p>
                <div>
                    <a href="{{ url('doctors-at-ciwec.html') }}"
                        class="btn-primary">
                        View All Doctors
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding relative bg-white overflow-hidden">
    <div class="container-custom">
        <!-- HEADING -->
        <div class="text-center mb-8 md:mb-10">
            <span
                class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                <span class="w-2 h-2 bg-secondary"></span>
                Recovery Stories
            </span>
            <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-6">
                Patient Stories
            </h2>
            <p class="max-w-3xl mx-auto text-gray-600 text-sm md:text-base leading-relaxed">
                CIWEC Hospital has been recognized nationally and internationally
                for excellence in healthcare, travel medicine and patient care.
            </p>
        </div>
        <!-- STORIES GRID -->
        <div class="hidden xl:grid grid-cols-12 gap-6">
            <!-- FEATURED STORY -->
            <div class="col-span-6">
                <div class="story-card h-[620px]"
                    data-video="./assets/vdo/banner.mp4">
                    <img src="./assets/img/speciality/img9.jpg"
                        class="story-image">
                    <div class="story-overlay"></div>
                    <button class="story-play-btn">
                        <i class="fa-solid fa-play"></i>
                    </button>
                    <div class="story-content">
                        <span class="inline-block px-3 py-1 bg-secondary text-white text-xs font-semibold uppercase tracking-[1px] mb-4">
                            Featured Story
                        </span>
                        <h3 class="story-title !text-[34px]">
                            Pre-Term Babies
                        </h3>
                        <p class="story-subtitle">
                            Ms Sakshi
                        </p>
                    </div>
                </div>
            </div>
            <!-- RIGHT -->
            <div class="col-span-6">
                <div class="grid grid-cols-2 gap-6 h-full">
                    <!-- CARD -->
                    <div class="story-card h-[300px]"
                        data-video="./assets/vdo/banner.mp4">
                        <img
                            src="./assets/img/speciality/img8.jpg"
                            class="story-image">
                        <div class="story-overlay"></div>
                        <button class="story-play-btn">
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <div class="story-content">
                            <h3 class="story-title">
                                Liver Failure
                            </h3>
                            <p class="story-subtitle">
                                Baby Bhavika
                            </p>
                        </div>
                    </div>
                    <div class="story-card h-[300px]"
                        data-video="./assets/vdo/banner.mp4">
                        <img
                            src="./assets/img/speciality/img10.jpg"
                            class="story-image">
                        <div class="story-overlay"></div>
                        <button class="story-play-btn">
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <div class="story-content">
                            <h3 class="story-title">
                                Neurosurgical Treatment
                            </h3>
                            <p class="story-subtitle">
                                Mr Devender Jeet Singh
                            </p>
                        </div>
                    </div>
                    <div class="story-card h-[300px]"
                        data-video="./assets/vdo/banner.mp4">
                        <img
                            src="./assets/img/speciality/img1.jpg"
                            class="story-image">
                        <div class="story-overlay"></div>
                        <button class="story-play-btn">
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <div class="story-content">
                            <h3 class="story-title">
                                Bone Marrow Transplant
                            </h3>
                            <p class="story-subtitle">
                                Mr Haider
                            </p>
                        </div>
                    </div>
                    <div class="story-card h-[300px]"
                        data-video="./assets/vdo/banner.mp4">
                        <img
                            src="./assets/img/speciality/img11.jpg"
                            class="story-image">
                        <div class="story-overlay"></div>
                        <button class="story-play-btn">
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <div class="story-content">
                            <h3 class="story-title">
                                Kidney Donation
                            </h3>
                            <p class="story-subtitle">
                                Ms Paluk Sunger
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =====================================================
         MOBILE / TABLET SLIDER
         ===================================================== -->
        <div class="xl:hidden">
            <div class="swiper patientStoriesSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="story-card h-[420px]"
                            data-video="./assets/vdo/banner.mp4">
                            <img
                                src="./assets/img/speciality/img9.jpg"
                                class="story-image">
                            <div class="story-overlay"></div>
                            <button class="story-play-btn">
                                <i class="fa-solid fa-play"></i>
                            </button>
                            <div class="story-content">
                                <h3 class="story-title">
                                    Pre-Term Babies
                                </h3>
                                <p class="story-subtitle">
                                    Ms Sakshi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="patient-story-pagination mt-8"></div>
            </div>
        </div>
    </div>
</section>

<div
    id="videoModal"
    class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/90 p-4">
    <div
        class="relative w-full max-w-6xl">
        <!-- CLOSE -->
        <button
            id="closeVideoModal"
            class="absolute -top-14 right-0 w-11 h-11 bg-white text-primary hover:bg-secondary hover:text-white transition-all duration-300">
            <i class="fa-solid fa-xmark text-lg"></i>
        </button>
        <!-- VIDEO -->
        <video
            id="storyVideo"
            controls
            playsinline
            class="w-full h-[75vh] aspect-video bg-black">
        </video>
    </div>
</div>

<!-- TESTIMONIAL -->
<section class="section-padding bg-slate-200 overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-12">
            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                    <span class="w-2 h-2 bg-secondary"></span>
                    Patient Feedback
                </span>
                <h2
                    class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-4">
                    What Our Patients Say
                </h2>
                <p
                    class="text-slate-600 text-base md:text-lg leading-8">
                    Trusted by travelers, expatriates, diplomats and local
                    communities for over four decades.
                </p>
            </div>
            <!-- GOOGLE RATING -->
            <div
                class="border border-slate-200 bg-white px-6 py-5">
                <div class="flex items-center gap-4">
                    <!-- <i
                  class="fa-brands fa-google text-[40px] text-[#4285F4]">
                  </i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-10 h-10">
                        <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303C33.655 32.657 29.203 36 24 36c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.277 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z" />
                        <path fill="#FF3D00" d="M6.306 14.691l6.571 4.819C14.655 16.108 18.961 13 24 13c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.277 4 24 4 16.318 4 9.656 8.337 6.306 14.691z" />
                        <path fill="#4CAF50" d="M24 44c5.176 0 9.86-1.977 13.409-5.192l-6.19-5.238C29.143 35.091 26.715 36 24 36c-5.181 0-9.625-3.327-11.287-7.946l-6.522 5.025C9.507 39.556 16.227 44 24 44z" />
                        <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303c-.792 2.237-2.231 4.166-4.084 5.57l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z" />
                    </svg>
                    <div>
                        <div
                            class="flex text-[#f59e0b] text-lg mb-1">
                            ★★★★★
                        </div>
                        <div
                            class="text-primary font-black text-xl">
                            4.9/5 Rating
                        </div>
                        <div
                            class="text-slate-500 text-sm">
                            Based on Google Reviews
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- REVIEWS -->
        <div class="swiper reviewSwiper">
            <div class="swiper-wrapper">
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/32.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Joris Van Dorpe
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Thank you so much CIWEC Hospital for all your amazing care.
                            All of the staff was super friendly and made me feel
                            at home immediately.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/women/32.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Ashley Hagaman
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p class="text-slate-600 leading-8 mb-6">
                            Dr Sandee Gupta cared for me when I took a fall
                            hiking in the Himalayas. He was very professional
                            and showed great concern.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/45.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Andrew Attard
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p class="text-slate-600 leading-8 mb-6">
                            Excellent care and support from the whole medical
                            team. The experience was extremely professional
                            from start to finish.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/32.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Joris Van Dorpe
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Thank you so much CIWEC Hospital for all your amazing care.
                            All of the staff was super friendly and made me feel
                            at home immediately.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/women/32.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Ashley Hagaman
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Dr Sandee Gupta cared for me when I took a fall
                            hiking in the Himalayas. He was very professional
                            and showed great concern.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/45.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Andrew Attard
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Excellent care and support from the whole medical
                            team. The experience was extremely professional
                            from start to finish.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/32.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Joris Van Dorpe
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Thank you so much CIWEC Hospital for all your amazing care.
                            All of the staff was super friendly and made me feel
                            at home immediately.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/45.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Andrew Attard
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Excellent care and support from the whole medical
                            team. The experience was extremely professional
                            from start to finish.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
            </div>
            <!-- PAGINATION -->
            <!-- <div class="review-pagination mt-10"></div> -->
        </div>
    </div>
</section>

<!-- Award section -->
<section class="relative section-padding bg-slate-100 overflow-hidden">
    <div class="absolute inset-x-0 bottom-0 z-0 hidden lg:block">
        <img src="{{ asset('themes-assets/img/bg-img3.webp') }}" class="mx-auto w-[140%] sm:w-[125%] md:w-[110%] lg:w-full h-auto object-fill opacity-[0.4]">
    </div>
    <div class="relative z-10 container-custom">
        <!-- HEADER -->
        <div class="max-w-3xl mb-12">
            <span
                class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                <span class="w-2 h-2 bg-secondary"></span>
                Recognition & Excellence
            </span>
            <h2
                class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-4">
                Awards & Recognitions
            </h2>
            <p
                class="text-slate-600 text-base md:text-lg leading-8">
                CIWEC Hospital has received national and international
                recognition for excellence in healthcare, travel medicine
                and patient-centered services.
            </p>
        </div>
        <!-- SWIPER -->
        <div class="swiper awardSwiper">
            <div class="swiper-wrapper">
                <!-- <div class="swiper-slide h-auto">
               <article
                   class="h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300 flex flex-col">
                   <div class="flex items-center justify-between mb-8">
                       <div
                           class="w-14 h-14 bg-primary/5 flex items-center justify-center">
                           <i
                               class="fa-solid fa-award text-primary text-2xl">
                           </i>
                       </div>
                       <span
                           class="text-secondary text-2xl font-black">
                           2025
                       </span>
                   </div>
                   <h3
                       class="text-primary text-2xl font-black leading-tight mb-4">
                       Best Travel Medicine Hospital
                   </h3>
                   <p
                       class="text-slate-600 leading-8 flex-grow">
                       Recognized for excellence in travel medicine,
                       preventive healthcare and international patient care.
                   </p>
                   <div
                       class="mt-8 pt-6 border-t border-slate-200">
                       <span
                           class="text-sm font-semibold text-primary">
                           International Healthcare Forum
                       </span>
                   </div>
               </article>
               </div>
               <div class="swiper-slide h-auto">
               <article
                   class="h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300 flex flex-col">
                   <div class="flex items-center justify-between mb-8">
                       <div
                           class="w-14 h-14 bg-primary/5 flex items-center justify-center">
                           <i
                               class="fa-solid fa-trophy text-primary text-2xl">
                           </i>
                       </div>
                       <span
                           class="text-secondary text-2xl font-black">
                           2024
                       </span>
                   </div>
                   <h3
                       class="text-primary text-2xl font-black leading-tight mb-4">
                       Healthcare Excellence Award
                   </h3>
                   <p
                       class="text-slate-600 leading-8 flex-grow">
                       Awarded for delivering exceptional healthcare
                       services, patient safety and innovation.
                   </p>
                   <div
                       class="mt-8 pt-6 border-t border-slate-200">
                       <span
                           class="text-sm font-semibold text-primary">
                           Nepal Medical Association
                       </span>
                   </div>
               </article>
               </div>
               <div class="swiper-slide h-auto">
               <article
                   class="h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300 flex flex-col">
                   <div class="flex items-center justify-between mb-8">
                       <div
                           class="w-14 h-14 bg-primary/5 flex items-center justify-center">
                           <i
                               class="fa-solid fa-medal text-primary text-2xl">
                           </i>
                       </div>
                       <span
                           class="text-secondary text-2xl font-black">
                           2023
                       </span>
                   </div>
                   <h3
                       class="text-primary text-2xl font-black leading-tight mb-4">
                       International Patient Care Recognition
                   </h3>
                   <p
                       class="text-slate-600 leading-8 flex-grow">
                       Honored for outstanding services to international
                       travelers, expatriates and aid organizations.
                   </p>
                   <div
                       class="mt-8 pt-6 border-t border-slate-200">
                       <span
                           class="text-sm font-semibold text-primary">
                           Global Health Network
                       </span>
                   </div>
               </article>
               </div>
               <div class="swiper-slide h-auto">
               <article
                   class="h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300 flex flex-col">
                   <div class="flex items-center justify-between mb-8">
                       <div class="w-14 h-14 bg-primary/5 flex items-center justify-center">
                           <i class="fa-solid fa-trophy text-primary text-2xl">
                           </i>
                       </div>
                       <span class="text-secondary text-2xl font-black">
                           2024
                       </span>
                   </div>
                   <h3 class="text-primary text-2xl font-black leading-tight mb-4">
                       Healthcare Excellence Award
                   </h3>
                   <p class="text-slate-600 leading-8 flex-grow">
                       Awarded for delivering exceptional healthcare
                       services, patient safety and innovation.
                   </p>
                   <div
                       class="mt-8 pt-6 border-t border-slate-200">
                       <span
                           class="text-sm font-semibold text-primary">
                           Nepal Medical Association
                       </span>
                   </div>
               </article>
               </div>
               <div class="swiper-slide h-auto">
               <article
                   class="h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300 flex flex-col">
                   <div class="flex items-center justify-between mb-8">
                       <div
                           class="w-14 h-14 bg-primary/5 flex items-center justify-center">
                           <i
                               class="fa-solid fa-medal text-primary text-2xl">
                           </i>
                       </div>
                       <span
                           class="text-secondary text-2xl font-black">
                           2023
                       </span>
                   </div>
                   <h3
                       class="text-primary text-2xl font-black leading-tight mb-4">
                       International Patient Care Recognition
                   </h3>
                   <p
                       class="text-slate-600 leading-8 flex-grow">
                       Honored for outstanding services to international
                       travelers, expatriates and aid organizations.
                   </p>
                   <div
                       class="mt-8 pt-6 border-t border-slate-200">
                       <span
                           class="text-sm font-semibold text-primary">
                           Global Health Network
                       </span>
                   </div>
               </article>
               </div> -->
                <div class="swiper-slide h-auto">
                    <div
                        class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                        <div
                            class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                        </div>
                        <img
                            src="./assets/img/award-1.png"
                            alt=""
                            class="relative z-10 h-24 w-auto object-contain">
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div
                        class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                        <div
                            class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                        </div>
                        <img
                            src="./assets/img/award-2.jpg"
                            alt=""
                            class="relative z-10 h-24 w-auto object-contain">
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div
                        class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                        <div
                            class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                        </div>
                        <img
                            src="./assets/img/award-3.jpg"
                            alt=""
                            class="relative z-10 h-24 w-auto object-contain">
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div
                        class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                        <div
                            class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                        </div>
                        <img
                            src="./assets/img/award-2.jpg"
                            alt=""
                            class="relative z-10 h-24 w-auto object-contain">
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div
                        class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                        <div
                            class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                        </div>
                        <img
                            src="./assets/img/award-1.png"
                            alt=""
                            class="relative z-10 h-24 w-auto object-contain">
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div
                        class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                        <div
                            class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                        </div>
                        <img
                            src="./assets/img/award-3.jpg"
                            alt=""
                            class="relative z-10 h-24 w-auto object-contain">
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div
                        class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                        <div
                            class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                        </div>
                        <img
                            src="./assets/img/award-1.png"
                            alt=""
                            class="relative z-10 h-24 w-auto object-contain">
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div
                        class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                        <div
                            class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                        </div>
                        <img
                            src="./assets/img/award-3.jpg"
                            alt=""
                            class="relative z-10 h-24 w-auto object-contain">
                    </div>
                </div>
                <!-- <div class="swiper-slide h-auto">
               <div
                   class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
               
                   <div
                       class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                   </div>
               
                   <img
                       src="./assets/img/award-1.png"
                       alt=""
                       class="relative z-10 h-24 w-auto object-contain">
               </div>
               </div>
               <div class="swiper-slide h-auto">
               <div
                   class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
               
                   <div
                       class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                   </div>
               
                   <img
                       src="./assets/img/award-1.png"
                       alt=""
                       class="relative z-10 h-24 w-auto object-contain">
               </div>
               </div>
               <div class="swiper-slide h-auto">
               <div
                   class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
               
                   <div
                       class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                   </div>
               
                   <img
                       src="./assets/img/award-1.png"
                       alt=""
                       class="relative z-10 h-24 w-auto object-contain">
               </div>
               </div>
               <div class="swiper-slide h-auto">
               <div
                   class="group relative overflow-hidden h-[180px] bg-white border border-slate-100 flex items-center justify-center transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
               
                   <div
                       class="absolute w-0 h-0 rounded-full bg-primary/5 transition-all duration-700 group-hover:w-56 group-hover:h-56">
                   </div>
               
                   <img
                       src="./assets/img/award-1.png"
                       alt=""
                       class="relative z-10 h-24 w-auto object-contain">
               </div>
               </div> -->
            </div>
            <!-- PAGINATION -->
            <!-- <div class="award-pagination mt-10"></div> -->
        </div>
    </div>
</section>


    {{-- @include('themes.default.common./publication-list') --}}
<!-- NEWSLETTER SECTION -->
<section class="section-padding bg-white overflow-hidden relative">
    <div class="container-custom z-10 relative">
        <!-- HEADER -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                    <span class="w-2 h-2 bg-secondary"></span>
                    Publications
                </span>
                <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-4">
                    Newsletters & Publications
                </h2>
                <p class="text-slate-600 text-base md:text-lg leading-8">
                    Explore healthcare updates, travel medicine insights,
                    research publications and hospital newsletters.
                </p>
            </div>
            {{-- <a href="./researchandpublication.php" class="inline-flex items-center gap-3 text-primary font-bold group">
                View All Publications
                <span class="w-9 h-9 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </span>
            </a> --}}
        </div>
        <!-- FILTER BAR -->
        <div class="border border-slate-200 bg-slate-100 p-5 md:p-6 mb-6">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">
                <!-- LEFT -->
                <div
                    class="flex items-center gap-3">
                    <span
                        class="text-sm font-semibold text-primary">
                        Show
                    </span>
                    <select
                        id="perPage"
                        class="h-11 px-4 border border-slate-300 bg-white text-sm text-slate-700 focus:border-secondary outline-none">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                    <span
                        class="text-sm text-slate-600">
                        entries
                    </span>
                </div>
                <div
                    class="relative w-full lg:w-[320px]">
                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Search publications..."
                        class="w-full h-11 pl-11 pr-4 border border-slate-300 bg-white text-sm outline-none focus:border-secondary">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                    </i>
                </div>
            </div>
        </div>
        <div id="publicationLoader" class="hidden py-12">
            <div
                class="w-12 h-12 border-[3px]
            border-slate-200
            border-t-secondary
            rounded-full
            animate-spin
            mx-auto">
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
                    <tbody id="publicationTable">
                    </tbody>
                </table>
            </div>
            <!-- PAGINATION -->
            <div
                id="publicationPagination"
                class="flex flex-wrap justify-center gap-2 mt-8">
            </div>
        </div>
    </div>
</section>

@endsection