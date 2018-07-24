<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Language" content="ru">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Курсы английского языка в Алматы - NBclass</title>
<meta name="robots" content="NOINDEX, NOFOLLOW">
<meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">
<meta http-equiv="refresh" content="5; URL=./index.php">
<link href="favicon.png" rel="shortcut icon">
<style type="text/css">
html, body
{
   height: 100%;
}
div#space
{
   width: 1px;
   height: 50%;
   margin-bottom: -150px;
   float:left
}
div#container
{
   width: 300px;
   height: 300px;
   margin: 0 auto;
   position: relative;
   clear: left;
}
body
{
   background-color: #FFFFFF;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   margin: 0;
   padding: 0;
}
</style>
<link href="nbclass.css" rel="stylesheet" type="text/css">
<style type="text/css">
#wb_Text1 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: center;
}
#wb_Text1 div
{
   text-align: center;
}
</style>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300, 600&subset=cyrillic" rel="stylesheet" type="text/css">
<!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter32605030 = new Ya.Metrika({ id:32605030, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/32605030" style="position:absolute; left:-9999px;" alt=""/></div></noscript><!-- /Yandex.Metrika counter -->
</head>
<body>
   <div id="space"><br></div>
   <div id="container">
      <div id="wb_Text1" style="position:absolute;left:10px;top:41px;width:258px;height:108px;text-align:center;z-index:0;">
         <span style="color:#000000;font-family:'open sans';font-size:20px;">Спасибо! <br>Ваша заявка принята! <br>В ближайшее время мы свяжемся с Вами!</span>
      </div>
   </div>
</body>
</html><?php 
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
//$variant = $_POST['variant'];
$AdvertisingWay = '1';
//$Category183CustomFieldProdukt = $_POST['product'];
//$Category183CustomFieldProdukt = 'GeneralEnglish';
//$Category183CustomFieldFilial = 'Не выбрано';
if (isset($_COOKIE['utm'])) { $Category183CustomFieldUtm = $_COOKIE['utm']; } //Если кука уже есть, то берем значение из нее 
else { $Category183CustomFieldUtm = '';	}
//Отправляем подтверждение на e-mail
	$subject = 'Пробный урок английского языка';
	$message = 'Здравствуйте, '.$firstname.'!
	
	
Мы получили Вашу заявка на посещение пробного урока английского языка.
В самое ближайшее время мы свяжемся с Вами.

С уважением,
Языковой Центр NBclass
г. Алматы, микрорайон Коктем-1, ул. Маркова, 11
+7 (727) 292-63-32, +7 (707) 106-17-19 
http://NBclass.kz
';

	$headers = 'From: Школа английского языка NBclass <info@nbclass.kz>	
Content-Type: text/plain; charset=UTF-8; format=flowed
Content-Transfer-Encoding: 8bit';
	mail ($email, $subject, $message, $headers);

//Отправляем уведомление о новой заявке
	$subject = 'Новая заявка на сайте NBclass.kz';
	$message = '
	Имя: <firstname> 
	Фамилия: <secondname> 
	Телефон: <phone> 
	E-mail: <email>';
	
	
	
	
	//preg_replace("/\D/","",$sPhone);
	
	$message = preg_replace("<firstname>",$firstname,$message);
	$message = preg_replace("<secondname>",$secondname,$message);
	$message = preg_replace("<phone>",$phone,$message);
	$message = preg_replace("<email>",$email,$message);
	
	
	
	
	$headers = 'From: Сайт NBclass.kz <info@nbclass.kz>	
Content-Type: text/plain; charset=UTF-8; format=flowed
Content-Transfer-Encoding: 8bit';
if ($phone != '') {
	mail ('nbclass@mail.ru, nbclass-kaz@yandex.ru', $subject, $message, $headers);
}


include( 'Request.php' );
 // Доступ к Мегаплану
$hostmp = 'nbclass.megaplan.ru';
$loginmp = 'nbclass-kaz@yandex.ru';
$passwordmp = 'NBclass2017';
// Авторизуемся в Мегаплане
$request = new SdfApi_Request( '', '', $hostmp, true );
$response = json_decode(
	$request->get( 
		'/BumsCommonApiV01/User/authorize.api', 
		array( 
			'Login' => $loginmp, 
			'Password' => md5( $passwordmp )
		)
	)
);
// Получаем AccessId и SecretKey
$accessId = $response->data->AccessId;
$secretKey = $response->data->SecretKey;
// Переподключаемся с полученными AccessId и SecretKey
unset( $request );
$request = new SdfApi_Request( $accessId, $secretKey, $hostmp, true );
 

// Создаем клиента в Мегаплане
//$result = $request->post( '/BumsCrmApiV01/Contractor/save.xml', array( 'Model[TypePerson]' => 'human',  'Model[FirstName]' => $firstname, 'Model[LastName]' => $secondname, 'Model[MiddleName]' => '', 'Model[Email]' => $email, 'Model[Phones]' =>	array(phone_number($phone))) ) ;
//$result = $request->post( '/BumsCrmApiV01/Contractor/save.xml', array( 'Model[TypePerson]' => 'human',  'Model[FirstName]' => $firstname, 'Model[LastName]' => $secondname, 'Model[MiddleName]' => '', 'Model[Email]' => $email, 'Model[Phones]' =>	array(phone_number($phone)), 'Model[AdvertisingWay]' => $AdvertisingWay,'Model[Category183CustomFieldProdukt]' => $Category183CustomFieldProdukt, 'Model[Category183CustomFieldFilial]' => $Category183CustomFieldFilial ) ) ;
//$result = $request->post( '/BumsCrmApiV01/Contractor/save.xml', array( 'Model[TypePerson]' => 'human',  'Model[FirstName]' => $firstname, 'Model[LastName]' => $secondname, 'Model[MiddleName]' => '', 'Model[Email]' => $email, 'Model[Phones]' =>	array(phone_number($phone)), 'Model[AdvertisingWay]' => $AdvertisingWay ) ) ;
$result = $request->post( '/BumsCrmApiV01/Contractor/save.xml', array( 'Model[TypePerson]' => 'human',  'Model[FirstName]' => $firstname, 'Model[LastName]' => $secondname, 'Model[MiddleName]' => '', 'Model[Email]' => $email, 'Model[Phones]' =>	array(phone_number($phone)), 'Model[AdvertisingWay]' => $AdvertisingWay, 'Model[Responsibles]' => '1000000, 1000002, 1000003') ) ;




function phone_number($sPhone){
	 $sPhone = preg_replace("/\D/","",$sPhone);
	//  if(strlen($sPhone) != 10) return(False);
	$sPhone = '7727'.$sPhone; 
	$sPhone = substr($sPhone, strlen($sPhone)-10,10);
	$sPrefix = substr($sPhone, 0,3);
	$sNumber = substr($sPhone, 3,7);
	$sPhone = "ph_m+7-".$sPrefix."-".$sNumber."	";
	//ph_m+7-777-1234567	
	return("ph_m+7-".$sPrefix."-".$sNumber."	");
}

?>