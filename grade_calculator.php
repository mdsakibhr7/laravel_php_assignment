<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	$bangla  = isset( $_POST['bangla'] ) ? ( $_POST['bangla'] ) : '';
	$english = isset( $_POST['english'] ) ? ( $_POST['english'] ) : '';
	$math    = isset( $_POST['math'] ) ? ( $_POST['math'] ) : '';

	if ( ! empty( $bangla ) && ! empty( $english ) && ! empty( $math ) ) {
		$total      = $bangla + $english + $math;
		$average    = $total / 5.0;
		$percentage = ( $total / 500.0 ) * 100;

		if ( $average >= 90 ) {
			echo "Your grade is A+ ";
		} elseif ( $average >= 80 ) {
			echo "Your grade is A ";
		} elseif ( $average >= 70 ) {
			echo "Your grade is B ";
		} elseif ( $average > 50 ) {
			echo "You are fail";
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
        <input type="text" class="bangla" name="bangla">
        <input type="text" class="english" name="english">
        <input type="text" class="math" name="math">

        <button class="btn" type="submit" name="submit">Result</button>
    </form>
</seation>

</body>
</html>
