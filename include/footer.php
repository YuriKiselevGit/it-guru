<div class="container logocontainer">
   	<div class="row"  style="margin-top: 10px;">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="line" style="border-top: 1px solid #d4d3d3;height: 30px;"></div>
		</div>		
		
		<div class="col-md-2 col-sm-2 col-xs-2">
			<a onclick="javascript:history.back(); return false;">Назад</a>
		</div>

		<div class="col-md-3 col-sm-3 col-xs-3 text_center text_gray">
			vladimir@it-guru.kz<br>
			+7 771 559 26 76
		</div>								

		<div class="col-md-4 col-sm-4 col-xs-4 text_center">
			<div class="block_socnet" >					
				<a href="https://www.facebook.com/ITGURUKZ/" target="_blank"><img class="soc_icon" src="/images/facebook.png"></a>
				<a href="https://vk.com/guru_kz" target="_blank"><img class="soc_icon" src="/images/vk.png"></a>
				<a href="https://ok.ru/group/55005931896839" target="_blank"><img class="soc_icon" src="/images/ok.png"></a>
				<a href="https://www.instagram.com/itgurukz/" target="_blank"><img class="soc_icon" src="/images/insta.png"></a>
				<a href="https://www.youtube.com/channel/UCClbVNSlK7HeMi1de73t4cw/feed?activity_view=3" target="_blank"><img class="soc_icon" src="/images/yt.png"></a>
			</div>	
		</div>								
			
		<div class="col-md-3 col-sm-3 col-xs-3">
			<a href="#feedback" rel="nofollow" class="modalbox">
				<div style="padding: 6px 0;background-color: rgba(0,0,0,.0001);border-style: groove;width: 220px;height:50px;font-size: 14px;font-weight: 600;color: #989898;">	
					<img width="36px" class="soc_icon" src="/images/callme.png">
						Перезвоните мне
				</div>	
			</a>
		</div>	
			
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div style="text-align: right;">Copyright © <? echo date('Y') ?> IT-guru</div>					
		</div>			
    </div>
</div>	

<div class="block_socnet_mob">					
	<a href="https://www.facebook.com/ITGURUKZ/" target="_blank"><img width="36px" class="soc_icon" src="/images/facebook.png"></a>
	<a href="https://vk.com/guru_kz" target="_blank"><img width="36px" class="soc_icon" src="/images/grey/vk_grey.png"></a>
	<a href="https://www.instagram.com/itgurukz/" target="_blank"><img width="36px" class="soc_icon" src="/images/grey/inst_grey.png"></a>
	<a href="https://chat.whatsapp.com/FyJFlhMP7uFKRWezsbBpXI" target="_blank"><img width="36px" class="soc_icon" src="/images/grey/wtsp_grey.png"></a>
	<a href="#feedback" rel="nofollow" class="modalbox"><img width="36px" class="soc_icon" src="/images/callme.png"></a>
</div>	


<style type="text/css">
	#feedback {display:none;}
	#order_po {display:none;}
	#zakaz_course {display:none;}
</style>

<div id="feedback"><!-- hidden inline form -->
	<h2>Введите номер телефона и мы ответим на все ваши вопросы</h2>
	<form id="f_feedback" name="contact" action="" method="post">
		<label for="f_phone">Ваш телефон</label>
		<br>
		<input type="text" id="f_phone" name="Телефон" onkeypress="if(event.keyCode == 13) return false;">
		<br>
		<input type="hidden" id="sub" name="sub" value="Заявка на обратный звонок с сайта IT-guru.kz">
		<br>
		<button disabled="disabled" id="f_feedback_send">Отправить</button>
	</form>
</div>

<div id="order_po"><!-- hidden inline form -->
	<h2>Оставьте номер телефона и мы уточним у вас какая программа вам нужна</h2>
	<form id="f_program" name="program" action="" method="post">
		<label for="f_phone">Ваш телефон</label>
		<br>
		<input type="text" id="f_phone2" name="Телефон" onkeypress="if(event.keyCode == 13) return false;">
		<br>
		<input type="hidden" id="sub" name="sub" value="Заявка на программу с сайта IT-guru.kz">
		<br>
		<button disabled="disabled" id="f_program_send">Отправить</button>
	</form>
</div>

<div id="zakaz_course"><!-- hidden inline form -->
	<h2>Оставьте номер телефона и мы уточним время ваших занятий</h2>
	<form id="f_course" name="contact" action="#" method="post">
		<label for="f_phone">Ваш телефон</label>
		<br>
		<input type="text" id="f_phone3" name="Телефон" onkeypress="if(event.keyCode == 13) return false;">
		<br>
		<input type="hidden" id="sub" name="sub" value="Заявка на курс обучения с сайта IT-guru.kz">
		<br>
		<button disabled="disabled" id="f_course_send">Отправить</button>
	</form>
</div>


<script type="text/javascript">
$(document).ready(function(){
	$(".modalbox").fancybox();
	$("#f_feedback").submit(function(){ return false; });
	$("#f_feedback_send").on("click", function(){
		var
			$myform = $('#f_feedback');			
			$tel = document.getElementById("f_phone").value;
		
		if($tel.length < 16)
		{
			alert('Телефон введен неправильно. Повторите ввод.');		
			
			//$("#f_feedback").fadeOut("fast", function(){
			//	$(this).before("<p><strong>Ваше сообщение не отправлено!</strong></p>");
			//	setTimeout("$.fancybox.close()", 1500);
			//});			
		} 
		else
		{		
			$.ajax({
				url: '/email.php',
				data: $myform.serialize(),		
				type: 'post',
				success: function(data, textStatus, xhr){ 
					//alert(xhr.status);
					//alert(textStatus);
				},
				error:function (xhr, ajaxOptions, thrownError){
					//console.log(xhr);
					//alert(xhr.status);
					//alert(ajaxOptions);
					//alert(xhr);
					//alert(thrownError);
					alert('Не удалось отправить заявку! Пожалуйста, попробуйте ещё раз');
				} 			
			});

			$("#f_feedback").fadeOut("fast", function(){
				$(this).before("<p><strong>Ваше сообщение отправлено!</strong></p>");
				setTimeout("$.fancybox.close()", 1500);
			});
			
		}	
	});
});

$(document).ready(function(){
	$(".zakaz_course").fancybox();	
	$("#f_program").submit(function(){ return false; });
	$("#f_program_send").on("click", function(){
		var
			$myform = $('#f_program');			
			$tel = document.getElementById("f_phone").value;
		
		if($tel.length < 16)

		{
			alert('Телефон введен неправильно. Повторите ввод.');		
		}
		else
		{	
			$.ajax({
				url: '/email.php',
				data: $myform.serialize(),		
				type: 'post',
				success: function(data, textStatus, xhr){ 
					//alert(xhr.status);
					//alert(textStatus);
				},
				error:function (xhr, ajaxOptions, thrownError){
					//console.log(xhr);
					//alert(xhr.status);
					//alert(ajaxOptions);
					//alert(xhr);
					//alert(thrownError);
					alert('Не удалось отправить заявку! Пожалуйста, попробуйте ещё раз');
				} 			
			});		
			
			
			$("#f_program").fadeOut("fast", function(){
				$(this).before("<p><strong>Ваше сообщение отправлено!</strong></p>");
				setTimeout("$.fancybox.close()", 1000);
			});
		}	
	});
});

$(document).ready(function(){
	$(".orderbox").fancybox();	
	$("#f_course").submit(function(){ return false; });
	$("#f_course_send").on("click", function(){
		
		var
			$myform = $('#f_course');			
			$tel = document.getElementById("f_phone").value;
		
		if($tel.length < 16)

		{
			alert('Телефон введен неправильно. Повторите ввод.');		
		}
		else
		{	
			
				
			$.ajax({
				url: '/email.php',
				data: $myform.serialize(),		
				type: 'post',
				success: function(data, textStatus, xhr){ 
					//alert(xhr.status);
					//alert(textStatus);
				},
				error:function (xhr, ajaxOptions, thrownError){
					//console.log(xhr);
					//alert(xhr.status);
					//alert(ajaxOptions);
					//alert(xhr);
					//alert(thrownError);
					alert('Не удалось отправить заявку! Пожалуйста, попробуйте ещё раз');
				} 			
			});		
			
			$("#f_course").fadeOut("fast", function(){
				$(this).before("<p><strong>Ваше сообщение отправлено!</strong></p>");
				setTimeout("$.fancybox.close()", 1000);
			});
		}	
	});
});
</script>

<script>
$(function(){
  $("#f_phone").mask("+7(999) 999-9999", {
	completed: function(){ $("#f_feedback_send").prop('disabled', false); }
  });
  $("#f_phone2").mask("+7(999) 999-9999", {
	completed: function(){ $("#f_program_send").prop('disabled', false); }
  });
  $("#f_phone3").mask("+7(999) 999-9999", {
	completed: function(){ $("#f_course_send").prop('disabled', false); }
  });
});
</script>

<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39291330 = new Ya.Metrika2({ id:39291330, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39291330" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->