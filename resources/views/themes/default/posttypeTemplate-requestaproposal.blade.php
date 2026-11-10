@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')
    <section id="appointmentForm" class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <div class="text-center max-w-4xl mx-auto mb-10">
                <span class="section-subtitle">
                    {{ $data->uid }}
                </span>
                <h2 class="section-title">
                    {!! $data->caption !!}
                </h2>
                <p class="text-slate-600 mt-3 leading-relaxed text-base md:text-lg">
                    {!! $data->content !!}
                </p>
            </div>
            <div class="grid xl:grid-cols-12 gap-8">
                <!-- FORM -->
                <div class="xl:col-span-8">
                    <div class="bg-[#fdfdfd] border border-slate-200 shadow-md p-6 md:p-10">
                        @if (session('error'))
                            <div id="flash-message"
                                class="my-4 rounded-lg border border-red-200 bg-red-50 px-5 py-4 text-red-700 text-sm">
                                @if (is_array(session('message')))
                                    <ul class="list-disc pl-5 space-y-1">
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
                                <label class="block text-sm font-semibold text-primary mb-3">
                                    I Want To
                                </label>
                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-3">
                                    <label
                                        class="border border-slate-200 p-3.5 rounded-md cursor-pointer hover:border-secondary transition text-sm flex items-center">
                                        <input type="radio" name="request_type" value="Appointment"
                                            {{ old('request_type') == 'Appointment' || !old('request_type') ? 'checked' : '' }}
                                            class="accent-[var(--primary)]">
                                        <span class="ml-2 font-medium text-slate-700">
                                            Appointment
                                        </span>
                                    </label>
                                    <label
                                        class="border border-slate-200 p-3.5 rounded-md cursor-pointer hover:border-secondary transition text-sm flex items-center">
                                        <input type="radio" name="request_type" value="Inquiry"
                                            {{ old('request_type') == 'Inquiry' ? 'checked' : '' }}
                                            class="accent-[var(--primary)]">
                                        <span class="ml-2 font-medium text-slate-700">
                                            Inquiry
                                        </span>
                                    </label>
                                    <label
                                        class="border border-slate-200 p-3.5 rounded-md cursor-pointer hover:border-secondary transition text-sm flex items-center">
                                        <input type="radio" name="request_type" value="Health Screening"
                                            {{ old('request_type') == 'Health Screening' ? 'checked' : '' }}
                                            class="accent-[var(--primary)]">
                                        <span class="ml-2 font-medium text-slate-700">
                                            Health Screening
                                        </span>
                                    </label>
                                    <label
                                        class="border border-slate-200 p-3.5 rounded-md cursor-pointer hover:border-secondary transition text-sm flex items-center">
                                        <input type="radio" name="request_type" value="Travel Medicine"
                                            {{ old('request_type') == 'Travel Medicine' ? 'checked' : '' }}
                                            class="accent-[var(--primary)]">
                                        <span class="ml-2 font-medium text-slate-700">
                                            Travel Medicine
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <!-- PERSONAL INFO -->
                            <div class="grid md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-semibold text-primary mb-2">
                                        Full Name *
                                    </label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-primary mb-2">
                                        Email Address *
                                    </label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-primary mb-2">
                                        Phone Number *
                                    </label>
                                    <input type="tel" name="phone" value="{{ old('phone') }}"
                                        class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-primary mb-2">
                                        Nationality
                                    </label>
                                    <input type="text" name="nationality" value="{{ old('nationality') }}"
                                        class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition">
                                </div>
                            </div>
                            <!-- HOSPITAL DETAILS -->
                            <div class="grid md:grid-cols-2 gap-5 mt-5">
                                <div>
                                    <label class="block text-sm font-semibold text-primary mb-2">
                                        Preferred Location
                                    </label>
                                    <select name="location"
                                        class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition">
                                        <option value="Kathmandu">
                                            Kathmandu
                                        </option>
                                        <option value="Pokhara" {{ old('location') == 'Pokhara' ? 'selected' : '' }}>
                                            Pokhara
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-primary mb-2">
                                        Department
                                    </label>
                                    <select name="department"
                                        class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition">
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
                                    <label class="block text-sm font-semibold text-primary mb-2">
                                        Preferred Date
                                    </label>
                                    <input type="text" id="appointment_date" name="appointment_date"
                                        value="{{ old('appointment_date') }}" placeholder="MM/DD/YYYY"
                                        class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-primary mb-2">
                                        Preferred Time
                                    </label>
                                    <select id="appointment_time" name="appointment_time"
                                        class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition"
                                        required>
                                        <option value="">
                                            Select Time
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <!-- MESSAGE -->
                            <div class="mt-5">
                                <label class="block text-sm font-semibold text-primary mb-2">
                                    Message / Requirement
                                </label>
                                <textarea name="message" rows="4"
                                    class="w-full border border-slate-300 p-4 text-sm resize-none focus:border-secondary outline-none transition"
                                    placeholder="Describe your symptoms, appointment request, inquiry or healthcare requirement...">{{ old('message', '') }}</textarea>
                            </div>
                            <!-- TERMS -->
                            <div class="mt-6 flex items-start gap-3">
                                <input id="terms" type="checkbox" name="terms" required
                                    class="mt-0.5 h-4 w-4 accent-[var(--primary)] cursor-pointer">
                                <label for="terms" class="text-sm text-slate-600 leading-relaxed cursor-pointer">
                                    I accept the
                                    <a href="{{ url('page/terms-and-conditions.html') }}"
                                        class="text-primary font-semibold hover:underline">
                                        Terms & Conditions
                                    </a>
                                </label>
                            </div>
                            <!-- SUBMIT -->
                            <div class="mt-6">
                                <button type="submit" class="btn-primary text-sm">
                                    Submit Request
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- RIGHT PANEL -->
                <div class="xl:col-span-4">
                    <div class="bg-primary text-white p-6 md:p-8 sticky top-32 shadow-sm">
                        <h3 class="text-xl font-bold">
                            Need Assistance?
                        </h3>
                        <p class="mt-3 text-white/85 text-base leading-relaxed">
                            Our team is available to help with
                            appointments, inquiries, travel medicine,
                            health screening and specialist consultations.
                        </p>
                        <div class="space-y-5 mt-8">
                            <div class="flex gap-4">
                                <i class="fa-solid fa-clock text-white text-lg mt-0.5"></i>
                                <div>
                                    <h4 class="font-semibold text-base">
                                        Response Time
                                    </h4>
                                    <p class="text-white/70 text-sm mt-0.5">
                                        Within 24 Hours
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <i class="fa-solid fa-phone text-white text-lg mt-0.5"></i>
                                <div>
                                    <h4 class="font-semibold text-base">
                                        Appointment Desk
                                    </h4>
                                    <p class="text-white/70 text-sm mt-0.5">
                                        <a href="tel:{{ $setting->phone }}" class="hover:underline">
                                            {{ $setting->phone }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <i class="fa-solid fa-envelope text-white text-lg mt-0.5"></i>
                                <div>
                                    <h4 class="font-semibold text-base">
                                        Email Support
                                    </h4>
                                    <p class="text-white/70 text-sm mt-0.5">
                                        <a href="mailto:{{ $setting->email_primary }}" class="hover:underline">
                                            {{ $setting->email_primary }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- EMERGENCY SUPPORT -->
    <section class="section-padding relative overflow-hidden bg-gradient-primary">
        <!-- SHAPES -->
        <div
            class="absolute top-0 left-0 w-[450px] h-[450px] bg-white/[0.03] rounded-full -translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-secondary/[0.08] rounded-full translate-x-1/3 translate-y-1/3">
        </div>
        <div class="container-custom relative z-10">
            <div class="grid xl:grid-cols-12 gap-10 items-center">
                <!-- LEFT -->
                <div class="xl:col-span-7">
                    <span class="inline-flex items-center gap-2 bg-secondary text-white px-3.5 py-1.5 text-sm font-medium captalize">
                        <i class="fa-solid fa-triangle-exclamation text-xs"></i>
                        Emergency Support
                    </span>
                    <h2 class="text-white text-2xl md:text-3xl font-bold leading-tight mt-4">
                        Need Immediate Medical Assistance?
                    </h2>
                    <p class="text-white/80 text-base md:text-lg leading-relaxed mt-4 max-w-3xl">
                        If you are experiencing a medical emergency,
                        do not wait for an online appointment request.
                        Contact our emergency support team immediately
                        for urgent medical assistance and guidance.
                    </p>
                    <!-- FEATURES -->
                    <div class="grid md:grid-cols-2 gap-5 mt-8">
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 bg-white/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-clock text-[var(--neutral-50)] text-sm"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-base">
                                    24/7 Availability
                                </h4>
                                <p class="text-white/70 text-sm mt-1">
                                    Emergency assistance whenever you need it.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 bg-white/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-user-doctor text-[var(--neutral-50)] text-sm"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-base">
                                    Expert Medical Team
                                </h4>
                                <p class="text-white/70 text-sm mt-1">
                                    Immediate support from qualified professionals.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 bg-white/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-phone text-[var(--neutral-50)] text-sm"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-base">
                                    Fast Response
                                </h4>
                                <p class="text-white/70 text-sm mt-1">
                                    Reach our support team immediately.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 bg-white/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-hospital text-[var(--neutral-50)] text-sm"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-base">
                                    Trusted Healthcare
                                </h4>
                                <p class="text-white/70 text-sm mt-1">
                                    Decades of medical excellence and care.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RIGHT -->
                <div class="xl:col-span-5">
                    <div class="bg-[#fdfdfd] p-6 md:p-8 shadow-xl border border-slate-200">
                        <div class="w-14 h-14 bg-red-100 flex items-center justify-center mx-auto rounded-full">
                            <i class="fa-solid fa-truck-medical text-red-600 text-2xl"></i>
                        </div>
                        <h3 class="text-primary text-xl font-bold text-center mt-4">
                            Emergency Hotline
                        </h3>
                        <p class="text-slate-600 text-sm md:text-sm text-center mt-2">
                            For urgent medical assistance, contact us immediately.
                        </p>
                        <a href="tel:{{ $setting->phone }}"
                            class="block text-center bg-secondary text-white text-xl font-bold py-3.5 rounded-md mt-6 hover:bg-primary transition">
                            {{ $setting->phone }}
                        </a>
                        <div class="grid grid-cols-2 gap-3 mt-4">
                            <a href="tel:{{ $setting->phone }}"
                                class="border border-slate-300 py-3 text-center text-sm font-semibold text-primary rounded-md hover:border-secondary hover:text-secondary transition">
                                Call Now
                            </a>
                            <a href="#appointmentForm"
                                class="bg-primary text-white py-3 text-center text-sm font-semibold rounded-md hover:bg-secondary transition">
                                Book Visit
                            </a>
                        </div>
                        <div class="border-t border-slate-100 mt-6 pt-5">
                            <p class="text-sm text-slate-500 text-center">
                                For non-emergency appointments, please use the booking form above.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection
