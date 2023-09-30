<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	$evn_odd_checker = isset( $_POST['evn_odd_checker'] ) ? ( $_POST['evn_odd_checker'] ) : '';

	if ( ! empty( $evn_odd_checker ) ) {
		if ( $evn_odd_checker % 2 == 0 ) {
			echo "Even";
		} else {
			echo "Odd";
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
        <input type="number" class="evn_odd_checker" name="evn_odd_checker">
        <button class="btn" type="submit" name="submit">Result</button>
    </form>
</seation>

</body>
</html>

