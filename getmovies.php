<?php
include("db.php");
// include("boottrap.php");
$sql = 'SELECT * FROM phim ORDER BY id DESC';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "
            <div class='col'>
                <div class='p-3 position-relative'>
                    <a href={$row['linkphim']}>
                        <img src='{$row['linkanh']}' alt=''>
                    </a>
                    <p class='name'>{$row['tenphim']}</p>
                    <a class='name button-sua-hidden' href=editmovies.php?id={$row['id']}>
                        <button class='btn btn-primary' type='submit'>Sửa</button>
                    </a>
                    <form action='delete.php' method='get' class='name button-xoa-hidden'>
                        <input name='id' value='{$row['id']}' hidden>
                        <button class='btn btn-danger' type='submit'>Xoá</button>
                    </form>
                </div>
            </div>
        ";
    }
} else {
    echo "<p>0 results</p>";
}

$conn->close();
