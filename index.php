<?php
    $result = '';
    if(filter_has_var(INPUT_POST, 'operator')){
        // get form data
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        // check if input value is numeric
        if(is_numeric($num1) && is_numeric($num2)){
            // run operation
            switch ($operator) {
                case 'Add':
                    $result = $num1 + $num2;
                    break;
                case 'Subtract':
                    $result = $num1 - $num2;
                    break;
                case 'Multiply':
                    $result = $num1 * $num2;
                    break;
                case 'Divide':
                    $result = $num1 / $num2;
                    break;
            }
        } 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP CALCULATOR</title>
</head>
<body>
    <div class="container">
        <h2>SIMPLE CALCULATOR</h2>
        
        <div class="calculator">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                <div>
                <label for="result">Result:</label>
                    <input id="result" value="<?php echo $result; ?>" readonly >
                </div>
                <br>
                <div>
                <label for="num1">First Number:</label>
                    <input id="num1" type="number" name="num1" value="<?php echo $num1; ?>" required>
                </div>
                <br>
                <div>
                    <label for="num2">Second Number:</label>
                    <input id="num2" type="number" name="num2" value="<?php echo $num2; ?>"required>
                </div>
                <br>
                <div>
                    <input name="operator" type="submit" value="Add">
                    <input name="operator" type="submit" value="Subtract">
                    <input name="operator" type="submit" value="Multiply">
                    <input name="operator" type="submit" value="Divide">
                </div>
            </form>
        </div>

    </div>
</body>
</html>