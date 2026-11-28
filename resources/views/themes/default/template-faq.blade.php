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
                        <div class="ctas">
                            <a class="btn btn-primary" href="#start">Build your delivery team</a>
                            <a class="btn btn-ghost" href="faq.php">Read the FAQ</a>
                        </div>
                    </div>
                    @include('themes.default.common.aside')
                </div>
            </section>

            <section class="band sec">
                <div class="wrap">
                    <div style="max-width:860px;margin-inline:auto">
                         @foreach ($data_child as $faqs)
                             <div style="margin-bottom:46px">
                            <h2 style="font-size:1.6rem;margin-bottom:18px">About Nepreva</h2>
                            <div class="faq-list">
                                @foreach ($faqs->associatePosts as $faq)
                                    <details>
                                    <summary>{{ $faq->title }}
                                        <svg class="ico">
                                            <use href="#i-chev" />
                                        </svg>
                                    </summary>
                                    <p>{{ strip_tags($faq->brief) }}</p>
                                </details>
                                @endforeach
                            </div>
                        </div>
                         @endforeach                       
                    </div>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
