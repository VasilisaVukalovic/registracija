<?php
include "../notification/notification.php";

session_start();
if(isset($_SESSION['ime']) && isset($_SESSION['prezime']))
{
    header("Location: /index.php");
}

?>
<!doctype html>
<html>
<head>
    <title>Студентски портал - пријаваСтудентски портал </title>
    <link rel="stylesheet" href="../css/podesavanja.css">
</head>
<body>
<div class="meniForm">
    <h3>Prijava</h3>
    <form action="./prijavabaza.php" method="get">
        <label for="name">Korisnicko ime ili e-adresa:</label><br>
        <input type="text" name="name" id="name"><br><br>

        <label for="password">Lozinka:</label><br>
        <input type="password" name="password" id="password"><br><br>


        <input type="submit" value="Prijavi se" id="prijava"><br><br>
        <label style="margin-left:70px; font-weight: bold">ili</label><br><br>
        <button id="registracija" ><a href="registracija.php" style="text-decoration: none;font-weight: bold;color:black; cursor: default;">Registruj se</a></button>
    </form>

</div>


</body>
</html