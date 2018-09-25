<html>
<head>
<title></title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
<input type="file" name="Foto"></br>
Hobbi : </br>
<input type="checkbox" name="hobi[]" value="Makan">Makan </br>
<input type="checkbox" name="hobi[]" value="Minum">Minum </br>
<input type="checkbox" name="hobi[]" value="Tidur">Tidur </br>
<input type="checkbox" name="hobi[]" value="Browsing">Dengerin musik</br>
<input type="submit" name="submit" value="Input">
</form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
	$foto=$_POST['Foto'];
	$hobbi= $_POST['hobbi'];
	echo "<img src='Gambar'>";
}

?>