<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select-1</title>
</head>
<body>
    <?php
        require "connect.php";
        // ลองให้โชว์ข้อมูล customer
        $sql = "SELECT * FROM customer,country WHERE customer.CountryCode = country.CountryCode" ;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo '<br>';
            echo '<br>';
        $result = $stmt->fetchAll();
        //print_r($result);

        foreach ($result as $r) {
            print $r['CustomerID'] .'--'. $r['Name'] .'--'. $r['OutstandingDebt'] .'--'. $r['CountryName'] .'<br>';
        }
    ?>
</body>
</html>