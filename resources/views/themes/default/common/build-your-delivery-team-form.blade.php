<div class="formcard flat">
    <h3>{{ $build_your_delivery_team_data->meta_keyword }}</h3>
    <p class="small">{{ $build_your_delivery_team_data->meta_description }}</p>
    @php
        $isDeliveryTeamPage = request()->is('page/build-your-delivery-team.html')
    @endphp
    <form action="{{ route('build_your_delivery_team') }}" method="POST" class="pform" novalidate>
        @csrf
        <div class="fg">
            <div>
                <label>Full name
                    <input name="name" autocomplete="name">
                </label>
            </div>
            <div>
                <label>Work email
                    <input name="email" type="email" autocomplete="email">
                </label>
            </div>
            <div>
                <label>Company
                    <input name="company" autocomplete="organization">
                </label>
            </div>
            <div>
                <label>Country
                    <input name="country" autocomplete="country-name">
                </label>
            </div>
            @if($isDeliveryTeamPage)
                <div>
                    <label>Your role
                        <input name="role" autocomplete="organization-title">
                    </label>
                </div>
            @endif
            <div>
                <label>Service required
                    <select name="svc">
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
                </label>
            </div>
            @if($isDeliveryTeamPage)
                <div>
                    <label>Approximate volume <span class="opt">(optional)</span>
                        <input name="volume" placeholder="For example, clients or transactions per month">
                    </label>
                </div>
                <div>
                    <label>Current team size <span class="opt">(optional)</span>
                        <input name="cur">
                    </label>
                </div>
                <div>
                    <label>Desired team size <span class="opt">(optional)</span>
                        <input name="des">
                    </label>
                </div>
                <div>
                    <label>Systems and software in use <span class="opt">(optional)</span>
                        <input name="systems">
                    </label>
                </div>
                <div>
                    <label>Timeline <span class="opt">(optional)</span>
                        <input name="timeline" placeholder="When would you like to start?">
                    </label>
                </div>
            @endif
            <div>
                <label>Preferred engagement model
                    <select name="model">
                        <option>Not sure yet</option>
                        <option>Dedicated Team</option>
                        <option>Managed Service</option>
                        <option>Project Support</option>
                        <option>Peak-Season Capacity</option>
                        <option>Hybrid Delivery</option>
                    </select>
                </label>
            </div>
            <div class="full">
                <label>
                    @if($isDeliveryTeamPage)
                        Comments
                    @else
                        What are you trying to solve?
                    @endif
                    <span class="opt">(optional)</span>
                    <textarea name="msg"></textarea>
                </label>
            </div>
        </div>
        <button class="btn btn-lime" type="submit">Request a proposal</button>
        <p class="fmsg" role="status"></p>
    </form>
</div>
