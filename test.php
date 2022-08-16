

<?php
include 'connection.php';

$username='fgfg';

$email = 'dfdf';

//Query statement with placeholder
$query = "SELECT *
          FROM user
          WHERE email = '$email'";

// Execute it
try {
    $stmt = $link->prepare($query);
    //for you no need to pass parameter inside execute statement
    $result = $stmt->execute();
    //After executing the query store the result like below
    $stmt->store_result();
} catch(PDOException $ex) {
    echo $ex->getMessage();
}

//Now Check for the row count
//you have to check numrows >0 like this
if($stmt->num_rows==0) {
   echo "<script>console.log(0)</script>";
   die;
} else {
}
?>

