<?php 

include "phpqrcode-master/qrlib.php";

QRcode::png('https://elearning.sttbandung.ac.id', 'kode.png', 'L', 16, 1);

echo "<center><img src='kode.png' /></center>";

?>