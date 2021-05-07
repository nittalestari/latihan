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
 
$items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
];

// Output :

$arr_socc = [];
foreach ($items as $itm) {
    $arr_socc[] =array(
    'id' => $itm[0],
    'name' => $itm[1],
    'price' => $itm[2],
    'description' => $itm[3],
    'source' => $itm[4],
    );
};

foreach($arr_socc as $arr){
    print_r($arr);
    echo "<br>";
}
echo "<br>";
echo "Asterix: <br>";
for ($i=0; $i < 5 ; $i++){
    for ($j=0; $j < 5;$j++) {
        if ($j <= $i) {
            echo '*';
        } else{
            echo '';
        }
    }
    echo "<br>";
}
echo "<br>";
?>
</body>
</html>