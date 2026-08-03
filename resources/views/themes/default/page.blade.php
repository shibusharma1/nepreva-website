@extends('themes.default.common.master') @section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description) @section('content')
<section class="relative h-[320px] md:h-[420px] overflow-hidden">
    <img src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('themes-assets/img/company.jpg') }}"
        class="w-full h-full object-cover" loading="lazy" alt="{{ $data->post_type }}" />
    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
        <div class="text-center text-white px-5">
            <div class="text-sm md:text-base mb-3">
                <a href="{{ url('/') }}" class="hover:text-green-400"> HOME </a>
                <span class="mx-2">/</span>
                {{ $data->post_type }}
            </div>
            <h1 class="text-3xl md:text-5xl font-bold">{{ $data->uid }}</h1>
        </div>
    </div>
</section>
@if ($posts)
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 space-y-16">
            @foreach ($posts as $post)
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    @if ($loop->iteration % 2 != 0)
                        <div class="order-2 md:order-1">
                            <div class="bg-gray-50 rounded-2xl p-8 shadow-sm">
                                <h2 class="text-2xl font-bold text-green-700 mb-4">{{ $post->post_title }}</h2>
                                <div class="text-gray-600 leading-relaxed prose max-w-none">{!! $post->post_content !!}
                                </div>
                            </div>
                        </div>
                        <div class="order-1 md:order-2">
                            <div class="overflow-hidden rounded-2xl shadow-md">
                                <img src="{{ $post->banner ? asset('uploads/medium/' . $post->banner) : asset('themes-assets/img/commit.jpg') }}"
                                    class="w-full h-[350px] object-cover hover:scale-105 transition duration-500"
                                    alt="{{ $post->post_title }}" loading="lazy" />
                            </div>
                        </div>
                    @else
                        <div>
                            <div class="overflow-hidden rounded-2xl shadow-md">
                                <img src="{{ $post->banner ? asset('uploads/medium/' . $post->banner) : asset('themes-assets/img/blog2.webp') }}"
                                    class="w-full h-[350px] object-cover hover:scale-105 transition duration-500"
                                    alt="{{ $post->post_title }}" loading="lazy" />
                            </div>
                        </div>
                        <div>
                            <div class="bg-gray-50 rounded-2xl p-8 shadow-sm">
                                <h2 class="text-2xl font-bold text-green-700 mb-4">{{ $post->post_title }}</h2>
                                <div class="text-gray-600 leading-relaxed prose max-w-none">{!! $post->post_content !!}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </section>
@endif @endsection
