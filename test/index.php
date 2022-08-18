<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
      include "simple_html_dom.php";//подключаем библиотеку 

      $html = file_get_html('http://www.yandex.ru'); // создает объект страницы Яндекс, запись в переменную html
      $a_links = $html->find('a'); //find  - ищет эл-т по параметру(в данном случае ссылки на странице)
      echo $a_links[1]->href; // смотрим любую ссылку с $html из массива $a_links
   ?>
</body>

</html>