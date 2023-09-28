<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tempConv = isset($_POST['tempConv']) ? ($_POST['tempConv']) : '';

    // PHP Code to Convert Celsius to Fahrenheit
    $tempConv = isset($_POST['tempConv']) ? ($_POST['tempConv']) : '';

    $celsius = $tempConv;

    $fahrenhit = (float)(($celsius * 9 / 5) + 32);
    
    echo $fahrenhit;

}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<seation class="container">
    <form action="" method="post">
        <input type="text" class="tempConv" name="tempConv">

        <select name="tempType" id="temperature type">
            <option value="celsius">Celsius</option>
            <option value="fahrenhit">Fahrenhit</option>
        </select>
        <button class="btn" type="submit" name="submit">Result</button>
    </form>
</seation>

</body>
</html>
