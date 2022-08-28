<?php
if(isset($_REQUEST['ime']) && isset($_REQUEST['prezime']) && isset($_REQUEST['korisnicko']) && isset($_REQUEST['adresa'])
    && isset($_REQUEST['lozinka'])
    && isset($_REQUEST['plozinka']) && isset($_REQUEST['indeks']) )
{
    $ime=$_REQUEST['ime'];
    $prezime=$_REQUEST['prezime'];
    $korisnicko=$_REQUEST['korisnicko'];
    $adresa=$_REQUEST['adresa'];
    $lozinka=$_REQUEST['lozinka'];
    $plozinka=$_REQUEST['plozinka'];
    $indeks=$_REQUEST['indeks'];

    include "../dbconnection/connection.php";

    $br_usera=0;
    $upit1="SELECT * FROM `users`";
    $result=$connection->query($upit1);


    if($result->num_rows>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
           $br_usera++;

        }


    }

    $br_usera++;




    $upit="INSERT INTO `users`(`ID`, `firstname`, `lastname`, `username`, `password`, `email`, `stud_id`)
           VALUES (".$br_usera.",'".$ime."','".$prezime."','".$korisnicko."','".md5($lozinka)."','".$adresa."', '".$indeks."')";
    $connection->query($upit);

    header("Location: /prijave/registracija.php");

}
else
{
    echo "error";

}
?>

