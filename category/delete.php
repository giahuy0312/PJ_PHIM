<?php
include("../db.php");

// sql to delete a record
$id = 0;
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
if (isset($_GET["id"])) {
  $id = $_GET['id'];
} else {
  header("Location: ../index.php");
}
// }

$sql = "DELETE FROM category WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: addcategories.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
