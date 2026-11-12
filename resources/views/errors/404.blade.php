@extends('themes.default.common.master')
@section('page-title', "Page not found | Nepreva")
@section('page-desc', "Page not found.")
@section('content')
    <main id="main">
        <section class="phero">
            <div class="wrap" style="text-align:center;padding-block:40px">
                <p class="big404">404</p>
                <h1 style="max-width:none;margin:10px auto 0">That page isn’t here.</h1>
                <p class="lead" style="margin:18px auto 0">It may have moved, or the address may be mistyped. These links will get you back on track.</p>
                <div class="ctas" style="justify-content:center">
                    <a class="btn btn-primary" href="{{ url("/") }}">Go to the homepage</a>
                        <a class="btn btn-ghost" href="services.php">Explore services</a>
                        <a class="btn btn-ghost" href="{{ url('page/contact.html') }}">Contact us</a>
                    </div>  
            </div>
        </section>
    </main>
@endsection
