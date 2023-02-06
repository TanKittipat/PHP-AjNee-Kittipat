<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
</head>
<body>
    <h1>Add Customer</h1>
    <form action="addcustomer.php" method="POST">
        <input type="text" placeholder="Enter Customer ID" name="ID">
        <br> <br>
        <input type="text" placeholder="Enter Customer Name" name="Name">
        <br> <br>
        <input type="date" placeholder="Enter Customer Birthdate" name="Birthdate">
        <br> <br>
        <input type="text" placeholder="Enter Customer Email" name="Email">
        <br> <br>
        <input type="text" placeholder="Enter Customer Country Code" name="CountryCode">
        <br> <br>
        <input type="text" placeholder="Enter Customer Outstanding Debt" name="OutstandingDebt">
        <br> <br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    if ( !empty( $_POST['ID'])&& !empty( $_POST['Name'])&& !empty( $_POST['Birthdate'])&& !empty( $_POST['Email'])&& !empty( $_POST['CountryCode'])&& !empty( $_POST['OutstandingDebt'])):
        require 'connect.php';
        $sql_insert = "insert into customer values (:ID,:Name,:Birthdate,:Email,:CountryCode,:OutstandingDebt)";

        $stmt = $conn->prepare($sql_insert);
        $stmt->bindParam(':ID',$_POST['ID']);
        $stmt->bindParam(':Name',$_POST['Name']);
        $stmt->bindParam(':Birthdate',$_POST['Birthdate']);
        $stmt->bindParam(':Email',$_POST['Email']);
        $stmt->bindParam(':CountryCode',$_POST['CountryCode']);
        $stmt->bindParam(':OutstandingDebt',$_POST['OutstandingDebt']);

        if($stmt->execute()):
            $message='Successful add new customer';
            header("Location:/business/selectcustomer1.php");
        else:
            $message='Fail to add new customer';
        endif;
        echo '<br>';
        echo $message;
        $conn=null;
    endif;

?>