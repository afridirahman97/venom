<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "venom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "\n");
} 
echo "Connected successfully" . "<br>";

$vars = $_POST["querypt1"];
$tables = $_POST["querypt2"];

$query = "select " . $vars . " from " . $tables;

$arr = explode(",",$vars);
$l = count($arr);
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    for($x = 0; $x < $l; $x++) {
        echo "$arr[$x]" . "  ";
    }
    echo "<br>";
    while($row = $result->fetch_assoc()) {
        for($x = 0; $x < $l; $x++) {
            echo $row["$arr[$x]"] . "  ";
        }
        echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

<button onclick="history.go(-1);">Back </button>
<html>
    <head></head>
    <body>
        <form action="query.php" method="post">
            Select <input type="text" name="querypt1"> from <input type="text" name="querypt2">
            <input type="submit">
        </form>
    </body>
</html>