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
        $result = $stmt->fetchAll();
        print_r($result);

    }

?>
</body>
</html>