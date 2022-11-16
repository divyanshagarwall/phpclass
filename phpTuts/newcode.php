write a php script to print a chessboard using userdefined function 2 integer values row and col

<!DOCTYPE html>
<html>

<body>

	<table width="400px" border="1px" cellspacing="0px">
		<?php
        function chess_board($num1,$num2){
		
		$value = 0;
        

		for($col = 0; $col < $num1; $col++) {
			echo "<tr>";
			$value = $col;

			for($row = 0; $row < $num2; $row++) {
				if($value%2 == 0) {
					echo
"<td height=40px width=20px bgcolor=black></td>";
					$value++;
				}
				else {
					echo
"<td height=40px width=20px bgcolor=white></td>";
					$value++;
				}
			}
			echo "</tr>";
		
        }
    

    }
    chess_board(8,7)
		?>
	</table>

</body>

</html>

