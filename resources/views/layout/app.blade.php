<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Layout Example</title>
    <style>
        body { font-family: sans-serif; margin: 0; display: flex; }
        aside { width: 200px; background: #f4f4f4; padding: 15px; }
        main { flex: 1; padding: 20px; }
        header, footer { background: #333; color: #fff; padding: 10px; text-align: center; }
    </style>
</head>
<body>

    @include('layout.sidebar')

    <div style="flex: 1; display: flex; flex-direction: column;">
        @include('layout.header')

        <main>
            @yield('content')
        </main>

        @include('layout.footer')
    </div>

</body>
</html>
