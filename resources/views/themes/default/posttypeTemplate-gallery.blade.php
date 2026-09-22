@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')
    <section class="section-padding bg-slate-50">
        <!-- Heading -->
        <div class="container-custom">
            <div class="max-w-4xl mx-auto text-center">
                <span class="section-subtitle">
                    Explore CIWEC
                </span>
                <h2 class="section-title">
                    Moments That Define Our Journey
                </h2>
                <p class="mt-6 text-slate-600 leading-8">
                    Explore photographs and videos showcasing
                    our healthcare services, medical professionals,
                    events, facilities and milestones throughout
                    CIWEC's history.
                </p>
            </div>
        </div>
        <!-- Filters -->
        <div class="container-custom mt-8">
            <div class="flex flex-wrap justify-center gap-3">
                <!-- All -->
                <button class="gallery-filter active" data-filter="all">
                    All
                </button>
                <!-- Dynamic Categories -->
                @foreach ($categories as $category)
                    <button class="gallery-filter" data-filter="{{ Str::slug($category->caption) }}">
                        {{ $category->category }}
                    </button>
                @endforeach
            </div>
        </div>
        <!-- Gallery -->
        <div class="container-custom mt-8">
            <div id="galleryGrid" class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                @forelse ($galleries as $key => $gallery)
                    <div class="gallery-item group relative cursor-pointer overflow-hidden border border-slate-200 {{ Str::slug($gallery->category->caption) }}">
                        <img loading="lazy" decoding="async" src="{{ asset('uploads/galleries/' . $gallery->picture) }}"
                            alt="{{ $gallery->caption ?? 'CIWEC Gallery' }}" class="w-full h-[300px] object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white">
                            <div class="w-12 h-12 bg-[#fdfdfd] text-primary flex items-center justify-center shadow-lg transition-transform duration-300 group-hover:scale-110">
                                <i class="fa-solid fa-magnifying-glass-plus text-lg"></i>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="md:col-span-2 xl:col-span-4">
                        <div id="gallery-empty-state">
                            <div class="bg-slate-100 border border-slate-200 py-16 px-8 text-center">
                                <div class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
                                    <i class="fa-solid fa-images text-primary text-3xl"></i>
                                </div>
                                <h3 class="text-primary text-2xl font-black mb-3">
                                    No Images Available
                                </h3>
                                <p class="text-slate-600 max-w-lg mx-auto leading-7">
                                    There are currently no images available in this category.
                                    Please explore other gallery sections or check back later.
                                </p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <div class="text-center mb-12">
                <span class="section-subtitle">
                    Video Gallery
                </span>
                <h2 class="section-title">
                    Stories In Motion
                </h2>
                <p class="max-w-3xl mx-auto text-slate-600 mt-6 leading-8">
                    Explore videos highlighting CIWEC's healthcare
                    services, community initiatives, medical expertise
                    and memorable moments throughout our journey.
                </p>
            </div>
            {{-- Videos --}}
            <div id="videoGrid" class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
                @forelse($videos as $video)
                    <div class="video-item {{ Str::slug($video->category->caption) }}">
                        <div
                            class="group bg-[#fdfdfd] border border-slate-200 overflow-hidden hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                            <div class="relative overflow-hidden">
                                <img src="{{ $video->thumbnail }}"
                                    class="w-full h-[260px] object-cover transition-all duration-700 group-hover:scale-110"
                                    alt="{{ $video->title }}">
                                <div class="absolute inset-0 bg-primary/20 group-hover:bg-primary/30 transition-all">
                                </div>
                                <button class="videoBtn absolute inset-0 flex items-center justify-center"
                                    data-video="{{ $video->embed_url }}">
                                    <div
                                        class="w-20 h-20 rounded-full bg-[#fdfdfd] text-primary flex items-center justify-center shadow-2xl">
                                        <i class="fa-solid fa-play text-xl ml-1"></i>
                                    </div>
                                </button>
                            </div>
                            <div class="p-6">
                                <span class="text-secondary font-bold text-sm">
                                    {{ $video->category->category }}
                                </span>
                                <h3 class="text-primary text-xl font-black mt-3">
                                    {{ $video->title }}
                                </h3>
                                <p class="text-slate-600 mt-4 leading-7">
                                    {{ $video->caption }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div class="bg-[#fdfdfd] py-20 text-center">
                            <i class="fa-solid fa-video text-5xl text-primary"></i>
                            <h3 class="text-2xl font-bold mt-6">
                                No Videos Available
                            </h3>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <div id="videoModal" class="fixed inset-0 z-[9999] hidden">
        <div id="videoOverlay" class="absolute inset-0 bg-black/90">
        </div>
        <div class="relative
        flex
        items-center
        justify-center
        h-screen
        p-4">
            <button id="closeVideo"
                class="absolute
            top-6
            right-6
            text-white
            text-3xl
            z-10">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="w-full
            max-w-6xl
            aspect-video">
                <iframe id="videoFrame" class="w-full h-full" src="" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    @include('themes.default.common.gallerymodal')
@endsection
