<footer class="foot">
    <div class="wrap">
        <div class="foot-g">
            <div><a class="logo" href="index.php"><img src="{{ asset('themes-assets/img/logo-white.webp') }}"
                        alt="Nepreva" width="640" height="140"></a>
                <p class="about">{{ $setting->welcome_title }}</p>
                <p class="supp">{{ $setting->welcome_text }}</p>
            </div>
            <div>
                <h4>Solutions</h4><a href="for-accounting-audit-firms.php">For accounting &amp; audit firms</a><a
                    href="for-businesses-finance-teams.php">For businesses &amp; finance teams</a><a
                    href="how-we-work.php">How we work</a>
            </div>
            <div>
                <h4>Services</h4><a href="accounting-bookkeeping.php">Accounting &amp; Bookkeeping</a><a
                    href="financial-reporting.php">Financial Reporting</a><a href="audit-assurance-support.php">Audit
                    &amp; Assurance Support</a><a href="tax-compliance-support.php">Tax &amp; Compliance Support</a><a
                    href="payroll.php">Payroll</a><a href="finance-operations.php">Finance Operations</a><a
                    href="fpa-financial-modelling.php">FP&amp;A &amp; Financial Modelling</a><a
                    href="virtual-cfo.php">Virtual CFO</a><a href="employer-of-record.php">Employer of Record (EOR)</a>
            </div>
            <div>
                <h4>Company</h4><a href="why-nepreva.php">Why Nepreva</a><a href="about.php">About</a><a
                    href="insights.php">Insights</a><a href="careers.php">Careers</a><a href="faq.php">FAQ</a><a
                    href="contact.php">Contact</a>
                <p class="small" style="color:#A8B3D3;margin-top:14px">hello@nepreva.com<br>Kathmandu, Nepal</p>
            </div>
        </div>
        <div class="foot-b"><span>&copy; {{ date('Y') }} {{ $setting->copyright_text }}</span><span><a
                    href="{{ url('page/privacy-policy.html') }}" style="display:inline">Privacy Policy</a> &nbsp;&nbsp; <a
                    href="{{ url('page/terms-and-conditions.html') }}" style="display:inline">Terms of Use</a></span></div>
    </div>
</footer>

<?php if (isset($show_mcta) && $show_mcta): ?>
<div class="mcta" id="mcta"><a class="btn btn-primary" href="#start">Build your delivery team</a></div>
<?php endif; ?>

<script src="{{ asset('themes-assets/js/scripts.js') }}"></script>
<!-- Success Toast -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://www.google.com/recaptcha/api.js?render={{ env('SITE_KEY') }}"></script>
<script>
    grecaptcha.ready(function() {
        function executeRecaptcha() {
            grecaptcha.execute('<?php echo env('SITE_KEY'); ?>', {
                action: 'homepage'
            }).then(function(token) {
                document.getElementById('g_recaptcha_response').value = token;
            });
        }
        // Initial execution of reCAPTCHA
        executeRecaptcha();
        // Refresh the reCAPTCHA token every 100 seconds (less than 2 minutes)
        setInterval(executeRecaptcha, 900000);
    });
</script>
@stack('scripts')

@if (session('success'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: '#ffffff',
            color: '#1f2937',
            iconColor: '#11497B',
        });
    </script>
@endif

@if (session('message'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'info',
            title: "{{ session('message') }}",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: '#ffffff',
            color: '#1f2937',
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 3500,
            timerProgressBar: true,
            background: '#ffffff',
            color: '#1f2937',
        });
    </script>
@endif

@if ($errors->any())
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'warning',
            title: 'Please fix the highlighted fields and try again.',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: '#ffffff',
            color: '#1f2937',
        });
    </script>
@endif

</body>

</html>
