<?
	define('ABSOLUTE__PATH__','/var/www/vhosts/v-94087.webspace/www/it-guru.kz');
	include ABSOLUTE__PATH__."/include/head.php";	
	$title = 'Разработка ПО';
?>
<body>
	<?include ABSOLUTE__PATH__."/include/header.php"?>
	<?include ABSOLUTE__PATH__."/include/db.php"?>

	<div class="container">

		<div class="row">
			<div class="col-md-12 title_razdel">
				<b>Базы данных</b>
			</div>
			<?

			$result_set = $mysqli->query('SELECT * FROM programms WHERE sectionid = 1');
			while ($row = $result_set->fetch_assoc()) {
			?>	
				<div class="col-md-3 col-sm-6 col-xs-12 no_paddin">
					<a href="/develop_po/list/programm.php?id=<?echo $row['id']?>">
						<div class="box2">
							<div class="icon_top_program">
								<img width="100%" height="150px" class="" src="<?=$row['mainphoto']?>">
							</div>
							<div class="title1"><?=$row['name']?></div>
							<div class="title1_mob"><?=$row['name']?></div>
						</div>
					</a>	
				</div>				
			<?}?>	
		</div>			
		<div class="col-md-12 clearfix link_razdel">
			<a href="allsoft.php">все программы</a>
		</div>			
		
			
		<div class="row">
			<div class="col-md-12 title_razdel">
				<b>Электронные учебники</b>
			</div>
			<?
			$result_set = $mysqli->query('SELECT * FROM programms WHERE sectionid = 2');
			while ($row = $result_set->fetch_assoc()) {
			?>	
				<div class="col-md-3 col-sm-6 col-xs-12 no_paddin">
					<a href="/develop_po/list/programm.php?id=<?echo $row['id'];?>">
						<div class="box2">
							<div class="icon_top_program">
								<img width="100%" height="150px" class="" src="<?=$row['mainphoto']?>">
							</div>
							<div class="title1"><?=$row['name']?></div>
							<div class="title1_mob"><?=$row['name']?></div>
						</div>
					</a>	
				</div>				
			<?}?>	
		</div>			
		<div class="col-md-12 clearfix link_razdel">
			<a href="allsoft.php">все программы</a>
		</div>					
			
		<div class="row">
			<div class="col-md-12 title_razdel">
				<b>Разное</b>
			</div>
			<?
			$result_set = $mysqli->query('SELECT * FROM programms WHERE sectionid = 3');
			while ($row = $result_set->fetch_assoc()) {
			?>	
				<div class="col-md-3 col-sm-6 col-xs-12 no_paddin">
					<a href="/develop_po/list/programm.php?id=<?echo $row['id'];?>">
						<div class="box2">
							<div class="icon_top_program">
								<img width="100%" height="150px" class="" src="<?=$row['mainphoto']?>">
							</div>
							<div class="title1"><?=$row['name']?></div>
							<div class="title1_mob"><?=$row['name']?></div>
						</div>
					</a>	
				</div>				
			<?}?>	
		</div>					
		<div class="col-md-12 clearfix link_razdel">
			<a href="allsoft.php">все программы</a>
		</div>					
		
	</div>
	
	<div class="container">
		<div class="row space">
			<div class="btn col-md-3 hidden-sm hidden-xs"></div>
			<div class="btn col-md-6 col-sm-12 col-xs-12">
				<a href="#order_po" rel="nofollow" class="orderbox">
					<div class="btn_develop">	
						Заказать разработку программы
					</div>	
				</a>							
			</div>	
		</div>				
	</div>						
	
	<div class="row" style="height: 55px;width: 100%;"></div>
	
	<?include ABSOLUTE__PATH__."/include/footer.php"?>

  </body>
</html>