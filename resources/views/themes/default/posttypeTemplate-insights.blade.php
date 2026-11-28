@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="insights"
            data-title="Insights | Accounting, Audit Support &amp; Outsourcing Perspectives | Nepreva">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>{!! $data->caption !!}</h1>
                        <p class="lead">{{ strip_tags($data->content) }}</p>
                    </div>
                    @include('themes.default.common.aside')
                </div>
            </section>
            @php
                // dd($posts->where('post_parent',0));
            @endphp
            <section class="band sec">
                <div class="wrap">
                    <div class="filters"><button data-c="all" aria-pressed="true">All</button>
                        @foreach ($posts->where('post_parent', 0) as $item)
                            <button data-c="{{ $item->post_title }}" aria-pressed="false">{{ $item->post_title }}</button>
                        @endforeach
                    </div>
                    <div class="acards">

                        @foreach ($posts->where('post_parent', '!=', 0) as $insight)
                            <a class="acard {{ $loop->first ? 'feat' : '' }}" data-cat="{{ $insight->parent->post_title }}"
                                href="{{ geturl($insight->uri) }}">
                                <span class="cat">{{ $insight->parent->post_title }} &nbsp;·&nbsp;
                                    {{ $insight->post_tags }}</span>
                                <h3>{{ $insight->post_title }}</h3>
                                <p>{{ $insight->post_excerpt }}</p>
                                <span class="tlink">Read article <svg class="ico">
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
