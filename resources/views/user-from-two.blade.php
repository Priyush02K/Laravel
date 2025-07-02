<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->


    <h2>Add new User</h2>
    <form method="POST" action="addUser1">
        @csrf

        <!-- Checkboxes (e.g. Skills) -->
        <div>
            <h3>User Skill</h3>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>

            <input type="checkbox" name="skill[]" value="Node" id="node">
            <label for="node">Node</label>

            <input type="checkbox" name="skill[]" value="Java" id="java">
            <label for="java">Java</label>

            <input type="checkbox" name="skill[]" value="JavaScript" id="javaScript">
            <label for="javaScript">JavaScript</label>

        </div>

        <!-- Radio Buttons (e.g. Gender) -->
        <div>
            <h3>Gender</h3>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>

            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>

            <input type="radio" name="gender" value="other" id="other">
            <label for="other">Other</label>



        </div>
        <br>

        <!-- Dropdown (e.g. Country) -->
        <div>
            <label for="country">Country:</label>
            <select name="country" id="country">
                <option value="">--Select Country--</option>
                <option value="india">India</option>
                <option value="usa">USA</option>
                <option value="uk">UK</option>
            </select>
        </div>

        <br>


        <div>
            <h3>Age</h3>

            <input type="range" name="age" min="18" max="100">
        </div>
        <br>
        <button type="submit">Add New User</button>
    </form>


</div>