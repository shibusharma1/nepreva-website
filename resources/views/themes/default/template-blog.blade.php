@extends('themes.default.common.master')
@section('title', $data->post_title ?? 'Blog')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->page_thumbnail)
@section('content')
    @include('themes.default.common.herobanner')
    <section class="section-padding bg-slate-100">
        <div class="container-custom">
            @if (isset($posts) && count($posts) > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($posts as $post)
                        <article class="group bg-white border border-slate-200 hover:border-secondary hover:shadow-xl transition-all duration-500 hover:-translate-y-2 flex flex-col h-full">
                            <div class="overflow-hidden h-52 relative">
                                <img src="{{ $post->banner ? asset('uploads/medium/' . $post->banner) : asset('themes-assets/img/ciwec.webp') }}"
                                    alt="{{ $post->post_title }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                            <div class="p-6 flex flex-col flex-1">
                                @if ($post->sub_title)
                                    <span class="text-secondary text-xs font-bold uppercase tracking-[2px] mb-2 block">
                                        {{ $post->sub_title }}
                                    </span>
                                @endif
                                <h3 class="text-primary text-xl font-bold mb-3 group-hover:text-secondary transition line-clamp-2">
                                    <a href="{{ url($post->uri . '.html') }}">
                                        {{ $post->post_title }}
                                    </a>
                                </h3>
                                @if ($post->post_excerpt)
                                    <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-4 line-clamp-3 flex-1">
                                        {{ strip_tags($post->post_excerpt) }}
                                    </p>
                                @endif
                                <div class="pt-4 border-t border-slate-100 mt-auto">
                                    <a href="{{ url($post->uri . '.html') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-primary group-hover:text-secondary transition">
                                        Read More
                                        <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                @if (method_exists($posts, 'links'))
                    <div class="mt-10">
                        {{ $posts->links() }}
                    </div>
                @endif
            @else
                <div class="bg-white border border-slate-200 py-16 px-6 text-center max-w-2xl mx-auto">
                    <div class="w-16 h-16 bg-primary/10 text-primary flex items-center justify-center mx-auto mb-5 rounded-full">
                        <i class="fa-solid fa-newspaper text-2xl"></i>
                    </div>
                    <h3 class="text-primary text-2xl font-black mb-2">
                        No Articles Available
                    </h3>
                    <p class="text-slate-600 max-w-md mx-auto">
                        We are currently updating our blog articles. Please check back soon for latest news and health insights.
                    </p>
                </div>
            @endif
        </div>
    </section>
@endsection