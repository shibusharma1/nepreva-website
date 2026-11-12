@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <main id="main">
        <div class="pg on" data-page="build-your-delivery-team" data-title="Build Your Delivery Team | Nepreva"
            data-noform="1">
            <section class="phero">
                <div class="wrap pgrid">
                    <div>
                        <h1 style="max-width:14ch">Build your delivery team.</h1>
                        <p class="lead">Start with the details, and we’ll shape the team around them. This isn’t a generic
                            enquiry form. The information lets Nepreva scope a realistic team, timeline and engagement model
                            before your first call.</p>
                        <h2 style="font-size:1.4rem;margin:34px 0 4px">What happens next</h2>
                        <ol class="seq c2">
                            <li>
                                <h3>Discover</h3>
                                <p>Understand your workflow, pain points and capacity gaps</p>
                            </li>
                            <li>
                                <h3>Scope</h3>
                                <p>Define services, volume, team, systems, controls and service levels</p>
                            </li>
                            <li>
                                <h3>Pilot</h3>
                                <p>Begin with a defined process or limited scope to reduce risk</p>
                            </li>
                            <li>
                                <h3>Build</h3>
                                <p>Assemble the team, configure access and document procedures</p>
                            </li>
                        </ol>
                    </div>
                    <div class="formcard flat">
                        <h3>Tell us what you need</h3>
                        <p class="small">Share as much as you can. More detail means a more realistic scope.</p>
                        <form class="pform" novalidate>
                            <div class="fg">
                                <div><label>Full name<input name="name" autocomplete="name"></label></div>
                                <div><label>Work email<input name="email" type="email" autocomplete="email"></label>
                                </div>
                                <div><label>Company<input name="company" autocomplete="organization"></label></div>
                                <div><label>Country<input name="country" autocomplete="country-name"></label></div>
                                <div><label>Your role<input name="role" autocomplete="organization-title"></label></div>
                                <div><label>Service required<select name="svc">
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
                                        </select></label></div>
                                <div><label>Approximate volume <span class="opt">(optional)</span><input name="volume"
                                            placeholder="For example, clients or transactions per month"></label></div>
                                <div><label>Current team size <span class="opt">(optional)</span><input
                                            name="cur"></label></div>
                                <div><label>Desired team size <span class="opt">(optional)</span><input
                                            name="des"></label></div>
                                <div><label>Systems and software in use <span class="opt">(optional)</span><input
                                            name="systems"></label></div>
                                <div><label>Timeline <span class="opt">(optional)</span><input name="timeline"
                                            placeholder="When would you like to start?"></label></div>
                                <div><label>Preferred engagement model<select name="model">
                                            <option>Not sure yet</option>
                                            <option>Dedicated Team</option>
                                            <option>Managed Service</option>
                                            <option>Project Support</option>
                                            <option>Peak-Season Capacity</option>
                                            <option>Hybrid Delivery</option>
                                        </select></label></div>
                                <div class=full><label>Comments <span class="opt">(optional)</span>
                                        <textarea name="msg"></textarea>
                                    </label></div>
                            </div><button class="btn btn-lime" type="submit">Request a proposal</button>
                            <p class="fmsg" role="status"></p>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
