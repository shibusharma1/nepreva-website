@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="fpa-financial-modelling" data-title="FP&amp;A &amp; Financial Modelling | Nepreva"
            data-svc="FP&amp;A &amp; Financial Modelling">
            <section class="phero">
                <div class="wrap g">
                    <div><a class="crumb" href="services.php"><svg class="ico">
                                <use href="#i-chev" />
                            </svg>All services</a>
                        <h1>Delivery that moves beyond bookkeeping into decision support.</h1>
                        <p class="lead">Decision-makers need numbers they can challenge. Nepreva builds and maintains
                            budgets, forecasts and models with documented assumptions, so the logic is visible and the
                            outputs hold up when questioned.</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a><a
                                class="btn btn-ghost" href="#start">Request a proposal</a></div>
                    </div>
                    <aside class="glance" aria-label="At a glance">
                        <h2>FP&amp;A &amp; Financial Modelling at a glance</h2>
                        <dl>
                            <dt>Who it’s for</dt>
                            <dd>Growth businesses, investor-backed companies and finance teams needing additional analytical
                                capacity</dd>
                            <dt>Works inside</dt>
                            <dd>Your planning tools and assumptions</dd>
                            <dt>You keep</dt>
                            <dd class="lime">The decisions the numbers support.</dd>
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
                            </svg>Budgeting and rolling forecasts</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Financial modelling and scenario analysis</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Cash-flow forecasting and working-capital analysis</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Management information and KPI reporting</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Variance and performance analysis</li>
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
                            <h3>Analytical capacity on demand</h3>
                            <p>No full internal FP&amp;A hire needed.</p>
                        </div>
                        <div>
                            <h3>Faster model turnaround</h3>
                            <p>Requests handled in days, not weeks of queueing.</p>
                        </div>
                        <div>
                            <h3>Assumptions open to challenge</h3>
                            <p>Documented so your team can test them.</p>
                        </div>
                        <div>
                            <h3>Ready for investor cycles</h3>
                            <p>Support ahead of fundraising and reporting.</p>
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
                            <p>We start from the decision your model needs to support, agree structure and assumptions with
                                you, then build, review and hand over with documentation.</p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-shield" />
                            </svg>
                            <h3>Quality and review</h3>
                            <p>Model integrity checks, independent review and a documented assumptions register on every
                                deliverable.</p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-tech" />
                            </svg>
                            <h3>Systems</h3>
                            <p>Excel, your planning tools and BI platforms, confirmed at scoping.</p>
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
                        <p class="lead" style="max-width:60ch;color:var(--text)">Growth businesses, investor-backed
                            companies and finance teams needing additional analytical capacity.</p>
                        <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:28px"><a
                                class="btn btn-primary" href="#start">Build your delivery team</a></div>
                    </div>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <h2>Related services</h2>
                    <div class="rel"><a href="virtual-cfo.php">
                            <h3>Virtual CFO</h3>
                            <p>Senior finance capability without a full-time fixed cost.</p><span class="tlink">View
                                service <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="financial-reporting.php">
                            <h3>Financial Reporting</h3>
                            <p>Better reporting without adding permanent headcount.</p><span class="tlink">View service
                                <svg class="ico">
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
