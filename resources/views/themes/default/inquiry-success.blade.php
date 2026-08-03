@extends('themes.default.common.master')
@section('post_title', 'Success')
@section('content')
    <section id="success">
        <div class="success-box">
            <div class="success-icon">
                ✓
            </div>
            <h1>
                Sent Successfully!
            </h1>
            <h2>
                Dear {{ $name }},
            </h2>
            <p>
                {!! $message !!}
            </p>
            <div class="success-divider">
            </div>
            <p>
                <strong>
                    Best Wishes
                </strong>
                <br>
                {{ $setting->site_name }}
            </p>
            <a href="{{ url('/') }}" class="btn-home">
                Return To Homepage
            </a>
        </div>
    </section>
@endsection
