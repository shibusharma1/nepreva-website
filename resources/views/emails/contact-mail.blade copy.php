<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no" />
    <meta name="color-scheme" content="light" />
    <meta name="supported-color-schemes" content="light" />
    <title>{{ $setting->site_name ?? 'Nepreva Global Solutions' }} - New Proposal Request</title>
    <style type="text/css">
        /* Client Resets */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            border-collapse: separate !important;
        }

        img {
            -ms-interpolation-mode: bicubic;
            border: 0;
            outline: none;
            text-decoration: none;
            display: block;
        }

        body {
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
            min-width: 100%;
            background-color: #F4F6FB;
            -webkit-font-smoothing: antialiased;
        }

        /* Mobile Responsive Styles */
        @media only screen and (max-width: 620px) {
            .email-container {
                width: 100% !important;
                max-width: 100% !important;
            }

            .email-card {
                padding: 24px 18px !important;
                border-radius: 8px !important;
            }

            .data-table td {
                display: block !important;
                width: 100% !important;
                box-sizing: border-box !important;
            }

            .data-table .label-col {
                border-bottom: none !important;
                padding-bottom: 4px !important;
                background-color: #F8FAFC !important;
            }

            .data-table .val-col {
                padding-top: 2px !important;
                padding-bottom: 12px !important;
                border-bottom: 1px solid #EDF2F7 !important;
            }

            .hero-title {
                font-size: 20px !important;
            }
        }
    </style>
</head>
<body style="margin: 0 !important; padding: 0 !important; background-color: #F4F6FB; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; color: #142640;">
    <!-- Hidden Preheader for Email Inboxes -->
    <div style="display: none; font-size: 1px; color: #F4F6FB; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all;">
        New proposal request from {{ $full_name }} &bull; {{ $company }} ({{ $country }})
    </div>
    <!-- Outer Wrapper Table -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: #F4F6FB; table-layout: fixed;">
        <tr>
            <td align="center" style="padding: 36px 16px 40px 16px;">
                <!-- Top Brand Eyebrow -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                    style="max-width: 620px; margin-bottom: 14px;" role="presentation">
                    <tr>
                        <td align="left"
                            style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 11px; font-weight: 700; color: #5A6B85; letter-spacing: 0.06em; text-transform: uppercase;">
                            {{ $setting->site_name ?? 'Nepreva Global Solutions' }} &bull; Proposal Request
                        </td>
                        <td align="right"
                            style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 11px; color: #8C9BB0;">
                            Nepal Standard Time (UTC+5:45)
                        </td>
                    </tr>
                </table>
                <!-- Main Card Container -->
                <table class="email-container" border="0" cellpadding="0" cellspacing="0" width="100%"
                    style="max-width: 620px; background-color: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 14px; overflow: hidden; box-shadow: 0 4px 20px rgba(20, 38, 64, 0.05);"
                    role="presentation">
                    <!-- Top Accent Stripe (Nepreva Cobalt & Lime) -->
                    <tr>
                        <td height="5"
                            style="background-color: #1F3A74; font-size: 0; line-height: 0; border-bottom: 2px solid #83BD42;">
                            &nbsp;
                        </td>
                    </tr>
                    <!-- Card Content Body -->
                    <tr>
                        <td class="email-card" style="padding: 36px 36px 32px 36px;">
                            <!-- Header: Logo & Status Badge -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation" style="margin-bottom: 24px;">
                                <tr>
                                    <td align="left" valign="middle">
                                        <a href="{{ url('/') }}" target="_blank"
                                            style="text-decoration: none; display: inline-block;">
                                            <img src="{{ asset('assets/img/logo-colour.webp') }}"
                                                alt="{{ $setting->site_name ?? 'Nepreva Global Solutions' }}"
                                                width="175"
                                                style="display: block; width: 175px; max-width: 175px; height: auto; border: 0;" />
                                        </a>
                                    </td>
                                    <td align="right" valign="middle">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                                            style="display: inline-table; background-color: #EEF6DF; border: 1px solid #C5E398; border-radius: 999px; padding: 5px 12px;">
                                            <tr>
                                                <td style="width: 7px; height: 7px; border-radius: 50%; background-color: #83BD42; vertical-align: middle;">
                                                </td>
                                                <td style="padding-left: 7px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 11px; font-weight: 700; color: #4C7716; letter-spacing: 0.04em; text-transform: uppercase; line-height: 1;">
                                                    New Proposal Request
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- Divider Line -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                style="margin-bottom: 22px;">
                                <tr>
                                    <td height="1" style="background-color: #EDF2F7; font-size: 0; line-height: 0;">
                                        &nbsp;</td>
                                </tr>
                            </table>
                            <!-- Main Heading & Intro -->
                            <h1 class="hero-title" style="margin: 0 0 8px 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 22px; font-weight: 700; color: #142640; letter-spacing: -0.015em; line-height: 1.3;">
                                New Proposal Request Received
                            </h1>
                            <p style="margin: 0 0 24px 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; color: #5A6B85; line-height: 1.55;">
                                A new proposal request has been submitted through the contact form on
                                <strong style="color: #142640;">{{ $setting->site_name ?? 'Nepreva Global Solutions' }}</strong>.
                                Complete client details and requirements are summarized below.
                            </p>
                            <!-- Sender & Company Details Table -->
                            <table class="data-table" border="0" cellpadding="0" cellspacing="0" width="100%"
                                role="presentation"
                                style="border: 1px solid #E2E8F0; border-radius: 10px; overflow: hidden; background-color: #FFFFFF; margin-bottom: 24px;">
                                <!-- Full Name Row -->
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding: 13px 16px; background-color: #F8FAFC; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.05em;">
                                        Full Name
                                    </td>
                                    <td class="val-col" valign="top"
                                        style="padding: 13px 16px; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; font-weight: 600; color: #142640;">
                                        {{ $full_name }}
                                    </td>
                                </tr>
                                <!-- Work Email Row -->
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding: 13px 16px; background-color: #F8FAFC; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.05em;">
                                        Work Email
                                    </td>
                                    <td class="val-col" valign="top"
                                        style="padding: 13px 16px; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; color: #142640;">
                                        <a href="mailto:{{ $email }}"
                                            style="color: #1F3A74; text-decoration: none; font-weight: 600;">{{ $email }}</a>
                                    </td>
                                </tr>
                                <!-- Company Row -->
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding: 13px 16px; background-color: #F8FAFC; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.05em;">
                                        Company
                                    </td>
                                    <td class="val-col" valign="top"
                                        style="padding: 13px 16px; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; font-weight: 600; color: #142640;">
                                        {{ $company }}
                                    </td>
                                </tr>
                                <!-- Country Row -->
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding: 13px 16px; background-color: #F8FAFC; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.05em;">
                                        Country
                                    </td>
                                    <td class="val-col" valign="top"
                                        style="padding: 13px 16px; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; color: #142640;">
                                        {{ $country }}
                                    </td>
                                </tr>
                                <!-- Service Required Row -->
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding: 13px 16px; background-color: #F8FAFC; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.05em;">
                                        Service Required
                                    </td>
                                    <td class="val-col" valign="top"
                                        style="padding: 13px 16px; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; font-weight: 600; color: #142640;">
                                        {{ $svc }}
                                    </td>
                                </tr>
                                <!-- Preferred Engagement Model Row -->
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding: 13px 16px; background-color: #F8FAFC; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.05em;">
                                        Engagement Model
                                    </td>
                                    <td class="val-col" valign="top"
                                        style="padding: 13px 16px; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; font-weight: 600; color: #142640;">
                                        {{ $model }}
                                    </td>
                                </tr>
                                <!-- Optional Phone Row (if present) -->
                                @if (!empty($phone))
                                    <tr>
                                        <td class="label-col" width="150" valign="top"
                                            style="padding: 13px 16px; background-color: #F8FAFC; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.05em;">
                                            Phone
                                        </td>
                                        <td class="val-col" valign="top"
                                            style="padding: 13px 16px; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; color: #142640;">
                                            <a href="tel:{{ $phone }}"
                                                style="color: #1F3A74; text-decoration: none; font-weight: 500;">{{ $phone }}</a>
                                        </td>
                                    </tr>
                                @endif
                                <!-- Optional Subject Row (if present) -->
                                @if (!empty($subject))
                                    <tr>
                                        <td class="label-col" width="150" valign="top"
                                            style="padding: 13px 16px; background-color: #F8FAFC; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.05em;">
                                            Subject
                                        </td>
                                        <td class="val-col" valign="top"
                                            style="padding: 13px 16px; border-bottom: 1px solid #EDF2F7; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; font-weight: 600; color: #142640;">
                                            {{ $subject }}
                                        </td>
                                    </tr>
                                @endif
                                <!-- What Are You Trying To Solve? (Message) Row -->
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding: 14px 16px; background-color: #F8FAFC; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 12px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.05em;">
                                        Message / Goal
                                    </td>
                                    <td class="val-col" valign="top"
                                        style="padding: 14px 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; line-height: 1.6; color: #1E293B; white-space: pre-wrap;">
                                        {{ $message }}
                                    </td>
                                </tr>
                            </table>
                            <!-- Quick Action: Reply via Email -->
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                                style="margin-bottom: 30px;">
                                <tr>
                                    <td align="center" style="border-radius: 8px; background-color: #1F3A74;">
                                        <a href="mailto:{{ $Setting->email_primary }}?subject=Nepreva%20Proposal%20Follow-up%20-%20{{ $setting->site_name }}"
                                            style="display: inline-block; padding: 12px 24px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; font-weight: 600; color: #FFFFFF; text-decoration: none; border-radius: 8px; background-color: #1F3A74; letter-spacing: 0.01em;">
                                            Reply to {{ $$setting->site_name }} &rarr;
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <!-- Bottom Divider -->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation" style="margin-bottom: 22px;">
                                <tr>
                                    <td height="1" style="background-color: #EDF2F7; font-size: 0; line-height: 0;">&nbsp;</td>
                                </tr>
                            </table>
                            <!-- Closing / Signature -->
                            <p style="margin: 0 0 4px 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 14px; font-weight: 600; color: #142640;">
                                Thank You
                            </p>
                            <p style="margin: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 13px; color: #5A6B85; line-height: 1.5;">
                                <strong style="color: #1F3A74;">{{ $setting->site_name ?? 'Nepreva Global Solutions' }}</strong><br>
                                Chartered Accountant-led Accounting &amp; Finance Delivery<br>
                                Kathmandu, Nepal
                            </p>
                        </td>
                    </tr>
                </table>
                <!-- Outer Footer Notice -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                    style="max-width: 620px; margin-top: 20px;" role="presentation">
                    <tr>
                        <td align="center"
                            style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; font-size: 12px; color: #8C9BB0; line-height: 1.55; padding: 0 16px;">
                            This email was automatically generated by the proposal notification system on <span
                                style="color: #5A6B85;">{{ $setting->site_name ?? 'Nepreva Global Solutions' }}</span>.<br>
                            Please treat all client requirements and inquiries with strict confidentiality.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
