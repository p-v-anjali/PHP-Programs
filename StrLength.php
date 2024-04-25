<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Length Finder</title>
</head>
<body>
    <form method="post">
        <label for="user_input">Enter a string:</label>
        <input type="text" name="user_input" id="user_input">
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the user has submitted the form
        $input = $_POST["user_input"]; // Get the user input from the form
        $length = strlen($input); // Calculate the length of the input string
        echo "<p>The length of the input string \"$input\" is: $length</p>"; // Display the length
    }
    ?>
</body>
</html>

