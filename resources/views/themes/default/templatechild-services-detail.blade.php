@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')
    @php
        $serviceTitle = $data->post_title;
        $serviceSubtitle = $data->sub_title;
        $serviceImage = $data->banner ? asset('uploads/medium/' . $data->banner) : asset('assets/img/no-image.jpg');
        $parentTitle = $data_child->post_title ?? 'Services';
        $parentUri = $data_child->uri ?? 'services';
    @endphp
    <!-- SERVICE DETAIL -->
    <section class="section-padding bg-slate-100">
        <div class="container-custom">
            <!-- Main service panel -->
            <div class="grid items-start border border-slate-200 bg-white lg:grid-cols-12">
                <!-- Sticky Service Image -->
                <div class="lg:col-span-5 lg:sticky lg:top-24 lg:self-start">
                    <div class="overflow-hidden">
                        <img src="{{ $serviceImage }}" alt="{{ $serviceTitle }}" class="block h-56 w-full object-cover sm:h-64 lg:h-[340px]">
                    </div>
                </div>
                <!-- Service Content -->
                <div class="lg:col-span-7">
                    <div class="w-full p-5 sm:p-7 lg:p-8">
                        @if ($serviceSubtitle)
                            <span class="mb-2 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.16em] text-secondary">
                                {{-- <span class="h-1.5 w-1.5 bg-secondary"></span> --}}
                                {{ $serviceSubtitle }}
                            </span>
                        @endif
                        <h1 class="text-xl sm:text-2xl md:text-3xl font-bold leading-tight text-primary">
                            {{ $serviceTitle }}
                        </h1>
                        @if ($data->post_excerpt)
                            <p class="mt-3 max-w-2xl text-base leading-relaxed text-slate-600 md:text-lg">
                                {{ strip_tags($data->post_excerpt) }}
                            </p>
                        @endif
                        <!-- Detailed Content -->
                        @if (trim(strip_tags($data->post_content ?? '')) !== '')
                            <div class="mt-5 border border-slate-200 bg-white p-5 sm:p-6">
                                <div class="service-detail-content text-slate-600 leading-relaxed text-base md:text-lg prose prose-lg max-w-none">
                                    {!! $data->post_content !!}
                                </div>
                            </div>
                        @endif
                        <!-- Buttons -->
                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="{{ url('page/bookappointment.html') }}" class="btn-primary inline-flex items-center gap-2 text-sm">
                                Book Appointment
                            </a>
                            <a href="{{ url('page/contact.html') }}" class="btn-secondary inline-flex items-center gap-2 text-sm">
                                Make an Inquiry
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Documents -->
            @if (isset($documents) && $documents->isNotEmpty())
                <div class="mt-6 border border-slate-200 bg-white p-5 sm:p-7">
                    <h2 class="text-base font-bold text-primary">
                        Related Documents
                    </h2>
                    <div class="mt-4 divide-y divide-slate-200">
                        @foreach ($documents as $document)
                            <div class="flex flex-wrap items-center justify-between gap-3 py-3">
                                <span class="text-sm font-medium text-slate-700">
                                    {{ $document->title ?? ($document->name ?? 'Document') }}
                                </span>
                                @if (!empty($document->file))
                                    <a href="{{ asset('uploads/documents/' . $document->file) }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-sm font-semibold text-primary hover:text-secondary transition">
                                        View document
                                        <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                                    </a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            <!-- Back to services -->
            <div class="mt-6">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-primary transition hover:text-secondary">
                    <i class="fa-solid fa-arrow-left text-xs"></i>
                    Back
                </a>
            </div>
        </div>
    </section>
@endsection
