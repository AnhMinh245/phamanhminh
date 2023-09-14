<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form Liên Hệ (Tiếng Việt)</title>
</head>
<body>
    <h1>Form Liên Hệ (Tiếng Việt)</h1>
    <form method="post" action="../pages/contact.php">
        <label for="name">Tên:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Tin Nhắn:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        
        <input type="submit" value="Gửi">
        <input type="reset" value="Làm Lại">
    </form>
</body>
</html>
