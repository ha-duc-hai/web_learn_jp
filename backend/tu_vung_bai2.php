<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include "connect.php";
        echo "<br>";
        // include "get_data.php";
        $sql = "SELECT * FROM bai2";
        $result = $conn->query($sql);
    ?>


    <table border="2px">
			<tr>
				<th>Tiếng nhật</th>
				<th>Dịch nghĩa</th>
			</tr>
	<?php		
        while ($row = $result->fetch_assoc()){
			echo '<tr>
				<td>'.$row["Từ mới"].'</td>
				<td>'.$row["Nghĩa"].'</td>
			</tr>';
            }
		'</table>';
    ?>
</body>
</html>