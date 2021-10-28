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
        include "../backend/connect.php";
        echo "<br>";
        // include "get_data.php";
        $sql = "SELECT * FROM bai1";
        $result = $conn->query($sql);
    ?>

    <div>
        <table>
            <tr>
              <th>STT</th>
              <th>Từ vựng</th>
              <th>Ý nghĩa</th>
            </tr>
    <?php		
          while ($row = $result->fetch_assoc()){
          echo '<tr>
            <td>'.$row["STT"].'</td>
            <td>'.$row["Từ mới"].'</td>
            <td>'.$row["Nghĩa"].'</td>
          </tr>';}
        '</table>';
    ?>
    </div>
</body>
</html>