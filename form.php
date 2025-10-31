<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
</head>
<body>
    <h2>Simple Contact Form</h2>

    <form method="post" action="">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        echo "<h3>Form Submitted Successfully!</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
    }
    ?>
</body>
</html>
