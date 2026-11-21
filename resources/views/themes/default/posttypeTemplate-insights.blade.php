@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="insights"
            data-title="Insights | Accounting, Audit Support &amp; Outsourcing Perspectives | Nepreva">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>Perspectives on building finance delivery capacity.</h1>
                        <p class="lead">Practical thinking for practice leaders and finance teams weighing how to scale:
                            audit support, accounting, outsourcing models, technology and Nepal as a delivery destination.
                        </p>
                    </div>
                    <aside class="glance">
                        <h2>Insights</h2>
                        <dl>
                            <dt>Topics</dt>
                            <dd>Audit support, accounting, outsourcing, Nepal</dd>
                            <dt>Written for</dt>
                            <dd>Practice leaders and finance teams</dd>
                            <dt>Published by</dt>
                            <dd class=lime>Nepreva Global Solutions</dd>
                        </dl>
                    </aside>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <div class="filters"><button data-c="all" aria-pressed="true">All</button><button
                            data-c="Audit support" aria-pressed="false">Audit support</button><button data-c="Outsourcing"
                            aria-pressed="false">Outsourcing</button><button data-c="Nepal"
                            aria-pressed="false">Nepal</button><button data-c="Accounting"
                            aria-pressed="false">Accounting</button><button data-c="Employer of Record"
                            aria-pressed="false">Employer of Record</button></div>
                    <div class="acards"><a class="acard feat" data-cat="Audit support"
                            href="manage-audit-peak-season-workloads.php"><span class="cat">Audit support &nbsp;·&nbsp; 6
                                min read</span>
                            <h3>How audit firms can manage peak-season workloads</h3>
                            <p>Peak season is a timing problem as much as a capacity problem. Six practices that protect
                                sign-off dates without burning out your team.</p><span class="tlink">Read article <svg
                                    class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="acard" data-cat="Outsourcing" href="outsourcing-vs-offshoring.php"><span
                                class="cat">Outsourcing &nbsp;·&nbsp; 5 min read</span>
                            <h3>Outsourcing vs offshoring: what’s the difference?</h3>
                            <p>The two words are often used as if they meant the same thing. They don’t, and the difference
                                matters when you choose a model.</p><span class="tlink">Read article <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="acard" data-cat="Audit support"
                            href="what-makes-an-audit-support-partnership-work.php"><span class="cat">Audit support
                                &nbsp;·&nbsp; 6 min read</span>
                            <h3>What makes an audit support partnership work?</h3>
                            <p>Seven things that separate a smooth audit support arrangement from a frustrating one, and a
                                checklist to run before you begin.</p><span class="tlink">Read article <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="acard" data-cat="Nepal"
                            href="why-nepal-is-emerging-as-a-delivery-destination.php"><span class="cat">Nepal
                                &nbsp;·&nbsp; 5 min read</span>
                            <h3>Why Nepal is emerging as a professional services delivery destination</h3>
                            <p>A balanced look at the strengths Nepal offers for accounting and finance delivery, and the
                                points worth weighing before you commit.</p><span class="tlink">Read article <svg
                                    class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="acard" data-cat="Accounting" href="improving-month-end-close.php"><span
                                class="cat">Accounting &nbsp;·&nbsp; 6 min read</span>
                            <h3>Improving month-end close: a practical guide</h3>
                            <p>A calmer, faster close usually comes from discipline rather than software. A practical guide
                                with a sample calendar.</p><span class="tlink">Read article <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a><a class="acard" data-cat="Employer of Record" href="employer-of-record-in-nepal.php"><span
                                class="cat">Employer of Record &nbsp;·&nbsp; 5 min read</span>
                            <h3>Employing in Nepal without a local entity: how Employer of Record works</h3>
                            <p>What an Employer of Record does, who is responsible for what, and what to ask a provider
                                before you start.</p><span class="tlink">Read article <svg class="ico">
                                    <use href="#i-arrow" />
                                </svg></span>
                        </a></div>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
