@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="virtual-cfo" data-title="Virtual CFO | Nepreva" data-svc="Virtual CFO">
            <section class="phero">
                <div class="wrap g">
                    <div><a class="crumb" href="services.php"><svg class="ico">
                                <use href="#i-chev" />
                            </svg>All services</a>
                        <h1>Senior finance capability without the full-time fixed cost.</h1>
                        <p class="lead">Not every business needs, or can yet carry, a full-time CFO. Nepreva’s Virtual CFO
                            support gives you senior finance thinking and a delivery team behind it: performance analysis,
                            planning and reporting, structured to the level of involvement you need.</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a><a
                                class="btn btn-ghost" href="#start">Request a proposal</a></div>
                    </div>
                    <aside class="glance" aria-label="At a glance">
                        <h2>Virtual CFO at a glance</h2>
                        <dl>
                            <dt>Who it’s for</dt>
                            <dd>Growing businesses, owner-managed companies and investor-backed firms without a full-time
                                finance leader</dd>
                            <dt>Works inside</dt>
                            <dd>Your accounting and reporting tools</dd>
                            <dt>You keep</dt>
                            <dd class="lime">Statutory officer responsibilities and final decisions.</dd>
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
                            </svg>Performance dashboards and KPI frameworks</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Finance planning and cash management support</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Board and investor reporting support</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Finance function review and process improvement</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Oversight of day-to-day finance delivery</li>
                    </ul>
                    <p class="callout"><svg class="ico">
                            <use href="#i-shield" />
                        </svg><span><b>Scope note.</b> Virtual CFO support extends your finance function. Statutory officer
                            responsibilities remain with the client’s appointed officers where regulation requires.</span>
                    </p>
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
                            <h3>Senior perspective, scalable cost</h3>
                            <p>Involvement matched to what you need.</p>
                        </div>
                        <div>
                            <h3>Clear view of cash and margin</h3>
                            <p>Dashboards you can act on.</p>
                        </div>
                        <div>
                            <h3>A bridge to strategy</h3>
                            <p>Links bookkeeping to planning.</p>
                        </div>
                        <div>
                            <h3>Room to grow</h3>
                            <p>A function ready for a full-time hire later.</p>
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
                            <p>We agree the scope of involvement and reporting rhythm, assess the current finance function,
                                and set priorities for the first ninety days.</p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-shield" />
                            </svg>
                            <h3>Quality and review</h3>
                            <p>Partner and reviewer accountability on every deliverable, with clear ownership of
                                recommendations.</p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-tech" />
                            </svg>
                            <h3>Systems</h3>
                            <p>Your accounting platform and reporting tools, plus dashboards built where needed.</p>
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
                        <p class="lead" style="max-width:60ch;color:var(--text)">Growing businesses, owner-managed
                            companies and investor-backed firms without a full-time finance leader.</p>
                        <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:28px"><a
                                class="btn btn-primary" href="#start">Build your delivery team</a></div>
                    </div>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <h2>Related services</h2>
                    <div class="rel"><a href="fpa-financial-modelling.php">
                            <h3>FP&amp;A &amp; Financial Modelling</h3>
                            <p>Delivery that moves beyond bookkeeping into decision support.</p><span class="tlink">View
                                service <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="financial-reporting.php">
                            <h3>Financial Reporting</h3>
                            <p>Better reporting without adding permanent headcount.</p><span class="tlink">View service
                                <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="accounting-bookkeeping.php">
                            <h3>Accounting &amp; Bookkeeping</h3>
                            <p>Reliable capacity and a faster close, every month.</p><span class="tlink">View service <svg
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
