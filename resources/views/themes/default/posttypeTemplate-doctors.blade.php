@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')
    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto text-center mb-8">
                <span class="section-subtitle">
                    Medical Specialists
                </span>
                <h2 class="section-title">
                    Find The Right Doctor
                </h2>
                <p class="text-slate-600 text-base md:text-lg mt-6 leading-relaxed">
                    Search our experienced healthcare professionals by
                    name, specialty or location.
                </p>
            </div>
            <div id="doctor-search" class="bg-white border border-slate-200 p-6 lg:p-8 shadow-sm">
                <div class="grid lg:grid-cols-12 gap-5">
                    <div class="lg:col-span-5">
                        <label class="block text-sm font-semibold text-primary mb-2">
                            Search Doctor
                        </label>
                        <div class="relative">
                            <input type="text" id="doctorSearch" placeholder="Search by doctor name..."
                                class="w-full h-14 border border-slate-300 pl-14 pr-5 focus:border-secondary outline-none transition">
                            <i
                                class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        </div>
                    </div>

                    <div class="lg:col-span-3">
                        <label class="block text-sm font-semibold text-primary mb-2">
                            Department
                        </label>
                        <select id="departmentFilter"
                            class="w-full h-14 border border-slate-300 px-4 focus:border-secondary outline-none">
                            <option value="">
                                All Departments
                            </option>
                        </select>
                    </div>

                    <div class="lg:col-span-2">
                        <label class="block text-sm font-semibold text-primary mb-2">
                            Location
                        </label>
                        <select id="locationFilter"
                            class="w-full h-14 border border-slate-300 px-4 focus:border-secondary outline-none">
                            <option value="">
                                All Locations
                            </option>
                            <option value="Kathmandu">
                                Kathmandu
                            </option>
                            <option value="Pokhara">
                                Pokhara
                            </option>
                        </select>
                    </div>
                    <div class="lg:col-span-2 flex items-end">
                        <button id="resetFilters"
                            class="w-full h-14 bg-primary text-white font-semibold hover:bg-secondary transition">
                            Reset
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center justify-between gap-4 my-6">
                <div>
                    {{-- <span class="text-secondary font-semibold uppercase tracking-[3px]">
                        Our Medical Team
                    </span> --}}
                    <h2 class="section-title mt-2">
                        Available Doctors
                    </h2>
                </div>
                <div class="px-6 py-3 font-semibold">
                    Showing
                    <span id="doctorCount">
                        {{ count($doctors) }} Doctors
                    </span>
                </div>
            </div>
            <div id="doctorLoader" class="hidden py-24">
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 border-[3px] border-slate-200 border-t-secondary rounded-full animate-spin"></div>
                    <p class="text-slate-500 mt-5">
                        Loading Doctors...
                    </p>
                </div>
            </div>
            <div id="doctorGrid" class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            </div>
            <div id="doctorEmptyState" class="hidden">
                <div class="bg-slate-100 border border-slate-200 py-24 px-8 text-center">
                    <div class="w-24 h-24 mx-auto bg-primary/10 flex items-center justify-center mb-8">
                        <i class="fa-solid fa-user-doctor text-primary text-4xl"></i>
                    </div>
                    <h3 class="text-primary text-3xl font-black">
                        No Doctors Found
                    </h3>
                    <p class="text-slate-600 text-base md:text-lg max-w-xl mx-auto mt-4 leading-relaxed">
                        We couldn't find any doctors matching your search criteria.
                    </p>
                    <button id="clearSearchBtn" class="btn-primary mt-8">
                        Clear Filters
                    </button>
                </div>
            </div>
        </div>
    </section>
    @include('themes.default.common.doctorsmodal')
    <section class="section-padding bg-slate-50 overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <span class="section-subtitle">
                    Areas Of Expertise
                </span>
                <h2 class="section-title">
                    Medical Specialities We Cover
                </h2>
                <p class="text-slate-600 text-base md:text-lg mt-6 leading-relaxed">
                    Our multidisciplinary team provides specialized
                    healthcare services across a wide range of medical
                    disciplines to support comprehensive patient care.
                </p>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">
                @foreach ($specialities as $speciality)
                    <div
                        class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                        <div class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-6">
                            <i class="{{ $speciality->associated_title }} text-primary hover:text-secondary text-3xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-2xl font-black">
                            {{ $speciality->post_title }}
                        </h3>
                        <p class="text-slate-600 text-sm md:text-base mt-4 leading-relaxed">
                            {!! $speciality->post_excerpt !!}
                        </p>
                    </div>
                @endforeach
            </div>
            <!-- FEATURE BAR -->
            <div class="bg-primary mt-20 overflow-hidden">
                <div class="grid lg:grid-cols-12 items-center">
                    <div class="lg:col-span-8 p-10 lg:p-14">
                        <span class="text-secondary font-bold uppercase tracking-[3px]">
                            {{ $expertcare->sub_title }}
                        </span>
                        <h3 class="text-white text-2xl md:text-3xl font-bold mt-4">
                            {{ $expertcare->post_title }}
                        </h3>
                        <p class="text-white/80 text-base md:text-lg mt-4 leading-relaxed">
                            {{ $expertcare->post_excerpt }}
                        </p>
                    </div>
                    <div class="lg:col-span-4">
                        <img src="{{ asset('uploads/medium/' . $expertcare->banner) }}" alt="{{ $expertcare->post_title }}"
                            class="w-full h-[300px] object-cover">
                    </div>
                </div>
            </div>
            <!-- STATS -->
            <div class="grid md:grid-cols-4 gap-6 mt-20">
                <div class="bg-slate-100 border border-slate-200 p-8 text-center">
                    <h3 class="text-primary text-3xl font-black">
                        Multi
                    </h3>
                    <p class="text-slate-600 mt-3">
                        Specialties
                    </p>
                </div>
                <div class="bg-slate-100 border border-slate-200 p-8 text-center">
                    <h3 class="text-primary text-3xl font-black">
                        Expert
                    </h3>
                    <p class="text-slate-600 mt-3">
                        Consultants
                    </p>
                </div>
                <div class="bg-slate-100 border border-slate-200 p-8 text-center">
                    <h3 class="text-primary text-3xl font-black">
                        Trusted
                    </h3>
                    <p class="text-slate-600 mt-3">
                        Medical Care
                    </p>
                </div>
                <div class="bg-slate-100 border border-slate-200 p-8 text-center">
                    <h3 class="text-primary text-3xl font-black">
                        Quality
                    </h3>
                    <p class="text-slate-600 mt-3">
                        Healthcare
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding relative overflow-hidden bg-primary">
        <!-- BACKGROUND SHAPES -->
        <div
            class="absolute top-0 left-0 w-[500px] h-[500px] bg-white/[0.03] rounded-full -translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-secondary/10 rounded-full translate-x-1/3 translate-y-1/3">
        </div>
        <div class="container-custom relative z-10">
            <div>
                <!-- HEADER -->
                <div class="max-w-5xl mx-auto text-center">
                    <span class="inline-flex items-center gap-3 bg-white/10 px-5 py-3 text-white font-semibold">
                        <i class="fa-solid fa-user-doctor text-secondary">
                        </i>
                        Expert Medical Care Starts Here
                    </span>
                    <h2 class="text-white text-2xl md:text-3xl font-bold mt-6 leading-tight">
                        Connect With The Right
                        Specialist Today
                    </h2>
                    <p class="text-white/80 text-lg leading-8 mt-8 max-w-3xl mx-auto">
                        Whether you need a specialist consultation,
                        preventive health advice, travel medicine support,
                        or follow-up care, our experienced medical team
                        is ready to help.
                    </p>
                </div>
                <!-- ACTION CARDS -->
                <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-16">
                    <!-- BOOK -->
                    <div class="bg-white p-8 text-center hover:-translate-y-2 transition-all duration-500">
                        <div class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-6">
                            <i class="fa-solid fa-calendar-check text-primary text-3xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-2xl font-black">
                            Book Appointment
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Schedule your consultation
                            with a trusted specialist.
                        </p>
                        <a href="{{ url('page/bookappointment.html') }}"
                            class="inline-block mt-8 bg-primary text-white px-8 py-3 font-semibold hover:bg-secondary transition">
                            Book Now
                        </a>
                    </div>
                    <!-- FIND DOCTOR -->
                    <div class="bg-white p-8 text-center hover:-translate-y-2 transition-all duration-500">
                        <div class="w-20 h-20 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
                            <i class="fa-solid fa-user-doctor text-secondary text-3xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-2xl font-black">
                            Find Specialist
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Browse our experienced
                            doctors and specialties.
                        </p>
                        <a href="#doctor-search"
                            class="inline-block mt-8 bg-secondary text-white px-8 py-3 font-semibold hover:bg-primary transition">
                            Find Doctor
                        </a>
                    </div>
                    <!-- CONTACT -->
                    <div class="bg-white p-8 text-center hover:-translate-y-2 transition-all duration-500">
                        <div class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-6">
                            <i class="fa-solid fa-headset text-primary text-3xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-2xl font-black">
                            Contact Hospital
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Get assistance regarding
                            doctors and appointments.
                        </p>
                        <a href="{{ url('page/contact.html') }}"
                            class="inline-block mt-8 bg-primary text-white px-8 py-3 font-semibold hover:bg-secondary transition">
                            Contact Us
                        </a>
                    </div>
                    <!-- EMERGENCY -->
                    <div
                        class="bg-white p-8 text-center border-t-4 border-red-500 hover:-translate-y-2 transition-all duration-500">
                        <div class="w-20 h-20 mx-auto bg-red-100 flex items-center justify-center mb-6">
                            <i class="fa-solid fa-truck-medical text-red-600 text-3xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-2xl font-black">
                            Emergency Care
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Immediate medical assistance
                            available 24 hours a day.
                        </p>
                        <a href="tel:{{ $setting->phone }}"
                            class="inline-block mt-8 bg-red-600 text-white px-8 py-3 font-semibold hover:bg-red-700 transition">
                            Call Now
                        </a>
                    </div>
                </div>
                <!-- BOTTOM STATS -->
                {{-- <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-16">
                    <div class="text-center">
                        <h3 class="text-white text-4xl font-black">
                            Expert
                        </h3>
                        <p class="text-white/70 mt-3">
                            Medical Specialists
                        </p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-white text-4xl font-black">
                            Multi
                        </h3>
                        <p class="text-white/70 mt-3">
                            Specialties Covered
                        </p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-white text-4xl font-black">
                            Trusted
                        </h3>
                        <p class="text-white/70 mt-3">
                            Patient Care
                        </p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-white text-4xl font-black">
                            24/7
                        </h3>
                        <p class="text-white/70 mt-3">
                            Emergency Support
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    @php
        $doctorData = $doctors
            ->map(function ($doctor) {
                return [
                    'id' => $doctor->id,
                    'slug' => $doctor->uri,
                    'name' => $doctor->post_title,
                    'department' => $doctor->sub_title,
                    'qualification' => $doctor->post_excerpt,
                    'experience' => $doctor->associated_title,
                    'about' => strip_tags($doctor->post_content),

                    'location' => $doctor->icon,
                    'languages' => 'English, Nepali',
                    'patients' => '5000+',
                    'research' => '12',
                    'education' => [],

                    'image' => !empty($doctor->banner)
                        ? asset('uploads/medium/' . $doctor->banner)
                        : asset('uploads/medium/david-IMsaOobp4lk4Er82hHTKnU9LoaxxMES6SqAyyURl.webp'),
                ];
            })
            ->values();
    @endphp
    <script type="application/json" id="doctorData">
        {!! json_encode($doctorData) !!}
    </script>
@endsection
