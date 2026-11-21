@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="{{ $data->post_type }}" data-title="{{ $data->post_type }} | Nepreva" data-noform="1">
            <section class="phero">
                <div class="wrap pgrid">
                    <div>
                        <h1 style="max-width:14ch">{{ $data->post_type }}</h1>
                        <p class="lead">{!! $data->content !!}</p>
                        <h2 style="font-size:1.4rem;margin:34px 0 4px">{{ $posts[0]->post_title }}</h2>
                        <ol class="seq c2">
                            @foreach ($posts[0]->associatePosts as $item)
                                <li>
                                    <h3>{{ $item->title }}</h3>
                                    <p>{{ $item->brief }}</p>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                    @include('themes.default.common.build-your-delivery-team-form')
                </div>
            </section>
        </div>
    </main>
@endsection
