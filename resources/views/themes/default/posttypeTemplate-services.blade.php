@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <main id="main">
        <div class="pg on" data-page="services" data-title="Accounting, Audit Support &amp; Finance Services | Nepreva">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>{!! $data->caption !!}</h1>
                        <p class="lead">{{ strip_tags($data->content) }}</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a><a
                                class="btn btn-ghost" href="#start">Request a proposal</a></div>
                    </div>
                    @include('themes.default.common.aside')
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <div class="rows">
                        @foreach ($services->skip(2) as $service)
                            <a class="row" href="{{ geturl($service->uri) }}">
                                <div>
                                    <h3>{{ $service->post_title }}</h3>
                                    <p class="pr">{{ $service->icon }}</p>
                                    <p class="inc">{{ $service->external_link }}</p>
                                </div>
                                <span class="go">
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
