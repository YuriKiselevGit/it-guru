<?php
$to_email = "kiselevyuria@gmail.com, vladimir@it-guru.kz";
$from_email = "info@it-guru.kz";	
	
$message = "";
//обрабатываем только запросы POST
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	//обрабатываем все переданные поля
	foreach ( $_POST as $key => $value ) {
		//не выводим пустые значения и указанные поля
		if ( $value != "" && $key != "sub" && $key != "admin_email") {
			$message .= "$key: $value \r\n";
		}
	}
		
    mail(
        $to_email,
        $_POST['sub'],
        $message,
        "From: $from_email" . "\r\n" . "Reply-To: vladimir@it-guru.kz" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\""
    );
	echo json_encode(array('success'=>'true'));
}
?>

