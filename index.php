<?php
// first-task
$a0 = 0;
$b0 = 0;
$a1 = 1;
$b1 = 1;
// second-task
$true_x = true;
$false_x = false;
$one_x = 1;
$zero_x = 0;
$minus_one_x = -1;
$one_str_x = '1';
$null_x = null;
$string_x = 'php';
$true_y = true;
$false_y = false;
$one_y = 1;
$zero_y = 0;
$minus_one_y = -1;
$one_str_y = '1';
$null_y = null;
$string_y = 'php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Практическая работа на курсе 'Веб-Разроботчик' SkillFactory. Старт в PHP">
	<meta name="keywords" content="Обучение, SkillFactory, PHP, практическая работа, базовый backend, Старт в PHP">
	<meta name="author" content="Анатолий Кострыкин">
	<meta name="copyright" content="Анатолий Кострыкин">
	<link rel="shortcut icon" href="./img/php_elephant.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css">
	<title>Старт в PHP</title>
</head>

<body>
	<div class="wrapper">

		<header class="header">
			<div class="header__logo">
				<a href="./index.php" title="Обновить">
					<img src="./img/php-icon.png" alt="logo">
				</a>
			</div>
			<h1 class="header__title">Старт в PHP</h1>
		</header>

		<main class="content">
			<article class="first-task">
				<h2 class="first-task__title title">Задание 1</h2>
				<section class="first-task-tables">
					<table class="truth-table table">
						<caption class="truth-table__title">Таблица истинности PHP</caption>
						<tr>
							<th>A</th>
							<th>B</th>
							<th>!A</th>
							<th>A || B</th>
							<th>A && B</th>
							<th>A xor B</th>
						</tr>
						<tr>
							<td>
								<?= $a0; ?>
							</td>
							<td>
								<?= $b0; ?>
							</td>
							<td>
								<?= !$a0 === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a0 || $b0) === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a0 && $b0) === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a0 xor $b0) === false ? 0 : 1; ?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $a0; ?>
							</td>
							<td>
								<?= $b1; ?>
							</td>
							<td>
								<?= !$a0 === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a0 || $b1) === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a0 && $b1) === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a0 xor $b1) === false ? 0 : 1; ?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $a1; ?>
							</td>
							<td>
								<?= $b0; ?>
							</td>
							<td>
								<?= !$a1 === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a1 || $b0) === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a1 && $b0) === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a1 xor $b0) === false ? 0 : 1; ?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $a1; ?>
							</td>
							<td>
								<?= $b1; ?>
							</td>
							<td>
								<?= !$a1 === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a1 || $b1) === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a1 && $b1) === false ? 0 : 1; ?>
							</td>
							<td>
								<?= ($a1 xor $b1) === false ? 0 : 1; ?>
							</td>
						</tr>
					</table>
					<table class="truth-table table">
						<caption class="truth-table__title">Таблица истинности PHP</caption>
						<tr>
							<th>A</th>
							<th>B</th>
							<th>!A</th>
							<th>A || B</th>
							<th>A && B</th>
							<th>A xor B</th>
						</tr>
						<tr>
							<td>
								<?= $a0; ?>
							</td>
							<td>
								<?= $b0; ?>
							</td>
							<td>
								<?php var_export(!$a0); ?>
							</td>
							<td>
								<?php var_export($a0 || $b0); ?>
							</td>
							<td>
								<?php var_export($a0 && $b0); ?>
							</td>
							<td>
								<?php var_export($a0 xor $b0); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $a0; ?>
							</td>
							<td>
								<?= $b1; ?>
							</td>
							<td>
								<?php var_export(!$a0); ?>
							</td>
							<td>
								<?php var_export($a0 || $b1); ?>
							</td>
							<td>
								<?php var_export($a0 && $b1); ?>
							</td>
							<td>
								<?php var_export($a0 xor $b1); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $a1; ?>
							</td>
							<td>
								<?= $b0; ?>
							</td>
							<td>
								<?php var_export(!$a1); ?>
							</td>
							<td>
								<?php var_export($a1 || $b0); ?>
							</td>
							<td>
								<?php var_export($a1 && $b0); ?>
							</td>
							<td>
								<?php var_export($a1 xor $b0); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $a1; ?>
							</td>
							<td>
								<?= $b1; ?>
							</td>
							<td>
								<?php var_export(!$a1); ?>
							</td>
							<td>
								<?php var_export($a1 || $b1); ?>
							</td>
							<td>
								<?php var_export($a1 && $b1); ?>
							</td>
							<td>
								<?php var_export($a1 xor $b1); ?>
							</td>
						</tr>
					</table>
				</section>
			</article>
			<article class="second-task">
				<h2 class="second-task__title title">Задание 2</h2>
				<section class="second-task-tables">
					<table class="flexible-comparison-table table">
						<caption class="flexible-comparison-table__title">Гибкое сравнение в PHP</caption>
						<tr>
							<th></th>
							<th>true</th>
							<th>false</th>
							<th>1</th>
							<th>0</th>
							<th>-1</th>
							<th>"1"</th>
							<th>null</th>
							<th>"php"</th>
						</tr>
						<tr>
							<td class="bg-color-grey">true</td>
							<td>
								<?php var_export($true_y == $true_x) ?>
							</td>
							<td>
								<?php var_export($true_y == $false_x) ?>
							</td>
							<td>
								<?php var_export($true_y == $one_x) ?>
							</td>
							<td>
								<?php var_export($true_y == $zero_x) ?>
							</td>
							<td>
								<?php var_export($true_y == $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($true_y == $one_str_x) ?>
							</td>
							<td>
								<?php var_export($true_y == $null_x) ?>
							</td>
							<td>
								<?php var_export($true_y == $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">false</td>
							<td>
								<?php var_export($false_y == $true_x) ?>
							</td>
							<td>
								<?php var_export($false_y == $false_x) ?>
							</td>
							<td>
								<?php var_export($false_y == $one_x) ?>
							</td>
							<td>
								<?php var_export($false_y == $zero_x) ?>
							</td>
							<td>
								<?php var_export($false_y == $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($false_y == $one_str_x) ?>
							</td>
							<td>
								<?php var_export($false_y == $null_x) ?>
							</td>
							<td>
								<?php var_export($false_y == $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">1</td>
							<td>
								<?php var_export($one_y == $true_x) ?>
							</td>
							<td>
								<?php var_export($one_y == $false_x) ?>
							</td>
							<td>
								<?php var_export($one_y == $one_x) ?>
							</td>
							<td>
								<?php var_export($one_y == $zero_x) ?>
							</td>
							<td>
								<?php var_export($one_y == $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($one_y == $one_str_x) ?>
							</td>
							<td>
								<?php var_export($one_y == $null_x) ?>
							</td>
							<td>
								<?php var_export($one_y == $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey"><b>0</b></td>
							<td>
								<?php var_export($zero_y == $true_x) ?>
							</td>
							<td>
								<?php var_export($zero_y == $false_x) ?>
							</td>
							<td>
								<?php var_export($zero_y == $one_x) ?>
							</td>
							<td>
								<?php var_export($zero_y == $zero_x) ?>
							</td>
							<td>
								<?php var_export($zero_y == $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($zero_y == $one_str_x) ?>
							</td>
							<td>
								<?php var_export($zero_y == $null_x) ?>
							</td>
							<td>
								<?php var_export($zero_y == $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">-1</td>
							<td>
								<?php var_export($minus_one_y == $true_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y == $false_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y == $one_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y == $zero_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y == $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y == $one_str_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y == $null_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y == $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">"1"</td>
							<td>
								<?php var_export($one_str_y == $true_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y == $false_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y == $one_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y == $zero_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y == $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y == $one_str_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y == $null_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y == $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">null</td>
							<td>
								<?php var_export($null_y == $true_x) ?>
							</td>
							<td>
								<?php var_export($null_y == $false_x) ?>
							</td>
							<td>
								<?php var_export($null_y == $one_x) ?>
							</td>
							<td>
								<?php var_export($null_y == $zero_x) ?>
							</td>
							<td>
								<?php var_export($null_y == $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($null_y == $one_str_x) ?>
							</td>
							<td>
								<?php var_export($null_y == $null_x) ?>
							</td>
							<td>
								<?php var_export($null_y == $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">"php"</td>
							<td>
								<?php var_export($string_y == $true_x) ?>
							</td>
							<td>
								<?php var_export($string_y == $false_x) ?>
							</td>
							<td>
								<?php var_export($string_y == $one_x) ?>
							</td>
							<td>
								<?php var_export($string_y == $zero_x) ?>
							</td>
							<td>
								<?php var_export($string_y == $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($string_y == $one_str_x) ?>
							</td>
							<td>
								<?php var_export($string_y == $null_x) ?>
							</td>
							<td>
								<?php var_export($string_y == $string_x) ?>
							</td>
						</tr>
					</table>
					<table class="hard-comparison-table table">
						<caption class="hard-comparison-table__title">Жёсткое сравнение в PHP</caption>
						<tr>
							<th></th>
							<th>true</th>
							<th>false</th>
							<th>1</th>
							<th>0</th>
							<th>-1</th>
							<th>"1"</th>
							<th>null</th>
							<th>"php"</th>
						</tr>
						<tr>
							<td class="bg-color-grey">true</td>
							<td>
								<?php var_export($true_y === $true_x) ?>
							</td>
							<td>
								<?php var_export($true_y === $false_x) ?>
							</td>
							<td>
								<?php var_export($true_y === $one_x) ?>
							</td>
							<td>
								<?php var_export($true_y === $zero_x) ?>
							</td>
							<td>
								<?php var_export($true_y === $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($true_y === $one_str_x) ?>
							</td>
							<td>
								<?php var_export($true_y === $null_x) ?>
							</td>
							<td>
								<?php var_export($true_y === $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">false</td>
							<td>
								<?php var_export($false_y === $true_x) ?>
							</td>
							<td>
								<?php var_export($false_y === $false_x) ?>
							</td>
							<td>
								<?php var_export($false_y === $one_x) ?>
							</td>
							<td>
								<?php var_export($false_y === $zero_x) ?>
							</td>
							<td>
								<?php var_export($false_y === $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($false_y === $one_str_x) ?>
							</td>
							<td>
								<?php var_export($false_y === $null_x) ?>
							</td>
							<td>
								<?php var_export($false_y === $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">1</td>
							<td>
								<?php var_export($one_y === $true_x) ?>
							</td>
							<td>
								<?php var_export($one_y === $false_x) ?>
							</td>
							<td>
								<?php var_export($one_y === $one_x) ?>
							</td>
							<td>
								<?php var_export($one_y === $zero_x) ?>
							</td>
							<td>
								<?php var_export($one_y === $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($one_y === $one_str_x) ?>
							</td>
							<td>
								<?php var_export($one_y === $null_x) ?>
							</td>
							<td>
								<?php var_export($one_y === $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">0</td>
							<td>
								<?php var_export($zero_y === $true_x) ?>
							</td>
							<td>
								<?php var_export($zero_y === $false_x) ?>
							</td>
							<td>
								<?php var_export($zero_y === $one_x) ?>
							</td>
							<td>
								<?php var_export($zero_y === $zero_x) ?>
							</td>
							<td>
								<?php var_export($zero_y === $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($zero_y === $one_str_x) ?>
							</td>
							<td>
								<?php var_export($zero_y === $null_x) ?>
							</td>
							<td>
								<?php var_export($zero_y === $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">-1</td>
							<td>
								<?php var_export($minus_one_y === $true_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y === $false_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y === $one_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y === $zero_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y === $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y === $one_str_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y === $null_x) ?>
							</td>
							<td>
								<?php var_export($minus_one_y === $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">"1"</td>
							<td>
								<?php var_export($one_str_y === $true_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y === $false_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y === $one_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y === $zero_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y === $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y === $one_str_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y === $null_x) ?>
							</td>
							<td>
								<?php var_export($one_str_y === $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">null</td>
							<td>
								<?php var_export($null_y === $true_x) ?>
							</td>
							<td>
								<?php var_export($null_y === $false_x) ?>
							</td>
							<td>
								<?php var_export($null_y === $one_x) ?>
							</td>
							<td>
								<?php var_export($null_y === $zero_x) ?>
							</td>
							<td>
								<?php var_export($null_y === $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($null_y === $one_str_x) ?>
							</td>
							<td>
								<?php var_export($null_y === $null_x) ?>
							</td>
							<td>
								<?php var_export($null_y === $string_x) ?>
							</td>
						</tr>
						<tr>
							<td class="bg-color-grey">"php"</td>
							<td>
								<?php var_export($string_y === $true_x) ?>
							</td>
							<td>
								<?php var_export($string_y === $false_x) ?>
							</td>
							<td>
								<?php var_export($string_y === $one_x) ?>
							</td>
							<td>
								<?php var_export($string_y === $zero_x) ?>
							</td>
							<td>
								<?php var_export($string_y === $minus_one_x) ?>
							</td>
							<td>
								<?php var_export($string_y === $one_str_x) ?>
							</td>
							<td>
								<?php var_export($string_y === $null_x) ?>
							</td>
							<td>
								<?php var_export($string_y === $string_x) ?>
							</td>
						</tr>
					</table>
				</section>
				<section class="conclusion">
					<h3 class="conclusion__title title">Выводы о сравнении различных типов в PHP</h3>
					<div class="conclusion__text-block">
						<p>Операторы сравнения (<span class="color-red"> ==, !=, &#60;>, ===, !==, &#60;, >, &#60;=, >=
							</span>) принимают операнды любого типа и всегда возвращают логические значения (<em>true</em> / <em>false</em>).
						</p>
						<h4 class="conclusion__subtitle title">Нестрогое сравнение</h4>
						<p>При <strong>нестрогом сравнении</strong>, если операнды имеют <em>разные типы данных</em>, PHP попытается преобразовать их к <em>одному типу</em> перед сравнением.
						</p>
						<p>Если сравнивается <em>строка</em> с <em>числом</em> или <em>две строки, содержащие числа</em>, каждая <em>строка</em> будет преобразована в <em>число</em> , и сравниваться они будут <strong>как числа</strong>.</p>
						<p><em>PHP</em> сравнивает <em>строку</em> и <em>число</em> <strong>как числа</strong>, только если <em>строка</em> представляет собой <em>число</em>. Иначе <em>число</em> будет конвертировано в <em>строку</em>, и будет производиться <strong>строковое сравнение</strong>.
						</p>
						<p>При сравнении типов <em>string</em>, <em>resource</em>, <em>int</em> или <em>float</em> - <em>строки</em> и <em>ресурсы</em> переводятся в <em>числа</em>, далее обычная математика.
						</p>
						<p>При сравнении <em>null</em> или <em>string</em> со <em>string</em> - <em>null</em> преобразуется в "" (пустую строку), далее <strong>числовое</strong> или <strong>лексическое сравнение</strong>.
						</p>
						<p>При сравнении <em>bool</em> или <em>null</em> c чем угодно - сравниваемое значение преобразуется в тип <em>bool</em>.
						</p>
						<p>Результаты <strong>нестрогого сравнения</strong> <em>разных типов</em> можно посмотреть в таблице <strong><em>"Гибкое сравнение в PHP"</em></strong> с помощью <span class="color-red">==</span>.</p>
						<h4 class="conclusion__subtitle title">Cтрогое сравнение</h4>
						<p>Если требуется избежать <strong>неявного преобразования</strong> типов при сравнении, то следует использовать оператор <span class="color-red">===</span> (тождественно равно) или <span class="color-red">!== </span> (тождественно не равно). Преобразование типа <u>не происходит</u> при <strong>строгом сравнении </strong>. При <strong>строгом сравнении</strong> оператор вернет <em>true</em>, только если оба операнда имеют <em>одинаковый тип</em> и одно и то же значение.
						</p>
						<p>Сравнение тождества (<span class="color-red">===</span> и <span class="color-red">!==</span>) можно
							применять к <em>произвольным значениям</em>, <span class="color-red">другие операторы сравнения</span> следует применять только к <em>сравнимым значениям</em>. Результат сравнения <em>несравнимых значений</em> не определён и на него не следует полагаться.
						</p>
						<p>Результаты <strong>строгого сравнения</strong> <em>разных типов</em> можно посмотреть в таблице <strong><em>"Жёсткое сравнение в PHP"</em></strong> с помощью <span class="color-red">===</span>.</p>
						<h4 class="conclusion__subtitle title">Примечание</h4>
						<p>Любое <strong>строгое</strong> или <strong>нестрогое сравнение</strong> <em>NAN</em> с другим значением, кроме <em>true</em>, включая <em>его самого</em>, возвратит <em>false</em>.
						</p>
						<p>Если попытаться вывести результат операции сравнения на экран, значение <em>true</em> <u>отобразится</u> в окне браузера как <b>1</b>. Значение <em>false</em> соответствует числу <b>0</b> и <u>не отображается</u> на экран. Если вы хотите <u>увидеть результат</u> в виде <em>true</em> или <em>false</em> используйте функцию <code>var_dump()</code>
						</p>
					</div>
				</section>
			</article>
		</main>

		<footer class="footer">
			<nav class="footer-navigation">
				<ul class="footer-links-list">
					<li class="footer-links-list__item">
						<a class="footer-links-list__link" href="#">
							<img src="./img/vk-icon.png" alt="logo">
						</a>
					</li>
					<li class="footer-links-list__item">
						<a class="footer-links-list__link" href="#">
							<img src="./img/telegram-icon.png" alt="logo">
						</a>
					</li>
					<li class="footer-links-list__item">
						<a class="footer-links-list__link" href="#">
							<img src="./img/whatsapp-icon.png" alt="logo">
						</a>
					</li>
					<li class="footer-links-list__item">
						<a class="footer-links-list__link" href="#">
							<img src="./img/github-icon.png" alt="logo">
						</a>
					</li>
				</ul>
			</nav>
			<div class="footer-text-block">
				<p>&copy; 2023 Старт в PHP</p>
			</div>
		</footer>

	</div>
</body>

</html>