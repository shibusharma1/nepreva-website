@extends('themes.default.common.master')
@section('post_title', 'Success')
@section('content')
<main id="main">
  <section class="phero">
    <div class="wrap" style="max-width:880px;margin:0 auto;text-align:center;padding-block:clamp(24px, 3.5vw, 48px)">
      
      <!-- Success Checkmark Badge -->
      <div>
        <div style="width:76px;height:76px;border-radius:50%;background:var(--lime-50);border:2px solid var(--lime);display:inline-flex;align-items:center;justify-content:center;margin-bottom:22px;box-shadow:0 0 0 6px rgba(131,189,66,.18)">
          <svg class="ico" style="width:38px;height:38px;stroke-width:2.4;color:var(--lime-ink);margin:0">
            <use href="#i-check"/>
          </svg>
        </div>
      </div>
      
      <!-- Status Badge -->
      <div class="status" style="margin-bottom:22px">
        <i></i><span>Inquiry Received &amp; Confirmed</span>
      </div>
      <!-- Headline -->
      <h1 style="max-width:none;margin:0 auto 14px">Inquiry Sent Successfully</h1>

      <!-- Personal Greeting if name is supplied -->
      <?php if (!empty($name)): ?>
        <p class="lead" style="margin:0 auto 12px;font-size:1.25rem;font-weight:600;color:var(--ink)">
          Dear <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>,
        </p>
      <?php endif; ?>

      <p class="lead" style="margin:0 auto;max-width:56ch;color:var(--text)">
        Thank you for contacting Nepreva Global Solutions. Your inquiry has been securely delivered to our delivery leadership in Kathmandu. We review every brief thoroughly and reply within one business day.
      </p>

      <!-- Custom Brief or Message if provided -->
      <?php if (!empty($custom_msg)): ?>
        <div class="callout" style="max-width:640px;margin:28px auto 0;text-align:left">
          <svg class="ico"><use href="#i-doc"/></svg>
          <div>
            <b>Your Submitted Notes:</b><br>
            <span style="color:var(--text);white-space:pre-line;"><?php echo htmlspecialchars($custom_msg, ENT_QUOTES, 'UTF-8'); ?></span>
          </div>
        </div>
      <?php endif; ?>

      <!-- Submission Summary Box (Shown when details are supplied) -->
      <?php if (!empty($email) || !empty($company) || !empty($service) || !empty($model)): ?>
        <div style="margin-top:32px;text-align:left">
          <div class="formcard flat" style="padding:24px 28px">
            <h3 style="font-size:1.2rem;margin-bottom:14px;color:var(--ink)">Inquiry Details</h3>
            <dl class="cinfo" style="margin-top:0">
              <?php if (!empty($name)): ?>
                <div>
                  <dt>Contact Person</dt>
                  <dd><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></dd>
                </div>
              <?php endif; ?>
              <?php if (!empty($email)): ?>
                <div>
                  <dt>Work Email</dt>
                  <dd><a href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></a></dd>
                </div>
              <?php endif; ?>
              <?php if (!empty($company)): ?>
                <div>
                  <dt>Company / Firm</dt>
                  <dd><?php echo htmlspecialchars($company, ENT_QUOTES, 'UTF-8'); ?></dd>
                </div>
              <?php endif; ?>
              <?php if (!empty($service)): ?>
                <div>
                  <dt>Requested Service</dt>
                  <dd><?php echo htmlspecialchars($service, ENT_QUOTES, 'UTF-8'); ?></dd>
                </div>
              <?php endif; ?>
              <?php if (!empty($model)): ?>
                <div>
                  <dt>Engagement Model</dt>
                  <dd><?php echo htmlspecialchars($model, ENT_QUOTES, 'UTF-8'); ?></dd>
                </div>
              <?php endif; ?>
              <div>
                <dt>Guaranteed Response</dt>
                <dd>Within one business day &bull; Nepal Standard Time (UTC+5:45)</dd>
              </div>
            </dl>
          </div>
        </div>
      <?php endif; ?>

      <!-- What happens next Sequence -->
      {{-- <div style="margin-top:48px;text-align:left">
        <div style="text-align:center;margin-bottom:24px">
          <h2 style="font-size:1.4rem;letter-spacing:-.015em;margin:0 0 6px;color:var(--ink)">What happens next</h2>
          <p class="small" style="color:var(--muted);margin:0">How Nepreva moves from initial inquiry to seamless operational delivery.</p>
        </div>

        <div class="run">
          <div>
            <svg class="ico"><use href="#i-eye"/></svg>
            <h3>1. Partner Review</h3>
            <p>A Chartered Accountant partner reviews your software ecosystem, delivery volume, and required capabilities.</p>
          </div>
          <div>
            <svg class="ico"><use href="#i-send"/></svg>
            <h3>2. Direct Response</h3>
            <p>We follow up within one business day with team profiles, governance structure, and transparent commercial models.</p>
          </div>
          <div>
            <svg class="ico"><use href="#i-layers"/></svg>
            <h3>3. Delivery Pilot</h3>
            <p>We sign mutual NDAs, configure secure access, and begin with a defined, low-risk pilot deliverable.</p>
          </div>
        </div>
      </div> --}}

      <!-- Signature & Direct Contact -->
      <div class="callout" style="max-width:720px;margin:36px auto 0;text-align:left">
        <svg class="ico"><use href="#i-shield"/></svg>
        <div>
          <b>Best regards,</b><br>
          <span style="color:var(--ink);font-weight:600">The Nepreva Delivery Team</span><br>
          <span class="small" style="color:var(--muted)">Supported by NBSM, an independent member of Moore Global &bull; Narayanchaur, Naxal, Kathmandu, Nepal</span>
          <div style="margin-top:10px">
            <span class="small">Need to share supplementary documents or have an urgent query? Write directly to <a class="tlink" href="mailto:hello@nepreva.com">hello@nepreva.com</a>.</span>
          </div>
        </div>
      </div>

      <!-- Action CTAs -->
      <div class="ctas" style="justify-content:center;margin-top:36px">
        <a class="btn btn-primary" href="index.php">Return to Homepage</a>
        <a class="btn btn-ghost" href="services.php">Explore Services</a>
        <a class="btn btn-ghost" href="how-we-work.php">How We Work</a>
      </div>

    </div>
  </section>
</main>
@endsection
