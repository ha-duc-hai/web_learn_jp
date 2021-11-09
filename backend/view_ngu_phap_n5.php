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
        include "connect_ngu_phap_n5.php";
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

        echo '<h1>Ngữ pháp bài '.$lesson.'</h1><br>'
    ?>
<table border="1px">
			<tr>
                <th>STT</th>
				<th>Mẫu câu</th>
				<th>Dịch nghĩa</th>
                <th>Ví dụ</th>
			</tr>
        
	<?php		
        while ($row = $result->fetch_assoc()){
			echo '<tr>
                <td> '.$row["STT"].'</td>
				<td>'.$row["Mẫu câu"].'</td>
				<td>'.$row["Nghĩa"].'</td>
                <td>'.$row["VD"].'</td>
			</tr>';
            }
		'</table>';
    ?>
    </div>

    <?php 
        echo '<a href="test_ngu_phap.php?lesson='.$lesson.'">Test ngữ pháp</a>';
    ?>
</body>
</html>