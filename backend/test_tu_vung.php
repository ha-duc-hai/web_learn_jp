<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test từ vựng</title>
</head>
<body>

    <?php
        include "connect_test_tu_vung_n5.php";
        $lesson = $_GET['lesson'];
        switch ($lesson){
            case 1:
                $sql = "SELECT * FROM test_bai1 ORDER BY RAND() LIMIT 10";
                break;
            case 2:
                $sql = "SELECT * FROM bai2";
                break;
            case 3:
                $sql = "SELECT * FROM bai3";
                break;
        }
        $result = $conn->query($sql);
        
    ?>
    <div class="question">
        <?php 
            function check($str1, $str2) {
                if ($str1 == $str2)
                    return "True";
                else return "False";
            }
            echo '<form method="POST" action="check_test.php">';
            $i = 1;
            while ($row = $result->fetch_assoc()){
                echo 
                '<fieldset id = "group'.$i.'">
                <p>question '.$i.': '.$row['question'].'<br>
                <input type="radio"  value="'.check('A', $row['answer']).'" name = "'.$i.'">'.$row["selectA"].'<br> 
                <input type="radio" value="'.check('B', $row['answer']).'" name = "'.$i.'">'.$row["selectB"].'<br>
                <input type="radio" value="'.check('C', $row['answer']).'" name = "'.$i.'">'.$row["selectC"].'<br>
                <input type="radio" value="'.check('D', $row['answer']).'" name = "'.$i.'">'.$row["selectD"].'<br>
                </fieldset>';
                $i++;
            }
            ?>
            <input type="submit" value="Result" name="Result"> 
        </form>
    </div>
</body>
</html>
