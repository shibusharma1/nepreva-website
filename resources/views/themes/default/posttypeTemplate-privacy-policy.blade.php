@extends('themes.default.common.master')
@section('title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->page_thumbnail)
@section('content')
    <main id="main">
        <div class="pg on" data-page="privacy-policy" data-title="{{ $data->meta_keyword }}" data-noform="1">
            <section class="art-head">
                <div class="wrap">
                    <div class="in">
                        <h1>{{ $data->post_type }}</h1>
                        <p class="lead">
                            {{ $data->caption }} 
                        Last updated: [ {{ $data->updated_at }} ].
                    </p>
                    </div>
                </div>
            </section>
            <section class="sec" style="padding-top:10px">
                <div class="wrap">
                    <article class="prose">
                        <p class="draftbanner"><b>Draft for legal review.</b> This text is a plain-language starting point.
                            Have it reviewed by legal counsel, and replace items marked [CONFIRM], before publishing.</p>
                        {!! $data->content !!}
                    </article>
                </div>
            </section>
        </div>
    </main>
@endsection
