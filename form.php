
<form action="form_handler.php" method="post" >
    <input name="comment"type="text">
    <input type="submit">
</form>


<?php
require_once 'db_connect.php';
if (!$link) {
    die('<p style="color:red">' . mysqli_connect_errno() . ' - ' . mysqli_connect_error() . '</p>');
}
///mysqli_set_charset($link, "utf8");
echo "<p>Вы подключились к MySQL!  </p>";
$sql = "SELECT * FROM `test`";
// Отправляем запрос;
$res = $link -> query($sql);
function out_bd_table($res) {
    require_once 'db_connect.php';
// Условие делаем для проверки, есть ли вообще что то в этой таблице;
    if ($res -> num_rows > 0) {
// Цикл будет работать пока не пройдёт все строки;
// При каждой новой итерации цикла,
// Он переходит на новое значение;
        while ($row = $res -> fetch_assoc()) {
// Вывод на экран;
            echo "<p class='text-success'>Вы</p> {$row["comment"]}
<hr>";
        }
// Если таблица пустая, будет выведено "Данных нет";
    } else {
        echo "Данных нет";
    }


mysqli_close($link);

// Тут создаём SQL запрос;
}
out_bd_table($res);
?>
