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
    if(isset($_GET["CountryName"]))
    {
        $strCountryName = $_GET["CountryName"];
        echo"<br>"."strCountryName = ".$strCountryName;
    
        $sql = "SELECT * FROM country where CountryName = '". $strCountryName ."'";
    
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
            <th width="325">รหัสประเทศ</th>
            <td width="240"><?php echo $result["CountryCode"]; ?></td>
        </tr>

        <tr>
            <th width="130">ชื่อประเทศ</th>
            <td><?php echo $result["CountryName"]; ?></td>
        </tr>

    </table>
    <?php
    $conn = null;
    ?>

</body>
</html>