@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')

    @if ($historyheading)
        <section class="section-padding bg-slate-100 overflow-hidden">
            <div class="container-custom">

                <!-- HEADING -->
                <div class="text-center mb-12">

                    <span class="section-subtitle">
                        {{ $historyheading->sub_title }}
                    </span>

                    <h2 class="section-title">
                        {{ $historyheading->post_title }}
                    </h2>

                    <p
                        class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                        {{ $historyheading->post_excerpt }}
                    </p>

                </div>

                <!-- JOURNEY -->
                <div class="space-y-8">

                    @foreach ($history as $historyItem)
                        <div class="grid lg:grid-cols-2 gap-12 items-center">

                            <!-- CONTENT -->
                            <div class="{{ $loop->even ? 'lg:order-2' : '' }}">

                                <div
                                    class="inline-flex
                                items-center
                                {{ $loop->odd ? 'bg-primary' : 'bg-secondary' }}
                                text-white
                                px-5 py-2
                                font-bold
                                mb-6">

                                    {{ $historyItem->sub_title }}

                                </div>

                                <h3
                                    class="text-primary
                                text-3xl
                                font-black
                                mb-6">

                                    {{ $historyItem->post_title }}

                                </h3>

                                <p class="text-slate-600
                            leading-8">

                                    {{ $historyItem->post_excerpt }}

                                </p>

                            </div>


                            <!-- IMAGE -->
                            <div class="{{ $loop->even ? 'lg:order-1' : '' }}">

                                <img src="{{ !empty($historyItem->banner)
                                    ? asset('uploads/medium/' . $historyItem->banner)
                                    : asset('uploads/medium/default.webp') }}"
                                    alt="{{ $historyItem->post_title }}"
                                    class="w-full
                                h-[300px]
                                object-cover
                                shadow-lg">

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>
        </section>
    @endif

    @if ($historicalgalleryheading)
        <section class="section-padding bg-white overflow-hidden">
            <div class="container-custom">

                <!-- HEADING -->
                <div class="text-center mb-12">

                    <span class="section-subtitle">
                        {{ $historicalgalleryheading->sub_title }}
                    </span>

                    <h2 class="section-title">
                        {{ $historicalgalleryheading->post_title }}
                    </h2>

                    <p
                        class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                        {{ $historicalgalleryheading->post_excerpt }}
                    </p>

                </div>

                <!-- GALLERY -->
                <div class="grid
            md:grid-cols-2
            xl:grid-cols-4
            gap-6">

                    @foreach ($historicalgallery as $galleryItem)
                        @php
                            /*
                             * Original UI:
                             * Item 3 and Item 4 are large cards.
                             * All remaining items are normal cards.
                             */
                            $isLargeGalleryItem = in_array($loop->iteration, [3, 4]);
                        @endphp

                        <div
                            class="group
                        relative
                        overflow-hidden
                        h-[320px]{{ $isLargeGalleryItem
                            ? '
                                                md:col-span-2'
                            : '' }}">

                            <img src="{{ !empty($galleryItem->banner)
                                ? asset('uploads/medium/' . $galleryItem->banner)
                                : asset('uploads/medium/default.webp') }}"
                                alt="{{ $galleryItem->post_title }}"
                                class="w-full h-full object-cover
                            transition-all duration-700
                            group-hover:scale-110">

                            <div
                                class="absolute inset-0
                            bg-gradient-to-t
                            from-primary
                            via-primary/60
                            to-transparent">
                            </div>

                            <div
                                class="absolute
                            bottom-0
                            left-0
                            {{ $isLargeGalleryItem ? 'p-8' : 'p-6' }}">

                                <span class="text-secondary
                            font-bold">
                                    {{ $galleryItem->sub_title }}
                                </span>

                                <h3
                                    class="text-white
                                font-black
                                {{ $isLargeGalleryItem ? 'text-3xl' : 'text-xl' }}
                                mt-2">

                                    {{ $galleryItem->post_title }}

                                </h3>

                                @if ($isLargeGalleryItem && !empty($galleryItem->post_excerpt))
                                    <p
                                        class="text-white/80
                                mt-4
                                max-w-xl">
                                        {{ $galleryItem->post_excerpt }}
                                    </p>
                                @endif

                            </div>

                        </div>
                    @endforeach

                </div>


                <!-- QUOTE -->
                <div
                    class="mt-16
                bg-slate-100
                border-l-4
                border-secondary
                p-10
                max-w-5xl
                mx-auto">

                    <p
                        class="text-xl
                    md:text-2xl
                    italic
                    text-slate-700
                    leading-10
                    text-center">

                        "Every photograph tells a story of dedication,
                        innovation and our unwavering commitment to
                        providing exceptional healthcare services."

                    </p>

                </div>

            </div>
        </section>
    @endif

    <section class="relative overflow-hidden bg-primary">
        <!-- DECORATION -->
        <div
            class="absolute
        top-0
        left-0
        w-[500px]
        h-[500px]
        bg-white/[0.03]
        rounded-full
        -translate-x-1/2
        -translate-y-1/2">
        </div>
        <div
            class="absolute
        bottom-0
        right-0
        w-[600px]
        h-[600px]
        bg-secondary/[0.08]
        rounded-full
        translate-x-1/3
        translate-y-1/3">
        </div>
        <div class="container-custom relative z-10">
            <div class="py-8
            lg:py-8
            text-center
            max-w-5xl
            mx-auto">
                <!-- SUBTITLE -->
                <span
                    class="inline-block
                text-secondary
                font-bold
                uppercase
                tracking-[4px]
                mb-5">
                    Continuing The Journey
                </span>
                <!-- TITLE -->
                <h2
                    class="text-white
                text-3xl
                md:text-4xl
                xl:text-4xl
                font-black
                leading-tight">
                    Building On More Than
                    Four Decades Of Excellence
                </h2>
                <!-- TEXT -->
                <p
                    class="max-w-3xl
                mx-auto
                text-white/80
                text-lg
                leading-8
                mt-8">
                    Our history is built on trust, innovation,
                    compassion and clinical excellence.
                    As we move forward, CIWEC Hospital remains
                    committed to delivering world-class healthcare
                    for future generations.
                </p>
                <!-- CTA BUTTONS -->
                <div
                    class="flex
                flex-wrap
                justify-center
                gap-4
                mt-12">
                    <a href="{{ url('page/bookappointment.html') }}" class="btn-secondary">
                        Book Appointment
                    </a>
                    <a href="{{ url('doctors-at-ciwec.html') }}" class="btn-light">
                        Find A Doctor
                    </a>
                </div>

            </div>
        </div>
    </section>

    @if ($foundersheading)
        <section class="section-padding bg-slate-200 overflow-hidden">
            <div class="container-custom">

                <div class="text-center mb-12">

                    <span class="section-subtitle">
                        {{ $foundersheading->sub_title }}
                    </span>

                    <h2 class="section-title">
                        {{ $foundersheading->post_title }}
                    </h2>

                    <p
                        class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                        {{ $foundersheading->post_excerpt }}
                    </p>

                </div>

                <div class="grid
            md:grid-cols-2
            xl:grid-cols-4
            gap-8">

                    @foreach ($founders as $founder)
                        <!-- PERSON -->
                        <div
                            class="bg-white
                        border
                        border-slate-200
                        text-center
                        overflow-hidden
                        hover:border-secondary
                        hover:-translate-y-2
                        transition-all duration-500">

                            <img src="{{ !empty($founder->banner)
                                ? asset('uploads/medium/' . $founder->banner)
                                : asset('uploads/medium/default.webp') }}"
                                alt="{{ $founder->post_title }}" class="w-full h-[320px] object-cover">

                            <div class="p-6">

                                <h3
                                    class="text-primary
                            font-black
                            text-xl">
                                    {{ $founder->post_title }}
                                </h3>

                                <p
                                    class="text-secondary
                            font-semibold
                            mt-2">
                                    {{ $founder->sub_title }}
                                </p>

                                <p
                                    class="text-slate-500
                            text-sm
                            mt-4">
                                    {{ $founder->post_excerpt }}
                                </p>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>
        </section>
    @endif
@endsection
