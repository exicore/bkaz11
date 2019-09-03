<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="theme-color" content="#000000">
	<title>ТСЖ Большой Казачий 11</title>
	<link rel="icon" href="images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
	<link rel="stylesheet" href="css/main.css" />
	
	<script src="scripts/menu.js"></script>
</head>
<body>
	<div id="menu_tab">
		<p id="logo">
			<a href="index.php"><img src="images/logo.svg" alt="ТСЖ Большой Казачий 11" width="250px" style="position: fixed; left: 50px;" /></a>
		</p>
		<p id="logo_mobile">
			<a href="index.php"><img src="images/logo.svg" alt="ТСЖ Большой Казачий 11" width="250px" style="margin: auto;" /></a>
		</p>
		<ul id="menu">
			<li><a href="index.php">НОВОСТИ</a></li>
			<li><a href="index.php">СОБЫТИЯ</a></li>
			<li><a href="providers.html">ПОСТАВЩИКИ УСЛУГ</a></li>
			<li><a href="blanks.html">БЛАНКИ ДОКУМЕНТОВ</a></li>
			<li><a href="history.html">ИСТОРИЯ ДОМА</a></li>
			<li><a href="gallery.html">ФОТО</a></li>
			<li><a href="contacts.html">КОНТАКТЫ</a></li>
		</ul>
	</div>
	<div id="header">
		<img id="headerPic" src="images/header.jpg" alt="header" />
	</div>
	<div id="main">
		<h2>СВЕЖИЕ НОВОСТИ</h2>
		<div id="newsDiv">
			<?php
			require_once('appvars.php');
			require_once('admin/connectvars.php');
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('Ошибка подключения к серверу БД.');

			mysqli_set_charset( $dbc, 'utf8');

			$query = "SELECT * FROM posts_list ORDER BY id DESC";
			$result = mysqli_query($dbc, $query)
			or die('Ошибка выполнения запроса к БД');

			while ($row = mysqli_fetch_array($result)) {
				$subject = $row['subject'];
				$description = $row['description'];
				$curDate = $row['curDate'];

				?>
				<h3 class="postTheme"><?php echo $subject; ?></h3>
				<?php
				if (is_file(UPLOAD_PATH . $row['image']) && filesize(UPLOAD_PATH . $row['image']) > 0) {
					echo '<div class="postImage"><img src="' . UPLOAD_PATH . $row['image'] . '" alt="Изображение записи"></div>';
				}
				?>
				<p class="postText"><?php echo $description; ?></p>
				<p class="underText">С уважением,</br>Администрация ТСЖ</p>
				<p class="currentDate"><?php echo $curDate; ?></p>
				<?php
			}

			mysqli_close($dbc);
			?>
		</div>
		<h2>ОБРАТНАЯ СВЯЗЬ</h2>
		<form id="form" method="post" action="scripts/contactform.php">
			<div>
				<label for="name">Имя:</label>
				<input class="input" required="yes" maxlength="25" type="text" name="name" placeholder="Например, Иванов Виктор Васильевич" />

				<label for="phone">Телефон:</label>
				<input class="input" maxlength="25" type="text" name="phone" placeholder="Например, +7 900 555 0123" />

				<div id="left">
					<label for="flat">Квартира №</label>
					<input class="input" required="yes" maxlength="4" type="text" name="flat" placeholder="123" />
				</div>

				<div id="right">
					<label for="stairs">Лестница №</label>
					<input class="input" required="yes" maxlength="4" type="text" name="stairs" placeholder="5">
				</div>

				<label for="message">Сообщение:</label>
				<textarea class="input" required="yes" rows="7" cols="50" name="message" placeholder="Текст сообщения"></textarea>

				<input id="button" type="submit" value="Отправить" />
			</div>
		</form>
	</div>
	<div>
		<p id="footer">
			2016-2017 <br />
			Все права защищены. <br />
			<a href="http://www.bkaz11.ru">www.bkaz11.ru</a>
		</p>
	</div>
</body>
</html>