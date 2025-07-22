<!DOCTYPE html>
<html>
<head>
    <title>Laravel Session Demo</title>
    <style>
        body { font-family: Arial; padding: 30px; background-color: #f4f4f4; }
        a { margin: 5px; display: inline-block; padding: 10px 15px; background: #007bff; color: white; text-decoration: none; border-radius: 4px; }
        a:hover { background: #0056b3; }
        .info { margin-top: 20px; padding: 10px; background: #e2e3e5; border: 1px solid #d6d8db; }
    </style>
</head>
<body>
    <h2>🔐 Laravel Session Management</h2>

    <a href="/session/set">Set Session</a>
    <a href="/session/get">Get Session</a>
    <a href="/session/remove">Remove Session</a>
    <a href="/session/clear">Clear All</a>

    @if(session('message'))
        <div class="info">{{ session('message') }}</div>
    @endif

    <div class="info">
        <strong>Current Session Username:</strong> {{ $sessionData ?? 'N/A' }} <br>
        <strong>Session Key Exists:</strong> {{ $hasUsername ? 'Yes' : 'No' }}
    </div>
</body>
</html>
