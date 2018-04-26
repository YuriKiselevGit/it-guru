<?
	define('ABSOLUTE__PATH__','/var/www/vhosts/v-94087.webspace/www/it-guru.kz');
	include ABSOLUTE__PATH__."/include/head.php";	
	$title = 'Разработка мобильного ПО';
?>
<body>
	<?include ABSOLUTE__PATH__."/include/header.php"?>
	
	<div class="container">
		<div class="row box_mobile">
			<div class="col-md-2">
				<div style="text-align: center;vertical-align: middle;height: 110px;padding: 10px;">
					<img width="90px" src="/images/mobile_po/mybeauty.jpg">
					</div>	
			</div>
			<div class="col-md-8">
				<div style="margin-top: 10px;">
					<b>My Beauty Studio</b>					
					<br>My Beauty Studio - это решение, придуманное нами для салонов красоты и индивидуальных мастеров
				</div>	
			</div>
			<div class="col-md-2">
				<div class="btn_po">
					<a href="/projects/mybeautystudio/"><button type="button" class="btn btn-primary btn-md btn-block">Подробнее</button></a>
				</div>				
			</div>
		</div>		
		
		<div class="row box_mobile">
			<div class="col-md-2">
				<div style="text-align: center;vertical-align: middle;height: 110px;padding: 10px;">
					<img width="90px" src="/images/mobile_po/3dpen.jpg">	
				</div>	
			</div>
			<div class="col-md-8">
				<div style="margin-top: 10px;">
					<b>3D ручки и пластик PLA, ABS (Россия)</b>
					<br>3D ручка - это удивительное устройство, которое рисует в воздухе и идеально подходит для развлечения, работы и творчества
				</div>	
			</div>
			<div class="col-md-2">
				<div class="btn_po">
					<a href="/projects/3dpen/"><button type="button" class="btn btn-primary btn-md btn-block">Подробнее</button></a>
				</div>	
			</div>			
		</div>				
		
	</div>
	<div class="row" style="height: 55px;width: 100%;"></div>
	<?include ABSOLUTE__PATH__."/include/footer.php"?>
</body>
</html>