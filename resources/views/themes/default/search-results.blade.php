@extends('themes.default.common.master')
@section('meta_keyword', 'Search')
@section('meta_description', 'Search CIWEC Hospital')
@section('content')
    <section class="section-padding bg-slate-50 min-h-[70vh]">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="max-w-3xl mb-10">
                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                    <span class="w-2 h-2 bg-secondary"></span>
                    Search CIWEC
                </span>
                <h1 class="text-primary text-3xl md:text-4xl font-black leading-tight mb-4">
                    Search Results
                </h1>
                <p class="text-slate-600">
                    Results for
                    <strong class="text-primary">
                        "{{ $search }}"
                    </strong>
                </p>
            </div>
            <!-- SEARCH AGAIN -->
            <div class="max-w-3xl mb-10">
                <form action="{{ route('search') }}" method="GET" class="flex">
                    <input type="text" name="q" value="{{ $search }}" required minlength="2"
                        placeholder="Search CIWEC..."
                        class="flex-1 h-[56px] px-5 border border-slate-300 border-r-0 bg-white outline-none focus:border-secondary">
                    <button type="submit" class="w-[65px] h-[56px] bg-primary text-white hover:bg-secondary transition">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            @if ($results->count())
                <!-- RESULT COUNT -->
                <div class="mb-6 text-sm text-slate-500">
                    Showing
                    <strong class="text-primary">
                        {{ $results->firstItem() }}
                    </strong>
                    –
                    <strong class="text-primary">
                        {{ $results->lastItem() }}
                    </strong>
                    of
                    <strong class="text-primary">
                        {{ $results->total() }}
                    </strong>
                    results
                </div>
                <!-- RESULTS -->
                <div class="space-y-4">
                    @foreach ($results as $result)
                        @php
                            $targetPost = $result->rootParent();
                            $pageRoutes = ['health-information', 'research-publication', 'contact'];
                            $resultUrl = in_array($targetPost->uri, $pageRoutes)
                                ? url('page/' . $targetPost->uri . '.html')
                                : url($targetPost->uri . '.html');
                        @endphp
                        <article
                            class="group bg-white border border-slate-200 p-6 md:p-7 hover:border-secondary hover:shadow-lg transition-all duration-300">
                            <div class="flex items-start gap-5">
                                <!-- ICON -->
                                <div
                                    class="hidden sm:flex shrink-0 w-12 h-12 bg-primary/5 text-primary items-center justify-center group-hover:bg-secondary group-hover:text-white transition">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>

                                <!-- CONTENT -->
                                <a href="{{ $resultUrl }}"
                                    class="inline-flex items-center gap-2 text-primary font-bold text-sm group/link">
                                    <div class="flex-1 min-w-0">
                                        @if ($result->sub_title)
                                            <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                                                {{ $result->sub_title }}
                                            </span>
                                        @endif
                                        <h2
                                            class="text-primary text-xl md:text-2xl font-black mt-1 mb-2 group-hover:text-secondary transition">

                                            {{ $result->post_title }}

                                        </h2>
                                        @if ($result->post_excerpt)
                                            <p class="text-slate-600 text-sm md:text-base leading-7 mb-4">
                                                {{ \Illuminate\Support\Str::limit(strip_tags($result->post_excerpt), 180) }}
                                            </p>
                                        @elseif ($result->post_content)
                                            <p class="text-slate-600 text-sm md:text-base leading-7 mb-4">
                                                {{ \Illuminate\Support\Str::limit(strip_tags($result->post_content), 180) }}
                                            </p>
                                        @endif

                                        View Details
                                        <i
                                            class="fa-solid fa-arrow-right text-xs transition-transform group-hover/link:translate-x-1">
                                        </i>
                                    </div>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
                <!-- PAGINATION -->
                <div class="mt-10">
                    {{ $results->links() }}
                </div>
            @else
                <!-- EMPTY -->
                <div class="bg-white border border-slate-200 py-16 px-6 text-center">
                    <div class="w-16 h-16 bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-5">
                        <i class="fa-solid fa-magnifying-glass text-xl"></i>
                    </div>
                    <h3 class="text-primary text-xl font-black mb-2">
                        No results found
                    </h3>
                    <p class="text-slate-500 max-w-lg mx-auto">
                        We couldn't find anything matching
                        <strong>"{{ $search }}"</strong>.
                        Try another keyword or browse our popular sections.
                    </p>
                </div>
            @endif
        </div>
    </section>
@endsection
