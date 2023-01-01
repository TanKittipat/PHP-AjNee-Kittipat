<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select-2</title>
</head>
<body>
    <?php
    try {
        require 'connect.php';
        $sql = "SELECT * FROM country";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //แบบที่ 1
        //while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //echo '<br>' .
                //' รหัสประเทศของลูกค้า : ' .
                //$result['CountryCode'] .
                //' ชื่อประเทศ : ' .
                //$result['CountryName'];
        //}
        
        //แบบที่ 2
        while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
            echo '<br>' .
                'รหัสประเทศของลูกค้า : ' .
                $result[0] .
                ' ชื่อประเทศ : ' .
                $result[1] ;
        }

    } catch (PDOException $e) {
        echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
    }

    $conn = null;
    ?>

</body>
</html>