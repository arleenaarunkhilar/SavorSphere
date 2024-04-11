<?php
$sql = "SELECT * FROM recipes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Title: " . $row["title"] . "<br>";
        echo "Ingredients: " . $row["ingredients"] . "<br>";
        echo "Instructions: " . $row["instructions"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}
?>
