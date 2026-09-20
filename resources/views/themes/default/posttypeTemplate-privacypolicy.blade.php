@extends('themes.default.common.master')
@section('title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->page_thumbnail)
@section('content')
    @include('themes.default.common.herobanner')
    <section class="section-padding bg-slate-50">
        <div class="container-custom">
            <div class="editor-content leading-relaxed text-slate-600 prose max-w-none">
                {!! $data->content !!}
            </div>
        </div>
    </section>
@endsection
