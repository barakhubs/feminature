<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .email-container {
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        .label {
            font-weight: bold;
            color: #222;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
            text-align: center;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="email-container">
        <h2>New Contact Message</h2>
        <p><span class="label">Name:</span> {{ $data['name'] }}</p>
        <p><span class="label">Email:</span> {{ $data['email'] }}</p>
        <p><span class="label">Phone Number:</span> {{ $data['phone_number'] }}</p>
        <p><span class="label">Message:</span></p>
        <p>{{ $data['message'] }}</p>

        <div class="footer">
            <p>This message was sent from your website's contact form.</p>
            <p><a href="https://feminature.org">Visit Website</a></p>
        </div>
    </div>

</body>
</html>
