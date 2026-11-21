<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delivery Team Request</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f4f6f9; padding:20px;">

    <div style="max-width:600px; margin:auto; background:#fff; padding:30px; border-radius:8px;">

        <h2 style="color:#222;">Hello {{ $contact->name }},</h2>

        <p>Thank you for submitting your delivery team request.</p>

        <p>
            We have successfully received your requirements.
            Our team will review your request and contact you shortly.
        </p>

        <h3>Your Request Details</h3>

        <p><strong>Company:</strong> {{ $contact->company }}</p>
        <p><strong>Service:</strong> {{ $contact->service }}</p>
        <p><strong>Role:</strong> {{ $contact->role }}</p>
        <p><strong>Volume:</strong> {{ $contact->volume }}</p>
        <p><strong>Timeline:</strong> {{ $contact->timeline }}</p>
        <p><strong>Engagement Model:</strong> {{ $contact->engagement_model }}</p>

        <p>We look forward to working with you.</p>

        <p>Best regards,<br>
        {{ $data->site_name ?? config('app.name') }}</p>

    </div>

</body>
</html>
