@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')
    @php
        $altitudeExpert = $altitudesection->get(0);
        $internationalReputation = $altitudesection->get(1);
        $altitudeRisk = $altitudesection->get(2);
        $coldInjury = $altitudesection->get(3);
    @endphp
    @if ($altitudeExpert)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">
                <div class="grid lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                    <!-- IMAGE -->
                    <div class="lg:col-span-5">
                        <div class="relative border border-slate-200 shadow-md">
                            <img src="{{ !empty($altitudeExpert->banner) ? asset('uploads/medium/' . $altitudeExpert->banner) : asset('uploads/medium/default.webp') }}" alt="{{ $altitudeExpert->post_title }}" class="w-full h-[380px] md:h-[420px] object-cover">
                            <!-- FLOATING CARD -->
                            <div
                                class="absolute bottom-6 left-6 bg-[#fdfdfd] shadow-xl p-5 border border-slate-100 max-w-[260px]">
                                <span class="text-secondary font-bold uppercase text-sm tracking-[1px]">
                                    Specialized Care
                                </span>
                                <h3 class="text-primary text-lg font-bold">
                                    Trusted by trekkers
                                </h3>
                                <p class="text-slate-600 mt-2 text-sm leading-relaxed">
                                    Decades supporting trekkers and climbers in Nepal’s high altitudes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="lg:col-span-7 prose prose-lg max-w-none text-slate-600 leading-relaxed text-base md:text-lg">
                        {{-- {!! $altitudeExpert->post_content !!} --}}
                        <div class="lg:col-span-7">
                            <span class="section-subtitle text-secondary">
                                {{ $altitudeExpert->sub_title }}
                            </span>
                            <h2 class="section-title">
                                {{ $altitudeExpert->post_title }}
                            </h2>
                            <p class="text-slate-600 mt-6 text-justify leading-8">
                                 {!! $altitudeExpert->post_excerpt !!}
                            </p>
                            <p class="text-slate-600 mt-5 text-justify leading-8">
                                 {!! $altitudeExpert->post_content !!}
                            </p>
                        </div>
                    </div>
                </div>
                @if ($internationalReputation)
                    <div class="bg-primary mt-8 overflow-hidden">
                        <div class="grid lg:grid-cols-12 items-center">
                            <div class="lg:col-span-8 p-8 lg:p-12">
                                <span class="text-white font-semibold uppercase tracking-[3px] text-sm">
                                    {{ $internationalReputation->sub_title }}
                                </span>
                                <h3 class="text-white text-2xl md:text-3xl font-bold mt-1">
                                    {{ $internationalReputation->post_title }}
                                </h3>
                                <p class="text-white/80 mt-4 leading-relaxed text-base md:text-lg">
                                    {{ $internationalReputation->post_excerpt }}
                                </p>
                            </div>
                            <div class="lg:col-span-4">
                                <img src="{{ !empty($internationalReputation->banner) ? asset('uploads/medium/' . $internationalReputation->banner) : asset('uploads/medium/default.webp') }}"
                                    alt="{{ $internationalReputation->post_title }}"
                                    class="w-full h-[280px] md:h-[320px] object-cover">
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    @endif
    @if ($altitudeRisk)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">
                <!-- HEADER -->
                <div class="text-center max-w-4xl mx-auto mb-10">
                    <span class="section-subtitle">
                        {{ $altitudeRisk->sub_title }}
                    </span>
                    <h2 class="section-title">
                        {{ $altitudeRisk->post_title }}
                    </h2>
                    <p class="text-slate-600 text-base md:text-lg mt-4 leading-relaxed">
                        {{ $altitudeRisk->post_excerpt }}
                    </p>
                </div>
                <!-- MOUNTAIN VISUAL -->
                <div class="relative mb-10 border border-slate-200 overflow-hidden shadow-md">
                    <img src="{{ !empty($altitudeRisk->banner) ? asset('uploads/medium/' . $altitudeRisk->banner) : asset('uploads/medium/default.webp') }}" alt="{{ $altitudeRisk->post_title }}" class="w-full h-[360px] md:h-[420px] object-cover">
                </div>
                <!-- RISK CARDS -->
                <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                    <!-- LOW RISK -->
                    <div
                        class="group bg-[#fdfdfd] border border-slate-200 border-t-4 border-t-green-500 p-6 hover:-translate-y-2 hover:shadow-xl transition-all duration-500">
                        <span
                            class="inline-block bg-green-100 text-green-700 px-3 py-1 text-sm font-bold uppercase tracking-[1px]">
                            LOW RISK
                        </span>
                        <h3 class="text-primary text-xl font-bold mt-4">
                            2,500m
                        </h3>
                        <p class="text-slate-500 text-sm font-semibold mt-1">
                            Entry Altitude Zone
                        </p>
                        <ul class="mt-6 space-y-3 text-sm text-slate-600">
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-check text-green-500 mt-1 text-sm"></i>
                                Mild shortness of breath
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-check text-green-500 mt-1 text-sm"></i>
                                Minor fatigue
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-check text-green-500 mt-1 text-sm"></i>
                                Usually well tolerated
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-slate-100 text-sm">
                            <strong class="text-primary block mb-1">
                                Recommended:
                            </strong>
                            <p class="text-slate-600 leading-relaxed">
                                Stay hydrated and begin gradual ascent.
                            </p>
                        </div>
                    </div>
                    <!-- MODERATE -->
                    <div
                        class="group bg-[#fdfdfd] border border-slate-200 border-t-4 border-t-yellow-500 p-6 hover:-translate-y-2 hover:shadow-xl transition-all duration-500">
                        <span
                            class="inline-block bg-yellow-100 text-yellow-700 px-3 py-1 text-sm font-bold uppercase tracking-[1px]">
                            MODERATE RISK
                        </span>
                        <h3 class="text-primary text-xl font-bold mt-4">
                            3,500m
                        </h3>
                        <p class="text-slate-500 text-sm font-semibold mt-1">
                            AMS Risk Begins
                        </p>
                        <ul class="mt-6 space-y-3 text-sm text-slate-600">
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-triangle-exclamation text-yellow-500 mt-1 text-sm"></i>
                                Headache
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-triangle-exclamation text-yellow-500 mt-1 text-sm"></i>
                                Nausea
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-triangle-exclamation text-yellow-500 mt-1 text-sm"></i>
                                Sleep disturbances
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-slate-100 text-sm">
                            <strong class="text-primary block mb-1">
                                Recommended:
                            </strong>
                            <p class="text-slate-600 leading-relaxed">
                                Ascend slowly and monitor symptoms.
                            </p>
                        </div>
                    </div>
                    <!-- HIGH -->
                    <div
                        class="group bg-[#fdfdfd] border border-slate-200 border-t-4 border-t-orange-500 p-6 hover:-translate-y-2 hover:shadow-xl transition-all duration-500">
                        <span
                            class="inline-block bg-orange-100 text-orange-700 px-3 py-1 text-sm font-bold uppercase tracking-[1px]">
                            HIGH RISK
                        </span>
                        <h3 class="text-primary text-xl font-bold mt-4">
                            4,500m
                        </h3>
                        <p class="text-slate-500 text-sm font-semibold mt-1">
                            Severe AMS Possible
                        </p>
                        <ul class="mt-6 space-y-3 text-sm text-slate-600">
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-circle-exclamation text-orange-500 mt-1 text-sm"></i>
                                Persistent headache
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-circle-exclamation text-orange-500 mt-1 text-sm"></i>
                                Significant fatigue
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-circle-exclamation text-orange-500 mt-1 text-sm"></i>
                                Reduced performance
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-slate-100 text-sm">
                            <strong class="text-primary block mb-1">
                                Recommended:
                            </strong>
                            <p class="text-slate-600 leading-relaxed">
                                Consider acclimatization days.
                            </p>
                        </div>
                    </div>
                    <!-- EXTREME -->
                    <div
                        class="group bg-[#fdfdfd] border border-slate-200 border-t-4 border-t-red-600 p-6 hover:-translate-y-2 hover:shadow-xl transition-all duration-500">
                        <span
                            class="inline-block bg-red-100 text-red-700 px-3 py-1 text-sm font-bold uppercase tracking-[1px]">
                            EXTREME RISK
                        </span>
                        <h3 class="text-primary text-xl font-bold mt-4">
                            5,500m+
                        </h3>
                        <p class="text-slate-500 text-sm font-semibold mt-1">
                            HAPE / HACE Zone
                        </p>
                        <ul class="mt-6 space-y-3 text-sm text-slate-600">
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-skull-crossbones text-red-500 mt-1 text-sm"></i>
                                Severe breathlessness
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-skull-crossbones text-red-500 mt-1 text-sm"></i>
                                Confusion
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-skull-crossbones text-red-500 mt-1 text-sm"></i>
                                Medical emergency
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-slate-100 text-sm">
                            <strong class="text-primary block mb-1">
                                Recommended:
                            </strong>
                            <p class="text-slate-600 leading-relaxed">
                                Immediate descent and urgent medical care.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if ($coldInjury)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">
                <div class="text-center max-w-4xl mx-auto mb-10">
                    <span class="section-subtitle">
                        {{ $coldInjury->sub_title }}
                    </span>
                    <h2 class="section-title">
                        {{ $coldInjury->post_title }}
                    </h2>
                    <p class="text-slate-600 mt-4 leading-relaxed">
                        {!! $coldInjury->post_content !!}
                    </p>
                </div>
                <div class="grid lg:grid-cols-12 gap-0 overflow-hidden bg-[#fdfdfd] border border-slate-200 mb-10">
                    <div class="lg:col-span-5">
                        <img src="{{ !empty($coldInjury->banner) ? asset('uploads/medium/' . $coldInjury->banner) : asset('uploads/medium/default.webp') }}" alt="{{ $coldInjury->post_title }}" class="w-full h-full min-h-[360px] object-cover">
                    </div>
                    <div class="lg:col-span-7 p-8 lg:p-12 flex flex-col justify-center">
                        <span class="text-black text-sm font-bold uppercase tracking-[2px]">
                            {{ $coldInjury->sub_title }}
                        </span>
                        <h3 class="text-primary text-2xl md:text-3xl font-bold mt-3">
                            {{ $coldInjury->associated_title }}
                        </h3>
                        <p class="text-slate-600 mt-4 leading-relaxed">
                            {{ $coldInjury->post_excerpt }}
                        </p>
                        <div class="grid md:grid-cols-2 gap-4 mt-6">
                            @foreach (preg_split('/\r\n|\r|\n/', trim($coldInjury->post_content)) as $item)
                                @if (trim($item))
                                    <div class="flex gap-3 text-sm text-slate-600">
                                        <i class="fa-solid fa-snowflake text-secondary mt-1 text-sm"></i>
                                        <span>{{ trim($item) }}</span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
