@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
       @include('themes.default.common.herobanner')

    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADING -->
            <div class="text-center mb-12">
                <span class="section-subtitle">
                    Evolution Of CIWEC
                </span>
                <h2 class="section-title">
                    Growing With Purpose
                </h2>
                <p class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                    Over four decades, CIWEC has continuously evolved
                    from a specialized travel medicine clinic into a
                    comprehensive healthcare institution trusted by
                    patients from around the world.
                </p>
            </div>
            <!-- JOURNEY -->
            <div class="space-y-8">
                <!-- ROW 1 -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div
                            class="inline-flex
                        items-center
                        bg-primary
                        text-white
                        px-5 py-2
                        font-bold
                        mb-6">
                            1982
                        </div>
                        <h3
                            class="text-primary
                        text-3xl
                        font-black
                        mb-6">
                            Humble Beginnings
                        </h3>
                        <p class="text-slate-600
                        leading-8">
                            CIWEC was founded to provide high-quality
                            healthcare services for diplomats,
                            expatriates, aid workers and travelers
                            visiting Nepal.
                        </p>
                    </div>
                    <div>
                        <img src="./assets/img/history-1982.jpg"
                            class="w-full
                        h-[300px]
                        object-cover
                        shadow-lg">
                    </div>
                </div>
                <!-- ROW 2 -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="lg:order-2">
                        <div
                            class="inline-flex
                        items-center
                        bg-secondary
                        text-white
                        px-5 py-2
                        font-bold
                        mb-6">
                            2000
                        </div>
                        <h3
                            class="text-primary
                        text-3xl
                        font-black
                        mb-6">
                            Expanding Medical Services
                        </h3>
                        <p class="text-slate-600
                        leading-8">
                            Growing demand led to the expansion of
                            healthcare services, introducing broader
                            medical specialties and enhanced patient care.
                        </p>
                    </div>
                    <div class="lg:order-1">
                        <img src="./assets/img/history/history1.webp"
                            class="w-full
                        h-[300px]
                        object-cover
                        shadow-lg">
                    </div>
                </div>
                <!-- ROW 3 -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div
                            class="inline-flex
                        items-center
                        bg-primary
                        text-white
                        px-5 py-2
                        font-bold
                        mb-6">
                            2014
                        </div>
                        <h3
                            class="text-primary
                        text-3xl
                        font-black
                        mb-6">
                            Opening Of Pokhara Hospital
                        </h3>
                        <p class="text-slate-600
                        leading-8">
                            CIWEC expanded its reach by establishing a
                            fully equipped hospital in Pokhara, bringing
                            quality healthcare services closer to western Nepal.
                        </p>
                    </div>
                    <div>
                        <img src="./assets/img/history/history2.webp"
                            class="w-full
                        h-[300px]
                        object-cover
                        shadow-lg">
                    </div>
                </div>
                <!-- ROW 4 -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="lg:order-2">
                        <div
                            class="inline-flex
                        items-center
                        bg-secondary
                        text-white
                        px-5 py-2
                        font-bold
                        mb-6">
                            Today
                        </div>
                        <h3
                            class="text-primary
                        text-3xl
                        font-black
                        mb-6">
                            A Trusted Global Healthcare Partner
                        </h3>
                        <p class="text-slate-600
                        leading-8">
                            Today CIWEC serves patients from more than
                            170 nationalities and continues to be a
                            leader in travel medicine, research,
                            preventive healthcare and international
                            healthcare services.
                        </p>
                    </div>
                    <div class="lg:order-1">
                        <img src="./assets/img/history/history3.webp"
                            class="w-full
                        h-[300px]
                        object-cover
                        shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <!-- HEADING -->
            <div class="text-center mb-12">
                <span class="section-subtitle">
                    Historical Gallery
                </span>
                <h2 class="section-title">
                    Moments That Shaped CIWEC
                </h2>
                <p class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                    A visual journey through the milestones,
                    achievements and memorable moments that
                    have defined CIWEC Hospital over the years.
                </p>
            </div>
            <!-- GALLERY -->
            <div class="grid
            md:grid-cols-2
            xl:grid-cols-4
            gap-6">
                <!-- IMAGE 1 -->
                <div class="group
                relative
                overflow-hidden
                h-[320px]">
                    <img src="./assets/img/history/history1.webp"
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
                    <div class="absolute
                    bottom-0
                    left-0
                    p-6">
                        <span class="text-secondary
                        font-bold">
                            1982
                        </span>
                        <h3
                            class="text-white
                        font-black
                        text-xl
                        mt-2">
                            Foundation Of CIWEC
                        </h3>
                    </div>
                </div>
                <!-- IMAGE 2 -->
                <div class="group
                relative
                overflow-hidden
                h-[320px]">
                    <img src="./assets/img/history/history2.webp"
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
                    <div class="absolute
                    bottom-0
                    left-0
                    p-6">
                        <span class="text-secondary
                        font-bold">
                            1995
                        </span>
                        <h3
                            class="text-white
                        font-black
                        text-xl
                        mt-2">
                            Expanding Medical Services
                        </h3>
                    </div>
                </div>
                <!-- LARGE IMAGE -->
                <div
                    class="group
                relative
                overflow-hidden
                h-[320px]
                md:col-span-2">
                    <img src="./assets/img/history/history3.webp"
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
                    <div class="absolute
                    bottom-0
                    left-0
                    p-8">
                        <span class="text-secondary
                        font-bold">
                            2005
                        </span>
                        <h3
                            class="text-white
                        font-black
                        text-3xl
                        mt-2">
                            International Recognition
                        </h3>
                        <p class="text-white/80
                        mt-4
                        max-w-xl">
                            Recognition as one of South Asia's
                            leading travel medicine centers.
                        </p>
                    </div>
                </div>
                <!-- IMAGE 4 -->
                <div
                    class="group
                relative
                overflow-hidden
                h-[320px]
                md:col-span-2">
                    <img src="./assets/img/history/history1.webp"
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
                    <div class="absolute
                    bottom-0
                    left-0
                    p-8">
                        <span class="text-secondary
                        font-bold">
                            2014
                        </span>
                        <h3
                            class="text-white
                        font-black
                        text-3xl
                        mt-2">
                            CIWEC Pokhara Opens
                        </h3>
                        <p class="text-white/80
                        mt-4
                        max-w-xl">
                            Expanding healthcare access to western Nepal.
                        </p>
                    </div>
                </div>
                <!-- IMAGE 5 -->
                <div class="group
                relative
                overflow-hidden
                h-[320px]">
                    <img src="./assets/img/history/history2.webp"
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
                    <div class="absolute
                    bottom-0
                    left-0
                    p-6">
                        <span class="text-secondary
                        font-bold">
                            Today
                        </span>
                        <h3
                            class="text-white
                        font-black
                        text-xl
                        mt-2">
                            World-Class Healthcare
                        </h3>
                    </div>
                </div>
                <!-- IMAGE 6 -->
                <div class="group
                relative
                overflow-hidden
                h-[320px]">
                    <img src="./assets/img/history/history3.webp"
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
                    <div class="absolute
                    bottom-0
                    left-0
                    p-6">
                        <span class="text-secondary
                        font-bold">
                            Future
                        </span>
                        <h3
                            class="text-white
                        font-black
                        text-xl
                        mt-2">
                            Continuing Innovation
                        </h3>
                    </div>
                </div>
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
                    <a href="./bookappointment.php" class="btn-secondary">
                        Book Appointment
                    </a>
                    <a href="./doctors.php" class="btn-light">
                        Find A Doctor
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding bg-slate-200 overflow-hidden">
        <div class="container-custom">
            <div class="text-center mb-12">
                <span class="section-subtitle">
                    Leadership Legacy
                </span>
                <h2 class="section-title">
                    The People Who Shaped CIWEC
                </h2>
                <p class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                    Behind every milestone stands a team of visionary
                    healthcare professionals whose dedication and
                    leadership helped shape CIWEC into the institution
                    it is today.
                </p>
            </div>
            <div class="grid
            md:grid-cols-2
            xl:grid-cols-4
            gap-8">
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
                    <img src="./assets/img/doctors/samrat.png" class="w-full h-[320px] object-cover">
                    <div class="p-6">
                        <h3 class="text-primary
                        font-black
                        text-xl">
                            Dr. Founder Name
                        </h3>
                        <p class="text-secondary
                        font-semibold
                        mt-2">
                            Founder
                        </p>
                        <p class="text-slate-500
                        text-sm
                        mt-4">
                            Established CIWEC's vision for
                            international healthcare.
                        </p>
                    </div>
                </div>
                <div
                    class="bg-white
                border
                border-slate-200
                text-center
                overflow-hidden
                hover:border-secondary
                hover:-translate-y-2
                transition-all duration-500">
                    <img src="./assets/img/doctors/samrat.png" class="w-full h-[320px] object-cover">
                    <div class="p-6">
                        <h3 class="text-primary
                        font-black
                        text-xl">
                            Dr. Founder Name
                        </h3>
                        <p class="text-secondary
                        font-semibold
                        mt-2">
                            Founder
                        </p>
                        <p class="text-slate-500
                        text-sm
                        mt-4">
                            Established CIWEC's vision for
                            international healthcare.
                        </p>
                    </div>
                </div>
                <div
                    class="bg-white
                border
                border-slate-200
                text-center
                overflow-hidden
                hover:border-secondary
                hover:-translate-y-2
                transition-all duration-500">
                    <img src="./assets/img/doctors/samrat.png" class="w-full h-[320px] object-cover">
                    <div class="p-6">
                        <h3 class="text-primary
                        font-black
                        text-xl">
                            Dr. Founder Name
                        </h3>
                        <p class="text-secondary
                        font-semibold
                        mt-2">
                            Founder
                        </p>
                        <p class="text-slate-500
                        text-sm
                        mt-4">
                            Established CIWEC's vision for
                            international healthcare.
                        </p>
                    </div>
                </div>
                <div
                    class="bg-white
                border
                border-slate-200
                text-center
                overflow-hidden
                hover:border-secondary
                hover:-translate-y-2
                transition-all duration-500">
                    <img src="./assets/img/doctors/samrat.png" class="w-full h-[320px] object-cover">
                    <div class="p-6">
                        <h3 class="text-primary
                        font-black
                        text-xl">
                            Dr. Founder Name
                        </h3>
                        <p class="text-secondary
                        font-semibold
                        mt-2">
                            Founder
                        </p>
                        <p class="text-slate-500
                        text-sm
                        mt-4">
                            Established CIWEC's vision for
                            international healthcare.
                        </p>
                    </div>
                </div>
                <!-- Repeat 3 More -->
            </div>
        </div>
    </section>
@endsection
