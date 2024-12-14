<?php
include("db.php");

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$tenphim = "";
$linkphim = "";
$linkanh = "";
$linkanhtest = "./src/image/no.png";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["tenphim"] != "") {
        $tenphim = $_POST['tenphim'];
    }
    if ($_POST["linkphim"] != "") {
        $linkphim = $_POST['linkphim'];
    }
    if ($_POST["linkanh"] != "") {
        $linkanh = $_POST['linkanh'];
    } else {
        $linkanh = $linkanhtest;
    }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO phim (tenphim, linkphim, linkanh)
    VALUES ('$tenphim', '$linkphim', '$linkanh')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
} else {
    header("Location: index.php");
}

$conn->close();
