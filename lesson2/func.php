<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàm trong php - Hàm người dùng định nghĩa</title>
</head>
<body>
    <h1>Hàm trong php - Hàm người dùng định nghĩa</h1>
    <?php
        // DDingj nghĩa 
        function fnHi($param){
            echo "<h2>Welcom to,".$param;
        }
        //Gọi thực hiện hàm
        fnHi("Chung Trịnh");

        // Hàm trả về giá trị
        function fnCalc($a, $b){
            $c= $a+$b;
            return $c;        
        }
        // gọi thực hiện
        echo "<p>".fnCalc(10,12);
        echo "<p>".fnCalc(10,22);
        echo "<p>".fnCalc(10,33);
        echo "<p>".fnCalc(10,44);

        function fnCalculator($a=100,$b){
            $c= $a+$b;
            return $c;  
        }
        echo "<p>".fnCalculator(10,12);
        echo "<p>".fnCalculator(33);
        echo "<hr/>;";

        function fnBirthday(){
            $age=22; //Biến cụ bộ
            echo "chúc mừng tuổi $age";
        }
        fnBirthday();

        function fnBirthday1(){
            global $age; // sử dụng hiến toàn cục
            echo "chúc mừng tuổi $age";
        }
        fnBirthday1();
        echo "<hr/>";
    ?>
</body>
</html>