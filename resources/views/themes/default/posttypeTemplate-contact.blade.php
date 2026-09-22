@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')

    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <div class="grid xl:grid-cols-[1.2fr_.8fr] gap-10 items-start">
                <div class="bg-[var(--neutral-50)] border border-slate-200 shadow-md p-6 md:p-10 relative overflow-hidden">
                    {{-- <div class="absolute top-0 left-0 w-full h-1.5 bg-secondary">
                    </div> --}}
                    <span class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-2">
                        {{-- <span class="w-1.5 h-1.5 bg-secondary"></span> --}}
                        Send A Message
                    </span>
                    <h2 class="section-title">
                        We're Ready To Help
                    </h2>
                    <p class="text-slate-600 mt-3 text-base md:text-lg leading-relaxed mb-8">
                        Complete the form below and a member of our
                        team will respond as soon as possible.
                    </p>
                    @if (session('success'))
                        <div id="flash-message"
                            class="mb-6 rounded-lg border border-green-200 bg-green-50 px-5 py-4 text-green-700 text-sm">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div id="flash-message"
                            class="mb-6 rounded-lg border border-red-200 bg-red-50 px-5 py-4 text-red-700 text-sm">
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
                    <form action="{{ route('sendmail_contact') }}" method="POST" class="space-y-5">
                        @csrf

                        <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response">
                        <div class="grid md:grid-cols-2 gap-5">
                            <!-- Full Name -->
                            <div>
                                <label for="full_name" class="block text-sm font-semibold text-primary mb-2">
                                    Full Name
                                </label>
                                <input type="text" name="full_name" placeholder="Enter your full name"
                                    class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition">
                            </div>

                            <!-- Email -->
                            <div>
                                <label class="block text-sm font-semibold text-primary mb-2">
                                    Email Address
                                </label>
                                <input type="email" name="email" placeholder="Enter your email"
                                    class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-5">
                            <!-- Phone -->
                            <div>
                                <label class="block text-sm font-semibold text-primary mb-2">
                                    Phone Number
                                </label>
                                <input type="text" name="phone" placeholder="Enter your phone number"
                                    class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition">
                            </div>

                            <!-- Subject -->
                            <div>
                                <label class="block text-sm font-semibold text-primary mb-2">
                                    Subject
                                </label>
                                <input type="text" name="subject" placeholder="Enter subject"
                                    class="w-full h-12 px-4 border border-slate-300 text-sm focus:border-secondary outline-none transition">
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block text-sm font-semibold text-primary mb-2">
                                Message
                            </label>
                            <textarea rows="5" name="message" placeholder="How can we help you?"
                                class="w-full p-4 border border-slate-300 text-sm focus:border-secondary outline-none transition resize-none"></textarea>
                        </div>

                        <!-- Button -->
                        <button type="submit" class="btn-primary text-sm">
                            Send Message
                        </button>
                    </form>
                    <div class="grid md:grid-cols-3 gap-4 mt-8 border-t border-slate-100 pt-6">
                        <div class="bg-slate-50 border border-slate-200 p-4 text-center">
                            <i class="fa-solid fa-clock text-secondary mb-2 text-lg">
                            </i>
                            <p class="text-xs font-semibold text-primary">
                                Quick Response
                            </p>
                        </div>
                        <div class="bg-slate-50 border border-slate-200 p-4 text-center">
                            <i class="fa-solid fa-shield-halved text-secondary mb-2 text-lg">
                            </i>
                            <p class="text-xs font-semibold text-primary">
                                Secure Inquiry
                            </p>
                        </div>
                        <div class="bg-slate-50 border border-slate-200 p-4 text-center">
                            <i class="fa-solid fa-user-doctor text-secondary mb-2 text-lg">
                            </i>
                            <p class="text-xs font-semibold text-primary">
                                Expert Support
                            </p>
                        </div>
                    </div>
                </div>
                <!-- HOSPITAL INFORMATION -->
                <div class="space-y-6">
                    <!-- KATHMANDU -->
                    <div class="bg-primary text-white p-6 md:p-7 shadow-sm">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-white/10 flex items-center justify-center">
                                <i class="fa-solid fa-hospital text-secondary text-xl">
                                </i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold">
                                    Kathmandu Hospital
                                </h3>
                                <p class="text-white/70 text-xs uppercase tracking-wider">
                                    Main Facility
                                </p>
                            </div>
                        </div>
                        <p class="text-white/85 text-base leading-relaxed">
                            Kapurdhara Marg<br>
                            Kathmandu, Nepal
                        </p>
                    </div>
                    <!-- POKHARA -->
                    <div class="bg-[var(--neutral-50)] border border-slate-200 p-6 md:p-7 shadow-sm">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-secondary/10 flex items-center justify-center">
                                <i class="fa-solid fa-hospital text-secondary text-xl">
                                </i>
                            </div>
                            <div>
                                <h3 class="text-primary text-xl font-bold">
                                    Pokhara Hospital
                                </h3>
                                <p class="text-slate-500 text-xs uppercase tracking-wider">
                                    Branch Facility
                                </p>
                            </div>
                        </div>
                        <p class="text-slate-600 text-base leading-relaxed">
                            Lakeside, Pokhara<br>
                            Nepal
                        </p>
                    </div>
                    <!-- EMERGENCY -->
                    <div class="bg-secondary text-white p-6 md:p-7 shadow-sm">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-white/10 flex items-center justify-center">
                                <i class="fa-solid fa-truck-medical text-xl">
                                </i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold">
                                    Emergency Care
                                </h3>
                                <p class="text-white/80 text-xs uppercase tracking-wider">
                                    Available 24/7
                                </p>
                            </div>
                        </div>
                        <a href="tel:+97714524111" class="inline-flex items-center gap-2 text-sm font-bold hover:underline">
                            Call Emergency
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                    <!-- OFFICE HOURS -->
                    <div class="bg-[var(--neutral-50)] border border-slate-200 p-6 md:p-7 shadow-sm">
                        <h3 class="text-primary text-lg font-bold mb-4">
                            Office Hours
                        </h3>
                        <div class="space-y-2.5 text-sm text-slate-600">
                            <div class="flex justify-between border-b border-slate-100 pb-2">
                                <span>Monday - Friday</span>
                                <span class="font-medium text-primary">24 Hours</span>
                            </div>
                            <div class="flex justify-between border-b border-slate-100 pb-2">
                                <span>Saturday</span>
                                <span class="font-medium text-primary">24 Hours</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sunday</span>
                                <span class="font-medium text-primary">24 Hours</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
