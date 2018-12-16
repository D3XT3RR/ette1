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
  <link rel="stylesheet" href="style/announView.css">
  <link rel="stylesheet" href="style/gallery.css">
  <link rel="stylesheet" type="text/css" href="style/mobile/styleMobile.css">

  <script type="text/javascript" src="js/favourites.js"></script>
  <script type="text/javascript" src="js/gallery.js"></script>
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
    <div class="auto">
      <div class="container">
          <div id="title">
            <div id="tTXT"></div>
            <?php
		require_once 'php/secure_query.php';
		require_once 'php/connect.php';
		if(isset($_SESSION['user']) && isset($_GET['id'])){
			$usr = $_SESSION['user'];
			$result = secure_query($link, "SELECT Favourites FROM login WHERE ID = ?", $t = array('i'), $a=array(&$usr));
			$row = mysqli_fetch_row($result);
			$fav_arr = explode(',', $row[0]);
			if(in_array(@$_GET['id'], $fav_arr)){
				echo("<button title='Usuń z Ulubionych' onclick='RemoveFromFavourites(".@$_GET['id'].")'><img  src='style/image/ulubione.png'</button>");
			}
			else{
				echo("<button title='Dodaj do Ulubionych' onclick='AddToFavourites(".@$_GET['id'].")'><img  src='style/image/ulubione_nie.png'</button>");
			}
		}
              
            ?>
          </div>

          <div id="category">
            <div id="cTXT"></div>
          </div>
          <div id="photos">
           <div class="containerPhoto">
              <div class="mySlides photoBox" id="slide1">
                <div class="numbertext">1 / <div class="numberOFslides"></div></div>
                <img id="img-upload1" src=""/>
              </div>

              <div class="mySlides photoBox" id="slide2">
                <div class="numbertext">2 / <div class="numberOFslides"></div></div>
                <img id="img-upload2" src=""/>
              </div>

              <div class="mySlides photoBox" id="slide3">
                <div class="numbertext">3 / <div class="numberOFslides"></div></div>
                <img id="img-upload3" src=""/>
              </div>
    
              <div class="mySlides photoBox" id="slide4">
                <div class="numbertext">4 / <div class="numberOFslides"></div></div>
                <img id="img-upload4" src=""/>
              </div>

              <div class="mySlides photoBox" id="slide5">
                <div class="numbertext">5 / <div class="numberOFslides"></div></div>
                <img id="img-upload5" src=""/>
              </div>
    
              <div class="mySlides photoBox" id="slide6">
                <div class="numbertext">6 / <div class="numberOFslides"></div></div>
                <img id="img-upload6" src=""/>
              </div>
              
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
              
            </div>
            <div>
              <div class="rows">
                <div class="columns" id="img-BIGupload7">
                  <img class="demo cursor" id="img-BIGupload1" src="" onclick="currentSlide(1)">
                </div>
                <div class="columns" id="img-BIGupload8">
                  <img class="demo cursor" id="img-BIGupload2" src="" onclick="currentSlide(2)">
                </div>
                <div class="columns" id="img-BIGupload9">
                  <img class="demo cursor" id="img-BIGupload3" src="" onclick="currentSlide(3)">
                </div>
                <div class="columns" id="img-BIGupload10">
                  <img class="demo cursor" id="img-BIGupload4" src="" onclick="currentSlide(4)">
                </div>
                <div class="columns" id="img-BIGupload11">
                  <img class="demo cursor" id="img-BIGupload5" src="" onclick="currentSlide(5)">
                </div>    
                <div class="columns" id="img-BIGupload12">
                  <img class="demo cursor" id="img-BIGupload6" src="" onclick="currentSlide(6)">
                </div>
              </div>
            </div>
          </div>
          <div id="desc">
            <div id="dD">Opis</div>
            <div id="dTXT"></div>
          </div>
        </div>
      </div>


	</div>
  <?php
      require 'php/connect.php';
      require 'php/page_format.php';
      require_once 'php/secure_query.php';
      if(isset($_GET['id'])){
        $link->set_charset("utf8");
        $ad_id = $_GET['id'];
        //old version: $raw_results = mysqli_query($link,"SELECT * FROM adverts WHERE id = '$ad_id'") or die(mysqli_error($link));
        $raw_results = secure_query($link,"SELECT * FROM adverts WHERE id = ?", $t = array('i'), $a = array(&$ad_id));
        if(mysqli_num_rows($raw_results) > 0)      
        {
          while($row = mysqli_fetch_assoc($raw_results))
          {
            if(($row['visibility'] == 'active' || $row['poster_id'] == @$_SESSION['user']) && (($row['status'] == 'approved') || (@$_SESSION['user'] == 1) || $row['poster_id'] == @$_SESSION['user'])){
            
            $ad_text = str_ireplace("</br>", "\\r\\n", $row['text']);
            $ad_title = $row['title'];
            $ad_image1 = @addslashes(base64_encode($row['image1']));
            $ad_image2 = @addslashes(base64_encode($row['image2']));
            $ad_image3 = @addslashes(base64_encode($row['image3']));
            $ad_image4 = @addslashes(base64_encode($row['image4']));
            $ad_image5 = @addslashes(base64_encode($row['image5']));
            $ad_image6 = @addslashes(base64_encode($row['image6']));
            $ad_category = $row['category'];
            $post_date = $row['posting_date'];
            echo("<script>document.getElementById('tTXT').innerHTML='".$ad_title."';document.getElementById('cTXT').innerHTML = '".$ad_category."';document.getElementById('dTXT').innerHTML = '".$ad_text."';</script>");
        if($ad_image1 != null){
              echo('<script>document.getElementById("img-upload1").setAttribute("src", "data:image/jpeg;base64,'.$ad_image1.'");document.getElementById("img-BIGupload1").setAttribute("src", "data:image/jpeg;base64,'.$ad_image1.'");var z = 1;</script>');
            }
            else{
              echo('<script>document.getElementById("slide1").parentNode.removeChild(document.getElementById("slide1"));
                document.getElementById("img-BIGupload7").parentNode.removeChild(document.getElementById("img-BIGupload7")) = "";;
                var z = 0;
                </script>');
            }
            if($ad_image2 != null){
              echo('<script>document.getElementById("img-upload2").setAttribute("src", "data:image/jpeg;base64,'.$ad_image2.'");document.getElementById("img-BIGupload2").setAttribute("src", "data:image/jpeg;base64,'.$ad_image2.'"); z++;</script>');
              
            }
            else{
              echo('<script>document.getElementById("slide2").parentNode.removeChild(document.getElementById("slide2"));document.getElementById("img-BIGupload8").parentNode.removeChild(document.getElementById("img-BIGupload8")) = "";</script>');
            }
            if($ad_image3 != null){
              echo('<script>document.getElementById("img-upload3").setAttribute("src", "data:image/jpeg;base64,'.$ad_image3.'");document.getElementById("img-BIGupload3").setAttribute("src", "data:image/jpeg;base64,'.$ad_image3.'"); z++;</script>');
             
            }
            else{
              echo('<script>document.getElementById("slide3").parentNode.removeChild(document.getElementById("slide3"));document.getElementById("img-BIGupload9").parentNode.removeChild(document.getElementById("img-BIGupload9")) = "";</script>');
            }
            if($ad_image4 != null){
              echo('<script>document.getElementById("img-upload4").setAttribute("src", "data:image/jpeg;base64,'.$ad_image4.'");document.getElementById("img-BIGupload4").setAttribute("src", "data:image/jpeg;base64,'.$ad_image4.'"); z++;</script>');
            }
            else{
              echo('<script>document.getElementById("slide4").parentNode.removeChild(document.getElementById("slide4"));document.getElementById("img-BIGupload10").parentNode.removeChild(document.getElementById("img-BIGupload10")) = "";</script>');
            }
            if($ad_image5 != null){
              echo('<script>document.getElementById("img-upload5").setAttribute("src", "data:image/jpeg;base64,'.$ad_image5.'");document.getElementById("img-BIGupload5").setAttribute("src", "data:image/jpeg;base64,'.$ad_image5.'"); z++;</script>');
            }
            else{
              echo('<script>document.getElementById("slide5").parentNode.removeChild(document.getElementById("slide5"));document.getElementById("img-BIGupload11").parentNode.removeChild(document.getElementById("img-BIGupload11")) = "";</script>');
            }
            if($ad_image6 != null){
              echo('<script>document.getElementById("img-upload6").setAttribute("src", "data:image/jpeg;base64,'.$ad_image6.'");document.getElementById("img-BIGupload6").setAttribute("src", "data:image/jpeg;base64,'.$ad_image6.'"); z++;</script>');
            }
            else{
              echo('<script>document.getElementById("slide6").parentNode.removeChild(document.getElementById("slide6"));document.getElementById("img-BIGupload12").parentNode.removeChild(document.getElementById("img-BIGupload12")) = "";</script>');
            }
            if($row['poster_id'] != @$_SESSION['user']){
                $newViews = $row['views'] + 1;
                mysqli_query($link, "UPDATE adverts SET views = '$newViews' WHERE id = '$ad_id'");
              }
            }
          }
        }
      }
    ?>
<script type="text/javascript">
  
  if(document.readyState = "complete"){
    var number = document.getElementsByClassName("mySlides");


  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");


  
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = " block";
  dots[slideIndex-1].className += " active";
} 
}
for(var x1 = 0; x1 <= z; x1++){
    document.getElementsByClassName("numberOFslides")[x1].innerHTML = "&nbsp;"+z;
  }



</script>

  
    
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
  require 'php/page_format.php';
  require 'php/reg.php';
  ?>
</body>
</html>
