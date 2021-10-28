<?php
    include 'connect.php';

    $sql = "INSERT INTO tu_vung_n5_bai2 (tu_vung, translate)
    VALUES ('betonamu','tiếng việt'),
    ('eigo','tiếng anh')";
    echo "<br>";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully ";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>