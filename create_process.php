<?php
$conn = mysqli_connect("localhost","root","111111","phpwithmysql");
$query ="INSERT INTO 
topic(title,description,Tcreated) 
VALUES('{$_POST['title']}','{$_POST['desc']}',NOW())";
$result = mysqli_query($conn, $query);
if($result === false) {
    echo "Something error during store processing <a href='/index.php'>Go first page</a>";
	error_log(mysqli_error($conn));
} else {
    echo "Success Uploaded <a href='/index.php'>Go first page</a>";
    
}
?>
<!-- header('Location: /index.php?id='.$_POST['title']); -->