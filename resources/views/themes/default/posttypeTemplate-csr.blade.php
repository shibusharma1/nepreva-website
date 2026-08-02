@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
       @include('themes.default.common.herobanner')
   @if ($csrhero)
    <!-- CSR MISSION -->
    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT CONTENT -->
                <div>

                    <span class="section-subtitle">
                        {{ $csrhero->sub_title }}
                    </span>

                    <h2 class="section-title mt-4">
                        {{ $csrhero->post_title }}
                    </h2>

                    <p class="mt-8 text-slate-600 leading-8">
                        {{ $csrhero->post_excerpt }}
                    </p>

                    <p class="mt-6 text-slate-600 leading-8">
                        {{ trim($csrhero->post_content) }}
                    </p>


                    <!-- HIGHLIGHTS -->
                    <div class="grid sm:grid-cols-2 gap-5 mt-10">

                        <div class="flex items-start gap-4">

                            <div class="w-12 h-12 bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-heart-pulse text-primary"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-primary">
                                    Free Health Services
                                </h4>

                                <p class="text-slate-500 text-sm mt-1">
                                    Medical camps and preventive care programs.
                                </p>
                            </div>

                        </div>


                        <div class="flex items-start gap-4">

                            <div class="w-12 h-12 bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-hand-holding-droplet text-secondary"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-primary">
                                    Blood Donation
                                </h4>

                                <p class="text-slate-500 text-sm mt-1">
                                    Supporting lifesaving donation initiatives.
                                </p>
                            </div>

                        </div>


                        <div class="flex items-start gap-4">

                            <div class="w-12 h-12 bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-kit-medical text-primary"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-primary">
                                    First Aid Training
                                </h4>

                                <p class="text-slate-500 text-sm mt-1">
                                    Empowering communities with emergency skills.
                                </p>
                            </div>

                        </div>


                        <div class="flex items-start gap-4">

                            <div class="w-12 h-12 bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-people-group text-secondary"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-primary">
                                    Community Engagement
                                </h4>

                                <p class="text-slate-500 text-sm mt-1">
                                    Supporting local events and social initiatives.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- RIGHT CONTENT -->
                <div class="relative">

                    <!-- MAIN IMAGE -->
                    <img src="{{ !empty($csrhero->banner)
                        ? asset('uploads/medium/' . $csrhero->banner)
                        : asset('uploads/medium/default.webp') }}"
                        alt="{{ $csrhero->post_title }}"
                        class="w-full h-[600px] object-cover shadow-[0_25px_60px_rgba(0,0,0,.10)]">


                    <!-- FLOATING CARD -->
                    <div class="absolute bottom-8 left-8 bg-white p-6 shadow-xl max-w-[260px]">

                        <span class="text-secondary font-bold">
                            Since 1982
                        </span>

                        <h4 class="text-primary text-xl font-black mt-2">
                            Serving Communities Across Nepal
                        </h4>

                        <p class="text-slate-500 text-sm mt-3">
                            Delivering healthcare outreach, education and
                            humanitarian support for more than four decades.
                        </p>

                    </div>


                    <!-- TOP BADGE -->
                    <div class="absolute top-6 right-6 bg-primary text-white px-5 py-3 shadow-lg">

                        <div class="text-3xl font-black">
                            42+
                        </div>

                        <div class="text-xs uppercase tracking-wide">
                            Years of Impact
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
@endif
    @if ($csrfeaturedheading)
    <section class="section-padding bg-slate-200 overflow-hidden">
        <div class="container-custom">

            <!-- HEADING -->
            <div class="text-center max-w-4xl mx-auto mb-12">

                <span class="section-subtitle">
                    {{ $csrfeaturedheading->sub_title }}
                </span>

                <h2 class="section-title">
                    {{ $csrfeaturedheading->post_title }}
                </h2>

                <p class="text-slate-600 mt-6 leading-8">
                    {{ $csrfeaturedheading->post_excerpt }}
                </p>

            </div>
                        <!-- PROGRAMS -->
            <div class="grid lg:grid-cols-2 gap-8">

                @foreach ($csrfeatured as $csrItem)

                    <div
                        class="group bg-slate-100 border border-slate-200 hover:border-secondary transition-all duration-500 overflow-hidden">

                        <div class="grid md:grid-cols-2">

                            <div class="overflow-hidden">

                                <img src="{{ !empty($csrItem->banner)
                                    ? asset('uploads/medium/' . $csrItem->banner)
                                    : asset('uploads/medium/default.webp') }}"
                                    alt="{{ $csrItem->post_title }}"
                                    class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110">

                            </div>


                            <div class="p-8">

                                <div
                                    class="w-14 h-14
                                    {{ $loop->odd ? 'bg-primary/10' : 'bg-secondary/10' }}
                                    flex items-center justify-center mb-5">

                                    <i
                                        class="{{ $csrItem->associated_title }}
                                        {{ $loop->odd ? 'text-primary' : 'text-secondary' }}
                                        text-xl">
                                    </i>

                                </div>


                                <h3 class="text-primary text-2xl font-black">
                                    {{ $csrItem->post_title }}
                                </h3>


                                <p class="text-slate-600 mt-5 leading-7">
                                    {{ trim($csrItem->post_content) }}
                                </p>


                                <div class="mt-6">

                                    <span class="inline-flex items-center gap-2 text-secondary font-semibold">

                                        <i class="{{ $csrItem->sub_title }}"></i>

                                        {{ $csrItem->post_excerpt }}

                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>
    </section>
@endif


   @if ($featuredstory)
    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">

            <!-- FEATURED STORY -->
            <div class="bg-primary overflow-hidden">

                <div class="grid lg:grid-cols-12 items-center">

                    <!-- IMAGE -->
                    <div class="lg:col-span-5">

                        <img src="{{ !empty($featuredstory->banner)
                            ? asset('uploads/medium/' . $featuredstory->banner)
                            : asset('uploads/medium/default.webp') }}"
                            alt="{{ $featuredstory->post_title }}"
                            class="w-full h-full object-cover">

                    </div>


                    <!-- CONTENT -->
                    <div class="lg:col-span-7 p-10 lg:p-16">

                        <span class="text-secondary font-bold uppercase tracking-[2px]">
                            {{ $featuredstory->sub_title }}
                        </span>


                        <h3 class="text-white text-4xl font-black mt-4">
                            {{ $featuredstory->post_title }}
                        </h3>


                        <p class="text-white/80 mt-6 leading-8">
                            {{ trim($featuredstory->post_excerpt) }}
                        </p>


                        <p class="text-white/80 mt-6 leading-8">
                            {{ trim($featuredstory->post_content) }}
                        </p>

                    </div>

                </div>

            </div>

        </div>
    </section>
@endif
@endsection
