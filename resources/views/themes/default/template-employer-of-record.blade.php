@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="employer-of-record" data-title="Employer of Record (EOR) | Nepreva"
            data-svc="Employer of Record (EOR)">
            <section class="phero">
                <div class="wrap g">
                    <div><a class="crumb" href="services.php"><svg class="ico">
                                <use href="#i-chev" />
                            </svg>All services</a>
                        <h1>Hire and pay talent in Nepal without setting up a local entity.</h1>
                        <p class="lead">Building a team in Nepal shouldn’t require a registered entity, a local payroll
                            function and months of set-up. Under our Employer of Record service, Nepreva becomes the
                            compliant local employer. You direct the day-to-day work. We carry the employment
                            administration.</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a><a
                                class="btn btn-ghost" href="#start">Request a proposal</a></div>
                    </div>
                    <aside class="glance" aria-label="At a glance">
                        <h2>Employer of Record (EOR) at a glance</h2>
                        <dl>
                            <dt>Who it’s for</dt>
                            <dd>International firms and businesses that want to build a team in Nepal, including firms
                                already working with Nepreva’s delivery teams</dd>
                            <dt>Works inside</dt>
                            <dd>Your role and reporting line</dd>
                            <dt>You keep</dt>
                            <dd class="lime">Day-to-day direction of the work and the reporting line.</dd>
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
                            </svg>Compliant local employment on your behalf</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Employment contracts and administration</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Payroll, benefits and statutory compliance</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Onboarding and offboarding administration</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Ongoing employment records and reporting</li>
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
                            <h3>Faster than setting up an entity</h3>
                            <p>Hire without your own local registration.</p>
                        </div>
                        <div>
                            <h3>One accountable party</h3>
                            <p>A single point for employment compliance.</p>
                        </div>
                        <div>
                            <h3>Transparent costs</h3>
                            <p>Pass-through costs and fees stated clearly.</p>
                        </div>
                        <div>
                            <h3>Flexible headcount</h3>
                            <p>Scale up or down as needs change.</p>
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
                            <p>We confirm the role and terms, issue compliant employment documentation, onboard the employee
                                and run payroll and statutory obligations monthly, with reporting to you.</p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-shield" />
                            </svg>
                            <h3>Quality and review</h3>
                            <p>Payroll and statutory filings are checked before release, with a defined escalation path for
                                issues.</p>
                        </div>
                        <div><svg class="ico">
                                <use href="#i-tech" />
                            </svg>
                            <h3>Systems</h3>
                            <p>Secure HR and payroll administration, with reporting shared through your engagement channel.
                            </p>
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
                        <p class="lead" style="max-width:60ch;color:var(--text)">International firms and businesses that
                            want to build a team in Nepal, including firms already working with Nepreva’s delivery teams.
                        </p>
                        <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:28px"><a
                                class="btn btn-primary" href="#start">Build your delivery team</a></div>
                    </div>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <h2>Related services</h2>
                    <div class="rel"><a href="payroll.php">
                            <h3>Payroll</h3>
                            <p>Accurate, on-time payroll at any team size.</p><span class="tlink">View service <svg
                                    class="ico">
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
