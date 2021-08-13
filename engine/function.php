<?
require 'config.php';
//--------Функции-----------//
function CreateMenu($nameproject){
	echo "<div class=\"container head\">
			<div class=\"col-md-4 wow fadeInLeft\" data-wow-delay=\"1s\">
				<h3>Личный кабинет</h3><br>
				<a class=\"hlink hl-left\" href=\"/page/userpanel/\">Перейти в личный кабинет</a>
			</div>
			<div class=\"col-md-4 wow fadeInDown\"><img src=\"/classes/img/logo.png\"></div>
			<div class=\"col-md-4 wow fadeInRight\" data-wow-delay=\"1s\">
				<h3>Играть на сервере</h3><br>
				<a class=\"hlink hl-right\" href=\"samp://217.106.104.18:7777\">Подключиться к серверу</a><br><br><br>
                              
			</div>
		</div>
		<div class=\"container nav wow fadeInDown\" data-wow-delay=\"1s\">
			<a href=\"/index.php\">Главная</a>
			<a href=\"/forum\">Форум</a>
			<a href=\"/https://vk.com/ariant_01\">Группа VK</a>
			<a href=\"/donate.php\">Донат</a>
			<a href=\"/page/userpanel/\">Личный кабинет</a>
		</div>";
}

function FixName($name){
	$order = array("_");
	$replace = " ";
	$newstr = str_replace($order,$replace,$name);
	$pos = strpos($newstr," ",1);
	$name = substr($newstr,0,$pos);
	$subname = substr($newstr,$pos,24);
	echo "".$name." ".$subname."";
//
}
function ProtectMail($mail){
	$str = $mail;
	$langoldmail = strlen($str);
	$pos = strpos($str,"@",1);
	$namemail = substr($str,0,$pos);
	$langmail = strlen($namemail);
	$protectmail = substr($namemail,5,$langmail);
	$dommen = $namemail = substr($str,$pos,$langoldmail);
	echo "*****".$protectmail."".$dommen."";	
	
}
function ProtectPass($pass){
	$pstr = $pass;
	$langpass = strlen($pstr);
	if($langpass > 8)
	{
		$protectpass = substr($pstr,5,$langpass);
		echo "*****".$protectpass."";
	}
	else
	{
		$protectpass = substr($pstr,3,$langpass);
		echo "***".$protectpass."";
	}	
}
function Leader($leader)
{
	if($leader == 0)
	{
	echo "Отсутствует";
	}
	else
	{
	echo "организация № ".$leader."";
	}
}
function adminlvl($admin)
{
		if($admin == 0) return $admin = "Отсутствует"; 
		else if($admin == 1) return $admin = "Администратор 1 уровня"; 
        else if($admin == 2) return $admin = "Администратор 2 уровня"; 
        else if($admin == 3) return $admin = "Администратор 3 уровня";
		 else if($admin == 4) return $admin = "Администратор 4 уровня"; 
		  else if($admin == 5) return $admin = "Администратор 5 уровня"; 
		   else if($admin == 6) return $admin = "Администратор 6 уровня"; 
		    else if($admin == 7) return $admin = "Администратор 7 уровня"; 
			 else if($admin == 8) return $admin = "Администратор 8 уровня"; 
			  else if($admin == 9) return $admin = "Администратор 9 уровня"; 
			   else if($admin == 10) return $admin = "Администратор 10 уровня"; 
			    else if($admin == 11) return $admin = "Администратор 11 уровня"; 
				 else if($admin == 12) return $admin = "Администратор 12 уровня"; 
				  else if($admin == 13) return $admin = "Администратор 13 уровня"; 
		else if($admin == 14) return $admin = "Основатель проекта"; 
}
function helperlvl($pcash)
{
		if($pcash == 0) return $pcash = "Отсутствует"; 
		else if($pcash == 1) return $pcash = "Агент поддержки"; 
        else if($pcash == 2) return $pcash = "Агент поддержки"; 
		else if($pcash == 3) return $pcash = "Агент поддержки"; 
		else if($pcash == 4) return $pcash = "Агент поддержки"; 
		else if($pcash == 5) return $pcash = "Агент поддержки"; 
		else if($pcash == 6) return $pcash = "Агент поддержки"; 
		else if($pcash == 7) return $pcash = "Агент поддержки"; 
		else if($pcash == 8) return $pcash = "Главный хелпер"; 
}
function Sex($sex)
{
	if($sex == 1)
	{
	echo "Мужской";
	}
	else
	{
	echo "Женский";
	}
}
function House($house)
{
	if($house == -1)
	{
	echo "Отсутствует";
	}
}
function CountTable($sql){
	$count = mysql_query($sql);
	echo mysql_num_rows($count);
}
function UserStatus($ban){
	if($ban > 0)
	
		echo "Заблокирован на ".$ban." дня(ей)";
	
	else
		echo "Отсутствует";
}
function UserStatusWarn($warn){
	if($warn > 0)
	
		echo "Предупреждений ".$warn."";
	
	else
		echo "Отсутствует";
}
function rank($member,$rang)
{
		if($member == 1)
		{
			if($rang == 1) return $rank = "Фельдшер";
			else if($rang == 2) return $rank = "Глав.Врач";
		}
		else if($member == 2)
		{
			if($rang == 1) return $rank = "Секретарь";
			else if($rang == 2) return $rank = "Мэрия LS";
		}			
}
function fracname($frac)
{
		if($frac == 0) return $fracname = "Гражданин"; 
		else if($frac == 1) return $fracname = "Больница LS"; 
        else if($frac == 2) return $fracname = "Мэрия LS"; 
        else if($frac == 3) return $fracname = "Army LS"; 	
}
function GetCSS(){
    echo "<link rel=\"stylesheet\" href=\"/classes/libs/bootstrap/bootstrap-grid.min.css\" />
    <link rel=\"stylesheet\" href=\"/classes/libs/bootstrap/bootstrap.min.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/font-awesome/css/font-awesome.min.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/linea/styles.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/magnific-popup/magnific-popup.css\" />
	<link rel=\"stylesheet\" href=\"/classes/libs/animate/animate.min.css\" />
	<!-- Main CSS -->
	<link rel=\"stylesheet\" href=\"/classes/css/main.css\" />
	<link rel=\"stylesheet\" href=\"/classes/css/fonts.css\" />
	<link rel=\"stylesheet\" href=\"/classes/css/media.css\" />
	<link href=\"/classes/css/index.css\" rel=\"stylesheet\">";
}
?>