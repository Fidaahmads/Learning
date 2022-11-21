<h1> Hello Doumou!!</h1>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "idbc";

include "connect.php";

    mysqli_query($koneksi,"update datebasa set
  
  Year='$_POST[Year]',
  Month='$_POST[Month]',
  Date='$_POST[Date]',
  Mon='$_POST[Month]',
  Tue='$_POST[Tue]',
  Wed='$_POST[Wed]',
  Thu='$_POST[Thu]'
where   id='$_POST[id]'");
   



    echo "Data baru telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='datebayo.php'>";

?>


