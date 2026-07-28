@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')


    <section class="section-padding bg-white">
        <div class="container-custom">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7">
                    <span class="section-subtitle">
                        About CIWEC
                    </span>
                    <h2 class="section-title mt-4">
                        Nepal's Leading Travel Medicine &
                        International Healthcare Center
                    </h2>
                    <div class="w-20 h-1 bg-secondary mt-6 mb-8">
                    </div>
                    <p class="text-slate-600 leading-8">
                        CIWEC Hospital has been providing trusted
                        healthcare services for travelers,
                        expatriates, diplomats, aid workers
                        and local communities for more than
                        four decades.
                    </p>
                    <p class="text-slate-600 leading-8 mt-6">
                        Internationally recognized for
                        travel medicine, infectious disease
                        management, preventive healthcare
                        and emergency medical support.
                    </p>
                </div>
                <div class="lg:col-span-5">
                    <div class="relative">
                        <img src="./assets/img/about/about.png" class="w-full h-[500px] object-cover">
                        <div class="absolute bottom-0 right-0
                        bg-primary text-white p-8">
                            <h3 class="text-4xl font-black">
                                42+
                            </h3>
                            <p>
                                Years Of Excellence
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 section-padding">
        <div class="container-custom">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
                <!-- Image -->
                <div class="lg:col-span-4">
                    <img src="./assets/img/about/director.png" alt="Medical Director"
                        class="w-full max-w-[220px] sm:max-w-[260px] lg:max-w-[320px] mx-auto rounded-full">
                </div>
                <!-- Content -->
                <div class="lg:col-span-8 text-center lg:text-left">
                    <span class="section-subtitle">
                        Leadership Message
                    </span>
                    <h2 class="section-title mt-3 lg:mt-4">
                        Message From The Medical Director
                    </h2>
                    <blockquote class="mt-6 lg:mt-8 text-base sm:text-lg leading-8 lg:leading-9 text-slate-600 italic">
                        "At CIWEC Hospital, our mission is to
                        deliver world-class healthcare with
                        compassion, integrity and innovation."
                    </blockquote>
                    <div class="mt-6 lg:mt-8">
                        <h4 class="font-black text-primary text-lg">
                            Dr. Prativa Pandey
                        </h4>
                        <p class="text-slate-500 mt-1">
                            Medical Director
                        </p>
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
                    What Drives Us
                </span>
                <h2 class="section-title">
                    Vision, Mission & Values
                </h2>
                <p class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                    Our commitment is built on a strong foundation of
                    patient-centered care, medical excellence and
                    international healthcare standards.
                </p>
            </div>
            <!-- CARDS -->
            <div class="grid lg:grid-cols-3 gap-8">
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
                        <i class="fa-regular fa-eye
                        text-primary
                        text-3xl">
                        </i>
                    </div>
                    <h3
                        class="text-primary
                    text-3xl
                    font-black
                    mb-6">
                        Our Vision
                    </h3>
                    <p class="text-slate-600
                    leading-8">
                        To be recognized globally as a leader in
                        Travel Medicine, International Healthcare,
                        Preventive Care and Medical Innovation,
                        delivering exceptional healthcare services
                        while improving the health and wellbeing
                        of diverse communities.
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
                <!-- MISSION -->
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
                        <i class="fa-solid fa-bullseye
                        text-white
                        text-3xl">
                        </i>
                    </div>
                    <h3 class="text-3xl
                    font-black
                    mb-6">
                        Our Mission
                    </h3>
                    <p class="text-white/85
                    leading-8">
                        To provide compassionate, evidence-based,
                        patient-centered healthcare services through
                        highly skilled professionals, advanced medical
                        practices and continuous innovation while
                        maintaining the highest ethical standards.
                    </p>
                    <div
                        class="absolute
                    bottom-0
                    left-0
                    w-full
                    h-1
                    bg-secondary">
                    </div>
                </div>
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
                    <div
                        class="w-20 h-20
                    bg-primary/5
                    flex
                    items-center
                    justify-center
                    mb-8">
                        <i class="fa-solid fa-heart
                        text-primary
                        text-3xl">
                        </i>
                    </div>
                    <h3
                        class="text-primary
                    text-3xl
                    font-black
                    mb-6">
                        Our Values
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check
                            text-secondary">
                            </i>
                            <span class="text-slate-700">
                                Compassionate Care
                            </span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check
                            text-secondary">
                            </i>
                            <span class="text-slate-700">
                                Integrity & Ethics
                            </span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check
                            text-secondary">
                            </i>
                            <span class="text-slate-700">
                                Clinical Excellence
                            </span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check
                            text-secondary">
                            </i>
                            <span class="text-slate-700">
                                Innovation
                            </span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check
                            text-secondary">
                            </i>
                            <span class="text-slate-700">
                                International Standards
                            </span>
                        </li>
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
            </div>
        </div>
    </section>

    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADING -->
            <div class="text-center mb-12">
                <span class="section-subtitle">
                    Why Choose CIWEC
                </span>
                <h2 class="section-title">
                    Trusted By Patients From Around The World
                </h2>
                <p class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                    For more than four decades, CIWEC Hospital has been
                    providing internationally recognized healthcare
                    services for travelers, expatriates, diplomats,
                    aid workers and local communities.
                </p>
            </div>
            <!-- STATS -->
            <div class="grid
            md:grid-cols-2
            xl:grid-cols-4
            gap-6">
                <!-- ITEM -->
                <div
                    class="bg-white
                border
                border-slate-200
                p-8
                text-center
                hover:border-secondary
                hover:-translate-y-2
                hover:shadow-[0_20px_50px_rgba(0,0,0,.08)]
                transition-all duration-500">
                    <div
                        class="w-16 h-16
                    mx-auto
                    bg-primary/5
                    flex
                    items-center
                    justify-center
                    mb-6">
                        <i
                            class="fa-solid fa-calendar-check
                        text-primary
                        text-2xl">
                        </i>
                    </div>
                    <h3 class="text-primary
                    text-4xl
                    font-black">
                        42+
                    </h3>
                    <p class="mt-4
                    text-slate-600
                    font-medium">
                        Years Of Excellence
                    </p>
                </div>
                <!-- ITEM -->
                <div
                    class="bg-white
                border
                border-slate-200
                p-8
                text-center
                hover:border-secondary
                hover:-translate-y-2
                hover:shadow-[0_20px_50px_rgba(0,0,0,.08)]
                transition-all duration-500">
                    <div
                        class="w-16 h-16
                    mx-auto
                    bg-primary/5
                    flex
                    items-center
                    justify-center
                    mb-6">
                        <i class="fa-solid fa-globe
                        text-primary
                        text-2xl">
                        </i>
                    </div>
                    <h3 class="text-primary
                    text-4xl
                    font-black">
                        170+
                    </h3>
                    <p class="mt-4
                    text-slate-600
                    font-medium">
                        Nationalities Served
                    </p>
                </div>
                <!-- ITEM -->
                <div
                    class="bg-white
                border
                border-slate-200
                p-8
                text-center
                hover:border-secondary
                hover:-translate-y-2
                hover:shadow-[0_20px_50px_rgba(0,0,0,.08)]
                transition-all duration-500">
                    <div
                        class="w-16 h-16
                    mx-auto
                    bg-primary/5
                    flex
                    items-center
                    justify-center
                    mb-6">
                        <i
                            class="fa-solid fa-user-doctor
                        text-primary
                        text-2xl">
                        </i>
                    </div>
                    <h3 class="text-primary
                    text-4xl
                    font-black">
                        80+
                    </h3>
                    <p class="mt-4
                    text-slate-600
                    font-medium">
                        Medical Specialists
                    </p>
                </div>
                <!-- ITEM -->
                <div
                    class="bg-primary
                text-white
                p-8
                text-center
                relative
                overflow-hidden">
                    <div
                        class="absolute
                    top-0
                    right-0
                    w-24
                    h-24
                    bg-secondary/20
                    rounded-full
                    translate-x-10
                    -translate-y-10">
                    </div>
                    <div
                        class="w-16 h-16
                    mx-auto
                    bg-white/10
                    flex
                    items-center
                    justify-center
                    mb-6">
                        <i class="fa-solid fa-award
                        text-white
                        text-2xl">
                        </i>
                    </div>
                    <h3 class="text-4xl
                    font-black">
                        ISO
                    </h3>
                    <p class="mt-4
                    text-white/80
                    font-medium">
                        Internationally Certified Healthcare
                    </p>
                </div>
            </div>
            <!-- TRUST BAR -->
            <div
                class="mt-16
            bg-white
            border
            border-slate-200
            p-8
            lg:p-10">
                <div class="grid
                md:grid-cols-2
                xl:grid-cols-4
                gap-8">
                    <div>
                        <h4
                            class="text-primary
                        font-black
                        text-xl
                        mb-3">
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
                <p
                    class="text-white/80
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
                    <a href="./bookappointment.php" class="btn-primary bg-white text-primary hover:text-white">
                        Book Appointment
                    </a>
                    <a href="./contactus.php" class="btn-secondary">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection
