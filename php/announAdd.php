<?php
require_once 'connect.php';
require_once 'session.php';
require_once 'page_format.php';
require_once 'secure_query.php';
if(isset($_SESSION['user'])){
    if(isset($_POST['AdText']) && isset($_POST['AdTitle']) && isset($_POST['Category'])){
        $ad_text = preg_replace( "/\r\n/", "</br>", $_POST['AdText']);
        $ad_title = $_POST['AdTitle'];
        $ad_image1 = @file_get_contents($_FILES['image1']['tmp_name']);
        $ad_image2 = @file_get_contents($_FILES['image2']['tmp_name']);
        $ad_image3 = @file_get_contents($_FILES['image3']['tmp_name']);
        $ad_image4 = @file_get_contents($_FILES['image4']['tmp_name']);
        $ad_image5 = @file_get_contents($_FILES['image5']['tmp_name']);
        $ad_image6 = @file_get_contents($_FILES['image6']['tmp_name']);
        $ad_category = $_POST['Category'];
        $user_session_id = $_SESSION['user'];
        $price = $_POST['price'];
        $negotiation = 0;
        if(isset($_POST['negotiation'])){
            $negotiation = 1;
        }
        //$current_user_id = $_SESSION['user_id'];
        date_default_timezone_set('Europe/Berlin'); // CDT
        $current_date = date('Y-m-d');

        // Create connection
        $link->set_charset("utf8");

        //Insert our ad into the database
        if($ad_category == "Praca"){
            //old version: $result = mysqli_query($link, "INSERT INTO adverts (title,text,image1,image2,image3,image4,image5,image6,category,poster_id,posting_date,views,status,visibility) VALUES ('$ad_title','$ad_text','$ad_image1', '$ad_image2', '$ad_image3', '$ad_image4', '$ad_image5', '$ad_image6', '$ad_category', '$user_session_id', '$current_date', 0, 'pending', 'active')") or die(mysqli_error($link));
            $adstatus = 'pending';
            $advisibility = 'active';
            $startviews = 0;
			$null = "";
            $result = secure_query($link, "INSERT INTO adverts (image1,image2,image3,image4,image5,image6,price,negotiation,title,text,category,poster_id,posting_date,views,status,visibility) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $t = array("bbbbbbdisssisiss"), $a = array(&$null, &$null, &$null, &$null, &$null, &$null, &$price, &$negotiation, &$ad_title,&$ad_text, &$ad_category, &$user_session_id, &$current_date, &$startviews, &$adstatus, &$advisibility), $i = array($ad_image1, $ad_image2, $ad_image3, $ad_image4, $ad_image5, $ad_image6));
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

            echo "<script type='text/javascript'>alert('$message');window.location.href = '../index.php';</script>";
        }
        else{
            //old version: $result = mysqli_query($link, "INSERT INTO adverts (title,text,image1,image2,image3,image4,image5,image6,category,poster_id,posting_date,views,status,visibility) VALUES ('$ad_title','$ad_text','$ad_image1', '$ad_image2', '$ad_image3', '$ad_image4', '$ad_image5', '$ad_image6', '$ad_category', '$user_session_id', '$current_date', 0, 'approved', 'active')") or die(mysqli_error($link));
            $adstatus = 'approved';
            $advisibility = 'active';
            $startviews = 0;
			$null = "";
            $result = secure_query($link, "INSERT INTO adverts (image1,image2,image3,image4,image5,image6,price,negotiation,title,text,category,poster_id,posting_date,views,status,visibility) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $t = array("bbbbbbdisssisiss"), $a = array(&$null, &$null, &$null, &$null, &$null, &$null, &$price, &$negotiation, &$ad_title,&$ad_text, &$ad_category, &$user_session_id, &$current_date, &$startviews, &$adstatus, &$advisibility), $i = array($ad_image1, $ad_image2, $ad_image3, $ad_image4, $ad_image5, $ad_image6));
            $message = "Post został opublikowany!";
            echo "<script type='text/javascript'>alert('$message');window.location.href = '../index.php';</script>";
        }
    }
}
else{
    echo "<script type='text/javascript'>alert('Musisz się zalogować aby dodać ogłoszenie');window.location.href = '../index.php';</script>";
}
?>