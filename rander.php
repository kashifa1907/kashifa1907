
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "payment";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT payment id, name,country code,phone number,plan name,amount,tax,total amount,order id,reference id,payment method FROM form_details";
// $result = $conn->query($sql);

// $data = array();

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $data[] = $row;
//     }
// }

// $conn->close();

// header("Content-Type: application/json");
// echo json_encode($data);
// 
<?php
// Read data from the JSON file
$jsonFilePath = 'payment_data.json';
$jsonData = file_get_contents($jsonFilePath);
$dataArray = json_decode($jsonData, true);

// Output data as JSON
header("Content-Type: application/json");
echo json_encode($dataArray);
?>
