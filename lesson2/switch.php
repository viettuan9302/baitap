<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cấu trúc Switch case</title>
</head>
<body>
<?php
        //Giải phương trình
        if(isset($_POST["btnThucHien"])){
            $thang = $_POST;["thang"];
            $nam = $_POST;["nam"];
            $soNgay=0;
            switch($thang){
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    $soNgay=31; break;
                case 4:
                case 6:
                case 9:
                case 11:
                    $soNgay=30; break;
                case 2:
                    if($nam % 4 == 0 && $nam % 400 != 0){
                        $soNgay=29;
                    }else{
                        $soNgay=28; 
                    }
                    break;
                default
            }
        }
    ?>


    <h1>Cấu trúc Switch case</h1>
    <form action="" method="post">
        <h2>Tính số ngày trong tháng năm</h2>
        <div>
            <label for= "thang">Tháng</label>
            <input type= "number" id="thang" name="thang" value="<?php echo isset($thang)?$thang: '';?>"/>
        </div>
        <div>
            <label for= "nam">Năm</label>
            <input type= "number" id="nam" name="nam" value="<?php echo isset($nam)?$nam: '';?>"/>
        </div>
        <button name="btnThucHien">Thực hiện</button>
        <div><?php echo isset($soNgay)?$soNgay:''; ?></div>
    </form>
</body>
</html>