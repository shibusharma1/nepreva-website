@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')
    {{-- @php
        $serviceTitle = $data->post_title;
        $serviceSubtitle = $data->sub_title;
        $serviceImage = $data->banner ? asset('uploads/medium/' . $data->banner) : asset('assets/img/no-image.jpg');
        $parentTitle = $data_child->post_title ?? 'Services';
        $parentUri = $data_child->uri ?? 'services';
    @endphp --}}
    <section class="bg-slate-100 py-8 md:py-10 xl:py-12">
        <div class="container-custom">

            <!-- Breadcrumb -->
            <nav aria-label="Breadcrumb" class="mb-6 text-sm text-slate-500">
                <ol class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="/" class="transition hover:text-secondary">
                            Home
                        </a>
                    </li>

                    <li aria-hidden="true">/</li>

                    <li>
                        <a href="/services.html" class="transition hover:text-secondary">
                            Services
                        </a>
                    </li>

                    <li aria-hidden="true">/</li>

                    <li class="font-medium text-primary" aria-current="page">
                        General Consultation
                    </li>
                </ol>
            </nav>

            <!-- Main service panel -->
            <div class="grid overflow-hidden border border-slate-200 bg-white lg:grid-cols-12">

                <!-- Service image -->
                <div class="relative lg:col-span-5">
                    <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?auto=format&fit=crop&w=1200&q=80"
                        alt="Hospital medical consultation"
                        class="h-64 w-full object-cover sm:h-80 lg:h-full lg:min-h-[420px]">
                </div>

                <!-- Service introduction -->
                <div class="flex items-center lg:col-span-7">
                    <div class="w-full p-5 sm:p-7 lg:p-10">

                        <span
                            class="mb-3 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.16em] text-secondary">
                            <span class="h-1.5 w-1.5 bg-secondary"></span>
                            Healthcare Service
                        </span>

                        <h1 class="text-[clamp(1.75rem,3vw,2.75rem)] font-bold leading-tight text-primary">
                            General Consultation
                        </h1>

                        <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-600 sm:text-base sm:leading-8">
                            Our general consultation service provides comprehensive medical
                            assessment, diagnosis, treatment guidance, and preventive healthcare
                            support for patients of all ages.
                        </p>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="/page/bookappointment.html" class="btn-primary inline-flex items-center gap-2">
                                Book an Appointment
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>

                            <a href="/page/contact.html"
                                class="inline-flex items-center gap-2 border border-slate-300 px-5 py-3 text-sm font-semibold text-primary transition hover:border-secondary hover:text-secondary">
                                Make an Inquiry
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Detailed content -->
            <div class="mt-6 border border-slate-200 bg-white p-5 sm:p-7 lg:p-10">
                <div class="service-detail-content">

                    <h2 class="text-2xl font-bold text-primary">
                        Comprehensive Medical Care
                    </h2>

                    <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base sm:leading-8">
                        Our general consultation service is designed to provide patients
                        with accessible and personalized medical care. Our healthcare
                        professionals assess your symptoms, review your medical history,
                        and recommend an appropriate course of treatment.
                    </p>

                    <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base sm:leading-8">
                        Whether you require a routine health assessment, advice regarding
                        an ongoing health concern, or referral to a specialist, our team
                        is available to guide you through the appropriate next steps.
                    </p>

                    <h3 class="mt-8 text-xl font-bold text-primary">
                        What We Provide
                    </h3>

                    <ul class="mt-4 space-y-3 text-sm leading-7 text-slate-600 sm:text-base">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check mt-1 text-secondary"></i>
                            <span>General health assessment and consultation</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check mt-1 text-secondary"></i>
                            <span>Diagnosis and treatment guidance</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check mt-1 text-secondary"></i>
                            <span>Preventive healthcare consultation</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check mt-1 text-secondary"></i>
                            <span>Routine health check-ups</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check mt-1 text-secondary"></i>
                            <span>Specialist referral when required</span>
                        </li>
                    </ul>

                </div>
            </div>

            <!-- Documents -->
            <div class="mt-6 border border-slate-200 bg-white p-5 sm:p-7">

                <h2 class="text-lg font-bold text-primary">
                    Related Documents
                </h2>

                <div class="mt-4 divide-y divide-slate-200">

                    <div class="flex flex-wrap items-center justify-between gap-3 py-3">
                        <span class="text-sm font-medium text-slate-700">
                            Patient Information Guide
                        </span>

                        <a href="#" target="_blank" rel="noopener"
                            class="inline-flex items-center gap-2 text-sm font-semibold text-primary hover:text-secondary">
                            View document
                            <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                        </a>
                    </div>

                    <div class="flex flex-wrap items-center justify-between gap-3 py-3">
                        <span class="text-sm font-medium text-slate-700">
                            Appointment Information
                        </span>

                        <a href="#" target="_blank" rel="noopener"
                            class="inline-flex items-center gap-2 text-sm font-semibold text-primary hover:text-secondary">
                            View document
                            <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Back to services -->
            <div class="mt-6">
                <a href="{{ url('/') }}"
                    class="inline-flex items-center gap-2 text-sm font-semibold text-primary transition hover:text-secondary">
                    <i class="fa-solid fa-arrow-left text-xs"></i>
                    Back to Services
                </a>
            </div>

        </div>
    </section>
@endsection
