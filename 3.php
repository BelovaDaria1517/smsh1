<?php
// Массив с информацией о студентах
$students = [
    ['name' => 'Маша', 'age' => 22, 'grades' => [5, 4, 5]],
    ['name' => 'Витя', 'age' => 23, 'grades' => [3, 4, 2]],
    ['name' => 'Олег', 'age' => 21, 'grades' => [4, 5, 5]],
];

// Перебираем каждого студента
foreach ($students as $student) {
    // Вычисляем среднюю оценку
    $averageGrade = array_sum($student['grades']) / count($student['grades']);
    
    // Проверяем, что средняя оценка >= 4
    if ($averageGrade >= 4) {
    
        echo $student['name'] . ": " . round($averageGrade, 2) . " ";
    }
}
echo "\n"; 
