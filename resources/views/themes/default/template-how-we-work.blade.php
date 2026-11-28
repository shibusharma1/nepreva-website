@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="how-we-work" data-title="How We Work | Nepreva">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>{!! $data->post_excerpt !!}</h1>
                        <p class="lead">{{ strip_tags($data->post_content) }}</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a>
                            <a class="btn btn-ghost" href="faq.php">Read the FAQ</a>
                        </div>
                    </div>
                    @include('themes.default.common.aside')
                </div>
            </section>

            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $data_child[0]->post_title }}</h2><span></span>
                    </div>
                    <ol class="seq">
                        @foreach ($data_child[0]->associatePosts as $item)
                            <li>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ strip_tags($item->brief) }}</p>
                            </li>
                        @endforeach
                    </ol>
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
                    <div class="two">
                        @foreach ($data_child[1]->children as $child)
                            <div class="{{ $loop->iteration == 2 ? 'dk' : '' }}">
                                <h3>{{ $child->post_title }}</h3>
                                @php
                                    $content = $child->post_content ?? '';
                                    preg_match_all('/<li\b[^>]*>(.*?)<\/li>/is', $content, $matches);
                                    $listItems = $matches[1] ?? [];
                                @endphp
                                <ul>
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
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $data_child[2]->post_title }}</h2><span></span>
                    </div>
                    <div class="grow" style="background:var(--cobalt-50)">
                        <div class="steps" style="min-height:260px">
                            @foreach ($data_child[2]->associatePosts as $item)
                                <div class="step">
                                    <b>{{ $item->title }}</b>
                                    <span>{{ strip_tags($item->brief) }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
