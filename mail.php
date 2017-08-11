<?php 

//отправляем письмо администратору
function set_mail_from_admin(){

//эл.адресса куда слать письма
$multiple_to_recipients = array(
	'recipient1@example.com',
	'recipient2@foo.example.com'
);

//функция по отправки сообщений
wp_mail( $to, $subject, $message, $headers, $attachments );

}


//отправляем письмо пользователю, ответ на удачную отправку письма админу.
//Если все гуд то шлем письмо пользователю, что все гуд
function set_mail_from_user($mail){
 

}