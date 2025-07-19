<!DOCTYPE html>
<html>
<head>
    <title>Laravel Request Example</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px;
            background-color: #f4f6f9;
            color: #333;
        }

        h2 {
            color: #007BFF;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            max-width: 400px;
        }

        input[type="text"],
        input[type="email"],
        button {
            display: block;
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            font-size: 14px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
        }

        hr {
            margin: 30px 0;
        }

        ul {
            list-style: none;
            padding: 0;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            max-width: 600px;
        }

        li {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        strong {
            color: #555;
        }
    </style>
</head>
<body>
    <h2>🔹 Laravel Request Methods Demo</h2>

    <form method="POST" action="/request-example?q=search">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <input type="email" name="email" placeholder="Enter your email">
        <button type="submit">Submit</button>
    </form>

    @isset($all)
        <hr>
        <h3>🔍 Request Info</h3>
        <ul>
            <li><strong>All Input:</strong> {{ json_encode($all) }}</li>
            <li><strong>Name:</strong> {{ $name }}</li>
            <li><strong>Has Email:</strong> {{ $hasEmail ? 'Yes' : 'No' }}</li>
            <li><strong>Request Method:</strong> {{ $method }}</li>
            <li><strong>Is POST:</strong> {{ $isPost ? 'Yes' : 'No' }}</li>
            <li><strong>Path:</strong> {{ $path }}</li>
            <li><strong>URL:</strong> {{ $url }}</li>
            <li><strong>Full URL:</strong> {{ $fullUrl }}</li>
            <li><strong>IP Address:</strong> {{ $ip }}</li>
            <li><strong>Query Parameter (q):</strong> {{ $query }}</li>
        </ul>
    @endisset
</body>
</html>
