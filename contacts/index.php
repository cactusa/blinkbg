<!DOCTYPE html>



<html lang="en">

<head>

	<title>blinkbg - Контакти</title>

	<meta charset="UTF-8" />

	<link rel="stylesheet" type="text/css" href="../reset.css" />

	<link rel="stylesheet" type="text/css" href="../main.css" />

    <?php include 'contact_files/meta.php'; ?>

</head>

<body>

	<div id="wrapper">

		<?php include("../includes/branding.php");?>

		<ul id="navigation">

			<li><a href="/">Начало</a></li>

			<li><a href="/products/">Продукти</a></li>

			<li><a href="/services/">Услуги</a></li>

			<li><a href="/contacts/" class="active">Контакти</a></li>

			<li><a href="/about/">За Нас</a></li>

		</ul>

		<div id="content" class="group">

			<div class="container">

				<h1>

					Контакти

				</h1>

			</div>

			<dl class="contacts">

				<dt>Име:</dt>

					<dd>Кирил Гецов</dd>

				<dt>Телефон:</dt>

					<dd>(+359) 887 699 425 </dd>

				<dt>e-mail:</dt>

					<dd>blinkbg@mail.bg</dd>

			</dl>

            <?php include 'contact_files/form.php';?>

			<div class="container group">

				<dl>

                	<dt>Кореспондеции:</dt>

						<dd>Обаждания на посочения телефон се приемат през делничните дни от 9 до 17 часа.</dd>

						<dd>Очаквайте отговор на имейл кореспонденциите в рамките на работния ден.</dd>

                        <div class="horizontalrule"></div>

                    <dt>Доставки:</dt>

                    	<dd>Доставките се извършват с частни куриерски услуги, а заплащането чрез наложен платеж.</dd>

				</dl>

			</div>

		</div>

		

		<?php include("../includes/footer.php");?>

        <?php include("../includes/links.php");?>

	</div>

</body>

</html>