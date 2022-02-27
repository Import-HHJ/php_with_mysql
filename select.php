<?php
$conn = mysqli_connect("localhost","root","111111","phpwithmysql");
$query = "SELECT * FROM topic";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result)){
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];
}
?>