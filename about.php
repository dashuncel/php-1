<!DOCTYPE>
<html lang="ru">
    <head>
        <title>HW-1</title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
        <?php
          $myName='Дарья';
          $mySurname='Бянкина';
          $myAge='34';
          $myEmail='korovkinada@ya.ru';
          $myCity='irkutsk';
          $aboutMe='я Дарья';
        ?>
    </head>
    <body>
        <h1>Страница пользователя <?= $myName ?></h1>
        <dl>
            <dt>Имя</dt>
            <dd><?= $myName ?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?= $myAge ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><a href='mailto:<?= $myEmail ?>'><?= $myEmail ?></a></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?= $myCity ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?= $aboutMe ?></dd>
        </dl>
    </body>
</html>