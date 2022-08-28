
<?php
if(isset($_COOKIE['error-notification']))
{
?>
<div><?=$_COOKIE['error-notification']?></div>
<?php
  setcookie("error-notification","Niste unijeli sve elemente",time()-10,"/");
}
?>