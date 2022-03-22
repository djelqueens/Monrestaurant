<?php

$connection = mysqli_connect("gourmet", " " , " ");
if (mysql_connect_errno()) {
	echo "Erreur de connection à mysql";
	
	echo $_POST['civilite'];
echo $_POST['name'];
$sql="INSERT INTO reservatiion(nomcli) VALUES ('$_POST[name]')";
}
?>