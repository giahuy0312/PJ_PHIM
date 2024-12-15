<?php
include("../db.php");

// sql to edit a record
$id = 0;

if (isset($_GET["id"])) {
    $id = $_GET['id'];
} else {
    header("Location: ../index.php");
}
$sql = "SELECT * FROM category WHERE id=$id";
$result = $conn->query($sql);

include('../boottrap.php');

$num = "";

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $num = $row;
    }
}
?>
<div class="container">
    <form action="./edit.php" method="POST" enctype="multipart/form-data">

        <input name="id" value="<?php echo $id ?>" hidden>

        <div class="row">

            <label for="basic-url" class="form-label">Tên danh mục</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tên danh mục</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="tendanhmuc" value="<?php echo $num['danhmuc'] ?>">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>