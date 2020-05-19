<?php
include 'cabinet.php';
?>

<head>
<title>MESSAGES</title>
		<meta charset=”utf-8”>
	    <link rel="stylesheet" href="css/normalize.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    	<link rel="stylesheet" href="css/style.css">       
</head>

<body>
<?php 
$db = mysqli_connect('localhost', 'root', '', 'smart_build') or
die ("Не могу подключиться к	серверу!"); 
mysqli_set_charset($db,'utf8');
$message ="";
$success = "";
$fam = "";
$NAME = "";
$cantry_birth = "";
$oblast_birth = ""; 	

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  
    $cantry_birth = $_POST["cantry_birth"];
    $oblast_birth = $_POST["oblast_birth"];


if($cantry_birth!="" && $oblast_birth!="")
{
    if($cantry_birth==$oblast_birth) {}

else
{
    $strSQL2="INSERT INTO place_birth (id_place_birth, cantry_birth, oblast_birth, city_birth, kod_OKATO) VALUES (NULL, '".$cantry_birth."', NULL, NULL, NULL)";
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


$strSQL1="SELECT * FROM  place_birth  WHERE cantry_birth='".$cantry_birth. "'";
$result1=$db->query($strSQL1)
or die("Не могу выполнить запрос3!"); if($row=mysqli_fetch_array($result1))
{
//session_start();#session_register()
$_SESSION["id_place_birth"]=$row["id_place_birth"];
$success=true;
}

if (session_status() == PHP_SESSION_NONE) { //if there's no session_start yet...
    session_start(); //do this
}

$id_place_birth_s=$_SESSION["id_place_birth"];

//var_dump($id_place_birth);//string(3) "123" 
$id_place_birth = (int)$id_place_birth_s;
//var_dump($id_place_birth);//int(123)

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fam = $_POST["fam"];
    $NAME = $_POST["NAME"];


if($fam!="" && $NAME!="")
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
$strSQL1="INSERT INTO sotrydnic (id_sotrydnic, fk_place_work, fk_tryd_dogovor, fam, NAME, middle_name, date_birth, fk_pol, fk_place_birth, fk_gragdanstvo, fk_inostran, fk_education, fk_sost_brak, fk_sostav_family, passport_series, passport_namber, date_passport, who_passport, skan_passport_osn, skan_passport_reg, fk_work_experience, fk_profession, fk_trud_book, fk_snils, fk_inn, fk_passport_health, fk_tip_person, fk_gotovn_k_komandirovkam, kol_project, fk_adress_fakt, fk_adress_passport, date_reg_place_live, nambe_phone, e_mail, fk_voinsk_ychet, fk_add_and_perevod, fk_attest, fk_pov_kvalifik, fk_kvalifik, fk_prov_perepodgotovka, fk_nagrada, fk_otpysk, fk_soc_lgots, dop_information, fk_del, login_sotryd, pa_sotryd, photo_sotryd, fk_dostyp, fk_zanatost) VALUES (NULL, NULL, NULL, '".$fam."','".$id_place_birth."', NULL, NULL, NULL,'".$id_place_birth."', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
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

if ($fam == '<br /><b>Notice</b>:  Undefined variable: fam in <b>C:\xamppp\htdocs\Online_Store\addsotrydnic.php</b> on line <b>74</b><br />')
{
	$fam = "";
    $NAME = "";
    $cantry_birth = "";
    $oblast_birth = "";
 }
 ?>
<form action=massages.php method=post>

<div class="right_block"> 
    <center>
        <div class="log-text">
        </div>
      
        <table border="0" width="85%" align="center">
							<td align="center" width="75%">ФИ: <td>
							
							<tr>
        </table>
        <p></p>
        <div class="osnov-dann">
            
            <input type="text" value="<?php print $fam ?>" class="fam" name= fam with="50px" >
            <input type="text"  value="<?php print $NAME ?>" class="NAME" name= NAME>
            
        </div> 
        <h4>Место рождения</h4> <p></p>
        <table border="0" width="85%" align="center">
							<td align="left" width="20%">Страна: <p></p>
                            <input type="text" value="<?php print $cantry_birth ?>" class="cantry_birth" name= cantry_birth > <td>
                            <td align="left" width="20%">Область: <p></p>
                            <input type="text" value="<?php print $oblast_birth ?>" class="coblast_birth" name= oblast_birth > <td>
        </table>
       
        <button class="button button1" onClick="but2()"> Далее
                    <script>
                    function but2()
                            {
                                window.location = "massages.php"
                            }
                    </script>
        </button>
        <?php 
mysqli_close($db);
} 
?>
        <button class="button button1" onClick="but3()"> Отмена
                    <script>
                    function but3()
                            {
                                window.location = "user_manager.php"
                            }
                    </script>
        </button>
    </center>
</div>
</body>
