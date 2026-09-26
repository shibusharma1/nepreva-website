@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
@php
    // dd($data_child);
@endphp
    @include('themes.default.common.herobanner')
    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto text-center mb-8">
                <span class="section-subtitle">
                   {{ $data_child[0]->sub_title }}
                </span>
                <h2 class="section-title">
                  {{ $data_child[0]->post_title }}
                </h2>
                <p class="text-slate-600 text-base md:text-lg mt-6 leading-relaxed">
                    {!! $data_child[0]->post_excerpt !!}
                </p>
            </div>
            <div id="doctor-search" class="bg-[#fdfdfd] border border-slate-200 p-6 lg:p-8 shadow-sm">
                <div class="grid lg:grid-cols-12 gap-5">
                    <div class="lg:col-span-5">
                        <label class="block text-sm font-semibold text-primary mb-2">
                            Search Doctor
                        </label>
                        <div class="relative">
                            <input type="text" id="doctorSearch" placeholder="Search by doctor name..." class="w-full h-14 border border-slate-300 pl-14 pr-5 focus:border-secondary outline-none transition">
                            <i class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        </div>
                    </div>
                    <div class="lg:col-span-3">
                        <label class="block text-sm font-semibold text-primary mb-2">
                            Department
                        </label>
                        <select id="departmentFilter" class="w-full h-14 border border-slate-300 px-4 focus:border-secondary outline-none">
                            <option value="">
                                All Departments
                            </option>
                        </select>
                    </div>
                    <div class="lg:col-span-2">
                        <label class="block text-sm font-semibold text-primary mb-2">
                            Location
                        </label>
                        <select id="locationFilter" class="w-full h-14 border border-slate-300 px-4 focus:border-secondary outline-none">
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
                        <button id="resetFilters" class="w-full h-14 bg-primary text-white font-semibold hover:bg-secondary transition">
                            Reset
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center justify-between gap-4 my-6">
                <div>
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
    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="section-subtitle">
                     {{ $data_child[1]->sub_title }}
                </span>
                <h2 class="section-title">
                    {{ $data_child[1]->post_title }}
                </h2>
                <p class="text-slate-600 text-base md:text-lg mt-6 leading-relaxed">
                     {!! $data_child[1]->post_excerpt !!}
                </p>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">
                @foreach ($specialities as $speciality)
                    <div class="group bg-[#fdfdfd] border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                        <div class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-6">
                            <i class="{{ $speciality->associated_title }} text-primary hover:text-secondary text-3xl"></i>
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
            <div class="bg-primary/95 mt-12 overflow-hidden">
                <div class="grid lg:grid-cols-12 items-center">
                    <div class="lg:col-span-8 p-10 lg:p-14">
                        <span class="text-white font-bold uppercase tracking-[3px]">
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
                        <img src="{{ asset('uploads/medium/' . $expertcare->banner) }}" alt="{{ $expertcare->post_title }}" class="w-full h-[300px] object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php
        $doctorData = $doctors->map(function ($doctor) {
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

                    'image' => !empty($doctor->banner) ? asset('uploads/medium/' . $doctor->banner) : asset('uploads/medium/david-IMsaOobp4lk4Er82hHTKnU9LoaxxMES6SqAyyURl.webp'),
                ];
            })->values();
    @endphp
    <script type="application/json" id="doctorData">
        {!! json_encode($doctorData) !!}
    </script>
@endsection
