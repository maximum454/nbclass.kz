<?php 
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

//Отправляем уведомление о новой заявке
	$subject = 'Новая заявка на сайте NBclass.kz';
	$message = '
	Имя: <firstname>
	Фамилия: <secondname>
	Телефон: <phone>
	E-mail: <email>';
	
	$message = ereg_replace("<firstname>",$firstname,$message);
	$message = ereg_replace("<secondname>",$secondname,$message);
	$message = ereg_replace("<phone>",$phone,$message);
	$message = ereg_replace("<email>",$email,$message);
	
	
	
	
	$headers = 'From: Сайт NBclass.kz <info@nbclass.kz>	
Content-Type: text/plain; charset=UTF-8; format=flowed
Content-Transfer-Encoding: 8bit';
	mail ('dklimov@sharville.kz', $subject, $message, $headers);




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