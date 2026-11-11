@extends('themes.default.common.master')
@section('content')
    @php
    $page_title = 'Nepreva | Global Finance &amp; Accounting Delivery Partner';
    $page_desc = 'Chartered Accountant-led accounting, audit support and finance delivery for international firms and businesses. Dedicated teams, partner governance, delivered from Nepal.';
    $show_mcta = true;
    @endphp

    <main id="main">
        <span id="top"></span>

        <!-- HERO -->
        <section class="hero">
            <svg class="hero-mark" aria-hidden="true" viewBox="0 0 321 295">
                <use href="#mark" />
            </svg>
            <div class="wrap hero-grid">
                <div>
                    <p class="status"><i></i>Delivering today in the UK, Canada and Mauritius</p>
                    <h1>Your global finance &amp; accounting delivery partner</h1>
                    <p class="tag">Extend your capacity. Accelerate your growth.</p>
                    <p class="lead">Chartered Accountant-led accounting, audit support and finance delivery for
                        international firms and businesses. Professional expertise, structured governance and technology,
                        delivered from Nepal.</p>
                    <div class="ctas">
                        <a class="btn btn-primary" href="#start">Build your delivery team</a>
                        <a class="btn btn-ghost" href="#services">Explore our solutions</a>
                    </div>
                    <ul class="creds">
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Chartered Accountant-led</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Partner-governed</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Technology-enabled</li>
                    </ul>
                </div>

                <div class="board" id="board" aria-label="Illustrative engagement view">
                    <div class="board-top"><b>Engagement view</b><span class="ill">Illustrative workflow, not client
                            data</span></div>
                    <div class="seg" role="tablist" aria-label="Choose a client type">
                        <button role="tab" aria-selected="true" data-k="firm">Accounting firm</button>
                        <button role="tab" aria-selected="false" data-k="biz">Finance team</button>
                    </div>
                    <div class="b-head">
                        <div>
                            <div class="b-title" id="bTitle"></div>
                            <div class="b-sub" id="bSub"></div>
                        </div>
                        <div class="b-count" aria-live="polite"><span id="bNum">0</span><small>of <span
                                    id="bTot">9</span> checks</small></div>
                    </div>
                    <div class="bar"><i id="bBar"></i></div>
                    <ol class="stages" id="stages"></ol>
                    <div class="b-foot"><span id="bFootTxt">Work in progress</span><span class="chip" id="bChip">In
                            review chain</span></div>
                </div>
            </div>
        </section>

        <!-- PROOF -->
        <section class="proof" aria-label="Nepreva at a glance">
            <!-- CONFIRM all four figures before launch -->
            <div class="wrap">
                <ul>
                    <li><strong>25+</strong><span>years of professional heritage</span></li>
                    <li><strong>130+</strong><span>professionals across the group</span></li>
                    <li><strong>35+</strong><span>Chartered Accountants</span></li>
                    <li><strong>3</strong><span>active markets: UK, Canada and Mauritius</span></li>
                </ul>
            </div>
        </section>

        <!-- SOLVE -->
        <section class="sec" id="solutions">
            <div class="wrap">
                <div class="head-split">
                    <h2>What are you looking to solve?</h2>
                    <p class="lead">Two kinds of teams use Nepreva. Pick the one that sounds like yours.</p>
                </div>
                <div class="paths">
                    <article class="path" id="for-firms">
                        <h3 class="path-t">Accounting &amp; audit firms</h3>
                        <p class="pp">Increase capacity without increasing permanent overhead.</p>
                        <ul>
                            <li><svg class="ico">
                                    <use href="#i-check" />
                                </svg>Absorb busy-season peaks without a recruitment cycle</li>
                            <li><svg class="ico">
                                    <use href="#i-check" />
                                </svg>Take on new client work with confidence</li>
                            <li><svg class="ico">
                                    <use href="#i-check" />
                                </svg>Keep partners and senior staff on judgement and client relationships</li>
                        </ul>
                        <a class="tlink" href="for-accounting-audit-firms.php">Explore firm solutions <svg class="ico">
                                <use href="#i-arrow" />
                            </svg></a>
                    </article>
                    <article class="path alt" id="for-businesses">
                        <h3 class="path-t">Businesses &amp; finance teams</h3>
                        <p class="pp">Build a scalable finance function without building everything in-house.</p>
                        <ul>
                            <li><svg class="ico">
                                    <use href="#i-check" />
                                </svg>Dependable monthly close and reporting</li>
                            <li><svg class="ico">
                                    <use href="#i-check" />
                                </svg>Analytical capacity for planning and investor needs</li>
                            <li><svg class="ico">
                                    <use href="#i-check" />
                                </svg>Senior oversight without a full-time hire</li>
                        </ul>
                        <a class="tlink" href="for-businesses-finance-teams.php">Explore finance solutions <svg
                                class="ico">
                                <use href="#i-arrow" />
                            </svg></a>
                    </article>
                </div>
            </div>
        </section>

        <!-- CONSTRAINTS -->
        <section class="band sec">
            <div class="wrap">
                <div class="cons">
                    <div>
                        <h2>Your growth shouldn’t be limited by your finance capacity.</h2>
                        <p class="cons-quote" style="margin-top:34px">Nepreva gives you experienced delivery capacity
                            without requiring you to build it all yourself.</p>
                    </div>
                    <div class="cons-grid">
                        <div>
                            <h3>Talent</h3>
                            <p>Recruitment and retention pressure in a tight market.</p>
                        </div>
                        <div>
                            <h3>Cost</h3>
                            <p>Rising delivery cost per hour of qualified work.</p>
                        </div>
                        <div>
                            <h3>Capacity</h3>
                            <p>Busy seasons and deadlines that outpace headcount.</p>
                        </div>
                        <div>
                            <h3>Scale</h3>
                            <p>The need to accept more work without proportional hiring.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EQUATION -->
        <section class="night sec">
            <div class="wrap">
                <div class="head-split" style="margin-bottom:0">
                    <h2>More than outsourcing. Your delivery advantage.</h2>
                    <p class="lead">Capacity is easy to find. Capacity you can trust with your clients is a combination
                        of three things working together.</p>
                </div>
                <div class="eq">
                    <div class="cell"><svg class="ico">
                            <use href="#i-people" />
                        </svg>
                        <h3>People</h3>
                        <p>Chartered Accountant-led professionals, with named partner oversight on every engagement.</p>
                    </div>
                    <div class="op" aria-hidden="true">×</div>
                    <div class="cell"><svg class="ico">
                            <use href="#i-doc" />
                        </svg>
                        <h3>Process</h3>
                        <p>Structured delivery, documented standards and quality governance built into each stage.</p>
                    </div>
                    <div class="op" aria-hidden="true">×</div>
                    <div class="cell"><svg class="ico">
                            <use href="#i-tech" />
                        </svg>
                        <h3>Technology</h3>
                        <p>Cloud, automation and AI-enabled workflows, always reviewed by a qualified person.</p>
                    </div>
                    <div class="op" aria-hidden="true">=</div>
                    <div class="cell res">
                        <h3>Better finance delivery</h3>
                        <p>Work that arrives reviewed, documented and ready for your sign-off.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES -->
        <section class="sec" id="services">
            <div class="wrap svc">
                <div class="svc-side">
                    <h2>Finance. Accounting. Audit support. Delivered.</h2>
                    <p class="lead">Every service line is built around an outcome for your practice or business, not a
                        checklist of tasks.</p>
                    <a class="btn btn-primary" href="#start">Build your delivery team</a>
                </div>
                <div class="rows">
                    <a class="row" href="accounting-bookkeeping.php">
                        <div>
                            <h3>Accounting &amp; Bookkeeping</h3>
                            <p class="pr">Reliable capacity and a faster close, every month.</p>
                            <p class="inc">Bookkeeping and GL, AP/AR, bank and account reconciliations, month-end close.
                            </p>
                        </div><span class="go"><svg class="ico">
                                <use href="#i-arrow" />
                            </svg></span>
                    </a>
                    <a class="row" href="financial-reporting.php">
                        <div>
                            <h3>Financial Reporting</h3>
                            <p class="pr">Better reporting without adding permanent headcount.</p>
                            <p class="inc">Management accounts, financial statements, group consolidation, board packs.
                            </p>
                        </div><span class="go"><svg class="ico">
                                <use href="#i-arrow" />
                            </svg></span>
                    </a>
                    <a class="row" href="audit-assurance-support.php">
                        <div>
                            <h3>Audit &amp; Assurance Support</h3>
                            <p class="pr">More audit-support capacity and reduced turnaround pressure.</p>
                            <p class="inc">Workpapers, lead schedules, substantive and controls testing, group audit
                                support.</p>
                        </div><span class="go"><svg class="ico">
                                <use href="#i-arrow" />
                            </svg></span>
                    </a>
                    <a class="row" href="tax-compliance-support.php">
                        <div>
                            <h3>Tax &amp; Compliance Support</h3>
                            <p class="pr">Additional technical capacity, always under your review.</p>
                            <p class="inc">Return preparation support, compliance documentation, workflow and tracking.
                            </p>
                        </div><span class="go"><svg class="ico">
                                <use href="#i-arrow" />
                            </svg></span>
                    </a>
                    <a class="row" href="payroll.php">
                        <div>
                            <h3>Payroll</h3>
                            <p class="pr">Accurate, on-time payroll at any team size.</p>
                            <p class="inc">Processing and calculations, statutory filings support, employee record
                                administration.</p>
                        </div><span class="go"><svg class="ico">
                                <use href="#i-arrow" />
                            </svg></span>
                    </a>
                    <a class="row" href="finance-operations.php">
                        <div>
                            <h3>Finance Operations</h3>
                            <p class="pr">Scalable operating capacity for day-to-day finance.</p>
                            <p class="inc">Procure-to-pay, order-to-cash, finance administration.</p>
                        </div><span class="go"><svg class="ico">
                                <use href="#i-arrow" />
                            </svg></span>
                    </a>
                    <a class="row" href="fpa-financial-modelling.php">
                        <div>
                            <h3>FP&amp;A &amp; Financial Modelling</h3>
                            <p class="pr">Delivery that moves beyond bookkeeping into decision support.</p>
                            <p class="inc">Budgeting and forecasting, financial modelling, management information and
                                analysis.</p>
                        </div><span class="go"><svg class="ico">
                                <use href="#i-arrow" />
                            </svg></span>
                    </a>
                    <a class="row" href="virtual-cfo.php">
                        <div>
                            <h3>Virtual CFO</h3>
                            <p class="pr">Senior finance capability without a full-time fixed cost.</p>
                            <p class="inc">Dashboards and performance analysis, finance planning, board and investor
                                reporting support.</p>
                        </div><span class="go"><svg class="ico">
                                <use href="#i-arrow" />
                            </svg></span>
                    </a>
                    <a class="row" href="employer-of-record.php">
                        <div>
                            <h3>Employer of Record (EOR)</h3>
                            <p class="pr">Employ talent in Nepal without setting up a local entity.</p>
                            <p class="inc">Compliant employment on your behalf, payroll, benefits and statutory
                                compliance, onboarding and offboarding.</p>
                        </div><span class="go"><svg class="ico">
                                <use href="#i-arrow" />
                            </svg></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- MODELS -->
        <section class="band sec" id="delivery-models">
            <div class="wrap">
                <div class="head-split">
                    <h2>Choose the capacity you need.</h2>
                    <p class="lead">Start with the smallest model that proves the relationship, then grow it as trust
                        develops.</p>
                </div>
                <div class="models">
                    <div>
                        <div class="mtabs" role="tablist" aria-label="Engagement models" id="mtabs"></div>
                        <div class="mpanel" id="mpanel" role="tabpanel" aria-live="polite"></div>
                    </div>
                    <div class="grow">
                        <h3>How the relationship typically grows</h3>
                        <p class="small">Most clients begin small and widen the scope.</p>
                        <div class="steps">
                            <div class="step"><b>Pilot</b><span>A defined process or limited scope to reduce risk</span>
                            </div>
                            <div class="step"><b>Team</b><span>A named team that learns your business</span></div>
                            <div class="step"><b>Function</b><span>A whole function delivered against agreed SLAs</span>
                            </div>
                            <div class="step"><b>Strategic partner</b><span>Planning, reporting and delivery working as
                                    one</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- QUALITY -->
        <section class="sec" id="quality">
            <div class="wrap">
                <div class="head-split" style="margin-bottom:0">
                    <h2>Quality is built into the process, not inspected at the end.</h2>
                    <p class="lead">Select a stage to see what happens there. Every deliverable passes through all five
                        before it reaches you.</p>
                </div>
                <div class="pipe" role="tablist" aria-label="Quality chain" id="pipe"></div>
                <div class="pdetail" id="pdetail" aria-live="polite"></div>
                <p class="loop"><svg class="ico">
                        <use href="#i-loop" />
                    </svg>Feedback from every cycle goes back into the brief for the next one.</p>
            </div>
        </section>

        <!-- NEPAL -->
        <section class="band sec" id="nepal">
            <div class="wrap nepal">
                <div>
                    <h2>Why Nepal?</h2>
                    <p class="lead" style="margin-top:20px">Nepal is an emerging destination for professional finance
                        delivery with specific, credible strengths. It is not the largest or most established market, and we
                        don’t claim it is.</p>
                    <div class="pts">
                        <div>
                            <h3>Talent</h3>
                            <p>A growing pool of qualified accounting and finance graduates.</p>
                        </div>
                        <div>
                            <h3>English</h3>
                            <p>Business-fluent English across the professional workforce.</p>
                        </div>
                        <div>
                            <h3>Economics</h3>
                            <p>Favourable delivery economics without compromising review quality.</p>
                        </div>
                        <div>
                            <h3>Time zone</h3>
                            <p>Workable overlap with UK, Gulf and Asia-Pacific business hours.</p>
                        </div>
                        <div>
                            <h3>Professional ecosystem</h3>
                            <p>An accounting profession structured around ICAN and international standards.</p>
                        </div>
                        <div>
                            <h3>Early-mover advantage</h3>
                            <p>An emerging delivery destination, not yet crowded.</p>
                        </div>
                    </div>
                </div>
                <div class="tz">
                    <h3>Your working day, next to ours</h3>
                    <p class="small">Shown in Nepal time, using standard 09:00 to 17:30 office hours.</p>
                    <div class="ztabs" role="tablist" aria-label="Your region" id="ztabs"></div>
                    <div class="track" id="track"></div>
                    <div class="tz-out"><span class="tz-big" id="tzBig"></span><span class="tz-txt"
                            id="tzTxt"></span></div>
                    <p class="tz-note">Standard time. Daylight saving moves these by an hour, and Nepal does not observe
                        it.</p>
                </div>
            </div>
        </section>

        <!-- FOUNDATION -->
        <section class="found sec" id="foundation">
            <svg class="mk" aria-hidden="true" viewBox="0 0 321 295"
                style="--mk-frame:#fff;--mk-green:#fff;--mk-blue:#fff">
                <use href="#mark" />
            </svg>
            <div class="wrap in">
                <div>
                    <h2>Professional DNA. Global ambition.</h2>
                    <p class="lead">Nepreva is supported by NBSM, one of the largest and most established Chartered
                        Accountancy firms in Nepal and an independent member of Moore Global. That foundation shapes how
                        Nepreva delivers: partner accountability, documented quality standards and an international outlook
                        built on years of cross-border professional work.</p>
                    <a class="btn btn-light" href="about.php">About our foundation</a>
                </div>
                <ul class="facts">
                    <li><svg class="ico">
                            <use href="#i-check" />
                        </svg>Chartered accountancy foundation and partner governance</li>
                    <li><svg class="ico">
                            <use href="#i-check" />
                        </svg>Independent member firm of Moore Global</li>
                    <li><svg class="ico">
                            <use href="#i-check" />
                        </svg>Professional heritage across audit, tax and advisory work</li>
                    <li><svg class="ico">
                            <use href="#i-check" />
                        </svg>International engagement experience across multiple markets</li>
                </ul>
            </div>
        </section>

        <!-- TRUST -->
        <section class="sec" id="security">
            <div class="wrap">
                <div class="head-split" style="margin-bottom:0">
                    <h2>Trust. Quality. Security.</h2>
                    <p class="lead">Controls you can ask about, and a plain statement of what we have and haven’t
                        certified.</p>
                </div>
                <div class="tgrid">
                    <div><svg class="ico">
                            <use href="#i-shield" />
                        </svg>
                        <h3>Quality governance</h3>
                        <p>Maker-checker review and technical sign-off before delivery.</p>
                    </div>
                    <div><svg class="ico">
                            <use href="#i-lock" />
                        </svg>
                        <h3>Information security</h3>
                        <p>Role-based access and multi-factor authentication.</p>
                    </div>
                    <div><svg class="ico">
                            <use href="#i-eye" />
                        </svg>
                        <h3>Confidentiality</h3>
                        <p>Client-specific confidentiality protocols on every engagement.</p>
                    </div>
                    <div><svg class="ico">
                            <use href="#i-key" />
                        </svg>
                        <h3>Access control</h3>
                        <p>Least-privilege access, scoped by role and engagement.</p>
                    </div>
                    <div><svg class="ico">
                            <use href="#i-pulse" />
                        </svg>
                        <h3>Business continuity</h3>
                        <p>Documented continuity and escalation procedures.</p>
                    </div>
                    <div><svg class="ico">
                            <use href="#i-usercheck" />
                        </svg>
                        <h3>Professional oversight</h3>
                        <p>Partner and reviewer accountability on every deliverable.</p>
                    </div>
                    <div><svg class="ico">
                            <use href="#i-layers" />
                        </svg>
                        <h3>Technology controls</h3>
                        <p>Secure collaboration and document management.</p>
                    </div>
                    <div><svg class="ico">
                            <use href="#i-db" />
                        </svg>
                        <h3>Data protection</h3>
                        <p>Data handling aligned to client and jurisdictional requirements.</p>
                    </div>
                </div>
                <p class="cert"><svg class="ico">
                        <use href="#i-shield" />
                    </svg>Security certifications and regulatory claims are published only once independently verified.
                    Currently: none to publish.</p>

                <div class="ledger">
                    <div>
                        <h3>AI accelerates.</h3>
                        <p class="sub">Automation takes the repetitive work.</p>
                        <ul>
                            <li>Document processing</li>
                            <li>Reconciliation tooling</li>
                            <li>Workflow automation</li>
                            <li>Human-reviewed analytics</li>
                        </ul>
                    </div>
                    <div>
                        <h3>Professionals decide.</h3>
                        <p class="sub">People keep the judgement and the accountability.</p>
                        <ul>
                            <li>Professional judgement</li>
                            <li>Review of every automated output</li>
                            <li>Sign-off before delivery</li>
                            <li>Accountability to you</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- INSIGHTS -->
        <section class="band sec" id="insights">
            <div class="wrap ins">
                <div>
                    <h2>Perspectives on building finance delivery capacity.</h2>
                    <p class="lead" style="margin-top:20px">Practical thinking for practice leaders and finance teams
                        weighing how to scale.</p>
                </div>
                <ul>
                    <li><a href="manage-audit-peak-season-workloads.php"
                            style="display:flex;justify-content:space-between;gap:20px;width:100%">How audit firms can
                            manage peak-season workloads<span>Read</span></a></li>
                    <li><a href="outsourcing-vs-offshoring.php"
                            style="display:flex;justify-content:space-between;gap:20px;width:100%">Outsourcing vs
                            offshoring: what’s the difference?<span>Read</span></a></li>
                    <li><a href="what-makes-an-audit-support-partnership-work.php"
                            style="display:flex;justify-content:space-between;gap:20px;width:100%">What makes an audit
                            support partnership work?<span>Read</span></a></li>
                </ul>
            </div>
        </section>

        <!-- FAQ -->
        <section class="sec" id="faq">
            <div class="wrap faq">
                <div>
                    <h2>Questions we’re usually asked first.</h2>
                    <p class="lead" style="margin-top:20px">Don’t see yours? <a class="tlink" href="faq.php">See all
                            questions</a> or send it with your proposal request.</p>
                </div>
                <div class="faq-list">
                    <details>
                        <summary>Do you replace our auditor, adviser or finance leader?<svg class="ico">
                                <use href="#i-chev" />
                            </svg></summary>
                        <p>No. We work under your methodology and review structure. Professional and statutory
                            responsibility stays with you and your qualified professionals.</p>
                    </details>
                    <details>
                        <summary>Can we start small?<svg class="ico">
                                <use href="#i-chev" />
                            </svg></summary>
                        <p>Yes. Most engagements begin with a defined pilot on a single process or limited scope, which
                            reduces risk on both sides.</p>
                    </details>
                    <details>
                        <summary>Will you work in our systems?<svg class="ico">
                                <use href="#i-chev" />
                            </svg></summary>
                        <p>Wherever practical. We work inside client-defined systems and templates, and confirm the specific
                            platforms when we scope the engagement.</p>
                    </details>
                    <details>
                        <summary>How do you protect confidential data?<svg class="ico">
                                <use href="#i-chev" />
                            </svg></summary>
                        <p>Access is role-based and scoped to each engagement, with multi-factor authentication and
                            client-specific confidentiality protocols.</p>
                    </details>
                    <details>
                        <summary>Do you hold security certifications?<svg class="ico">
                                <use href="#i-chev" />
                            </svg></summary>
                        <p>None are published at present. We will publish certifications only once they have been
                            independently verified.</p>
                    </details>
                    <details>
                        <summary>Do you use AI?<svg class="ico">
                                <use href="#i-chev" />
                            </svg></summary>
                        <p>For repetitive work such as document processing and reconciliation matching, always inside
                            client-defined systems and always reviewed by a qualified person before delivery.</p>
                    </details>
                    <details>
                        <summary>What does Employer of Record cover?<svg class="ico">
                                <use href="#i-chev" />
                            </svg></summary>
                        <p>Compliant employment in Nepal on your behalf: contracts, payroll, benefits, statutory compliance,
                            onboarding and offboarding. You direct the day-to-day work.</p>
                    </details>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="final sec" id="start">
            <svg class="mk" aria-hidden="true" viewBox="0 0 321 295"
                style="--mk-frame:#fff;--mk-green:#fff;--mk-blue:#fff">
                <use href="#mark" />
            </svg>
            <div class="wrap in">
                <div>
                    <h2>Ready to extend your team?</h2>
                    <p class="lead">Whether you need additional capacity for a peak season, a dedicated team or a
                        long-term finance delivery partner, let’s design the right model around your business.</p>
                    <ul class="assure">
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>A member of the Nepreva team replies within one business day</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>We scope a realistic team, timeline and model before your first call</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>You can start with a pilot</li>
                    </ul>
                </div>
                <div class="formcard">
                    <h3>Build your delivery team</h3>
                    <p class="small">Tell us a little about your business and current finance function.</p>
                    <form id="pform" novalidate>
                        <div class="fg">
                            <div><label for="f-name">Full name</label><input id="f-name" autocomplete="name"
                                    required></div>
                            <div><label for="f-email">Work email</label><input id="f-email" type="email"
                                    autocomplete="email" required></div>
                            <div><label for="f-co">Company</label><input id="f-co" autocomplete="organization">
                            </div>
                            <div><label for="f-cty">Country</label><input id="f-cty" autocomplete="country-name">
                            </div>
                            <div><label for="f-svc">Service required</label>
                                <select id="f-svc">
                                    <option>Not sure yet</option>
                                    <option>Accounting &amp; Bookkeeping</option>
                                    <option>Financial Reporting</option>
                                    <option>Audit &amp; Assurance Support</option>
                                    <option>Tax &amp; Compliance Support</option>
                                    <option>Payroll</option>
                                    <option>Finance Operations</option>
                                    <option>FP&amp;A &amp; Financial Modelling</option>
                                    <option>Virtual CFO</option>
                                    <option>Employer of Record (EOR)</option>
                                </select>
                            </div>
                            <div><label for="f-mod">Preferred engagement model</label>
                                <select id="f-mod">
                                    <option>Not sure yet</option>
                                    <option>Dedicated Team</option>
                                    <option>Managed Service</option>
                                    <option>Project Support</option>
                                    <option>Peak-Season Capacity</option>
                                    <option>Hybrid Delivery</option>
                                </select>
                            </div>
                            <div class="full"><label for="f-msg">What are you trying to solve?</label>
                                <textarea id="f-msg"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-lime" type="submit">Request a proposal</button>
                        <p class="fmsg" id="fmsg" role="status"></p>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
