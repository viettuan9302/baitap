<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng số</title>
</head>
<body>
    <h1>Mẩng số</h1>
    <?php 
        $arr = array("xin","chào","bạn");
        echo "<p> $arr[0]";
        echo "<p> $arr[1]";
        echo "<p> $arr[2]";
        $arr = array(5=>"xin","chào","bạn");
        echo "<p> $arr[5]";
        echo "<p> $arr[6]";
        echo "<p> $arr[7]";
        echo "<hr/>";
        $arr = array("xin","chào","bạn");
        echo "<p> $arr[0]";
        // echo "<p> $arr[]";
        // echo "<p> $arr[]";
        $name[0]="Trịnh";
        $name[1]="Văn";
        $name[2]="Trịnh";
        echo "<h3> Xin chào: $name[0],$name[1], $name[2] </h3> ";
        echo "<hr/>";
        $coutries = array ("us"=>"United State",
        "uk"=>"United Kigdom", "vn"=>"Vietnam");
        print_r($coutries);
        echo "<hr/>";
        echo "<h2>Mảng nhiều chiểu </h2> ";

        $products = array(
            array("100", "Iphone", 1200),
            array("100", "Samsung", 1000),
            array("100", "LG", 200),
            array("100", "ABC", 1500),
        );
        echo "<p>".$products[0][0];
        echo "Danh sách";
        for ($row = 0; $row < 4; $row++){
            for($col = 0 ;$col<3; $col++){
                echo $products [$row][$col]."";
            }
            echo"<p>";
        }
        echo "<hr/>";
        echo "<p> số phần tử:".count($products);
        echo "<p>".is_array($products);

        $arr = array("a"=>"Dog", "b"=>"Cat", "c"=>"Horse");
        echo "<p>".$arr["d"];
        if(array_key_exists("d",$arr)){
            echo "<p>".$arr["d"];
        }else{
            echo "<p>không tồn tại 'd'";
        }

        //Hàm array_keys
        $arr = array("a"=>"Dog", "b"=>"Cat", "c"=>"Horse");
        foreach(array_keys($arr) as $key){
            echo "<p>".$key;
        }
        echo "<hr/>";
        print_r(array_keys($arr));
    ?>
</body>
</html>