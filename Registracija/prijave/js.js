function provjera()
{
    var ime=document.getElementById("ime").value;
    var prezime=document.getElementById("prezime").value;
    var adresa=document.getElementById("adresa").value;
    var lozinka=document.getElementById("lozinka").value;
    var plozinka=document.getElementById("plozinka").value;
    var indeks=document.getElementById("indeks").value;

    var prenos=true;

    if(ime=="" || prezime=="" ||  adresa=="" || lozinka=="" || plozinka=="" || indeks=="" )
    {

        alert("Unesite sva polja");
        prenos=false;
    }
    if(lozinka!=plozinka)
    {
        alert("Lozinke razlicite");
        prenos=false;
    }
    return prenos;
}