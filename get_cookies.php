<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị Cookie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .cookie-info {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông tin Cookie</h1>

        <?php
        // Kiểm tra xem có cookie được gửi về không
        if (isset($_COOKIE['ten_cookie'])) {
            // Lấy giá trị của cookie
            $gia_tri_cookie = $_COOKIE['ten_cookie'];
            echo '<div class="cookie-info">';
            echo '<strong>Tên Cookie:</strong> ten_cookie<br>';
            echo '<strong>Giá trị Cookie:</strong> ' . $gia_tri_cookie;
            echo '</div>';
        } else {
            echo '<p>Không có cookie được gửi về.</p>';
        }
        ?>
    </div>
</body>
</html>
