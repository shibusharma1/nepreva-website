@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <main id="main">
        <div class="pg on" data-page="manage-audit-peak-season-workloads"
            data-title="How audit firms can manage peak-season workloads | Nepreva">
            <section class="art-head">
                <div class="wrap">
                    <div class="in"><a class="crumb" href="{{ 'page/' . posttype_url('insights') }}">
                            <svg class="ico">
                                <use href="#i-chev" />
                            </svg>All insights</a>
                        <h1>{{ $data->post_title }}</h1>
                        <p class="lead">{{ $data->post_excerpt }}</p>
                        <div class="chips">
                            <span>{{ $data->parent->post_title ?? "Insights" }}</span><span>{{ $data->post_tags ?? '2 min read' }}</span><span>{{ $data->sub_title ?? 'By Nepreva' }}</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec" style="padding-top:20px">
                <div class="wrap">
                    <article class="prose">
                        {!! $data->post_content !!}
                        {{-- <p>{{ ($data->post_content) }}</p> --}}
                        @foreach ($data->associatePosts as $item)
                            <h2>{{ $item->title }}</h2>
                            {!! $item->brief !!}
                            @if (!empty($item->information))
                                <p class="callout">
                                    <svg class="ico">
                                        <use href="#i-shield" />
                                    </svg>
                                    <span>{{ strip_tags($item->information) }}
                                    </span>
                                </p>
                            @endif
                        @endforeach
                    </article>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <h2 style="margin-bottom:26px">Keep reading</h2>
                    <div class="acards" style="grid-template-columns:1fr 1fr"><a class="acard"
                            href="outsourcing-vs-offshoring.php"><span class="cat">Outsourcing</span>
                            <h3>Outsourcing vs offshoring: what’s the difference?</h3>
                            <p>The two words are often used as if they meant the same thing. They don’t, and the difference
                                matters when you choose a model.</p><span class="tlink">Read article <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="acard" href="what-makes-an-audit-support-partnership-work.php"><span
                                class="cat">Audit support</span>
                            <h3>What makes an audit support partnership work?</h3>
                            <p>Seven things that separate a smooth audit support arrangement from a frustrating one, and a
                                checklist to run before you begin.</p><span class="tlink">Read article <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a></div>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
