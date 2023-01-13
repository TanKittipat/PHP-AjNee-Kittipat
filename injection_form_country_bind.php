<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Country and Test SQL Injection</title>
</head>
<body>
    <h1>Test SQL Injection</h1>
    <form action="injection_form_country_bind.php" method="GET">
    <input type="text" placeholder="Enter Country Name" name="CountryName">
    <br><br>
    <input type="submit">
    </form>
</body>
</html>

<?php
if(isset($_GET['CountryName'])):
    echo"<br>" . $_GET['CountryName'];
    require 'connect.php';
    $count = 0;
    $sql = "SELECT * FROM country WHERE CountryName = :CountryName";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':CountryName',$_GET['CountryName']);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "<br> *************** <br>";

    while($row = $stmt->fetch()) {
        echo $row['CountryCode'].' '.$row['CountryName']."<br/>";
        $count++;
    }
    //echo "count ... "$count;
    if($count==0)
        echo"<br>No data ... <br>";
        $conn = null;
endif;
?>