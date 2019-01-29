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
  <link rel="stylesheet" type="text/css" href="style/mobile/styleMobile.css">
  <link rel="stylesheet" type="text/css" href="style/mobile/indexMobile.css">
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
              <option id="grey" value="" selected hidden disabled>W jakiej kategorii szukasz?</option>
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
                  <div class="titleBOX">Motoryzacja</div>
                  
                </a>
              </div>
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Elektronika">
                    <img class="index_cat_photo" src="style/image/index/electronics.png">
                    <div class="titleBOX">Elektronika </div> 
                  </a>
              </div>
            </div>
            <!-- Drugi Rząd -->
            <div class="row">
              <div class="col">
                  <a class="categoryA" href="search.php?kat=Dom+i+ogród">
                    <img class="index_cat_photo" src="style/image/index/garden.png">
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
                  <a class="categoryA" href="search.php?kat=Dla+Dzieci">
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
              <div class="col robo">
                <div class="kontrakty">
                  <div class="categoryA">
                    <img class="index_cat_photo" src="style/image/index/firmy.png">
                    <div class="titleBOX">Firmy i Usługi</div>
                  </div>
                   <a class="podkategoria" href="search.php?kat=Firmy+i+usługi">Kontrakty</a>
                </div>
                  
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
              $cost = number_format($price, 0, ',', ' ');
              $cost .= " zł";
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
            echo('<a class="announ" href="AnnounView.php?id='.$row['id'].'"; ><div class="announTit"><div class="column"><h3>'.$row['title'].'</h3><div class="category">'.$row['category'].'</div></div><div class="price">'.$cost.'</div></div>');

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
DisplayResults(mysqli_query($link, "SELECT DISTINCT * FROM `adverts` WHERE visibility = 'active' & status = 'approved' ORDER BY id DESC LIMIT 25"));

            ?>
            
          </div>
        </div>
      </div>

  </section>
<?php
include "php/footer.php";
include "php/modal.php";
?>
  
  





<?php
  if(isset($_GET['redirected'])){
    $red = $_GET['redirected'];
    if($red == "true"){
      echo "<script type='text/javascript'>document.getElementById('login').style.display='block'</script>";
    }
    else if($red == "reg_true"){
       echo "<script type='text/javascript'>document.getElementById('register').style.display='block'</script>";
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
