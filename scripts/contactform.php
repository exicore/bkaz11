<!doctype html>
<html lang="ru">
<head>
   <title>Ваше сообщение успешно отправлено</title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
   <meta name="theme-color" content="#000000">
   <link rel="icon" href="../images/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
   <link rel="stylesheet" href="../css/main.css" />
   <link rel="stylesheet" href="../css/mail.css" />
</head>
<body>
   <div id="menu_tab">
      <p id="logo">
         <img src="../images/logo.svg" alt="ТСЖ Большой Казачий 11" width="250px" style="position: fixed; left: 50px;" />
      </p>
      <p id="logo_mobile">
         <img src="../images/logo.svg" alt="ТСЖ Большой Казачий 11" width="250px" style="margin: auto;" />
      </p>
      <ul id="menu">
         <li><a href="../index.html">НОВОСТИ</a></li>
         <li><a href="../index.html">СОБЫТИЯ</a></li>
         <li><a href="../providers.html">ПОСТАВЩИКИ УСЛУГ</a></li>
         <li><a href="../blanks.html">БЛАНКИ ДОКУМЕНТОВ</a></li>
         <li><a href="../history.html">ИСТОРИЯ ДОМА</a></li>
         <li><a href="../gallery.html">ФОТО</a></li>
         <li><a href="../contacts.html">КОНТАКТЫ</a></li>
      </ul>
   </div>
   <div id="header">
      <img id="headerPic" src="../images/header.jpg" alt="header" />
   </div>
   <div id="main">
      <h2>ФОРМА УСПЕШНО ОТПРАВЛЕНА</h2>
      <p class="underConstruction">
         <?php
         $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

         if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['message'])){
            $name = trim(strip_tags($_POST['name']));
            $stairs = trim(strip_tags($_POST['stairs']));
            $flat = trim(strip_tags($_POST['flat']));
            $phone = trim(strip_tags($_POST['phone']));
            $message = trim(strip_tags($_POST['message']));

            mail('info@bkaz11.ru', 'Письмо с сайта ТСЖ Большой Казачий 11', 
               'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />
               Лестница №'.$stairs.'<br />Квартира №'.$flat.'<br />
               Его сообщение: '.$message,"Content-type:text/html;charset=UTF-8");

            echo "$name, ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
            ближайшее время<Br> $back";

            exit;
         } 
         else {
            echo "Для отправки сообщения заполните все поля! $back";
            exit;
         }
         ?>
      </p>
   </div>
   <div id="footer">
      <p>
         2016-2017 <br />
         Все права защищены. <br />
         <a href="http://www.bkaz11.ru">www.bkaz11.ru</a>
      </p>
   </div>
</body>
</html>