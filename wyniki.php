<?php

//jesli przycisk "wyslij" zostanie nacisniety
if ( isset($_POST["singlebutton"]) ){

    //wstawiamy dane configuracyjne do polaczenia z baza
    require ('db.php');
    //require ('testPHP.php');

    //pobieramy odpowiedzi udzielone w formularzu
    $sex =  $_POST['sex'];
    $age = $_POST['age'];
    $city =  $_POST['city'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $what_is_stroke =  $_POST['what_is_stroke'];
    $which_is_more_frequent =  $_POST['which_is_more_frequent'];
    $causes =  $_POST['causes'];
    $symptoms=  $_POST['symptoms'];
    $causes_young_people = $_POST['causes_young_people'];
    $age_stroke= $_POST['age_stroke'];
    $prevention =  $_POST['prevention'];
    $recognition =  $_POST['recognition'];
    $time =  $_POST['time'];
    $death = $_POST['death'];
        
    // var_dump($_POST);

        //wstaw do tabeli udar w bazie zebrane dane
       $zapytanie = "INSERT INTO udar";
       $zapytanie .= " VALUES (DEFAULT, '$sex', '$age', '$city', '$what_is_stroke', '$which_is_more_frequent', '$causes', '$symptoms', '$causes_young_people', 
        '$age_stroke', '$prevention', '$recognition', '$time', '$death', '$weight', '$height') ";





       //wykonaj zapytanie na bazie mysql
       $wynik_zapytaniaTXT = @mysql_query($zapytanie);

       //jesli się nie powiedzie, zwróc informację o bledach
       if(!$wynik_zapytaniaTXT) {
      echo 'MySQL Error: '.mysql_error();
      echo 'zapytanie: '.$zapytanie;
      exit;
      }


      //sprawdz, czy baza danych zwrocila blad
       if (!$wynik_zapytaniaTXT) {
          echo("<br />Nie moge dodać rekordu do bazy!<br /><br />");
       } 

       
    }




 //zamknij połączenie z bazą danych
 if ( !mysql_close() ) {
    echo 'Nie moge zakonczyc polaczenia z baza danych';
    exit (0);
    }


 
?>