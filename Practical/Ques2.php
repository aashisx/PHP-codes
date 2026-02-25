<?php
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = isset($_POST['number']) ? intval($_POST['number']) : null;
    
 $result = factorial($number);

}
?>
<form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" min="0" required>
    <input type="submit" value="Calculate Factorial">
</form>

<?php if ($result !== null): ?>
    <p>Factorial of <?php echo htmlspecialchars($_POST['number']); ?> is :  <?php echo htmlspecialchars($result); ?></p> 
<?php endif; ?>