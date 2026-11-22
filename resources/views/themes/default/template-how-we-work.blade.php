@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="how-we-work" data-title="How We Work | Nepreva">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>How we work.</h1>
                        <p class="lead">A simple, staged way to start: understand what you need, prove it on a small scope,
                            then build the team that fits. Nothing starts until scope, controls and service levels are
                            agreed.</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a><a
                                class="btn btn-ghost" href="faq.php">Read the FAQ</a></div>
                    </div>
                    <aside class="glance">
                        <h2>What to expect</h2>
                        <dl>
                            <dt>First step</dt>
                            <dd>A conversation about your workflow</dd>
                            <dt>Then</dt>
                            <dd>A pilot on a defined scope</dd>
                            <dt>Always</dt>
                            <dd class=lime>Named partner and team lead</dd>
                        </dl>
                    </aside>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>From first conversation to a working team</h2><span></span>
                    </div>
                    <ol class="seq">
                        <li>
                            <h3>Understand</h3>
                            <p>We learn your workflow, systems, pain points and where capacity is short.</p>
                        </li>
                        <li>
                            <h3>Scope</h3>
                            <p>We define service lines, volumes, team size, technology environment, controls and service
                                levels.</p>
                        </li>
                        <li>
                            <h3>Pilot</h3>
                            <p>We start with a defined process or limited scope, so both sides can test the fit with low
                                risk.</p>
                        </li>
                        <li>
                            <h3>Build</h3>
                            <p>We assemble and train the team against your standards, set up access and document procedures.
                            </p>
                        </li>
                        <li>
                            <h3>Execute</h3>
                            <p>Delivery begins against agreed timelines, with your review checkpoints built into the
                                workflow.</p>
                        </li>
                        <li>
                            <h3>Review and improve</h3>
                            <p>We report against agreed measures, collect feedback and refine the engagement.</p>
                        </li>
                    </ol>
                </div>
            </section>
            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>Choose the capacity you need</h2>
                        <p class="lead">Five engagement models. Many clients combine them as the relationship grows.</p>
                    </div>
                    <div class="vgrid">
                        <div>
                            <h3>Dedicated team</h3>
                            <p>A named team working exclusively on your engagements. Best for steady, ongoing volume.</p>
                        </div>
                        <div>
                            <h3>Managed service</h3>
                            <p>An outcome-based service delivered against agreed service levels, with Nepreva managing the
                                team.</p>
                        </div>
                        <div>
                            <h3>Project support</h3>
                            <p>Defined-scope support for a specific initiative, such as a clean-up, a model or a one-off
                                review.</p>
                        </div>
                        <div>
                            <h3>Peak-season capacity</h3>
                            <p>Additional hands for filing seasons and deadlines, scaled up and back down.</p>
                        </div>
                        <div>
                            <h3>Hybrid delivery</h3>
                            <p>A dedicated core team with flexible capacity layered on top as volume changes.</p>
                        </div>
                        <div>
                            <h3>Employer of Record</h3>
                            <p>A dedicated team in Nepal employed through Nepreva, with you directing the work.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <div class="two">
                        <div>
                            <h3>What we ask of you</h3>
                            <ul>
                                <li><svg class="ico">
                                        <use href="#i-check" />
                                    </svg>A named contact on your side</li>
                                <li><svg class="ico">
                                        <use href="#i-check" />
                                    </svg>Access to your systems and templates</li>
                                <li><svg class="ico">
                                        <use href="#i-check" />
                                    </svg>Your methodology and a worked example</li>
                                <li><svg class="ico">
                                        <use href="#i-check" />
                                    </svg>Agreed review windows</li>
                                <li><svg class="ico">
                                        <use href="#i-check" />
                                    </svg>Honest, early feedback</li>
                            </ul>
                        </div>
                        <div class="dk">
                            <h3>What you can expect from us</h3>
                            <ul>
                                <li><svg class="ico">
                                        <use href="#i-check" />
                                    </svg>A named partner and team lead</li>
                                <li><svg class="ico">
                                        <use href="#i-check" />
                                    </svg>Scope, turnaround and escalation path agreed upfront</li>
                                <li><svg class="ico">
                                        <use href="#i-check" />
                                    </svg>Maker-checker on every deliverable</li>
                                <li><svg class="ico">
                                        <use href="#i-check" />
                                    </svg>Regular reporting and review meetings</li>
                                <li><svg class="ico">
                                        <use href="#i-check" />
                                    </svg>Early warning when something changes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>How the relationship typically grows</h2><span></span>
                    </div>
                    <div class="grow" style="background:var(--cobalt-50)">
                        <div class="steps" style="min-height:260px">
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
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
