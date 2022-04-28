<?php 

$connection =mysqli_connect("localhost","root","","ussd");

if($connection){
    echo"could not connet to database".mysqli_error($connection);
}

?>