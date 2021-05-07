<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $hari = "Rabu";
    if($hari == "Kamis"){
        //hasil jika benar
        echo "I Love Wednesday";
    }else{
        //hasil jika salah
        echo "ini bukan hari Rabu";
    }
    echo "<br>";
    echo "<br>";
    $nilai = 60;

    if($nilai < 85){
        echo "nilai anda B";
    }else if ($nilai < 60){
        echo " nilai anda C";
    }else{
        echo "nilai anda A";
    }
    ?>
</body>
</html>