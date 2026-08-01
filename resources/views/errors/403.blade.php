@extends('themes.default.common.master') @section('post_title', '403') @section('content')

<style>
    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        padding: 0;
        margin: 0;
    }

    #notfound {
        position: relative;
        height: 100vh;
    }

    #notfound .notfound {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .notfound {
        max-width: 520px;
        width: 100%;
        line-height: 1.4;
        text-align: center;
    }

    .notfound .notfound-403 {
        position: relative;
        height: 200px;
        margin: 0 auto 20px;
        z-index: -1;
    }

    .notfound .notfound-403 h1 {
        font-family: "Montserrat", sans-serif;
        font-size: 180px;
        font-weight: 700;
        margin: 0;
        color: #211b19;
        position: absolute;
        left: 50%;
        top: 50%;
        line-height: 1;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .notfound .notfound-403 h2 {
        font-family: "Montserrat", sans-serif;
        font-size: 28px;
        font-weight: 400;
        text-transform: uppercase;
        color: #211b19;
        background: #fff;
        padding: 10px 15px;
        margin: auto;
        display: inline-block;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .notfound p {
        font-family: "Montserrat", sans-serif;
        font-size: 16px;
        color: #777;
        margin: 25px 0;
        padding: 0 20px;
    }

    .notfound a {
        font-family: "Montserrat", sans-serif;
        display: inline-block;
        font-weight: 700;
        text-decoration: none;
        color: #fff;
        text-transform: uppercase;
        padding: 13px 25px;
        background: #ff6300;
        font-size: 18px;
        transition: 0.2s all;
    }

    .notfound a:hover {
        color: #ff6300;
        background: #211b19;
    }

    @media only screen and (max-width: 767px) {
        .notfound .notfound-403 h1 {
            font-size: 120px;
        }

        .notfound .notfound-403 h2 {
            font-size: 22px;
        }
    }

    @media only screen and (max-width: 480px) {
        .notfound .notfound-403 {
            height: 140px;
            margin: 0 auto 15px;
        }

        .notfound .notfound-403 h1 {
            font-size: 90px;
        }

        .notfound .notfound-403 h2 {
            font-size: 16px;
        }

        .notfound p {
            font-size: 14px;
        }

        .notfound a {
            padding: 10px 18px;
            font-size: 14px;
        }
    }
</style>

<div id="notfound">
    <div class="notfound">
        <div class="notfound-403">
            <h1>403</h1>
            <h2>Access Forbidden</h2>
        </div>

        <p>
            Sorry, you don't have permission to access the page you requested. Please contact the administrator if you
            believe this is an error.
        </p>

        <a href="{{ url('/') }}">Go To Homepage</a>
    </div>
</div>

@endsection
