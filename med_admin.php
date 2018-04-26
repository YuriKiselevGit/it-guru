<html>
	<head>
		<?//<meta name="viewport" content="width=device-width, initial-scale=0, maximum-scale=0, user-scalable=0">?>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</head>
	<body>	
		<? 
			if ($_POST['save']=='save') {
				file_put_contents("doc1",$_POST['doc1']);	
				file_put_contents("doc2",$_POST['doc2']);	
			}			
		
			$doc1 = file_get_contents("doc1");	
			$doc2 = file_get_contents("doc2");	
		

		?>	
		<div class="container" style="padding: 0;margin: 0;width: 100%">
			<form method="post">
				<div style="height: 250px;">	
					<div class="col-xs-4" >
						<div style="font-size:  36px;padding-top:  50px;">
							<input type="checkbox" <?if($doc1=='on') echo 'checked';?> name="doc1" style="font-size: 36px;width:  50px;height:  50px;margin-right: 10px;">работает
						</div>
					</div>
					<div class="col-xs-8">
						<div style="font-size: 40px;padding-top: 50px;color: #d4d4d4;font-weight:  600;">
							Иванов Иван Иванович
						</div>
						<div style="font-size: 36px;">
							стоматолог
						</div>				
					</div>			
				</div>
				
				<div style="height: 250px;">	
					<div class="col-xs-4" >
						<div style="font-size:  36px;padding-top:  50px;">
							<input type="checkbox" <?if($doc2=='on') echo 'checked';?> name="doc2" style="font-size: 36px;width:  50px;height:  50px;margin-right: 10px;">работает
						</div>
					</div>
					<div class="col-xs-8">
						<div style="font-size: 40px;padding-top: 50px;color: #d4d4d4;font-weight:  600;">
							Петров Иван Иванович
						</div>
						<div style="font-size: 36px;">
							стоматолог
						</div>				
					</div>			
				</div>
				
				<div class="col-xs-12 center-block text-center" >
					<input type="hidden" name="save" value="save">
					<input type="submit" value="Сохранить" style="height: 70px;w;width: 200px;font-size:  30px;">
				</div>
				
				</form>
			</div>
		</body>
	</html>	