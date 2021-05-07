<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Berlatih Looping</h1>

<?php
  echo "<h3> Nitta Sabyan</h3>";
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";
    echo "LOOPING PERTAMA";
    for ($i=1;$i<22;$i++) {
        if($i%2==0) 
        {
        echo "<br/> $i - I Love PHP "; 
        }
    }
    echo "<br><br>";
    echo "LOOPING KEDUA";
    for ($i=20; $i >=0; $i-=2) {
        echo "<br/> $i - I Love PHP";
        }
echo "<br><br>";

echo "<h3>Soal No 2 Looping Array Modulo </h3>";
    $numbers =18;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    echo "<br>";
    $numbers =45;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    echo "<br>";
    $numbers =29;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    echo "<br>";
    $numbers =61;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    echo "<br>";
    $numbers =47;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    echo "<br>";
    $numbers =34;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    echo "<br>";

    echo "<h3> Soal No 3 Looping Asociative Array </h3>";
    for ($row = 1; $row <= 5; $row++)
    {
    for ($col = 1; $col <= 1; $col++)
        {
        echo "*" . "<br/>";
        }
    }
?>
</body>
</html>