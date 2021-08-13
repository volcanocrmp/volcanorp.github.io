<?
//****База и настройки*****//
date_default_timezone_set ('Asia/Omsk'); // часовой пояс
define("DB_HOST","localhost"); // хост базы данных
define("DB_USER","admin"); // пользователь базы данных
define("DB_PASS","parol"); // пароль от базы данных
define("DB_BASE","database"); // имя базы данных
@mysql_connect(DB_HOST,DB_USER,DB_PASS)
or die("NO CONNECT FOR DATABASE");
@mysql_select_db(DB_BASE)
or die("ERROR mysql_select_db()");
$maxnews = 10;//Максимально новостей

$account = array (
	'table' => 'accounts',//Таблица с аккаунтами
	'pass' => 'Password',//Переменная пароля
	'name' => 'NickName',//Переменная имени
	'level' => 'Level',//Переменная уровня
	'exp' => 'Exp',//Переменная Exp
	'cash' => 'Money',//Переменная денег на руках
	'bank' => 'Bank',//Переменная денег в банке
	'id' => 'ID',//id аккаунта
	'admin' => 'pAlcoInvenxua',//админка
	'drugs' => 'pDrugs',//Наркотики
	'sex' => 'Sex',//пол
	'skin' => 'Skin',//скин
	'mail' => 'Email',//Переменная почты
	'datavhod' => 'pGetonDate',//Переменная даты последнего входа
	'numberphone' => 'pPnumber',//телефон игрока
	'pcash' => 'pHelper',//денег на телефоне
	'wanted' => 'pWanted',//розыск
	'ipreg' => 'pIpReg',//Ip регистрации
	'datareg' => 'pDataReg',//дата регистрации
	'ipvhod' => 'pGetonIP',//Ip последнего входа
	'subnetreg' => '',//Подсеть
	//admin
	'dataadmin' => '',//дата назначение
	'getadmin' => '',//Кто поставил
	//скиллы
	'deagle' => 'pDesertEagle',//скилл дигла
	'shotgun' => 'pShotGun',//скилл дробовика
	'mp5' => 'pMP5',//скилл mp5
	'ak47' => 'pAK47',//скилл ak
	'm4' => 'pM4',//скилл m4
	'sdpistol' => 'pSDPistol',//скилл sdpistol
	//лицензии
	'vodprava' => 'pVodPrava',//права
	'vertlic' => 'pFlyLic',//полеты
	'vodalic' => 'pBoatLic',//водянка
	'gunlic' => 'pGunLic',//оружие
	'bizlic' => 'pBizLic',//биз
	//
	'job' => 'pJob',//подработка
	'leader' => 'pLeader',//лидерка
	'member' => 'pMember',//фракция
	'rank' => 'pRank',//ранг
	'car' => '',//тачка
	'house' => 'pPhousekey',//дом
	'biz' => '',//бизнес
	'ban' => 'bans',
	'online' => 'pDonatemoney2',
	'donate' => 'pRub',//бизнес
	'warn' => 'pWarns'//бизнес
	);

$site = array(
	'nameproject' => 'Virginia',
	'keywords' => 'начать играть в гта са, гта по сети, андреас, GTA, Grand Theft Auto, самп, samp, sa-mp, гта са, Virginia, Виргиниа, a-rp, а-рп, роле плей, RolePlay, сервер, са мп, multiplayer',
	'description' => 'Выбери сам, кем ты хочешь стать в нашей игре'
);
//-------------------------//
?>