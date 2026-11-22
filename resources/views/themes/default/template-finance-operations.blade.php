@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="finance-operations" data-title="Finance Operations | Nepreva"
            data-svc="Finance Operations">
            <section class="phero">
                <div class="wrap g">
                    <div><a class="crumb" href="services.php"><svg class="ico">
                                <use href="#i-chev" />
                            </svg>All services</a>
                        <h1>Scalable operating capacity for day-to-day finance.</h1>
                        <p class="lead">Finance operations are high-volume, rules-driven and unforgiving of drift. Nepreva
                            takes on the recurring processes that keep a business running, under defined procedures and
                            measured service levels, so your finance leaders spend their time on decisions rather than
                            transactions.</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a><a
                                class="btn btn-ghost" href="#start">Request a proposal</a></div>
                    </div>
                    <aside class="glance" aria-label="At a glance">
                        <h2>Finance Operations at a glance</h2>
                        <dl>
                            <dt>Who it’s for</dt>
                            <dd>Growing businesses and finance teams with rising transaction volumes</dd>
                            <dt>Works inside</dt>
                            <dd>Your ERP and approval rules</dd>
                            <dt>You keep</dt>
                            <dd class="lime">Policy, approvals and payment release.</dd>
                        </dl>
                    </aside>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>What we deliver</h2>
                        <p class="lead">Scoped around an outcome for your practice or business, then adjusted to your
                            volume.</p>
                    </div>
                    <ul class="dl">
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Procure-to-pay: invoice processing, vendor reconciliations, payment run preparation</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Order-to-cash: invoicing, receipts allocation, collections support</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Finance administration and master-data maintenance</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Process documentation and improvement recommendations</li>
                    </ul>
                </div>
            </section>
            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>How it adds value</h2>
                        <p class="lead">What changes for your team once the work is in capable hands.</p>
                    </div>
                    <div class="vgrid">
                        <div>
                            <h3>Documented, repeatable processes</h3>
                            <p>Written procedures, not tribal knowledge.</p>
                        </div>
                        <div>
                            <h3>Volume without hiring</h3>
                            <p>Handle growth without proportional headcount.</p>
                        </div>
                        <div>
                            <h3>Service levels reported</h3>
                            <p>Agreed targets, measured and shared.</p>
                        </div>
                        <div>
                            <h3>Improvements from the work</h3>
                            <p>Process fixes surface from doing it daily.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>How it runs, day to day</h2>
                        <p class="lead">Every engagement follows the same disciplined pattern, adapted to your standards.
                        </p>
                    </div>
                    <div class="run">
                        <div><svg class="ico">
                                <use href="#i-flag" />
                            </svg>
                            <h3>How we work</h3>
                            <p>We document the current process, agree controls and service levels, then transition the work
                                in stages, starting with a defined pilot scope.</p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-shield" />
                            </svg>
                            <h3>Quality and review</h3>
                            <p>Maker-checker on every posting and payment preparation. Exceptions are logged and escalated.
                            </p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-tech" />
                            </svg>
                            <h3>Systems</h3>
                            <p>Your ERP or accounting platform, with access scoped to the process.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec">
                <div class="wrap whobox">
                    <div>
                        <h2>Who it’s for</h2>
                    </div>
                    <div>
                        <p class="lead" style="max-width:60ch;color:var(--text)">Growing businesses and finance teams with
                            rising transaction volumes.</p>
                        <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:28px"><a
                                class="btn btn-primary" href="#start">Build your delivery team</a></div>
                    </div>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <h2>Related services</h2>
                    <div class="rel"><a href="accounting-bookkeeping.php">
                            <h3>Accounting &amp; Bookkeeping</h3>
                            <p>Reliable capacity and a faster close, every month.</p><span class="tlink">View service <svg
                                    class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="payroll.php">
                            <h3>Payroll</h3>
                            <p>Accurate, on-time payroll at any team size.</p><span class="tlink">View service <svg
                                    class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="fpa-financial-modelling.php">
                            <h3>FP&amp;A &amp; Financial Modelling</h3>
                            <p>Delivery that moves beyond bookkeeping into decision support.</p><span class="tlink">View
                                service <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a></div>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
