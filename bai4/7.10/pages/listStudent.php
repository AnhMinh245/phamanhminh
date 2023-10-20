<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Sinh Viên</title>
</head>
<body>
    <h1>Danh Sách Sinh Viên</h1>
    <?php
    // Đọc dữ liệu từ tệp "student.txt"
    $students = file("student.txt", FILE_IGNORE_NEW_LINES);

    if (!empty($students)) {
        echo "<table border='1'>";
        echo "<tr><th>Họ và Tên</th><th>Tuổi</th><th>Email</th></tr>";

        foreach ($students as $student) {
            list($name, $msv, $age, $email) = explode("|", $student);
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$msv</td>";
            echo "<td>$age</td>";
            echo "<td>$email</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Danh sách sinh viên trống.";
    }
    ?>
    <p><a href="addStudent.php">Thêm Sinh Viên Mới</a></p>
</body>
</html>
