<?php

if (!function_exists('imagetypes'))
die('GD2 library cannot be loaded!');
// Прописываем, что вывод - изображение в формате png
header('Content-type: image/png');
// Создаём основу изображения
$img = imagecreatetruecolor(400, 250);
// Создаём цвет, который будем использовать для отрисовки прямоугольника, в формате RGB
$col = imagecolorallocate($img, 255, 0, 0);
// Рисуем прямоугольник, от точки с координатами (10, 0) до точки с координатами (50, 300)
imagerectangle($img, 10, 1, 150, 200, $col);
$bgcol = imagecolorallocate($img, 0, 0, 255);
imagefilledrectangle($img, 11, 2, 149, 199, $bgcol);
// Генерация результатов отрисовки в формате png
imagepng($img);
// Освобождаем ресурсы
imagedestroy($img);
