<?php
include("db.php");
// include("boottrap.php");
$sql = 'SELECT * FROM category';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "
            <input type='checkbox' class='btn-check' id='{$row['id']}' autocomplete='off' name='danhmuc[]' value='{$row['id']}'>
            <label class='btn btn-outline-primary' for='{$row['id']}'>{$row['danhmuc']}</label>
        ";
    }
} else {
    echo "<p>0 results</p>";
}

$conn->close();
