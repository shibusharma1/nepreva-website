@extends('themes.default.common.master')

@section('post_title','Success')

@section('content')
<style>
  #success {
        position: relative;
        min-height: 80vh;
        background: #f7f9fb;
    }

    #success .success-box {
        position: absolute;
        left: 50%;
        top: 50%;
        width: 100%;
        max-width: 520px;
        transform: translate(-50%, -50%);
        text-align: center;
        padding: 20px 20px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 10px 35px rgba(0,0,0,.08);
    }

    .success-icon {
        width: 90px;
        height: 90px;
        margin: 0 auto 25px;
        border-radius: 50%;
        background: #e8f8ef;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        font-size: 48px;
        font-weight: bold;
    }

    .success-box h1 {
        font-size: 32px;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 15px;
    }

    .success-box h2 {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
    }

    .success-box p {
        font-size: 16px;
        line-height: 1.7;
        color: #666;
        margin-bottom: 15px;
    }

    .success-divider {
        width: 80px;
        height: 3px;
        background: var(--primary);
        margin: 25px auto;
        border-radius: 10px;
    }

    .success-box .btn-home {
        display: inline-block;
        padding: 13px 28px;
        background: var(--primary);
        color: #fff;
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
        border-radius: 5px;
        transition: .3s;
    }

    .success-box .btn-home:hover {
        background: #082b40;
    }


    @media(max-width:600px){

        #success .success-box{
            width:90%;
            padding:30px 20px;
        }

        .success-box h1{
            font-size:26px;
        }

    }
</style>
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