<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        // Xử lý dữ liệu hoặc gửi email tại đây
        
        echo "<p>Thank you for your message!</p>";
    }
    ?>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <p><a href="../lang/english.php">English</a> | <a href="../lang/vietnamese.php">Vietnamese</a></p>
</body>
</html>
