﻿<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>ETTE</title>
  <meta charset="utf-8">

  <!-- FlexBox -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/index.css">
  </head>

<body>
  <header>
    <div class="header"> 
      <div class="auto"> 
        <div class="menu">
          <div class="logo">
            <div class="blue">E</div>
            <div class="red">TT</div>
            <div class="blue">E</div>
          </div>
          <div class="buttonPanel">
            <div id="1Button" class="button color"></div>
            <div id="2Button" class="button color"></div>
            <div id="3Button" class="button color"> </div>
            <div id="profmenu" class="sub-menu-parent">
              <div id="4Button" class="button color"></div>
              <ul class=sub-menu>
                <li id="aButton" class="profBtn"></li>
                <li id="bButton" class="profBtn"><a onclick="document.getElementById('login').style.display='block'">Zaloguj się</a></li>
                <li id="cButton" class="profBtn"><a onclick="document.getElementById('register').style.display='block'">Zarejestruj się</a></li></li>
              </ul></div>
          </div>
      </div>
    </div>
    <div id="search" class="auto">
      <form method="get" action="search.php">
        <div id="sBar" class="auto">
          <div id="sText">
            <input type="text" name="search" placeholder="Czego szukasz?">
          </div>

          <div id="sCat">
            <select name="kat">
              <option value="Praca">Praca</option>
              <option value="Nieruchomości">Nieruchomości</option>
              <option value="Motoryzacja">Motoryzacja</option>
              <option value="Elektronika">Elektronika</option>
              <option value="Dom i Ogród">Dom i Ogród</option>
              <option value="Moda">Moda</option>
              <option value="Zwierzęta">Zwierzęta</option>
              <option value="Rolnictwo">Rolnictwo</option>
              <option value="Dla Dzieci">Dla Dzieci</option>
              <option value="Hobby i Sport">Hobby i Sport</option>
              <option value="Muzyka">Muzyka</option>
              <option value="Edukacja">Edukacja</option>
              <option value="Firmy i Usługi">Firmy i Usługi</option>
              <option value="Oddam za Darmo">Oddam za Darmo</option>
              <option value="Zamienię">Zamienię</option>
              <option value="Różne">Różne</option>
            </select>
          </div>
          <div id="sSubmit"><input type="submit" name="Szukaj" value="Szukaj"></div>
        </div>
      </form>
    </div>
  </header>


  <section>
    <div class="auto">
      <div class="container">
          <!-- Pierwszy Rząd -->
            <div class="row">
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Praca">Praca </a></div>
                  <img class="index_cat_photo" src="style/image/index/work.png">
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Nieruchomości">Nieruchomości </a></div>
                  <img class="index_cat_photo" src="style/image/index/house.png">
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Motoryzacja"> Motoryzacja </a></div>
                  <img class="index_cat_photo" src="style/image/index/car.png">
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Elektronika"> Elektronika </a></div>
                  <img class="index_cat_photo" src="style/image/index/electronics.png">
              </div>
            </div>
            <!-- Drugi Rząd -->
            <div class="row">
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Dom+i+ogród"> Dom i Ogród </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Moda"> Moda </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Zwierzęta"> Zwierzęta </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Rolnictwo"> Rolnictwo </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
            </div>
            <!-- Trzeci Rząd -->
            <div class="row">
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Dzieci"> Dla Dzieci </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Hobby+i+sport"> Hobby i Sport </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Muzyka"> Muzyka </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Edukacja"> Edukacja </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
            </div>
            <!-- Czwarty Rząd -->
            <div class="row">
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Firmy+i+usługi"> Firmy i Usługi </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Oddam+za+darmo"> Oddam za Darmo </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Zamienię"> Zamienię </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
              <div class="col-sm-3">
                  <div class="titleBOX"><a class="categoryA" href="search.php?kat=Różne"> Różne </a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
              </div>
            </div>

        </div>    
  </section>

  
  <footer>
    <div class="auto">
      <div class="column">
        <h5>Media Społecznościowe</h5>
        <div class="row"><a href="http://facebook.pl" target="_blank">Facebook</a></div>
        <div class="row"><a href="http://www.instagram.com" target="_blank">Instagram</a></div>
        <div class="row"><a href="http://twitter.com" target="_blank">Twitter</a></div>
      </div>

      <div class="column">
        <h5>Kontakt</h5>
        <div class="row"><a href="mailto:przykladowy.email@ette.de">przykladowy.email@ette.de</a></div>
        <div class="row"><a href="https://goo.gl/maps/oMKDB2XsR8D2" target="_blank">rondo Wiatraczna<br>
        03-982 Warszawa</a></div>

      </div>

      <div class="column">
        <h5>Informacje</h5> 
        <div class="row">
          <a href="">Informacje dotyczące przetwarzania plików cookies</a>
        </div>

        <div class="row">
          <a href="">Dane diagnostyczne</a>
        </div>

        <div class="row">
          
        </div>
      </div>
    </div>
  </footer>


<!-- Modal Login -->


  <div id="login" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:700px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <h2>Dobrze Cię widzieć!</h2>
      </div>

      <form method="post" action="php/login.php">
        <div class="w3-section">
          <label><b>Login</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Wpisz Login" name="login" required>
          <label><b>Hasło</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Wpisz Hasło" name="password" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Zaloguj</button>
          <div id="login-panel-message"></div>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Zapamiętaj mnie
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('login').style.display='none'" type="button" class="w3-button w3-red">Anuluj</button>
        <span class="w3-right w3-padding w3-hide-small"><a onclick=location.href="/php/account_recovery.php" style="cursor:pointer;">Nie pamiętasz hasła?</a></span>
        <span class="w3-right w3-padding w3-hide-small"><a onclick="document.getElementById('login').style.display='none'; document.getElementById('register').style.display='block'" style="cursor:pointer;">Nie masz konta?</a></span>
      </div>

    </div>
  </div>
</div>


<!-- Modal Rejestracja -->

  <div id="register" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:700px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('register').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <h2> Zaczynajmy!</h2>

      </div>

      <form method="post" action="">
        <div class="w3-section">
          <label><b>Login</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Wpisz Login" name="RegLogin" required>
          <div id="loginErr" class="err"></div><br>

          <label><b>E-Mail</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Wpisz E-Mail" name="RegMail" required>
          <div id="mailErr" class="err"></div><br>

          <label><b>Twoje hasło</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Hasło" name="RegPasswd" required>
          <div id="passErr" class="err"></div><br>

          <label><b>Powtórz hasło</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Powtórz hasło" name="RegPasswd2" required>
          <div id="pass2Err" class="err"></div><br>

          <label><b>Numer telefonu</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Numer telefonu" name="RegPhone" required>
          <div id="phoneErr" class="err"></div><br>
          
          <input type="checkbox" required><b>Zapoznałem/Zapoznałam się z <a href="pliki/regulamin.pdf" target="_blank" title="Kliknij by zapoznać się z regulamin ETTE">regulaminem</a> strony ETTE</b><br /><br />
          
          <input type="checkbox" required><b>Zapoznałem/Zapoznałam się z <a href="pliki/rodo.pdf" target="_blank" title="Kliknij by zapoznać się z RODO">RODO</a></b><br /><br />
          

          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Zakończ rejestrację!</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('register').style.display='none'" type="button" class="w3-button w3-red">Anuluj</button>
        <span class="w3-right w3-padding w3-hide-small"><a onclick="document.getElementById('register').style.display='none'; document.getElementById('login').style.display='block'" style="cursor:pointer;">Masz już konto?</a></span>
      </div>

    </div>
  </div>
</div>

<!-- Modal END -->


<?php
  if(isset($_GET['redirected'])){
    $red = $_GET['redirected'];
    if($red == "true"){
      echo "<script type='text/javascript'>document.getElementById('login').style.display='block'</script>";
    }
  }
  if(isset($_GET['error'])){
    $err = $_GET['error'];
    if($err == "badloginpasswd"){
      echo "<script type='text/javascript'>document.getElementById('login-panel-message').innerHTML='Nieprawidłowy login lub hasło'</script>";
    }
    else if($err == "unconfirmedaccount"){
      echo "<script type='text/javascript'>document.getElementById('login-panel-message').innerHTML='Twoje konto nie zostało aktywowane - sprawdź swoją skrzynkę email'</script>";
    }
  }
  require 'php/page_format.php';
  require 'php/reg.php';
  ?>
</body>
</html>