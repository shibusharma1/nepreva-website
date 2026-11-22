@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="faq" data-title="FAQ | Nepreva">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>Questions we’re usually asked first.</h1>
                        <p class="lead">Straight answers on scope, quality, security and how an engagement works. If yours
                            isn’t here, send it with your proposal request.</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a><a
                                class="btn btn-ghost" href="contact.php">Contact us</a></div>
                    </div>
                    <aside class="glance">
                        <h2>Quick answers</h2>
                        <dl>
                            <dt>Scope</dt>
                            <dd>Support, under your review</dd>
                            <dt>Quality</dt>
                            <dd>Maker-checker on every deliverable</dd>
                            <dt>Start</dt>
                            <dd class=lime>With a pilot</dd>
                        </dl>
                    </aside>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <div style="max-width:860px;margin-inline:auto">
                        <div style="margin-bottom:46px">
                            <h2 style="font-size:1.6rem;margin-bottom:18px">About Nepreva</h2>
                            <div class="faq-list">
                                <details>
                                    <summary>What is Nepreva?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Nepreva Global Solutions is an independent, Chartered Accountant-led global delivery
                                        company based in Kathmandu, Nepal. It provides accounting, audit support and finance
                                        delivery for international firms and businesses.</p>
                                </details>
                                <details>
                                    <summary>How is Nepreva connected to NBSM?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Nepreva is supported by NBSM, a Nepal-based Chartered Accountancy firm and
                                        independent member of Moore Global. That foundation brings partner accountability,
                                        documented quality standards and international experience. Nepreva operates as its
                                        own company.</p>
                                </details>
                                <details>
                                    <summary>Which markets do you serve?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>We currently deliver live work in the United Kingdom, Canada and Mauritius.
                                        Australia, the Middle East and offshore financial centres are areas of business
                                        development focus.</p>
                                </details>
                                <details>
                                    <summary>Who do you work with?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Accounting and audit firms, and businesses and finance teams, that want additional
                                        capacity without building everything in-house.</p>
                                </details>
                            </div>
                        </div>
                        <div style="margin-bottom:46px">
                            <h2 style="font-size:1.6rem;margin-bottom:18px">Services and scope</h2>
                            <div class="faq-list">
                                <details>
                                    <summary>Do you replace our auditor, adviser or finance leader?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>No. We work under your methodology and review structure. Professional and statutory
                                        responsibility stays with you and your qualified professionals.</p>
                                </details>
                                <details>
                                    <summary>What do you mean by audit support?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Support activities carried out under the client firm’s methodology and review, such
                                        as workpapers, lead schedules, testing support, documentation and review-note
                                        resolution. Nepreva does not perform the audit or sign audit opinions.</p>
                                </details>
                                <details>
                                    <summary>Do you give tax advice?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>No. We provide preparation and processing support. Tax advice and statutory
                                        responsibility remain with the client’s qualified professionals.</p>
                                </details>
                                <details>
                                    <summary>Can you provide a dedicated team?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Yes. Engagements can be structured as a named team that works exclusively on your
                                        work.</p>
                                </details>
                                <details>
                                    <summary>Can you scale for busy season?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Yes. Capacity can be added for peak periods and reduced afterwards, without a
                                        recruitment cycle each time.</p>
                                </details>
                            </div>
                        </div>
                        <div style="margin-bottom:46px">
                            <h2 style="font-size:1.6rem;margin-bottom:18px">Quality, security and technology</h2>
                            <div class="faq-list">
                                <details>
                                    <summary>How do you control quality?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Every deliverable passes through preparer self-check, independent maker-checker
                                        review and technical or partner-level sign-off before it reaches you. Review notes
                                        are logged and tracked until they are closed.</p>
                                </details>
                                <details>
                                    <summary>How do you protect confidential information?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Access is role-based and scoped to each engagement, with multi-factor authentication
                                        and client-specific confidentiality protocols.</p>
                                </details>
                                <details>
                                    <summary>Do you hold security certifications?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>None are published at present. We will publish certifications only once they have
                                        been independently verified.</p>
                                </details>
                                <details>
                                    <summary>Do you use AI?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>For repetitive work such as document processing and reconciliation matching, always
                                        inside client-defined systems and always reviewed by a qualified person before
                                        delivery.</p>
                                </details>
                                <details>
                                    <summary>Can you work in our software?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Wherever practical. We work inside client-defined systems and templates, and confirm
                                        the specific platforms when we scope the engagement.</p>
                                </details>
                            </div>
                        </div>
                        <div style="margin-bottom:46px">
                            <h2 style="font-size:1.6rem;margin-bottom:18px">Working together</h2>
                            <div class="faq-list">
                                <details>
                                    <summary>Can we start with a small project?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Yes. Most engagements begin with a pilot on a single process or a limited scope.</p>
                                </details>
                                <details>
                                    <summary>How long does it take to start?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>It depends on scope and complexity. We agree a realistic timeline during scoping,
                                        before anything begins.</p>
                                </details>
                                <details>
                                    <summary>How is pricing structured?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Pricing depends on the model (dedicated team, managed service, project, peak-season
                                        or hybrid) and on scope. We provide a clear proposal after scoping, with costs shown
                                        transparently.</p>
                                </details>
                                <details>
                                    <summary>How do we request a proposal?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Use the Build Your Delivery Team page to share your requirements, or the Contact page
                                        for a general enquiry. A member of the Nepreva team replies within one business day.
                                    </p>
                                </details>
                            </div>
                        </div>
                        <div style="margin-bottom:46px">
                            <h2 style="font-size:1.6rem;margin-bottom:18px">Employer of Record</h2>
                            <div class="faq-list">
                                <details>
                                    <summary>What does Employer of Record cover?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Compliant employment in Nepal on your behalf: contracts, payroll, benefits, statutory
                                        compliance, onboarding and offboarding. You direct the day-to-day work.</p>
                                </details>
                                <details>
                                    <summary>Do I still manage the person day to day?<svg class="ico">
                                            <use href="#i-chev" />
                                        </svg></summary>
                                    <p>Yes. You decide the work, the objectives and the reporting line. We carry the
                                        employment administration.</p>
                                </details>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
