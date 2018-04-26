<?
	define('ABSOLUTE__PATH__','/var/www/vhosts/v-94087.webspace/www/it-guru.kz');
	include ABSOLUTE__PATH__."/include/head.php";	
	$title = 'Наши разработки';
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
				<div class="col-md-3 col-sm-6 no_paddin">
					<a href="/develop_po/list/programm.php?id=<?echo $row['id']?>">
						<div class="box2">
							<div class="icon_top_program">
								<img width="170px" height="150px" class="" src="<?=$row['mainphoto']?>">
							</div>
							<div class="title1"><?=$row['name']?></div>
							<div class="title1_mob"><?=$row['name']?></div>
						</div>
					</a>	
				</div>				
			<?}?>	
		</div>		
			
		<div class="row">
			<div class="col-md-12 title_razdel">
				<b>Электронные учебники</b>
			</div>
			<?
			$result_set = $mysqli->query('SELECT * FROM programms WHERE sectionid = 2');
			while ($row = $result_set->fetch_assoc()) {
			?>	
				<div class="col-md-3 col-sm-6 no_paddin">
					<a href="/develop_po/list/programm.php?id=<?echo $row['id'];?>">
						<div class="box2">
							<div class="icon_top_program">
								<img width="170px" height="150px" class="" src="<?=$row['mainphoto']?>">
							</div>
							<div class="title1"><?=$row['name']?></div>
							<div class="title1_mob"><?=$row['name']?></div>
						</div>
					</a>	
				</div>				
			<?}?>	
		</div>					
			
		<div class="row">
			<div class="col-md-12 title_razdel">
				<b>Разное</b>
			</div>
			<?
			$result_set = $mysqli->query('SELECT * FROM programms WHERE sectionid = 3');
			while ($row = $result_set->fetch_assoc()) {
			?>	
				<div class="col-md-3 col-sm-6 no_paddin">
					<a href="/develop_po/list/programm.php?id=<?echo $row['id'];?>">
						<div class="box2">
							<div class="icon_top_program">
								<img width="170px" height="150px" class="" src="<?=$row['mainphoto']?>">
							</div>
							<div class="title1"><?=$row['name']?></div>
							<div class="title1_mob"><?=$row['name']?></div>
						</div>
					</a>	
				</div>				
			<?}?>	
		</div>								
	</div>	

	<div class="row" style="height: 55px;width: 100%;"></div>
	
	<?include ABSOLUTE__PATH__."/include/footer.php"?>

  </body>
</html>