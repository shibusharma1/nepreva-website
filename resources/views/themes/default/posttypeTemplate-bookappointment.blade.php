@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <section id="appointmentForm" class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <div class="text-center max-w-4xl mx-auto mb-8">
                <span class="section-subtitle">
                    Appointment & Inquiry
                </span>
                <h2 class="section-title">
                    How Can We Help You Today?
                </h2>
                <p class="text-slate-600 mt-4 leading-8">
                    Submit your appointment request or medical inquiry
                    and our team will contact you as soon as possible.
                </p>
            </div>
            <div class="grid xl:grid-cols-12 gap-8">
                <!-- FORM -->
                <div class="xl:col-span-8">
                    <div class="bg-white border border-slate-200 p-8 lg:p-10">
                        <form>
                            <!-- REQUEST TYPE -->
                            <div class="mb-8">
                                <label class="block text-primary font-bold mb-4">
                                    I Want To
                                </label>
                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <label class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                        <input type="radio" name="requestType" checked>
                                        <span class="ml-2">
                                            Appointment
                                        </span>
                                    </label>
                                    <label class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                        <input type="radio" name="requestType">
                                        <span class="ml-2">
                                            Inquiry
                                        </span>
                                    </label>
                                    <label class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                        <input type="radio" name="requestType">
                                        <span class="ml-2">
                                            Health Screening
                                        </span>
                                    </label>
                                    <label class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                        <input type="radio" name="requestType">
                                        <span class="ml-2">
                                            Travel Medicine
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <!-- PERSONAL INFO -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Full Name *
                                    </label>
                                    <input type="text"
                                        class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none">
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Email Address *
                                    </label>
                                    <input type="email"
                                        class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none">
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Phone Number *
                                    </label>
                                    <input type="tel"
                                        class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none">
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Nationality
                                    </label>
                                    <input type="text"
                                        class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none">
                                </div>
                            </div>
                            <!-- HOSPITAL DETAILS -->
                            <div class="grid md:grid-cols-2 gap-6 mt-4">
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Preferred Location
                                    </label>
                                    <select class="w-full h-14 border border-slate-300 px-5">
                                        <option>
                                            Kathmandu
                                        </option>
                                        <option>
                                            Pokhara
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Department
                                    </label>
                                    <select class="w-full h-14 border border-slate-300 px-5">
                                        <option>
                                            Select Department
                                        </option>
                                        <option>
                                            Internal Medicine
                                        </option>
                                        <option>
                                            Pediatrics
                                        </option>
                                        <option>
                                            Cardiology
                                        </option>
                                        <option>
                                            Orthopedics
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Preferred Date
                                    </label>
                                    <input type="date" class="w-full h-14 border border-slate-300 px-5">
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Preferred Time
                                    </label>
                                    <input type="time" class="w-full h-14 border border-slate-300 px-5">
                                </div>
                            </div>
                            <!-- MESSAGE -->
                            <div class="mt-4">
                                <label class="block text-primary font-semibold mb-2">
                                    Message / Requirement
                                </label>
                                <textarea rows="4" class="w-full border border-slate-300 p-5 resize-none focus:border-secondary outline-none"
                                    placeholder="Describe your symptoms, appointment request, inquiry or healthcare requirement..."></textarea>
                            </div>
                            <!-- SUBMIT -->
                            <div class="mt-6">
                                <button type="submit" class="btn-primary">
                                    Submit Request
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- RIGHT PANEL -->
                <div class="xl:col-span-4">
                    <div class="bg-primary text-white p-8 sticky top-32">
                        <h3 class="text-2xl font-black">
                            Need Assistance?
                        </h3>
                        <p class="mt-5 text-white/80 leading-8">
                            Our team is available to help with
                            appointments, inquiries, travel medicine,
                            health screening and specialist consultations.
                        </p>
                        <div class="space-y-6 mt-10">
                            <div class="flex gap-4">
                                <i class="fa-solid fa-clock text-secondary text-xl mt-1">
                                </i>
                                <div>
                                    <h4 class="font-bold">
                                        Response Time
                                    </h4>
                                    <p class="text-white/70 text-sm">
                                        Within 24 Hours
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <i class="fa-solid fa-phone text-secondary text-xl mt-1">
                                </i>
                                <div>
                                    <h4 class="font-bold">
                                        Appointment Desk
                                    </h4>
                                    <p class="text-white/70 text-sm">
                                        +977-XXXXXXXXX
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <i class="fa-solid fa-envelope text-secondary text-xl mt-1">
                                </i>
                                <div>
                                    <h4 class="font-bold">
                                        Email Support
                                    </h4>
                                    <p class="text-white/70 text-sm">
                                        info@ciwec.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-white/10 mt-10 pt-10">
                            <h4 class="font-bold text-lg">
                                Emergency?
                            </h4>
                            <p class="text-white/70 mt-3">
                                For urgent medical situations,
                                please call our emergency team directly.
                            </p>
                            <a href="tel:+977XXXXXXXX" class="btn-secondary mt-4">
                                Call Emergency
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================= -->
    <!-- EMERGENCY SUPPORT -->
    <!-- ========================================= -->
    <section class="section-padding relative overflow-hidden bg-primary">
        <!-- SHAPES -->
        <div
            class="absolute
        top-0
        left-0
        w-[450px]
        h-[450px]
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
        <div class="container-custom
        relative
        z-10">
            <div class="grid
            xl:grid-cols-12
            gap-12
            items-center">
                <!-- LEFT -->
                <div class="xl:col-span-7">
                    <span
                        class="inline-flex
                    items-center
                    gap-2
                    bg-red-500
                    text-white
                    px-4
                    py-2
                    text-sm
                    font-bold
                    uppercase
                    tracking-wide">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        Emergency Support
                    </span>
                    <h2
                        class="text-white
                    text-3xl
                    md:text-4xl
                    font-black
                    leading-tight
                    mt-8">
                        Need Immediate
                        Medical Assistance?
                    </h2>
                    <p
                        class="text-white/80
                    text-lg
                    leading-8
                    mt-8
                    max-w-3xl">
                        If you are experiencing a medical emergency,
                        do not wait for an online appointment request.
                        Contact our emergency support team immediately
                        for urgent medical assistance and guidance.
                    </p>
                    <!-- FEATURES -->
                    <div
                        class="grid
                    md:grid-cols-2
                    gap-6
                    mt-12">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12
                            bg-white/10
                            flex
                            items-center
                            justify-center
                            flex-shrink-0">
                                <i class="fa-solid fa-clock
                                text-secondary">
                                </i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">
                                    24/7 Availability
                                </h4>
                                <p class="text-white/70 text-sm mt-2">
                                    Emergency assistance
                                    whenever you need it.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12
                            bg-white/10
                            flex
                            items-center
                            justify-center
                            flex-shrink-0">
                                <i class="fa-solid fa-user-doctor
                                text-secondary">
                                </i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">
                                    Expert Medical Team
                                </h4>
                                <p class="text-white/70 text-sm mt-2">
                                    Immediate support from
                                    qualified professionals.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12
                            bg-white/10
                            flex
                            items-center
                            justify-center
                            flex-shrink-0">
                                <i class="fa-solid fa-phone
                                text-secondary">
                                </i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">
                                    Fast Response
                                </h4>
                                <p class="text-white/70 text-sm mt-2">
                                    Reach our support team
                                    immediately.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12
                            bg-white/10
                            flex
                            items-center
                            justify-center
                            flex-shrink-0">
                                <i class="fa-solid fa-hospital
                                text-secondary">
                                </i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">
                                    Trusted Healthcare
                                </h4>
                                <p class="text-white/70 text-sm mt-2">
                                    Decades of medical
                                    excellence and care.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RIGHT -->
                <div class="xl:col-span-5">
                    <div class="bg-white p-10 shadow-2xl">
                        <div
                            class="w-20 h-20
                        bg-red-100
                        flex
                        items-center
                        justify-center
                        mx-auto">
                            <i
                                class="fa-solid fa-truck-medical
                            text-red-600
                            text-4xl">
                            </i>
                        </div>
                        <h3
                            class="text-primary
                        text-3xl
                        font-black
                        text-center
                        mt-8">
                            Emergency Hotline
                        </h3>
                        <p class="text-slate-600
                        text-center
                        mt-4">
                            For urgent medical assistance,
                            contact us immediately.
                        </p>
                        <a href="tel:+977XXXXXXXXX"
                            class="block
                        text-center
                        bg-secondary
                        text-white
                        text-2xl
                        font-black
                        py-5
                        mt-8
                        hover:bg-primary
                        transition">
                            +977 XXX XXX XXXX
                        </a>
                        <div
                            class="grid
                        grid-cols-2
                        gap-4
                        mt-4">
                            <a href="tel:+977XXXXXXXX"
                                class="border
                            border-slate-200
                            py-4
                            text-center
                            font-semibold
                            text-primary
                            hover:border-secondary
                            hover:text-secondary
                            transition">
                                Call Now
                            </a>
                            <a href="./bookappointment.php"
                                class="bg-primary
                            text-white
                            py-4
                            text-center
                            font-semibold
                            hover:bg-secondary
                            transition">
                                Book Visit
                            </a>
                        </div>
                        <div
                            class="border-t
                        border-slate-200
                        mt-8
                        pt-8">
                            <p
                                class="text-sm
                            text-slate-500
                            text-center">
                                For non-emergency appointments,
                                please use the booking form above.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
