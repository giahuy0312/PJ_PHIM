<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?php include("boottrap.php") ?>
</head>

<body>
    <div class="container">
        <form action="./movie/insert.php" method="post">
            <div class="row">
                <label for="basic-url" class="form-label">Tên phim</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tên phim</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="tenphim">
                </div>

                <div class="d-block mb-2">
                    <label for="basic-url" class="form-label">Danh mục</label>
                    <a href="./category/addcategories.php" class="btn btn-primary">Thêm danh mục</a>
                </div>
                <div class="input-group mb-3">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <?php include('./category/getcategories.php') ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="basic-url" class="form-label">URL phim</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon3">https://</span>
                        <input type="text" class="form-control url-phim" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="linkphim">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="basic-url" class="form-label">URL ảnh</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon3">https://</span>
                        <input type="text" class="form-control url-anh" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="linkanh">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>

        <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>
            <?php include('./movie/getmovies.php') ?>
        </div>

</body>

</html>