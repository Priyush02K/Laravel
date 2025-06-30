<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New User</title>

</head>
<body>

    <div class="form-container">
        <h2>Add New User</h2>


        <form action="addUser" method="POST">
            <!-- CSRF token for Laravel Blade template -->
            <!-- @csrf -->
            @csrf <!-- CSRF protection -->

            <div class="input-wrapper">
                <label for="name">User Name</label>
                <input type="text" id="name" name="name" placeholder="Enter full name" required>
            </div>

            <div class="input-wrapper">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter email" required>
            </div>

            <div class="input-wrapper">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="Enter city" required>
            </div>

            <button type="submit">Add User</button>
        </form>
    </div>

</body>
</html>



    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f9;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            margin-bottom: 25px;
            color: #333;
            text-align: center;
        }

        .input-wrapper {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>