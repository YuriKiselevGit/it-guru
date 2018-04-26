<?
	define('ABSOLUTE__PATH__','/var/www/vhosts/v-94087.webspace/www/it-guru.kz');
	include ABSOLUTE__PATH__."/include/head.php";
	$title = 'Программа курса Photoshop';
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
				<li style="width: 160px; background-color: #f9ec95;"><a class="navbar-home" href="/courses/photoshop.php">Полный курс</a></li>
				<li style="width: 160px;"><a class="navbar-kursy" href="/courses/expr_photoshop.php">Экспресс курс</a></li>
			</ul>
		</div>
	</div>
	
	<br>
	
	<div class="container">	
		
		<h2><b>Программа курса Photoshop</b></h2>
		
		<main>
			<section>
				<h2>Описание курса</h2>
				<dl>
					<dt>Цель курса</dt>
					<dd>
						<ul>
							<li>Освоить базовые технологии создания и редактирования растровых изображений.</li>
							<li>Изучить основные возможности графической программы Adobe Photoshop.</li>
						</ul>
						<p>Курс ориентирован на людей, желающих познакомиться с основами создания и редактирования графических изображений, на начинающих web-мастеров и дизайнеров.</p>
						<p>Хотя материал курса безусловно необходим для подготовки  печатной продукции, курс не содержит специфических для полиграфии сведений о технологиях цветоделения и вывода изображений. Также в курсе не рассматриваются вопросы теории дизайна изображений.</p>
					</dd>
					<br>
					<dt>Предварительная подготовка</dt>
					<dd>
						<ul>
							<li>Навыки работы в среде Windows;</li>
							<li>Знание единиц измерения информации;</li>
							<li>Умение сохранять и открывать созданную работу;</li>
							<li>Умение набирать и редактировать текст.</li>
						</ul>
					</dd>
					<br>
					<dt>Знания и умения, полученные в результате обучения</dt>
					<dd>
						<ul>
							<li>Создавать произвольные растровые изображения используя инструменты рисования;</li>
							<li>Редактировать растровые изображения;</li>
							<li>Создавать коллажи.</li>
						</ul>
					</dd>
				</dl>
				<table>
					<caption>Стоимость курса</caption>
					<colgroup>
						<col style="width: 250px;" />
						<col style="width: 160px;" span="2" />
					</colgroup>
					<thead>
						<tr>
							<th scope="col" id="tbl-col1">Проведение занятий</th>
							<th scope="col" id="tbl-col3">Весь курс</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" headers="tbl-col1" id="tbl-row1">Экспрес курс<br>Индивидуально</th>
							<td headers="tbl-row1 tbl-col3">20 000 тенге</td>
						</tr>
						<tr>
							<th scope="row" headers="tbl-col1" id="tbl-row1">Полный курс<br>Индивидуально</th>
							<td headers="tbl-row1 tbl-col3">34 000 тенге</td>
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
							<th colspan="3" headers="tb2-col1" id="tbl2-h1">Основы работы в Adobe Photoshop (Экспрес курс)</th>
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row1">Теоретические сведения: Понятие компьютерной графики. Растровые и векторные изображения, их различия и применение. Основные цветовые палитры. Форматы графических файлов. Способы получения изображений. Свойства растрового изображения. Создание холста</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row1">1</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row2">Слои, их свойства и приемы работы</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row2">0,5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row3">Инструменты рисования. Кисть. Заливка. Градиенты</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row3">1,5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row4">Инструменты и приемы выделения</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row4">2.5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row5">Работа с текстом</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row5">0,5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row6">Эффекты изображения. Эффекты слоя</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row6">1</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row7">Обзор библиотеки фильтров</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row7">1</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row8">Коррекция изображений. Инструменты и команды корректировки</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row8">2</td>
							
						</tr>
					</tbody>
					<tbody>
						<tr>
							<th colspan="3" headers="tb2-col1" id="tbl2-h2">Основы работы в Adobe Photoshop (Полный курс)</th>
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row1">Рисование. Создание пользовательских инструментов рисования</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row1">2</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row2">Векторные объекты в Photoshop</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row2">2</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row3">Маскирование слоя. Растровые и векторные маски слоя</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row3">1,5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row4">Корректирующие слои. Коррекция изображения с помощью команд Уровни и Кривые</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row4">1</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row5">Редактирование контура выделения в режиме Быстрой маски. Сохранение и загрузка выделений в альфа-каналах</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row5">1</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row6">Слои. Связь слоев. Группирование слоев</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row6">0,5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row7">Управление событиями. Историческая кисть</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row7">0,5</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row8">Эффекты. Создание стилей. Применение смарт-фильтров</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row8">1</td>
							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row9">Дополнительные сведения. Сохранение настроек инструментов стилей в библиотеке. Настройка системы</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row9">0,5</td>
							
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td>Всего</td>
							<td headers="tb2-col2">20&nbsp;часов</td>
							
						</tr>
					</tfoot>
				</table>
				<br>
				<figure>
					<figcaption>Описание занятий</figcaption>
					<ol>
						<li style="margin-bottom: 20px;">
							Основные понятия (1 час. Лекция)
							<ul>
								<li>Понятие компьютерной графики</li>
								<li>Растровые и векторные изображения, их различия и применение</li>
								<li>Типы представления цветов в графических файлах и основные форматы графических файлов</li>
								<li>Разрешение и размеры файла. Свойства изображения в среде Adobe Photoshop. Создание и свойства холста</li>
								<li>Масштаб изображения и навигация</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Слои (0,5 часа. Лекционно-практическое занятие под руководством преподавателя)
							<ul>
								<li>Что такое слои. Палитра слоев</li>
								<li>Создание и удаление слоя. Имя слоя</li>
								<li>Изменение порядка слоёв</li>
								<li>Видимость/невидимость слоёв</li>
								<li>Режимы наложения слоя (обзор)</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Инструменты рисования. (2 часа. Лекционно-практическое занятие под руководством преподавателя)
							<ul>
								<li>Инструменты рисования Кисть, Заливка, Градиент, Узорный штамп</li>
								<li>Настройка параметров Кисти</li>
								<li>Режимы смешивания (обзор) </li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Инструменты выделения. (2,5 часа. Практическое занятие под руководством преподавателя)
							<ul>
								<li>Инструменты выделения: Прямоугольник, Элипс, Лассо, Магнитное и Полигональное лассо, Волшебная палочка</li>
								<li>Добавление и удаление выделенных областей</li>
								<li>Трансформация выделения. Растушевывание краев выделения</li>
								<li>Перемещение выделенной области изображения инструментом Перемещение</li>
								<li>Трансформация слоя</li>
								<li>Практическая работа по созданию монтажного изображения</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Текст (0,5 часа. Практическое занятие под руководством преподавателя)
							<ul>
								<li>Создание текстового слоя. Фигурный и простой текст</li>
								<li>Форматирование и редактирование текста</li>
								<li>Деформация текста</li>
								<li>Растрирование текстового слоя	</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Эффекты изображения. Эффекты слоя. (1 час. Лекционно-практическое занятие под руководством преподавателя)
							<ul>
								<li>Использование эффектов слоя</li>
								<li>Палитра Стиль</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Обзор библиотеки фильтров. (1 час. Лекционно-практическое занятие под руководством преподавателя)
							<ul>
								<li>Обзор библиотеки фильтров</li>
								<li>Применение фильтров к изображению</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Коррекция изображений. Инструменты и команды корректировки. (2 часа)
							<ul>
								<li>Инструменты корректировки, их назначение и свойства. Штамп, Лечащая Кисть, Заплата, Осветление и Затемнение, Резкость и Размытие</li>
								<li>Команды меню Изображение: Яркость/Контраст, Баланс цветов, Автоуровни, Тени/Блики</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Рисование. Создание пользовательских инструментов. (2 часа)
							<ul>
								<li>Настройка параметров Кисти</li>
								<li>Создание пользовательских инструментов: кисти, градиенты и образцы</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Векторные объекты в Photoshop. (2 часа)
							<ul>
								<li>Типы контуров. Пользовательские контуры</li>
								<li>Редактирование векторного контура</li>
								<li>Использование векторного контура для создания выделения, заливки или обводки по контуру</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Маскирование слоя. Обтравочная маска. Растровые и векторные маски слоя. (1,5 час)
							<ul>
								<li>Понятие маски</li>
								<li>Растровая маска слоя</li>
								<li>Векторная маска слоя</li>
								<li>Обтравочная маска</li>
								<li>Редактирование маски. Операции над маской слоя</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Корректирующие слои. (1 час)
							<ul>
								<li>Создание корректирующего слоя</li>
								<li>Коррекция изображения с помощью команд Уровни и Кривые</li>
								<li>Изменение свойств и области воздействия корректировки </li>
								<li>Виньетирование изображения слоя с помощь маски слоя</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Редактирование, сохранение и загрузка контура выделения(1 часа)
							<ul>
								<li>Редактирование контура выделения в режиме Быстрой маски</li>
								<li>Сохранение и загрузка контура выделения в альфа-каналах</li>
								<li>Создание выделения из векторного контура</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Слои. Связь слоев. Группирование слоев.  (0,5 часа)
							<ul>
								<li>Использование связанных слоев</li>
								<li>Группировка слоев. Маскирование группы слоев</li>
								<li>Создание смарт-объекта из слоя</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Управление событиями. Историческая кисть. (0,5 часа)
							<ul>
								<li>Линейная и нелинейная история</li>
								<li>Историческая кисть</li>
								<li>Сохранение состояния документа</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Эффекты. Создание стилей. Применение смарт-фильтров. (1 час)
							<ul>
								<li>Использование эффектов слоя. Включение/выключение эффектов</li>
								<li>Создание пользовательского стиля и добавление его на Палитру стилей</li>
								<li>Смарт-фильтры</li>
							</ul>
						</li>
						<li style="margin-bottom: 20px;">
							Дополнительные сведения. Сохранение настроек инструментов стилей в библиотеке. Настройка системы (0,5 часа)
							<ul>
								<li>Настройка параметров системы</li>
								<li>Автоматизация работы</li>
								<li>Фотопанорама</li>
								<li>Установки печати</li>
							</ul>
						</li>
					</ol>
				</figure>
				<strong>По окончанию курса выдаётся сертификат.</strong>
			</section>
		</main>
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