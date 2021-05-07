</head>
<body>
<?php
  
  $siswa = array("regi", "bobby", "ahmad");
  $siswa[]="bobby";
  print_r($siswa);
  //menampilkan bobby
  echo "<br>";
echo $siswa[1];
  $trainer = ["abduh", "aghnat", "yoga"];
  //menampilkan abduh
  echo "<br>";
  echo $trainer[0];
  print_r($trainer);

?>

</head>
<body>
<?php
echo "<br>";
$nilai = [12, 14, 19];
// akan menampilkan 12 yang merupakan elemen array indeks ke 0
echo $nilai[0];
?>

</head>
<body>
<?php
echo "<br>";
  $siswa = array("regi", "bobby", "ahmad");
  // siswa awal sebelum ditambah
  print_r($siswa);
  $siswa[] = "putri";
  // menampilkan siswa setelah ditambah data baru "putri"
  print_r($siswa);
?>

</body>
</html>