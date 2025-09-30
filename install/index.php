<?
ini_set('display_errors', 'On'); // сообщения с ошибками будут показываться
error_reporting(E_WARNING); // E_ALL - отображаем ВСЕ ошибки
//$value = $var[$key]; // пример ошибки
if($_POST['DB_RESET_DATA']){
	$file='../config_db.php';
	$data="<?
\$users_db='".$_POST['DB_USER']."';
\$password_db='".$_POST['DB_PASS']."';
\$data_base_name='".$_POST['DB_NAME']."';
?>";
	/*$fh = fopen($file, "w+") or die("File ($file) does not exist!");
	$success - fwrite($fh, $data);
	*/
		$fp = fopen($file, "w+"); // Открываем файл в режиме записи
		$mytext = "Это строку необходимо нам записать\r\n"; // Исходная строка
		$test = fwrite($fp, $data); // Запись в файл
		if ($test) echo 'Данные в файл успешно занесены.<br>';
		else echo 'Ошибка при записи в файл.';
		fclose($fp); //Закрытие файла
}

if($_POST['SITE_DATA_START']){
//	ini_set('error_reporting', E_ALL);
//    ini_set('display_errors', 1);
//    ini_set('display_startup_errors', 1);
//	echo 'Подключаемся к базе данных!<br>Выполняем запросы:';
//	    $filed = file_get_contents('DAMP_DB.sql');
//	    $filed = str_replace("NAME_SITE",$_POST['NAME_SITE'],$filed);
//	    $filed = str_replace("DESCRIPTION_SITE",$_POST['DESCRIPTION_SITE'],$filed);
//        require_once '../config_db.php';
//        $link = mysqli_connect("localhost", $users_db, $password_db, $data_base_name);
//        //require_once '../classes/class.db.php';
//
//        /* запускаем мультизапрос */
//    if (mysqli_multi_query($link, $filed)) {
//        do {
//            /* получаем первый результирующий набор */
//            if ($result = mysqli_store_result($link)) {
//                while ($row = mysqli_fetch_row($result)) {
//                    printf("%s\n", $row[0]);
//                }
//                mysqli_free_result($result);
//            }
//            /* печатаем разделитель */
//            if (mysqli_more_results($link)) {
//               printf("-----------------\n<br>");
//            }
//        } while (mysqli_next_result($link));
//    }
//        /* закрываем соединение */
//    mysqli_close($link);

    require_once $_SERVER['DOCUMENT_ROOT'].'/install/goInsertDB.php';


    echo '<br> Данные для входа в <a href="/admin">панель администратора</a>:
    <br>Логин: MainAdmin<br> Пароль:MainPassword
';
exit();
}
?>

<style>
    .blockAll{
        display: flex;
        width:100%;
        height:100%;
        justify-content: center;
        align-items: center;
        background: #252622;
    }
    .warp{
        width:100%;
        max-width:400px;
        background: #ffffff;
        color:#333333;
        padding: 10px 25px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 15px;
    }
    .warp input{
        width:100%;
        box-sizing: border-box;
        padding:10px 0 !important;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        border:1px solid #eeeeee;
        margin:10px 0px;
        text-align: center;
    }
    .BTNNext{
        width:100%;
        box-sizing: border-box;
        cursor:pointer;
        padding:10px 0 !important;
    }
    .BTNNext:hover{
        background: #252622;
        color:#ffffff;
    }
</style>
<?$file_config_db='../config_db.php';
if(file_exists($file_config_db)){
	$file_db_content=file_get_contents($file_config_db);
			$pattern = '/##[0-9a-zA-Zа-яА-Я_\ ]+/u';
		if(preg_match_all($pattern, $file_db_content, $matches)){
			//$matches=str_replace("## Name Module:","",$matches[0]);
			$shag_1=1;
		}else{
			$shag_1=0;
		}
}
?>
<div class="blockAll">
<div class="warp">
<?if($shag_1==1){?>
<div class="one_settiongs">
<h3>Шаг 1</h3>
    <h1>Настройки базы данных</h1>
    <p>Создайте базу данных на хостинге или сервере. Скопируйте и вставьте в поля соответствующие данные!</p>
<form action="" method="POST">
<input placeholder="Имя пользователя" name="DB_USER" required/>
<input placeholder="Имя базы данных" name="DB_NAME" required/>
<input placeholder="Пароль" name="DB_PASS" required/>
<input class="BTNNext" type="submit" name="DB_RESET_DATA" value="Далее" />
</form>
</div>
<?}else{
	require_once '../classes/class.db.php';
	$site_settings=$db->query("SHOW TABLES FROM $data_base_name LIKE 'config'");
	if(!$site_settings or $site_settings->num_rows!=1){
	?>
<div class="one_settiongs">
<h3>Шаг 2</h3>
<h1>Настройки сайта</h1>
<form action="" method="POST">
<input placeholder="Наименование компании" name="NAME_COMPANY" required/>
<input placeholder="Название сайта" name="NAME_SITE" required/>
<input placeholder="Описание сайта" name="DESCRIPTION_SITE" required/>
    <p> </p>
    <input placeholder="Регион/Область" name="CITY_REGION" required/>
    <input placeholder="Город" name="CITY_BIND" required/>
    <input placeholder="Город латиница" name="CITY_BIND_LAT" required/>
    <p> </p>
    <input placeholder="Телефон" name="PHONE_HEADER" required/>
    <input class="BTNNext" type="submit" name="SITE_DATA_START" value="Завершить настройки" />
</form>
</div>
	<?	}else{
	?>
		<h1>Сайт успешно настроен, удалите директорию /install</h1>
		<?}
}?>
</div>
</div>