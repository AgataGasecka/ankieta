<?php
//dane konfiguracyjne do połączenia z baza danych

 $adres_ip_serwera_mysql_z_baza_danych = '127.0.0.1';
 $nazwa_bazy_danych = 'RAIM';
 $login_bazy_danych = 'root';
 $haslo_bazy_danych = 'abcd';

 //ustaw połączenie z serwerem mysql
 if ( !@mysql_connect($adres_ip_serwera_mysql_z_baza_danych, $login_bazy_danych, $haslo_bazy_danych) ) {
   echo 'Nie moge polaczyc sie z baza danych';
    exit (0);
 }

 //wybierz baze danych na serwerze mysql ktora zawiera tabele
 if ( !mysql_select_db($nazwa_bazy_danych) ) {
    echo 'Blad otwarcia bazy danych';
     exit (0);
 }
 ?>