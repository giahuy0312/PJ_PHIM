<?php
include("../db.php");

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$id = "";
$danhmuc = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"])) {
        $id = $_POST['id'];
    }
    if (isset($_POST["tendanhmuc"])) {
        $danhmuc = $_POST['tendanhmuc'];
    }

    //Code xử lý, update dữ liệu vào table
    $sql = "UPDATE category
    SET danhmuc='$danhmuc'
    WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Sửa dữ liệu thành công";
        header("Location: addcategories.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
