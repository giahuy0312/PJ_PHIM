<?php
include("../db.php");

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$tendanhmuc = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["tendanhmuc"] != "") {
        $tendanhmuc = $_POST['tendanhmuc'];
    }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO category (danhmuc)
    VALUES ('$tendanhmuc')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
        header("Location: addcategories.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
} else {
    header("Location: ../index.php");
}

$conn->close();
