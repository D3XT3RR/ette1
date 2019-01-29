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
        <div class="left">
          <div id="containerTit">
          <div id="leftTit">
            <div id="title"><div id="tTXT"></div></div>
            <div id="category"><div id="cTXT"></div></div>
            <div id="data"><div id="dataTXT"></div></div>
          </div>
          <div id="rightTit">
          <?php
              require_once 'php/secure_query.php';
              require_once 'php/connect.php';
              if(isset($_SESSION['user']) && isset($_GET['id'])){
               $usr = $_SESSION['user'];
               $result = secure_query($link, "SELECT Favourites FROM login WHERE ID = ?", $t = array('i'), $a=array(&$usr));
               $row = mysqli_fetch_row($result);
               $fav_arr = explode(',', $row[0]);
                 if(in_array(@$_GET['id'], $fav_arr)){
                    echo("<button title='Usuń z Ulubionych' onclick='AddToFavourites(".@$_GET['id'].")'><img id='favBtn' src='style/image/ulubione.png' /></button>");
                 }
                 else{
                  echo("<button title='Dodaj do Ulubionych' onclick='AddToFavourites(".@$_GET['id'].")'><img id='favBtn' src='style/image/ulubione_nie.png' /></button>");
                 }
              } 
            ?>
            </div>
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
        <div class="right">
        <div id="numberBox">
          <div id="numberCOM">Numer telefonu:</div>
          <div id="phoneNo">NUMER</div>

        </div>
        
        <div id="priceBox">
          <div id="priceCOM">Cena:</div>
          <div id="price"></div>
          <div id="negotiation"></div>
        </div>

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

            $mon = array("Stycznia ","Lutego ","Marca ","Kwietnia ","Maja ","Czerwca ","Lipca ","Sierpnia ","Września ","Października ","Listopada ","Grudnia ");
            $today = date("y-m-d");
            $oDate = new DateTime($row['posting_date']);
            $dDate = $oDate->format("d ");
            $mDate = $mon[$oDate->format("n")-1];
            $yDate = $oDate->format("Y");
            $printedDate ='';
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
            
            $ad_text = str_ireplace("<br/>", "\\r\\n", $row['text']);
            $ad_title = $row['title'];
            $ad_image1 = @addslashes(base64_encode($row['image1']));
            $ad_image2 = @addslashes(base64_encode($row['image2']));
            $ad_image3 = @addslashes(base64_encode($row['image3']));
            $ad_image4 = @addslashes(base64_encode($row['image4']));
            $ad_image5 = @addslashes(base64_encode($row['image5']));
            $ad_image6 = @addslashes(base64_encode($row['image6']));
            $ad_category = $row['category'];
            $poster_id = $row['poster_id'];
            $post_date = $row['posting_date'];
            echo("<script>document.getElementById('dataTXT').innerHTML='".$printedDate."';document.getElementById('tTXT').innerHTML='".$ad_title."';document.getElementById('cTXT').innerHTML = '".$ad_category."';document.getElementById('dTXT').innerHTML = '".$ad_text."';</script>");
            $negotiation = $row['negotiation'];
            $n_text = "cena do negocjacji";
            if($negotiation == 0){
              $n_text = "";
              echo("<script>
                    document.getElementById('negotiation').style.display = 'none';
                    document.getElementById('price').style.borderRadius = '0 0 10px 10px';
                  </script>");
            }
            else{
              echo("<script>document.getElementById('negotiation').innerHTML='".$n_text."'</script>");
            }
            $price = $row['price'];
            if($price == '0.00'){
              $cost = 'Za Darmo';
            }
            else
            {
              $cost = number_format($price, 0, ',', ' ');
              $cost .= " zł";
            }
            echo("<script>document.getElementById('price').innerHTML='".$cost."'</script>");
            $contact = mysqli_query($link,"SELECT Contact_Phone_Number FROM login WHERE id = '$poster_id'");
            $contact_num = mysqli_fetch_assoc($contact);
            $num = $contact_num['Contact_Phone_Number'];
            $num = number_format($num, 0, ',', ' ');

            echo("<script>document.getElementById('phoneNo').innerHTML='".$num."'</script>");

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




  <?php
include "php/footer.php";
include "php/modal.php";
?>



    





<?php
  require 'php/page_format.php';
  require 'php/reg.php';
  ?>
</body>
</html>
