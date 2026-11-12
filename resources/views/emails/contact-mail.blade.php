
@php
    $siteName = $data->site_name ?? 'Nepreva Global Solutions';

    $services = [
        0 => 'Not sure yet',
        1 => 'Accounting & Bookkeeping',
        2 => 'Financial Reporting',
        3 => 'Audit & Assurance Support',
        4 => 'Tax & Compliance Support',
        5 => 'Payroll',
        6 => 'Finance Operations',
        7 => 'FP&A & Financial Modelling',
        8 => 'Virtual CFO',
        9 => 'Employer of Record (EOR)',
    ];

    $models = [
        0 => 'Not sure yet',
        1 => 'Dedicated Team',
        2 => 'Managed Service',
        3 => 'Project Support',
        4 => 'Peak-Season Capacity',
        5 => 'Hybrid Delivery',
    ];

    $service = $services[(int) $contact->svc] ?? 'Not specified';
    $engagementModel = $models[(int) $contact->model] ?? 'Not specified';

    $fullName = $contact->full_name ?? 'Not provided';
    $email = $contact->email ?? '';
    $company = $contact->company ?? 'Not provided';
    $country = $contact->country ?? 'Not provided';
    $message = $contact->message ?? 'No message provided';

    $replySubject = 'Proposal Request Follow-up - ' . $siteName;
@endphp

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no" />
    <meta name="color-scheme" content="light" />
    <meta name="supported-color-schemes" content="light" />

    <title>{{ $siteName }} - New Proposal Request</title>

    <style type="text/css">
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
            border-collapse: collapse;
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

        @media only screen and (max-width: 620px) {
            .email-container {
                width: 100% !important;
                max-width: 100% !important;
            }

            .email-card {
                padding: 24px 18px !important;
            }

            .data-table .label-col,
            .data-table .val-col {
                display: block !important;
                width: 100% !important;
                box-sizing: border-box !important;
            }

            .data-table .label-col {
                border-bottom: none !important;
                padding-bottom: 4px !important;
            }

            .data-table .val-col {
                padding-top: 2px !important;
                padding-bottom: 12px !important;
                border-bottom: 1px solid #EDF2F7 !important;
            }

            .hero-title {
                font-size: 20px !important;
            }

            .brand-meta {
                display: block !important;
                text-align: left !important;
                padding-top: 8px !important;
            }
        }
    </style>
</head>

<body style="margin:0; padding:0; background-color:#F4F6FB; font-family:Arial, Helvetica, sans-serif; color:#142640;">

    {{-- Hidden preheader --}}
    <div style="display:none; font-size:1px; color:#F4F6FB; line-height:1px; max-height:0; max-width:0; opacity:0; overflow:hidden; mso-hide:all;">
        New proposal request from {{ $fullName }} - {{ $company }} ({{ $country }})
    </div>

    {{-- Outer wrapper --}}
    <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation"
        style="background-color:#F4F6FB;">

        <tr>
            <td align="center" style="padding:36px 16px 40px;">

                {{-- Brand information --}}
                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                    style="max-width:620px; margin-bottom:14px;" role="presentation">

                    <tr>
                        <td align="left"
                            style="font-size:11px; font-weight:700; color:#5A6B85; letter-spacing:0.06em; text-transform:uppercase;">
                            {{ $siteName }} &bull; Contact Enquiry
                        </td>

                        <td align="right" class="brand-meta"
                            style="font-size:11px; color:#8C9BB0;">
                            Website Notification
                        </td>
                    </tr>

                </table>

                {{-- Main card --}}
                <table class="email-container" border="0" cellpadding="0" cellspacing="0"
                    width="100%" role="presentation"
                    style="max-width:620px; background-color:#FFFFFF; border:1px solid #E2E8F0; border-radius:14px; overflow:hidden;">

                    {{-- Accent stripe --}}
                    <tr>
                        <td height="5"
                            style="background-color:#1F3A74; border-bottom:2px solid #83BD42; font-size:0; line-height:0;">
                            &nbsp;
                        </td>
                    </tr>

                    {{-- Card content --}}
                    <tr>
                        <td class="email-card" style="padding:36px 36px 32px;">

                            {{-- Logo and status --}}
                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                role="presentation" style="margin-bottom:24px;">

                                <tr>
                                    <td align="left" valign="middle">
                                        <a href="{{ url('/') }}" target="_blank"
                                            style="text-decoration:none;">

                                            <img src="{{ asset('themes-assets/img/logo-white.webp') }}"
                                                alt="{{ $siteName }}"
                                                width="175"
                                                style="display:block; width:175px; max-width:175px; height:auto;" />
                                        </a>
                                    </td>

                                    <td align="right" valign="middle">
                                        <table border="0" cellpadding="0" cellspacing="0"
                                            role="presentation"
                                            style="background-color:#EEF6DF; border:1px solid #C5E398; border-radius:20px;">

                                            <tr>
                                                <td style="padding:7px 12px; font-size:11px; font-weight:700; color:#4C7716; letter-spacing:0.04em; text-transform:uppercase;">
                                                    New Enquiry
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>

                            </table>

                            {{-- Divider --}}
                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                role="presentation" style="margin-bottom:22px;">
                                <tr>
                                    <td height="1" style="background-color:#EDF2F7; font-size:0; line-height:0;">
                                        &nbsp;
                                    </td>
                                </tr>
                            </table>

                            {{-- Heading --}}
                            <h1 class="hero-title"
                                style="margin:0 0 8px; font-size:22px; font-weight:700; color:#142640; line-height:1.3;">
                                New Contact Request Received
                            </h1>

                            <p style="margin:0 0 24px; font-size:14px; color:#5A6B85; line-height:1.6;">
                                A new contact enquiry has been submitted through
                                <strong style="color:#142640;">{{ $siteName }}</strong>.
                                The visitor's contact information and requirements are provided below.
                            </p>

                            {{-- Contact details --}}
                            <table class="data-table" border="0" cellpadding="0" cellspacing="0"
                                width="100%" role="presentation"
                                style="border:1px solid #E2E8F0; border-radius:10px; overflow:hidden; background-color:#FFFFFF; margin-bottom:24px;">

                                {{-- Full name --}}
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding:13px 16px; background-color:#F8FAFC; border-bottom:1px solid #EDF2F7; font-size:12px; font-weight:700; color:#475569; text-transform:uppercase; letter-spacing:0.05em;">
                                        Full Name
                                    </td>

                                    <td class="val-col" valign="top"
                                        style="padding:13px 16px; border-bottom:1px solid #EDF2F7; font-size:14px; font-weight:600; color:#142640;">
                                        {{ $fullName }}
                                    </td>
                                </tr>

                                {{-- Email --}}
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding:13px 16px; background-color:#F8FAFC; border-bottom:1px solid #EDF2F7; font-size:12px; font-weight:700; color:#475569; text-transform:uppercase; letter-spacing:0.05em;">
                                        Email Address
                                    </td>

                                    <td class="val-col" valign="top"
                                        style="padding:13px 16px; border-bottom:1px solid #EDF2F7; font-size:14px; color:#142640;">
                                        @if ($email)
                                            <a href="mailto:{{ $email }}"
                                                style="color:#1F3A74; text-decoration:none; font-weight:600;">
                                                {{ $email }}
                                            </a>
                                        @else
                                            Not provided
                                        @endif
                                    </td>
                                </tr>

                                {{-- Company --}}
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding:13px 16px; background-color:#F8FAFC; border-bottom:1px solid #EDF2F7; font-size:12px; font-weight:700; color:#475569; text-transform:uppercase; letter-spacing:0.05em;">
                                        Company
                                    </td>

                                    <td class="val-col" valign="top"
                                        style="padding:13px 16px; border-bottom:1px solid #EDF2F7; font-size:14px; font-weight:600; color:#142640;">
                                        {{ $company }}
                                    </td>
                                </tr>

                                {{-- Country --}}
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding:13px 16px; background-color:#F8FAFC; border-bottom:1px solid #EDF2F7; font-size:12px; font-weight:700; color:#475569; text-transform:uppercase; letter-spacing:0.05em;">
                                        Country
                                    </td>

                                    <td class="val-col" valign="top"
                                        style="padding:13px 16px; border-bottom:1px solid #EDF2F7; font-size:14px; color:#142640;">
                                        {{ $country }}
                                    </td>
                                </tr>

                                {{-- Service --}}
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding:13px 16px; background-color:#F8FAFC; border-bottom:1px solid #EDF2F7; font-size:12px; font-weight:700; color:#475569; text-transform:uppercase; letter-spacing:0.05em;">
                                        Service Required
                                    </td>

                                    <td class="val-col" valign="top"
                                        style="padding:13px 16px; border-bottom:1px solid #EDF2F7; font-size:14px; font-weight:600; color:#142640;">
                                        {{ $service }}
                                    </td>
                                </tr>

                                {{-- Engagement model --}}
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding:13px 16px; background-color:#F8FAFC; border-bottom:1px solid #EDF2F7; font-size:12px; font-weight:700; color:#475569; text-transform:uppercase; letter-spacing:0.05em;">
                                        Engagement Model
                                    </td>

                                    <td class="val-col" valign="top"
                                        style="padding:13px 16px; border-bottom:1px solid #EDF2F7; font-size:14px; font-weight:600; color:#142640;">
                                        {{ $engagementModel }}
                                    </td>
                                </tr>

                                {{-- Message --}}
                                <tr>
                                    <td class="label-col" width="150" valign="top"
                                        style="padding:14px 16px; background-color:#F8FAFC; font-size:12px; font-weight:700; color:#475569; text-transform:uppercase; letter-spacing:0.05em;">
                                        Message / Goal
                                    </td>

                                    <td class="val-col" valign="top"
                                        style="padding:14px 16px; font-size:14px; line-height:1.7; color:#1E293B; word-break:break-word;">
                                        {{ $message }}
                                    </td>
                                </tr>

                            </table>

                            {{-- Reply action --}}
                            <p style="margin:0 0 16px; font-size:14px; color:#5A6B85; line-height:1.6;">
                                Please review this enquiry and respond to the customer as soon as possible.
                            </p>

                            @if ($email)
                                <table border="0" cellpadding="0" cellspacing="0"
                                    role="presentation" style="margin-bottom:30px;">
                                    <tr>
                                        <td align="center" style="border-radius:8px; background-color:#1F3A74;">
                                            <a href="mailto:{{ $email }}?subject={{ rawurlencode($replySubject) }}"
                                                style="display:inline-block; padding:12px 24px; font-size:14px; font-weight:600; color:#FFFFFF; text-decoration:none; border-radius:8px; background-color:#1F3A74;">
                                                Reply to Enquiry &rarr;
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            @endif

                            {{-- Bottom divider --}}
                            <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                role="presentation" style="margin-bottom:22px;">
                                <tr>
                                    <td height="1" style="background-color:#EDF2F7; font-size:0; line-height:0;">
                                        &nbsp;
                                    </td>
                                </tr>
                            </table>

                            {{-- Signature --}}
                            <p style="margin:0 0 4px; font-size:14px; font-weight:600; color:#142640;">
                                Thank You
                            </p>

                            <p style="margin:0; font-size:13px; color:#5A6B85; line-height:1.6;">
                                <strong style="color:#1F3A74;">{{ $siteName }}</strong><br />
                                Chartered Accountant-led Accounting &amp; Finance Delivery<br />
                                Kathmandu, Nepal
                            </p>

                        </td>
                    </tr>

                </table>

                {{-- Footer --}}
                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                    role="presentation" style="max-width:620px; margin-top:20px;">

                    <tr>
                        <td align="center"
                            style="font-size:12px; color:#8C9BB0; line-height:1.6; padding:0 16px;">
                            This email was automatically generated by the contact notification
                            system on
                            <span style="color:#5A6B85;">{{ $siteName }}</span>.
                            <br />
                            Please treat all client requirements and enquiries with strict confidentiality.
                            <br /><br />
                            &copy; {{ date('Y') }} {{ $siteName }}. All rights reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>

    </table>

</body>
</html>
