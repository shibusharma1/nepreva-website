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
    <section class="bg-slate-100 py-8 md:py-10 xl:py-12">
        <div class="container-custom">
            <!-- Breadcrumb -->
            <nav aria-label="Breadcrumb" class="mb-6 text-sm text-slate-500">
                <ol class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="{{ url('/') }}" class="transition hover:text-secondary">
                            Home
                        </a>
                    </li>
                    <li aria-hidden="true">/</li>
                    <li class="font-medium text-primary" aria-current="page">
                        {{ $serviceTitle }}
                    </li>
                </ol>
            </nav>
            <!-- Main service panel -->
            <!-- Main service panel -->
            <div class="grid items-start border border-slate-200 bg-white lg:grid-cols-12">
                <!-- Sticky Service Image -->
                <div class="lg:col-span-5 lg:sticky lg:top-24 lg:self-start">
                    <div class="overflow-hidden">
                        <img src="{{ $serviceImage }}" alt="{{ $serviceTitle }}"
                            class="block h-56 w-full object-cover sm:h-64 lg:h-[360px]">
                    </div>
                </div>
                <!-- Service Content -->
                <div class="lg:col-span-7">
                    <div class="w-full p-5 sm:p-7 lg:p-10">
                        @if ($serviceSubtitle)
                            <span class="mb-3 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.16em] text-secondary">
                                <span class="h-1.5 w-1.5 bg-secondary"></span>
                                {{ $serviceSubtitle }}
                            </span>
                        @endif
                        <h1 class="text-[clamp(1.75rem,3vw,2.75rem)] font-bold leading-tight text-primary">
                            {{ $serviceTitle }}
                        </h1>
                        @if ($data->post_excerpt)
                            <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-600 sm:text-base sm:leading-8">
                                {{ strip_tags($data->post_excerpt) }}
                            </p>
                        @endif
                        <!-- Detailed Content -->
                        @if (trim(strip_tags($data->post_content ?? '')) !== '')
                            <div class="mt-6 border border-slate-200 bg-white p-5 sm:p-7 lg:p-8">
                                <div class="service-detail-content">
                                    {!! $data->post_content !!}
                                </div>
                            </div>
                        @endif
                        <!-- Buttons -->
                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="{{ url('page/bookappointment.html') }}"
                                class="btn-primary inline-flex items-center gap-2">
                                Book an Appointment
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </a>
                            <a href="{{ url('page/contact.html') }}"
                                class="inline-flex items-center gap-2 border border-slate-300 px-5 py-3 text-sm font-semibold text-primary rounded-md transition hover:border-secondary hover:text-secondary">
                                Make an Inquiry
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Documents -->
            @if (isset($documents) && $documents->isNotEmpty())
                <div class="mt-6 border border-slate-200 bg-white p-5 sm:p-7">
                    <h2 class="text-lg font-bold text-primary">
                        Related Documents
                    </h2>
                    <div class="mt-4 divide-y divide-slate-200">
                        @foreach ($documents as $document)
                            <div class="flex flex-wrap items-center justify-between gap-3 py-3">
                                <span class="text-sm font-medium text-slate-700">
                                    {{ $document->title ?? ($document->name ?? 'Document') }}
                                </span>
                                {{-- Update this URL if your PostDocModel uses a different file field. --}}
                                @if (!empty($document->file))
                                    <a href="{{ asset('uploads/documents/' . $document->file) }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-sm font-semibold text-primary hover:text-secondary">
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
