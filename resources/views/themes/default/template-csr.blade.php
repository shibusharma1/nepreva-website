@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')
    @if ($csrhero)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <!-- LEFT CONTENT -->
                    <div>
                        <span class="section-subtitle text-secondary"> {{ $csrhero->sub_title }} </span>
                        <h2 class="section-title mt-3">{{ $csrhero->post_title }}</h2>
                        <p class="mt-4 text-slate-600 leading-relaxed text-base text-justify md:text-lg">
                            {{ $csrhero->post_excerpt }}</p>
                        <p class="mt-4 text-slate-600 leading-relaxed text-base text-justify md:text-lg">
                            {{ trim($csrhero->post_content) }}</p>
                    </div>
                    <!-- RIGHT CONTENT -->
                    <div class="relative">
                        <!-- MAIN IMAGE -->
                        <img src="{{ !empty($csrhero->banner) ? asset('uploads/medium/' . $csrhero->banner) : asset('uploads/medium/default.webp') }}"
                            alt="{{ $csrhero->post_title }}"
                            class="w-full h-[380px] md:h-[420px] object-cover border border-slate-200 shadow-lg" />
                        <!-- TOP BADGE -->
                        <div class="absolute top-6 right-6 bg-primary text-white px-4 py-3 shadow-lg text-center">
                            <div class="text-2xl md:text-3xl font-bold">42+</div>
                            <div class="text-[11px] uppercase tracking-wider text-white/80">Years of Impact</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if ($csrfeaturedheading)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">
                <!-- HEADING -->
                <div class="text-center max-w-4xl mx-auto mb-12">
                    <span class="section-subtitle"> {{ $csrfeaturedheading->sub_title }} </span>
                    <h2 class="section-title">{{ $csrfeaturedheading->post_title }}</h2>
                    <p class="text-slate-600 mt-4 leading-relaxed">{{ $csrfeaturedheading->post_excerpt }}</p>
                </div>
                <!-- PROGRAMS -->
                <div class="grid lg:grid-cols-2 gap-8">
                    @foreach ($csrfeatured as $csrItem)
                        <div
                            class="group bg-[#fdfdfd] border border-slate-200 hover:border-secondary hover:shadow-xl transition-all duration-500 overflow-hidden">
                            <div class="grid md:grid-cols-2">
                                <div class="overflow-hidden">
                                    <img src="{{ !empty($csrItem->banner) ? asset('uploads/medium/' . $csrItem->banner) : asset('uploads/medium/default.webp') }}"
                                        alt="{{ $csrItem->post_title }}"
                                        class="w-full h-full min-h-[240px] object-cover transition-all duration-500 group-hover:scale-105" />
                                </div>
                                <div class="p-6 md:p-8 flex flex-col justify-between">
                                    <div>
                                        <div
                                            class="w-12 h-12 {{ $loop->odd ? 'bg-primary/10' : 'bg-secondary/10' }} flex items-center justify-center mb-4">
                                            <i
                                                class="{{ $csrItem->associated_title }} {{ $loop->odd ? 'text-primary' : 'text-secondary' }} text-lg"></i>
                                        </div>
                                        <h3 class="text-primary text-xl font-bold">{{ $csrItem->post_title }}</h3>
                                        <p class="text-slate-600 text-sm mt-3 leading-relaxed">
                                            {{ trim($csrItem->post_content) }}</p>
                                    </div>
                                    <div class="mt-5 pt-4 border-t border-slate-100">
                                        <span class="inline-flex items-center gap-2 text-secondary font-semibold text-sm">
                                            <i class="{{ $csrItem->sub_title }} text-xs"></i>
                                            {{ $csrItem->post_excerpt }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if ($featuredstory)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">
                <!-- FEATURED STORY -->
                <div class="bg-primary overflow-hidden">
                    <div class="grid lg:grid-cols-12 items-center">
                        <!-- IMAGE -->
                        <div class="lg:col-span-5">
                            <img src="{{ !empty($featuredstory->banner) ? asset('uploads/medium/' . $featuredstory->banner) : asset('themes-assets/img/ciwec.webp') }}"
                                alt="{{ $featuredstory->post_title }}" class="w-full h-full min-h-[380px] object-cover" />
                        </div>
                        <!-- CONTENT -->
                        <div class="lg:col-span-7 p-8 lg:p-12">
                            <span class="text-white text-xs font-bold uppercase tracking-[2px]">
                                {{ $featuredstory->sub_title }}
                            </span>
                            <h3 class="text-white text-2xl md:text-3xl font-bold mt-3">{{ $featuredstory->post_title }}
                            </h3>
                            <p class="text-white/85 mt-4 leading-relaxed text-sm md:text-base">
                                {{ trim($featuredstory->post_excerpt) }}</p>
                            <p class="text-white/80 mt-3 leading-relaxed text-sm md:text-base">
                                {{ trim($featuredstory->post_content) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
