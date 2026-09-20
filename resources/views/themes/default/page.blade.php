@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')

    @if ($posts)
        <section class="section-padding bg-slate-50">
            <div class="container-custom space-y-16">
                @foreach ($posts as $post)
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        @if ($loop->iteration % 2 != 0)
                            <div class="order-2 md:order-1">
                                <div class="bg-white border border-slate-200 p-8 shadow-sm">
                                    <h2 class="text-primary text-2xl font-bold mb-4">{{ $post->post_title }}</h2>
                                    <div class="text-slate-600 leading-relaxed text-base md:text-lg prose prose-lg max-w-none">{!! $post->post_content !!}</div>
                                </div>
                            </div>
                            <div class="order-1 md:order-2">
                                <div class="overflow-hidden border border-slate-200 shadow-sm">
                                    <img src="{{ $post->banner ? asset('uploads/medium/' . $post->banner) : asset('themes-assets/img/commit.jpg') }}"
                                        class="w-full h-[350px] object-cover hover:scale-105 transition duration-500"
                                        alt="{{ $post->post_title }}" loading="lazy" />
                                </div>
                            </div>
                        @else
                            <div>
                                <div class="overflow-hidden border border-slate-200 shadow-sm">
                                    <img src="{{ $post->banner ? asset('uploads/medium/' . $post->banner) : asset('themes-assets/img/blog2.webp') }}"
                                        class="w-full h-[350px] object-cover hover:scale-105 transition duration-500"
                                        alt="{{ $post->post_title }}" loading="lazy" />
                                </div>
                            </div>
                            <div>
                                <div class="bg-white border border-slate-200 p-8 shadow-sm">
                                    <h2 class="text-primary text-2xl font-bold mb-4">{{ $post->post_title }}</h2>
                                    <div class="text-slate-600 leading-relaxed text-base md:text-lg prose prose-lg max-w-none">{!! $post->post_content !!}</div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </section>
    @endif
@endsection
