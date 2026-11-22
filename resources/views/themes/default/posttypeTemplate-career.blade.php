@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <main id="main">
        <div class="pg on" data-page="careers" data-title="Careers at Nepreva | Build a Global Accounting Career">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>Build your career on international engagements.</h1>
                        <p class="lead">Nepreva is growing its Chartered Accountant-led delivery teams in Kathmandu. You’ll
                            work on live international engagements under partner governance, with structured learning and
                            clear progression.</p>
                        <div class="ctas"><a class="btn btn-primary" href="#roles">See open roles</a><a
                                class="btn btn-ghost" href="mailto:hello@nepreva.com?subject=Open%20application">Send an
                                open application</a></div>
                    </div>
                    <aside class="glance">
                        <h2>Working at Nepreva</h2>
                        <dl>
                            <dt>Based in</dt>
                            <dd>Kathmandu, Nepal</dd>
                            <dt>Teams</dt>
                            <dd>Chartered Accountant-led</dd>
                            <dt>Apply</dt>
                            <dd class=lime>hello@nepreva.com</dd>
                        </dl>
                    </aside>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>Why work with us</h2><span></span>
                    </div>
                    <div class="vgrid">
                        <div>
                            <h3>International exposure</h3>
                            <p>Work on live engagements for clients in the UK, Canada and Mauritius, under partner
                                governance.</p>
                        </div>
                        <div>
                            <h3>Structured learning</h3>
                            <p>Learn from Chartered Accountants through review, feedback and documented procedures.</p>
                        </div>
                        <div>
                            <h3>Technical breadth</h3>
                            <p>Experience across accounting, audit support, reporting, payroll, tax preparation and
                                FP&amp;A.</p>
                        </div>
                        <div>
                            <h3>Modern tools</h3>
                            <p>Work with cloud accounting platforms, collaboration tools and human-reviewed automation.</p>
                        </div>
                        <div>
                            <h3>Clear progression</h3>
                            <p>Move from preparer to reviewer to team lead as your skills and responsibility grow.</p>
                        </div>
                        <div>
                            <h3>A professional environment</h3>
                            <p>A collaborative team, backed by the professional heritage of NBSM.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>Who we hire</h2>
                        <p class="lead">We hire across levels, from trainees to experienced reviewers.</p>
                    </div>
                    <ul class="dl">
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Chartered Accountants</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>ACCA and CPA professionals</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Audit support professionals</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Accountants and bookkeepers</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Financial analysts</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Tax and compliance professionals</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Payroll professionals</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Trainees and interns</li>
                    </ul>
                </div>
            </section>
            <section class="band sec" id="roles">
                <div class="wrap">
                    <div class="head-split">
                        <h2>Open roles</h2><span></span>
                    </div>
                    <article class="role">
                        <div class="tags"><span>Full-time</span><span>IT support &amp; systems</span><span>1+ years’
                                experience</span></div>
                        <h3>IT Systems &amp; Support Administrator</h3>
                        <p>Supporting a British company. Provide first-line support across software, servers, networks, VPN,
                            email and business systems; manage user access and starter and leaver requirements with HR;
                            maintain core platforms, domains, licences and IT assets; prepare operational reports; create
                            procedures, manuals and training materials; and work with external developers on system updates.
                        </p>
                        <p><b>You bring:</b> a Diploma or Bachelor’s in IT, Computer Science or Information Systems; 1+
                            years in IT support or system administration; Microsoft 365, Windows, email, VPN and networking;
                            strong Excel and reporting; good communication and training skills. ERP or business management
                            systems experience is an advantage.</p>
                        <p style="margin-bottom:0"><b>To apply:</b> send your CV to hello@nepreva.com with the subject “IT
                            Systems &amp; Support Administrator”.</p>
                    </article>
                    <article class="role" style="margin-top:22px">
                        <div class="tags"><span>Open applications</span></div>
                        <h3>Don’t see your role?</h3>
                        <p style="margin-bottom:0">We are always interested in Chartered Accountants, ACCA and CPA
                            professionals, accountants, audit support professionals, financial analysts, tax and payroll
                            professionals, trainees and interns. Send your CV and a short note about the work you want to do
                            to hello@nepreva.com.</p>
                    </article>
                </div>
            </section>
            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>What to expect when you apply</h2>
                        <p class="lead">Our process is simple. Steps may vary by role.</p>
                    </div>
                    <ol class="seq c4">
                        <li>
                            <h3>Apply</h3>
                            <p>Send your CV and a short note by email.</p>
                        </li>
                        <li>
                            <h3>Conversation</h3>
                            <p>A first call to understand your experience and goals.</p>
                        </li>
                        <li>
                            <h3>Assessment</h3>
                            <p>A practical exercise or technical discussion relevant to the role.</p>
                        </li>
                        <li>
                            <h3>Offer</h3>
                            <p>A conversation about the role, team and next steps.</p>
                        </li>
                    </ol>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
