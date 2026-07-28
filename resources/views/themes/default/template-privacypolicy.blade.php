@extends('themes.default.common.master')
@section('title', $data->post_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->page_thumbnail)
@section('content')
    <section id="privacy-content" class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <div class="grid lg:grid-cols-12 gap-16 items-center">
                <!-- IMAGE SIDE -->
                <div class="lg:col-span-5">
                    <div class="relative">
                        <img src="./assets/img/history/history1.webp" alt="Privacy Commitment"
                            class="w-full h-[750px] object-cover">
                        <!-- FLOATING CARD -->
                        <div class="absolute bottom-8 left-8 bg-white shadow-2xl p-6 max-w-[320px]">
                            <span class="text-secondary font-bold uppercase text-sm">
                                Our Promise
                            </span>
                            <h3 class="text-primary text-2xl font-black mt-3">
                                Trust Through Transparency
                            </h3>
                            <p class="text-slate-600 mt-3 leading-7 text-sm">
                                We maintain strict privacy standards to
                                safeguard every patient's personal and
                                medical information.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- CONTENT SIDE -->
                <div class="lg:col-span-7">
                    <span class="section-subtitle">
                        Our Privacy Commitment
                    </span>
                    <h2 class="section-title">
                        Your Privacy Is A Fundamental
                        Part Of Our Care
                    </h2>
                    <p class="text-slate-600 mt-8 leading-8">
                        At CIWEC Hospital, we understand that health
                        information is deeply personal and confidential.
                        Protecting your privacy is essential to maintaining
                        trust and delivering high-quality healthcare.
                    </p>
                    <p class="text-slate-600 mt-6 leading-8">
                        We are committed to collecting, using and storing
                        personal information responsibly while maintaining
                        transparency regarding how your information is
                        handled throughout your healthcare journey.
                    </p>
                    <!-- COMMITMENT POINTS -->
                    <div class="space-y-5 mt-10">
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                            </i>
                            <span>
                                Respecting patient confidentiality at all times.
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                            </i>
                            <span>
                                Protecting information through secure systems.
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                            </i>
                            <span>
                                Limiting access to authorized personnel only.
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                            </i>
                            <span>
                                Maintaining transparency about information use.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRIVACY PILLARS -->
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-16">
                <!-- CARD 1 -->
                <div
                    class="group bg-slate-100 border border-slate-200 p-8 hover:border-primary hover:-translate-y-2 transition-all duration-500">
                    <div class="w-20 h-20 bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fa-solid fa-user-secret text-primary text-3xl">
                        </i>
                    </div>
                    <h3 class="text-primary text-2xl font-black">
                        Confidentiality
                    </h3>
                    <p class="text-slate-600 mt-4 leading-7">
                        Your personal and medical information is treated
                        with strict confidentiality and professional care.
                    </p>
                </div>
                <!-- CARD 2 -->
                <div
                    class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                    <div class="w-20 h-20 bg-secondary/10 flex items-center justify-center mb-6">
                        <i class="fa-solid fa-lock text-secondary text-3xl">
                        </i>
                    </div>
                    <h3 class="text-primary text-2xl font-black">
                        Data Security
                    </h3>
                    <p class="text-slate-600 mt-4 leading-7">
                        Advanced security measures help protect
                        information against unauthorized access.
                    </p>
                </div>
                <!-- CARD 3 -->
                <div
                    class="group bg-slate-100 border border-slate-200 p-8 hover:border-primary hover:-translate-y-2 transition-all duration-500">
                    <div class="w-20 h-20 bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fa-solid fa-scale-balanced text-primary text-3xl">
                        </i>
                    </div>
                    <h3 class="text-primary text-2xl font-black">
                        Patient Rights
                    </h3>
                    <p class="text-slate-600 mt-4 leading-7">
                        We respect your right to understand, access
                        and manage your personal information.
                    </p>
                </div>
                <!-- CARD 4 -->
                <div
                    class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                    <div class="w-20 h-20 bg-secondary/10 flex items-center justify-center mb-6">
                        <i class="fa-solid fa-eye text-secondary text-3xl">
                        </i>
                    </div>
                    <h3 class="text-primary text-2xl font-black">
                        Transparency
                    </h3>
                    <p class="text-slate-600 mt-4 leading-7">
                        We clearly explain how information is collected,
                        used, stored and protected.
                    </p>
                </div>
            </div>
            <!-- TRUST STRIP -->
            <div class="mt-16 bg-primary overflow-hidden">
                <div class="grid lg:grid-cols-12 items-center">
                    <div class="lg:col-span-8 p-10 lg:p-14">
                        <span class="text-secondary font-bold uppercase tracking-[3px]">
                            Patient Trust
                        </span>
                        <h3 class="text-white text-4xl font-black mt-5">
                            Protecting Information With Integrity
                        </h3>
                        <p class="text-white/80 mt-6 leading-8">
                            Our commitment extends beyond compliance.
                            We strive to ensure every patient feels confident
                            that their personal and medical information is
                            handled responsibly and securely.
                        </p>
                    </div>
                    <div class="lg:col-span-4 flex items-center justify-center p-10">
                        <div class="text-center">
                            <i class="fa-solid fa-shield-heart text-secondary text-7xl">
                            </i>
                            <h4 class="text-white text-2xl font-black mt-6">
                                Privacy First
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <span class="section-subtitle">
                    Information Collection
                </span>
                <h2 class="section-title">
                    Information We Collect
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    To provide healthcare services, manage appointments,
                    improve patient experiences and operate our website
                    effectively, we may collect different types of
                    personal, medical and technical information.
                </p>
            </div>
            <!-- COLLECTION CARDS -->
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- PERSONAL INFORMATION -->
                <div
                    class="group bg-white border border-slate-200 hover:border-primary hover:-translate-y-2 transition-all duration-500 overflow-hidden">
                    <div class="h-2 bg-primary">
                    </div>
                    <div class="p-10">
                        <div class="w-20 h-20 bg-primary/10 flex items-center justify-center mb-8">
                            <i class="fa-solid fa-user text-primary text-3xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-3xl font-black">
                            Personal Information
                        </h3>
                        <p class="text-slate-600 mt-5 leading-8">
                            Information used to identify, contact and
                            manage patient relationships.
                        </p>
                        <ul class="space-y-4 mt-8">
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Full Name
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Email Address
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Phone Number
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Home Address
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Nationality
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- MEDICAL INFORMATION -->
                <div
                    class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500 overflow-hidden">
                    <div class="h-2 bg-secondary">
                    </div>
                    <div class="p-10">
                        <div class="w-20 h-20 bg-secondary/10 flex items-center justify-center mb-8">
                            <i class="fa-solid fa-notes-medical text-secondary text-3xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-3xl font-black">
                            Medical Information
                        </h3>
                        <p class="text-slate-600 mt-5 leading-8">
                            Information necessary for diagnosis,
                            treatment and continuity of care.
                        </p>
                        <ul class="space-y-4 mt-8">
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Medical History
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Vaccination Records
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Laboratory Results
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Diagnostic Reports
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Treatment Information
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- WEBSITE INFORMATION -->
                <div
                    class="group bg-white border border-slate-200 hover:border-primary hover:-translate-y-2 transition-all duration-500 overflow-hidden">
                    <div class="h-2 bg-primary">
                    </div>
                    <div class="p-10">
                        <div class="w-20 h-20 bg-primary/10 flex items-center justify-center mb-8">
                            <i class="fa-solid fa-globe text-primary text-3xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-3xl font-black">
                            Website Information
                        </h3>
                        <p class="text-slate-600 mt-5 leading-8">
                            Technical information collected to improve
                            website performance and user experience.
                        </p>
                        <ul class="space-y-4 mt-8">
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                IP Address
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Browser Information
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Device Type
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Website Usage Data
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Cookie Preferences
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- INFORMATION SOURCES -->
            <div class="mt-16 bg-white border border-slate-200 overflow-hidden">
                <div class="grid lg:grid-cols-12 items-center">
                    <div class="lg:col-span-7 p-10 lg:p-14">
                        <span class="text-secondary font-bold uppercase tracking-[3px]">
                            Information Sources
                        </span>
                        <h3 class="text-primary text-4xl font-black mt-5">
                            How Information Is Collected
                        </h3>
                        <p class="text-slate-600 mt-6 leading-8">
                            Information may be collected directly from
                            patients, through appointment forms,
                            consultations, healthcare services,
                            website interactions and communications
                            with our team.
                        </p>
                        <div class="grid md:grid-cols-2 gap-5 mt-10">
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Online Appointment Forms
                            </div>
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Patient Registration
                            </div>
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Medical Consultations
                            </div>
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Diagnostic Services
                            </div>
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Website Contact Forms
                            </div>
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Email Communications
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <img src="./assets/img/information-collection.png" alt="Information Collection"
                            class="w-full h-[500px] object-cover">
                    </div>
                </div>
            </div>
            <!-- PRIVACY NOTE -->
            <div class="mt-20 bg-primary p-10 lg:p-14 text-center">
                <i class="fa-solid fa-shield-heart text-secondary text-4xl">
                </i>
                <h3 class="text-white text-4xl font-black mt-6">
                    We Only Collect What Is Necessary
                </h3>
                <p class="text-white/80 mt-6 max-w-3xl mx-auto leading-8">
                    We strive to collect only the information required
                    to provide healthcare services, improve patient
                    experiences and meet operational or legal obligations.
                </p>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <span class="section-subtitle">
                    Information Collection
                </span>
                <h2 class="section-title">
                    Information We Collect
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    To provide healthcare services, manage appointments,
                    improve patient experiences and operate our website
                    effectively, we may collect different types of
                    personal, medical and technical information.
                </p>
            </div>
            <!-- COLLECTION CARDS -->
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- PERSONAL INFORMATION -->
                <div
                    class="group bg-white border border-slate-200 hover:border-primary hover:-translate-y-2 transition-all duration-500 overflow-hidden">
                    <div class="h-2 bg-primary">
                    </div>
                    <div class="p-10">
                        <div class="w-20 h-20 bg-primary/10 flex items-center justify-center mb-8">
                            <i class="fa-solid fa-user text-primary text-3xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-3xl font-black">
                            Personal Information
                        </h3>
                        <p class="text-slate-600 mt-5 leading-8">
                            Information used to identify, contact and
                            manage patient relationships.
                        </p>
                        <ul class="space-y-4 mt-8">
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Full Name
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Email Address
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Phone Number
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Home Address
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Nationality
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- MEDICAL INFORMATION -->
                <div
                    class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500 overflow-hidden">
                    <div class="h-2 bg-secondary">
                    </div>
                    <div class="p-10">
                        <div class="w-20 h-20 bg-secondary/10 flex items-center justify-center mb-8">
                            <i class="fa-solid fa-notes-medical text-secondary text-3xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-3xl font-black">
                            Medical Information
                        </h3>
                        <p class="text-slate-600 mt-5 leading-8">
                            Information necessary for diagnosis,
                            treatment and continuity of care.
                        </p>
                        <ul class="space-y-4 mt-8">
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Medical History
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Vaccination Records
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Laboratory Results
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Diagnostic Reports
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Treatment Information
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- WEBSITE INFORMATION -->
                <div
                    class="group bg-white border border-slate-200 hover:border-primary hover:-translate-y-2 transition-all duration-500 overflow-hidden">
                    <div class="h-2 bg-primary">
                    </div>
                    <div class="p-10">
                        <div class="w-20 h-20 bg-primary/10 flex items-center justify-center mb-8">
                            <i class="fa-solid fa-globe text-primary text-3xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-3xl font-black">
                            Website Information
                        </h3>
                        <p class="text-slate-600 mt-5 leading-8">
                            Technical information collected to improve
                            website performance and user experience.
                        </p>
                        <ul class="space-y-4 mt-8">
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                IP Address
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Browser Information
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Device Type
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Website Usage Data
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Cookie Preferences
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- INFORMATION SOURCES -->
            <div class="mt-16 bg-white border border-slate-200 overflow-hidden">
                <div class="grid lg:grid-cols-12 items-center">
                    <div class="lg:col-span-7 p-10 lg:p-14">
                        <span class="text-secondary font-bold uppercase tracking-[3px]">
                            Information Sources
                        </span>
                        <h3 class="text-primary text-4xl font-black mt-5">
                            How Information Is Collected
                        </h3>
                        <p class="text-slate-600 mt-6 leading-8">
                            Information may be collected directly from
                            patients, through appointment forms,
                            consultations, healthcare services,
                            website interactions and communications
                            with our team.
                        </p>
                        <div class="grid md:grid-cols-2 gap-5 mt-10">
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Online Appointment Forms
                            </div>
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Patient Registration
                            </div>
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Medical Consultations
                            </div>
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Diagnostic Services
                            </div>
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Website Contact Forms
                            </div>
                            <div class="flex gap-3">
                                <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                                Email Communications
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <img src="./assets/img/information-collection.png" alt="Information Collection"
                            class="w-full h-[500px] object-cover">
                    </div>
                </div>
            </div>
            <!-- PRIVACY NOTE -->
            <div class="mt-20 bg-primary p-10 lg:p-14 text-center">
                <i class="fa-solid fa-shield-heart text-secondary text-4xl">
                </i>
                <h3 class="text-white text-4xl font-black mt-6">
                    We Only Collect What Is Necessary
                </h3>
                <p class="text-white/80 mt-6 max-w-3xl mx-auto leading-8">
                    We strive to collect only the information required
                    to provide healthcare services, improve patient
                    experiences and meet operational or legal obligations.
                </p>
            </div>
        </div>
    </section>

    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <span class="section-subtitle">
                    Patient Rights
                </span>
                <h2 class="section-title">
                    Your Rights & Choices
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    We respect your privacy rights and strive to provide
                    transparency, access and control over your personal
                    information whenever appropriate and legally permitted.
                </p>
            </div>
            <!-- RIGHTS CARDS -->
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">
                <!-- ACCESS -->
                <div
                    class="group bg-white border border-slate-200 p-8 hover:border-primary hover:-translate-y-2 transition-all duration-500 text-center">
                    <div class="w-24 h-24 mx-auto bg-primary/10 flex items-center justify-center mb-8">
                        <i class="fa-solid fa-folder-open text-primary text-4xl">
                        </i>
                    </div>
                    <h3 class="text-primary text-2xl font-black">
                        Access Information
                    </h3>
                    <p class="text-slate-600 mt-5 leading-7">
                        Request access to information we maintain
                        about you, subject to applicable laws and
                        healthcare regulations.
                    </p>
                </div>
                <!-- CORRECT -->
                <div
                    class="group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 text-center">
                    <div class="w-24 h-24 mx-auto bg-secondary/10 flex items-center justify-center mb-8">
                        <i class="fa-solid fa-pen-to-square text-secondary text-4xl">
                        </i>
                    </div>
                    <h3 class="text-primary text-2xl font-black">
                        Correct Information
                    </h3>
                    <p class="text-slate-600 mt-5 leading-7">
                        Request updates or corrections if you believe
                        personal information is inaccurate or incomplete.
                    </p>
                </div>
                <!-- CONSENT -->
                <div
                    class="group bg-white border border-slate-200 p-8 hover:border-primary hover:-translate-y-2 transition-all duration-500 text-center">
                    <div class="w-24 h-24 mx-auto bg-primary/10 flex items-center justify-center mb-8">
                        <i class="fa-solid fa-hand text-primary text-4xl">
                        </i>
                    </div>
                    <h3 class="text-primary text-2xl font-black">
                        Withdraw Consent
                    </h3>
                    <p class="text-slate-600 mt-5 leading-7">
                        In certain circumstances, you may withdraw
                        consent for specific uses of information.
                    </p>
                </div>
                <!-- QUESTIONS -->
                <div
                    class="group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 text-center">
                    <div class="w-24 h-24 mx-auto bg-secondary/10 flex items-center justify-center mb-8">
                        <i class="fa-solid fa-circle-question text-secondary text-4xl">
                        </i>
                    </div>
                    <h3 class="text-primary text-2xl font-black">
                        Ask Questions
                    </h3>
                    <p class="text-slate-600 mt-5 leading-7">
                        Contact us with privacy concerns, questions
                        or requests regarding information handling.
                    </p>
                </div>
            </div>
            <!-- RIGHTS OVERVIEW -->
            <div class="grid lg:grid-cols-12 gap-12 items-center mt-16">
                <!-- IMAGE -->
                <div class="lg:col-span-5">
                    <img src="./assets/img/patient-rights.png" alt="Patient Rights"
                        class="w-full h-[600px] object-cover">
                </div>
                <!-- CONTENT -->
                <div class="lg:col-span-7">
                    <span class="text-secondary font-bold uppercase tracking-[3px]">
                        Privacy Transparency
                    </span>
                    <h3 class="text-primary text-4xl font-black mt-5">
                        We Believe Privacy Starts
                        With Transparency
                    </h3>
                    <p class="text-slate-600 mt-6 leading-8">
                        Understanding how information is collected,
                        used and protected helps patients make informed
                        decisions. We encourage patients to contact us
                        if they have any concerns about privacy practices.
                    </p>
                    <div class="space-y-5 mt-10">
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                            Access available where permitted by law
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                            Ability to request corrections
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                            Transparent privacy practices
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                            Support for privacy-related inquiries
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURE STRIP -->
            <div class="mt-16 bg-primary overflow-hidden">
                <div class="grid lg:grid-cols-12 items-center">
                    <div class="lg:col-span-8 p-10 lg:p-14">
                        <span class="text-secondary font-bold uppercase tracking-[3px]">
                            Your Information, Your Rights
                        </span>
                        <h3 class="text-white text-4xl font-black mt-5">
                            We're Here To Help
                        </h3>
                        <p class="text-white/80 mt-6 leading-8">
                            If you have questions regarding your personal
                            information, privacy rights or data handling
                            practices, our team will do its best to assist you.
                        </p>
                    </div>
                    <div class="lg:col-span-4 flex items-center justify-center p-10">
                        <div class="text-center">
                            <i class="fa-solid fa-user-shield text-secondary text-7xl">
                            </i>
                            <h4 class="text-white text-2xl font-black mt-6">
                                Privacy Support
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-slate-200 overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <span class="section-subtitle">
                    Privacy Support
                </span>
                <h2 class="section-title">
                    Contact Our Privacy Team
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    If you have questions regarding our privacy practices,
                    personal information handling, medical record confidentiality
                    or data protection measures, we're here to help.
                </p>
            </div>
            <!-- MAIN CONTACT SECTION -->
            <div class="grid lg:grid-cols-12 gap-0 overflow-hidden bg-white border border-slate-200">
                <!-- LEFT CONTENT -->
                <div class="lg:col-span-7 p-10 lg:p-16">
                    <span class="text-secondary font-bold uppercase tracking-[3px]">
                        Privacy Assistance
                    </span>
                    <h3 class="text-primary text-4xl font-black mt-5">
                        Questions About Your
                        Information?
                    </h3>
                    <p class="text-slate-600 mt-6 leading-8">
                        Our team is available to assist with privacy-related
                        inquiries, information requests and concerns regarding
                        how personal or medical information is handled.
                    </p>
                    <!-- CONTACT CARDS -->
                    <div class="grid md:grid-cols-3 gap-6 mt-12">
                        <!-- EMAIL -->
                        <div class="bg-slate-100 border border-slate-200 p-6 text-center">
                            <div class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-5">
                                <i class="fa-solid fa-envelope text-primary text-2xl">
                                </i>
                            </div>
                            <h4 class="text-primary font-black text-xl">
                                Email
                            </h4>
                            <p class="text-slate-600 mt-3 text-sm">
                                privacy@ciwec.com.np
                            </p>
                        </div>
                        <!-- PHONE -->
                        <div class="bg-slate-100 border border-slate-200 p-6 text-center">
                            <div class="w-16 h-16 mx-auto bg-secondary/10 flex items-center justify-center mb-5">
                                <i class="fa-solid fa-phone text-secondary text-2xl">
                                </i>
                            </div>
                            <h4 class="text-primary font-black text-xl">
                                Phone
                            </h4>
                            <p class="text-slate-600 mt-3 text-sm">
                                +977-1-XXXXXXXX
                            </p>
                        </div>
                        <!-- ADDRESS -->
                        <div class="bg-slate-100 border border-slate-200 p-6 text-center">
                            <div class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-5">
                                <i class="fa-solid fa-location-dot text-primary text-2xl">
                                </i>
                            </div>
                            <h4 class="text-primary font-black text-xl">
                                Address
                            </h4>
                            <p class="text-slate-600 mt-3 text-sm">
                                CIWEC Hospital,
                                Kathmandu, Nepal
                            </p>
                        </div>
                    </div>
                    <!-- QUICK INFO -->
                    <div class="mt-12 p-6 bg-primary/5 border border-primary/10">
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-info text-secondary text-xl mt-1">
                            </i>
                            <p class="text-slate-700 leading-7">
                                For privacy-related requests, please provide
                                sufficient information to help us identify and
                                respond to your inquiry appropriately.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- RIGHT IMAGE -->
                <div class="lg:col-span-5">
                    <img src="./assets/img/patient-rights.png" alt="Privacy Support"
                        class="w-full h-full min-h-[600px] object-cover">
                </div>
            </div>
            <!-- CTA SECTION -->
            <div class="mt-16 bg-primary overflow-hidden">
                <div class="grid lg:grid-cols-12 items-center">
                    <div class="lg:col-span-8 p-10 lg:p-14">
                        <span class="text-secondary font-bold uppercase tracking-[3px]">
                            Need Assistance?
                        </span>
                        <h3 class="text-white text-4xl font-black mt-5">
                            We're Committed To Transparency
                        </h3>
                        <p class="text-white/80 mt-6 leading-8">
                            We value patient trust and welcome questions
                            regarding privacy practices, information security
                            and healthcare confidentiality.
                        </p>
                    </div>
                    <div class="lg:col-span-4 p-10">
                        <div class="flex flex-col gap-4">
                            <a href="/contact"
                                class="bg-secondary text-white text-center py-4 font-bold hover:bg-white hover:text-primary transition">
                                Contact Us
                            </a>
                            <a href="mailto:privacy@ciwec.com.np"
                                class="border border-white text-white text-center py-4 font-bold hover:bg-white hover:text-primary transition">
                                Send Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
