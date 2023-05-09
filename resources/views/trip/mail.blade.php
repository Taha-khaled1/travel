<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Request</title>
    <style>
        /* Reset styles */
        body {
            margin: 0;
            padding: 0;
        }

        /* Typography */
        h1, h2, p {
            font-family: Arial, sans-serif;
            color: #333;
        }

        h1 {
            font-size: 28px;
            margin-top: 0;
        }

        /* Layout */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Form */
        .form-label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
        }

        .form-field {
            margin-bottom: 20px;
        }

        .form-field input,
        .form-field textarea {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        /* Button */
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Request</h1>
        <div class="form-field">
            <label class="form-label">Name:</label>
            <span>{{$data['full_name']}}</span>
        </div>
        <div class="form-field">
            <label class="form-label">Email:</label>
            <span>{{$data['email']}}</span>
        </div>
        <div class="form-field">
            <label class="form-label">Subject:</label>
            <span>{{$data['subject']}}</span>
        </div>
        <div class="form-field">
            <label class="form-label">Message:</label>
            <p>{{$data['message']}}</p>
        </div>
        <a href="#" class="btn">Reply to {{$data['full_name']}}</a>
    </div>
</body>
</html>
