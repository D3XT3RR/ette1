<?php
session_start();
require 'php/session.php';
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
  <link rel="stylesheet" href="style/userAnnouns.css">
  <link rel="stylesheet" type="text/css" href="style/announAddtest.css">

    <script type="text/javascript">
  function toggle(source) {
    checkboxes = document.getElementsByName('checkadd');
    for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = source.checked;
    }
  }
  </script>
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
        <form method="post" action="" enctype="multipart/form-data">
          <label>Zaczynamy!</label>
          <div id="title">
            <div id="titleTXT">Wpisz tytuł<span class="required">*</span></div>
            <div id="tTXT"><input type="text" placeholder="Tytuł" name="AdTitle" required></div>
          </div>

          <div  id="category">
            <div id="categoryTXT">Wybierz kategorię<span class="required">*</span></div>
            <div id="cTXT">
              <select name="Category">
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
          </div>

          <div id="desc">
            <div id="descTXT">Opis<span class="required">*</span></div>
            <div id="dTXT">
              <textarea type="text" placeholder="Opis..." name="AdText" required></textarea>
            </div>
          </div>

            <div id="photos">
              <div id="fotoName">Dodaj zdjęcia</div>
              <div id="fileUpload">
                <div id="1" class="uploadBTN"><input type="file" class="imgInp" name="image1" accept="image/png, image/jpeg"><img id='img-upload1' src="style/image/img.png"/></div>
            <div id="2" class="uploadBTN"><input type="file" class="imgInp" name="image2" accept="image/png, image/jpeg"><img id='img-upload2' src="style/image/img.png"/></div>
            <div id="3" class="uploadBTN"><input type="file" class="imgInp" name="image3" accept="image/png, image/jpeg"><img id='img-upload3' src="style/image/img.png"/></div>
            <div id="4" class="uploadBTN"><input type="file" class="imgInp" name="image4" accept="image/png, image/jpeg"><img id='img-upload4' src="style/image/img.png"/></div>
            <div id="5" class="uploadBTN"><input type="file" class="imgInp" name="image5" accept="image/png, image/jpeg"><img id='img-upload5' src="style/image/img.png"/></div>
            <div id="6" class="uploadBTN"><input type="file" class="imgInp" name="image6" accept="image/png, image/jpeg"><img id='img-upload6' src="style/image/img.png"/></div>
              </div>
            </div>
            <div class="announ_sub_Button">
              <div class="canBTN"><input type="submit" value="Usuń ogłoszenie"></div>
              <div class="subBTN"><input type="submit" value="Aktualizuj ogłoszenie"></div>
            </div>

        </form>
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
        <div class="row"><a href="mailto:ette.help@ette.jp">ette.help@ette.jp</a></div>
        <div class="row"><a href="https://goo.gl/maps/5LZFTEMNkh22" target="_blank"> ul.Jana Pawła Ósmego 21/37 <br>
        02-137 Wadowice</a></div>

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


  <?php
      require 'php/connect.php';
      require 'php/page_format.php';
      if(isset($_GET['id'])){
        $link->set_charset("utf8");
        $ad_id = $_GET['id'];
        $raw_results = mysqli_query($link,"SELECT * FROM adverts WHERE id = '$ad_id'") or die(mysqli_error($link));
        if(mysqli_num_rows($raw_results) > 0)      
        {
          while($row = mysqli_fetch_assoc($raw_results))
          {
            if($_SESSION['user'] != $row['poster_id']){
              die();
            }
            if(isset($_POST['AdText']) && isset($_POST['AdTitle']) && isset($_POST['Category'])){
            $ad_text = preg_replace( "/\r\n/", "</br>", $_POST['AdText']);
            $ad_title = $_POST['AdTitle'];
            $ad_category = $_POST['Category'];
            $user_session_id = $_SESSION['user'];
            $ad_image1 = @addslashes(file_get_contents($_FILES['image1']['tmp_name']));
            $ad_image2 = @addslashes(file_get_contents($_FILES['image2']['tmp_name']));
            $ad_image3 = @addslashes(file_get_contents($_FILES['image3']['tmp_name']));
            $ad_image4 = @addslashes(file_get_contents($_FILES['image4']['tmp_name']));
            $ad_image5 = @addslashes(file_get_contents($_FILES['image5']['tmp_name']));
            date_default_timezone_set('Europe/Berlin'); // CDT
            $current_date = date('Y-m-d');

            $link->set_charset("utf8");

            $result = mysqli_query($link, "UPDATE adverts SET title='$ad_title', text='$ad_text', category='$ad_category' WHERE id='$ad_id'") or die(mysqli_error($link));
            //update photos
            if($ad_image1 != null){
              $result1 = mysqli_query($link, "UPDATE adverts SET image1='$ad_image1' WHERE id='$ad_id'") or die(mysqli_error($link));
            }
             if($ad_image2 != null){
              $result2 = mysqli_query($link, "UPDATE adverts SET image2='$ad_image2' WHERE id='$ad_id'") or die(mysqli_error($link));
            }
             if($ad_image3 != null){
              $result3 = mysqli_query($link, "UPDATE adverts SET image3='$ad_image3' WHERE id='$ad_id'") or die(mysqli_error($link));
            }
             if($ad_image4 != null){
              $result4 = mysqli_query($link, "UPDATE adverts SET image4='$ad_image4' WHERE id='$ad_id'") or die(mysqli_error($link));
            }
             if($ad_image5 != null){
              $result5 = mysqli_query($link, "UPDATE adverts SET image5='$ad_image5' WHERE id='$ad_id'") or die(mysqli_error($link));
            }

            $message = "Post został zaktualizowany!";
            echo "<script type='text/javascript'>alert('$message');window.location.href = 'index.php';</script>";
            }
            else{
            $ad_text = str_ireplace("</br>", "\\r\\n", $row['text']);
            $ad_title = $row['title'];
            $ad_image1 = @addslashes(base64_encode($row['image1']));
            $ad_image2 = @addslashes(base64_encode($row['image2']));
            $ad_image3 = @addslashes(base64_encode($row['image3']));
            $ad_image4 = @addslashes(base64_encode($row['image4']));
            $ad_image5 = @addslashes(base64_encode($row['image5']));
            $ad_category = $row['category'];
            $post_date = $row['posting_date'];
            echo("<script>document.getElementsByName('AdTitle')[0].value='".$ad_title."';document.getElementsByName('Category')[0].value = '".$ad_category."';document.getElementsByName('AdText')[0].innerHTML = '".$ad_text."';</script>");
            echo('<script>document.getElementById("img-upload1").setAttribute("src", "data:image/jpeg;base64,'.$ad_image1.'")</script>');
            echo('<script>document.getElementById("img-upload2").setAttribute("src", "data:image/jpeg;base64,'.$ad_image2.'")</script>');
            echo('<script>document.getElementById("img-upload3").setAttribute("src", "data:image/jpeg;base64,'.$ad_image3.'")</script>');
            echo('<script>document.getElementById("img-upload4").setAttribute("src", "data:image/jpeg;base64,'.$ad_image4.'")</script>');
            echo('<script>document.getElementById("img-upload5").setAttribute("src", "data:image/jpeg;base64,'.$ad_image5.'")</script>');
           }
          }
        }
      }

    ?>


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
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Zapamiętaj mnie
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('login').style.display='none'" type="button" class="w3-button w3-red">Anuluj</button>
        <span class="w3-right w3-padding w3-hide-small"><a onclick=location.href="/php/account_recovery.php">Nie pamiętasz hasła?</a></span>
        <span class="w3-right w3-padding w3-hide-small"><a onclick="document.getElementById('login').style.display='none'; document.getElementById('register').style.display='block'">Nie masz konta?</a></span>
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

          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Zakończ rejestrację!</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('register').style.display='none'" type="button" class="w3-button w3-red">Anuluj</button>
        <span class="w3-right w3-padding w3-hide-small"><a onclick="document.getElementById('register').style.display='none'; document.getElementById('login').style.display='block'">Masz już konto?</a></span>
      </div>

    </div>
  </div>
</div>

<!-- Modal END -->
<script src="js/announAdd.js?5"></script>

<?php
  require 'php/page_format.php';
  require 'php/reg.php';
  require 'php/search.php';
  ?>
</body>
</html>