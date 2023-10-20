<?php

echo "<style>
table {
   width: 100%;
   border-collapse: collapse;
}
th, td {
   padding: 15px;
   text-align: left;
   border-bottom: 1px solid #ddd;
}
tr:hover {background-color:#f5f5f5;}
</style>";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BookStore";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "SELECT Books.Title, Authors.Name, Books.Price FROM Books INNER JOIN Authors ON Books.AuthorID=Authors.AuthorID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // in ra dữ liệu của mỗi hàng
    echo "<table border='1'>";
    echo "<tr><th>Tên sách</th><th>Tác giả</th><th>Giá</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Title"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Price"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Không tìm thấy kết quả";
}
$conn->close();
