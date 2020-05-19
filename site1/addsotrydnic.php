<head>
<title>Добавление сотрудника</title>
		<meta charset=”utf-8”>
	    <link rel="stylesheet" href="css/normalize.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    	<link rel="stylesheet" href="css/style.css">       
</head>
<body>
    <style>
        .blok1{
            padding: 20px;
        }
        .blok2{
            padding: 20px;
        }
        .button2 {
            font-size: 20px;
            padding: 5px 70px;
            float: center;
        }

        .textbox3 {
            border-radius: 5px;
            padding: 5px 45px;
            font-family: Verdana, Helvetica, Arial, sans-serif;
           
        }

        .textbox4 {
            border-radius: 5px;
            padding: 5px 100px;
            font-family: Verdana, Helvetica, Arial, sans-serif;
           
        }
        .textbox5 {
            border-radius: 5px;
            padding: 5px 220px;
            font-family: Verdana, Helvetica, Arial, sans-serif;
           
        }

        .vnimanie {
            color: red;
        }
    </style>
<?php

$db = mysqli_connect('localhost','root','','smart_build') or
die ("Не могу подключится к сереверу!");
mysqli_set_charset($db,'utf8');
$message = "";
$success = "";
$fam = "";
$NAME = "";
//$middle_name = "";
$nambe_phone = "";
$date_birth_s = "";
$gragdanctvo = "";
$kod_OKIN = "";
/*$e_mail = "";
$g_m = "";
$cantry_birth = "";
$oblast_birth = "";
$city_birth = "";
$passport_series = "";
$passport_namber = "";
$date_passport = "";
$date_reg_place_live = "";
$who_passport = ""; 
$canrty_passport = "";
$oblast_passport = "";
$sity_passport = "";
$strit_passport = "";
$hose_passport = "";
$kvart_passport  = "";
$canrty_fakt = "";
$oblast_fakt = "";
$sity_fact = "";
$strit_fact = "";
$hose_fact = "";
$kvart_fact = "";
$pocht_index_fact = "";
$name_organiz = "";
$nambe_tryd_dogovor = "";
$date_trud_dogovor = "";
$tabel_namber = "";
$alfavit = "";
$charakter_w  = "";
$vid_w = "";
$nambe_trud_book = "";
$LANGUAGE = "";
$yroven = "";
$vid_education = "";
$name_plase_education_osn = "";
$date_start_education = "";
$date_end_education = "";
$name_dok = "";
$seria_dok = "";
$namber_dok = "";
$kvalific = "";
$cpecialnost = "";
$date_dok_education = "";
$vid_prof_education = "";
$name_prof_place_edication = "";
$date_start_prof_education = "";
$date_end_prof_education = "";
$namber_dok_prof_education = "";
$cpecialnost_prof_education = "";
$date_dok_prof_education = "";
$dey_o = "";
$let_o = "";
$month_o = "";
$dey_nep = "";	
$let_nep  = "";
$month_nep = "";
$dey_n = "";
$let_n = ""; 
$month_n = "";
$vid_profession = "";
$dolgnost = "";
$kvalifik = "";
$otvet_gotovnost = "";
$kol_project = "";
$date_attest = "";
$resh_kommis_attest ="";
$namber_protocol_attest = "";
$date_prortocol_attest = "";
$osnovanie_attaest = "";
$namber_passport_health = "";
$namber_strax_polis = "";
$name_organ_polis = "";
$ospasn_proizv_factor = "";
$date_zakl  = "";
$otvet_docter = "";
$rezyltat_tip_person = "";
$namber_snils = "";
$date_snils = "";
$namber_inn = "";
$date_inn = "";
$name_organiz  = "";
$kod_organa_inn = "";
$namber_voinsk_ychet = "";
$kategoria_zapas = "";
$sostav_profil = "";
$poln_kod_obozn_VYC = "";
$kategor_gonosty_voin_slygb = "";
$name_voin_kommisariat = "";
$sost_in_voin_ychet = "";
$otmetka_cnat_voin_ycheta = "";
$dop_information = "";
$dop_information = "";
$pa_sotryd = "";
$dostyp = "";*/

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  
    $gragdanctvo = $_POST["gragdanctvo"];
    $kod_OKIN = $_POST["kod_OKIN"];


if($gragdanctvo!="" && $kod_OKIN!="")
{
    if($gragdanctvo==$kod_OKIN) {}

else
{
    $strSQL2="INSERT INTO gragdanstvo(id_gragdanstvo, gragdanctvo, kod_OKIN) VALUES (NULL, '".$gragdanctvo."', '".$kod_OKIN."')";
    $result2=$db->query($strSQL2)
or die("Не могу выполнить запрос2!");
$message="<tr><td bgcolor='#66cc66' align='center'>
<b>Сотрудник успешно добавлен</b></td></tr>";
$success=true;
}
}
else
$message="<tr><td bgcolor='#ff9999' align='center'>
<b>Не все поля заполнены!!!</b></td></tr>";
}


$strSQL1="SELECT * FROM  gragdanstvo WHERE gragdanctvo='".$gragdanctvo. "'";
$result1=$db->query($strSQL1)
or die("Не могу выполнить запрос3!"); if($row=mysqli_fetch_array($result1))
{
//session_start();#session_register()
$_SESSION["id_gragdanstvo"]=$row["id_gragdanstvo"];
$success=true;
}

if (session_status() == PHP_SESSION_NONE) { //if there's no session_start yet...
    session_start(); //do this
}

$id_gragdanstvo_s=$_SESSION["id_gragdanstvo"];

//var_dump($id_place_birth);//string(3) "123" 
$id_gragdanstvo = (int)$id_gragdanstvo_s;
//var_dump($id_place_birth);//int(123)

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fam = $_POST["fam"];
    $NAME = $_POST["NAME"];
   // $middle_name = $_POST[" middle_name "];
    $nambe_phone = $_POST ["nambe_phone"];
    $date_birth_s = $_POST["date_birth"];


if($fam!="" && $NAME!="" && $nambe_phone!=""/* && $middle_name!=""*/ && $date_birth_s!="")
{
    if($fam==$NAME) {}

else
{
	$strSQL1="SELECT id_sotrydnic FROM sotrydnic WHERE fam = '".$fam."'";
    $result1=$db->query($strSQL1) 
or die("Не могу выполнить запрос!"); 
if($row=mysqli_fetch_array($result1))
{
	$message="<tr><td bgcolor='#ff9999' align='center'>
<b>Такой сотрудник уже существует!!!</b></td></tr>";
}
else
{
$date_birth= date($date_birth_s);
$strSQL1="INSERT INTO sotrydnic (id_sotrydnic, fk_place_work, fk_tryd_dogovor, fam, NAME, middle_name, date_birth, fk_pol, fk_place_birth, fk_gragdanstvo, fk_inostran, fk_education, fk_sost_brak, fk_sostav_family, passport_series, passport_namber, date_passport, who_passport, skan_passport_osn, skan_passport_reg, fk_work_experience, fk_profession, fk_trud_book, fk_snils, fk_inn, fk_passport_health, fk_tip_person, fk_gotovn_k_komandirovkam, kol_project, fk_adress_fakt, fk_adress_passport, date_reg_place_live, nambe_phone, e_mail, fk_voinsk_ychet, fk_add_and_perevod, fk_attest, fk_pov_kvalifik, fk_kvalifik, fk_prov_perepodgotovka, fk_nagrada, fk_otpysk, fk_soc_lgots, dop_information, fk_del, login_sotryd, pa_sotryd, photo_sotryd, fk_dostyp, fk_zanatost) VALUES (NULL, NULL, NULL, '".$fam."','".$NAME."', '".$middle_name."', '".$date_birth."', NULL,NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '".$nambe_phone."', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
$result1=$db->query($strSQL1)
or die("Не могу выполнить запрос2!");
$message="<tr><td bgcolor='#66cc66' align='center'>
<b>Сотрудник успешно добавлен</b></td></tr>";
$success=true;
}
}
}
else
$message="<tr><td bgcolor='#ff9999' align='center'>
<b>Не все поля заполнены!!!</b></td></tr>";
}
 
print $message;

if(!$success)
{
?>
<?php

if ($gragdanctvo == '<br /><b>Notice</b>:  Undefined variable: fam in <b>C:\xamppp\htdocs\Online_Store\addsotrydnic.php</b> on line <b>74</b><br />')
{
	//$fam = "";
   //$NAME = "";
    //$middle_name = "";
   // $nambe_phone = "";
   // $date_birth = "";
   $gragdanctvo = "";
 }
?>
   
    <div class="blok1">
        <button class="button2" onClick="but1()"> Отмена
                <script>
                    function but1()
                        {
                            window.location = "user_manager.php"
                        }
                </script>
            </button>   
    </div>
    <form action=addsotrydnic.php method=post>
    <center>
        <div class="blok2"> 
        <i><h3> Основные данные</i></h3><p></p>
            <table border="0" width="90%" align="center">
                <td align="center" width="30%">Фамилия: <p></p> 
                    <input type="text"  class="textbox3" name= fam value="<?php print $fam ?>">
                    <td align="center" width="30%">Имя: <p></p> 
                    <input type="text"  class="textbox3" name= NAME value="<?php print $NAME ?>"> 
                    <td align="center" width="30%">Отчество: <p></p> 
                    <input type="text"  class="textbox3" name= middle-name value="<?php print $middle_name ?>">
                    </div>
                    <td>
                    <td align="center" width="30%">Контактный телефон: <p></p>  
                    <input type="text"  class="textbox3" name= nambe_phone value="<?php print $nambe_phone ?>" ><td>   
                <tr>
            </table>
            <p></p>
            <table border="0" width="90%" align="center">
                <td align="center" width="30%"> Дата рождения <p></p>
                <input type="text" class="textbox3" name= date_birth value="<?php print $date_birth ?>"> <td>
                <td align="center" width="30%"> Гражданство <p></p>
                <input type="text" class="textbox3" name= gragdanctvo value="<?php print $gragdanctvo ?>"> <td>
                <td align="center" width="30%"> Код ОКИН <p></p>
                <input type="text" class="textbox3" name= kod_OKIN value="<?php print $kod_OKIN ?>"> <td>
                <td align="center" width="30%"> E-mail <p></p>
                <input type="text" class="textbox3" name= e_mail> <td>
                <td align="center" width="30%"> Пол <p></p>
                <select name="select" size="1" class="textbox4">
                    <option value="g">Женский</option>
                    <option value="m">Мужской</option>
                </select>     
            </table>
        <p></p>
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <i><h3> Место рождения</i></h3><p></p>
            <table border="0" width="90%" align="center">
                <td align="center" width="30%"> Страна <p></p>
                <input type="text" class="textbox3" name=cantry_birth > <td>
                <td align="center" width="30%"> Область <p></p>
                <input type="text" class="textbox3" name=oblast_birth > <td>
                <td align="center" width="30%"> Город <p></p>
                <input type="text" class="textbox3" name=city_birth> <td>   
            </table>
            <p></p>
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <i><h3> Паспортные данные</i></h3><p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%"> Серия паспорта <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%"> Номер паспорта <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
                    <td align="center" width="30%"> Дата получения паспорта <p></p>
                    <input type="text" class="textbox3" name=city_birth> <td>
                    <td align="center" width="30%"> Дата регистрации по месту жительства <p></p>
                    <input type="text" class="textbox3" name=city_birth> <td>   
            </table>
        <p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="100%"> Кем выдан <p></p>
                    <input type="text" class="textbox5" name=cantry_birth > <td>  
            </table>
        <p></p>
        <i><h3> Адрес регистрации</i></h3><p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%"> Страна <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%"> Область <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
                    <td align="center" width="30%"> Город <p></p>
                    <input type="text" class="textbox3" name=city_birth> <td>
            </table>
        <p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%"> Улица <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%"> Дом <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
                    <td align="center" width="30%"> Квартира <p></p>
                    <input type="text" class="textbox3" name=city_birth> <td>  
            </table>
        <p></p>
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <i><h3> Фактический адрес проживания</i></h3><p></p>
        <table border="0" width="90%" align="center">
                    <td align="center" width="30%"> Страна <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%"> Область <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
                    <td align="center" width="30%"> Город <p></p>
                    <input type="text" class="textbox3" name=city_birth> <td>
            </table>
        <p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%"> Улица <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%"> Дом <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
                    <td align="center" width="30%"> Квартира <p></p>
                    <input type="text" class="textbox3" name=city_birth> <td>
                    <td align="center" width="30%"> Почтовый индекс <p></p>
                    <input type="text" class="textbox3" name=city_birth> <td>  
            </table>
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <i><h3> Трудовой договор</i></h3><p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%"> Место работы (название организация) <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%"> Номер трудового договора <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
                    <td align="center" width="30%"> Дата трудового договора <p></p>
                    <input type="text" class="textbox3" name=city_birth> <td>
                    <td align="center" width="30%"> Табельный номер<p></p>
                    <input type="text" class="textbox3" name=city_birth> <td>
            </table>
        <p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%"> Алфавит <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%"> Характер работы <p></p>
                    <select name="select" size="1" class="textbox4">
                        <option value="g">Полная занятость</option>
                        <option value="m">Частичная занятость</option>
                        <option value="m">Временная работа</option>
                        <option value="m">Стажировка</option>
                    </select> <td>
                    <td align="center" width="30%"> Вид работы <p></p>
                    <select name="select" size="1" class="textbox4">
                        <option value="g">Основная</option>
                        <option value="m">По совместительству</option>
                    </select> <td>
                    <td align="center" width="30%"> Номер трудовой книжки<p></p>
                    <input type="text" class="textbox3" name=city_birth> <td>
            </table>
        <p></p>
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <i><h3> Образование</i></h3><p></p>
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <h3><input type="checkbox" name ="remember"> Знание иностранного языка</h3><p></p>
               <div class="vnimanie">При отметке обязательно нужно заполнить поля!!!  </div> 
                <?php/*
                if(!empty($_POST)){
                if(!empty($_POST['remember'])){
                echo 'checkbox был отмечен, запоминаем поля по введеным данным';
                }else{
                echo 'записываем нули';
                }
                } */?> 
        <p></p>
            <table border="0" width="90%" align="center">
                        <td align="center" width="30%"> Язык <p></p>
                        <input type="text" class="textbox3" name=cantry_birth > <td>
                        <td align="center" width="30%"> Уровень знания языка <p></p>
                        <select name="select" size="1" class="textbox4">
                            <option value="g">Начальный</option>
                            <option value="m">Средний</option>
                            <option value="m">Выше среднего</option>
                            <option value="m">Высокий</option>
                        </select> <td>
                </table>
        <p></p>
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <i><h3> Основное образование</i></h3><p></p>
        <table border="0" width="90%" align="center">
        <td align="center" width="30%"> Вид образования <p></p>
                        <select name="select" size="1" class="textbox4">
                            <option value="g">Среденее специальное</option>
                            <option value="m">Высшее (бакалавриат)</option>
                            <option value="m">Высшее (специалитет)</option>
                            <option value="m">Высшее (магистратура)</option>
                            <option value="m">Высшее (аспирантура)</option>
                        </select><td>
                        <td align="center" width="30%"> Название учебного учреждения <p></p>
                        <input type="text" class="textbox3" name=cantry_birth >
                    <td align="center" width="30%">Дата поступления <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%"> Дата окончания <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
            </table>
        <p></p>
        <i><h3> Документ </i></h3><p></p>
        <table border="0" width="90%" align="center">
                    <td align="center" width="30%"> Название документа <p></p>
                    <input type="text" class="textbox3" name=cantry_birth >
                        <td align="center" width="30%">Серия документа <p></p>
                        <input type="text" class="textbox3" name=cantry_birth >
                    <td align="center" width="30%">Номер документа <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
            </table>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%"> Квалификация <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
                    <td align="center" width="30%"> Специальность по документу <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
                    <td align="center" width="30%"> Дата документа <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
            </table>
        <p></p>
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <h3><input type="checkbox" name ="remember2"> Послевузовское профессиональное образование</h3><p></p>
               <div class="vnimanie">При отметке обязательно нужно заполнить поля!!!  </div> 
                <?php/*
                if(!empty($_POST)){
                if(!empty($_POST['remember2'])){
                echo 'checkbox был отмечен, запоминаем поля по введеным данным';
                }else{
                echo 'записываем нули';
                }
                }*/ ?> 
        <p></p>
        <table border="0" width="90%" align="center">
        <td align="center" width="30%"> Вид образования <p></p>
                        <select name="select" size="1" class="textbox4">
                            <option value="g">Среденее специальное</option>
                            <option value="m">Высшее (бакалавриат)</option>
                            <option value="m">Высшее (специалитет)</option>
                            <option value="m">Высшее (магистратура)</option>
                            <option value="m">Высшее (аспирантура)</option>
                        </select><td>
                        <td align="center" width="30%"> Название учебного учреждения <p></p>
                        <input type="text" class="textbox3" name=cantry_birth >
                    <td align="center" width="30%">Дата поступления <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%"> Дата окончания <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
            </table>
        <p></p>
        <i><h3> Документ </i></h3><p></p>
        <table border="0" width="90%" align="center">
                    <td align="center" width="30%"> Номер документа <p></p>
                    <input type="text" class="textbox3" name=cantry_birth >
                    <td align="center" width="30%"> Специальность по документу <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
                    <td align="center" width="30%"> Дата документа <p></p>
                    <input type="text" class="textbox3" name=oblast_birth > <td>
            </table>
        <p></p>
        <p></p>
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <i><h3> Профессиональный опыт</i></h3><p></p>
        <div class="vnimanie">При отметке обязательно нужно заполнить поля!!!  </div> 
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <table border="0" width="90%" align="center">
        <td><input type="checkbox" name ="remember3"> Основной<p></p>
                    Дней 
                        <input type="text" class="textbox3" name=cantry_birth > <p></p>
                    Месяцев 
                    <input type="text" class="textbox3" name=cantry_birth >  <p></p>
                     Лет 
                    <input type="text" class="textbox3" name=oblast_birth > <p></p>
                <?php /*
                if(!empty($_POST)){
                if(!empty($_POST['remember3'])){
                echo 'checkbox был отмечен, запоминаем поля по введеным данным';
                }else{
                echo 'записываем нули';
                }
                } */?> <td>
            <input type="checkbox" name ="remember4"> Непрерывный<p></p>
                    Дней 
                        <input type="text" class="textbox3" name=cantry_birth > <p></p>
                    Месяцев 
                    <input type="text" class="textbox3" name=cantry_birth > <p></p>
                     Лет 
                    <input type="text" class="textbox3" name=oblast_birth > <p></p>
               
                <?php/*
                if(!empty($_POST)){
                if(!empty($_POST['remember4'])){
                echo 'checkbox был отмечен, запоминаем поля по введеным данным';
                }else{
                echo 'записываем нули';
                }
                } */?> 
                
            <td><input type="checkbox" name ="remember5"> Стаж, который дает правл на надбавку<p></p>
            Дней 
                        <input type="text" class="textbox3" name=cantry_birth > <p></p>
                   Месяцев 
                    <input type="text" class="textbox3" name=cantry_birth > <p></p>
                     Лет 
                    <input type="text" class="textbox3" name=oblast_birth > <p></p>
                <?php/*
                if(!empty($_POST)){
                if(!empty($_POST['remember5'])){
                echo 'checkbox был отмечен, запоминаем поля по введеным данным';
                }else{
                echo 'записываем нули';
                }
                }*/ ?> 
        </table><p></p>
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <i><h3> Профессия</i></h3><p></p>
        <table border="0" width="90%" align="center">
        <td align="center" width="30%"> Вид профессии <p></p>
                        <select name="select" size="1" class="textbox4">
                            <option value="g">Основная</option>
                            <option value="m">Дополнительная</option>
                        </select><td>
                        <td align="center" width="30%"> Должность <p></p>
                        <input type="text" class="textbox3" name=cantry_birth >
                    <td align="center" width="30%">Квалификация <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
            </table>
            <i><h3> ______________________________________________________________________________________</i></h3><p></p>  
            <p></p>
            <table border="0" width="90%" align="center">
            <td align="center" width="30%"> Готовность к командировкам <p></p>
                            <select name="select" size="1" class="textbox4">
                                <option value="g">Готов</option>
                                <option value="m">Не готов</option>
                            </select><td>
                            <td align="center" width="30%">Количество участий в прошлых проектах <p></p>
                            <input type="text" class="textbox3" name=cantry_birth >
            </table> 
            <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <i><h3> Аттестация</i></h3><p></p>
        <table border="0" width="90%" align="center">
                        <td align="center" width="30%"> Дата <p></p>
                        <input type="text" class="textbox3" name=cantry_birth >
                    <td align="center" width="30%">Решение коммисии <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Номер протокола <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Дата протокола <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
            </table>
            <p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%">Основание проведения аттестации <p></p>
                    <input type="text" class="textbox5" name=cantry_birth > <td>
            </table>
            <i><h3> ______________________________________________________________________________________</i></h3><p></p>
        <i><h3> Паспорт здоровья</i></h3><p></p>
        <table border="0" width="90%" align="center">
                        <td align="center" width="30%">Номер паспорта <p></p>
                        <input type="text" class="textbox3" name=cantry_birth >
                    <td align="center" width="30%">Номер страхового полиса <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Организация страхового полиса <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Дата медицинского осмотра <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
            </table>
            <p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%">Опасные факторы работы <p></p>
                    <input type="text" class="textbox5" name=cantry_birth > <td>
                    <td align="center" width="30%">Дата заключения врача <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Заключение врача <p></p>
                    <select name="select" size="1" class="textbox4">
                                <option value="g">Допуск</option>
                                <option value="m">Отказ</option>
                            </select><td>
            </table>
            <i><h3> ______________________________________________________________________________________</i></h3><p></p>
            Результат теста типа личности
            <input type="text" class="textbox5" name=cantry_birth >
            <i><h3> ______________________________________________________________________________________</i></h3><p></p>
            <i><h3>СНИЛС</i></h3><p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%">Номер СНИСЛ<p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Дата СНИЛС <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
            </table>
            <i><h3> ______________________________________________________________________________________</i></h3><p></p>
            <i><h3>ИНН</i></h3><p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%">Номер ИНН<p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Дата ИНН <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Название органицации ИНН <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Код организации ИНН<p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
            </table>
            <i><h3> ______________________________________________________________________________________</i></h3><p></p>
            <i><h3>Воинский учет</i></h3><p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%">Номер воинского билета<p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Категория запаса<p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Состав (профиль) <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Полное кодовое обозначение ВУС<p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
            </table>
            <p></p>
            <table border="0" width="90%" align="center">
                    <td align="center" width="30%">Категория годности к военной службе<p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Наименование военного камиссариата по месту жительства<p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Состояние на воинском учете <p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Отметка о снятии с воинского учета<p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
            </table>
            <i><h3> ______________________________________________________________________________________</i></h3><p></p>
            <i><h3>Дополнительная информации</i></h3><p></p>
            <table border="0" width="90%" align="center">
                    <input type="text" class="textbox5" name=cantry_birth > <td>
                    <td align="center" width="30%">Логин<p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Пароль<p></p>
                    <input type="text" class="textbox3" name=cantry_birth > <td>
                    <td align="center" width="30%">Доступ <p></p>
                    <select name="select" size="1" class="textbox4">
                                <option value="g">Администратор</option>
                                <option value="m">Менеджер отдела кадров</option>
                                <option value="m">Строитель</option>
                                <option value="m">Руководитель проекта</option>
                            </select><td>
            </table>
            <p></p>
            <button class="button2" onClick="but2()"> Добавить сотрудника
                <script>
                    function but2()
                        {
                            window.location = "user_manager.php"
                        }
                </script>
            </button> 
            <?php
            mysqli_close($db);
            } ?>
        </div>
    </center>
</body>