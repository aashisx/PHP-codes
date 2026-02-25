<?php
function factorial($num) {
    $num = (int) $num;
    if ($num < 0) return null;
    if ($num == 0 || $num == 1) return 1;
    return $num * factorial($num - 1);
}


$number = (isset($_GET['num']) && $_GET['num'] !== '') ? intval($_GET['num']) : null;

if ($number === null) {
    echo "Please enter a number to calculate its factorial.";
} elseif ($number < 0) {
    echo "Factorial not defined for negative numbers.";
} else {
    echo "Factorial of {$number} is " . factorial($number);
}
?>

<form method="GET" action="">
    <label>Enter number: <input type="number" name="num" value="<?php echo $number !== null ? htmlspecialchars($number) : ''; ?>" /></label>
    <input type="submit" value="Calculate">
</form>