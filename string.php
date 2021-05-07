</head>
<body>
<?php
$passwordasli = "belajarPHP";
$passwordinput = "belajarPHp";
$cocok = strcmp($passwordasli, $passwordinput);
if ($cocok != 0)
  {
    echo "Password anda salah!";
  }
else
  {
    echo "Password anda benar.";
  }
?>

</head>
<body>
<?php
  $statement = "ini gak marah, cuman caps";
  
  // menampilkan INI GAK MARAH, CUMAN CAPS
  echo "<br>";
  echo strtoupper($statement);
  
  ?>
</head>
<body>
<?php
  $marah = "INI MARAH";
  
  // menampilkan ini marah
  echo "<br>";
  echo strtolower($marah);
?>

</head>
<body>
<?php
echo "<br>";
  $kalimat = "Saya sedang belajar PHP";
  $katayangdicari = "PHP";
  $posisi = strpos($kalimat, $katayangdicari);
  echo $posisi;
?>

</head>
<body>
<?php
echo "<br>";
$string = "Saya suka PHP";

// akan menampilkan suka PHP
echo substr($string, 5, 8);

// akan menampilkan PH
echo substr($string, -3, 2); 
?>

</body>
</html>