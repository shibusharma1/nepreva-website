@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <div class="grid xl:grid-cols-[1.2fr_.8fr] gap-10 items-start">
                <div class="bg-white border border-slate-200 shadow-lg p-8 md:p-12 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-2 bg-secondary">
                    </div>
                    <span class="text-secondary font-semibold uppercase tracking-[3px]">
                        Send A Message
                    </span>
                    <h2 class="text-primary text-3xl md:text-4xl font-black mt-4">
                        We're Ready To Help
                    </h2>
                    <p class="text-slate-600 mt-5 leading-8 mb-10">
                        Complete the form below and a member of our
                        team will respond as soon as possible.
                    </p>
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-primary mb-2">
                                    Full Name
                                </label>
                                <input type="text" placeholder="Enter your full name"
                                    class="w-full h-14 px-5 border border-slate-300 focus:border-secondary outline-none transition">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-primary mb-2">
                                    Email Address
                                </label>
                                <input type="email" placeholder="Enter your email"
                                    class="w-full h-14 px-5 border border-slate-300 focus:border-secondary outline-none transition">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-primary mb-2">
                                Phone Number
                            </label>
                            <input type="text" placeholder="Enter your phone number"
                                class="w-full h-14 px-5 border border-slate-300 focus:border-secondary outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-primary mb-2">
                                Message
                            </label>
                            <textarea rows="6" placeholder="How can we help you?"
                                class="w-full p-5 border border-slate-300 focus:border-secondary outline-none transition"></textarea>
                        </div>
                        <button type="submit" class="btn-primary">
                            Send Message
                        </button>
                    </form>
                    <div class="grid md:grid-cols-3 gap-4 mt-10">
                        <div class="bg-slate-100 p-4 text-center">
                            <i class="fa-solid fa-clock text-secondary mb-2">
                            </i>
                            <p class="text-sm font-medium">
                                Quick Response
                            </p>
                        </div>
                        <div class="bg-slate-100 p-4 text-center">
                            <i class="fa-solid fa-shield-halved text-secondary mb-2">
                            </i>
                            <p class="text-sm font-medium">
                                Secure Inquiry
                            </p>
                        </div>
                        <div class="bg-slate-100 p-4 text-center">
                            <i class="fa-solid fa-user-doctor text-secondary mb-2">
                            </i>
                            <p class="text-sm font-medium">
                                Expert Support
                            </p>
                        </div>
                    </div>
                </div>
                <!-- HOSPITAL INFORMATION -->
                <div class="space-y-6">
                    <!-- KATHMANDU -->
                    <div class="bg-primary text-white p-8">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-white/10 flex items-center justify-center">
                                <i class="fa-solid fa-hospital text-secondary text-2xl">
                                </i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-black">
                                    Kathmandu Hospital
                                </h3>
                                <p class="text-white/70">
                                    Main Facility
                                </p>
                            </div>
                        </div>
                        <p class="text-white/80 leading-8">
                            Kapurdhara Marg<br>
                            Kathmandu, Nepal
                        </p>
                    </div>
                    <!-- POKHARA -->
                    <div class="bg-white border border-slate-200 p-8">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-secondary/10 flex items-center justify-center">
                                <i class="fa-solid fa-hospital text-secondary text-2xl">
                                </i>
                            </div>
                            <div>
                                <h3 class="text-primary text-2xl font-black">
                                    Pokhara Hospital
                                </h3>
                                <p class="text-slate-500">
                                    Branch Facility
                                </p>
                            </div>
                        </div>
                        <p class="text-slate-600 leading-8">
                            Lakeside, Pokhara<br>
                            Nepal
                        </p>
                    </div>
                    <!-- EMERGENCY -->
                    <div class="bg-secondary text-white p-8">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-white/10 flex items-center justify-center">
                                <i class="fa-solid fa-truck-medical text-2xl">
                                </i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-black">
                                    Emergency Care
                                </h3>
                                <p class="text-white/80">
                                    Available 24/7
                                </p>
                            </div>
                        </div>
                        <a href="tel:+97714524111" class="inline-flex items-center gap-2 font-bold">
                            Call Emergency
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <!-- OFFICE HOURS -->
                    <div class="bg-slate-100 border border-slate-200 p-8">
                        <h3 class="text-primary text-xl font-black mb-5">
                            Office Hours
                        </h3>
                        <div class="space-y-3 text-slate-600">
                            <div class="flex justify-between">
                                <span>Monday - Friday</span>
                                <span>24 Hours</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Saturday</span>
                                <span>24 Hours</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sunday</span>
                                <span>24 Hours</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
@endsection
