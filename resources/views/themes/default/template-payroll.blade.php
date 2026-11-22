@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="payroll" data-title="Payroll | Nepreva" data-svc="Payroll">
            <section class="phero">
                <div class="wrap g">
                    <div><a class="crumb" href="services.php"><svg class="ico">
                                <use href="#i-chev" />
                            </svg>All services</a>
                        <h1>Accurate, on-time payroll at any team size.</h1>
                        <p class="lead">Payroll is unforgiving: it has to be right and it has to be on time, every cycle.
                            Nepreva provides payroll processing and administration support inside your approval process,
                            with controls that make every run checkable and every change traceable.</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a><a
                                class="btn btn-ghost" href="#start">Request a proposal</a></div>
                    </div>
                    <aside class="glance" aria-label="At a glance">
                        <h2>Payroll at a glance</h2>
                        <dl>
                            <dt>Who it’s for</dt>
                            <dd>Practices running payroll for clients, and businesses wanting dependable payroll without
                                building an internal function</dd>
                            <dt>Works inside</dt>
                            <dd>Your pay calendar and approval chain</dd>
                            <dt>You keep</dt>
                            <dd class="lime">Approval of every payroll run.</dd>
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
                            </svg>Payroll processing and calculations</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Statutory filings support</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Employee record administration</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Joiner, leaver and change processing</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Payroll reconciliations and reporting</li>
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
                            <h3>Predictable cycles</h3>
                            <p>Documented checks on every run.</p>
                        </div>
                        <div>
                            <h3>Less key-person risk</h3>
                            <p>No dependency on one or two individuals.</p>
                        </div>
                        <div>
                            <h3>A clear audit trail</h3>
                            <p>Changes and approvals are traceable.</p>
                        </div>
                        <div>
                            <h3>Steady as you grow</h3>
                            <p>Capacity holds as headcount rises.</p>
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
                            <p>We confirm the jurisdictions, pay calendar, systems and approval chain, then run a parallel
                                cycle before taking live processing.</p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-shield" />
                            </svg>
                            <h3>Quality and review</h3>
                            <p>Calculation checks, independent review and client approval before release. Exceptions are
                                escalated, never silently adjusted.</p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-tech" />
                            </svg>
                            <h3>Systems</h3>
                            <p>Your payroll platform or ours, agreed at scoping. Data access is limited by role.</p>
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
                        <p class="lead" style="max-width:60ch;color:var(--text)">Practices running payroll for clients,
                            and businesses wanting dependable payroll without building an internal function. Jurisdictional
                            coverage is confirmed per engagement.</p>
                        <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:28px"><a
                                class="btn btn-primary" href="#start">Build your delivery team</a></div>
                    </div>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <h2>Related services</h2>
                    <div class="rel"><a href="employer-of-record.php">
                            <h3>Employer of Record (EOR)</h3>
                            <p>Employ talent in Nepal without setting up a local entity.</p><span class="tlink">View
                                service <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="accounting-bookkeeping.php">
                            <h3>Accounting &amp; Bookkeeping</h3>
                            <p>Reliable capacity and a faster close, every month.</p><span class="tlink">View service <svg
                                    class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="finance-operations.php">
                            <h3>Finance Operations</h3>
                            <p>Scalable operating capacity for day-to-day finance.</p><span class="tlink">View service <svg
                                    class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a></div>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
