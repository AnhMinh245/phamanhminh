<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];

    // Tạo một dòng dữ liệu
    $newStudent = "$name|$age|$email" . PHP_EOL;

    // Mở tệp "student.txt" để ghi dữ liệu mới
    $file = fopen("student.txt", "a");

    if ($file) {
        fwrite($file, $newStudent);
        fclose($file);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Sinh Viên Mới</title>
</head>
<body>
    <h1>Thêm Sinh Viên Mới</h1>
    <form method="post">
        <label for="name">Họ và Tên:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Tuổi:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Thêm Sinh Viên">
    </form>
    <p><a href="listStudent.php">Danh Sách Sinh Viên</a></p>
</body>
</html>
