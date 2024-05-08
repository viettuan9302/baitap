<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 1</title>
</head>
<body>
    <h1>Bài thực hành 01: sử dụng cú pháp PHP echo để in ra đoạn văn</h2>
    <?php 
        //khai báo biến trong php
        /**
         * sử dụng echo và print_r
         * kết thúc môi câu lệnh là dấu ;
         */

        $txt="<h1> Học lấp trình web tại DEV</h1>";
        echo $txt;
        echo'làm quen với HTML <br/>';
        echo'Các thẻ html cơ bản <br/>';
        echo'làm việc với JS <br/>';
        print_r("PHP cơ bản<br/>");
        echo'Kết nối CSDL MySql <br/>';
        echo'Framework MVC trong php <br/>';
    ?>
</body>
</html>