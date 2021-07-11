<?php

$db = mysqli_connect('localhost', 'root', '', 'robotarm');

if (isset($_POST['save'])){

    $v1 = $_POST['volume1'];
    $v2 = $_POST['volume2'];
    $v3 = $_POST['volume3'];
    $v4 = $_POST['volume4'];
    $v5 = $_POST['volume5'];
    $v6 = $_POST['volume6'];

 
   
$my_query = "";
$my_query = "select * from motors WHERE 1 ";
     $result = mysqli_query($db, $my_query);

$my_query = "INSERT INTO motors (motor1,motor2,motor3,motor4,motor5,motor6) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', $v6)";
$result = mysqli_query($db, $my_query);

if($result)
{
    echo "Item successfuly Added!";
}
else{
    echo "ERROR: Unable to past <br>";
}

}else if(isset($_POST['run'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from on_values WHERE 1 ";
    $result = mysqli_query($db, $my_query);

    $my_query = "INSERT INTO on_values (isOn) VALUES (1)";
    $result = mysqli_query($db, $my_query);
    if($result)
    {
        echo "Run successfully!";

    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}

?>

