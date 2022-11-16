<?php
if (isset($_POST['calculate'])) {
    $num1 = (int) $_POST['num1'];
    $num2 = (int) $_POST['num2'];
    $operator = $_POST['operator'];
    $result = 0;

    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "minus":
            $result = $num1 - $num2;
            break;
        case "times":
            $result = $num1 * $num2;
            break;
        case "divide":
            $result = $num1 / $num2;
            $result = round($result, 2);
            break;
        case "mod":
            $result = $num1 % $num2;
            break;
        case "expo":
            $result = $num1 ** $num2;
            break;
        default:
            $result = 0;
    }
}

?>



<html>

<body>

<form action="" method="POST">

Number 1: <input type="number" name="num1">

<select name="operator">
<option value="add">+</option>
<option value="minus">-</option>
<option value="times">*</option>
<option value="divide">/</option>
<option value="mod">%</option>
<option value="expo">**</option>
</select>

Number 2: <input type="number" name="num2">

<input type="submit" name="calculate" value="Calculate"/>
</form>

<?php
echo "Result is: " . $result;
?>
</body>


</html>
