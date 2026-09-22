@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')

    @if ($historyheading)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">

                <!-- HEADING -->
                <div class="text-center max-w-4xl mx-auto mb-12">

                    <span class="section-subtitle">
                        {{ $historyheading->sub_title }}
                    </span>

                    <h2 class="section-title">
                        {{ $historyheading->post_title }}
                    </h2>

                    <p class="max-w-3xl mx-auto text-base md:text-lg text-slate-600 mt-4 leading-relaxed">
                        {{ $historyheading->post_excerpt }}
                    </p>

                </div>

                <!-- JOURNEY -->
                <div class="space-y-6">

                    @foreach ($history as $historyItem)
                        <div class="grid lg:grid-cols-2 gap-10 lg:gap-12 items-center">

                            <!-- CONTENT -->
                            <div class="{{ $loop->even ? 'lg:order-2' : '' }}">

                                <div class="inline-flex items-center {{ $loop->odd ? 'bg-primary' : 'bg-secondary' }} text-white px-4 py-1.5 text-xs font-bold uppercase tracking-[2px] mb-4">
                                    {{ $historyItem->sub_title }}
                                </div>

                                <h3 class="text-primary text-xl md:text-2xl font-bold mb-4">
                                    {{ $historyItem->post_title }}
                                </h3>

                                <p class="text-slate-600 leading-relaxed text-base md:text-lg">
                                    {{ $historyItem->post_excerpt }}
                                </p>

                            </div>

                            <!-- IMAGE -->
                            <div class="{{ $loop->even ? 'lg:order-1' : '' }}">

                                <img src="{{ !empty($historyItem->banner)
                                    ? asset('uploads/medium/' . $historyItem->banner)
                                    : asset('uploads/medium/default.webp') }}"
                                    alt="{{ $historyItem->post_title }}"
                                    class="w-full h-[280px] md:h-[340px] object-cover border border-slate-200 shadow-md">

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>
        </section>
    @endif

    @if ($historicalgalleryheading)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">

                <!-- HEADING -->
                <div class="text-center max-w-4xl mx-auto mb-12">

                    <span class="section-subtitle">
                        {{ $historicalgalleryheading->sub_title }}
                    </span>

                    <h2 class="section-title">
                        {{ $historicalgalleryheading->post_title }}
                    </h2>

                    <p class="max-w-3xl mx-auto text-base md:text-lg text-slate-600 mt-4 leading-relaxed">
                        {{ $historicalgalleryheading->post_excerpt }}
                    </p>

                </div>

                <!-- GALLERY -->
                <div id="historyGalleryGrid" class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">

                    @foreach ($historicalgallery as $galleryItem)
                        @php
                            $isLargeGalleryItem = in_array($loop->iteration, [3, 4]);
                            $imgSrc = !empty($galleryItem->banner)
                                ? asset('uploads/medium/' . $galleryItem->banner)
                                : asset('uploads/medium/default.webp');
                        @endphp

                        <div
                            class="history-gallery-item group relative overflow-hidden h-[300px] {{ $isLargeGalleryItem ? 'md:col-span-2' : '' }} border border-slate-200 cursor-pointer"
                            data-src="{{ $imgSrc }}"
                            data-title="{{ $galleryItem->post_title }}"
                            data-subtitle="{{ $galleryItem->sub_title }}"
                            data-description="{{ $galleryItem->post_excerpt }}">

                            <img src="{{ $imgSrc }}"
                                alt="{{ $galleryItem->post_title }}"
                                class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent group-hover:from-black/80 transition-all">
                            </div>

                            <div class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/10 backdrop-blur-sm text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="fa-solid fa-magnifying-glass-plus text-sm"></i>
                            </div>

                            <div class="absolute bottom-0 left-0 {{ $isLargeGalleryItem ? 'p-8' : 'p-6' }}">

                                <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                                    {{ $galleryItem->sub_title }}
                                </span>

                                <h3 class="text-white font-bold {{ $isLargeGalleryItem ? 'text-2xl' : 'text-lg' }} mt-2">
                                    {{ $galleryItem->post_title }}
                                </h3>

                                @if ($isLargeGalleryItem && !empty($galleryItem->post_excerpt))
                                    <p class="text-white/80 mt-3 text-sm md:text-base leading-relaxed max-w-xl line-clamp-2">
                                        {{ $galleryItem->post_excerpt }}
                                    </p>
                                @endif

                            </div>

                        </div>
                    @endforeach

                </div>

                <!-- QUOTE -->
                <div class="mt-14 bg-slate-50 border-l-4 border-secondary p-8 md:p-10 max-w-4xl mx-auto shadow-sm">

                    <p class="text-lg md:text-xl italic text-slate-700 leading-relaxed text-center">
                        "Every photograph tells a story of dedication,
                        innovation and our unwavering commitment to
                        providing exceptional healthcare services."
                    </p>

                </div>

            </div>
        </section>
    @endif

    <section class="section-padding relative overflow-hidden bg-gradient-primary">
        <!-- DECORATION -->
        <div class="absolute top-0 left-0 w-[400px] h-[400px] bg-white/[0.03] rounded-full -translate-x-1/2 -translate-y-1/2">
        </div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-secondary/[0.08] rounded-full translate-x-1/3 translate-y-1/3">
        </div>
        <div class="container-custom relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <!-- SUBTITLE -->
                {{-- <span class="section-label">
                    <span class="w-1.5 h-1.5 bg-secondary"></span> 
                    Continuing The Journey
                </span> --}}
                <!-- TITLE -->
                <h2 class="text-white text-2xl md:text-3xl font-bold leading-tight mt-2">
                    Building On More Than Four Decades Of Excellence
                </h2>
                <!-- TEXT -->
                <p class="max-w-3xl mx-auto text-white/80 text-base md:text-lg leading-relaxed mt-4">
                    Our history is built on trust, innovation,
                    compassion and clinical excellence.
                    As we move forward, CIWEC Hospital remains
                    committed to delivering world-class healthcare
                    for future generations.
                </p>
                <!-- CTA BUTTONS -->
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="{{ url('page/bookappointment.html') }}" class="btn-outline text-white">
                        Book Appointment
                    </a>
                    <a href="{{ url('doctors-at-ciwec.html') }}" class="btn-secondary">
                        Find A Doctor
                    </a>
                </div>

            </div>
        </div>
    </section>

    @if ($foundersheading)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">

                <div class="text-center max-w-4xl mx-auto mb-12">

                    <span class="section-subtitle">
                        {{ $foundersheading->sub_title }}
                    </span>

                    <h2 class="section-title">
                        {{ $foundersheading->post_title }}
                    </h2>

                    <p class="max-w-3xl mx-auto text-base md:text-lg text-slate-600 mt-4 leading-relaxed">
                        {{ $foundersheading->post_excerpt }}
                    </p>

                </div>

                <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">

                    @foreach ($founders as $founder)
                        <!-- PERSON -->
                        <div class="bg-white border border-slate-200 text-center overflow-hidden hover:border-secondary hover:-translate-y-2 transition-all duration-500">

                            <img src="{{ !empty($founder->banner)
                                ? asset('uploads/medium/' . $founder->banner)
                                : asset('uploads/medium/default.webp') }}"
                                alt="{{ $founder->post_title }}" class="w-full h-[280px] object-cover">

                            <div class="p-6">

                                <h3 class="text-primary font-bold text-lg">
                                    {{ $founder->post_title }}
                                </h3>

                                <p class="text-secondary font-semibold text-xs uppercase tracking-[1px] mt-1">
                                    {{ $founder->sub_title }}
                                </p>

                                <p class="text-slate-600 text-sm md:text-base mt-3 leading-relaxed">
                                    {{ $founder->post_excerpt }}
                                </p>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>
        </section>
    @endif

    @include('themes.default.common.gallerymodal')
@endsection
