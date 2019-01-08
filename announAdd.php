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
  <link rel="stylesheet" href="style/announAdd.css">
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
    <div class=" container auto">
      <form id="announdAdd" method="post" action="php/announAdd.php" enctype="multipart/form-data">
        <h2>Zaczynamy!</h2>
        <div class="rowAdd">
          <div id="title">
            <label for="AdTitle" id="titleTXT">Wpisz tytuł<span class="red">*</span></label>
            <div id="tTXT"><input type="text" placeholder="Tytuł" id="AdTitle" name="AdTitle" maxlength="65" required></div>

            
          </div>
          <div  id="category">
            <div id="categoryTXT">Wybierz kategorię<span class="red">*</span></div>
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
        </div>
        
              <div id="price">
                <label for="priceINPUT" id="priceTXT">Cena</label>
                <div class="row">
                  <input id="priceINPUT" placeholder=" Minimalna - 0zł , Maksymalna 10000000 zł" type="number" min="0" max="10000000" name="price"><label id="PLN" for="priceINPUT">&nbsp;PLN</label>
                  <div id="neg">
                    <div class="span">
                      <input type="checkbox" id="negotiation" name="negotiation" value="1">
                      <label for="negotiation"> Do negocjacji</label>
                    </div>
                    <div id="radio">
                      <div class="span">
                        <input type="radio" id="rBrutto" name="tax" checked>
                        <label for="rBrutto">brutto</label>
                      </div>
                      <div class="span">
                        <input type="radio" id="rNetto" name="tax">
                        <label for="rNetto">netto</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        <div id="desc">
          <div id="descTXT">Opis<span class="red">*</span></div>
          <div id="dTXT"><textarea type="text" placeholder="Opis..." name="AdText" required></textarea></div>
        </div>

        <div id="photos">
          <div id="photoTXT">Dodaj zdjęcia</div>
          <div id="fileUpload">
            <div id="1" class="uploadBTN"><input type="file" class="imgInp" name="image1" accept="image/png, image/jpeg"><img id='img-upload1' src="style/image/img.png"/></div>
            <div id="2" class="uploadBTN"><input type="file" class="imgInp" name="image2" accept="image/png, image/jpeg"><img id='img-upload2' src="style/image/img.png"/></div>
            <div id="3" class="uploadBTN"><input type="file" class="imgInp" name="image3" accept="image/png, image/jpeg"><img id='img-upload3' src="style/image/img.png"/></div>
            <div id="4" class="uploadBTN"><input type="file" class="imgInp" name="image4" accept="image/png, image/jpeg"><img id='img-upload4' src="style/image/img.png"/></div>
            <div id="5" class="uploadBTN"><input type="file" class="imgInp" name="image5" accept="image/png, image/jpeg"><img id='img-upload5' src="style/image/img.png"/></div>
            <div id="6" class="uploadBTN"><input type="file" class="imgInp" name="image6" accept="image/png, image/jpeg"><img id='img-upload6' src="style/image/img.png"/></div>

          </div>
        </div>
        <div class="announ_sub_Button"><div class="subBTN"><input type="submit" value="Dodaj ogłoszenie!"></div>
      </form>
    </div>
  </section>

  <?php
include "php/footer.php";
include "php/modal.php";
?>




  

  <?php
    require 'php/session.php';
  ?>

  <?php
    require 'php/page_format.php';
    require 'php/connect.php';
    require 'php/reg.php';
    require 'php/page_format.php';
    require 'php/announAdd.php';
    
  ?>

</body>
</html>