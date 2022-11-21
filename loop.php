
<form action="/Learning/index.php" method="GET">
    <label>Masukkan Angka</label><br>
    <input type="text" name="Nilai"><br>
    <input type="submit" value= "Kirim">
</form>

<?php

$input = $_GET['Nilai'];

echo "input = $input<br/>";

for ($i = 1; $i <= $input; $i++) { 
    for ($j = 1; $j <= $i; $j++) { 
        echo "$i "; 
    }
    echo "$i ";
    echo "<br/>";
}
?>
