
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
    <title>Document</title>
</head>
<body>
    <form action="game.php" method="post">
        <table >
            <tr>
                <th>guess the number between 1 to 150</th>
            </tr>
           
            <tr>
                <td colspan="2">
                    <input type="submit"  name="start" value="start">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
