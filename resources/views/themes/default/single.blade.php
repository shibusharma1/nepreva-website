@extends('themes.default.common.master') @section('title', $data->post_title) @section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description) @section('thumbnail', $data->page_thumbnail)
@section('content')
    <section class="relative h-[420px] overflow-hidden">
        <img src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('themes-assets/img/commit/img4.jpg') }}"
            alt="{{ $data->post_title }}" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-primary/70"></div>
        <div class="relative container-custom h-full flex items-center justify-center text-center">
            <div class="max-w-4xl">
                <h1 class="text-5xl lg:text-6xl font-black text-white mt-5">{{ $data->post_title }}</h1>
            </div>
        </div>
    </section>
    <section class="section-padding bg-white">
        <div class="container-custom">
            <div class="grid lg:grid-cols-12 gap-14">
                <div class="lg:col-span-8">
                    <img src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('themes-assets/img/blog1.png') }}"
                        class="w-full h-[500px] object-cover rounded-xl" alt="{{ $data->post_title }}" />
                    <div class="flex flex-wrap gap-8 mt-8 text-sm font-semibold uppercase tracking-wide">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-user text-secondary"></i>
                            <span>{{ $data->associated_title }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-calendar text-secondary"></i>
                            <span>{{ $data->created_at->format('d F, Y') }}</span>
                        </div>
                    </div>
                    <hr class="my-10 border-slate-200" />
                    <div class="editor-content">{!! $data->post_content !!}</div>
                </div>
            </div>
        </div>
    </section>
@endsection
