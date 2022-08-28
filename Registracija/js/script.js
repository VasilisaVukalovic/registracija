function provjeriKorisnickoIme()
{
    var xhr=new XMLHttpRequest();
    var izabranoIme=document.getElementById("korisnicko");
    xhr.onreadystatechange=function()
    {
        if(this.readyState==4 && this.state==200)
        {

            izabranoIme.style.border=this.responseText;

        }
    }
    xhr.open("GET","/ajax/provjeriusera.php?searchUser="+izabranoIme.value,true);
    xhr.send();


}