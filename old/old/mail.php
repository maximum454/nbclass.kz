<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="ru-RU">
<head>
<meta charset="utf-8">
</head>
<body><?

   if(isset($_POST[email]))
      	  {
    $email = $_POST['email'];
    $ename = $_POST['ename'];
    $ephone = $_POST['ephone'];
              /* Проверяем заполнены ли все поля */
/* Убираем все лишние пробелы, а также преобразуем все теги HTML в символы*/
$ename = htmlspecialchars(trim($ename));
$email = htmlspecialchars(trim($email));
$ephone = htmlspecialchars(trim($ephone));
/* Проверяем правильность ввода email-адреса */
if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email))
{  exit("<p>Неправильный формат e-mail адреса!</p>
        <META HTTP-EQUIV=REFRESH CONTENT=\"1;URL=http://www.nbclass.kz\">
        ");
}
   		  $to  = "NBclass@mail.ru, $email";
      		/* тема\subject */
			$subject = "Заявка на языковой курс";

/* сообщение */
$message = "
<html>
<head>
 <title>Сообщение с сайта nbclass.kz от $ename $ephone ($email)</title>
</head>
<body>
<table width=100%>
 <tr>
  <td>
   Регистрационные данные заявителя:
<br />      <br />
Имя: $ename        <br />
email: $email                 <br />
Телефон: $ephone                              <br />
  </td>
 </tr>
</table>
</body>
</html>
";

/* Для отправки HTML-почты вы можете установить шапку Content-type. */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

/* дополнительные шапки */
$headers .= "From: nbclass.kz ($email)\r\n";
//$headers .= "Cc: $to\r\n";
$headers .= "Bcc: nbclass-kaz@yandex.ru\r\n";   // что бы другие не видели всех подписчиков

  $to_empty = "$_POST[email]";

/* и теперь отправим из */
 mail($to, $subject, $message, $headers);
 
         print"<p>
         <br><br><br><br>
         <h2>Ваша заявка принята!<h2>
		 Наш менеджер с Вами свяжется
		 <br>сейчас Вы будете перенаправлены на основной сайт<br><br></p>
        <META HTTP-EQUIV=\"REFRESH\" CONTENT=\"3;URL=http://www.nbclass.kz\">
        ";

        
}
         ?>
</body>
</html>