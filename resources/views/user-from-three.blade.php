<!-- resources/views/addUser3.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New User</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            padding-top: 40px;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            max-width: 500px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .input-wrapper {
            margin-bottom: 20px;
        }

        .input-wrapper label,
        .form-section label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #333;
        }

        .input-wrapper input[type="text"],
        .input-wrapper input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            background-color: #fafafa;
            transition: border 0.3s ease;
        }

        .input-wrapper input:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .form-section h3 {
            margin-bottom: 10px;
            font-size: 16px;
            color: #444;
        }

        .form-section input[type="checkbox"],
        .form-section input[type="radio"] {
            margin-right: 6px;
        }

        .form-section label {
            display: inline-block;
            margin-right: 20px;
            font-weight: normal;
            color: #555;
        }

        input[type="range"] {
            width: 100%;
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 500px) {
            .form-container {
                padding: 20px;
            }

            h2 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Add New User</h2>


    <form action="addUser3" method="POST">
        @csrf

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

        <div class="form-section">
            <h3>User Skills</h3>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>

            <input type="checkbox" name="skill[]" value="Node" id="node">
            <label for="node">Node</label>

            <input type="checkbox" name="skill[]" value="Java" id="java">
            <label for="java">Java</label>

            <input type="checkbox" name="skill[]" value="JavaScript" id="javaScript">
            <label for="javaScript">JavaScript</label>
        </div>

        <div class="form-section">
            <h3>Gender</h3>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>

            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>

            <input type="radio" name="gender" value="other" id="other">
            <label for="other">Other</label>
        </div>

        <div class="form-section">
            <label for="country"><strong>Country:</strong></label>
            <select name="country" id="country">
                <option value="">--Select Country--</option>
                <option value="india">India</option>
                <option value="usa">USA</option>
                <option value="uk">UK</option>
            </select>
        </div>

        <div class="form-section">
            <h3>Age</h3>
            <input type="range" name="age" min="18" max="100">
        </div>

        <button type="submit">Add User</button>
    </form>
</div>

</body>
</html>
