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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script type="text/javascript">
    $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
  </script>

  <!-- CSS -->
  <link rel="stylesheet" href="style/w3.css">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/indextest.css">
  <link rel="stylesheet" type="text/css" href="style/searchIndex.css">
  <link rel="stylesheet" type="text/css" href="style/mobile/styleMobile.css">
  </head>

<body>
  <div class="se-pre-con"></div>
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
            <div id="1Button" class="button color"></div>
            <div id="2Button" class="button color"></div>
            <div id="3Button" class="button color"> </div>
            <div id="profmenu">
              <div id="4Button" class="button color"></div>
              <ul >
                <li id="aButton" class="profBtn"></li>
                <li id="bButton" class="profBtn"></li>
                <li id="cButton" class="profBtn"><a onclick="document.getElementById('login').style.display='block'">Zaloguj się</a></li>
                <li id="dButton" class="profBtn"><a onclick="document.getElementById('register').style.display='block'">Zarejestruj się</a></li>
              </ul>
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
    <div class="auto categoryHelper">
      <div class="container">
          <!-- Pierwszy Rząd -->
            <div class="row">
              <div class="col">
                <a class="categoryA" href="search.php?kat=Praca">
                  <img class="index_cat_photo" src="style/image/index/work.png">
                  <div class="titleBOX">Praca</div>
                  
                </a>
              </div>
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Nieruchomości">
                    <img class="index_cat_photo" src="style/image/index/house.png">
                    <div class="titleBOX">Nieruchomości </div>
                    
                  </a>
              </div>
              <div class="col">
                <a class="categoryA" href="search.php?kat=Motoryzacja">
                  <img class="index_cat_photo" src="style/image/index/car.png">
                  <div class="titleBOX"> Motoryzacja</div>
                  
                </a>
              </div>
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Elektronika">
                    <img class="index_cat_photo" src="style/image/index/electronics.png">
                    <div class="titleBOX"> Elektronika </div> 
                  </a>
              </div>
            </div>
            <!-- Drugi Rząd -->
            <div class="row">
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Dom+i+ogród">
                    <img class="index_cat_photo" style="margin-top: 10px;" src="style/image/index/garden.png">
                    <div class="titleBOX">Dom i Ogród</div>
                  </a>
                  
              </div>
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Moda">
                    <img class="index_cat_photo" src="style/image/index/moda.png" >
                    <div class="titleBOX">Moda</div>
                  </a>
                  
              </div>
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Zwierzęta">
                    <img class="index_cat_photo" src="style/image/index/dog.png">
                    <div class="titleBOX">Zwierzęta</div>
                  </a>
                  
              </div>
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Rolnictwo">
                    <img class="index_cat_photo" src="style/image/index/snope.png">
                    <div class="titleBOX">Rolnictwo</div>
                  </a>
                  
              </div>
            </div>
            <!-- Trzeci Rząd -->
            <div class="row">
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Dzieci">
                    <img class="index_cat_photo" src="style/image/index/kids.png">
                    <div class="titleBOX">Dla Dzieci</div>
                  </a>
                  
              </div>
              <div class="col">
                <a class="categoryA" href="search.php?kat=Hobby+i+sport">
                  <img class="index_cat_photo" src="style/image/index/sport.png">
                  <div class="titleBOX">Hobby i Sport</div>
                </a>
                  
              </div>
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Muzyka">
                    <img class="index_cat_photo" src="style/image/index/music.png">
                    <div class="titleBOX">Muzyka</div>
                  </a>
                  
              </div>
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Edukacja">
                    <img class="index_cat_photo" src="style/image/index/education.png">
                    <div class="titleBOX">Edukacja</div> 
                  </a>
                  
              </div>
            </div>
            <!-- Czwarty Rząd -->
            <div class="row">
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Firmy+i+usługi">
                    <img class="index_cat_photo" src="style/image/index/firmy.png">
                    <div class="titleBOX">Firmy i Usługi</div>
                  </a>
                  
              </div>
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Oddam+za+darmo">
                    <img class="index_cat_photo" src="style/image/index/free.png">
                    <div class="titleBOX">Za Darmo</div>
                  </a>
                  
              </div>
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Zamienię">
                    <img class="index_cat_photo" src="style/image/index/change.png">
                    <div class="titleBOX">Zamienię</div>
                  </a>
              </div>
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Różne">
                    <img class="index_cat_photo" src="style/image/index/various.png">
                    <div class="titleBOX">Różne</div>
                  </a>
                  
              </div>
            </div>
            <!-- END OF C4T3G0R135 -->



</div>
          </div>
          <div id="helper">
          <div class=" auto container" id="latestAdds">
            <?php
              require_once 'php/connect.php';
require_once 'php/secure_query.php';
mysqli_set_charset($link,"utf8");

    

function DisplayResults($raw_results){    
    if(mysqli_num_rows($raw_results) > 0)      
    {
      $limit = 16;
        while($row = mysqli_fetch_assoc($raw_results))
        {
          if($limit <= 0){
            return;
          }
          if(($row['visibility'] == 'active') && ($row['status'] == 'approved')){
            $limit -= 1;
            $mon = array("Stycznia ","Lutego ","Marca ","Kwietnia ","Maja ","Czerwca ","Lipca ","Sierpnia ","Września ","Października ","Listopada ","Grudnia ");
            $today = date("y-m-d");
            $oDate = new DateTime($row['posting_date']);
            $dDate = $oDate->format("d ");
            $mDate = $mon[$oDate->format("n")-1];
            $yDate = $oDate->format("Y");
            $printedDate ='';
            $cost = '';
            $price = $row['price'];
            if($price == '0.00'){
              $cost = 'Za Darmo';
            }
            else
            {
              if($price > 999)
              {
              $cost = number_format($price, 0, ',', ' ');
              $cost .= " zł";
            }
            }


            if($oDate->format("y-m-d") == $today)
            {
              $printedDate = 'Dzisiaj';
            }
            else
            {
              if (date("Y") == $yDate) {
                $printedDate = ($dDate.''.$mDate);
              }
              else if (date("Y") != $yDate) {
                $printedDate = ($dDate.''.$mDate.''.$yDate);
              }
            }
            echo('<a class="announ" href="AnnounView.php?id='.$row['id'].'"; ><div class="announTit"><h3>'.$row['title'].'</h3><div class="category">'.$row['category'].'</div><div class="date">'.$cost.'</div></div>');

            $file = base64_encode( $row['image1']);
            if($file == '') {
              $file = base64_encode( $row['image2']);
              if($file == '') {
                $file = base64_encode( $row['image3']);
                if($file == '') {
                  $file = base64_encode( $row['image4']);
                  if ($file == '') {
                    $file = base64_encode( $row['image5']);
                    if ($file =='') {
                      $file = base64_encode( $row['image6']);
                      if ($file =='') {
                        echo('<div class="announPic">BRAK ZDJĘCIA</div></a> ');
                      }
                      else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a>');}
                    }
                    else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a>');}
                  }
                  else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a>');}
                }
                else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a>');}
              }
              else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a>');}
            }
            else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a>');}
            
          }
        }          
    }
}
DisplayResults(mysqli_query($link, "SELECT DISTINCT * FROM `adverts` WHERE visibility = 'active' & status = 'approved' ORDER BY posting_date DESC"));

            ?>
            
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
          <a href="https://www.flaticon.com/free-icon/dog_141722">Informacje dotyczące przetwarzania plików cookies</a>
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
        <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Zamknij okno">&times;</span>
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
        <span class="w3-right w3-padding w3-hide-small"><a onclick=location.href="passwordReset.php" style="cursor:pointer;">Nie pamiętasz hasła?</a></span>
        <span class="w3-right w3-padding w3-hide-small"><a onclick="document.getElementById('login').style.display='none'; document.getElementById('register').style.display='block'" style="cursor:pointer;">Nie masz konta?</a></span>
      </div>

    </div>
  </div>
</div>


<!-- Modal Rejestracja -->

  <div id="register" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:700px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('register').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Zamknij okno">&times;</span>
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
          
          <input type="checkbox" name="RegReg" id="reg" required><label for="reg"><b>Akceptuję <a href="pliki/regulamin.pdf" target="_blank" title="Kliknij by zapoznać się z regulaminem ETTE">regulamin</a> strony ETTE</b></label><br /><br />
          
          <input type="checkbox"  name="RegRodo" id="rodo" required><label for="rodo"><b>Akceptuję <a href="pliki/rodo.pdf" target="_blank" title="Kliknij by zapoznać się z RODO">RODO</a></b></label><br /><br />
          

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
</div>
</body>
</html>