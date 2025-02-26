<?php
// Запрашиваем у пользователя оценки
echo "Введите оценки студентов через пробел: ";
$input = trim(fgets(STDIN));

// Преобразуем ввод в массив чисел
$grades = array_map('intval', explode(' ', $input));

// Инициализация переменных
$sum = 0;
$count = count($grades);

// Суммируем все оценки
foreach ($grades as $grade) {
    $sum += $grade;
}

// Вычисляем среднюю оценку
$average = round($sum / $count, 2);

// Результат
echo "Средняя оценка всех студентов: " . $average . "\n";
