<?php
$handle = fopen("sectionk.txt","w");
fwrite($handle,"Welcome \n Class");
fclose($handle);
$handle = fopen("sectionk.txt","r");
//$data = fread($handle,filesize("sectionk,txt"));
// echo str_replace("\n","<br>",$data);
// echo fgets($handle);
while(!feof($handle))
{
    $data = fgetc($handle);
    if($data == "\n")
    {
        $data = "<br>";
    }
    echo $data;

    
}
copy ("sectionk.txt","sectionk2.txt");
if(file_exists("sectionk2.txt") or die("file not exists"))
{
    echo "YES";
}
// unlink("sectionk2.txt");