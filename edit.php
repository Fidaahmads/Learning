<h1> Hello Doumou!!</h1>

<?php


include "connect.php";

$sql=mysqli_query($koneksi,"select * from datebasa where id='$_GET[id]'");
$row=mysqli_fetch_array($sql);
 {

  ?>

  <form action="http://localhost/Learning/update.php" method="POST"> 
  
  <?php

  ?>
  
  <label>Masukkan Data Year</label><br>
  <input type="text" name="Year" value="<?php echo $row["Year"] ?>"><br>
  
  <label>Masukkan Data Month</label><br>
  <input type="text" name="Month" value="<?php echo $row["Month"] ?>"><br>
  
  <label>Masukkan Data Date</label><br>
  <input type="text" name="Date" value="<?php echo $row["Date"] ?>"><br>

  <label>Masukkan Data Mon</label><br>
  <input type="text" name="Mon" value="<?php echo $row["Mon"] ?>"><br>

  <label>Masukkan Data Tue</label><br>
  <input type="text" name="Tue" value="<?php echo $row["Tue"] ?>"><br>

  <label>Masukkan Data Wed</label><br>
  <input type="text" name="Wed" value="<?php echo $row["Wed"] ?>"><br>

  <label>Masukkan Data Thu</label><br>
  <input type="text" name="Thu" value="<?php echo $row["Thu"] ?>"><br>
  
  <input type="hidden" name="id" value="<?php echo $row["id"] ?>"><br>

      <input type="submit" value="Kirim">

</form>
<?php
}
 

?>




