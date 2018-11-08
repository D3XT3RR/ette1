<?php
      require 'connect.php';
      require 'session.php';
      require 'page_format.php';
    if(isset($_SESSION['user'])){


        if(isset($_POST['AdText']) && isset($_POST['AdTitle']) && isset($_POST['Category'])){

            $ad_text = preg_replace( "/\r\n/", "</br>", $_POST['AdText']);
            $ad_title = $_POST['AdTitle'];
            $ad_image1 = @addslashes(file_get_contents($_FILES['image1']['tmp_name']));
            $ad_image2 = @addslashes(file_get_contents($_FILES['image2']['tmp_name']));
            $ad_image3 = @addslashes(file_get_contents($_FILES['image3']['tmp_name']));
            $ad_image4 = @addslashes(file_get_contents($_FILES['image4']['tmp_name']));
            $ad_image5 = @addslashes(file_get_contents($_FILES['image5']['tmp_name']));
            $ad_category = $_POST['Category'];
            $user_session_id = $_SESSION['user'];
            //$current_user_id = $_SESSION['user_id'];
            date_default_timezone_set('Europe/Berlin'); // CDT
            $current_date = date('Y-m-d');

            // Create connection
            $link->set_charset("utf8");

            //Insert our ad into the database
            $result = mysqli_query($link, "INSERT INTO adverts (title,text,image1,image2,image3,image4,image5,category,poster_id,posting_date,views,status) VALUES ('$ad_title','$ad_text','$ad_image1', '$ad_image2', '$ad_image3', '$ad_image4', '$ad_image5', '$ad_category', '$user_session_id', '$current_date', 0, 'pending')") or die(mysqli_error($link));
            $message = "Post został opublikowany!";
            echo "<script type='text/javascript'>alert('$message');window.location.href = '../index.php';</script>";
        }
    }
    else{
        echo "Musisz się zalogować by dodać ogłoszenie";
    }
?>