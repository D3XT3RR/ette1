<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ETTE</title>

  <!-- FlexBox -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" href="style/w3.css">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/settings.css">
  <link rel="stylesheet" type="text/css" href="style/mobile/styleMobile.css">
</head>

<body>
  <header>
    <div class="header"> 
      <div class="auto"> 
        <div class="menu">
          <a href="/" class="logo">
            <div class="blue">E</div>
            <div class="red">TT</div>
            <div class="blue">E</div>
          </a>
          <div class="buttonPanel">
            <div id="3Button" class="button color"></div>
            <div id="profmenu">
              <button id="4Button" class="button color"></button>
              <ul >
                <li id="aButton" class="profBtn"><a onclick="document.getElementById('login').style.display='block'">Zaloguj się</a></li>
                <li id="bButton" class="profBtn"><a onclick="document.getElementById('register').style.display='block'">Zarejestruj się</a></li>
                <li id="cButton" class="profBtn"></li>
                <li id="dButton" class="profBtn"></li>
              </ul>
            </div>
          </div>
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
      <div id="settingsContainer">
        <div id="settingsMenu">
          <div id="contactButton"></div>
          <div id="passwordButton"></div>
          <div id="managmentButton"></div>
        </div>
        <div id="settings">

          <form action="settings.php" method="post">
          <div id="contact">
            <h2>Dane Kontaktowe</h2>
            <div class='flexContact'>
              <label>Imię</label>
              <div id=imieLBL class="contactLBL">
                <div class="edit"><input id="nameInput" type="text" name="name"></div>
              </div>
            </div>

            <div class='flexContact'>
              <label>Numer Telefonu</label>
              <div id=telefonLBL class="contactLBL">
                <div class="edit"><input id="numberInput" type="text" name="number"></div>
              </div>
            </div>

            <div class='flexContact'>
              <label>E-mail</label>
              <div id=mailLBL class="contactLBL">
                <div class="edit"><input id="emailInput" type="text" name="email"></div>
              </div>
            </div>

          </div>

          <div id="password">
            <h2>Hasło</h2>
            <div class='flexContact'>
              <label>Stare hasło</label>
              <div id=oldLBL class="contactLBL">
                <div  id="1edit" class="edit"><input type="password" name="oldpasswd" ></div>
              </div>
            </div>
            <div class='flexContact'>
              <label>Nowe hasło</label>
              <div id=newLBL class="contactLBL">
                <div id="2edit" class="edit"><input type="password" name="newpasswd" ></div>
              </div>
            </div>
            <div class='flexContact'>
              <label>Powtórz nowe hasło</label>
              <div id=newRLBL class="contactLBL">
                <div id="3edit" class="edit"><input type="password" name="newpasswd2" ></div>
                
              </div>
            </div>
          </div>

          <div id="management">
            <h2>Zgody marketingowe</h2>
              <div class='flexManagment'>
                <div class=agreeLBL>
                <input type="checkbox" name="">
              </div>
              <label>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
            </div>
                <div class='flexManagment'>
              
              <div class=agreeLBL>
                <input type="checkbox" name="">
              </div>
              <label>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
            </div>
              <div class='flexManagment'>
                
                <div class=agreeLBL>
                  <input type="checkbox" name="">
                </div>
                <div><label>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label></div>
              </div>

          </div>
        </div>
        <div><br><input type="submit" value="Aktualizuj"></div>
        </form>
      </div>
      </div>
  </section>
  

  <?php
include "php/footer.php";
include "php/modal.php";
?>





<?php
  require 'php/settings.php';
  require 'php/page_format.php';
  require 'php/reg.php';
  ?>
</body>
</html>