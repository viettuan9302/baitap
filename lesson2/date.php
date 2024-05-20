<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
           echo date("jS-F-Y");// Lấy ngày tháng năm hiện tại

           // hiển thị theo dạng: ngày th - tên tháng - năm
           echo "<br/>";
           echo date("M/Y"); // Hiển thị tháng/năm hiện tại
           echo "<br/>";
           echo "Days of:".date("M")."is".date("t");
           echo "<br/>";
           echo date("j-w-m-y");
           echo "<br/>";
           echo "Ngay ".date("j")."tháng ".date("m")."năm ".date("y")."tuần".date("w");
    ?>
</body>
</html>