<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $languages = isset($_POST["languages"]) ? $_POST["languages"] : [];
    $skill = $_POST["skill"];
    $note = $_POST["note"];

    // Hiển thị thông tin đăng ký
    echo "<h1>Thông Tin Đăng Ký</h1>";
    echo "<p>Username: $username</p>";
    echo "<p>Password: $password</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Address: $address</p>";
    echo "<p>Programming Languages: " . implode(", ", $languages) . "</p>";
    echo "<p>Skill Level: $skill</p>";
    echo "<p>Note: $note</p>";
}
?>
