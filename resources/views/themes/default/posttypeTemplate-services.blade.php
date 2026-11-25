@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <main id="main">
        <div class="pg on" data-page="services" data-title="Accounting, Audit Support &amp; Finance Services | Nepreva">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>{!! $data->caption !!}</h1>
                        <p class="lead">{{ strip_tags($data->content) }}</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a><a
                                class="btn btn-ghost" href="#start">Request a proposal</a></div>
                    </div>
                     @include('themes.default.common.aside')
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <div class="rows"><a class="row" href="accounting-bookkeeping.php">
                            <div>
                                <h3>Accounting &amp; Bookkeeping</h3>
                                <p class="pr">Reliable capacity and a faster close, every month.</p>
                                <p class="inc">Chartered Accountant-led accounting and bookkeeping delivery inside your
                                    systems: reconciliations, AP/AR and month-end close.</p>
                            </div><span class="go"><svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="row" href="financial-reporting.php">
                            <div>
                                <h3>Financial Reporting</h3>
                                <p class="pr">Better reporting without adding permanent headcount.</p>
                                <p class="inc">Management accounts, financial statements and board packs prepared to your
                                    templates and reviewed before delivery.</p>
                            </div><span class="go"><svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="row" href="audit-assurance-support.php">
                            <div>
                                <h3>Audit &amp; Assurance Support</h3>
                                <p class="pr">More audit-support capacity and reduced turnaround pressure.</p>
                                <p class="inc">Chartered Accountant-led audit support for firms: workpapers, testing and
                                    documentation under your methodology and review.</p>
                            </div><span class="go"><svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="row" href="tax-compliance-support.php">
                            <div>
                                <h3>Tax &amp; Compliance Support</h3>
                                <p class="pr">Additional technical capacity, always under your review.</p>
                                <p class="inc">Tax return preparation, schedules and compliance documentation support,
                                    always under your review.</p>
                            </div><span class="go"><svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="row" href="payroll.php">
                            <div>
                                <h3>Payroll</h3>
                                <p class="pr">Accurate, on-time payroll at any team size.</p>
                                <p class="inc">Accurate, on-time payroll processing, statutory filing support and
                                    employee record administration.</p>
                            </div><span class="go"><svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="row" href="finance-operations.php">
                            <div>
                                <h3>Finance Operations</h3>
                                <p class="pr">Scalable operating capacity for day-to-day finance.</p>
                                <p class="inc">Scalable procure-to-pay, order-to-cash and finance administration capacity
                                    from a Chartered Accountant-led team.</p>
                            </div><span class="go"><svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="row" href="fpa-financial-modelling.php">
                            <div>
                                <h3>FP&amp;A &amp; Financial Modelling</h3>
                                <p class="pr">Delivery that moves beyond bookkeeping into decision support.</p>
                                <p class="inc">Budgeting, forecasting, financial modelling and management information
                                    delivered by Chartered Accountant-led teams.</p>
                            </div><span class="go"><svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="row" href="virtual-cfo.php">
                            <div>
                                <h3>Virtual CFO</h3>
                                <p class="pr">Senior finance capability without a full-time fixed cost.</p>
                                <p class="inc">Senior finance capability without a full-time fixed cost: dashboards,
                                    finance planning and board reporting support.</p>
                            </div><span class="go"><svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="row" href="employer-of-record.php">
                            <div>
                                <h3>Employer of Record (EOR)</h3>
                                <p class="pr">Employ talent in Nepal without setting up a local entity.</p>
                                <p class="inc">Employ talent in Nepal without a local entity. Nepreva handles contracts,
                                    payroll, benefits and statutory compliance.</p>
                            </div><span class="go"><svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a></div>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
