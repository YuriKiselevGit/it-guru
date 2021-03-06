<?
	define('ABSOLUTE__PATH__','/var/www/vhosts/v-94087.webspace/www/it-guru.kz');	
	$title = 'Программа курса Delphi';
?>
<!DOCTYPE html>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=0, maximum-scale=0, user-scalable=0"> 
	<meta charset="UTF-8">	
    <link href="/css/bootstrap.min.css" rel="stylesheet">
   	<link type="text/css" rel="stylesheet" href="/css/easy-responsive-tabs.css" />
    <link href="/css/templatemo_style.css" rel="stylesheet"> 
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/templatemo_misc.css">
	<link href="/css/style.css" rel="stylesheet"> 
	<link rel="stylesheet" href="/css/themes/default/default.css" type= "text/css" media= "screen" />
	<link rel="stylesheet" href="/css/nivo-slider.css" type= "text/css" media= "screen" />
	<link rel="stylesheet" type="text/css" href="/fancybox/jquery.fancybox.css" media="screen" />		
	
  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>	
	<style>
		body {
		line-height: 25px;
		width: 300px;
		color: #000;
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
		
		#v-1, #v-2 {
		display: none;
		}
		#v-1:not(:checked) + input + label,
		#v-2:not(:checked) + label + label  {
		border-bottom-style: dotted;
		border-width: 1px;
		cursor: pointer;
		}
		#v-1:not(:checked) + input + label:not(:hover), #v-2:not(:checked) + label + label:not(:hover) {
		color: blue;
		border-color: blue;
		}
		#v-1:not(:checked) + input + label:hover, #v-2:not(:checked) + label + label:hover {
		color: red;
		border-color: red;
		}
		#v-1:checked + input + label, #v-2:checked + label + label {
		font-weight: bold;
		}
		#v-1:not(:checked) + input + label + label + section, #v-2:not(:checked) + label + label + section + section {
		display: none;
		}
		
		h1, h2, h3, h4, h5 {}
		
		p {}
		
		.container {
			width: 300px;
		}	
	</style>


	<div class="container">
			<div class="col-md-12 col-sm-12 text-center dist" style="font-size: 20px;">
				<b>Дистанционное обучение</b>: возможность прохождения курса онлайн в любое удобное время, живое общение с преподавателем, практические занятия на вашем компьютере при непосредственном контроле преподавателя за вашими действиями.
			</div>
			<br>
	</div>

<?if($_GET['mob']=='') {?>			
	<div class="container">
		<div class="row">
			<ul class="nav navbar-nav" style="width: 540px;">
				<li style="width: 160px; background-color: #f9ec95;"><a class="navbar-home" href="/courses/delphi.php">Полный курс</a></li>
				<li style="width: 160px;"><a class="navbar-kursy" href="/courses/expr_delphi.php">Экспресс курс</a></li>
			</ul>
		</div>
	</div>
	<br>
<?}?>	
	
	<div class="container">
		<h2><b>Программа курса Delphi</b></h2>
		<main>
			<section>
				<h2>Описание курса</h2>
				<p><dfn>Delphi</dfn>&nbsp;— это среда объектно-ориентированного программирования, основанная на языке Object Pascal. Используется для разработки и поддержки программного обеспечения. В отличии от своего прародителя, языка Pascal, многофункционален и удобен тем, что имеет визуальный редактор приложения, который позволяет создавать внешний облик будущей программы.</p>
				<br>
				<dl>
					<dt>Цель курса</dt>
					<dd>
						<ul>
							<li>Дать практические навыки разработки многоцелевых приложений для среды работы в среде Windows.</li>
							<li>Обучить процессу создания полноценных Windows-приложений.</li>
							<li>Дать навыки работы в среде визуального программирования.</li>
							<li>Дать навыки работы с объектно-ориентированной моделью программирования.</li>
							<li>Сформировать у слушателей разностороннюю конспективную базу знаний по Delphi позволяющую продолжить дальнейшее совершенствование самостоятельно или на углубленных курсах.</li>
						</ul>
					</dd>
					<br>
					<dt>Знания и умения, полученные в результате обучения</dt>
					<dd>
						<ul>
							<li>Использовать среду Delphi для разработки многоцелевых приложений</li>
							<li>Разрабатывать полноценные Windows-приложения</li>
							<li>Оперировать категориями объектного программирования, управляемого событиями</li>
						</ul>
					</dd>
					<br>
					<dt>Предварительная подготовка</dt>
					<dd>
						<ul>
							<li>Навыки работы в среде Windows</li>
							<li>Основы языка программирования Pascal</li>
						</ul>
					</dd>
				</dl>
				<table>
					<caption>Стоимость курса</caption>
					<colgroup>
						<col style="width: 150px;" />
						<col style="width: 100px;" />
					</colgroup>
					<thead>
						<tr>
							<th scope="col" id="tbl-col1">Проведение занятий</th>							
							<th scope="col" id="tbl-col3">Весь курс</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" headers="tbl-col1" id="tbl-row1">Краткий уровень</th>							
							<td headers="tbl-row1 tbl-col3">53&thinsp;200&nbsp;тенге</td>
						</tr>
						<tr>
							<th scope="row" headers="tbl-col1" id="tbl-row2">Полный уровень</th>							
							<td headers="tbl-row2 tbl-col3">74&thinsp;000&nbsp;тенге</td>
						</tr>
					</tbody>
				</table>
				<br>
				<p><b>Оплата за обучение</b> производится только <b>за пройденные часы</b>. При успешном прохождении курса за меньшее количество часов (например, в случае хорошей успеваемости или когда часть материала ученику знакома со школы или ВУЗа) выдаётся сертификат о полном его прохождении, а деньги за не использованные часы возвращаются.</p>
			</section>
			<br>
			<section>
				<h2>Программа курса полного курса</h2>
				<table>
					<caption>План занятий</caption>
					<colgroup>
						<col style="width: 80%;" />
						<col style="width: 20%;" />
					</colgroup>
					<thead>
						<tr>
							<th scope="col" id="tb2-col1">Тема</th>
							<th scope="col" id="tb2-col2">Часы</th>							
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="3" headers="tb2-col1" id="tbl2-h1">Введение</th>
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row1">Введение, основные понятия Delphi</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row1">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row2">Редактирование свойств компонент. Окно Инспектора объектов</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row2">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row3">Переменные, константы</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row3">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row4">Условия и циклы</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row4">2</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row5">Процедуры и функции</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row5">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row6">Массивы</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row6">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row7">Закладка Standard</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row7">2</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row8">Работа со строками</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row8">2</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row9">Математические операции</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row9">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h1" id="tbl2-h1-row10">Типы</th>
							<td headers="tb2-col1 tbl2-h1 tbl2-h1-row10">1</td>							
						</tr>
					</tbody>
					<tbody>
						<tr>
							<th colspan="3" headers="tb2-col1" id="tbl2-h2">ООП</th>
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row1">Классы</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row1">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row2">Наследование классов</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row2">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row3">Модификаторы доступа</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row3">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h2" id="tbl2-h2-row4">Свойства</th>
							<td headers="tb2-col1 tbl2-h2 tbl2-h2-row4">1</td>							
						</tr>
					</tbody>
					<tbody>
						<tr>
							<th colspan="3" headers="tb2-col1" id="tbl2-h3">Компоненты, палитра компонентов</th>
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row1">Закладка Additional</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row1">2</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row2">Закладка Win32</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row2">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row3">Закладка System</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row3">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row4">Закладка Internet и Dialogs</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row4">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row5">Закладка Win 3.1, Samples и IndyClients</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row5">2</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h3" id="tbl2-h3-row6">Работа с датой и временем</th>
							<td headers="tb2-col1 tbl2-h3 tbl2-h3-row6">1</td>							
						</tr>
					</tbody>
					<tbody>
						<tr>
							<th colspan="3" headers="tb2-col1" id="tbl2-h4">Практика</th>
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h4" id="tbl2-h4-row1">Работа с файлами и папками</th>
							<td headers="tb2-col1 tbl2-h4 tbl2-h4-row1">2</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h4" id="tbl2-h4-row2">Работа с буфером обмена</th>
							<td headers="tb2-col1 tbl2-h4 tbl2-h4-row2">1</td>
						</tr>
					</tbody>
					<tbody>
						<tr>
							<th colspan="3" headers="tb2-col1" id="tbl2-h5">Первые программы</th>
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h5" id="tbl2-h5-row1">Текстовый редактор</th>
							<td headers="tb2-col1 tbl2-h5 tbl2-h5-row1">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h5" id="tbl2-h5-row2">Мини тест</th>
							<td headers="tb2-col1 tbl2-h5 tbl2-h5-row2">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h5" id="tbl2-h5-row3">MP3, Video плеер</th>
							<td headers="tb2-col1 tbl2-h5 tbl2-h5-row3">1</td>							
						</tr>
					</tbody>
					<tbody>
						<tr>
							<th colspan="3" headers="tb2-col1" id="tbl2-h6">Дополнительно</th>
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h6" id="tbl2-h6-row1">Метод MessageBox</th>
							<td headers="tb2-col1 tbl2-h6 tbl2-h6-row1">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h6" id="tbl2-h6-row2">Работа с оформлением</th>
							<td headers="tb2-col1 tbl2-h6 tbl2-h6-row2">2</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h6" id="tbl2-h6-row3">Горячие клавиши, работа с клавиатурой и мышь</th>
							<td headers="tb2-col1 tbl2-h6 tbl2-h6-row3">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h6" id="tbl2-h6-row4">Работа с ресурсами</th>
							<td headers="tb2-col1 tbl2-h6 tbl2-h6-row4">1</td>							
						</tr>
						<tr>
							<th headers="tb2-col1 tbl2-h6" id="tbl2-h6-row5">Работа с «чужими» окнами</th>
							<td headers="tb2-col1 tbl2-h6 tbl2-h6-row5">1</td>							
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td>Всего</td>
							<td headers="tb2-col2">37&nbsp;часов</td>							
						</tr>
					</tfoot>
				</table>
				<br>
				<figure>
					<figcaption>Описание занятий</figcaption>
					<ol>
						<li style="margin-bottom: 20px;">
							Введение, основные понятия Delphi
							<p>Общие сведения о программировании в Windows: языки программирования (высокого-низкого уровня, объектно-ориентированные, визуальные). Структура проекта в Delphi, разработка программы ( общая концепция ). Создание нового проекта, сохранение проекта. Открытие существующего проекта. Главные окна Delphi ( Инспектор объектов, окно кода, окно формы, окно среды разработки, палитра компонентов). Понятие о компонентах - визуальные и не визуальные компоненты. Помещение компонента (компонентов) на форму. Выполнение программы. Готовые шаблоны программ в Delphi. Настройки программы</p>
						</li>
						<li style="margin-bottom: 20px;">
							Редактирование свойств компонент. Окно Инспектора объектов
							<p>Изменение свойств объектов во время разработки. Выравнивание и размеры визуальных компонентов. Выделение нескольких компонентов и одновременное редактирование. Контекстная справка по свойствам компонентов. Реакция на события. Взаимодействие компонент во время выполнения. Общее понятие об иерархии компонент, события объектов Delphi. Рассмотрение элемента TWinControl (TControl): основные свойства, основные события</p>
							<dl>
								<dt>Свойства</dt>
								<dd>Name, Width, Height, Top, Left, Align, Bevel, Cursor, Color, Enabled, ShowHint, Name, Visible, Ctl3D, TabStop,TabOrder</dd>
								<dt>События</dt>
								<dd>OnClick, OnDblClick, OnMouseMove, OnMouseDown, OnKeyPress</dd>
							</dl>
						</li>
						<li style="margin-bottom: 20px;">
							Переменные, Константы
							<p>Что такое переменные, обозначение переменных, типы переменных, глобальные переменные. Типы данных Integer, Shortint, Byte, Real, Double , String, Char, Boolean. Что такое Константа (Const), обозначение констант</p>
						</li>
						<li style="margin-bottom: 20px;">
							Условия и циклы
							<p>Конструкция: IF Then Else. Циклы: While...Do, ( Счётчик For...To...Do,  For...DownTo...Do ), Repeat…Until, Break…Continue. </p>
						</li>
						<li style="margin-bottom: 20px;">
							Процедуры и функции
							<p>Создание процедур, создание функций с параметрами и без</p>
						</li>
						<li style="margin-bottom: 20px;">
							Массивы
							<p>Что такое одномерные массивы? Создание одномерного массива. Что такое Многомерные массивы? Создание многомерного массива.</p>
						</li>
						<li style="margin-bottom: 20px;">
							Закладка Standard
							<p>Работа с Фрэймами (Frame), изучение компонентов (MainMenu, PopupMenu , Label, Edit, Memo, Button, CheckBox, RadioBox, ListBox, ComboBox, ScrollBar, GroupBox, RadioGroup, Panel, ActionList)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Работа со строками
							<p>Динамическое создание не визуального объекта TStringList. Работа с TStringLiist ( Добавление строк, удаление строк, редактирование строк, перемещение, поиск строки, сортировка, автоматическое заполнение). Изучение процедур (Delete, Concat, Copy, Cut, Insert, Trim, TrimLeft, TrimRight, StringReplace). Перевод строк (IntToStr, StrToInt, FloatToStr, StrToFloat, и тд)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Математические операции
							<p>Функции (ArcCos, ArcSin, DegToRad, RadToDeg, Log10, Min, Max, RandomRange, Sum, Tan, Sin, Cos), (+, -, /, * )</p>
						</li>
						<li style="margin-bottom: 20px;">
							Типы
							<p>Создание своего типа данных</p>
						</li>
						<li style="margin-bottom: 20px;">
							Классы
							<p>Создание своего класса</p>
						</li>
						<li style="margin-bottom: 20px;">
							Наследование классов
							<p>Наследование ранее созданного класса</p>
						</li>
						<li style="margin-bottom: 20px;">
							Модификаторы доступа
							<p>Private, Public</p>
						</li>
						<li style="margin-bottom: 20px;">
							Свойства
							<p>Чтение, запись обращение к определённому свойству</p>
						</li>
						<li style="margin-bottom: 20px;">
							Закладка Additional
							<p>Изучение компонентов (BitBtn, SpeedButton, MaskEdit, StringGrid, Image, Shape, Bwvel, ScrollBox, CheckListBox, Splitter, LabelEdit, ColorBox, Chart)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Закладка Win32
							<p>Изучение компонентов (TabControl, PageControl, ImageList, RichEdit, TrackBar, ProgressBar, UpDown, Animate, DateTimePicker, MonthCalendar, TreeView, ListView, StatusBar, ToolBar, XPManifest)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Закладка System
							<p>Изучение компонентов (Timer, PaintBox, OleContainer)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Закладка Internet и Dialogs
							<p>Изучение компонентов (WebBrowser, OpenDialog, SaveDialog, OpenPictureDialog, SavePictureDialog, FontDialog, ColorDialog, PrintDialog, PrinterSetupDialog, FindDialog, ReplaceDialog, PageSetupDialog)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Закладка Win 3.1, Samples и IndyClients
							<p>Изучение компонентов (TabbedNotebook, Notebook, Header, FileListBox, DirectoryListBox, DriveComboBox, FilterComboBox, Gauge, SpinButton, SpinEdit, Calendar, IdHTTP)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Работа с датой и временем
							<p>Методы отображения даты и времени, сохранение даты и времени, установка даты и времени</p>
						</li>
						<li style="margin-bottom: 20px;">
							Работа с файлами и папками
							<p>Создание файла - папки, перемещение файлов в папку, удаление файлов и папок, копирование файлов и папок, проверка на существование определённой папки или файла</p>
						</li>
						<li style="margin-bottom: 20px;">
							Работа с буфером обмена
							<p>Вставить текст с буфера обмена, скопировать текст в буфер обмена, копирование изображения в буфер обмена, вставка изображения с буфера обмена, проверка есть ли текст в буфере обмена и т.д.</p>
						</li>
						<li style="margin-bottom: 20px;">
							Текстовый редактор
							<p>Создание простого текстового редактора ( Выравнивание текста, загрузка текстового документа, сохранение текстового документа, поиск, оформления текста: цвет, шрифт, начертание, цвет фона и т.д.)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Создание мини теста
							<p>Создание мини теста, 15 вопросов с вариантом ответа, проверка правельных ответов, проверка не правильных ответов, время затраченное на прохождение теста, сохранение результатов</p>
						</li>
						<li style="margin-bottom: 20px;">
							MP3, Video плеер
							<p>Создание mp3 и Video плеера с помощью компонента MediaPlayer. Дополнительные функции ( Перемотка, движение scrollbar-a, загрузка файла, сохранение файла, отображение полного пути до файла, отображение формата файла). PlayList ( Добавление треков, удаление треков, сохранение PlayList - загрузка PlayList и т.д)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Метод MessageBox
							<p>Вывод сообщения с кнопками (Да, Нет, Отмена, Повтор, Пропустить, Прервать). Тип сообщения(Иконка) (Предупреждение, Ошибка, Внимание, Вопрос)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Работа с оформлением
							<p>Закругление визуальных компонентов (Button, Panel и т.д). Создание красивых кнопочек в Fotoshop и других программа. Анимация окон, создание окна не стандартной формы (Круглое, квадратное, Овальное и т.д)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Горячие клавиши, работа с клавиатурой и мышь
							<p>Работа с мышью ( скрытие курсора, определение позиции курсора, смена кнопок местами, загрузка своего курсора в программу, блокировка). Создание своей клавиатуры. Работа с клавиатурой (Имитация нажатия клавиш, отслеживание нажатой клавиши, блокировка клавиатуры, создание горячих клавиш)</p>
						</li>
						<li style="margin-bottom: 20px;">
							Работа с ресурсами
							<p>Создание файла ресурса ($R), добавление файла ресурса в проект, загрузка ресурса, извлечение ресурса из exe.</p>
						</li>
						<li style="margin-bottom: 20px;">
							Работа с «чужими» окнами
							<p>Методы для поиска окна, сварачивание, разварачивание, закрытие. Управление "чужими" окнами с помощью Delphi</p>
						</li>
					</ol>
				</figure>
			</section>
			<p><strong>По окончании курса выдаётся сертификат.</strong></p>
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
		
		
		<div class="row space">
			<div>Также есть еще курсы  <a style="cursor: pointer;" href="/courses/swift.php"><b>Swift</b></a> <a style="cursor: pointer;" href="/courses/user-pc.php"><b>Пользователь ПК</b></a> </div> 
		</div>			
	</div>		
</div>	




</body>
</html>																								