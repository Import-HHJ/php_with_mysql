<?php
$conn = mysqli_connect("localhost","root","111111","phpwithmysql");
$sql = 'INSERT INTO topic(title,description,Tcreated) VALUES("Mysql","Mysql is ...",NOW())';
$result = mysqli_query($conn, $sql);
if($result === false) {
	echo mysqli_error($conn);
}

?>