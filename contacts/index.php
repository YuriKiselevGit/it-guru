<?
	define('ABSOLUTE__PATH__','/var/www/vhosts/v-94087.webspace/www/it-guru.kz');
	include ABSOLUTE__PATH__."/include/head.php";
	$title = 'Контакты';
?>
<body>
	<?include ABSOLUTE__PATH__."/include/header.php"?>
	
	<div class="container">
    	<div class="row">	
			<ul class="nav navbar-nav" style="width: 540px;">
				<li style="border-bottom: 1px solid #f9ec95;"><a class="navbar-home" href="/contacts/">Контакты</a></li>
				<li><a class="navbar-kursy" href="/about/">О нас</a></li>
				<li><a class="navbar-uslygi" href="/clients/">Наши клиенты</a></li>
			</ul>
			
			<div class="col-md-6 col-sm-6">
				<img width="100%" src="/images/tc.jpg">
			</div>
			<div class="col-md-6 col-sm-6">
				<p class="contacts_title_mini">Адрес </p>
				<p class="contacts_text">Казахстан, Павлодар, ул Академика Сатпаева 46, второй этаж, вход со стороны улицы Академика Сатпаева</p>
				<br>
				<p class="contacts_title_mini">Время работы </p>
				<p class="contacts_text">график не нормированный <br>(за 1 час до приезда в офис ОБЯЗАТЕЛЬНО позвоните нам) </p>
				<br>
				<p class="contacts_title_mini">Телефон</p>
				<p class="contacts_text">+7 (771) 559-26-76</p>
				<p class="contacts_text">(звонок, SMS, WhatsApp, Viber)</p>
			</div>
			<div class="col-md-12 col-sm-12" style="margin: 40px;"></div>		
		</div>
		<div class="row">		
			<div class="col-md-12 col-sm-12">
				<img width="100%" src="/images/map.jpg">
			</div>	
		</div>
		<div class="row  space">
			<div class="col-md-5">
			</div>
			<div class="col-md-3 col-sm-12">
				<a href="https://yandex.ru/maps/-/CBeVnBh4SC" target="_blank"><button type="button" class="btn btn-primary btn-md btn-block">Показать на карте</button></a>
			</div>						
		</div>
	</div>
	
	<div class="row" style="height: 60px;width: 100%;"></div>
	
	<?include ABSOLUTE__PATH__."/include/footer.php"?>
	
	<script>
		$(document).ready(function(){
			//при нажатию на любую кнопку, имеющую класс .btn
			$(".callme").click(function() {
				//открыть модальное окно с id="myModal"
				$('#exampleModal').arcticmodal();
			});
		});
	</script>		
</body>
</html>									