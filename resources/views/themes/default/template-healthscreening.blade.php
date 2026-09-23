@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    @include('themes.default.common.herobanner')
    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADING -->
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="section-subtitle">
                    Featured Resources
                </span>
                <h2 class="section-title">
                    Essential Health Guides
                </h2>
                <p class="text-slate-600 text-base md:text-lg mt-4 leading-relaxed">
                    Explore some of our most frequently accessed health
                    information resources, prepared by CIWEC's medical
                    professionals to help you stay informed and healthy.
                </p>
            </div>
            @if ($healthguide->count())

                @php
                    $featuredGuide = $healthguide->first();
                    $otherGuides = $healthguide->skip(1);
                @endphp


                <!-- FEATURED GUIDE -->
                <div class="bg-[#fdfdfd] border border-slate-200 overflow-hidden">

                    <div class="grid lg:grid-cols-12 items-center">

                        <!-- IMAGE -->
                        <div class="lg:col-span-5 relative">

                            <img src="{{ !empty($featuredGuide->banner)
                                ? asset('uploads/medium/' . $featuredGuide->banner)
                                : asset('uploads/medium/default.webp') }}"
                                alt="{{ $featuredGuide->post_title }}" class="w-full h-full min-h-[420px] object-cover">

                            <div class="absolute top-6 left-6">
                                <span class="bg-secondary text-white px-4 py-2 text-xs font-semibold uppercase">
                                    Most Popular Guide
                                </span>
                            </div>

                        </div>


                        <!-- CONTENT -->
                        <div class="lg:col-span-7 p-8 lg:p-10">


                            <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                                {{ $featuredGuide->sub_title }}
                            </span>


                            <h3 class="text-primary text-xl md:text-2xl font-bold mt-2 leading-tight">
                                {{ $featuredGuide->post_title }}
                            </h3>


                            <p class="text-slate-600 text-base md:text-lg mt-4 leading-relaxed">
                                {{ strip_tags($featuredGuide->post_excerpt ?? $featuredGuide->post_content) }}
                            </p>


                            {{-- Features from content --}}
                            @php
                                $features = preg_split('/\r\n|\r|\n/', trim($featuredGuide->post_content));
                            @endphp


                            @if (count($features))

                                <div class="grid md:grid-cols-2 gap-4 mt-6">

                                    @foreach ($features as $feature)
                                        @if (trim($feature))
                                            <div class="flex items-center gap-3 text-sm">

                                                <i class="fa-solid fa-circle-check text-secondary"></i>

                                                <span>
                                                    {{ trim($feature) }}
                                                </span>

                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                            @php
                                $featuredDocument = $featuredGuide->documents->first();
                            @endphp
                            <div class="flex flex-wrap gap-4 mt-8">
                                @if ($featuredDocument)
                                    <a href="{{ asset('uploads/doc/' . $featuredDocument->document) }}" target="_blank"
                                        class="btn-primary text-sm">
                                        Read Full Guide
                                    </a>
                                    <a href="{{ asset('uploads/doc/' . $featuredDocument->document) }}" download
                                        class="btn-secondary text-sm">
                                        Download PDF
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @if ($otherGuides->count())

                    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mt-12">


                        @foreach ($otherGuides as $guide)
                            <article
                                class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500">

                                <img src="{{ !empty($guide->banner) ? asset('uploads/medium/' . $guide->banner) : asset('uploads/medium/default.webp') }}"
                                    alt="{{ $guide->post_title }}" class="w-full h-52 object-cover">


                                <div class="p-6">

                                    <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                                        {{ $guide->sub_title }}
                                    </span>


                                    <h3 class="text-primary text-lg font-bold mt-2">
                                        {{ $guide->post_title }}
                                    </h3>


                                    <p class="text-slate-600 mt-3 text-sm md:text-base leading-relaxed">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($guide->post_excerpt ?? $guide->post_content), 150) }}
                                    </p>


                                    @php
                                        $document = $guide->documents->first();
                                    @endphp


                                    @if ($document)
                                        <a href="{{ asset('uploads/doc/' . $document->document) }}" target="_blank"
                                            class="inline-flex items-center gap-2 text-primary hover:text-secondary font-semibold text-sm mt-5">
                                            Read Guide

                                            <i class="fa-solid fa-arrow-right text-xs"></i>

                                        </a>
                                    @endif

                                </div>

                            </article>
                        @endforeach


                    </div>

                @endif
            @endif
        </div>
    </section>

    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="section-subtitle">
                    Travel Medicine Expertise
                </span>
                <h2 class="section-title">
                    CIWEC Travel Health Center
                </h2>
                <p class="text-slate-600 text-base md:text-lg mt-4 leading-relaxed">
                    Whether you're trekking in the Himalayas,
                    exploring Nepal or travelling internationally,
                    our travel health resources help you prepare,
                    stay healthy and travel safely.
                </p>
            </div>
            <!-- MAIN FEATURE -->
            <div class="bg-primary overflow-hidden">
                <div class="grid lg:grid-cols-12 items-center">
                    <div class="lg:col-span-7 p-8 lg:p-12">

                        @php
                            $travelguidecontent = preg_split('/\r\n|\r|\n/', trim($travelguide->post_content));
                        @endphp

                        <span class="text-secondary font-semibold uppercase tracking-[3px] text-xs">
                            {{ $travelguide->sub_title }}
                        </span>
                        <h3 class="text-white text-xl md:text-2xl font-bold mt-3">
                            {{ $travelguide->post_title }}
                        </h3>
                        <p class="text-white/80 mt-4 leading-relaxed text-base md:text-lg">
                            {!! $travelguide->post_excerpt !!}
                        </p>

                        @if (count($travelguidecontent))

                            <div class="grid md:grid-cols-2 gap-4 mt-6">

                                @foreach ($travelguidecontent as $feature)
                                    @if (trim($feature))
                                        <div class="flex items-center gap-3 text-sm">

                                            <i class="fa-solid fa-circle-check text-secondary"></i>

                                            <span class="text-white">
                                                {{ trim($feature) }}
                                            </span>

                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endif

                        @php
                            $travelguidedoc = $travelguide->documents->first();
                        @endphp
                        <div class="flex flex-wrap gap-4 mt-8">
                            @if ($travelguidedoc)
                                <a href="{{ asset('uploads/doc/' . $travelguidedoc->document) }}" target="_blank"
                                    class="btn-primary text-sm">
                                    Read Full Guide
                                </a>
                                <a href="{{ asset('uploads/doc/' . $travelguidedoc->document) }}" download
                                    class="btn-secondary text-sm">
                                    Download PDF
                                </a>
                            @endif
                        </div>


                    </div>
                    <div class="lg:col-span-5">
                        <img src="{{ !empty($travelguide->banner)
                            ? asset('uploads/medium/' . $travelguide->banner)
                            : asset('uploads/medium/default.webp') }}"
                            alt="{{ $travelguide->post_title }}" class="w-full h-full min-h-[380px] object-cover">
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-4 gap-6 mt-16">
                <div class="bg-slate-100 border border-slate-200 p-6 text-center">
                    <h3 class="text-primary text-2xl md:text-3xl font-bold">
                        40+
                    </h3>
                    <p class="text-slate-600 mt-2 text-sm">
                        Years Experience
                    </p>
                </div>
                <div class="bg-slate-100 border border-slate-200 p-6 text-center">
                    <h3 class="text-primary text-2xl md:text-3xl font-bold">
                        Global
                    </h3>
                    <p class="text-slate-600 mt-2 text-sm">
                        Travel Expertise
                    </p>
                </div>
                <div class="bg-slate-100 border border-slate-200 p-6 text-center">
                    <h3 class="text-primary text-2xl md:text-3xl font-bold">
                        Trusted
                    </h3>
                    <p class="text-slate-600 mt-2 text-sm">
                        Medical Guidance
                    </p>
                </div>
                <div class="bg-slate-100 border border-slate-200 p-6 text-center">
                    <h3 class="text-primary text-2xl md:text-3xl font-bold">
                        24/7
                    </h3>
                    <p class="text-slate-600 mt-2 text-sm">
                        Patient Support
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-slate-200">
        <div class="container-custom">
            <div class="text-center mb-10">
                <span class="section-subtitle">
                    Frequently Asked Questions
                </span>
                <h2 class="section-title">
                    Health Screening FAQs
                </h2>
            </div>
            <div class="max-w-4xl mx-auto space-y-4">

                @foreach ($faq as $index => $item)
                    <div class="faq-item {{ $index === 0 ? 'active' : '' }}">

                        <button
                            class="faq-btn w-full flex items-center justify-between bg-white border border-slate-200 px-6 py-4 text-left">

                            <span class="text-primary font-bold text-base md:text-lg">
                                {{ $item->post_title }}
                            </span>


                            <i
                                class="faq-icon fa-solid {{ $index === 0 ? 'fa-minus' : 'fa-plus' }} text-secondary transition-all duration-300"></i>

                        </button>


                        <div class="faq-content {{ $index === 0 ? '' : 'hidden' }}">

                            <div class="px-6 pb-5 pt-3 text-slate-600 bg-slate-50 text-sm md:text-base leading-relaxed">

                                {!! nl2br(e($item->post_excerpt)) !!}

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

            <!-- HELP BOX -->
            <div class="bg-primary text-center p-8 md:p-10 mt-14 max-w-4xl mx-auto">
                <h3 class="text-white text-xl md:text-2xl font-bold">
                    Still Have Questions?
                </h3>
                <p class="text-white/80 mt-3 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
                    Our healthcare professionals are available
                    to guide you with personalized health screening recommendations.
                </p>
                <a href="{{ url('page/contact.html') }}" class="btn-secondary mt-6">
                    Contact Our Team
                </a>
            </div>

        </div>
    </section>
@endsection
