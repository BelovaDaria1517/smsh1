<?php
// Запрашиваем у пользователя числа
echo "Введите числа через пробел: ";
$input = trim(fgets(STDIN));

// Преобразуем ввод в массив чисел
$numbers = array_map('intval', explode(' ', $input));

// Удаляем дубликаты из массива
$uniqueNumbers = array_unique($numbers);

// Сортируем массив по убыванию
rsort($uniqueNumbers);

// Проверяем, есть ли третье максимальное число
if (count($uniqueNumbers) >= 3) {
    $thirdMax = $uniqueNumbers[2]; // Третье максимальное число
    echo "Третье максимальное число: " . $thirdMax . "\n";
} else {
    echo "В массиве меньше трех уникальных чисел.\n";
}
