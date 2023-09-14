<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form (English)</title>
</head>
<body>
    <h1>Contact Form (English)</h1>
    <form method="post" action="../pages/contact.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
