<?
	define('ABSOLUTE__PATH__','/var/www/vhosts/v-94087.webspace/www/it-guru.kz');
	include ABSOLUTE__PATH__."/include/head.php";
	$title = 'Программа курса HTML5 &amp; CSS3';
?>
<body>
	<style>
		body {
		line-height: 25px;
		font-size: 21px;
		color: #000;
		}	
		h1{
			color: #000;
			background: none;
			padding: 0px 0px;
			float: none;
			text-shadow: none;
			margin: 0% 0% 0% 0%;
			display: block;    
			-webkit-margin-before: 0em;
			-webkit-margin-after: 0.67em;
			-webkit-margin-start: 0px;
			-webkit-margin-end: 0px;
			font-weight: bold;
		}		
		
		h3 {
			display: block;
			-webkit-margin-before: 1em;
			-webkit-margin-after: 1em;
			-webkit-margin-start: 0px;
			-webkit-margin-end: 0px;
			font-weight: 300;	
			text-align: left;
		}
		
		table {
			border-collapse: collapse;
			border-style: solid;
			border-width: 2px;
		}
		tbody, tfoot, thead {
			border-color: black;
			border-width: inherit;
			border-style: inherit;
		}
		
		table tr {
			border-width: 0;
			border-color: inherit;
			border-style: inherit;
		}
		tbody th[colspan] {
			border-width: 2px;
			border-top-color: inherit;
			border-top-style: inherit;
			border-bottom-color: inherit;
			border-bottom-style: inherit;
			padding: 10px 2px 4px 2px;
			background-color: rgb(249,249,249);
		}
		tbody td {
			text-align: center;
		}
		th:not([colspan]), td {
			padding: 10px 10px;
			border-style: inherit;
		}
		thead {
			background-color: rgb(249,249,249);
		}
		thead th {
			border-color: inherit;
			border-width: 2px;
		}
		tbody th:not([colspan]), td{
			border-width: 2px;
			border-color: inherit;
		}
		tbody th:not([colspan]) {
			font-weight: normal;
			text-align: left;
		}
		figure {
			margin: 0;
			padding: 0;
		}
		dl dd ul {
			list-style-type: none;
		}
		h3, h4 {
			margin-bottom: 0;
			padding-bottom: 0;
		}
		
		caption h3, ol li:first-child h4 {
			margin-top: 0;
			padding-top: 0;
		}
		
		caption {
			padding-bottom: 4px;
			color: #000;
		}
				
		dl dd ul, li p {
			margin: 0;
			padding: 0;
		}
				
		figure ol > li:first-child  h3::before {
			content: '';
		}
		figure ol > li:nth-child(8) h3::before {
			content: '';
		}
			
		
		

	</style>

	<?include ABSOLUTE__PATH__."/include/header.php"?>
	
	<div class="container">
		<div class="row">
			<ul class="nav navbar-nav" style="width: 540px;">
				<li style="width: 160px; background-color: #f9ec95;"><a class="navbar-home" href="/courses/html.php">Полный курс</a></li>
				<li style="width: 160px;"><a class="navbar-kursy" href="/courses/expr_html.php">Экспресс курс</a></li>
			</ul>
		</div>
	</div>
	
	<br>
	
	<div class="container">	
		<h2><b>Программа курса HTML5 &amp; CSS3</b></h2>
		<main>
			<section>
				<h2>Описание курса</h2>
				<dl>
					<dt>Цель курса</dt>
					<dd>Освоить знания и навыки, необходимые для разработки веб-страниц, соответствующих современным требованиям (стандартам W3C) к HTML-вёрстке.</dd>
					<br>
					<dt>Знания и умения, полученные в результате обучения</dt>
					<dd>
						<ul>
							<li>Создание грамотного и структурированного HTML5- и CSS3-кода. </li>
							<li>Работа с веб-хостингом</li>
						</ul>
					</dd>
					<br>
					<dt>Предварительная подготовка</dt>
					<dd>Свободное владение компьютером и интернетом</dd>
				</dl>
				<table>
					<caption>Стоимость курса</caption>
					<colgroup>
						<col style="width: 250px;" />
						<col style="width: 200px;" span="2" />
					</colgroup>
					<thead>
						<tr>
							<th scope="col" id="tbl-col1">Проведение занятий</th>
							<th scope="col" id="tbl-col3">Весь курс</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" headers="tbl-col1" id="tbl-row1">Индивидуально</th>
							<td headers="tbl-row1 tbl-col3">50&thinsp;000&nbsp;тенге</td>
						</tr>
						<tr>
							<th scope="row" headers="tbl-col1" id="tbl-row2">Группа из 2 чел</th>
							<td headers="tbl-row2 tbl-col3">40&thinsp;000&nbsp;тенге</td>
						</tr>
						<tr>
							<th scope="row" headers="tbl-col1" id="tbl-row3">Группа из 3 и более чел</th>
							<td headers="tbl-row3 tbl-col3">30&thinsp;000&nbsp;тенге</td>
						</tr>
					</tbody>
				</table>
				<br>
				<p><b>Оплата за обучение</b> производится только <b>за пройденные часы</b>. При успешном прохождении курса за меньшее количество часов (например, в случае хорошей успеваемости или когда часть материала ученику знакома со школы или ВУЗа) выдаётся сертификат о полном его прохождении, а деньги за не использованные часы возвращаются.</p>
			</section>
			<br>
			<section>
				<h2>Программа курса</h2>
				<table>
					<caption>План занятий</caption>
					<colgroup>
						<col style="width: 640px;" />
						<col style="width: 80px;" span="2" />
					</colgroup>
					<thead>
						<tr>
							<th scope="col" id="tb2-col1">Тема</th>
							<th scope="col" id="tb2-col2">Часы</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="3" headers="tb2-col1" id="tbl2-h1">Работа с веб-хостингом</th>
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row1">Веб-хостинг. Обзор возможностей</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row1">0.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row2">Доменное имя. Регистрация доменного имени. Работа с FTP-сервером</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row2">0.5</td>
							
						</tr>
					</tbody>
					<tbody>
						<tr>
							<th colspan="3" headers="tb2-col1" id="tbl2-h2">HTML-вёрстка</th>
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row1">Введение и основные понятия</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row1">1</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row2">Форматирование текста</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row2">1</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row3">Блочные теги веб-страницы</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row3">2</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row4">Таблицы</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row4">2</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row5">Способы формирования макета сайта</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row5">0.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row6">Графические изображения и объекты</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row6">1.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row7">Изображения для мобильных устройств</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row7">0.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row8">Гиперссылки</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row8">0.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row9">Фреймы</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row9">0.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row10">Формы</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row10">1</td>
							
						</tr>
					</tbody>
					<tbody>
						<tr>
							<th colspan="3" headers="tb2-col1" id="tbl2-h3">CSS-вёрстка</th>
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row1">Введение и основные понятия. Источники CSS</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row1">0.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row2">Единицы измерения</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row2">0.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row3">Селекторы CSS</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row3">1</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row4">Позиционирование элементов</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row4">1.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row5">Многоколоночная верстка веб-страницы</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row5">2</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row6">Псевдоклассы</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row6">0.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row7">Псевдоэлементы</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row7">1</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row8">CSS-трансформация</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row8">2</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row9">Стили для разных устройств. Адаптивный дизайн</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row9">1.5</td>
							
						</tr>
						
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row10">Трансформация текста и элементов HTML</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row10">0.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row11">Анимация в CSS3</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row11">1</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row12">Модуль макета гибкого контейнера FlexBox</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row12">1.5</td>
							
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td>Всего</td>
							<td headers="tb2-col2">25&nbsp;часов</td>
							
						</tr>
					</tfoot>
				</table>
				<br>
				<figure>
					<figcaption>Описание занятий</figcaption>
					<ol>
						<li style="margin-bottom: 20px;">
							Веб-хостинг. Обзор возможностей
							<p>Основные возможности и ограничения хостинга. Платные и бесплатные хостинги</p>
						</li>
						<li style="margin-bottom: 20px;">
							Доменное имя. Регистрация доменного имени
							<p>Структура и уровни доменного имени. Подбор доменного имени. Настройка и подключение к FTP-серверу. Работа с файлами на удалённом сервере</p>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Введение и основные понятия</figcaption>
								<ul>
									<li>Введение. Что такое HTML. Теги HTML, структура тегов, атрибуты тегов, кипы тегов. Комментарии в HTML</li>
									<li>Контентная модель HTML5</li>
									<li>Кодировка веб-страниц. Стандарты Unicode и ASCII</li>
									<li>Типы (X)HTML-документов. Инструкция «DOCTYPE» и веб-стандарты</li>
									<li>Элементы раздела «HEAD». Теги &lt;TITLE&gt;, &lt;META&gt;, &lt;SCRIPT&gt;, &lt;LINK&gt;, &lt;STYLE&gt;, &lt;BASE&gt;</li>
									<li>Идентификаторы и классы</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Работа со строками</figcaption>
								<ul>
									<li>Специальные символы в HTML-коде. Пробельные символы в HTML-коде</li>
									<li>Список тегов для форматирования тегов</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Блочные теги веб-страницы</figcaption>
								<ul>
									<li>Семантические элементы HTML5</li>
									<li>Работа с заголовками, работа со списками</li>
									<li>Список блочных тегов</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Таблицы</figcaption>
								<ul>
									<li>Элементы и атрибуты таблицы</li>
									<li>Колонтитулы таблицы</li>
									<li>Объединение строк и столбцов таблицы</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Способы формирования макета сайта</figcaption>
								<ul>
									<li>Табличная вёрстка</li>
									<li>Блочная вёрстка</li>
									<li>Логическое макетирование блочной вёрстки HTML5</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Графические изображения и объекты</figcaption>
								<ul>
									<li>Поддерживаемые типы файлов изображений</li>
									<li>Тег &lt;IMG&gt; и его атрибуты</li>
									<li>Серверная и клиентская карта изображений</li>
									<li>Поддерживаемые типы аудиофайлов. Вставка аудиофайлов</li>
									<li>Поддерживаемые типы видеофайлов. Вставка видеофайлов</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Изображения для мобильных устройств</figcaption>
								<ul>
									<li>Встраивание разных размеров изображений в зависимости от размеров экрана</li>
									<li>Создание и кроссбраузерная вставка иконки веб-сайта для разных браузеров, ОС и размеров экрана</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Гиперссылки</figcaption>
								<ul>
									<li>Типы ссылок</li>
									<li>Атрибуты гиперссылки. Табуляции и быстрый вызов «горячими» клавишами</li>
									<li>Использование изображения как гиперссылки</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Формы</figcaption>
								<ul>
									<li>Общие сведения</li>
									<li>Тег &lt;FORM&gt; и его атрибуты</li>
									<li>Методы отправки формы</li>
									<li>Типы отправляемых данных</li>
									<li>Элементы управления формы и их атрибуты</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Источники CSS</figcaption>
								<ul>
									<li>Применения стилей в HTML-документа</li>
									<li>Внутренние, внешние стили. Назначение стилей внутри HTML-тега</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Селекторы CSS</figcaption>
								<ul>
									<li>Основные виды селекторов CSS</li>
									<li>Назначение стилей HTML-элементу через комбинацию селекторов</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Единицы измерения</figcaption>
								<ul>
									<li>Относительные и абсолютные единицы измерения</li>
									<li>Единицы измерения для текстового содержимого HTML-страницы</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Позиционирование элементов</figcaption>
								<ul>
									<li>Виды позиционирования элементов веб-страницы</li>
									<li>Макетирование страницы с помощью позиционирования</li>
									<li>Слои элементов при позиционировании</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Псевдоклассы</figcaption>
								<ul>
									<li>Основные виды псевдоклассов</li>
									<li>Использование псевдоклассов в гиперссылках и формах</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Псевдоэлементы</figcaption>
								<ul>
									<li>Основные виды псевдоэлементов</li>
									<li>Использование псевдоэлементов в элементах  и текстах веб-страницы</li>
								</ul>
							</figure>
						</li>
						<li style="margin-bottom: 20px;">
							<figure>
								<figcaption>Стили для разных устройств. Адаптивный дизайн</figcaption>
								<ul>
									<li>Взаимодействие стилей для разных устройств</li>
									<li>Стили для печати веб-страницы</li>
									<li>Стили для разных размеров и видов мониторов</li>
								</ul>
							</figure>
						</li>
					</ol>
				</figure>
				<strong>По окончании курса выдаётся сертификат.</strong>
			</section>
		</main>
		
		<div style="display: none;">
			<div class="box-modal" id="exampleModal">
				<div class="box-modal_close arcticmodal-close">Х</div>
				<form method="post" action="php/sendmsg.php">
					<p style="font-size: 19px;">Введите номер телефона и <br>мы ответим на все ваши вопросы</p>
					<p><input id="phone" name="Телефон:" style="margin-top: 15px;" required></p>
					<button type="submit" style="color: white;background-color: forestgreen;font-weight: 600;padding: 5px;margin-top: 12px;width: 110px;">Отправить</button>
				</form>
			</div>
		</div>
		
		
	<div class="container">
		<div class="row space">
			<div class="btn col-md-12 col-sm-12 col-xs-12">
				<div class="center-block" style="width: 250px;">
					<a href="#zakaz_course" rel="nofollow" class="zakaz_course">
						<div class="btn_prg">	
							Записаться на курс
						</div>	
					</a>						
				</div>
			</div>	
		</div>				
		</div>				
	</div>	
	
	<div class="row" style="height: 60px;"></div>
	
	<?include ABSOLUTE__PATH__."/include/footer.php"?>
	
</body>
</html>								