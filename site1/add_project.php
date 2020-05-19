
<title>Добавление проекта</title>
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
        .textbox6 {
            border-radius: 5px;
            padding: 5px 3px;
            font-family: Verdana, Helvetica, Arial, sans-serif;
           
        }

        .vnimanie {
            color: red;
        }
    </style>

   
    <div class="blok1">
        <button class="button2" onClick="but1()"> Отмена
                <script>
                    function but1()
                        {
                            window.location = "project.php"
                        }
                </script>
            </button>   
    </div>
    <center>
        <div class="blok2"> 

            <i><h3>Основные данные проекта</i></h3><p></p> 
        <table border="0" width="85%" align="center">
                            <td align="left" width="40%">Код проекта <p></p> 
                            <input type="text" class="textbox3" name= fam_sotr ><td>
                        <td align="left" width="40%"> Дата утверждения: <p></p> 
                        <input type="text" class="textbox3" name= fam_sotr ><td>
                        <td align="left" width="40%"> Краткое описание: <p></p> 
                        <input type="text" class="textbox3" name= fam_sotr ><td>
        </table> 
<p></p>
<i><h3> ______________________________________________________________________________________</i></h3><p></p>
            <i><h3>Руководитель проекта</i></h3><p></p>
        <table border="0" width="85%" align="center">
                            <td align="center" width="70%"> ФИО: <p></p>
                            <input type="text" class="textbox3" name= name_sotr with="50px" >
                            <input type="text" class="textbox3" name= name_sotr with="50px" >
                            <input type="text" class="textbox3" name= name_sotr with="50px" ><p></p>
                            <td align="center" width="30%"> Контактный телефон: <p></p>
                            <input type="text" class="textbox3" name= name_sotr with="50px" ><p></p>
		</table>
        <p></p>
        <table border="0" width="85%" align="center">
                            <td align="left" width="20%"> Серия паспорта <p></p> 
                            <input type="text" class="textbox3" name= fam_sotr ><td>
                            <td align="left" width="20%"> Номер пасспорта: <p></p> 
                            <input type="text" class="textbox3" name= fam_sotr ><td>
                            <td align="left" width="20%"> Дата пасспорта: <p></p> 
                            <input type="text" class="textbox3" name= fam_sotr ><td>
                            <td align="left" width="20%"> Кем выдан: <p></p> 
                            <input type="text" class="textbox3" name= fam_sotr ><td>
        </table> 
        <p></p>
        <table border="0" width="85%" align="center">
                            <td align="left" width="40%">e-mail <p></p>
							<input type="text" class="textbox3" name= fam_sotr ><td>
                            <td align="left" width="40%"> Логин: <p></p> 
                            <input type="text" class="textbox3" name= fam_sotr ><td>
                            <td align="left" width="40%"> Пароль: <p></p> 
                            <input type="text"class="textbox3" name= fam_sotr ><td>
                            <td align="left" width="40%"> Доступ: <p></p> 
                            <select name="select" size="1" class="textbox4">
                                <option value="g">Администратор</option>
                                <option value="m">Менеджер отдела кадров</option>
                                <option value="m">Строитель</option>
                                <option value="m">Руководитель проекта</option>
                            </select><td>
        </table> 
        <p></p>
        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
            <i><h3>Место проекта</i></h3><p></p>
        
        <table border="0" width="85%" align="center">
                            <td align="left" width="30%">Страна <p></p> 
							<input type="text" class="textbox3" name= fam_sotr ><td>
                        <td align="left" width="30%"> Область: <p></p> 
                        <input type="text"class="textbox3" name= fam_sotr ><td>
                        <td align="left" width="30%"> Город: <p></p> 
                        <input type="text" class="textbox3" name= fam_sotr ><td>
        </table> 
        <p></p>
        <table border="0" width="85%" align="center">
                            <td align="left" width="40%"> Улица: <p></p> 
                            <input type="text" class="textbox3" name= fam_sotr ><td>
                            <td align="left" width="40%">Код объекта <p></p>
							<input type="text" class="textbox3" name= fam_sotr ><td>
        </table> 
        <p></p>
                        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
                        <i><h3> Вид объекта строительства и его поля</i></h3><p></p>
                        <div class="vnimanie">При отметке обязательно нужно заполнить поля!!!  </div> 
                        <i><h3> ______________________________________________________________________________________</i></h3><p></p>
                        
                         
        <table border="0" width="100%" align="center">
        <td align="center" width="20%"><input type="checkbox" name ="remember3"> Здание<p></p>
                                        <?php
                                            if(!empty($_POST)){
                                            if(!empty($_POST['remember3'])){
                                            echo 'checkbox был отмечен, запоминаем поля по введеным данным';
                                            }else{
                                            echo 'записываем нули';
                                            }
                                            }
                                        ?> <td>
            <td align="center" width="50%"><input type="checkbox" name ="remember4"> Дорога<p></p>
            <?php
                                            if(!empty($_POST)){
                                            if(!empty($_POST['remember4'])){
                                            echo 'checkbox был отмечен, запоминаем поля по введеным данным';
                                            }else{
                                            echo 'записываем нули';
                                            }
                                            } 
                                        ?> 
                                
            <td align="center" width="40%"><input type="checkbox" name ="remember5"> Мост<p></p>

            <?php
                                            if(!empty($_POST)){
                                            if(!empty($_POST['remember5'])){
                                            echo 'checkbox был отмечен, запоминаем поля по введеным данным';
                                            }else{
                                            echo 'записываем нули';
                                            }
                                            } 
                                        ?>            
        </table> 
        <table border="0" width="105%" align="center">
                           <td>
                                    Продолжительность рабочего дня <p></p>
                                    <input type="text" class="textbox6" name=cantry_birth > <p></p>
                                    Заданный срок выполнения проекта (рабочие дни) <p></p>
                                    <input type="text" class="textbox6" name=cantry_birth >  <p></p>
                                    Объем грунта (м3) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Количество столбчатых фундаментов (шт) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Объем кирпичной кладки стен  (шт) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Объем кирпичной кладки перегородок  (шт) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Количество колонн  (шт) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Количество перемычек (шт) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Количество плит перекрытия  (шт) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Количество ригелей  (шт) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Площадь этажа (м2) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Площадь этажа (м2) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Количество этажей (шт) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Площадь стен этажа (м2) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Площадь входов-выходов в здание  (шт) <p></p>
                                   

                                   <td>
                                    Продолжительнось рабочего дня <p></p>
                                    <input type="text" class="textbox6" name=cantry_birth > <p></p>
                                    Заданный срок выполнения проекта (рабочие дни) <p></p>
                                    <input type="text" class="textbox6" name=cantry_birth > <p></p>
                                    Протяженность дороги (м) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Площадь дороги (м2) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Площадь обочин (м2) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Площадь откосов (м2) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Объем грунта (м3) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                       
                    <td>
                                   Продолжительность рабочего дня <p></p>
                                    <input type="text" class="textbox6" name=cantry_birth > <p></p>
                                    Заданный срок выполнения проекта (рабочие дни) <p></p>
                                    <input type="text" class="textbox6" name=cantry_birth > <p></p>
                                    Объем грунта (м3) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Ширина мостового сооружения (м) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Длина подхода к мостовому сооружению (м) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Площадь откосов (м2) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Количество упорв для укрепления откосов (шт) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Количество опор (шт) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Количество ригелей (шт) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                    Длина мостового сооружения (м) <p></p>
                                    <input type="text" class="textbox6" name=oblast_birth > <p></p>
                                       
                        </table><p></p>
        </div>
    </center>
    <center>
   <div class="blok1">
        <button class="button2" onClick="but1()"> Добавить проект
                <script>
                    function but1()
                        {
                            window.location = "project.php"
                        }
                </script>
            </button>   
    </div></center>
</body>