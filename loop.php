<!--
$loop = 1 = "Aku Data ke- " . $i . " dan mendapatkan mendali emas<br>";
$loop = 2 = "Aku Data ke- " . $i . " dan mendapatkan mendali perak<br>";
$loop = 3 = "Aku Data ke- " . $i . " dan mendapatkan mendali perunggu<br>";
$loop = 4 s/d 6 = "Aku Data ke- " . $i . " dan mendapatkan tas laptop<br>";
$loop = 7 s/d 9 = "Aku Data ke- " . $i . " dan mendapatkan tas karung<br>";
$loop >= 10 = "Aku Data ke- " . $i . " dan tidak mendapatkan apapun<br>";
-->

<?php
$loop = 20;
$num = 1;
for ($i = 0; $i <= $loop; $i++) {
  if ($i == 1) {
    echo "Aku Data ke- " . $num++ . " dan mendapatkan mendali emas<br>";
  } elseif ($i == 2) {
    echo "Aku Data ke- " . $num++ . " dan mendapatkan mendali perak<br>";
  } elseif ($i == 3) {
    echo "Aku Data ke- " . $num++ . " dan mendapatkan mendali perunggu<br>";
  } elseif ($i >= 4 && $i <= 6) {
    echo "Aku Data ke- " . $num++ . " dan mendapatkan mendali tas laptop<br>";
  } elseif ($i >= 7 && $i <= 9) {
    echo "Aku Data ke- " . $num++ . " dan mendapatkan mendali tas karung<br>";
  } elseif ($i >= 10) {
    echo "Aku Data ke- " . $num++ . " dan tidak mendapatkan apapun<br>";
  }
}
