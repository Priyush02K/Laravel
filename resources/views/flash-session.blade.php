<!DOCTYPE html>
<html>
<head>
    <title>Laravel Flash Session</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .alert { background: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; margin-bottom: 15px; }
    </style>
</head>
<body>

    <h2>📝 Submit Form</h2>

    @if(session('message'))
        <div class="alert">
            {{ session('message') }}
        </div>
    @endif

    <form method="POST" action="/flash-form">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
