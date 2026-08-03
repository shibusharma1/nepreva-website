@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')

    @php
        $aboutIntro = $aboutsection->get(0);
        $directorSection = $aboutsection->get(1);
        $visionMissionSection = $aboutsection->get(2);
        $whyChooseSection = $aboutsection->get(3);

        $vision = $missionvisionvalue->get(0);
        $mission = $missionvisionvalue->get(1);
        $values = $missionvisionvalue->get(2);
    @endphp

    @if ($aboutIntro)
        <section class="section-padding bg-white">
            <div class="container-custom">
                <div class="grid lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-7">
                        <span class="section-subtitle">
                            {{ $aboutIntro->sub_title }}
                        </span>
                        <h2 class="section-title mt-4">
                            {{ $aboutIntro->post_title }}
                        </h2>
                        <div class="w-20 h-1 bg-secondary mt-6 mb-8">
                        </div>
                        <p class="text-slate-600 leading-8">
                            {{ $aboutIntro->post_excerpt }}
                        </p>
                        <p class="text-slate-600 leading-8 mt-6">
                            {{ $aboutIntro->post_content }}
                        </p>
                    </div>
                    <div class="lg:col-span-5">
                        <div class="relative">
                            <img src="{{ !empty($aboutIntro->banner)
                                ? asset('uploads/medium/' . $aboutIntro->banner)
                                : asset('themes-assets/img/ciwec.webp') }}"
                                alt="{{ $aboutIntro->post_title }}" class="w-full h-[500px] object-cover">

                            <div class="absolute bottom-0 right-0
                        bg-primary text-white p-8">
                                @php
                                    $experienceParts = preg_split(
                                        '/(?<=\+)\s+/',
                                        trim($aboutIntro->meta_keyword ?? ''),
                                        2,
                                    );
                                @endphp
                                <h3 class="text-4xl font-black">
                                    {{ $experienceParts[0] ?? '' }}
                                </h3>
                                <p>
                                    {{ $experienceParts[1] ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif

    @if ($directorSection)
        <section class="bg-slate-100 section-padding">
            <div class="container-custom">

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">

                    <!-- Image -->
                    <div class="lg:col-span-4">

                        <img src="{{ !empty($directorSection->banner)
                            ? asset('uploads/medium/' . $directorSection->banner)
                            : asset('uploads/medium/default.webp') }}"
                            alt="{{ $directorSection->post_title }}"
                            class="w-full max-w-[220px] sm:max-w-[260px] lg:max-w-[320px] mx-auto rounded-full">

                    </div>

                    <!-- Content -->
                    <div class="lg:col-span-8 text-center lg:text-left">

                        <span class="section-subtitle">
                            {{ $directorSection->sub_title }}
                        </span>

                        <h2 class="section-title mt-3 lg:mt-4">
                            {{ $directorSection->post_title }}
                        </h2>

                        <blockquote class="mt-6 lg:mt-8 text-base sm:text-lg leading-8 lg:leading-9 text-slate-600 italic">
                            {{ $directorSection->post_excerpt }}
                        </blockquote>

                        <div class="mt-6 lg:mt-8">

                            <h4 class="font-black text-primary text-lg">
                                {{ $directorSection->meta_keyword }}
                            </h4>

                            <p class="text-slate-500 mt-1">
                                {{ $directorSection->meta_description }}
                            </p>

                        </div>

                    </div>

                </div>
            </div>
        </section>
    @endif

    @if ($visionMissionSection)
        <section class="section-padding bg-white overflow-hidden">
            <div class="container-custom">

                <!-- HEADING -->
                <div class="text-center mb-12">

                    <span class="section-subtitle">
                        {{ $visionMissionSection->sub_title }}
                    </span>

                    <h2 class="section-title">
                        {{ $visionMissionSection->post_title }}
                    </h2>

                    <p
                        class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                        {{ $visionMissionSection->post_excerpt }}
                    </p>

                </div>

                <!-- CARDS -->
                <div class="grid lg:grid-cols-3 gap-8">
                    @if ($vision)
                        <!-- VISION -->
                        <div
                            class="group
                                    relative
                                    bg-white
                                    border
                                    border-slate-200
                                    p-10
                                    hover:border-secondary
                                    hover:-translate-y-2
                                    hover:shadow-[0_20px_50px_rgba(0,0,0,.08)]
                                    transition-all duration-500">

                            <div
                                class="w-20 h-20
                                        bg-primary/5
                                        flex
                                        items-center
                                        justify-center
                                        mb-8">

                                <i class="{{ $vision->associated_title }}
                                        text-primary
                                        text-3xl">
                                </i>
                            </div>
                            <h3 class="text-primary
                                        text-3xl
                                        font-black
                                        mb-6">
                                {{ $vision->post_title }}
                            </h3>

                            <p class="text-slate-600 leading-8">
                                {{ $vision->post_excerpt }}
                            </p>

                            <div
                                class="absolute
                                    bottom-0
                                    left-0
                                    w-0
                                    h-1
                                    bg-secondary
                                    group-hover:w-full
                                    transition-all duration-500">
                            </div>
                        </div>
                    @endif
                    @if ($mission)
                        <div
                            class="group
                                    relative
                                    bg-primary
                                    text-white
                                    p-10
                                    hover:-translate-y-2
                                    hover:shadow-[0_20px_50px_rgba(0,0,0,.12)]
                                    transition-all duration-500">

                            <div
                                class="w-20 h-20
                                    bg-white/10
                                    flex
                                    items-center
                                    justify-center
                                    mb-8">
                                <i class="{{ $mission->associated_title }} text-white text-3xl">
                                </i>
                            </div>
                            <h3 class="text-3xl
                                        font-black
                                        mb-6">
                                {{ $mission->post_title }}
                            </h3>

                            <p class="text-white/85 leading-8">
                                {{ $mission->post_excerpt }}
                            </p>

                            <div class="absolute
                                        bottom-0
                                        left-0
                                        w-full
                                        h-1
                                        bg-secondary">
                            </div>
                        </div>
                    @endif
                    @if ($values)
                        <!-- VALUES -->
                        <div
                            class="group
                                    relative
                                    bg-white
                                    border
                                    border-slate-200
                                    p-10
                                    hover:border-secondary
                                    hover:-translate-y-2
                                    hover:shadow-[0_20px_50px_rgba(0,0,0,.08)]
                                    transition-all duration-500">

                            <div class="w-20 h-20
                                    bg-primary/5
                                    flex
                                    items-center
                                    justify-center
                                    mb-8">

                                <i class="{{ $values->associated_title }} text-primary text-3xl">
                                </i>
                            </div>
                            <h3 class="text-primary text-3xl font-black mb-6">
                                {{ $values->post_title }}
                            </h3>

                            @php
                                $valueItems = preg_split('/\r\n|\r|\n/', trim($values->post_content ?? ''));
                                $valueItems = array_values(array_filter(array_map('trim', $valueItems)));
                            @endphp
                            <ul class="space-y-4">
                                @foreach ($valueItems as $valueItem)
                                    <li class="flex items-center gap-3">
                                        <i class="fa-solid fa-check text-secondary">
                                        </i>

                                        <span class="text-slate-700">
                                            {{ $valueItem }}
                                        </span>

                                    </li>
                                @endforeach
                            </ul>

                            <div
                                class="absolute
                                        bottom-0
                                        left-0
                                        w-0
                                        h-1
                                        bg-secondary
                                        group-hover:w-full
                                        transition-all duration-500">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif
    @if ($whyChooseSection)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">
                <div class="text-center mb-12">
                    <span class="section-subtitle">
                        {{ $whyChooseSection->sub_title }}
                    </span>

                    <h2 class="section-title">
                        {{ $whyChooseSection->post_title }}
                    </h2>

                    <p class="max-w-3xl mx-auto
                            text-slate-600
                            mt-6
                            leading-8">
                        {{ $whyChooseSection->post_excerpt }}
                    </p>

                </div>
                <!-- STATS -->
                <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                    <!-- ITEM -->
                    <div
                        class="bg-white border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(0,0,0,.08)] transition-all duration-500">

                        <div class="w-16 h-16 mx-auto bg-primary/5 flex items-center justify-center mb-6">
                            <i class="fa-solid fa-calendar-check text-primary text-2xl"></i>
                        </div>

                        <h3 class="text-primary text-4xl font-black">
                            42+
                        </h3>

                        <p class="mt-4 text-slate-600 font-medium">
                            Years Of Excellence
                        </p>

                    </div>

                    <!-- ITEM -->
                    <div class="bg-white border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(0,0,0,.08)] transition-all duration-500">
                        <div class="w-16 h-16 mx-auto bg-primary/5 flex items-center justify-center mb-6">
                            <i class="fa-solid fa-globe text-primary text-2xl"> </i>
                        </div>

                        <h3 class="text-primary text-4xl font-black">
                            170+
                        </h3>

                        <p class="mt-4 text-slate-600 font-medium">
                            Nationalities Served
                        </p>

                    </div>

                    <!-- ITEM -->
                    <div class="bg-white border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(0,0,0,.08)] transition-all duration-500">
                        <div class="w-16 h-16 mx-auto bg-primary/5 flex items-center justify-center mb-6">
                            <i class="fa-solid fa-user-doctor text-primary text-2xl"> </i>
                        </div>
                        <h3 class="text-primary text-4xl font-black">
                            80+
                        </h3>
                        <p class="mt-4 text-slate-600 font-medium">
                            Medical Specialists
                        </p>
                    </div>
                    <!-- ITEM -->
                    <div class="bg-primary text-white p-8 text-center relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-secondary/20 rounded-full translate-x-10 -translate-y-10">
                        </div>

                        <div class="w-16 h-16 mx-auto bg-white/10 flex items-center justify-center mb-6">
                            <i class="fa-solid fa-award text-white text-2xl"></i>
                        </div>

                        <h3 class="text-4xl font-black">
                            ISO
                        </h3>

                        <p class="mt-4 text-white/80 font-medium">
                            Internationally Certified Healthcare
                        </p>

                    </div>

                </div>
                <!-- TRUST BAR -->
                <div class="mt-16 bg-white border border-slate-200 p-8 lg:p-10">
                    <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">
                        <div>
                            <h4 class="text-primary font-black text-xl mb-3">
                                Travel Medicine Leaders
                            </h4>

                            <p class="text-slate-600
                        leading-7">
                                Internationally recognized expertise
                                in travel and expedition medicine.
                            </p>

                        </div>

                        <div>

                            <h4
                                class="text-primary
                        font-black
                        text-xl
                        mb-3">
                                Research Driven
                            </h4>

                            <p class="text-slate-600
                        leading-7">
                                Published research and global
                                contributions to travel health.
                            </p>

                        </div>

                        <div>

                            <h4
                                class="text-primary
                        font-black
                        text-xl
                        mb-3">
                                International Standards
                            </h4>

                            <p class="text-slate-600
                        leading-7">
                                Delivering healthcare according
                                to internationally accepted protocols.
                            </p>

                        </div>

                        <div>

                            <h4
                                class="text-primary
                        font-black
                        text-xl
                        mb-3">
                                Patient First
                            </h4>

                            <p class="text-slate-600
                        leading-7">
                                Compassionate, personalized and
                                responsive healthcare services.
                            </p>

                        </div>

                    </div>
                </div>

            </div>
        </section>
    @endif

    <section class="section-padding relative overflow-hidden bg-primary">
        <div
            class="absolute
                    top-0
                    left-0
                    w-[400px]
                    h-[400px]
                    bg-white/[0.03]
                    rounded-full
                    -translate-x-1/2
                    -translate-y-1/2">
        </div>
        <div
            class="absolute
                    bottom-0
                    right-0
                    w-[500px]
                    h-[500px]
                    bg-secondary/[0.08]
                    rounded-full
                    translate-x-1/3
                    translate-y-1/3">
        </div>
        <div class="container-custom relative z-10">
            <div class="text-center
                        max-w-5xl
                        mx-auto">
                <span
                    class="inline-block
                            text-secondary
                            uppercase
                            tracking-[3px]
                            font-bold
                            mb-5">
                    Your Health, Our Commitment
                </span>
                <!-- TITLE -->
                <h2
                    class="text-white
                            text-3xl
                            md:text-4xl
                            xl:text-4xl
                            font-black
                            leading-tight">
                    Experience World-Class Healthcare
                    At CIWEC Hospital
                </h2>
                <p class="text-white/80
                            text-lg
                            leading-8
                            max-w-3xl
                            mx-auto
                            mt-8">
                            Whether you are a traveler, expatriate, diplomat,
                            corporate employee or local resident, our team is
                            committed to providing compassionate, evidence-based
                            healthcare services tailored to your needs.
                </p>
                <div
                    class="flex
                            flex-wrap
                            justify-center
                            gap-4
                            mt-10">
                    <a href="{{ url('page/bookappointment.html') }}" class="btn-primary bg-white text-primary hover:text-white">
                        Book Appointment
                    </a>
                    <a href="{{ url('page/contact.html') }}" class="btn-secondary">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
