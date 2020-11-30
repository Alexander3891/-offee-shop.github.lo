<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>The Starbuzz Bean Machine</title>

    <link rel="stylesheet" href="starbuzz.css">
    <link rel="stylesheet" href="accessform.css">
</head>

<body>

    <h1>You can leave your comment here.</h1>

    <div class="wrapper">
        <fieldset>
            <legend>Enter your Name and Message</legend>
            <?php //основы беопасности сайта
            // система коментариев для сайта (обратная связь)(убираем теги html   теги преодразуются в обычные знаки      защита от ввода одинарных ковычек)
            $db = new PDO('mysql:host=localhost;dbname=site2', 'root', ''); // соединение с бд
            $db->exec("SET NAMES UTF8"); // шрифт

            if (count($_POST) > 0) { // проверка нажата кнопка Отправить или нет
                $name = trim($_POST['name']); // обрезает пробелы - trim
                $text = trim($_POST['text']); // обрезает пробелы - trim

                // $name = strip_tags($name); //эта функция вырезает все html теги которые введены в форму
                //$text = strip_tags($text);

                $name = htmlspecialchars($name); //эта функция освобождает данные от тэгов(она вырезает тэги)
                $text = htmlspecialchars($text);


                if ($name != '' && $text != '') { // проверяем чтобы поля ввода не были пустыми
                    $query = $db->prepare("INSERT INTO comments SET name=:name, text=:text"); //(делаем две пустые дырки - защита от ввода одинарной кавычки)(готовит к выполнению запрос)добавляем данные в таблицу коментариев и добавляем в поле значение имени и текст
                    $params = ['name' => $name, 'text' => $text];
                    $query->execute($params); //(выполняет запрос)метод выполняет добавление в базу данных
                    header("Location: index6.php"); // переадресовываем человека на этуже страницу после нажатия кнопки отравить
                    exit();
                }
            }

            $query = $db->prepare("SELECT * FROM comments WHERE is_moderate='0' ORDER BY dt DESC"); //выбираем все поля из таблицы данных. сортировка по дате
            $query->execute(); // выполнение запроса
            $comments = $query->fetchAll(); //перегонка после запроса всех данных в двумерный массив
            ?>

            <form method="post">
                Name<br>
                <input type="text" name="name" value="<?php $name; ?>"><br><br>
                Comment<br>
                <textarea name="text" rows="10" cols="45"><?php $text; ?></textarea></br><br><br>
                <input type="submit" value="Send">
                <a class="homme" href="../index.php">HOME</a>

            </form>

            <div class="comments">
                <?php foreach ($comments as $one) : ?>
                    <div class="item">
                        <span><?= $one['dt'] ?></span>
                        <strong><?= $one['name'] ?></strong>
                        <div><?= $one['text'] ?></div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>

        </fieldset>



        </form>
    </div>
</body>

</html>