<?
	define('ABSOLUTE__PATH__','/var/www/vhosts/v-94087.webspace/www/it-guru.kz');
	include ABSOLUTE__PATH__."/include/head.php";
	$title = 'Компьютерные курсы';
?>
<!DOCTYPE html>
<head>
    <title></title>
    <meta name="description" content="" />
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
   	<link type="text/css" rel="stylesheet" href="/css/easy-responsive-tabs.css" />
    <link href="/css/templatemo_style.css" rel="stylesheet"> 
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/templatemo_misc.css">
	<link href="/css/style.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="/fancybox/jquery.fancybox.css" media="screen" />	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script> 
	<script src="/js/jquery.lightbox.js"></script>
	<script src="/js/jquery.maskedinput.js"></script>
	<script type="text/javascript" src="/fancybox/jquery.fancybox.js"></script>	
	
  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script type="text/javascript">
		$(document).ready(function() {
			$("a.gallery").fancybox({
				'titleShow' : true,
				'titlePosition'     : 'over',
				'titleFormat'       : function(title, currentArray, currentIndex, currentOpts) {
                    return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? '   ' + title : '') + '</span>';
                }
			});
		});
	</script>
	
</head>

<body>
	
<?if($_GET['mob']=='') {?>	
	
<?include ABSOLUTE__PATH__."/include/header.php"?>
	

	
	<div class="container">
			<div class="col-md-12 col-sm-12 text-center dist" style="font-size: 20px;">
				<b>Дистанционное обучение</b>: возможность прохождения курса онлайн в любое удобное время, живое общение с преподавателем, практические занятия на вашем компьютере при непосредственном контроле преподавателя за вашими действиями.
			</div>
			<br>
	</div>
	
	
	<div id="menu-container" class="main_menu">
		<div class="content homepage" id="menu-1">
			<div class="container">
				<div class="col-md-6 col-sm-6 no_paddin">
					<a class="" href="/courses/delphi.php">
						<div class="box">
							<div class="icon">
								<img style="max-width:100px" class="" src="/images/icon3.png">
							</div>
							<div class="title1">Курсы Delphi</div>
							<div class="title1_mob">Курсы Delphi</div>							
						</div>
					</a>	
					</div>
	<!--			<div class="col-md-3 col-sm-6 no_paddin">
					<a class="" href="/courses/photoshop.php">
						<div class="box">
							<div class="icon">
								<img class="" src="/images/icon3.png">
							</div>
							<div class="title1">Курсы Photoshop</div>
							<div class="title1_mob">Курсы Photoshop</div>							
						</div>
					</a>	
				</div>
	-->	
	<!--
				<div class="col-md-4 col-sm-6 no_paddin">
					<a class="" href="/courses/user-pc.php">
						<div class="box">
							<div class="icon">
								<img class="" src="/images/icon3.png">
							</div>
							<div class="title1">Курсы Пользователь ПК</div>
							<div class="title1_mob">Курсы Пользователь ПК</div>							
						</div>
					</a>	
				</div>
	-->			
	<!--			<div class="col-md-3 col-sm-6 no_paddin">
					<a class="" href="/courses/html.php">
						<div class="box">
							<div class="icon">
								<img class="" src="/images/icon3.png">
							</div>
							<div class="title1">Курсы Веб-разработчик HTML&CSS</div>
							<div class="title1_mob">Курсы Веб-разработчик</div>							
						</div>
					</a>	
				</div>
	-->			
				<div class="col-md-6 col-sm-6 no_paddin">
					<a class="" href="/courses/swift.php">
						<div class="box">
							<div class="icon">
								<img style="max-width:100px" class="" src="/images/icon3.png">
							</div>
							<div class="title1">Курсы iOS разработчик - Swift</div>
							<div class="title1_mob">Курсы Swift</div>							
						</div>
					</a>	
				</div>				
			</div>
		</div>
	</div>	
<?}?>	

	<div style="margin-top: 40px;">
		<div class="container">
		<?if($_GET['mob']=='') {?>	
			<center><div style="margin-bottom: 24px;font-size: 22px;">НАШИ УЧЕНИКИ</div></center>
		<?}?>	
			<div class="col-md-3 col-sm-6 foto text-center">
				<?if($_GET['mob']=='') {?>	
					<a class="gallery" rel="group" href="/images/ucheniki/big_1.png" data-fancybox="images" data-caption="Абельдинов Диас Бауржанович. HTML & CSS"><img src="/images/ucheniki/1.png" /></a>
				<?}?>	
				<?if($_GET['mob']!='') {?>	
					<img src="/images/ucheniki/1.png" />
				<div>
					<b>Абельдинов Диас Бауржанович</b>
					<br>
					HTML & CSS
				</div>	
				<?}?>
			</div>	
			<div class="col-md-3 col-sm-6 foto text-center">
				<?if($_GET['mob']=='') {?>						
					<a class="gallery" rel="group" href="/images/ucheniki/big_2.png" data-fancybox="images" data-caption="Матаев Куаныш Нуртаевич. Пользователь ПК"><img src="/images/ucheniki/2.png" /></a>
				<?}?>
				<?if($_GET['mob']!='') {?>	
				<img src="/images/ucheniki/2.png" />
				<div>
					<b>Матаев Куаныш Нуртаевич</b>
					<br>
					Пользователь ПК
				</div>	
				<?}?>				
			</div>	
			<div class="col-md-3 col-sm-6 foto text-center">
				<?if($_GET['mob']=='') {?>	
					<a class="gallery" rel="group" href="/images/ucheniki/big_3.png" data-fancybox="images" data-caption="Приходько Евгений Валерьевич. HTML & CSS"><img src="/images/ucheniki/3.png" /></a>
				<?}?>
				
				<?if($_GET['mob']!='') {?>	
				<img src="/images/ucheniki/3.png" />
				<div>	
					<b>Приходько Евгений Валерьевич</b>
					<br>
					HTML & CSS
				</div>		
				<?}?>				
			</div>	
			<div class="col-md-3 col-sm-6 foto text-center">
				<?if($_GET['mob']=='') {?>	
					<a class="gallery" rel="group" href="/images/ucheniki/big_4.png" data-fancybox="images" data-caption="Садвакасов Нуржан Аскарбекович. Пользователь ПК"><img src="/images/ucheniki/4.png" /></a>
				<?}?>
				
				<?if($_GET['mob']!='') {?>	
				<img src="/images/ucheniki/4.png" />
				<div>	
					<b>Садвакасов Нуржан Аскарбекович</b>
					<br>
					Пользователь ПК
				</div>		
				<?}?>				
			</div>
			<div class="col-md-3 col-sm-6 foto text-center">
				<?if($_GET['mob']=='') {?>	
					<a class="gallery" rel="group" href="/images/ucheniki/big_5.png" data-fancybox="images" data-caption="Красильников Олег Александрович. HTML & CSS"><img src="/images/ucheniki/5.png" /></a>
				<?}?>
				
				<?if($_GET['mob']!='') {?>	
				<img src="/images/ucheniki/5.png" />
				<div>	
					<b>Красильников Олег Александрович</b>
					<br>
					HTML & CSS
				</div>		
				<?}?>				
			</div>			
			<div class="col-md-3 col-sm-6 foto text-center">
				<?if($_GET['mob']=='') {?>	
					<a class="gallery" rel="group" href="/images/ucheniki/big_6.png" data-fancybox="images" data-caption="Есбулатов Руслан Аскарович. Пользователь ПК"><img src="/images/ucheniki/6.png" /></a>
				<?}?>
				
				<?if($_GET['mob']!='') {?>	
				<img src="/images/ucheniki/6.png" />
				<div>	
					<b>Есбулатов Руслан Аскарович</b>
					<br>
					Пользователь ПК
				</div>		
				<?}?>				
			</div>
			<div class="col-md-3 col-sm-6 foto text-center">
				<?if($_GET['mob']=='') {?>	
					<a class="gallery" rel="group" href="/images/ucheniki/big_7.png" data-fancybox="images" data-caption="Егоров Станислав Андреевич. iOS разработчик - Swift"><img src="/images/ucheniki/7.png" /></a>
				<?}?>
				
				<?if($_GET['mob']!='') {?>	
				<img src="/images/ucheniki/7.png" />
				<div>	
					<b>Егоров Станислав Андреевич</b>
					<br>
					iOS разработчик - Swift
				</div>		
				<?}?>				
			</div>			
			
		</div>	
	</div>

<?if($_GET['mob']=='') {?>			
	<div class="row" style="height: 55px;width: 100%;"></div>
	
	<?include ABSOLUTE__PATH__."/include/footer.php"?>

<?}?>
</body>
</html>