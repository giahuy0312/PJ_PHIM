<?php
include("db.php");
include("boottrap.php");

$sql = 'SELECT * FROM category';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table class='table'>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Danh mục</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>";      
    while ($row = $result->fetch_assoc()) {
        echo "
                <tr>
                    <th scope='row'>{$row['id']}</th>
                    <td>{$row['danhmuc']}</td>
                    <td>
                        Sua, Xoa
                    </td>
                </tr>";
    }
            echo "
        </tbody>
    </table>";
} else {
    echo "<p>0 results</p>";
}

$conn->close();

