<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Language" content="ru">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Курсы английского языка в Алматы - NBclass</title>
<meta name="robots" content="NOINDEX, NOFOLLOW">
<meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-57902187-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body>
   <div id="space"><br></div>
   <div id="container">
      <div id="wb_Text1" style="position:absolute;left:10px;top:41px;width:258px;height:92px;text-align:center;z-index:0;">
         <span style="color:#000000;font-family:arial;font-size:20px;">Спасибо! <br>Ваша заявка принята! <br>В ближайшее время мы свяжемся с Вами!</span>
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
Языковой центр NBclass
г. Алматы, микрорайон Коктем-1, ул. Маркова, 11
http://NBclass.kz
+7 (727) 292-63-32, +7 (707) 106-17-19 
';
	$headers = 'From: Школа английского языка NBclass <info@nbclass.kz>	
Content-Type: text/plain; charset=UTF-8; format=flowed
Content-Transfer-Encoding: 8bit';
	mail ($email, $subject, $message, $headers);
}

//Отправляем уведомление о новой заявке
	$subject = 'Новая заявка на сайте NBclass.kz';
	$message = '
	Имя: $firstname
	Фамилия: $secondname
	Телефон: $phone
	E-mail: $email';
	$headers = 'From: Сайт NBclass.kz <info@nbclass.kz>	
Content-Type: text/plain; charset=UTF-8; format=flowed
Content-Transfer-Encoding: 8bit';
	mail ('dklimov@sharville.kz', $subject, $message, $headers);
}



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