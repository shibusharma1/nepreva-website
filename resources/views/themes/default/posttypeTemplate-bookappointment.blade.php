@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')
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
                        @if (session('error'))
                            <div id="flash-message"
                                class="my-4 rounded-2xl border border-red-200 bg-red-50 px-5 py-4 text-red-700">
                                @if (is_array(session('message')))
                                    <ul class="list-disc pl-5">
                                        @foreach (session('message') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    {{ session('message') }}
                                @endif
                            </div>
                        @endif

                        <form action="{{ route('sendmail_appointment') }}" method="POST">
                            @csrf
                            <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response">
                            <!-- REQUEST TYPE -->
                            <div class="mb-8">
                                <label class="block text-primary font-bold mb-4">
                                    I Want To
                                </label>
                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <label class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                        <input type="radio" name="request_type" value="Appointment"
                                            {{ old('request_type') == 'Appointment' || !old('request_type') ? 'checked' : '' }}>
                                        <span class="ml-2">
                                            Appointment
                                        </span>
                                    </label>
                                    <label class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                        <input type="radio" name="request_type" value="Inquiry"
                                            {{ old('request_type') == 'Inquiry' ? 'checked' : '' }}>
                                        <span class="ml-2">
                                            Inquiry
                                        </span>
                                    </label>
                                    <label class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                        <input type="radio" name="request_type" value="Health Screening"
                                            {{ old('request_type') == 'Health Screening' ? 'checked' : '' }}>
                                        <span class="ml-2">
                                            Health Screening
                                        </span>
                                    </label>
                                    <label class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                        <input type="radio" name="request_type" value="Travel Medicine"
                                            {{ old('request_type') == 'Travel Medicine' ? 'checked' : '' }}>
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
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Email Address *
                                    </label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Phone Number *
                                    </label>
                                    <input type="tel" name="phone" value="{{ old('phone') }}"
                                        class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Nationality
                                    </label>
                                    <input type="text" name="nationality" value="{{ old('nationality') }}"
                                        class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none">
                                </div>
                            </div>
                            <!-- HOSPITAL DETAILS -->
                            <div class="grid md:grid-cols-2 gap-6 mt-4">
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Preferred Location
                                    </label>
                                    <select name="location" class="w-full h-14 border border-slate-300 px-5">
                                        <option value="Kathmandu">
                                            Kathmandu
                                        </option>
                                        <option value="Pokhara" {{ old('location') == 'Pokhara' ? 'selected' : '' }}>
                                            Pokhara
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Department
                                    </label>
                                    <select name="department" class="w-full h-14 border border-slate-300 px-5">
                                        <option value="">
                                            Select Department
                                        </option>
                                        <option value="Internal Medicine">
                                            Internal Medicine
                                        </option>
                                        <option value="Pediatrics">
                                            Pediatrics
                                        </option>
                                        <option value="Cardiology">
                                            Cardiology
                                        </option>
                                        <option value="Orthopedics">
                                            Orthopedics
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Preferred Date
                                    </label>
                                    <input type="text" id="appointment_date" name="appointment_date"
                                        value="{{ old('appointment_date') }}" placeholder="MM/DD/YYYY"
                                        class="w-full h-14 border border-slate-300 px-5" required>
                                </div>
                                <div>
                                    <label class="block text-primary font-semibold mb-2">
                                        Preferred Time
                                    </label>
                                    <select id="appointment_time" name="appointment_time"
                                        class="w-full h-14 border border-slate-300 px-5" required>
                                        <option value="">
                                            Select Time
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <!-- MESSAGE -->
                            <div class="mt-4">
                                <label class="block text-primary font-semibold mb-2">
                                    Message / Requirement
                                </label>
                                <textarea name="message" rows="4"
                                    class="w-full border border-slate-300 p-5 resize-none focus:border-secondary outline-none"
                                    placeholder="Describe your symptoms, appointment request, inquiry or healthcare requirement...">
                                    {{ old('message') }}
                                    </textarea>
                            </div>
                            <!-- TERMS -->
                            <div class="mt-6 flex items-start gap-3">
                                <input id="terms" type="checkbox" name="terms" required
                                    class="mt-1 h-5 w-5 accent-[var(--primary)] cursor-pointer">
                                <label for="terms" class="text-sm text-slate-600 leading-6 cursor-pointer">
                                    I accept the
                                    <a href="{{ url('page/terms-and-conditions.html') }}"
                                        class="text-primary font-medium hover:underline">
                                        Terms & Conditions
                                    </a>
                                </label>
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
                                        <a href="tel: {{ $setting->phone }}">
                                            {{ $setting->phone }}
                                        </a>
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
                                        {{-- info@ciwec.com --}}
                                        <a href="mailto: {{ $setting->email_primary }}">
                                            {{ $setting->email_primary }}
                                        </a>
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
                        <a href="tel:{{ $setting->phone }}"
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
                            {{ $setting->phone }}
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
                            <a href="./bookappointment.html"
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

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#appointment_date", {
            dateFormat: "Y-m-d",
            minDate: "today",
            disableMobile: true
        });
    </script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('SITE_KEY') }}"></script>
    <script>
        grecaptcha.ready(function() {
            function executeRecaptcha() {
                grecaptcha.execute('<?php echo env('SITE_KEY'); ?>', {
                    action: 'homepage'
                }).then(function(token) {
                    document.getElementById('g_recaptcha_response').value = token;
                });
            }

            // Initial execution of reCAPTCHA
            executeRecaptcha();

            // Refresh the reCAPTCHA token every 100 seconds (less than 2 minutes)
            setInterval(executeRecaptcha, 900000);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const dateInput = document.getElementById('appointment_date');
            const timeSelect = document.getElementById('appointment_time');

            function formatDate(date) {
                return date.toISOString().split('T')[0];
            }

            function populateTimes() {

                timeSelect.innerHTML = '';

                const selectedDate = dateInput.value;
                const today = formatDate(new Date());
                const now = new Date();

                let slotsAdded = 0;

                for (let hour = 9; hour <= 17; hour++) {

                    for (let minute = 0; minute < 60; minute += 30) {

                        const hh = String(hour).padStart(2, '0');
                        const mm = String(minute).padStart(2, '0');

                        // Skip past times if today
                        if (selectedDate === today) {
                            if (
                                hour < now.getHours() ||
                                (hour === now.getHours() && minute <= now.getMinutes())
                            ) {
                                continue;
                            }
                        }

                        const option = document.createElement('option');
                        option.value = `${hh}:${mm}`;

                        const displayHour = hour > 12 ? hour - 12 : hour;
                        const ampm = hour >= 12 ? 'PM' : 'AM';

                        option.text = `${displayHour}:${mm} ${ampm}`;

                        timeSelect.appendChild(option);
                        slotsAdded++;
                    }
                }

                // No slots available
                if (slotsAdded === 0) {
                    const option = document.createElement('option');
                    option.value = "";
                    option.text = "No slots available for today.";
                    option.disabled = true;
                    option.selected = true;
                    timeSelect.appendChild(option);
                }
            }

            dateInput.addEventListener('change', populateTimes);

            populateTimes();

        });
    </script>
@endsection
