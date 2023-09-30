<?php
if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {

	$tempConv = isset( $_POST['tempConv'] ) ? ( $_POST['tempConv'] ) : '';
	$tempType = isset( $_POST['tempType'] ) ? ( $_POST['tempType'] ) : '';


	if ( ! empty( $tempConv ) && ! empty( $tempType ) ) {
		if ( $tempType === 'celsius' ) {
			$celsiusToFahrenheit = (float) ( ( $tempConv * 9 / 5 ) + 32 );
			printf( 'Temperature in Fahrenheit is: ' . $celsiusToFahrenheit . "<br>" );
		} elseif ( $tempType === 'fahrenhit' ) {
			$fahrenheitToCelsius = ( $tempConv - 32 ) * 5 / 9;
			printf( 'Temperature in Celsius is: ' . $fahrenheitToCelsius );
		}

	}

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
