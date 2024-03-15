<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second</title>
</head>
<body>
    <?php
        // Task 1
        $arr = ['a', 'b', 'c'];
        var_dump($arr);
        echo "<br>";

        // Task 2
        $arr = ['a', 'b', 'c'];
        echo $arr[0] . "<br>";
        echo $arr[1] . "<br>";
        echo $arr[2] . "<br>";

        // Task 3
        $arr = ['a', 'b', 'c', 'd'];
        echo $arr[0] . ' + ' . $arr[1] . ', ' . $arr[2] . ' + ' . $arr[3] . "<br>";

        // Task 4
        $arr = [2, 5, 3, 9];
        $result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
        echo $result . "<br>";

        // Task 5
        $arr = [];
        $arr[] = 1;
        $arr[] = 2;
        $arr[] = 3;
        $arr[] = 4;
        $arr[] = 5;

        foreach ($arr as $value) {
            echo $value . "<br>";
        }

        // Task 6
        $arr = [
            'Cms' => ['joomla', 'wordpress', 'drupal'],
            'Colors' => ['blue' => 'блакитний', 'red' => 'червоний', 'green' => 'зелений']
        ];
        
        echo $arr['Cms'][2] . "<br>";       
        echo $arr['Cms'][0] . "<br>";       
        echo $arr['Colors']['green'] . "<br>";
        echo $arr['Colors']['red'] . "<br>";  
        // Task 7
        $weekDays = [
            'ua' => ['понеділок', 'вівторок', 'середа', 'четвер', 'п"ятниця', 'субота', 'неділя'],
            'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']];
        
        // Виведення понеділка по-українськи і середи по-англійськи
        echo $weekDays['ua'][0] . "<br>";
        echo $weekDays['en'][2] . "<br>";
        
        // Визначення дня тижня за заданими значеннями
        $lang = 'ua';
        $day = 3;
        
        echo $weekDays[$lang][$day - 1] . "<br>";   
    ?>
</body>
</html>