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
  <link rel="stylesheet" href="style/search.css">
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
      <div id="sortowanie">
        <form action="" method="GET">
        <div class="sortCOL">
          <div class="sortROW">
            <div id="sortCena">
            <label for="sortCenaRange"></label>
            </div>
            
          </div>
          <div class="sortROW">
            
          </div>
          <div class="sortROW">
            
          </div>
          <div class="sortROW">
            
          </div>
        </div>
        <div class="sortCOL">
          <div class="sortROW">
            
          </div>
          <div class="sortROW">
            
          </div>
          <div class="sortROW">
            
          </div>
          <div class="sortROW">
            
          </div>
        </div>
        <div class="sortCOL">
          <div class="sortROW">
            
          </div>
          <div class="sortROW">
            
          </div>
          <div class="sortROW">
            
          </div>
          <div class="sortROW">
            
          </div>
        </div>
        <div class="sortCOL">
          <div class="sortROW">
            
          </div>
          <div class="sortROW">
            
          </div>
          <div class="sortROW">
            
          </div>
          <div class="sortROW">
            
          </div>
        </div>
      </form>

      </div>

<?php
require_once 'php/connect.php';
require_once 'php/secure_query.php';
mysqli_set_charset($link,"utf8");

$search = @$_GET['search'];
$category = @$_GET['kat'];
$categoryLOC = "<a href='search.php?kat=".$category."'>".$category."</a>";
$home = "<a href='/'>Strona Główna</a>";
if ($search == ""){
  echo ("<div class='location'>".$home." > ".$categoryLOC."</div>");
}
else{
  echo ("<div class='location'>".$home." > ".$categoryLOC." > ".$search."</div>");
}

function DisplayResults($raw_results){    
    if(mysqli_num_rows($raw_results) > 0)      
    {
        while($row = mysqli_fetch_assoc($raw_results))
        {
          if(($row['visibility'] == 'active') && ($row['status'] == 'approved')){
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
            $price = $row['price'];
            if($price == '0.00'){
              $cost = 'Za Darmo';
            }
            else
            {
              $cost = number_format($price, 0, ',', ' ');
              $cost .= " zł";
            }
            echo('<a class="announ" href="AnnounView.php?id='.$row['id'].'"; >
                    <div class="announTit">
                      <div class="row">
                        <h3>'.$row['title'].'</h3>
                        <h3>'.$cost.'</h3>
                      </div>
                      <div class="category">'.$row['category'].'</div>
                      <div class="date">'.$printedDate.'</div>
                    </div>');

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
                        echo('<div class="announPic">BRAK ZDJĘCIA</div></a><hr> ');
                      }
                      else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a><hr>');}
                    }
                    else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a><hr>');}
                  }
                  else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a><hr>');}
                }
                else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a><hr>');}
              }
              else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a><hr>');}
            }
            else {echo('<div class="announPic"><img class="photo" src="data:image/jpeg;base64,'.$file.'"/></div></a><hr>');}
            
          }
        }
              
    }
    else
    {
        echo "Brak ogłoszeń";
    }
}
if($category != null && $search != null)
{
    $search = "%".$search."%";
    DisplayResults(secure_query($link, "SELECT * FROM adverts WHERE (((LOWER(title) LIKE LOWER(?)) OR (LOWER(text) LIKE LOWER(?))) AND (LOWER(category) = LOWER(?))) ORDER BY posting_date DESC", $t = array('sss'), $a = array(&$search, &$search, &$category)));
}
else if ($search != null)
{
  $search = "%".$search."%";
    DisplayResults(secure_query($link, "SELECT * FROM adverts WHERE (LOWER(title) LIKE LOWER(?)) OR (LOWER(text) LIKE LOWER(?)) ORDER BY posting_date DESC", $t = array('ss'), $a = array(&$search, &$search)));
}
else if($category != null){
    DisplayResults(secure_query($link, "SELECT * FROM adverts WHERE (LOWER(category) = LOWER(?)) ORDER BY posting_date DESC", $t = array('s'), $a = array(&$category)));
}
else 
{
    echo "<script type='text/javascript'>alert('Brak kryteriów wyszukiwania');window.location = '../index.php';</script>";
}



?>

    </div>
    
  </section>

  
  <?php
include "php/footer.php";
include "php/modal.php";
?>





<?php
  if(isset($_GET['kat'])){
		echo("<script type='text/javascript'>document.getElementsByName('kat')[0].value = '".$category."';</script>");
	}
  require 'php/page_format.php';
  require 'php/reg.php';
  ?>
</body>
</html>
