<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #nav-bar {
            overflow: hidden;
            background-color: #333;
        }

        #nav-bar a {
            float: right;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        #nav-bar a:hover {
            background-color: #ddd;
            color: black;
        }

        #side-nav {
            width: 200px;
            height: 100%;
            z-index: 1;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
        }

        #side-nav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            color: #818181;
            display: block;
        }

        #side-nav a:hover {
            color: #f1f1f1;
        }

        #main-content {
            margin-left: 200px;
            /* Same as the width of the sidenav */
        }

        #main-content h2,
        #main-content p {
            padding-left: 10px;
        }

        table {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        table,
        th,
        td {
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }
    </style>

    <link rel="stylesheet" href="">
</head>

<body>

    <div id="nav-bar">
        <a href="#products">Sản phẩm</a>
        <a href="#contact">Liên hệ</a>
        <a href="#about">Giới thiệu</a>
        <a href="#home">Trang chủ</a>
    </div>

    <div id="side-nav">
        <a href="#category1">Danh mục 1</a>
        <a href="#category2">Danh mục 2</a>
        <a href="#category3">Danh mục 3</a>
    </div>

    <div id="main-content">
        <h2>Giới thiệu Book Store</h2>
        <p>Book Store là nơi bạn có thể tìm thấy những cuốn sách hay nhất từ các tác giả nổi tiếng trên thế giới.</p>

        <!-- Đoạn mã PHP để hiển thị sản phẩm -->
        <?php
        include_once("./display_products.php");
        ?>
    </div>

</body>

</html>