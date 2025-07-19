<!DOCTYPE html>
<html>
<head>
    <title>Laravel Route Methods</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 30px;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }

        input[type="text"] {
            padding: 8px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
        }

        button {
            background-color: #3490dc;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2779bd;
        }

        form + form {
            margin-top: 15px;
        }

        .form-wrapper {
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>
    <h2>Laravel Route Method Testing</h2>

    <div class="form-wrapper">
        <form method="GET" action="/route/get">
            <button type="submit">GET</button>
        </form>

        <form method="POST" action="/route/post">
            @csrf
            <input type="text" name="message" placeholder="POST data">
            <button type="submit">POST</button>
        </form>

        <form method="POST" action="/route/put">
            @csrf
            @method('PUT')
            <input type="text" name="message" placeholder="PUT data">
            <button type="submit">PUT</button>
        </form>

        <form method="POST" action="/route/patch">
            @csrf
            @method('PATCH')
            <input type="text" name="message" placeholder="PATCH data">
            <button type="submit">PATCH</button>
        </form>

        <form method="POST" action="/route/delete">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
        </form>

        <form method="POST" action="/route/match">
            @csrf
            <button type="submit">MATCH (GET/POST)</button>
        </form>

        <form method="POST" action="/route/any">
            @csrf
            <button type="submit">ANY</button>
        </form>
    </div>
</body>
</html>
