<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phạm Anh Minh</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <style>
        * {
            box-sizing: border-box;
            background-color: linear-gradient(to right, #d3cce3, #e9e4f0);
        }

        body {
            font-family: Victor Mono, monospace;
            padding: 10px;
            background: #f1f1f1;
        }

        a {
            color: #317773;
            text-decoration: none;
            font-size: 22px;
            line-height: 50px;
            font-weight: bold;
        }

        a:hover {
            color: #317773;
            text-decoration: underline;
        }

        h3 {
            font-family: "Audiowide", sans-serif;
            font-size: 30px;
            color: #317773;
            text-align: center;
        }

        /* Header/Blog Title */
        .header {
            padding: 5px;
            align-items: center;
            text-align: center;
            background: #E2D1F9;
            color: #317773;
        }

        .header h1 {
            font-size: 50px;
        }

        .header h2 {
            font-size: 40px;
            font-family: "Audiowide", sans-serif;
        }

        /* Style the top navigation bar */
        .topnav {
            overflow: hidden;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            align-items: stretch;
        }

        .topnav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #317773;
            border: 5px solid #e7e7e7;
            top: 0;
            width: 100%;
        }

        /* Style the topnav links */
        .topnav li a {
            float: right;
            width: auto;
            background-color: #317773;
            color: white;
            padding: 10px 10px;
            text-decoration: none;
            margin: 0;
            white-space: nowrap;
            font-size: 24px;
            font-family: "Sofia", sans-serif;
            border: 1px solid #e7e7e7;
        }

        /* Change color on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        #logo {
            width: 100%;
            height: auto;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 25%;
            position: -webkit-sticky;
            position: sticky;
            scroll-padding: 10px;
            top: 80px;
        }

        /* Right column */
        .rightcolumn {
            float: right;
            width: 75%;
            background-color: #f1f1f1;
            padding-left: 20px;
        }

        /* Fake image */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }

        /* Add a card effect for articles */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {

            .leftcolumn,
            .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }

        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
            .topnav a {
                float: none;
                width: 100%;
            }
        }


        /* CSS cho phần footer */
        footer {
            background-color: #333;
            /* Màu nền của footer */
            color: #fff;
            /* Màu chữ trắng */
            padding: 20px 0;
            /* Khoảng cách giữa nội dung và viền của footer */
            text-align: center;
            /* Căn giữa nội dung trong footer */
        }

        .container {
            max-width: 1200px;
            /* Giới hạn chiều rộng của footer */
            margin: 0 auto;
            /* Căn giữa footer trong trang */
        }

        .footer-content {
            font-size: 14px;
            /* Kích thước chữ cho nội dung footer */
        }

        .footer-content p {
            margin: 10px 0;
            /* Khoảng cách giữa các dòng trong nội dung */
        }

        /* Đường link trong footer */
        .footer-content a {
            color: #fff;
            /* Màu chữ cho đường link */
            text-decoration: none;
            /* Loại bỏ gạch chân từ đường link */
            transition: color 0.3s;
            /* Hiệu ứng màu khi hover chuột */
        }

        .footer-content a:hover {
            color: #ff6600;
            /* Màu chữ khi hover chuột */
        }

        /* Sub navigation */
        .subNav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            top: 0;
            width: 100%;
        }

        .subNav li a {
            float: left;
            width: auto;
            background-color: #333;
            color: white;
            padding: 10px 10px;
            text-decoration: none;
            margin: 0;
            white-space: nowrap;
            font-size: 24px;
            border: 1px solid #e7e7e7;
        }
    </style>
</head>

<body>
    <!-- _______________________________Header_______________________________________ -->
    <div class="header">
        <h1>CÔNG NGHỆ WEB AN TOÀN </h1>
        <h2>Phạm Anh Minh</h2>
    </div>

    <div class="topnav">
        <ul>
            <li><a href="../../index.html" style="float:left; padding-left: 20px;">Trang
                    chủ</a></li>
            <li><a href="../../index.html#bt6">Tổng hợp</a></li>
            <li><a href="../../index.html#bt5">Khai thác lỗ hổng Web</a></li>
            <li><a href="../../index.html#bt4" style="background-color: #f1f1f1; color:#333">PHP và CSDL</a></li>
            <li><a href="../../index.html#bt3">Javascript</a></li>
            <li><a href="../../index.html#bt2">HTML và CSS</a></li>
        </ul>
    </div>
    <!-- _________________________________________________________________________________ -->