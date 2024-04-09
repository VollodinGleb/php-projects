<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumber = isset($_POST['number']) ? intval($_POST['number']) : 0;

        if ($inputNumber >= 0 && is_int($inputNumber)) {
            function factorial($n) {
                if ($n === 0) {
                    return 1;
                } else {
                    return $n * factorial($n - 1);
                }
            }
            $result = factorial($inputNumber);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facrtorial</title>
</head>
<body>
    <h2>Захист 4 5 лаб</h2>

    <form method="post">
        <label for="number">Введіть число:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Обчислити</button>
        <br>
        <label for="result">Результат:</label>
        <textarea id="result" name="result" rows="4" cols="50" readonly><?php echo $result  ; ?></textarea>
    </form>
</body>
</html>