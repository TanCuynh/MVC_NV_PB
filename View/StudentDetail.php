<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin chi tiết sinh viên</title>
</head>
<body>
    <h2>Chi tiết sinh viên: </h2>
    <?php
    echo "<p>Name: <b>" .$student->name ."</b></p>";
    echo "<p>Age: " .$student->age ."</p>";
    echo "<p>University: " .$student->university ."</p><br>";
    ?>
    <p><a href="javascript:history.back()">Back</a></p>
</body>
</html>