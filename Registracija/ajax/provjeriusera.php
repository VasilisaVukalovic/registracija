<?php
include "../dbconnection/connection.php";
if(isset($_REQUEST['searchUser']))
{
    $upit="SELECT * FROM `users` WHERE users.username=".$_REQUEST['searchUser'];
    $result=$connection->query($upit);

    if($result->num_rows==0)
    {
        echo "1px solid red";
    }
    else
    {
        echo "1px solid blue";
    }
}
else
    echo "error";
?>