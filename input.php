<?php

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "mydb";
    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
      }

    $name = $_POST['name'];
    $text = $_POST['text'];
    $date = $_POST['date'];


    if(!mysqli_query($conn, "INSERT INTO mydb.CARD(user, text, date) VALUES('" . $name . "', '" . $text . "', '" . $date . "')")) {
     echo "Error: " . $sql . "" . mysqli_error($conn);
    } 

    mysqli_close($conn);

?>
