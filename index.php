<?php 
$conn = mysqli_connect("localhost","root","111111","phpwithmysql");
$query = "SELECT * FROM topic";
$result = mysqli_query($conn,$query);
$list = "";
while($row = mysqli_fetch_array($result)){
    $list = $list."<li><a href = \"/index.php?id={$row['id']}\">{$row['title']}</a></li>";
}
?>

<?php
$toshow = array('title'=>"Welcome",'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus qui neque cupiditate at accusamus quisquam laborum dicta eum autem amet dolorem, officiis blanditiis dignissimos provident! Ex voluptate eos autem cum."); 
if(isset($_GET['id'])){
    $query = "SELECT * FROM topic WHERE id=".$_GET['id'];
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $toshow = array('title'=>$row['title'],'description'=>$row['description']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP with mysql</title>
</head>

<body>
    <h1><a href="/index.php">Web</a></h1>
    <ol>
        <?php echo $list; ?>
    </ol>
    <a href="/create.php">create</a>
    <h2><?=$toshow['title']?></h2>
    <?=$toshow['description']?>
</body>

</html>