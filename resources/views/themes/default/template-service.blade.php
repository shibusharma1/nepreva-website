@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="accounting-bookkeeping" data-title="Accounting &amp; Bookkeeping | Nepreva" data-svc="Accounting &amp; Bookkeeping">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <a class="crumb" href="services.php">
                            <svg class="ico">
                                <use href="#i-chev" />
                            </svg>All services</a>
                        <h1>{!! $data->post_excerpt !!}</h1>
                        <p class="lead">{{ strip_tags($data->post_content) }}</p>
                        <div class="ctas">
                            <a class="btn btn-primary" href="#start">Build your delivery team</a>
                            <a class="btn btn-ghost" href="#start">Request a proposal</a>
                        </div>
                    </div>
                    @include('themes.default.common.aside')
                </div>
            </section>

            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $data_child[0]->post_title }}</h2>
                        <p class="lead">
                            {{ $data_child[0]->post_excerpt }}
                        </p>
                    </div>
                    @php
                        $content = $data_child[0]->post_content ?? '';
                        preg_match_all('/<li\b[^>]*>(.*?)<\/li>/is', $content, $matches);
                        $listItems = $matches[1] ?? [];
                    @endphp
                    <ul class="dl">
                        @forelse ($listItems as $item)
                            <li>
                                <svg class="ico">
                                    <use href="#i-check" />
                                </svg>
                                {{ trim(strip_tags($item)) }}
                            </li>
                        @empty
                            {{-- No list items available --}}
                        @endforelse
                    </ul>
                    @if(!empty($data_child[0]->associated_title))
                    <p class="callout">
                        <svg class="ico">
                            <use href="#i-shield" />
                        </svg>
                        <span><b>Scope note.</b> {{ $data_child[0]->associated_title }}.</span>
                    </p>
                    @endif    
                </div>
            </section>

            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $data_child[1]->post_title }}</h2>
                        <p class="lead">{{ $data_child[1]->post_excerpt }}</p>
                    </div>
                    <div class="vgrid">
                        @foreach ($data_child[1]->associatePosts as $item)
                            <div>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ strip_tags($item->brief) }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $data_child[2]->post_title }}</h2>
                        <p class="lead">{{ $data_child[1]->post_excerpt }}</p>
                    </div>
                    <div class="run">
                        @foreach ($data_child[2]->associatePosts ?? [] as $item)
                            <div>
                                <svg class="ico">
                                    <use href="#i-{{ $item->uri === 'How-we-work' ? 'flag' : ($item->uri === 'Quality-and-review' ? 'shield' : 'tech') }}" />
                                </svg>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ strip_tags($item->brief) }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="sec">
                <div class="wrap whobox">
                    <div>
                        <h2>{{ $data_child[3]->post_title }}</h2>
                    </div>
                    <div>
                        <p class="lead" style="max-width:60ch;color:var(--text)">{{ $data_child[3]->post_excerpt }}</p>
                        <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:28px">
                            <a class="btn btn-primary" href="#start">Build your delivery team</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="band sec">
                <div class="wrap">
                    <h2>Related services</h2>
                    <div class="rel">
                        @foreach ($related_posts as $service)
                             <a href="{{ geturl($service->uri) }}">
                            <h3>{{ $service->post_title }}</h3>
                            <p>{{ $service->icon }}</p>
                            <span class="tlink">View service
                                <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg>
                            </span>
                        </a>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
