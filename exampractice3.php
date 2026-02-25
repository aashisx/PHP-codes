<?php
// Define an array with 5 numbers
$numbers = [11,4,6,44,79,53,57,69,23,44,84];

$evens = [];
$odds = [];

foreach ($numbers as $n) {
	if ($n % 2 === 0) {
		$evens[] = $n;
	} else {
		$odds[] = $n;
	}
}
?>

	<h2>Array: <?php echo implode(', ', $numbers); ?></h2>

	<p><strong>Even numbers:</strong> <?php echo implode(', ', $evens); ?></p>
	<p><strong>Odd numbers:</strong> <?php echo implode(', ', $odds); ?></p>


