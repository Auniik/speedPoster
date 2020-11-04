
<?php

//file_put_contents("test.txt", $_REQUEST, FILE_APPEND);
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "fireltd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<b>Connection failed: </b>" . $conn->connect_error);
}
echo "<b>Connected successfully</b>";

$values =  implode('\',\'', array_values($_POST));

$sql = "INSERT INTO  users (id, record_no, policy_date, policy_no, medical_card_no, first_name, last_name, city, state, phone, martial_status, general_practitioner_code, hospital_claim_days, paid_amount, net_amount )
VALUES (null, '{$values}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
