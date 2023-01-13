<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search_Result</title>
</head>
<body>
    <?php
    require "connect.php";
    if(isset($_GET["CustomerID"]))
    {
        $strCustomerID = $_GET["CustomerID"];
        echo"<br>"."strCustomerID = ".$strCustomerID;
    
        $sql = "SELECT * FROM customer where CustomerID = '". $strCustomerID ."'";
    
        echo "<br>" . " sql =
        " .$sql . "<br>";
    
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // print_r($result);

    }

    ?>
    
    <table width="300" border="1">
        <tr>
            <th width="325">รหัสลูกค้าสมาชิก</th>
            <td width="240"><?php echo $result["CustomerID"]; ?></td>
        </tr>

        <tr>
            <th width="130">ชื่อ</th>
            <td><?php echo $result["Name"]; ?></td>
        </tr>


        <tr>
            <th width="130">Birthdate</th>
            <td><?php echo $result["Birthdate"]; ?></td>
        </tr>
        <tr>
            <th width="130">Email</th>
            <td><?php echo $result["Email"]; ?></td>
        </tr>
        <tr>
            <th width="130">CountryCode</th>
            <td><?php echo $result["CountryCode"]; ?></td>
        </tr>
        <tr>
            <th width="130">OutstandingDebt</th>
            <td><?php echo $result["OutstandingDebt"]; ?></td>
        </tr>


    </table>
    <?php
    $conn = null;
    ?>

</body>
</html>