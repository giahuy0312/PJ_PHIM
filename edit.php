<?php
include("db.php");

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$id = "";
$tenphim = "";
$linkphim = "";
$linkanh = "";
$linkanhtest = "./src/image/no.png";
//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"])) {
        $id = $_POST['id'];
    }
    if (isset($_POST["tenphim"])) {
        $tenphim = $_POST['tenphim'];
    }
    if (isset($_POST["linkphim"])) {
        $linkphim = $_POST['linkphim'];
    }
    if ($_POST["linkanh"] != "") {
        $linkanh = $_POST['linkanh'];
    } {
        $linkanh = $linkanhtest;
    }
    if (basename($_FILES["image"]["name"]) != "") {
        $linkanh = "./src/image/" . basename($_FILES["image"]["name"]);
    }

    // Thư mục đích để lưu ảnh
    $target_dir = "./src/image/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // // Kiểm tra kích thước file (thay đổi theo nhu cầu)
    // if ($_FILES["image"]["size"] > 500000) {
    //     echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }
    // Chỉ cho phép một số định dạng ảnh (thay đổi theo nhu cầu)
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Nếu không có lỗi, tiến hành upload
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // nếu không có lỗi, di chuyển file đến thư mục đích
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    //Code xử lý, update dữ liệu vào table
    $sql = "UPDATE phim
    SET tenphim='$tenphim', linkphim='$linkphim', linkanh='$linkanh'
    WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Sửa dữ liệu thành công";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
