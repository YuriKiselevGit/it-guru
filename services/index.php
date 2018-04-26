<?
	define('ABSOLUTE__PATH__','/var/www/vhosts/v-94087.webspace/www/it-guru.kz');
	include ABSOLUTE__PATH__."/include/head.php";
	$title = 'Услуги';
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

	<script src="/js/jquery-1.11.2.min.js"></script> 
	<script src="/js/bootstrap.min.js"></script> 
	<script src="/js/jquery.lightbox.js"></script>
	<script src="/js/templatemo_custom.js"></script>
	<script src="/js/easyResponsiveTabs.js" type="text/javascript"></script>  
	<script src="/js/jquery.maskedinput.js"></script>
	
	<!-- arcticModal -->
	<script src="/js/arcticmodal/jquery.arcticmodal.js"></script>
	<link rel="stylesheet" href="/js/arcticmodal/jquery.arcticmodal.css">

	<!-- arcticModal theme -->
	<link rel="stylesheet" href="/js/arcticmodal/themes/simple.css"> 	
	
	
  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<?include ABSOLUTE__PATH__."/include/header.php"?>
		
	<div id="menu-container" class="main_menu">
		<div class="content homepage" id="menu-1">
			<div class="container">
				<div class="col-md-4 col-sm-6 no_paddin">
					<a class="" href="/develop_po/">
						<div class="box">
							<div class="icon">
								<img class="" src="/images/icon1.png">
							</div>
							<div class="title1">Разработка<br>программного обеспечения</div>
							<div class="title1_mob">Разработка ПО</div>
							<div class="title2">под ОС Windows</div>
						</div>
						</a>	
				</div>
				<div class="col-md-4 col-sm-6 no_paddin">
					<a class="" href="/mobile_po/">
						<div class="box">
							<div class="icon">
								<img class="" src="/images/icon2.png">
							</div>
							<div class="title1">Разработка<br>мобильных приложений</div>
							<div class="title1_mob">Разработка Android / IOS</div>
							<div class="title2">под Android / IOS</div>
						</div>
					</a>	
				</div>
				<div class="col-md-4 col-sm-6 no_paddin">
					<a class="" href="/courses/">
						<div class="box">
							<div class="icon">
								<img class="" src="/images/icon3.png">
							</div>
							<div class="title1">Компьютерные курсы<br>Онлайн обучение</div>
							<div class="title1_mob">Компьютерные курсы</div>
							<div class="title2">Delphi, Пользователь ПК,<br>HTML & CSS, Swift</div>
						</div>
					</a>	
				</div>
				<div class="col-md-4 col-sm-6 no_paddin">
					<a class="" href="/instagram/">
						<div class="box">
							<div class="icon">
								<img class="" src="/images/icon4.png">
							</div>
							<div class="title1">Продвижение в Instagram</div>
							<div class="title1_mob">Продвижение в Instagram</div>
							<div class="title2">публикация, реклама</div>
						</div>
					</a>	
				</div>
			</div>
		</div>
	</div>	
	
	<?include ABSOLUTE__PATH__."/include/footer.php"?>

<script>
$(document).ready(function(){
	//при нажатию на любую кнопку, имеющую класс .btn
  $(".btn").click(function() {
    //открыть модальное окно с id="myModal"
    $('#exampleModal').arcticmodal();
  });
});
</script>	
	
	
  </body>
</html>