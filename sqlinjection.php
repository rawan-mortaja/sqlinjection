<?php
$host = "localhost";
$dbname = "Web_security";
$username = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);


if(isset($_POST['email'])){
    $email = $_POST['email'];

    $user = $conn->query("SELECT * FROM users WHERE email = '$email'");

    if( $user-> rowCount()){
        
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>

<body>
    <form action="sqlinjection.php" method="post" autocomplete="off">
        <label for="email">
            Email address
            <input type="text" name="email" id="email">
        </label>
        <input type="submit" value="Search">
    </form>
</body>

</html>