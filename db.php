<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "form";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo("Connection failed")."<br>";
} 
// else {
//     echo("Connected")."<br>";
// }

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phonenumber = mysqli_real_escape_string($conn, $_POST["phonenumber"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);

    // Prepare and execute the SQL query
    $sql = "INSERT INTO form_details (`fname`, `email`, `phone_number`, `address`) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $fname, $email, $phonenumber, $address);

        if (mysqli_stmt_execute($stmt)) {
            echo "Data inserted successfully!"."<br>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing the statement: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
