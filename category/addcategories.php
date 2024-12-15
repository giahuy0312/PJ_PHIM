<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add category</title>
    <?php include('../boottrap.php') ?>
</head>
<body>
    <div class="container">
        <form action="./insert.php" method="post">
            <div class="row">
                <label for="basic-url" class="form-label">Tên danh mục</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tên danh mục</span>
                    <input type="text" class="form-control" placeholder="Danh mục" aria-label="Username" aria-describedby="basic-addon1" name="tendanhmuc">
                </div>

            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
            <a href="../admin.php" class="btn btn-primary">Back</a>
        </form>

        <?php include('getallcategories.php') ?>
    </div>
</body>
</html>