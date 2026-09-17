<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Расписание работы</title>
    <style>
        table { border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #333; padding: 8px 16px; text-align: left; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>
<?php
$dayOfWeek = date('N');

function getSchedule($day) {
    switch ($day) {
        case 1: // Понедельник
        case 3: // Среда
        case 5: // Пятница
            return '8:00 - 12:00';
        default:
            return 'Нерабочий день';
    }
}

function getSchedule2($day) {
    switch ($day) {
        case 2: // Вторник
        case 4: // Четверг
        case 6: // Суббота
            return '12:00 - 16:00';
        default:
            return 'Нерабочий день';
    }
}

$schedule1 = getSchedule($dayOfWeek);
$schedule2 = getSchedule2($dayOfWeek);
$dayNames = [
    1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда',
    4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота', 7 => 'Воскресенье'
];
?>

<p>Сегодня: <?= $dayNames[$dayOfWeek] ?></p>

<table>
    <tr>
        <th>№</th>
        <th>Фамилия Имя</th>
        <th>График работы</th>
    </tr>
    <tr>
        <td>1</td>
        <td>John Styles</td>
        <td><?= $schedule1 ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Jane Doe</td>
        <td><?= $schedule2 ?></td>
    </tr>
</table>
</body>
</html>