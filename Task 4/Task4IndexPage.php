<?php
$per = htmlspecialchars($_GET['name']);
$count = isset($per);
if ($count == 1){
    echo "Здравствуйте " . $per;
}
?>

    <!-- дописать не хватающих атрибутов -->
    <form action="indexPage.php" method="get">
        Имя: <input type="text" name="name">
        <button type="submit">отправить</button>
    </form><br><br><br>

<?php
$per1 = htmlspecialchars($_POST['name']);
$per2 = (int)$_POST['age'];

$count1 = isset($per);
$count2 = isset($per);
if ($count1 == 1 || $count2 == 1) {
    echo "Здравствуйте " . $per1 . "<br>" . "Вашь возрост " . $per2;
}
?>

    <!-- дописать не хватающих атрибутов -->
    <form method="post" action="indexPage.php">
        Имя: <input type="text" name="name">
        Возраст: <input type="text" name="age">
        <button type="submit">отправить</button>
    </form><br>


<?php

echo "Первый " . htmlspecialchars($_POST['student1']) . "<br>";
echo "Второй " . htmlspecialchars($_POST['student2']) . "<br>";
echo "Третий " . htmlspecialchars($_POST['student3']) . "<br>";
echo "Четвёртый " . htmlspecialchars($_POST['student4']) . "<br>";
?>

<!-- Задайте правильное название в атрибуте name, чтобы данные из этой формы отправились как массив -->
<br><br><br><form method="post" action="indexPage.php">
    <div>
        Первый ученик:<br> ФИО: <input type="text" name="student1">
    </div>
    <hr>
    <div>
        Второй ученик:<br> ФИО: <input type="text" name="student2">
    </div>
    <hr>
    <div>
        Третий ученик:<br> ФИО: <input type="text" name="student3">
    </div>
    <hr>
    <div>
        Четвертый ученик:<br> ФИО: <input type="text" name="student4">
    </div>
    <hr>

    <button type="submit">отправить</button>
</form>

