<!-- http://купи-лендинг.рф -->

<!DOCTYPE html>
<html>
    <head>
        <title>Спасибо</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            </head>
            <body>
	<div class="block_c1">
		<div class="wrapp">
			<div class="woman">
				<h2>Спасибо за заявку!</h2>
				<div class="pos">
					<p class="sale_man">Наш менеджер свяжется с вами<br>в течение <b>2 часов.</b><br><br>

					<a href="/" class="btn" >Назад к сайту</a>

					</p>					


					<p class="time">Мы работаем с <b>9:00</b> до <b>20:00</b> с Пн-Пт.</p>
				</div>
			</div>
		</div>
	</div>
<style>
/* fonts */


/* defaul style end */
* {
	margin:0;
	padding:0;
	outline: none;
}

html, body {
	background: url(img/block_c1.jpg)  no-repeat center center fixed;
	width: 100%;
	height: 736px;
	color: #ffffff;
	    width: 100%;
	            -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}

a{
	text-decoration: none;
	color: #000000;
}
.wrapp {
	width: 960px;
	margin: 0 auto;
	padding: 0 20px;
	position: relative;
	z-index: 0;
}

.wrapp:after {
	content: '.';
	width: 0;
	height: 0;
	visibility: hidden;
	display: block;
	clear: both;
	position: relative;
}

.cl:after {
	content: '.';
	width: 0;
	height: 0;
	visibility: hidden;
	display: block;
	clear: both;
	position: relative;
}

.btn{
background: rgb(255,202,3); /* Old browsers */ /* FF3.6+ */ /* Chrome,Safari4+ */ /* Chrome10+,Safari5.1+ */ /* Opera 11.10+ */ /* IE10+ */
background: -webkit-linear-gradient(rgba(255,202,3,1) 0%, rgba(255,183,1,1) 48%, rgba(255,165,0,1) 100%);
background: -o-linear-gradient(rgba(255,202,3,1) 0%, rgba(255,183,1,1) 48%, rgba(255,165,0,1) 100%);
background: linear-gradient(rgba(255,202,3,1) 0%, rgba(255,183,1,1) 48%, rgba(255,165,0,1) 100%); /* W3C */
filter: progid:DXImageTransform:;ft.gradient( startColorstr='#ffca03', endColorstr='#ffa500',GradientType=0 ); /* IE6-9 */
border:1px solid #fc930b;
border-radius:10px;
padding: 15px 23px;
font-size: 18px;
line-height: 20px;
color: #000;
font-family: 'pf_square_sans_probold';
cursor: pointer;
margin:auto;
}


.woman{
	padding-top: 136px;
	background: url(img/woman.png) center no-repeat;
	width: 902px;
	height: 535px;	
	margin: 0 auto;
}
.block_c1 h2{
	color: #ffffff;
	font-size:60px;
	line-height:14px;
	margin-left: 28px;
	padding-bottom: 42px;
	font-family: 'pf_square_sans_proregular';
}
.block_c1 .pos{
	margin-left: 47px;
}
.block_c1 .pos .sale_man {
	font-size: 24px;
	line-height: 36px;
	margin-bottom: 101px;
}
.block_c1 .pos p b{
	color:#ffc402;
	font-size: 36px;
	line-height: 29px;
	font-family: 'pf_square_sans_proregular';
	 padding-top: 23px;
}
</style>
            </body>

</html>

<? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="alfastroy_00@mail.ru";  // e-mail админа 
 
$header="From: \"Заявка с сайта\" <admin@pppoe.ml>\n"; // от кого
$header.="Content-type: text/html; charset=\"utf-8\""; // кодировка
 
$date=date("d.m.y"); // число.месяц.год 
 
$time=date("H:i"); // часы:минуты:секунды 
 
$backurl="/";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
  
 
// Принимаем данные с формы 
 
$name=$_POST['name']; 
  
$phone=$_POST['phone']; 
 $message=$_POST['mess']; 
 $email=$_POST['email']; 
 $gorod=$_POST['ob']; 

$url=$_SERVER['REQUEST_URI'];
 $ip = $_SERVER['HTTP_REFERER'];
$msg=" 
<p>Имя: $name </p>
<p>Телефон: $phone </p>
<p>Email: $email </p>


<p>URL: $ip$url</p>
"; 
 
 // Отправляем письмо админу  
 
mail("$adminemail", "$to $date $time Сообщение 
от $name", "$msg", "$header"); 
 
// Сохраняем в базу данных 
 
$f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time Сообщение от $name"); 
 
fwrite($f,"\n $msg "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
 
 
// Выводим сообщение пользователю 
 
 
 

exit; 
 
?>
<!-- http://купи-лендинг.рф -->