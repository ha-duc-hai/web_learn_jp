<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="viewBai1.css">
</head>
<body>
  <?php 
        include "connect_kanji_n5.php";
        $lesson = $_GET['lesson'];
        switch ($lesson){
            case 1:
                $sql = "SELECT * FROM bai1";
                break;
            case 2:
                $sql = "SELECT * FROM bai2";
                break;
            case 3:
                $sql = "SELECT * FROM bai3";
                break;
        }
        
        $result = $conn->query($sql);

        echo '<h1>Kanji bài '.$lesson.'</h1><br>'
    ?>
<table border="1px">
			<tr>
                <th>STT</th>
				<th>Chữ</th>
                <th>Âm hán</th>
				<th>Nghĩa</th>
                <th>Âm Kunyomi</th>
                <th>Âm Onyomi</th>
			</tr>
        
	<?php		
        while ($row = $result->fetch_assoc()){
			echo '<tr>
                <td>'.$row["STT"].'</td>
				<td>'.$row["Từ mới"].'</td>
                <td>'.$row["Âm hán"].'</td>
                <td>'.$row["Nghĩa"].'</td>
                <td>'.$row["Kunyomi"].'</td>
				<td>'.$row["Onyomi"].'</td>
			</tr>';
            }
		'</table>';
    ?>
    </div>

    <?php 
        echo '<a href="test_kanji.php?lesson='.$lesson.'">Test Kanji</a>';
    ?>
</body>
</html>