<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h3>Абдуллина Дария ПИ18-1</h3>  
 <h3>Задание 9а </h3> 
 <h3>1 вариант</h3> 
 <p><i>Задание: Разработать программу, которая 
подсчитывает число папок в текущем каталоге и выводит их имена и идентификаторы владельцев
</i></p>
<?php
$dir=getcwd();
echo "Текущая директория: $dir";
echo "<br><br>";
$files = scandir($dir,1);
//for ($i = 1; $i <= len($files); $i++) {
//    echo $i;
//}
$num_dir=0; //количество подпапок
echo "Папки из директории:<br><br>";
foreach ($files as $value) {
    if(is_dir($value)&& ($value != '.') && ($value != '..')) {
        //echo $value;
        global $num_dir;
        $num_dir+=1;
        $ow=fileowner($value);
        echo "<br>ID владельца папки $value:$ow";
        echo "<br>";
    }
}
echo "<br>Количество папок:$num_dir<br>";

//echo "$files";
//echo "Содержимое из директории:<br>";
//print_r($files);
?>
</body>
</html>