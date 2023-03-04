<?php
$host = "localhost";
$dbname = "web_security";
$username = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);

// SQL INJECTION 

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $user = $conn->query("SELECT * FROM users WHERE email = '$email'");

    die($email);
    if ($user->rowCount()) {
        die('LOGIN!');
    }
}


// SOLVE SQL INJECTION


// if (isset($_POST['email'])) {
//     $email = $_POST['email'];

//     $user = $conn->prepare("SELECT * FROM users WHERE email = :email ");
//     $user->execute([
//         'email' => $email,
//     ]);

//     if ($user->rowCount()) {
//         die('LOGIN!');
//     }
// }

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
        </label><br><br>
        <label for="password">
            Password
            <input type="password" name="password" id="password">
        </label><br><br>
        <input type="submit" value="LogIn">
    </form>
</body>

</html>