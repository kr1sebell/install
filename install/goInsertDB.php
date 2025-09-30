<?php
//require_once $_SERVER['DOCUMENT_ROOT'].'/classes/class.db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/config_db.php';


$CityRegion = $_POST['CITY_REGION'];
$CityTitle = $_POST['CITY_BIND'];
$CityTitleLat = $_POST['CITY_BIND_LAT'];
$SuitTitle = $_POST['NAME_SITE'];
$SuitDescription = $_POST['DESCRIPTION_SITE'];
$SuitPhoneHeader = $_POST['PHONE_HEADER'];

require_once $_SERVER['DOCUMENT_ROOT'].'/install/stepsInsertDB/step1.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/install/stepsInsertDB/step2.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/install/stepsInsertDB/step3.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/install/stepsInsertDB/step4.php';

$Query5 = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/install/stepsInsertDB/step5.sql');
$Query6 = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/install/stepsInsertDB/step6.sql');

$Query6 = str_replace("{[NAMECompany]}",$_POST['NAME_COMPANY'],$Query6);
$Query6 = str_replace("{[CITYBINDTITLE]}",$_POST['CITY_BIND'],$Query6);

require_once $_SERVER['DOCUMENT_ROOT'].'/install/stepsInsertDB/step7.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/install/stepsInsertDB/step8.php';

$AllQuery = array(
    $Query1,
    $Query2,
    $Query3,
    $Query4,
    $Query5,
    $Query6,
    $Query7,
    $Query8
)
;


foreach ($AllQuery as $number=>$Qur) {
    $link = mysqli_connect("localhost", $users_db, $password_db, $data_base_name);

    /* запускаем мультизапрос */
    if (mysqli_multi_query($link, $Qur)) {
        do {
            /* получаем первый результирующий набор */
            if ($result = mysqli_store_result($link)) {
                while ($row = mysqli_fetch_row($result)) {
                    printf("%s\n", $row[0]);
                }
                mysqli_free_result($result);
            }
            /* печатаем разделитель */
            if (mysqli_more_results($link)) {
                printf($number+1 ."-----------------\n<br>");
            }
        } while (mysqli_next_result($link));
    }
    /* закрываем соединение */
    mysqli_close($link);
}


//echo 'Шаг 1'; echo $db->query($Query1);
//echo '<br>Шаг 2'; echo $db->query($Query2);
//echo '<br>Шаг 3'; echo $db->query($Query3);
//echo '<br>Шаг 4'; echo $db->query($Query4);
//echo '<br>Шаг 5'; echo $db->query($Query5);
//echo '<br>Шаг 6'; echo $db->query($Query6);
//echo '<br>Шаг 7'; echo $db->query($Query7);
//echo '<br>Шаг 8'; echo $db->query($Query8);