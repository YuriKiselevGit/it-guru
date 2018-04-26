<html>
	<head>
		<?//<meta name="viewport" content="width=device-width, initial-scale=0, maximum-scale=0, user-scalable=0">?>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?
			$doc1 = file_get_contents("doc1");	
			$doc2 = file_get_contents("doc2");	
		?>
	
	
		<div class="container" style="padding: 0;margin: 0;width: 100%">
		<?if($doc1=='on') {?>
			<div style="border-bottom: 3px solid gray;height: 250px;">	
				<div class="col-md-4 col-sm-4" style>
					<div style="padding: 25px;">
						<img src="doctor.png" style="width: 200px;">
					</div>	
				</div>
				<div class="col-md-8 col-sm-8">
					<div style="font-size: 40px;padding-top: 50px;color: #d4d4d4;font-weight:  600;">
						Иванов Иван Иванович
					</div>
					<div style="font-size: 36px;">
						стоматолог
					</div>				
				</div>			
			</div>
		<?}?>
		
		<?if($doc2=='on') {?>
			<div style="border-bottom: 3px solid gray;height: 250px;">	
				<div class="col-md-4 col-sm-4" style>
					<div style="padding: 25px;">
						<img src="doctor.png" style="width: 200px;">
					</div>	
				</div>
				<div class="col-md-8 col-sm-8">
					<div style="font-size: 40px;padding-top: 50px;color: #d4d4d4;font-weight:  600;">
						Петров Иван Иванович
					</div>
					<div style="font-size: 36px;">
						стоматолог
					</div>				
				</div>			
			</div>			
		<?}?>	
		</div>
	</body>
</html>