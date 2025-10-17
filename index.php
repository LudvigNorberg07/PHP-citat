<!DOCTYPE html>
<?php
$host="localhost";
$user="root";
$pass="";
$dbname="citat";
$conn=mysqli_connect($host,$user,$pass,$dbname);

if(isset($_POST["btn"])){
    $citatet=$_POST["Cit"];
    $ursprung=$_POST["Ur"];
    $sql="INSERT INTO citat(Citat, Ursprung) VALUES ('$citatet','$ursprung')";
    $result=mysqli_query($conn,$sql);
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="Cit" placeholder="Skriv in Citatet" requierd>
        <input type="text" name="Ur" placeholder="Skriv ursprunget av citatet" requierd>
        <input type="submit" value="lagra citat" name="btn">
    </form>
    <?php
    $sql="SELECT * FROM citat";
    $result = mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($result)){ ?>
        <article>
            <h3><?=$row['Citat']?></h3>
            <h4>-<?=$row['Ursprung']?></h4>
        </article>
    
    <?php } ?>


</body>
</html>