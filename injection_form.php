<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Customer and Test SQL Injection</title>
</head>
<body>
    <h1>Test SQL Injection</h1>
    <form action="injection.php" method="GET">
    <input type="text" placeholder="Enter Customer ID" name="CustomerID">
    <br><br>
    <input type="submit">
    </form>
</body>
</html>