<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment Request</title>
</head>

<body style="margin:0;padding:0;background:#f4f8f9;font-family:Arial,Helvetica,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 15px;background:#f4f8f9;">
        <tr>
            <td align="center">

                <!-- Main Card -->
                <table width="600" cellpadding="0" cellspacing="0"
                    style="max-width:600px;background:#ffffff;border-radius:10px;overflow:hidden;border:1px solid #e1eeee;">

                    <!-- Header -->
                    <tr>
                        <td style="background:#11497b;padding:25px;text-align:center;">

                            <img src="{{ asset('themes-assets/img/logo.png') }}" alt="{{ $data->site_name }}"
                                style="height:45px;margin-bottom:10px;">

                            <h2 style="margin:0;color:#ffffff;font-size:22px;">
                                {{ $data->site_name }}
                            </h2>

                            <p style="margin:8px 0 0;color:#e5ffff;font-size:13px;">
                                New Appointment Request Notification
                            </p>

                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:30px;">

                            <h3 style="margin:0 0 15px;color:#11497b;font-size:20px;">
                                New Appointment Request Received
                            </h3>

                            <p style="color:#555;font-size:15px;line-height:1.6;">
                                Hello Admin,
                            </p>

                            <p style="color:#555;font-size:15px;line-height:1.6;">
                                A new appointment request has been submitted through the
                                <strong>{{ $data->site_name }}</strong> website.
                                Please review the patient's information below and contact them for
                                appointment confirmation.
                            </p>

                            <!-- Patient Information -->
                            <table width="100%" cellpadding="8" cellspacing="0"
                                style="margin-top:20px;background:#f7fbfb;border-radius:8px;">

                                <tr>
                                    <td colspan="2"
                                        style="background:#11497b;color:#ffffff;font-weight:bold;font-size:15px;">
                                        Patient Information
                                    </td>
                                </tr>

                                <tr>
                                    <td width="35%" style="color:#555;">
                                        <strong>Full Name</strong>
                                    </td>
                                    <td style="color:#333;">
                                        {{ $contact->full_name }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="color:#555;">
                                        <strong>Email Address</strong>
                                    </td>
                                    <td style="color:#333;">
                                        {{ $contact->email }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="color:#555;">
                                        <strong>Phone Number</strong>
                                    </td>
                                    <td style="color:#333;">
                                        {{ $contact->phone }}
                                    </td>
                                </tr>

                                @if (!empty($contact->country))
                                    <tr>
                                        <td style="color:#555;">
                                            <strong>Nationality</strong>
                                        </td>
                                        <td style="color:#333;">
                                            {{ $contact->country }}
                                        </td>
                                    </tr>
                                @endif

                            </table>

                            <!-- Appointment Information -->
                            <table width="100%" cellpadding="8" cellspacing="0"
                                style="margin-top:20px;background:#f7fbfb;border-radius:8px;">

                                <tr>
                                    <td colspan="2"
                                        style="background:#11497b;color:#ffffff;font-weight:bold;font-size:15px;">
                                        Appointment Information
                                    </td>
                                </tr>

                                @if (!empty($contact->request_type))
                                    <tr>
                                        <td width="35%" style="color:#555;">
                                            <strong>Request Type</strong>
                                        </td>
                                        <td style="color:#333;">
                                            {{ $contact->request_type }}
                                        </td>
                                    </tr>
                                @endif

                                @if (!empty($contact->location))
                                    <tr>
                                        <td style="color:#555;">
                                            <strong>Preferred Location</strong>
                                        </td>
                                        <td style="color:#333;">
                                            {{ $contact->location }}
                                        </td>
                                    </tr>
                                @endif

                                <tr>
                                    <td style="color:#555;">
                                        <strong>Department / Service</strong>
                                    </td>
                                    <td style="color:#333;">
                                        {{ $contact->service }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="color:#555;">
                                        <strong>Appointment Date</strong>
                                    </td>
                                    <td style="color:#333;">
                                        {{ \Carbon\Carbon::parse($contact->appointment_date)->format('F d, Y') }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="color:#555;">
                                        <strong>Appointment Time</strong>
                                    </td>
                                    <td style="color:#333;">
                                        {{ \Carbon\Carbon::parse($contact->appointment_time)->format('h:i A') }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="color:#555;">
                                        <strong>Status</strong>
                                    </td>
                                    <td style="color:#333;">
                                        {{ $contact->status }}
                                    </td>
                                </tr>

                            </table>

                            <!-- Message -->
                            @if (!empty($contact->message))
                                <table width="100%" cellpadding="10" cellspacing="0"
                                    style="margin-top:20px;background:#f7fbfb;border-radius:8px;">

                                    <tr>
                                        <td style="background:#11497b;color:#ffffff;font-weight:bold;">
                                            Patient Message
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="color:#555;line-height:1.8;">
                                            {{ $contact->message }}
                                        </td>
                                    </tr>

                                </table>
                            @endif

                            <p style="margin-top:25px;color:#555;font-size:15px;line-height:1.6;">
                                Please verify the appointment availability and contact the patient as soon as possible
                                to confirm or reschedule the appointment.
                            </p>

                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:30px;">
                                <tr>
                                    <td align="center">

                                        <a href="{{ url('/admin/appointments') }}"
                                            style="display:inline-block;
                                                   background:#11497b;
                                                   color:#ffffff;
                                                   text-decoration:none;
                                                   padding:14px 32px;
                                                   border-radius:6px;
                                                   font-size:15px;
                                                   font-weight:bold;">
                                            View Appointment
                                        </a>

                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f1f7f8;padding:18px;text-align:center;">

                            <p style="margin:0;color:#777;font-size:13px;">
                                © {{ date('Y') }} {{ $data->site_name }}. All rights reserved.
                            </p>

                            <p style="margin:8px 0 0;color:#999;font-size:12px;">
                                This is an automated appointment notification email sent to the hospital administration.
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
