<?php
echo "<form action='$_SERVER[PHP_SELF]' method='post'>
<label>Enter rhe value of numerator</label>
<input type=numer name=num><br>
<label>Enter the value of demoninator</label>
<input type=number name=deno><br>
<input type=submit name=result value=result></form>";
if($_SERVER['REQUEST_METHOD']==POST)
{
    $nume = $_POST['num'];
    $deno = $_POST['deno'];
    // echo $nume/$deno;
    class DivisionByNegative extends Exception{
        function errorMessage(){
            return $this->getMessage();
        }
    }
    class DivisionByZeroNumber extends Exception{
        function errorMessage(){

        }
    }
    class DivisionByGreater extends Exception{
        function errorMessage(){

        }
    }
    try{
        if($demo < 0)
        {
            throw new DivisionByNegative("Provide a valid demomination greater than zero");
        }
    }
    catch(DivisionByNegative $en)
    {
        echo $en->getMessage();
    }
}