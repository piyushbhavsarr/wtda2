<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    echo "Number you have entered is: $num <br>";

    if ($num!=0)
    {
        $fibonacci = [0, 1];
        for ($i = 2; $i < $num; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        echo "Fibonacci Series: ";
        foreach ($fibonacci as $value) {
            echo $value . " ";
        }
    }
    else{
        echo "Fibonacci Series: null ";
    }


    echo "<br>";
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }
    echo "Sum of digits: " . $sum;
    
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <br>
    Number: <input type="number" name="num">
    <input type="submit" value="Submit">
</form>