@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')
    <section id="servicesSection" class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="section-subtitle">
                    Healthcare Services
                </span>
                <h2 class="section-title">
                    Available Services By Location
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    Explore healthcare services available at our
                    Kathmandu and Pokhara facilities. Select a location
                    to view services offered at that center.
                </p>
            </div>
            <!-- LOCATION TOGGLE -->
            <div class="flex justify-center mb-14">
                <div class="inline-flex bg-slate-100 p-2 rounded-full">
                    @php
                        $locations = $services->where('post_parent', 26)->take(2);
                    @endphp
                    @foreach ($locations as $location)
                        <button
                            class="location-btn px-8 py-4 rounded-full font-bold transition-all duration-300 {{ $loop->first ? 'active-location' : '' }}"
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
                <div id="location-{{ $location->id }}"
                    class="service-wrapper {{ !$loop->first ? 'hidden' : '' }} grid md:grid-cols-2 xl:grid-cols-3 gap-8">

                    @foreach ($locationServices as $service)
                        <div
                            class="group bg-white border border-slate-200 hover:border-secondary
            hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                            <div class="p-8 flex flex-col h-full">
                                <div class="flex justify-between items-center mb-6">
                                    <span class="text-secondary font-bold">
                                        {{ $service->sub_title }}
                                    </span>
                                    <div class="w-14 h-14 rounded-full bg-secondary/10 flex items-center justify-center">
                                        <i
                                            class="{{ $service->sub_title ?: 'fa-solid fa-stethoscope' }} text-secondary text-2xl">
                                        </i>
                                    </div>
                                </div>
                                <h3 class="text-primary text-2xl font-black">
                                    {{ $service->post_title }}
                                </h3>
                                <p class="text-slate-600 mt-4 leading-7 flex-grow">
                                    {{ $service->post_excerpt }}
                                </p>
                                <div class="mt-6 pt-6 border-t">
                                    <a href="{{ url('page/' . $service->uri) }}"
                                        class="inline-flex items-center gap-2 font-semibold text-primary hover:text-secondary transition">
                                        Learn More
                                        <i
                                            class="fa-solid fa-arrow-right-long transition-transform group-hover:translate-x-1">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

    <script>
        const buttons = document.querySelectorAll(".location-btn");
        const wrappers = document.querySelectorAll(".service-wrapper");
        buttons.forEach(button => {
            button.addEventListener("click", function() {
                buttons.forEach(btn =>
                    btn.classList.remove("active-location")
                );
                this.classList.add("active-location");
                wrappers.forEach(wrapper =>
                    wrapper.classList.add("hidden")
                );
                document
                    .getElementById("location-" + this.dataset.location)
                    .classList.remove("hidden");
            });

        });
    </script>

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
                <p class="text-slate-600 mt-6 leading-8">
                    From your first appointment to recovery and follow-up care,
                    our healthcare team is committed to supporting you at every step.
                </p>
            </div>
            <!-- TIMELINE -->
            <div class="relative">
                <!-- DESKTOP LINE -->
                <div class="hidden xl:block absolute top-16 left-0 right-0 h-[2px] bg-slate-200">
                </div>
                <div class="grid md:grid-cols-2 xl:grid-cols-5 gap-8">
                    <!-- STEP 1 -->
                    <div class="relative text-center group">
                        <div
                            class="w-32 h-32 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                            <i class="fa-solid fa-calendar-check text-4xl">
                            </i>
                        </div>
                        <div class="mt-8">
                            <span class="text-secondary font-bold">
                                STEP 01
                            </span>
                            <h3 class="text-primary text-2xl font-black mt-3">
                                Book Appointment
                            </h3>
                            <p class="text-slate-600 mt-4 leading-7">
                                Schedule your visit online,
                                by phone or directly at our hospital.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 2 -->
                    <div class="relative text-center group">
                        <div
                            class="w-32 h-32 mx-auto bg-secondary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                            <i class="fa-solid fa-user-doctor text-4xl">
                            </i>
                        </div>
                        <div class="mt-8">
                            <span class="text-secondary font-bold">
                                STEP 02
                            </span>
                            <h3 class="text-primary text-2xl font-black mt-3">
                                Consultation
                            </h3>
                            <p class="text-slate-600 mt-4 leading-7">
                                Meet with experienced physicians
                                and healthcare specialists.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 3 -->
                    <div class="relative text-center group">
                        <div
                            class="w-32 h-32 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                            <i class="fa-solid fa-microscope text-4xl">
                            </i>
                        </div>
                        <div class="mt-8">
                            <span class="text-secondary font-bold">
                                STEP 03
                            </span>
                            <h3 class="text-primary text-2xl font-black mt-3">
                                Diagnosis
                            </h3>
                            <p class="text-slate-600 mt-4 leading-7">
                                Advanced diagnostics and testing
                                help determine the right treatment.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 4 -->
                    <div class="relative text-center group">
                        <div
                            class="w-32 h-32 mx-auto bg-secondary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                            <i class="fa-solid fa-notes-medical text-4xl">
                            </i>
                        </div>
                        <div class="mt-8">
                            <span class="text-secondary font-bold">
                                STEP 04
                            </span>
                            <h3 class="text-primary text-2xl font-black mt-3">
                                Treatment
                            </h3>
                            <p class="text-slate-600 mt-4 leading-7">
                                Personalized treatment plans
                                tailored to your healthcare needs.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 5 -->
                    <div class="relative text-center group">
                        <div
                            class="w-32 h-32 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                            <i class="fa-solid fa-heart-circle-check text-4xl">
                            </i>
                        </div>
                        <div class="mt-8">
                            <span class="text-secondary font-bold">
                                STEP 05
                            </span>
                            <h3 class="text-primary text-2xl font-black mt-3">
                                Recovery & Follow-Up
                            </h3>
                            <p class="text-slate-600 mt-4 leading-7">
                                Ongoing care and follow-up support
                                for long-term health and wellness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            {{-- SECTION HEADER --}}
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="section-subtitle">
                    {{ $facilitiesHeader->sub_title }}
                </span>
                <h2 class="section-title">
                    {{ $facilitiesHeader->post_title }}
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    {{ $facilitiesHeader->post_excerpt }}
                </p>
            </div>
            {{-- FEATURED FACILITY --}}
            @if ($featuredFacility)
                <div class="grid lg:grid-cols-12 gap-0 bg-slate-100 border border-slate-200 overflow-hidden mb-12">
                    <div class="lg:col-span-6">
                        <img src="{{ asset(env('PUBLIC_PATH') . 'uploads/medium/' . $featuredFacility->banner) }}"
                            alt="{{ $featuredFacility->post_title }}" class="w-full h-full min-h-[550px] object-cover">
                    </div>
                    <div class="lg:col-span-6 p-10 lg:p-16 flex flex-col justify-center">
                        <span class="text-secondary font-bold uppercase tracking-[3px]">
                            {{ $featuredFacility->sub_title }}
                        </span>
                        <h3 class="text-primary text-4xl font-black mt-5">
                            {{ $featuredFacility->post_title }}
                        </h3>
                        <p class="text-slate-600 mt-6 leading-8">
                            {{ $featuredFacility->post_excerpt }}
                        </p>
                        <div class="mt-8">
                            <a href="#facilities"
                                class="btn-primary transition">
                                Learn More
                                <i class="fa-solid fa-arrow-right-long">
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
                        class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                        <div class="overflow-hidden">
                            <img src="{{ asset(env('PUBLIC_PATH') . 'uploads/medium/' . $facility->banner) }}"
                                alt="{{ $facility->post_title }}"
                                class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
                        </div>
                        <div class="p-8">
                            @if ($facility->sub_title)
                                <span
                                    class="inline-flex items-center text-secondary text-xs font-bold uppercase tracking-[2px] mb-3">
                                    {{ $facility->sub_title }}
                                </span>
                            @endif
                            <h3 class="text-primary text-2xl font-black">
                                {{ $facility->post_title }}
                            </h3>
                            <p class="text-slate-600 mt-4 leading-7">
                                {{ $facility->post_excerpt }}
                            </p>
                            {{-- <div class="mt-6 pt-5 border-t border-slate-200">
                                <a href="{{ url('page/' . $facility->uri) }}"
                                    class="inline-flex items-center gap-2 text-primary font-semibold hover:text-secondary transition">

                                    Learn More
                                    <i class="fa-solid fa-arrow-right-long group-hover:translate-x-1 transition">
                                    </i>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
