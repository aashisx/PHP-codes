<?php
// Multidimensional associative array example
$people = [
	'person1' => [
		'name' => 'Alice',
		'age'  => 28,
		'city' => 'New York'
	],
	'person2' => [
		'name' => 'Bob',
		'age'  => 34,
		'city' => 'London'
	],
	'person3' => [
		'name' => 'Carol',
		'age'  => 22,
		'city' => 'Sydney'
	]
];
?>

	<h2>People (multidimensional associative array)</h2>

	<div>
		<?php foreach ($people as $key => $info): ?>
				<h3><?php echo htmlspecialchars($key); ?></h3>
				<dl>
					<?php foreach ($info as $prop => $value): ?>
						<dt><?php echo htmlspecialchars($prop); ?></dt>
						<dd><?php echo htmlspecialchars((string)$value); ?></dd>
					<?php endforeach; ?>
				</dl>
		<?php endforeach; ?>
	</div>
