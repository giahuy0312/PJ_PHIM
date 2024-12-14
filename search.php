<?php
//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$name = "";

//Lấy giá trị GET từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["name"])) {
        $name = $_GET['name'];
    }

    $url = "https://vphims.net/tim-kiem/{$name}.html";
    header('Location: '.$url);
    
} else {
    header("Location: index.php");
}
