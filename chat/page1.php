<html>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chatapp";
    // here I have created another connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);
    // to ensure it has worked, I put in an error message for when connections are not successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT msg FROM chat";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //this outputs the data from each row as it is inserted
        while ($row = $result->fetch_assoc()) {
            //echo $_SESSION['username'];
            echo "" . $row["msg"] . "<br><br>";
        }
    } else {
        echo "no messages have been exchanged yet";
    }
    $conn->close();
    ?>
</body>

</html>