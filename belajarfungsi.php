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
        function greetings($nama){
            echo "Hai $nama, Selamat Datang di Multimedia Penus"."<br>";
        }

        greetings("mikael");
        greetings("angga");
        greetings("brandon");
        greetings("bagas");
        
          //code function disini
          function reverseString($str){
              $i = strlen($str) - 1;
              for ($j = 0; $j <$i; $j++){
                  $temp = $str[$i];
                  $str[$i] = $str[$j];
                  $str[$j] = $temp;
                  $i--;
              };
              echo "$str <br>";
          }
          reverseString ("Anggahe");
          reverseString ("Noellio");
          reverseString ("Gabriel");
          echo "<br>";

          //no 3
          function palindrome($str){
              $old_str = $str;
              $i = strlen($str) - 1;
              for ($j = 0; $j < $i; $j++){
                  $temp = $str[$i];
                  $str[$i] = $str[$j];
                  $str[$j] = $temp;
                  $i--;
              };

              if ($str == $old_str){
                  echo "kata $old_str merupakan kalimat palindrome <br>";
              } else {
                  echo "kata $old_str bukan kalimat palindrome <br>";
              };
          }
          // Hapus komentar di bawah ini untuk jalankan code
          palindrome("civic") ; // true
          palindrome("nababan") ; // true
          palindrome("jambaban"); // false
          palindrome("racecar"); // true
        ?>
</body>
</html>