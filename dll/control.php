<?php 

    $val_7	= $_POST['data_pin_7'];
    $host	="localhost"; 
    $user	="root"; 
    $pass	=""; 
    $db		="iot"; 
    $conn_7 	= mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
    $mysqli_7	= "INSERT INTO pin_7 (id,pin_value) VALUES (NULL, '$val_7')";    
    $result	= mysqli_query($conn_7, $mysqli_7);  
    echo "Input berhasil 7 : ";         
    mysqli_close($conn_7);
    echo "$val_7"; 

    $val_13	= $_POST['data_pin_13'];
    $host	="localhost"; 
    $user	="root"; 
    $pass	=""; 
    $db		="iot"; 
    $conn_13 	= mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
    $mysqli_13	= "INSERT INTO pin_13 (id,pin_value) VALUES (NULL, '$val_13')";    
    $result	= mysqli_query($conn_13, $mysqli_13);  
    echo "Input berhasil 13 : ";         
    mysqli_close($conn_13);
    echo "$val_13"; 




    



// $val_7 = $_POST['data_pin_7'];
// echo "$val_7";





?>
