<?
require 'auth.php';
require '../../engine/function.php';//Главный конфиг
require '../../engine/authorization.php';//Модули авторизации

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Личный кабинет | Ariant RolePlay</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.png" />
	<!-- Libs CSS -->
	<?GetCSS();?>
	<script src="/classes/js/jquery.knob.js"></script>
</head>
<body>

	<!-- PRELOADER -->
	<div class="loader">
		<div class="loader-inner"></div>
	</div>
	<?CreateMenu($site['nameproject']);?>

	<section class="inner-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="inner-container">
              <div class="inner-title">
                <h2>Общая информация</h2>
              </div>
              <div class="inner-body inner-border clearfix">
                <table class="player-stat">
                  <tr><h2><?FixName($user["".$account['name'].""])?></h2></tr>
                  <h3>Уровень: <?=$user["".$account['level'].""];?></h3>
		  <h3>Номер аккаунта: <?=$user["".$account['id'].""];?></h3>		  
                </div>
                        
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Очки опыта:</td>
                    <td><?=$user["".$account['exp'].""];?>/<?=$user["".$account['level'].""]*8;?></td>
                  </tr> 
		      <tr>
                    <td>Скин:</td>
                    <td>№ <?=$user["".$account['skin'].""]?></td>
                  </tr>		  
                  <tr>
                    <td>Пол:</td>
                    <td><?Sex($user["".$account['sex'].""])?></td>
                  </tr>
                  <tr>
                    <td>Проживание:</td>
                    <td><?House($user["".$account['house'].""])?></td>
                  </tr>
                 
                  <tr>
                    <td>Уровень розыска:</td>
                    <td><?=$user["".$account['wanted'].""];?></td>
                  </tr>
                </table>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Организация:</td>
                    <td><?=fracname($user["".$account['member'].""]);?></td>
                  </tr>
                  <tr>
                    <td>Должность:</td>
                    <td><?=rank($user["".$account['member'].""],$user["".$account['rank'].""]);?></td>
                  </tr>
                </table>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Банковский счёт:</td>
                    <td><?=$user["".$account['bank'].""];?>$</td>
                  </tr>
                  <tr>
                    <td>На руках:</td>
                    <td><?=$user["".$account['cash'].""];?>$</td>
                  </tr>
                  
                </table>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Рублей на счету:</td>
                    <td><?=$user["".$account['donate'].""];?> руб.</td>
                  </tr>
		 <tr>
                    <td>DonateMoney на счету:</td>
                    <td><?=$user["".$account['online'].""];?> DM</td>
                  </tr>		

                </table>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Блокировка аккаунта:</td>
                    <td><?UserStatus($user["".$account['ban'].""])?></td>
                  </tr>
		 <tr>
                    <td>Предупреждения аккаунта:</td>
                    <td><?UserStatusWarn($user["".$account['warn'].""])?></td>
                  </tr>
		 <tr>
                    <td>Почта:</td>
                    <td><?ProtectMail($user["".$account['mail'].""])?></td>
                  </tr>					  
                 
                </table><br>
                <a href="./?access=exit"><center><button class="hlink1">Выйти</button></center></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="inner-container xs-margin">
              <div class="inner-title"><h2>Привилегии/Лидерка:</h2></div>
              <div class="inner-body inner-border clearfix">
                <table class="player-stat">
                  <tr>
                    <td>Админ-Права:</td>
                      <td><?=adminlvl($user["".$account['admin'].""]);?></td>
                  </tr>
                  <tr>
                    <td>Права хелпера:</td>
                     <td><?=helperlvl($user["".$account['pcash'].""]);?> </td>
                  </tr>
                    <tr>
                    <td>Лидер Организации:</td>
                     <td><?Leader($user["".$account['leader'].""])?> </td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="inner-container inner-margin">
              <div class="inner-title"><h2>Владение оружием</h2></div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>DEAGLE:</td>
                    <td><?=$user["".$account['deagle'].""]?>/100%</td>
                  </tr>
                  <tr>
                    <td>AK-47:</td>
                    <td><?=$user["".$account['ak47'].""]?>/100%</td>
                  </tr>
                  <tr>
                    <td>SDPistol:</td>
                    <td><?=$user["".$account['sdpistol'].""]?>/100%</td>
                  </tr>
                  <tr>
                    <td>M4:</td>
                    <td><?=$user["".$account['m4'].""]?>/100%</td>
                  </tr>
                  <tr>
                    <td>ShotGun:</td>
                    <td><?=$user["".$account['shotgun'].""]?>/100%</td>
                  </tr>
                  <tr>
                    <td>MP5:</td>
                    <td><?=$user["".$account['mp5'].""]?>/100%</td>
                  </tr>
                </table>
              </div>
            </div>
			<div class="inner-container inner-margin">
              <div class="inner-title"><h2>Тех. информация</h2></div>
              <div class="inner-body inner-border">
                <table class="player-stat">
					<tr>
                    <td>Регистрация:</td>
                    <td><?=$user["".$account['datareg'].""]?></td>
                  </tr>
				  <tr>
                    <td>IP регистрации:</td>
                    <td><?=$user["".$account['ipreg'].""]?></td>
                  </tr>
				  <tr>
                    <td>IP входа:</td>
                    <td><?=$user["".$account['ipvhod'].""]?></td>
                  </tr>
                  <tr>
                    <td>Последний вход:</td>
                    <td><?=$user["".$account['datavhod'].""]?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
		  
        </div>
      </div>
    </section>
<p></p>
			<div class="footer">
		﻿		<div class="wow fadeIn" data-wow-delay="1s">
			<img src="/classes/img/logo_flat.png"><br>
			<a href="/index.php">Главная</a>
			<a href="/forum">Форум</a>
			<a href="/donate.php">Донат</a>
			<a href="/page/userpanel/">Личный кабинет</a>
			<p>Ariant RolePlay © 2020 г.</p>
		</div>
	<!--[if lt IE 9]>
		<script src="/classes/libs/html5shiv/es5-shim.min.js"></script>
		<script src="/classes/libs/html5shiv/html5shiv.min.js"></script>
		<script src="/classes/libs/html5shiv/html5shiv-printshiv.min.js"></script>
		<script src="/classes/libs/respond/respond.min.js"></script>
	<![endif]-->
	
	<!-- Libs JS -->
	<script src="/classes/libs/jquery/jquery-2.1.3.min.js"></script>
	<script src="/classes/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="/classes/libs/mixitup/mixitup.min.js"></script>
	<script src="/classes/libs/scroll2id/PageScroll2id.min.js"></script>
	<script src="/classes/libs/animate/animate-css.js"></script>
	<script src="/classes/js/common.js"></script>
	<script src="/classes/js/wow.min.js"></script>

</body>
</html>