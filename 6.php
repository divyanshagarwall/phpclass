<?php
declare (strict_type=1);
function gla_Work(string $var_one,$var_two){
    $value = printf("%x","$var_one");
    echo "<br>";

    if($value<>$var_two and $value == 1)
    {
        $data = str_split("$val_one",1);
        asort($data);
        foreach($data as $new_data){
            echo $new_data;
        }
        echo "<br>";
    }
    else{
        $data = str_split("$val_one",1);
        ksort($data);
    }
    $data = implode("",$data);
    echo count_chars($data,3),"<br>";
    print_r(count_chars($val_one,3));
    echo "<br>";
    return $val_two + $value;
}
var_dump((float)gla_Work("WELcome Phpexam",85));
?>