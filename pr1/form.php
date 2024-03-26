<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = '';

        for ($i = 1; $i <= 6; $i++) {
            $checkboxName = 'check' . $i;
            $dropdownName = 'dropdown' . $i;

            if (isset($_POST[$checkboxName])) {
                // $selectedOption = $_POST[$dropdownName];
                $data .= htmlspecialchars($_POST[$dropdownName]) . "\n";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Випадаючі списки та чекбокси</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }
        
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        textarea {
            width: 100%;
            height: 100px;
            resize: none;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <form method="POST">
        <label>
            <input type="checkbox" name="check1">
            First Name
            <select name="dropdown1">
                <option value="Nick">Nick</option>
                <option value="Jony">Jony</option>
                <option value="Stive">Stive</option>
            </select>
        </label>

        <label>
            <input type="checkbox" name="check2">
            Last Name
            <select name="dropdown2">
                <option value="Vollodin">Vollodin</option>
                <option value="Sheron">Sheron</option>
                <option value="Lord">Lord</option>
            </select>
        </label>

        <label>
            <input type="checkbox" name="check3">
            Age
            <select name="dropdown3">
                <option value="16">16</option>
                <option value="18">18</option>
                <option value="25">25</option>
                <option value="23">23</option>
                <option value="44">44</option>
            </select>
        </label>

        <label>
            <input type="checkbox" name="check4">
            Sex
            <select name="dropdown4">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </label>

        <label>
            <input type="checkbox" name="check5">
            IP
            <select name="dropdown5">
                <option value="203.129.56.88">203.129.56.88</option>
                <option value="172.31.240.17">172.31.240.17</option>
                <option value="94.207.183.62">94.207.183.62</option>
            </select>
        </label>

        <label>
            <input type="checkbox" name="check6">
            Status
            <select name="dropdown6">
                <option value="Poor">Poor</option>
                <option value="Midle">Midle</option>
                <option value="Rich">Rich</option>
            </select>
        </label>

        <input type="submit" value="Enter"  method="$_POST">

        <label>
            Dates:
            <textarea name="data" readonly><?php echo $data; ?></textarea>
        </label>
    </form>
</body>
</html>