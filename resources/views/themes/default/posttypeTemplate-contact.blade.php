@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="contact" data-title="{{ $data->meta_keyword }}" data-noform="1">
            <section class="phero">
                <div class="wrap pgrid">
                    <div>
                        <h1 style="max-width:14ch">{{ $data->caption }}</h1>
                        <p class="lead">{!! $data->content !!}</p>
                        <dl class="cinfo">
                            <div>
                                <dt>Email</dt>
                                <dd><a href="mailto:{{ $setting->email_primary }}">{{ $setting->email_primary }}</a></dd>
                            </div>
                            <div>
                                <dt>Office</dt>
                                <dd>{{ $setting->address }}</dd>
                            </div>
                            <div>
                                <dt>Time zone</dt>
                                <dd>{{ $setting->address2 }}</dd>
                            </div>
                            <div>
                                <dt>Response</dt>
                                <dd>{{ $setting->google_map }}</dd>
                            </div>
                        </dl>
                        <p class="small" style="margin-top:22px">Want to share more detail up front? Use the 
                            <a class="tlink" href="{{ url('page/build-your-delivery-team.html') }}">Build Your Delivery Team</a> form.</p>
                    </div>
                    <div class="formcard flat">
                        <h3>Request a proposal</h3>
                        <p class="small">We reply within one business day.</p>
                        <form action="{{ route('sendmail_contact') }}" method="POST" class="pform" novalidate>
                            @csrf
                            <div class="fg">
                                <div><labe for="full_name">Full name<input name="full_name" autocomplete="name"></labe></div>
                                <div><label for="email">Work email<input name="email" type="email" autocomplete="email"></label>
                                </div>
                                <div><label for="company">Company<input name="company" autocomplete="organization"></label></div>
                                <div><label for="country">Country<input name="country" autocomplete="country-name"></label></div>
                                <div><label for="svc">Service required<select name="svc">
                                            <option value = "0">Not sure yet</option>
                                            <option value = "1">Accounting &amp; Bookkeeping</option>
                                            <option value = "2">Financial Reporting</option>
                                            <option value = "3">Audit &amp; Assurance Support</option>
                                            <option value = "4">Tax &amp; Compliance Support</option>
                                            <option value = "5">Payroll</option>
                                            <option value = "6">Finance Operations</option>
                                            <option value = "7">FP&amp;A &amp; Financial Modelling</option>
                                            <option value = "8">Virtual CFO</option>
                                            <option value = "9">Employer of Record (EOR)</option>
                                        </select></label></div>
                                <div><label>Preferred engagement model<select name="model">
                                            <option value = "0">Not sure yet</option>
                                            <option value = "1">Dedicated Team</option>
                                            <option value = "2">Managed Service</option>
                                            <option value = "3">Project Support</option>
                                            <option value = "4">Peak-Season Capacity</option>
                                            <option value = "5">Hybrid Delivery</option>
                                        </select></label></div>
                                <div class=full><label>What are you trying to solve?
                                        <textarea name="message"></textarea>
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
