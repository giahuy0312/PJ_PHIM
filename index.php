<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim hay</title>
    <?php include("boottrap.php") ?>
    <style>
        .name {
            position: absolute;
            visibility: hidden;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid justify-content-center">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <!--<a class="nav-link active" aria-current="page" href="https://miplayvn.com/browse">Miplay</a>-->
                    <a class="navbar-brand ms-0" href="https://animevietsub.cx/">
                        <img src="https://cdn.animevietsub.cx/data/logo/logoz.png" alt="animevietsub" class="img-fluid">
                    </a>
                    <a class="navbar-brand ms-0" href="https://miplayvn.com/browse">MiPlay</a>
                </li>
                <!--<li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
           </li>-->
            </ul>

            <form class="d-flex search" role="search" action="search.php" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="name">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </nav>

    <div class="container text-center mt-5">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

            <?php include('getmovies.php') ?>

            <div class="col">
                <div class="p-3">
                    <a href="https://drive.google.com/file/d/1Dl7zBMUbpQHD2uwe8A1tQ1w9i3Z9wnuB/view?usp=sharing">
                        <img src="https://play-lh.googleusercontent.com/proxy/WfyFRCY029wTM9K_1wbdx3vVIBSohTmOACffFxmDVUbvKgOpgqH10rZAkVIiHrAdcV_5HGWMpBB6PuZVDsSNg5_8Bm9xoYhn6LZ30QxUkq_8cw6Hzj_LfoUvfTzCEMQRqxRauKRdkkD9EmuBxliEP1uEP-WwDAgpprOqKA=w240-h480-rw" alt="">
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <a href="https://drive.google.com/file/d/11H-D0QwT51b3lPtpppvW9TPF3CgoOizH/view?usp=sharing">
                        <img src="https://upload.wikimedia.org/wikipedia/vi/c/c2/G%E1%BA%A5u_%C4%91%E1%BB%8F_bi%E1%BA%BFn_h%C3%ACnh_poster.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <a href="https://drive.google.com/file/d/1zceA8elVk9MisY5PQSogH9KTnPG9UHon/view?usp=sharing">
                        <img src="https://cinematone.info/public/news-img/movie-pic/210620161157_hotel_transylvania_transformania_NlApM.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <a href="https://drive.google.com/file/d/1qC0y3DyWOAQQq1go0aHdcNlux7Qkk5L_/view?usp=sharing">
                        <img src="https://i1-vnexpress.vnecdn.net/2022/08/16/the-sea-beast-1660618264.jpg?w=330&h=495&q=100&dpr=1&fit=crop&s=VdAO3BCDmZ9jucRRtKlUcw" alt="">
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <a href="https://drive.google.com/file/d/1fwDEq-Huan9yY7xfBsgwWSnGeFtXp_wt/view?usp=sharing">
                        <img src="https://upload.wikimedia.org/wikipedia/vi/d/d9/ConanMovie24.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <a href="https://drive.google.com/file/d/1NgvxtW2Wz6DENlXz6E0WCxe0lH3ZnMFI/view?usp=sharing">
                        <img src="https://image.tmdb.org/t/p/original/mWbUQtRmpfxpkgqe8bZ0sSavisN.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <a href="https://drive.google.com/file/d/1iMzgY6_anNMq-akJZv-UaJjl4AtXaK8i/view?usp=sharing">
                        <img src="https://cinema.momocdn.net/img/25901083772546811-micpT7uLQYEXC2r20OhBmImBcrk.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- <div class="col">
                <div class="p-3">
                    <a href="https://animevsb.org/xem-phim/anh-em-nha-gau">
                        <img src="https://motchilllii.net/storage/images/anh-em-nha-gau/anh-em-nha-gau-thumb.webp" alt="">
                    </a>
                </div>
            </div> -->
            <div class="col">
                <div class="p-3">
                    <a href="https://youtu.be/98bZeTzJF_M">
                        <img src="https://i.ytimg.com/vi/j8FSrgUoj90/maxresdefault.jpg" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>