<!-- resources/views/addUser.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New User</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2, h3 {
            margin-top: 0;
            color: #333;
        }

        label {
            margin-left: 8px;
            font-weight: normal;
        }

        input[type="checkbox"],
        input[type="radio"] {
            margin-top: 10px;
            margin-right: 5px;
        }

        select, input[type="range"] {
            width: 100%;
            margin-top: 5px;
            padding: 6px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .form-section {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add New User</h2>

        <form method="POST" action="{{ url('addUser1') }}">
            @csrf

            <!-- Checkboxes -->
            <div class="form-section">
                <h3>User Skills</h3>
                <input type="checkbox" name="skill[]" value="PHP" id="php">
                <label for="php">PHP</label><br>

                <input type="checkbox" name="skill[]" value="Node" id="node">
                <label for="node">Node</label><br>

                <input type="checkbox" name="skill[]" value="Java" id="java">
                <label for="java">Java</label><br>

                <input type="checkbox" name="skill[]" value="JavaScript" id="javaScript">
                <label for="javaScript">JavaScript</label>
            </div>

            <!-- Radio Buttons -->
            <div class="form-section">
                <h3>Gender</h3>
                <input type="radio" name="gender" value="male" id="male">
                <label for="male">Male</label><br>

                <input type="radio" name="gender" value="female" id="female">
                <label for="female">Female</label><br>

                <input type="radio" name="gender" value="other" id="other">
                <label for="other">Other</label>
            </div>

            <!-- Dropdown -->
            <div class="form-section">
                <label for="country"><strong>Country:</strong></label>
                <select name="country" id="country">
                    <option value="">--Select Country--</option>
                    <option value="india">India</option>
                    <option value="usa">USA</option>
                    <option value="uk">UK</option>
                </select>
            </div>

            <!-- Age Range -->
            <div class="form-section">
                <h3>Age</h3>
                <input type="range" name="age" min="18" max="100">
            </div>

            <!-- Submit -->
            <button type="submit">Add New User</button>
        </form>
    </div>
</body>
</html>
