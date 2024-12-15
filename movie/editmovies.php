<?php
include("../db.php");

// sql to edit a record
$id = 0;

if (isset($_GET["id"])) {
    $id = $_GET['id'];
} else {
    header("Location: ../index.php");
}
$sql = "SELECT * FROM phim WHERE id=$id";
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
    <form action="edit.php" method="POST" enctype="multipart/form-data">

        <input name="id" value="<?php echo $id ?>" hidden>

        <div class="row">

            <label for="basic-url" class="form-label">Tên phim</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tên phim</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="tenphim" value="<?php echo $num['tenphim'] ?>">
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label">URL phim</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon3">https://</span>
                    <input type="text" class="form-control url-phim" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="linkphim" value="<?php echo $num['linkphim'] ?>">
                </div>
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label">URL ảnh</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon3">https://</span>
                    <input type="text" class="form-control url-anh" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="linkanh" value="<?php echo $num['linkanh'] ?>">
                </div>
            </div>

            <label for="basic-url" class="form-label">URL file ảnh</label>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                <input type="file" class="form-control" id="inputGroupFile01" name="image">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>