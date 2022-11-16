


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table{margin:150px ;
        border: 1px solid black;
    background-color: #eee;}
    
    td{
        padding: 10px;
        border: 0px;
    }
    th{
        border-bottom: 1px solid;
        background-color: #ddd;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <form action="main.php" method="post">
        <table align="center">
            <tr>
                <th>guess the number : </th>
                
         
                <td><input type="number" name="number"></td>
           
                <td colspan="2">
                    <input type="submit"  name="check" value="check">
                </td>
            </tr>
       
        </table>
    </form>
</body>
</html>
<?php 
