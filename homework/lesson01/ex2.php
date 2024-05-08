<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 2</title>
</head>
<body>
    <?php 
        echo "<h2> Khai báo sử dụng biến trong PHP</h2>";
        echo "khai báo biến a = 11.5";
        $a = 11.5;
        echo "giá trị biến a là $a<br/>";
        echo "kiểu giá trị của biến a".gettype($a)."<br/>";
        echo 'chuyển đổi dữ liệu của biến a về kiểu số nguyên <br/>';
        $a=(int)$a;
        echo "biển a đa chuyển đổi tư kiểu Double về kiểu nguyên".$a."--";
        echo gettype($a);
        echo '<br/>';
        echo "chuyển đổi biến a từ double về int của biến a<br/>";
        $a=(double)$a;
        echo "biến sau khi đã chuyển đổi có giá trị là $a.0  và kiểu".gettype($a)."<br/>";
        echo "chuyển đổi biến a từ kiểu double sang kiểu string<br/>";
        $a=(string)$a;
        echo "biến a sau khi đã chuyển đổi từ kiểu double sang string có giá '$a' và kiểu dữ liệu".gettype($a);
    ?>
</body>
</html>