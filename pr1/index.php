<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First</title>
</head>
<body>
    <?php
        // Task 1
        $var = "hello";
        
        echo $var[0];
        echo $var[1];
        echo $var[-1];

        echo "<br>";
        // Task 2
        $secondsInMinute = 60;
        $minutesInHour = 60;

        // Розрахунок кількості секунд у годині
        $secondsInHour = $secondsInMinute * $minutesInHour;

        echo "Кількість секунд у годині: " . $secondsInHour;
    
        echo "<br>";
        
        // Task 3
        $var = 1;
        $var -= 14;
        $var *= 5;
        $var /= 7;
        $var++;
        $var--;
        $var += 12;

        echo $var;

        echo "<br>";
        
        // Task 4
        $a = 3;
        echo $a;

        echo "<br>";

        // Task 5
        $a = 10;
        $b = 2;
        
        // Сума
        $sum = $a + $b;
        echo "Сума: " . $sum . "<br>";

        // Різниця
        $diff = $a - $b;
        echo "Різниця: " . $diff . "<br>";

        // Добуток
        $product = $a * $b;
        echo "Добуток: " . $product . "<br>";

        // Частка
        $quotient = $a / $b;
        echo "Частка: " . $quotient . "<br>";

        // Task 6
        $c = 15;
        $d = 2;

        $result = $c + $d;
        echo "Результат: " . $result . "<br>";

        // Task 7
        $a = 10;
        $b = 2;
        $c = 5;

        $sum = $a + $b + $c;

        echo "Сума: " . $sum . "<br>";
        
        // Task 8
        $a = 17;
        $b = 10;
        $d = 7;

        $c = $a - $b;

        $result = $c + $d;

        echo "Результат: " . $result . "<br>";

        // Task 9
        $text = 'Привіт, світ!';
        echo $text . "<br>";
        
        // Task 10 
        $text1 = 'Привіт,';
        $text2 = 'світ!';
        echo $text1 . ' ' . $text2 . "<br>";

        // Task 11
        $name = 'Ваше_Ім\'я';
        echo 'Привіт, ' . $name . '!' . '<br>';

        // Task 12
        $age = 'Ваш_Вік';
        echo 'Мені ' . $age . ' років!' . '<br>';

        // Task 13
        $text = 'abcde';
        echo $text[0]; // символ 'a'
        echo $text[2]; // символ 'c'
        echo $text[4]; // символ 'e'

        // Task 14
        $str = 'abcde';
        $str[0] = '!';
        echo $str . "<br>";

        // Task 15
        $num = '12345';
        $sum = array_sum(str_split($num));
        echo "Сума цифр числа $num: $sum<br>";

        // Task 16
        $secondsInHour = 60 * 60;
        $secondsInDay = $secondsInHour * 24;
        $secondsInMonth = $secondsInDay * 30;
        echo "Секунд у годині: $secondsInHour<br>";
        echo "Секунд у добі: $secondsInDay<br>";
        echo "Секунд у місяці: $secondsInMonth<br>";

        // Task 17
        $hour = date('H');
        $minute = date('i');
        $second = date('s');
        echo "Поточний час: $hour:$minute:$second<br>";

        // Task 18
        $number = 5;
        $square = $number * $number;
        echo "Квадрат числа $number: $square<br>";

        // Task 19
        $var = 47;
        $var += 7;
        $var -= 18;
        $var *= 10;
        $var /= 20;
        echo $var . '<br>';

        // Task 20 
        $text = 'Я';
        $text .= ' хочу ';
        $text .= ' знати ';
        $text .= ' PHP! ';
        echo $text . "<br>";

        // Task 21
        $var = 10;
        $var++;
        $var++;
        $var--;
        echo $var . "<br>";

        // Task 22
        $var = 10;
        $var += 7;
        $var++;
        $var--;
        $var += 12;
        $var *= 7;
        $var -= 15;
        echo $var . "<br>";
    ?>
</body>
</html>