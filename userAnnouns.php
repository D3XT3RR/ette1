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
  <link rel="stylesheet" href="style/button.css">
  <link rel="stylesheet" type="text/css" href="style/mobile/styleMobile1.css">

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

    <div id="search-container" class="auto">
      <div class="addbody">
        <div class="check">
          <input type="checkbox" name="checkall" onClick="toggle(this)">
        </div>

        <div class="date">
          Okres ważności
        </div>

        <div class="title">
          Tytuł
        </div>

        <div class="status" style="justify-content: center;">
          Status
        </div>
      </div>
    </div>
  </section>

  
  <?php
include "php/footer.php";
include "php/modal.php";
?>


  <?php
require 'php/connect.php';
if(!isset($_SESSION['user'])){
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    die();
}
$session_user_id = $_SESSION['user']; 
mysqli_set_charset($link,"utf8");

function DisplayResults($connectionLink, $query){
    $raw_results = mysqli_query($connectionLink,$query) or die(mysqli_error($connectionLink));
    
    if(mysqli_num_rows($raw_results) > 0)      
    {
        while($row = mysqli_fetch_assoc($raw_results))
        {
          $id_of_ad = $row['id'];
          $title_of_ad = $row['title'];
          $text_of_ad = $row['text'];
          $image_of_ad = $row['image1'];
          $views_of_ad = $row['views'];
          $date = $row['posting_date'];
          $date_of_ad = Date("d.m.Y", strtotime($date));
          $date_of_expire = Date("d.m.Y",strtotime("+14 day", strtotime($date_of_ad)));
          $visible;
          $action;
          $verify = mysqli_query($connectionLink,"SELECT visibility FROM adverts WHERE id = '$id_of_ad'") or die(mysqli_error($link));
		  $fav_count = mysqli_fetch_row(mysqli_query($connectionLink,"SELECT COUNT(ID) FROM login WHERE Favourites LIKE '".$id_of_ad."' "))[0];
          $row2 = mysqli_fetch_assoc($verify);
          //  $active = mysqli_query($connectionLink, "UPDATE adverts SET visibility = 'active' WHERE id = '$id_of_ad'");
          //  $inactive = mysqli_query($connectionLink, "UPDATE adverts SET visibility = 'inactive' WHERE id = '$id_of_ad'");
          if ($row2['visibility'] == 'active'){
              $visible = "<button class=\"inactive button\" data-hover=\"DEZAKTYWUJ\"><span>&#x2713</span></button>";
              $action = "inactive";
          }
          else if ($row2['visibility'] == 'inactive'){
              $visible = "<button class=\"active button\" data-hover=\"AKTYWUJ\"><span>&#935</span></button>";
              $action = "active";
            }
          //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image1'] ).'"/>';
          echo("<script type='text/javascript'>document.getElementById('search-container').innerHTML += '<div class=add>\
        <div class=addbody>\
          <div class=check>\
            <input type=checkbox name=checkadd>\
          </div>\
          <div class=date>\
            Od: ".$date_of_ad."<br>\
            Do: ".$date_of_expire."\
          </div>\
          <div class=title>\
            <h4> ".$title_of_ad."</h4>\
          </div>\
          <div class=status>\
            <a href=\"php/activate.php?id=".$id_of_ad."&action=".$action."\" target=\"_parent\">".$visible."</a>\
            <a href=\"announEdit.php?id=".$id_of_ad."\" target=\"_parent\"><button class=\"edit button\" data-hover=\"EDYTUJ\"><span><img src=\"style/image/userAnnoun/pen.png\"></span> </button ></a>\
            <a href=\"AnnounView.php?id=".$id_of_ad."\" target=\"_parent\"><button class=\"view button\" data-hover=\"WYŚWIETL\"><span><img src=\"style/image/userAnnoun/view.png\"></span></button></a>\
          </div>\
        </div>\
        <div class=addfoot>\
          <div style=\"padding: 0px 10px; border-right: 1px solid gray;\">Wyświetleń: ".$views_of_ad."</div>\
          <div style=\"padding: 0px 10px;\">Obserwuje: ".$fav_count."</div>\
        </div>';</script>");

        }
              
    }
    else
    {
        echo("<script type='text/javascript'>document.getElementById('search-container').innerHTML += 'Brak wyników wyszukiwania'</script>");
    }
}
DisplayResults($link, "SELECT * FROM adverts WHERE poster_id = '$session_user_id' ORDER BY posting_date DESC");
?>





<?php
  require 'php/page_format.php';
  require 'php/reg.php';
  ?>
</body>
</html>
