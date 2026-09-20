@extends('themes.default.common.master')
@section('post_title', 'Success')
@section('content')
    <section class="section-padding bg-slate-50 min-h-[60vh] flex items-center">
        <div class="container-custom">
            <div class="bg-white border border-slate-200 shadow-xl p-8 md:p-12 max-w-xl mx-auto text-center">
                <div class="w-20 h-20 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-6 text-3xl">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h1 class="text-primary text-3xl font-black mb-3">
                    Sent Successfully!
                </h1>
                @if (isset($name))
                    <h2 class="text-slate-700 text-lg font-bold mb-4">
                        Dear {{ $name }},
                    </h2>
                @endif
                <div class="text-slate-600 leading-relaxed mb-6">
                    {!! $message !!}
                </div>
                <div class="w-full h-px bg-slate-200 my-6"></div>
                <p class="text-slate-500 mb-8">
                    <strong class="text-primary">Best Wishes,</strong>
                    <br>
                    {{ $setting->site_name ?? 'CIWEC Hospital' }}
                </p>
                <a href="{{ url('/') }}" class="btn-primary inline-flex items-center gap-2">
                    Return To Homepage
                    <i class="fa-solid fa-house text-xs"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
