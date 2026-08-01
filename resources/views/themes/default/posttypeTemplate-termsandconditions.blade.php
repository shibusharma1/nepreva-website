@extends('themes.default.common.master')
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
       @include('themes.default.common.herobanner')

<section id="terms-content" class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <div
            class="grid lg:grid-cols-12 gap-16 items-center">
            <div
                class="lg:col-span-5">
                <div class="relative">
                    <img
                        src="./assets/img/history/history2.webp"
                        alt="Terms Overview"
                        class="w-full h-[480px] object-cover">
                    <!-- FLOATING CARD -->
                    <div
                        class="absolute bottom-6 left-6 bg-white shadow-2xl p-6 max-w-[320px]">
                        <span
                            class="text-secondary font-bold uppercase text-sm">
                            Legal Agreement
                        </span>
                        <h3
                            class="text-primary text-2xl font-black mt-2">
                            Clear Expectations
                        </h3>
                        <p
                            class="text-slate-600 mt-3 leading-7 text-sm">
                            These terms help establish a transparent
                            relationship between patients, visitors
                            and CIWEC Hospital.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="lg:col-span-7">
                <span class="section-subtitle">
                    Terms Overview
                </span>
                <h2 class="section-title">
                    Welcome To CIWEC Hospital
                </h2>
                <p
                    class="text-slate-600 mt-6 leading-8">
                    These Terms & Conditions govern your access to and
                    use of our website, digital platforms, appointment
                    services, healthcare interactions and related
                    communications.
                </p>

                <div
                    class="space-y-5 mt-8">
                    <div class="flex gap-4">
                        <i
                            class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                        </i>
                        <span>
                            Defines the use of our healthcare services.
                        </span>
                    </div>
                    <div class="flex gap-4">
                        <i
                            class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                        </i>
                        <span>
                            Explains patient and visitor responsibilities.
                        </span>
                    </div>
                    <div class="flex gap-4">
                        <i
                            class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                        </i>
                        <span>
                            Establishes website usage guidelines.
                        </span>
                    </div>
                    <div class="flex gap-4">
                        <i
                            class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                        </i>
                        <span>
                            Supports transparency and legal compliance.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-slate-100 overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="text-center max-w-4xl mx-auto mb-12">
            <span class="section-subtitle">
                Website Usage Rules
            </span>
            <h2 class="section-title">
                Responsible Use Of Our Website
            </h2>
            <p
                class="text-slate-600 mt-6 leading-8">
                We encourage visitors to use our website responsibly
                and lawfully. These guidelines help maintain a secure,
                reliable and positive experience for all users.
            </p>
        </div>
        <!-- DO / DON'T SECTION -->
        <div
            class="grid lg:grid-cols-2 gap-8">
            <!-- ALLOWED USE -->
            <div
                class="bg-green-50 border border-green-200 overflow-hidden">
                <div
                    class="bg-green-600 p-6">
                    <div
                        class="flex items-center gap-4">
                        <i
                            class="fa-solid fa-circle-check text-white text-2xl">
                        </i>
                        <h3
                            class="text-white text-2xl font-black">
                            Allowed Use
                        </h3>
                    </div>
                </div>
                <div class="p-8">
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <i
                                class="fa-solid fa-check text-green-600 mt-1">
                            </i>
                            <span>
                                Browse healthcare information and services.
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <i
                                class="fa-solid fa-check text-green-600 mt-1">
                            </i>
                            <span>
                                Request appointments and consultations.
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <i
                                class="fa-solid fa-check text-green-600 mt-1">
                            </i>
                            <span>
                                Contact the hospital for inquiries.
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <i
                                class="fa-solid fa-check text-green-600 mt-1">
                            </i>
                            <span>
                                Access educational healthcare resources.
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <i
                                class="fa-solid fa-check text-green-600 mt-1">
                            </i>
                            <span>
                                Use website features for legitimate purposes.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PROHIBITED USE -->
            <div
                class="bg-red-50 border border-red-200 overflow-hidden">
                <div
                    class="bg-red-600 p-6">
                    <div
                        class="flex items-center gap-4">
                        <i
                            class="fa-solid fa-ban text-white text-2xl">
                        </i>
                        <h3
                            class="text-white text-2xl font-black">
                            Prohibited Activities
                        </h3>
                    </div>
                </div>
                <div class="p-8">
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <i
                                class="fa-solid fa-xmark text-red-600 mt-1">
                            </i>
                            <span>
                                Attempting unauthorized system access.
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <i
                                class="fa-solid fa-xmark text-red-600 mt-1">
                            </i>
                            <span>
                                Uploading malicious software or content.
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <i
                                class="fa-solid fa-xmark text-red-600 mt-1">
                            </i>
                            <span>
                                Interfering with website operations.
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <i
                                class="fa-solid fa-xmark text-red-600 mt-1">
                            </i>
                            <span>
                                Using false or misleading information.
                            </span>
                        </div>
                        <div class="flex gap-4">
                            <i
                                class="fa-solid fa-xmark text-red-600 mt-1">
                            </i>
                            <span>
                                Violating applicable laws or regulations.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="mt-16 bg-primary overflow-hidden">
            <div
                class="grid lg:grid-cols-12 items-center">
                <div
                    class="lg:col-span-8 p-10 lg:p-14">
                    <span
                        class="text-secondary font-bold uppercase tracking-[3px]">
                        Website Integrity
                    </span>
                    <h3
                        class="text-white text-4xl font-black mt-5">
                        Helping Us Maintain A Safe
                        Digital Environment
                    </h3>
                    <p
                        class="text-white/80 mt-6 leading-8">
                        Following these guidelines helps ensure that
                        our website remains secure, reliable and
                        accessible for patients, visitors and healthcare
                        professionals.
                    </p>
                </div>
                <div
                    class="lg:col-span-4 flex items-center justify-center p-10">
                    <div class="text-center">
                        <i
                            class="fa-solid fa-globe text-secondary text-7xl">
                        </i>
                        <h4
                            class="text-white text-2xl font-black mt-6">
                            Safe Access
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-slate-200 overflow-hidden">
    <div class="container-custom">

        <div
            class="bg-white border border-slate-200 overflow-hidden">
            <div
                class="grid lg:grid-cols-12 items-center">
                <div
                    class="lg:col-span-7 p-10 lg:p-14">
                    <span
                        class="text-secondary font-bold uppercase tracking-[3px]">
                        Important Information
                    </span>
                    <h3
                        class="text-primary text-4xl font-black mt-5">
                        Reasonable Expectations
                        & Limitations
                    </h3>
                    <p
                        class="text-slate-600 mt-6 leading-8">
                        CIWEC Hospital works diligently to provide
                        quality healthcare services and maintain a
                        reliable website experience. However, users
                        acknowledge that certain risks, interruptions
                        and variables may exist despite reasonable
                        efforts to minimize them.
                    </p>
                    <div
                        class="space-y-5 mt-8">
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                            <span>Services provided in good faith</span>
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                            <span>Continuous improvement efforts</span>
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                            <span>Operational disruptions may occur</span>
                        </div>
                        <div class="flex gap-4">
                            <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                            <span>Individual circumstances vary</span>
                        </div>
                    </div>
                </div>
                <!-- VISUAL PANEL -->
                <div
                    class="lg:col-span-5 bg-primary h-full flex items-center justify-center">
                    <div
                        class="text-center p-12">
                        <i
                            class="fa-solid fa-scale-balanced text-secondary text-8xl">
                        </i>
                        <h4
                            class="text-white text-3xl font-black mt-8">
                            Balanced Expectations
                        </h4>
                        <p
                            class="text-white/80 mt-5 leading-8">
                            Transparency helps patients and visitors
                            better understand the scope and limitations
                            of website and healthcare services.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- NOTICE STRIP -->
        <div
            class="mt-12 bg-amber-50 border-l-8 border-amber-500 p-8 lg:p-10">
            <div
                class="flex flex-col lg:flex-row gap-6 items-start">
                <i
                    class="fa-solid fa-circle-info text-amber-500 text-4xl">
                </i>
                <div>
                    <h3
                        class="text-primary text-3xl font-black">
                        Important Reminder
                    </h3>
                    <p
                        class="text-slate-700 mt-4 leading-8">
                        Website content should be used as a general
                        informational resource. Healthcare decisions
                        should always be made in consultation with
                        qualified healthcare professionals based on
                        individual medical needs.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="text-center max-w-4xl mx-auto mb-16">
            <span class="section-subtitle">
                Contact Information
            </span>
            <h2 class="section-title">
                Need Help Or Have Questions?
            </h2>
            <p
                class="text-slate-600 mt-6 leading-8">
                If you have questions regarding these Terms &
                Conditions, website usage, appointments or healthcare
                services, our team is available to assist you.
            </p>
        </div>
        <!-- MAIN CONTACT SECTION -->
        <div
            class="grid lg:grid-cols-12 gap-0 bg-slate-100 border border-slate-200 overflow-hidden">
            <!-- LEFT CONTENT -->
            <div
                class="lg:col-span-7 p-10 lg:p-16">
                <span
                    class="text-secondary font-bold uppercase tracking-[3px]">
                    We're Here To Help
                </span>
                <h3
                    class="text-primary text-4xl font-black mt-5">
                    Contact CIWEC Hospital
                </h3>
                <p
                    class="text-slate-600 mt-6 leading-8">
                    Whether you have questions about our terms,
                    services, website functionality or appointment
                    policies, please don't hesitate to reach out.
                </p>
                <!-- CONTACT CARDS -->
                <div
                    class="grid md:grid-cols-3 gap-6 mt-12">
                    <!-- EMAIL -->
                    <div
                        class="bg-white border border-slate-200 p-6 text-center hover:border-primary transition-all duration-300">
                        <div
                            class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-5">
                            <i
                                class="fa-solid fa-envelope text-primary text-2xl">
                            </i>
                        </div>
                        <h4
                            class="text-primary font-black text-xl">
                            Email
                        </h4>
                        <p
                            class="text-slate-600 mt-3 text-sm break-all">
                            info@ciwec.com.np
                        </p>
                    </div>
                    <!-- PHONE -->
                    <div
                        class="bg-white border border-slate-200 p-6 text-center hover:border-secondary transition-all duration-300">
                        <div
                            class="w-16 h-16 mx-auto bg-secondary/10 flex items-center justify-center mb-5">
                            <i
                                class="fa-solid fa-phone text-secondary text-2xl">
                            </i>
                        </div>
                        <h4
                            class="text-primary font-black text-xl">
                            Phone
                        </h4>
                        <p
                            class="text-slate-600 mt-3 text-sm">
                            +977-1-4524111
                        </p>
                    </div>
                    <!-- ADDRESS -->
                    <div
                        class="bg-white border border-slate-200 p-6 text-center hover:border-primary transition-all duration-300">
                        <div
                            class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-5">
                            <i
                                class="fa-solid fa-location-dot text-primary text-2xl">
                            </i>
                        </div>
                        <h4
                            class="text-primary font-black text-xl">
                            Address
                        </h4>
                        <p
                            class="text-slate-600 mt-3 text-sm">
                            Kapurdhara,
                            Kathmandu, Nepal
                        </p>
                    </div>
                </div>
                <!-- INFORMATION BOX -->
                <div
                    class="mt-12 p-6 bg-primary/5 border border-primary/10">
                    <div class="flex gap-4">
                        <i
                            class="fa-solid fa-circle-info text-secondary text-xl mt-1">
                        </i>
                        <p
                            class="text-slate-700 leading-7">
                            For faster assistance, please provide
                            relevant details regarding your inquiry,
                            including any questions related to website
                            use, appointments or hospital policies.
                        </p>
                    </div>
                </div>
            </div>
            <!-- RIGHT VISUAL -->
            <div
                class="lg:col-span-5 relative">
                <img
                    src="./assets/img/history/history3.webp"
                    alt="Contact Information"
                    class="w-full h-full min-h-[650px] object-cover">
                <!-- OVERLAY CARD -->
                <div
                    class="absolute bottom-8 left-8 right-8 bg-white p-8 shadow-2xl">
                    <div
                        class="flex items-center gap-4">
                        <div
                            class="w-16 h-16 bg-primary/10 flex items-center justify-center">
                            <i
                                class="fa-solid fa-headset text-primary text-2xl">
                            </i>
                        </div>
                        <div>
                            <h4
                                class="text-primary text-xl font-black">
                                Support Team
                            </h4>
                            <p
                                class="text-slate-600">
                                Ready to assist with your questions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA STRIP -->
        <div
            class="mt-24 bg-primary overflow-hidden">
            <div
                class="grid lg:grid-cols-12 items-center">
                <div
                    class="lg:col-span-8 p-10 lg:p-14">
                    <span
                        class="text-secondary font-bold uppercase tracking-[3px]">
                        Need Assistance?
                    </span>
                    <h3
                        class="text-white text-4xl font-black mt-5">
                        Our Team Is Here To Help
                    </h3>
                    <p
                        class="text-white/80 mt-6 leading-8">
                        Contact us if you need clarification regarding
                        these Terms & Conditions, appointment policies,
                        healthcare services or website usage.
                    </p>
                </div>
                <div
                    class="lg:col-span-4 p-10">
                    <div
                        class="flex flex-col gap-4">
                        <a
                            href="/contact"
                            class="bg-secondary text-white text-center py-4 font-bold hover:bg-white hover:text-primary transition">
                            Contact Us
                        </a>
                        <a
                            href="mailto:info@ciwec.com.np"
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