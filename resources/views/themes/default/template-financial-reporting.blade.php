@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="financial-reporting" data-title="Financial Reporting | Nepreva"
            data-svc="Financial Reporting">
            <section class="phero">
                <div class="wrap g">
                    <div><a class="crumb" href="services.php"><svg class="ico">
                                <use href="#i-chev" />
                            </svg>All services</a>
                        <h1>Better reporting, without adding permanent headcount.</h1>
                        <p class="lead">A report is only useful if it is accurate, on time and in the format your
                            stakeholders expect. Nepreva prepares management accounts, financial statements and reporting
                            packs to your templates, reviewed before they reach you, so what arrives is close to final
                            rather than a first draft that needs rework.</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a><a
                                class="btn btn-ghost" href="#start">Request a proposal</a></div>
                    </div>
                    <aside class="glance" aria-label="At a glance">
                        <h2>Financial Reporting at a glance</h2>
                        <dl>
                            <dt>Who it’s for</dt>
                            <dd>Finance teams, accounting practices and growing businesses needing recurring, board-ready
                                reporting</dd>
                            <dt>Works inside</dt>
                            <dd>Your templates and calendar</dd>
                            <dt>You keep</dt>
                            <dd class="lime">Final review and release of every pack.</dd>
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
                            </svg>Monthly management accounts</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Profit and loss, balance sheet and cash-flow reporting</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Financial statement preparation</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Group consolidation support</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Variance analysis and KPI reporting</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Board and investor pack preparation</li>
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
                            <h3>A cadence you can plan around</h3>
                            <p>Reports land on the same schedule each period.</p>
                        </div>
                        <div>
                            <h3>Built to your formats</h3>
                            <p>Your templates are the specification, not ours.</p>
                        </div>
                        <div>
                            <h3>Time back for analysis</h3>
                            <p>Your team comments and decides instead of producing.</p>
                        </div>
                        <div>
                            <h3>Ready for deadlines</h3>
                            <p>Reliable delivery ahead of board and investor dates.</p>
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
                            <p>We take your templates, consolidation structure and calendar as the specification, align the
                                team to them, and agree review windows so you always have time to apply your own judgement
                                before release.</p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-shield" />
                            </svg>
                            <h3>Quality and review</h3>
                            <p>Figures are cross-checked to source and reconciled before delivery. Variance explanations are
                                documented. Formats are followed exactly as specified.</p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-tech" />
                            </svg>
                            <h3>Systems</h3>
                            <p>Your accounting and consolidation platforms, Microsoft 365 and business intelligence tools
                                such as Power BI where in use, confirmed at scoping.</p>
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
                        <p class="lead" style="max-width:60ch;color:var(--text)">Finance teams, accounting practices and
                            growing businesses needing recurring, board-ready reporting.</p>
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
                        </a><a href="fpa-financial-modelling.php">
                            <h3>FP&amp;A &amp; Financial Modelling</h3>
                            <p>Delivery that moves beyond bookkeeping into decision support.</p><span class="tlink">View
                                service <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a href="virtual-cfo.php">
                            <h3>Virtual CFO</h3>
                            <p>Senior finance capability without a full-time fixed cost.</p><span class="tlink">View
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
