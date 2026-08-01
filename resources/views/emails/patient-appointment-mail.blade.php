<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Appointment Confirmation</title>
</head>

<body style="margin: 0; padding: 0; background: #f4f8f9; font-family: Arial, Helvetica, sans-serif">
    <table width="100%" cellpadding="0" cellspacing="0" style="padding: 30px 15px; background: #f4f8f9">
        <tr>
            <td align="center">
                <!-- Main Card -->
                <table width="600" cellpadding="0" cellspacing="0"
                    style="
                            max-width: 600px;
                            background: #ffffff;
                            border-radius: 10px;
                            overflow: hidden;
                            border: 1px solid #e1eeee;
                        ">
                    <!-- Header -->
                    <tr>
                        <td style="background: #11497b; padding: 25px; text-align: center">
                            <img src="{{ asset('themes-assets/img/logo.png') }}" alt="{{ $data->site_name }}"
                                style="height: 45px; margin-bottom: 10px" />

                            <h2 style="margin: 0; color: #ffffff; font-size: 22px">{{ $data->site_name }}</h2>

                            <p style="margin: 8px 0 0; color: #e5ffff; font-size: 13px">
                                Quality Healthcare You Can Trust
                            </p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 30px">
                            <h3 style="margin: 0 0 15px; color: #11497b; font-size: 20px">
                                Appointment Request Received
                            </h3>

                            <p style="color: #555; font-size: 15px; line-height: 1.6">
                                Dear <strong>{{ $contact->full_name }}</strong>,
                            </p>

                            <p style="color: #555; font-size: 15px; line-height: 1.6">
                                Thank you for contacting {{ $data->site_name }}. Your appointment request has been
                                successfully received. Our team will contact you shortly for confirmation.
                            </p>

                            <!-- Appointment Details -->
                            <table width="100%" cellpadding="8" cellspacing="0"
                                style="margin-top: 20px; background: #f7fbfb; border-radius: 8px">
                                <tr>
                                    <td style="color: #555"><strong>Name</strong></td>
                                    <td style="color: #333">{{ $contact->full_name }}</td>
                                </tr>

                                <tr>
                                    <td style="color: #555"><strong>Email</strong></td>
                                    <td style="color: #333">{{ $contact->email }}</td>
                                </tr>

                                <tr>
                                    <td style="color: #555"><strong>Phone</strong></td>
                                    <td style="color: #333">{{ $contact->phone }}</td>
                                </tr>

                                <tr>
                                    <td style="color: #555"><strong>Service</strong></td>
                                    <td style="color: #333">{{ $contact->service }}</td>
                                </tr>

                                <tr>
                                    <td style="color: #555"><strong>Date</strong></td>
                                    <td style="color: #333">{{ $contact->appointment_date }}</td>
                                </tr>

                                <tr>
                                    <td style="color: #555"><strong>Time</strong></td>
                                    <td style="color: #333">{{ $contact->appointment_time }}</td>
                                </tr>
                            </table>

                            <p style="margin-top: 25px; color: #555; font-size: 15px; line-height: 1.6">
                                We look forward to providing you with the best healthcare experience.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background: #f1f7f8; padding: 18px; text-align: center">
                            <p style="margin: 0; color: #777; font-size: 13px">
                                © {{ date('Y') }} {{ $data->site_name }}. All rights reserved.
                            </p>

                            <p style="margin: 8px 0 0; color: #999; font-size: 12px">
                                This is an automated confirmation email.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
