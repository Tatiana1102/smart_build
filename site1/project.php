<?php
include 'cabinet.php';
?>
<title>PROJECT</title>
		<meta charset=”utf-8”>
	    <link rel="stylesheet" href="css/normalize.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    	<link rel="stylesheet" href="css/style.css">       
</head>

<<body>
	<table></table>
	<div class="right_block">
		<center>	
		<div class="blok-poisk">
			<div class="log-text">
				Список проектов
				<?php
					include("connect.php");
					?>
					 <div class="text">
						<table border="0" width="85%" align="center" bgcolor="#e3dfd3" height= 570px>
							<td align="left" width="85%"><i>Название проекта: </i>
							<p><i>Дата: </i></p>
							<p><i>Описание: </i></p></td>
							<td> <button class="button button1" onClick="but1()">   Подробнее </div>
							</td>
							<tr>
						</table>
					</div>
			</div>
		</div>
		<div class="text-nav">
			<p><p><p><p><p><p><p><p></p></p></p></p></p></p></p></p>
			<button class="button button1" onClick="but1()">  Добавить проект
                    <script>
                    function but1()
                            {
                                window.location = "add_project.php"
                            }
                    </script>
                </button>    
		</div>
	</center>
	
	</div>
	
	
	
</body>