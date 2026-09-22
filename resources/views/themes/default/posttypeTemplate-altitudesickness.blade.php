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

                            <img src="{{ !empty($altitudeExpert->banner)
                                ? asset('uploads/medium/' . $altitudeExpert->banner)
                                : asset('uploads/medium/default.webp') }}"
                                alt="{{ $altitudeExpert->post_title }}" class="w-full h-[400px] md:h-[450px] object-cover">

                            <!-- FLOATING CARD -->
                            <div class="absolute bottom-6 left-6 bg-[#fdfdfd] shadow-xl p-5 border border-slate-100 max-w-[260px]">
                                <span class="text-secondary font-bold uppercase text-xs tracking-[1px]">
                                    Specialized Care
                                </span>

                                <h3 class="text-primary text-lg font-bold mt-2">
                                    Trusted by trekkers
                                </h3>

                                <p class="text-slate-600 mt-2 text-xs leading-relaxed">
                                    Decades supporting trekkers and climbers in Nepal’s high altitudes.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="lg:col-span-7 prose prose-lg max-w-none text-slate-600 leading-relaxed text-base md:text-lg">
                        {!! $altitudeExpert->post_content !!}
                    </div>

                </div>
                @if ($internationalReputation)
                    <div class="bg-primary mt-12 overflow-hidden">
                        <div class="grid lg:grid-cols-12 items-center">

                            <div class="lg:col-span-8 p-8 lg:p-12">

                                <span class="text-secondary font-semibold uppercase tracking-[3px] text-xs">
                                    {{ $internationalReputation->sub_title }}
                                </span>

                                <h3 class="text-white text-2xl md:text-3xl font-bold mt-3">
                                    {{ $internationalReputation->post_title }}
                                </h3>

                                <p class="text-white/80 mt-4 leading-relaxed text-base md:text-lg">
                                    {{ $internationalReputation->post_excerpt }}
                                </p>

                            </div>

                            <div class="lg:col-span-4">

                                <img src="{{ !empty($internationalReputation->banner)
                                    ? asset('uploads/medium/' . $internationalReputation->banner)
                                    : asset('uploads/medium/default.webp') }}"
                                    alt="{{ $internationalReputation->post_title }}" class="w-full h-[280px] md:h-[320px] object-cover">

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

                    <img src="{{ !empty($altitudeRisk->banner)
                        ? asset('uploads/medium/' . $altitudeRisk->banner)
                        : asset('uploads/medium/default.webp') }}"
                        alt="{{ $altitudeRisk->post_title }}" class="w-full h-[360px] md:h-[420px] object-cover">

                </div>

                <!-- RISK CARDS -->
                <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                    <!-- LOW RISK -->
                    <div
                        class="group bg-[#fdfdfd] border border-slate-200 border-t-4 border-t-green-500 p-6 hover:-translate-y-2 hover:shadow-xl transition-all duration-500">
                        <span class="inline-block bg-green-100 text-green-700 px-3 py-1 text-xs font-bold uppercase tracking-[1px]">
                            LOW RISK
                        </span>
                        <h3 class="text-primary text-xl font-bold mt-4">
                            2,500m
                        </h3>
                        <p class="text-slate-500 text-xs font-semibold mt-1">
                            Entry Altitude Zone
                        </p>
                        <ul class="mt-6 space-y-3 text-sm text-slate-600">
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>
                                Mild shortness of breath
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>
                                Minor fatigue
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>
                                Usually well tolerated
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-slate-100 text-xs">
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
                        <span class="inline-block bg-yellow-100 text-yellow-700 px-3 py-1 text-xs font-bold uppercase tracking-[1px]">
                            MODERATE RISK
                        </span>
                        <h3 class="text-primary text-xl font-bold mt-4">
                            3,500m
                        </h3>
                        <p class="text-slate-500 text-xs font-semibold mt-1">
                            AMS Risk Begins
                        </p>
                        <ul class="mt-6 space-y-3 text-sm text-slate-600">
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-triangle-exclamation text-yellow-500 mt-1 text-xs"></i>
                                Headache
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-triangle-exclamation text-yellow-500 mt-1 text-xs"></i>
                                Nausea
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-triangle-exclamation text-yellow-500 mt-1 text-xs"></i>
                                Sleep disturbances
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-slate-100 text-xs">
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
                        <span class="inline-block bg-orange-100 text-orange-700 px-3 py-1 text-xs font-bold uppercase tracking-[1px]">
                            HIGH RISK
                        </span>
                        <h3 class="text-primary text-xl font-bold mt-4">
                            4,500m
                        </h3>
                        <p class="text-slate-500 text-xs font-semibold mt-1">
                            Severe AMS Possible
                        </p>
                        <ul class="mt-6 space-y-3 text-sm text-slate-600">
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-circle-exclamation text-orange-500 mt-1 text-xs"></i>
                                Persistent headache
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-circle-exclamation text-orange-500 mt-1 text-xs"></i>
                                Significant fatigue
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-circle-exclamation text-orange-500 mt-1 text-xs"></i>
                                Reduced performance
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-slate-100 text-xs">
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
                        <span class="inline-block bg-red-100 text-red-700 px-3 py-1 text-xs font-bold uppercase tracking-[1px]">
                            EXTREME RISK
                        </span>
                        <h3 class="text-primary text-xl font-bold mt-4">
                            5,500m+
                        </h3>
                        <p class="text-slate-500 text-xs font-semibold mt-1">
                            HAPE / HACE Zone
                        </p>
                        <ul class="mt-6 space-y-3 text-sm text-slate-600">
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-skull-crossbones text-red-500 mt-1 text-xs"></i>
                                Severe breathlessness
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-skull-crossbones text-red-500 mt-1 text-xs"></i>
                                Confusion
                            </li>
                            <li class="flex gap-2.5">
                                <i class="fa-solid fa-skull-crossbones text-red-500 mt-1 text-xs"></i>
                                Medical emergency
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-slate-100 text-xs">
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
    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-10">
                <span class="section-subtitle">
                    Altitude Illness Education
                </span>
                <h2 class="section-title">
                    Types Of Altitude Illness
                </h2>
                <p class="text-slate-600 mt-4 leading-relaxed">
                    Altitude illness ranges from mild discomfort to
                    life-threatening medical emergencies. Recognizing
                    symptoms early can significantly improve outcomes
                    and help prevent serious complications.
                </p>
            </div>
            <!-- ILLNESS CARDS -->
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- AMS -->
                <div
                    class="group bg-[#fdfdfd] border border-slate-200 hover:border-secondary hover:shadow-xl transition-all duration-500 overflow-hidden">
                    <div class="h-1.5 bg-yellow-500">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex flex-wrap justify-between items-center gap-4">
                            <div>
                                <span class="inline-block bg-yellow-100 text-yellow-700 px-3 py-1 text-xs font-bold uppercase tracking-[1px]">
                                    MOST COMMON
                                </span>
                                <h3 class="text-primary text-xl font-bold mt-3">
                                    Acute Mountain Sickness (AMS)
                                </h3>
                            </div>
                            <div class="w-14 h-14 bg-yellow-100 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-mountain-sun text-yellow-600 text-2xl">
                                </i>
                            </div>
                        </div>
                        <p class="text-slate-600 mt-4 text-sm leading-relaxed">
                            AMS is the most common altitude illness and
                            typically occurs above 2,500 meters when the
                            body has not fully adapted to reduced oxygen.
                        </p>
                        <div class="grid md:grid-cols-2 gap-6 mt-6">
                            <div>
                                <h4 class="font-bold text-primary text-sm mb-3">
                                    Symptoms
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• Headache</li>
                                    <li>• Nausea</li>
                                    <li>• Dizziness</li>
                                    <li>• Fatigue</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary text-sm mb-3">
                                    Treatment
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• Rest</li>
                                    <li>• Hydration</li>
                                    <li>• Slow ascent</li>
                                    <li>• Medical review if worsening</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HAPE -->
                <div
                    class="group bg-[#fdfdfd] border border-slate-200 hover:border-secondary hover:shadow-xl transition-all duration-500 overflow-hidden">
                    <div class="h-1.5 bg-red-500">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex flex-wrap justify-between items-center gap-4">
                            <div>
                                <span class="inline-block bg-red-100 text-red-700 px-3 py-1 text-xs font-bold uppercase tracking-[1px]">
                                    LIFE THREATENING
                                </span>
                                <h3 class="text-primary text-xl font-bold mt-3">
                                    High Altitude Pulmonary Edema (HAPE)
                                </h3>
                            </div>
                            <div class="w-14 h-14 bg-red-100 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-lungs text-red-600 text-2xl">
                                </i>
                            </div>
                        </div>
                        <p class="text-slate-600 mt-4 text-sm leading-relaxed">
                            HAPE occurs when fluid accumulates in the lungs,
                            making breathing difficult and potentially
                            becoming fatal without prompt treatment.
                        </p>
                        <div class="grid md:grid-cols-2 gap-6 mt-6">
                            <div>
                                <h4 class="font-bold text-primary text-sm mb-3">
                                    Symptoms
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• Severe breathlessness</li>
                                    <li>• Persistent cough</li>
                                    <li>• Chest tightness</li>
                                    <li>• Extreme weakness</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary text-sm mb-3">
                                    Emergency Action
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• Immediate descent</li>
                                    <li>• Oxygen therapy</li>
                                    <li>• Urgent medical attention</li>
                                    <li>• Evacuation if required</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HACE -->
                <div
                    class="group bg-#fdfdfd border border-slate-200 hover:border-secondary hover:shadow-xl transition-all duration-500 overflow-hidden">
                    <div class="h-1.5 bg-red-600">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex flex-wrap justify-between items-center gap-4">
                            <div>
                                <span class="inline-block bg-red-100 text-red-700 px-3 py-1 text-xs font-bold uppercase tracking-[1px]">
                                    CRITICAL EMERGENCY
                                </span>
                                <h3 class="text-primary text-xl font-bold mt-3">
                                    High Altitude Cerebral Edema (HACE)
                                </h3>
                            </div>
                            <div class="w-14 h-14 bg-red-100 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-brain text-red-600 text-2xl">
                                </i>
                            </div>
                        </div>
                        <p class="text-slate-600 mt-4 text-sm leading-relaxed">
                            HACE develops when swelling affects the brain.
                            It is a medical emergency that requires immediate
                            descent and urgent treatment.
                        </p>
                        <div class="grid md:grid-cols-2 gap-6 mt-6">
                            <div>
                                <h4 class="font-bold text-primary text-sm mb-3">
                                    Symptoms
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• Confusion</li>
                                    <li>• Loss of coordination</li>
                                    <li>• Severe headache</li>
                                    <li>• Altered consciousness</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary text-sm mb-3">
                                    Emergency Action
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• Immediate descent</li>
                                    <li>• Oxygen support</li>
                                    <li>• Emergency evacuation</li>
                                    <li>• Immediate medical care</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DEHYDRATION -->
                <div
                    class="group bg-[#fdfdfd] border border-slate-200 hover:border-secondary hover:shadow-xl transition-all duration-500 overflow-hidden">
                    <div class="h-1.5 bg-blue-500">
                    </div>
                    <div class="p-6 md:p-8">
                        <div class="flex flex-wrap justify-between items-center gap-4">
                            <div>
                                <span class="inline-block bg-blue-100 text-blue-700 px-3 py-1 text-xs font-bold uppercase tracking-[1px]">
                                    COMMON CONDITION
                                </span>
                                <h3 class="text-primary text-xl font-bold mt-3">
                                    Dehydration & Exhaustion
                                </h3>
                            </div>
                            <div class="w-14 h-14 bg-blue-100 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-droplet text-blue-600 text-2xl">
                                </i>
                            </div>
                        </div>
                        <p class="text-slate-600 mt-4 text-sm leading-relaxed">
                            Trekking at altitude increases fluid loss and
                            physical strain, which may worsen altitude
                            symptoms if not addressed.
                        </p>
                        <div class="grid md:grid-cols-2 gap-6 mt-6">
                            <div>
                                <h4 class="font-bold text-primary text-sm mb-3">
                                    Symptoms
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• Dry mouth</li>
                                    <li>• Fatigue</li>
                                    <li>• Muscle weakness</li>
                                    <li>• Reduced performance</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary text-sm mb-3">
                                    Prevention
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li>• Regular hydration</li>
                                    <li>• Proper nutrition</li>
                                    <li>• Adequate rest</li>
                                    <li>• Pace yourself</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($coldInjury)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">

                <div class="text-center max-w-4xl mx-auto mb-10">

                    <span class="section-subtitle">
                        Cold Weather Medicine
                    </span>

                    <h2 class="section-title">
                        {{ $coldInjury->post_title }}
                    </h2>

                    <p class="text-slate-600 mt-4 leading-relaxed">
                        Extreme cold exposure can lead to serious injuries
                        affecting the skin, tissues and entire body.
                        Understanding the warning signs can help prevent
                        long-term damage and life-threatening complications.
                    </p>

                </div>


                <div class="grid lg:grid-cols-12 gap-0 overflow-hidden bg-[#fdfdfd] border border-slate-200 mb-10">

                    <div class="lg:col-span-5">

                        <img src="{{ !empty($coldInjury->banner)
                            ? asset('uploads/medium/' . $coldInjury->banner)
                            : asset('uploads/medium/default.webp') }}"
                            alt="{{ $coldInjury->post_title }}" class="w-full h-full min-h-[360px] object-cover">

                    </div>


                    <div class="lg:col-span-7 p-8 lg:p-12 flex flex-col justify-center">

                        <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                            {{ $coldInjury->sub_title }}
                        </span>

                        <h3 class="text-primary text-2xl md:text-3xl font-bold mt-3">
                            Cold Injuries Can Develop Faster Than You Think
                        </h3>

                        <p class="text-slate-600 mt-4 leading-relaxed">
                            {{ $coldInjury->post_excerpt }}
                        </p>

                        <div class="grid md:grid-cols-2 gap-4 mt-8">

                            @foreach (preg_split('/\r\n|\r|\n/', trim($coldInjury->post_content)) as $item)
                                @if (trim($item))
                                    <div class="flex gap-3 text-sm text-slate-600">
                                        <i class="fa-solid fa-snowflake text-secondary mt-1 text-xs"></i>
                                        <span>{{ trim($item) }}</span>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                    </div>
                </div>
                <div class="bg-primary overflow-hidden">
                    <div class="grid lg:grid-cols-12 items-center">

                        <div class="lg:col-span-7 p-8 lg:p-12">

                            <span class="text-secondary text-xs font-bold uppercase tracking-[2px]">
                                Immediate First Aid
                            </span>

                            <h3 class="text-white text-2xl md:text-3xl font-bold mt-3">
                                What To Do If Cold Injury Occurs
                            </h3>

                            <div class="grid md:grid-cols-2 gap-4 mt-8">

                                <div class="flex gap-3 text-sm">
                                    <i class="fa-solid fa-circle-check text-secondary mt-1 text-xs"></i>
                                    <span class="text-white">Move to shelter immediately</span>
                                </div>

                                <div class="flex gap-3 text-sm">
                                    <i class="fa-solid fa-circle-check text-secondary mt-1 text-xs"></i>
                                    <span class="text-white">Remove wet clothing</span>
                                </div>

                                <div class="flex gap-3 text-sm">
                                    <i class="fa-solid fa-circle-check text-secondary mt-1 text-xs"></i>
                                    <span class="text-white">Use gradual warming</span>
                                </div>

                                <div class="flex gap-3 text-sm">
                                    <i class="fa-solid fa-circle-check text-secondary mt-1 text-xs"></i>
                                    <span class="text-white">Avoid rubbing affected areas</span>
                                </div>

                                <div class="flex gap-3 text-sm">
                                    <i class="fa-solid fa-circle-check text-secondary mt-1 text-xs"></i>
                                    <span class="text-white">Stay hydrated</span>
                                </div>

                                <div class="flex gap-3 text-sm">
                                    <i class="fa-solid fa-circle-check text-secondary mt-1 text-xs"></i>
                                    <span class="text-white">Seek medical assistance</span>
                                </div>

                            </div>
                        </div>


                        <div class="lg:col-span-5 bg-primary/95 p-8 lg:p-12 h-full flex items-center">

                            <div>

                                <i class="fa-solid fa-snowflake text-secondary text-4xl"></i>

                                <h4 class="text-white text-xl md:text-2xl font-bold mt-4">
                                    Prevention Is Always Better Than Treatment
                                </h4>

                                <p class="text-white/70 mt-3 text-sm leading-relaxed">
                                    Proper clothing, layering, hydration,
                                    nutrition and weather awareness remain
                                    the best protection against cold injuries.
                                </p>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    @endif
@endsection
