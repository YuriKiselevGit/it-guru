<?
	define('ABSOLUTE__PATH__','/var/www/vhosts/v-94087.webspace/www/it-guru.kz');
	include ABSOLUTE__PATH__."/include/head.php";
	$title = 'Программа';
?>
  <body>
  <?include ABSOLUTE__PATH__."/include/header.php"?>
  
	<?include ABSOLUTE__PATH__."/include/db.php"?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 title_razdel">
				<?	$result_set = $mysqli->query('SELECT sections.name from programms LEFT JOIN sections ON programms.sectionid = sections.id WHERE programms.id = '.$_GET['id']);
					$row = $result_set->fetch_assoc();
				?>
				<b><?echo $row['name'];?></b>
			</div>
			<?
				$result_set = $mysqli->query('SELECT * FROM programms WHERE id = '.$_GET['id']);
				$row = $result_set->fetch_assoc();
				$imgs = explode(" ",$row['otherphoto']);
			?>	
			
			<div class="col-md-12">				
				<div id= "slider" class= "nivoSlider">
					<?
						foreach($imgs as $img) {
							?>
							<img style="width: 50%;" src="<?echo $img?>">	
							<?
						}
					?>
				
					
				</div>
			</div>
			<div class="col-md-12">		
				<div class="program_title">
					<b>Название программы</b><br>
					<?echo $row['name'];?><br>
				</div>	
			</div>
			<div class="col-md-12">
				<div class="program_title">
					<b>Описание:</b>
					<?echo $row['description'];?>
				</div>	
			</div>

		</div>
	</div>

	<script type= "text/javascript">
		$ (window).load (function () {
		$ ('#slider').nivoSlider ();
		});
	</script>


	<div class="container">
		<div class="row space">
			<div class="btn col-md-5 col-md-offset-4 col-sm-2"">
				<a href="#order_po" rel="nofollow" class="orderbox">
					<div class="btn_prg">	
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