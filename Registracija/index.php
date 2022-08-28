<style>
    <?php include "./css/podesavanja.css" ?>
</style>

<?php
session_start();
if(!isset($_SESSION['ime']) && !isset($_SESSION['prezime']))
{
    header("Location: /prijave/prijava.php");
}
?>
<div class="zaglavlje">

    <h2>Pocetna stranica</h2>
    <div class="imeOblik">
        <span><?=$_SESSION['ime']." "  .$_SESSION['prezime']?></span>
        <span onclick="window.location='/odjava/odjava.php'"  style="color: red; margin-left: 8px; cursor: pointer; ">Odjavi se</span>
    </div>
</div>