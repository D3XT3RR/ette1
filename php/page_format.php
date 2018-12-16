<?php
    require 'connect.php';

    if(isset($_SESSION['user'])){


       echo "<script type='text/javascript'>

          document.getElementById('3Button').innerHTML = 
          '<a class=\'button \'onclick=location.href=\'announAdd.php\'>Dodaj Ogłoszenie!';

          document.getElementById('4Button').innerHTML = 
          '<a class=\'button \' >Twój profil';

          document.getElementById('aButton').innerHTML =
          '<a onclick=location.href=\'userAnnouns.php\' >Twoje ogłoszenia</a>';

          document.getElementById('bButton').innerHTML =
          '<a onclick=location.href=\'userFavourites.php\' >Ulubione</a>';

          document.getElementById('cButton').innerHTML =
          '<a onclick=location.href=\'settings.php\' >Ustawienia</a>';

          document.getElementById('dButton').innerHTML =
          '<a onclick=location.href=\'php/logout.php\' >Wyloguj</a>';
</script>";
    }


    else{
      echo "<script type='text/javascript'>
          document.getElementById('2Button').innerHTML = 
          '<a class=\'button \'onclick=location.href=\'index.php\'>Strona Główna';

          document.getElementById('3Button').innerHTML = '<a class=\'button \'onclick=location.href=\'announAdd.php\'>Dodaj Ogłoszenie!';

          document.getElementById('4Button').innerHTML = '<a class=\'button \'>Mój profil';






          </script>";
    }


?>