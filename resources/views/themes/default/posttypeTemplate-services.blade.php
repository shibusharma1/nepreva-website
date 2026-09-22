@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')
    <section id="servicesSection" class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-10">
                <span class="section-subtitle">
                    Healthcare Services
                </span>
                <h2 class="section-title">
                    Available Services By Location
                </h2>
                <p class="text-slate-600 mt-4 leading-relaxed">
                    Explore healthcare services available at our
                    Kathmandu and Pokhara facilities. Select a location
                    to view services offered at that center.
                </p>
            </div>
            <!-- LOCATION TOGGLE -->
            <div class="flex justify-center mb-12">
                <div class="inline-flex bg-[#fdfdfd] p-1.5 rounded-full border border-slate-200">
                    @php
                        $locations = $services->where('post_parent', 26)->take(2);
                    @endphp
                    @foreach ($locations as $location)
                        <button class="location-btn px-6 py-3 rounded-full font-bold text-sm transition-all duration-300 {{ $loop->first ? 'bg-primary text-white shadow-md' : 'text-slate-600 hover:text-primary' }}"
                            data-location="{{ $location->id }}">
                            {{ $location->post_title }}
                        </button>
                    @endforeach
                </div>
            </div>
            @foreach ($locations as $location)
                @php
                    $locationServices = $services->where('post_parent', $location->id);
                @endphp
                <div id="location-{{ $location->id }}" class="service-wrapper {{ !$loop->first ? 'hidden' : '' }} grid md:grid-cols-2 xl:grid-cols-3 gap-8">
                    @foreach ($locationServices as $service)
                        <div class="group bg-[var(--neutral-50)] border border-slate-200 hover:border-secondary hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                            <div class="p-6 md:p-8 flex flex-col h-full">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                                        {{ $service->sub_title }}
                                    </span>
                                    <div class="w-8 h-8 rounded-full bg-secondary/10 flex items-center justify-center">
                                        <i class="{{ $service->associated_title ?: 'fa-solid fa-stethoscope' }} text-secondary text-lg"></i>
                                    </div>
                                </div>
                                <h3 class="text-primary text-xl font-bold">
                                    {{ $service->post_title }}
                                </h3>
                                <!-- LIMITED DESCRIPTION -->
                                <p class="text-slate-600 mt-3 text-sm md:text-base leading-relaxed line-clamp-2">
                                    {{ Str::limit(strip_tags($service->post_excerpt), 150) }}
                                </p>
                                <div class="mt-6 pt-5 border-t border-slate-100">
                                    <button type="button"
                                        class="service-modal-trigger inline-flex items-center gap-2 font-semibold text-sm text-primary hover:text-secondary transition"
                                        data-title="{{ $service->post_title }}" data-subtitle="{{ $service->sub_title }}"
                                        data-associated-title="{{ $service->associated_title ?: 'fa-solid fa-stethoscope' }}"
                                        data-description="{{ e(strip_tags($service->post_excerpt)) }}"
                                        aria-label="View details about {{ $service->post_title }}">
                                        Learn More
                                        <i class="fa-solid fa-arrow-right-long text-xs transition-transform group-hover:translate-x-1" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

    <!-- SERVICE DETAILS MODAL -->
    <div
        id="serviceModal"
        class="fixed inset-0 z-[9999] hidden items-center justify-center p-3 sm:p-4 md:p-6"
        aria-hidden="true"
        role="dialog"
        aria-modal="true"
        aria-labelledby="serviceModalTitle">

        <!-- BACKDROP -->
        <div id="serviceModalBackdrop" class="absolute inset-0 bg-primary/95/60 backdrop-blur-sm">
        </div>

        <!-- MODAL -->
        <div
            id="serviceModalContent"
            class="relative flex w-full max-w-[95vw] sm:max-w-xl md:max-w-2xl lg:max-w-3xl max-h-[94vh] sm:max-h-[90vh] flex-col overflow-hidden bg-white shadow-2xl">

            <!-- MODAL HEADER -->
            <div
                class="flex shrink-0 items-start justify-between gap-4 border-b border-slate-200 px-4 py-4 sm:gap-6 sm:px-6 sm:py-5 md:px-8 md:py-6">

                <div class="min-w-0 flex-1">

                    <span
                        id="serviceModalSubtitle"
                        class="mb-1 block truncate text-xs font-bold uppercase tracking-[1.5px] text-secondary sm:mb-2 sm:text-sm sm:tracking-[2px]">
                    </span>

                    <h2
                        id="serviceModalTitle"
                        class="break-words text-xl font-bold leading-tight text-primary sm:text-2xl md:text-3xl">
                    </h2>

                </div>

                <!-- CLOSE BUTTON -->
                <button
                    type="button"
                    id="serviceModalClose"
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-slate-100 text-slate-600 transition-all duration-300 hover:bg-secondary hover:text-white sm:h-10 sm:w-10"
                    aria-label="Close service details">

                    <i
                        class="fa-solid fa-xmark text-base sm:text-lg"
                        aria-hidden="true">
                    </i>

                </button>

            </div>

            <!-- MODAL BODY -->
            <div
                class="min-h-0 flex-1 overflow-y-auto px-4 py-5 sm:px-6 sm:py-6 md:px-8 md:py-8">

                <!-- SERVICE INFO -->
                <div class="mb-5 flex items-start gap-3 sm:mb-6 sm:gap-4">

                    <div
                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-secondary/10 text-secondary sm:h-12 sm:w-12">

                        <i
                            id="serviceModalIcon"
                            class="fa-solid fa-stethoscope text-lg sm:text-xl"
                            aria-hidden="true">
                        </i>

                    </div>

                    <div class="min-w-0">

                        <p class="text-base font-semibold text-slate-700 sm:text-lg">
                            Service Details
                        </p>

                        <p class="mt-1 text-sm leading-relaxed text-slate-600 sm:text-base">
                            Learn more about this healthcare service.
                        </p>

                    </div>

                </div>

                <!-- DESCRIPTION -->
                <div
                    id="serviceModalDescription"
                    class="break-words text-base leading-relaxed text-slate-600 md:text-lg">
                </div>

            </div>
        </div>

    </div>
{{-- 
    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="section-subtitle">
                    Patient Experience
                </span>
                <h2 class="section-title">
                    Your Healthcare Journey At CIWEC
                </h2>
                <p class="text-slate-600 mt-4 leading-relaxed">
                    From your first appointment to recovery and follow-up care,
                    our healthcare team is committed to supporting you at every step.
                </p>
            </div>
            <!-- TIMELINE -->
            <div class="relative">
                <!-- DESKTOP LINE -->
                <div class="hidden xl:block absolute top-12 left-0 right-0 h-[2px] bg-slate-200">
                </div>
                <div class="grid md:grid-cols-2 xl:grid-cols-5 gap-8">
                    <!-- STEP 1 -->
                    <div class="relative text-center group">
                        <div
                            class="w-20 h-20 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-md">
                            <i class="fa-solid fa-calendar-check text-2xl">
                            </i>
                        </div>
                        <div class="mt-6">
                            <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                                STEP 01
                            </span>
                            <h3 class="text-primary text-lg font-bold mt-2">
                                Book Appointment
                            </h3>
                            <p class="text-slate-600 mt-2 text-sm md:text-base leading-relaxed">
                                Schedule your visit online,
                                by phone or directly at our hospital.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 2 -->
                    <div class="relative text-center group">
                        <div
                            class="w-20 h-20 mx-auto bg-secondary text-white flex items-center justify-center rounded-full relative z-10 shadow-md">
                            <i class="fa-solid fa-user-doctor text-2xl">
                            </i>
                        </div>
                        <div class="mt-6">
                            <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                                STEP 02
                            </span>
                            <h3 class="text-primary text-lg font-bold mt-2">
                                Consultation
                            </h3>
                            <p class="text-slate-600 mt-2 text-sm md:text-base leading-relaxed">
                                Meet with experienced physicians
                                and healthcare specialists.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 3 -->
                    <div class="relative text-center group">
                        <div
                            class="w-20 h-20 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-md">
                            <i class="fa-solid fa-microscope text-2xl">
                            </i>
                        </div>
                        <div class="mt-6">
                            <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                                STEP 03
                            </span>
                            <h3 class="text-primary text-lg font-bold mt-2">
                                Diagnosis
                            </h3>
                            <p class="text-slate-600 mt-2 text-sm md:text-base leading-relaxed">
                                Advanced diagnostics and testing
                                help determine the right treatment.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 4 -->
                    <div class="relative text-center group">
                        <div
                            class="w-20 h-20 mx-auto bg-secondary text-white flex items-center justify-center rounded-full relative z-10 shadow-md">
                            <i class="fa-solid fa-notes-medical text-2xl">
                            </i>
                        </div>
                        <div class="mt-6">
                            <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                                STEP 04
                            </span>
                            <h3 class="text-primary text-lg font-bold mt-2">
                                Treatment
                            </h3>
                            <p class="text-slate-600 mt-2 text-sm md:text-base leading-relaxed">
                                Personalized treatment plans
                                tailored to your healthcare needs.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 5 -->
                    <div class="relative text-center group">
                        <div
                            class="w-20 h-20 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-md">
                            <i class="fa-solid fa-heart-circle-check text-2xl">
                            </i>
                        </div>
                        <div class="mt-6">
                            <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                                STEP 05
                            </span>
                            <h3 class="text-primary text-lg font-bold mt-2">
                                Recovery & Follow-Up
                            </h3>
                            <p class="text-slate-600 mt-2 text-sm md:text-base leading-relaxed">
                                Ongoing care and follow-up support
                                for long-term health and wellness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @php
        $locations = $services->where('post_parent', 26)->take(2);
        $facilitiesHeader = $services->where('post_parent', 26)->skip(2)->first();
        $facilities = collect();
        $featuredFacility = null;
        if ($facilitiesHeader) {
            $facilities = $services->where('post_parent', $facilitiesHeader->id);
            $featuredFacility = $facilities->first();
            $facilities = $facilities->skip(1);
        }
    @endphp
    @if ($facilitiesHeader)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">
                {{-- SECTION HEADER --}}
                <div class="text-center max-w-4xl mx-auto mb-12">
                    <span class="section-subtitle">
                        {{ $facilitiesHeader->sub_title }}
                    </span>
                    <h2 class="section-title">
                        {{ $facilitiesHeader->post_title }}
                    </h2>
                    <p class="text-slate-600 mt-4 leading-relaxed">
                        {{ $facilitiesHeader->post_excerpt }}
                    </p>
                </div>
                {{-- FEATURED FACILITY --}}
                @if ($featuredFacility)
                    <div class="grid lg:grid-cols-12 gap-0 bg-[var(--neutral-50)] border border-slate-200 overflow-hidden mb-12">
                        <div class="lg:col-span-6">
                            <img src="{{ asset(env('PUBLIC_PATH') . 'uploads/medium/' . $featuredFacility->banner) }}"
                                alt="{{ $featuredFacility->post_title }}" class="w-full h-full min-h-[380px] object-cover">
                        </div>
                        <div class="lg:col-span-6 p-8 lg:p-12 flex flex-col justify-center">
                            <span class="text-secondary font-semibold uppercase tracking-[3px] text-xs">
                                {{ $featuredFacility->sub_title }}
                            </span>
                            <h3 class="text-primary text-2xl md:text-3xl font-bold mt-3">
                                {{ $featuredFacility->post_title }}
                            </h3>
                            <p class="text-slate-600 mt-4 leading-relaxed">
                                {{ $featuredFacility->post_excerpt }}
                            </p>
                            <div class="mt-6">
                                <a href="#facilities" class="btn-primary transition text-sm">
                                    Learn More
                                    <i class="fa-solid fa-arrow-right-long text-xs">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- FACILITY GRID --}}
                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
                    @foreach ($facilities as $facility)
                        <div id="facilities"
                            class="group overflow-hidden bg-[var(--neutral-50)] border border-slate-200 hover:border-secondary transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                            <div class="overflow-hidden">
                                <img src="{{ asset(env('PUBLIC_PATH') . 'uploads/medium/' . $facility->banner) }}"
                                    alt="{{ $facility->post_title }}"
                                    class="w-full h-60 object-cover group-hover:scale-105 transition duration-500">
                            </div>
                            <div class="p-6">
                                @if ($facility->sub_title)
                                    <span
                                        class="inline-flex items-center text-secondary text-xs font-bold uppercase tracking-[2px] mb-2">
                                        {{ $facility->sub_title }}
                                    </span>
                                @endif
                                <h3 class="text-primary text-xl font-bold">
                                    {{ $facility->post_title }}
                                </h3>
                                <p class="text-slate-600 mt-3 text-sm leading-relaxed">
                                    {{ $facility->post_excerpt }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
