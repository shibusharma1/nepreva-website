@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="for-businesses-finance-teams" data-title="For Businesses &amp; Finance Teams | Nepreva">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>{!! $data->post_excerpt !!}</h1>
                        <p class="lead">{{ strip_tags($data->post_content) }}</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a><a
                                class="btn btn-ghost" href="services.php">Explore services</a></div>
                    </div>
                    @include('themes.default.common.aside')
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $data_child[0]->post_title }}</h2><span></span>
                    </div>
                    <div class="vgrid">
                        @foreach ($data_child[0]->associatePosts as $item)
                            <div>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ strip_tags($item->brief) }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $data_child[1]->post_title }}</h2>
                        <p class="lead">{{ $data_child[1]->post_excerpt }}</p>
                    </div>
                    <div class="two">
                        @foreach ($data_child[1]->associatePosts as $index => $item)
                            <div class="{{ $index == 1 ? 'dk' : '' }}">
                                <h3>{{ $item->title }}</h3>
                                @php
                                    preg_match_all('/<li\b[^>]*>(.*?)<\/li>/is', $item->brief ?? '', $matches);
                                @endphp
                                <ul>
                                    @foreach ($matches[1] as $listItem)
                                        <li>
                                            <svg class="ico">
                                                <use href="#i-check" />
                                            </svg>
                                            {{ trim(strip_tags($listItem)) }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>Services most businesses use</h2><span></span>
                    </div>
                    <div class="rel r3x2"><a href="accounting-bookkeeping.php">
                            <h3>Accounting &amp; Bookkeeping</h3>
                            <p>Reliable capacity and a faster close, every month.</p><span class="tlink">View service <svg
                                    class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="financial-reporting.php">
                            <h3>Financial Reporting</h3>
                            <p>Better reporting without adding permanent headcount.</p><span class="tlink">View service
                                <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="finance-operations.php">
                            <h3>Finance Operations</h3>
                            <p>Scalable operating capacity for day-to-day finance.</p><span class="tlink">View service <svg
                                    class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="fpa-financial-modelling.php">
                            <h3>FP&amp;A &amp; Financial Modelling</h3>
                            <p>Delivery that moves beyond bookkeeping into decision support.</p><span class="tlink">View
                                service <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="virtual-cfo.php">
                            <h3>Virtual CFO</h3>
                            <p>Senior finance capability without a full-time fixed cost.</p><span class="tlink">View
                                service <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="payroll.php">
                            <h3>Payroll</h3>
                            <p>Accurate, on-time payroll at any team size.</p><span class="tlink">View service <svg
                                    class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a></div>
                </div>
            </section>

            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $data_child[2]->post_title }}</h2>
                        <p class="lead">{{ $data_child[2]->post_excerpt }}</p>
                    </div>
                    <ol class="seq c4">
                        @foreach ($data_child[2]->associatePosts as $item)
                            <li>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ strip_tags($item->brief) }}</p>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </section>

            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $data_child[3]->post_title }}</h2><span></span>
                    </div>
                    <div class="faq-list">
                        @foreach ($data_child[3]->associatePosts as $item)
                            <details>
                                <summary>{{ $item->title }}<svg class="ico">
                                        <use href="#i-chev" />
                                    </svg></summary>
                                <p>{{ strip_tags($item->brief) }}</p>
                            </details>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
