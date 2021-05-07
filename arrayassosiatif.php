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

$siswa1 = [ 
    'nama' => 'Muhammad Angga',
    'kelas' => 'XIIMM3',
    'nilai' => 70
          ];
print_r($siswa1);

// menambahkan key value baru ke array $siswa1
$siswa1["email"] = "abduh@mail.com";

print_r($siswa1);

</body>
</html>