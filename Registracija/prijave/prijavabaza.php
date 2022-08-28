<?php
session_start();
if(isset($_REQUEST['name']) && isset($_REQUEST['password']))
{
    $ime=$_REQUEST['name'];
    $password=$_REQUEST['password'];

    include "../dbconnection/connection.php";

    $upit="SELECT * FROM `users` WHERE users.username='".$ime."' or users.email='".$ime."' and users.password='".md5($password)."'";
    $result=$connection->query($upit);

    if($result->num_rows>0)
    {
        $row=mysqli_fetch_assoc($result);
        $_SESSION['ime']=$row['firstname'];
        $_SESSION['prezime']=$row['lastname'];

        header("Location: ../index.php");
    }
    else
    {
        header("Location: /prijave/prijava.php");
        setcookie("error-notification","Pogresan unos podataka",time()+(60*60*24),"/");
    }

}

?>