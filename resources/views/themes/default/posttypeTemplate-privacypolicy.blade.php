@extends('themes.default.common.master')
@section('title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->page_thumbnail)
@section('content')
@include('themes.default.common.herobanner')
    <section class="section-padding bg-white">
        <div class="container-custom">
            <div class="editor-content">
                {!! $data->content !!}
            </div>
        </div>
    </section>
@endsection
