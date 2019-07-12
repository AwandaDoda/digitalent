<h3>Hitung Luas Persegi Panjang</h3>
<form action="cobamasukkan.php" method="post">
	Panjang:<input type="text" name="panjang <br>">
	Lebar:<input type="text" name="lebar <br>">
	<input type="submit" name="submit" value="hitung <br>">
</form>
<?php 
if (isset($_POST['submit'])){
	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];
	$luas = $panjang * $lebar;

	echo "Persegi panjang yang memiliki lebar: $lebar, dan panjang: $panjang, maka:<br>";
	echo "Luas: $luas <br>";
}

?>