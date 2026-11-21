<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Delivery Team Request</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f4f6f9; padding:20px;">

    <div style="max-width:700px; margin:auto; background:#fff; padding:30px; border-radius:8px;">

        <h2>New Delivery Team Request</h2>

        <p><strong>Name:</strong> {{ $data->name }}</p>
        <p><strong>Email:</strong> {{ $data->email }}</p>
        <p><strong>Company:</strong> {{ $data->company }}</p>
        <p><strong>Country:</strong> {{ $data->country }}</p>
        <p><strong>Role:</strong> {{ $data->role }}</p>

        <hr>

        <h3>Service Requirements</h3>

        <p><strong>Service:</strong> {{ $data->service }}</p>
        <p><strong>Volume:</strong> {{ $data->volume }}</p>
        <p><strong>Currency:</strong> {{ $data->currency }}</p>
        <p><strong>Destination:</strong> {{ $data->destination }}</p>
        <p><strong>Systems:</strong> {{ $data->systems }}</p>

        <hr>

        <p><strong>Timeline:</strong> {{ $data->timeline }}</p>
        <p><strong>Engagement Model:</strong> {{ $data->engagement_model }}</p>

        <h3>Additional Message</h3>

        <p>{{ $data->message ?: 'No additional message provided.' }}</p>

        <p><strong>Status:</strong> {{ $data->status }}</p>

    </div>

</body>
</html>
