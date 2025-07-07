<!DOCTYPE html>
<html>
<head>
    <title>Uppercase Name Validation</title>
</head>
<body>

    <h2>Enter Name (Must Be UPPERCASE)</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('submit-uppercase') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

</body>
</html>
