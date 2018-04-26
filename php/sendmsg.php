<?
if (!empty($_POST)) {	
	include_once "smsc_api.php";
	$sms_phone = preg_replace('![^0-9]+!', '', $_POST['phone']);
	send_sms('77715592676','Перезвоните клиенту '.$sms_phone);
	
	$admin_email[] 	= "vladimer.18@mail.ru";
	$admin_email[] 	= "kiselevyuria@gmail.com";
	$project_name 	= "Сайт IT-guru.kz";
	$form_subject 	= "Заявка с сайта \"$project_name\"";
	$server_mail = "mail@" . $_SERVER['SERVER_NAME'];
	
	$c = true;
	foreach($_POST as $key => $value) 
	{
		if ($value != "") 
		{
			$message .= " " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #dedede 1px solid; width: 50%;'><b>$key</b></td>
			<td style='padding: 10px; border: #dedede 1px solid; width: 50%;'>$value</td></tr>";
		}
	}

	$message = "<table style='width: 100%; border-collapse: collapse; border-spacing: 0;'>$message</table>";

	foreach ( $admin_email as $email ) {
		mail($email, $form_subject, $message, "From: $project_name <$server_mail>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
	} 
	header("Location: success.html");
	exit;
}
	header("location: /");
	exit;
?>