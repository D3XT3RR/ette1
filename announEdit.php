<?php
session_start();
require 'php/session.php';
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
  <link rel="stylesheet" href="style/userAnnouns.css">
  <link rel="stylesheet" href="style/announAdd.css">
  <link rel="stylesheet" type="text/css" href="style/mobile/styleMobile.css">

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
      <div class="container">
        <form method="post" action="" enctype="multipart/form-data">
          <h2>Edytuj swoje ogłoszenie!</h2>
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
              <!--<div class="canBTN"><input type="submit" value="Usuń ogłoszenie"></div>-->
              <div class="subBTN"><input type="submit" value="Aktualizuj ogłoszenie"></div>
            </div>

        </form>
      </div>
    </div>
  </section>


  <?php
include "php/footer.php";
include "php/modal.php";
?>


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
              echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
              die();
            }
            if(isset($_POST['AdText']) && isset($_POST['AdTitle']) && isset($_POST['Category'])){
              $ad_text = preg_replace( "/\r\n/", "<br/>", $_POST['AdText']);
              $ad_title = $_POST['AdTitle'];
              $ad_category = $_POST['Category'];
              $price = $_POST['price'];
              $negotiation = 0;
              if(isset($_POST['negotiation'])){
                $negotiation = 1;
              }
              $user_session_id = $_SESSION['user'];
              $ad_image1 = @addslashes(file_get_contents($_FILES['image1']['tmp_name']));
              $ad_image2 = @addslashes(file_get_contents($_FILES['image2']['tmp_name']));
              $ad_image3 = @addslashes(file_get_contents($_FILES['image3']['tmp_name']));
              $ad_image4 = @addslashes(file_get_contents($_FILES['image4']['tmp_name']));
              $ad_image5 = @addslashes(file_get_contents($_FILES['image5']['tmp_name']));
              $ad_image6 = @addslashes(file_get_contents($_FILES['image6']['tmp_name']));
              date_default_timezone_set('Europe/Berlin'); // CDT
              $current_date = date('Y-m-d');

              $link->set_charset("utf8");

              $result = mysqli_query($link, "UPDATE adverts SET title='$ad_title', text='$ad_text', category='$ad_category', price='$price', negotiation='$negotiation' WHERE id='$ad_id'") or die(mysqli_error($link));
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
              if($ad_image6 != null){
                $result6 = mysqli_query($link, "UPDATE adverts SET image6='$ad_image6' WHERE id='$ad_id'") or die(mysqli_error($link));
              }

              if($ad_category == "Praca" && $row['visibility'] == 'active'){
                $adstatus = 'pending';
                $null = "";
                $result = mysqli_query($link, "UPDATE adverts SET status='adstatus' WHERE id='$ad_id'") or die(mysqli_error($link));
                $message = "Twoj post został wysłany do weryfikacji. Dostaniesz informacje, gdy zostanie zatwierdzony.";
                $last_id = mysqli_insert_id($link);

                $to="ette.de@onet.eu";
                $subject="Nowe ogloszenie z kategorii: Praca";
                $from = 'noreply@i-ette.de';
                $body="Nowe ogłoszenie o tytule: '".$ad_title."', zostało dodane w kategorii 'Praca' <br><a target='_blank' href=http://i-ette.de/page/AnnounView.php?id=".$last_id.">Link do ogłoszenia</a>";
                $headers = "From:".$from."\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                mail($to,$subject,$body,$headers);
                echo "<script type='text/javascript'>alert('$message');window.location.href = 'index.php';</script>";
              }
              else{
                $message = "Post został zaktualizowany!";
                echo "<script type='text/javascript'>alert('$message');window.location.href = 'index.php';</script>";
              }
            }
            else
            {
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
              $price = $row['price'];
              $negotiation = $row['negotiation'];
              echo("<script>document.getElementsByName('AdTitle')[0].value='".$ad_title."';document.getElementsByName('Category')[0].value = '".$ad_category."';document.getElementsByName('AdText')[0].innerHTML = '".$ad_text."';document.getElementsByName('price')[0].value='".$price."';</script>");
              if($negotiation == 1){
                echo("<script>document.getElementsByName('negotiation')[0].checked=true;</script>");
              }
              echo('<script>document.getElementById("img-upload1").setAttribute("src", "data:image/jpeg;base64,'.$ad_image1.'")</script>');
              echo('<script>document.getElementById("img-upload2").setAttribute("src", "data:image/jpeg;base64,'.$ad_image2.'")</script>');
              echo('<script>document.getElementById("img-upload3").setAttribute("src", "data:image/jpeg;base64,'.$ad_image3.'")</script>');
              echo('<script>document.getElementById("img-upload4").setAttribute("src", "data:image/jpeg;base64,'.$ad_image4.'")</script>');
              echo('<script>document.getElementById("img-upload5").setAttribute("src", "data:image/jpeg;base64,'.$ad_image5.'")</script>');
              echo('<script>document.getElementById("img-upload6").setAttribute("src", "data:image/jpeg;base64,'.$ad_image6.'")</script>');
           }
          }
        }
        else{
          echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
          die();
        }
      }

    ?>



<script src="js/announAdd.js?5"></script>

<?php
  require 'php/page_format.php';
  require 'php/reg.php';
  ?>
</body>
</html>
