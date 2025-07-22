<!DOCTYPE html>
<html>
<head>
    <title>Laravel Image Upload</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .alert { background: #d4edda; padding: 10px; color: green; margin-bottom: 15px; }
    </style>
</head>
<body>

    <h2>📤 Upload Image</h2>

    @if (session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <form method="POST" enctype="multipart/form-data" action="/upload-image">
        @csrf
        <input type="file" name="image" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>

    @if (session('image'))
        <h3>📸 Uploaded Image:</h3>
        <img src="{{ route('images.show', session('image')) }}" width="300">
    @endif

</body>
</html>
