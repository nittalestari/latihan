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
echo "<h3> Soal No 1</h3>";
$first_sentence = "Hello PHP!";// Panjang String 10, Jumlah Kata 2
$Panjang_string = strlen($first_sentence);
echo "Panjang String : $Panjang_string";
echo "<br>";
$second_sentence = "I'm ready for the challenge";
$Panjang_string = strlen($second_sentence);
echo "Panjang String : $Panjang_string";
echo "<br>";
$jumlah_kata = str_word_count($second_sentence);
echo "Jumlah kata : $jumlah_kata";
echo "<br>";

echo "<h3> Soal No 2</h3>";
/*
    SOAL NO 2
    Mengambil kata pada string dan karakter-karakter yang ada didalamnya.
*/
$string2 = "I Love PHP";

echo "<label>String: </label> \"$string2\" <br>";
echo "Kata Pertama:". substr($string2, 0, 1) . "<br>";
//Lanjutkan di bawah ini
echo "Kata Kedua: ". substr($string2, 2, 5) . "<br>";
echo "Kata Ketiga: ". substr($string2, 7, 10) . "<br>";

echo "<h3> Soal No 3 </h3>";
/*
Soal No 3
Mengubah karakter atau kata yang ada di dalam sebuah string.
*/
$string3 = "PHP is old but sexy!";
echo "String: \"$string3\" <br>";
echo "String: " . str_replace("sexy", "awesome", $string3) . "<br>";
// OUTPUT : "PHP is old but awesome"

?>

</body>
</html>