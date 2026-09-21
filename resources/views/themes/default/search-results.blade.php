@extends('themes.default.common.master')
@section('meta_keyword', 'Search')
@section('meta_description', 'Search CIWEC Hospital')
@section('content')
    @php
        $data = (object)[
            'post_title' => 'Search Results',
            'post_type' => 'Search',
            'banner' => null
        ];
    @endphp
    @include('themes.default.common.herobanner')

    <section class="section-padding bg-slate-50 min-h-[70vh]">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="max-w-3xl mb-8 lg:mb-10">
                <span class="section-subtitle">
                    Search CIWEC
                </span>
                <h2 class="section-title mt-2 mb-4">
                    Search Results
                </h2>
                <p class="text-slate-600 text-base md:text-lg">
                    Results for
                    <strong class="text-primary font-bold">
                        "{{ $search }}"
                    </strong>
                </p>
            </div>

            <!-- SEARCH AGAIN -->
            <div class="max-w-3xl mb-10">
                <form action="{{ route('search') }}" method="GET" class="flex items-center">
                    <input type="text" name="q" value="{{ $search }}" required minlength="2"
                        placeholder="Search CIWEC..."
                        class="flex-1 h-14 px-5 border border-slate-300 border-r-0 bg-[var([var(--neutral-50)])]text-slate-700 outline-none focus:border-secondary transition">
                    <button type="submit" aria-label="Search" class="btn-primary h-14 min-w-[60px] px-6 rounded-l-none flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>

            @if ($results->count())
                <!-- RESULT COUNT -->
                <div class="mb-6 text-sm text-slate-500 font-medium">
                    Showing
                    <strong class="text-primary font-semibold">
                        {{ $results->firstItem() }}
                    </strong>
                    –
                    <strong class="text-primary font-semibold">
                        {{ $results->lastItem() }}
                    </strong>
                    of
                    <strong class="text-primary font-semibold">
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
                        <article class="group bg-[var([var(--neutral-50)])]border border-slate-200 p-6 md:p-7 hover:border-secondary hover:shadow-xl transition-all duration-300">
                            <div class="flex items-start gap-5">
                                <!-- ICON -->
                                <div class="hidden sm:flex shrink-0 w-12 h-12 bg-primary/5 text-primary items-center justify-center group-hover:bg-secondary group-hover:text-white transition">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>

                                <!-- CONTENT -->
                                <div class="flex-1 min-w-0">
                                    @if ($result->sub_title)
                                        <span class="text-secondary text-xs font-bold uppercase tracking-[2px] block mb-1">
                                            {{ $result->sub_title }}
                                        </span>
                                    @endif
                                    <h3 class="text-primary text-lg md:text-xl font-bold mt-1 mb-2 group-hover:text-secondary transition">
                                        <a href="{{ $resultUrl }}">
                                            {{ $result->post_title }}
                                        </a>
                                    </h3>
                                    @if ($result->post_excerpt)
                                        <p class="text-slate-600 text-base md:text-lg leading-relaxed mb-4">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($result->post_excerpt), 180) }}
                                        </p>
                                    @elseif ($result->post_content)
                                        <p class="text-slate-600 text-base md:text-lg leading-relaxed mb-4">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($result->post_content), 180) }}
                                        </p>
                                    @endif

                                    <a href="{{ $resultUrl }}" class="inline-flex items-center gap-2 text-primary font-bold text-sm hover:text-secondary transition">
                                        View Details
                                        <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
                                    </a>
                                </div>
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
                <div class="bg-[var([var(--neutral-50)])]border border-slate-200 py-16 px-6 text-center shadow-sm">
                    <div class="w-16 h-16 bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-5">
                        <i class="fa-solid fa-magnifying-glass text-xl"></i>
                    </div>
                    <h3 class="text-primary text-xl font-bold mb-2">
                        No results found
                    </h3>
                    <p class="text-slate-600 max-w-lg mx-auto">
                        We couldn't find anything matching
                        <strong class="text-primary">"{{ $search }}"</strong>.
                        Try another keyword or browse our main pages.
                    </p>
                </div>
            @endif
        </div>
    </section>
@endsection
