<?php
echo "<form action=$_SERVER[PHP_SELF] method='post'>
<label>Enter numerator</label><input type='number' name='num'><br>
<label>Enter denominator</label><input type='number' name='deno'><br>
<input type='submit' name='result'>";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $num = $_POST['num'];
    $deno = $_POST['deno'];
    class NumberIsGreater extends Exception
    {
        function errorMessage()
        {
            return $this->getMessage();
        }
    }
    class NumberIsNegative extends Exception
    {
        function errorMessage()
        {
            return $this->getMessage();
        }
    }
    class NumberIsZero extends Exception
    {
        function errorMessage()
        {
            return $this->getMessage();
        }
    }
    try {
        if ($deno == 0) {
            throw new NumberIsZero("Please provide a valid denominator");
        }
        if ($deno > $num) {
            throw new NumberIsGreater("denominator is greater");
        }
        if ($deno < 0) {
            throw new NumberIsGreater("denominator is negative");
        }
    } catch (NumberIsZero $e) {
        echo $e->getMessage();
    } catch (NumberIsGreater $ee) {
        echo $ee->getMessage();
    } catch (NumberIsNegative $eee) {
        echo $eee->getMessage();
    }
}
?>