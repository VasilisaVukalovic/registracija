<!doctype html>
    <html>
     <head>
         <title>Студентски портал - регистрацијаСтудентски портал - регистрација</title>
         <link rel="stylesheet" href="../css/podesavanja.css">
         <script src="js.js"></script>
     </head>
     <body>
     <div class="meniForm">
         <h2>Registracija</h2>
         <form action="upisubazu.php" method="get">
             <label for="ime">Ime:</label><br>
             <input type="text" name="ime" id="ime"><br><br>

             <label for="prezime">Prezime:</label><br>
             <input type="text" name="prezime" id="prezime"><br><br>

             <label for="korisnicko">Korisnicko ime:</label><br>
             <input type="text" name="korisnicko" id="korisnicko" onblur="provjeriKorisnickoIme()"><br><br>

             <label for="adresa">Adresa elektricne poste:</label><br>
             <input type="text" name="adresa" id="adresa"><br><br>

             <label for="lozinka">Lozinka:</label>
             <label for="plozinka" style="margin-left:128px"> Potvrda lozinka:</label><br>
             <input type="password" name="lozinka" id="lozinka">
             <input type="password" name="plozinka" id="plozinka" style="margin-left:20px"><br><br>

             <label for="indeks">Broj indeksa:</label><br>
             <input type="text" name="indeks" id="indeks"><br><br>

             <input type="submit" value="Registruj se" id="regist" onclick="return provjera()">


             <button id="prv"><a href="prijava.php">Prijavi se</a></button>


         </form>

     </div>
     </body>
    </html>