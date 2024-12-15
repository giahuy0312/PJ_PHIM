-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 15, 2024 lúc 01:53 PM
-- Phiên bản máy phục vụ: 8.2.0
-- Phiên bản PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `buigiahuy_index`
--
CREATE DATABASE IF NOT EXISTS `buigiahuy_index` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci;
USE `buigiahuy_index`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `danhmuc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `danhmuc`, `reg_date`) VALUES
(1, 'Phim hoạt hình', '2024-12-14 08:25:54'),
(2, 'Phim chiếu rạp', '2024-12-14 08:25:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

DROP TABLE IF EXISTS `phim`;
CREATE TABLE IF NOT EXISTS `phim` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenphim` text NOT NULL,
  `id danh muc` int NOT NULL,
  `linkphim` text NOT NULL,
  `linkanh` text,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id`, `tenphim`, `id danh muc`, `linkphim`, `linkanh`, `reg_date`) VALUES
(2, 'steven universe 5', 0, 'https://bongngotv2.net/xemphim/vu-tru-cua-steven-phan-5-tap-1-id60245', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_dCInhqndEx4-HeWs0_JJ_cRpRfM_5cSX4w&s', '2024-07-16 15:25:24'),
(4, 'Belle Rá»“ng VÃ  CÃ´ng ChÃºa TÃ n Nhang ', 0, 'https://drive.google.com/file/d/1av4cUr-_yeEPSwuPkf2Om0vQ7hDWOalU/view?usp=sharing', 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/p/o/poster_belle_online_1_.jpg', '2024-07-16 15:28:45'),
(5, 'Há»c Viá»‡n Anh HÃ¹ng Nhiá»‡m Vá»¥ Giáº£i Cá»©u Tháº¿ Giá»›i ', 0, 'https://drive.google.com/file/d/1ADBcYdl7qx258C8eM8VmVKu9yIz_nCDE/view?usp=sharing', 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/1800x/71252117777b696995f01934522c402d/m/h/mha3_poster_12_1_.jpg', '2024-07-16 15:32:03'),
(7, 'Bong BÃ³ng (Bubble 2022) Táº­p FULL HD', 0, 'https://drive.google.com/file/d/1sPAt3u0Xn1xtPeM6z_nXhZAR88_NRmZ9/view?usp=drive_link', 'https://gamek.mediacdn.vn/133514250583805952/2022/4/4/anime-bubble-netflix-1649065079292152415367.jpg', '2024-08-11 06:21:28'),
(8, 'Má»™t NgÃ´i NhÃ , Ba CÃ¢u Chuyá»‡n - The House (2022)', 0, 'https://drive.google.com/file/d/1r5B0K5lkvQ5o6cdCetIFLyDrw8K4El5F/view?usp=drive_link', 'https://phimnhua.net/wp-content/uploads/2023/04/phimnhua_1681569358-270x400.jpg', '2024-10-03 13:39:13'),
(9, 'Ngá»n Lá»­a TrÃ¡i Tim (Fireheart 2022) Táº­p FULL HD', 0, 'https://drive.google.com/file/d/1Sctmw6K9GPCUxT_jj6Txw1rbKLtC6Yk4/view?usp=drive_link', 'https://m.media-amazon.com/images/M/MV5BMGM5ZTFmYWQtMGRiOS00YzI1LTkyMzAtNGIzNWFjZmFlYTFhXkEyXkFqcGdeQXVyMTAxNDE3MTE5._V1_.jpg', '2024-08-11 06:23:59'),
(10, 'Vua Háº£i Táº·c- TÃ³c Äá» Dáº«n ÄÆ°á»ng Äáº¿n Káº¿t ThÃºc (2022) ', 0, 'https://drive.google.com/file/d/14myXRSH2tkcSLH1AOHP6vkapCBE1Cr0z/view?usp=drive_link', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNsM5PwUXEEifqxzy7sEco9PrflfTzaAxxSA&s', '2024-08-11 06:38:39'),
(11, 'HÃ i Äá» VÃ  Báº£y ChÃº LÃ¹n - Red Shoes And The Seven Dwarfs Táº­p FULL HD ', 0, 'https://drive.google.com/file/d/1bjwcN0ht9G3Qtr_za0IuWCASB8HP9fyM/view?usp=drive_link', 'https://static2.vieon.vn/vieplay-image/poster_v4/2021/08/11/9wzh6rok_660x946-haidovabaychulun.jpg', '2024-08-11 06:30:29'),
(12, 'Hoa Má»™c Lan', 0, 'https://drive.google.com/file/d/16kpc8FEBsLS04LNY033Uk9BDaHF1hT4P/view?usp=drive_link', 'https://lumiere-a.akamaihd.net/v1/images/p_mulan_20529_83d3893a.jpeg?region=0%2C0%2C540%2C810', '2024-08-11 06:31:17'),
(13, 'Hoa Má»™c Lan 2', 0, 'https://drive.google.com/file/d/1Eb9hYN2KJ5eVE2str-DqujQx0ioXTim0/view?usp=drive_link', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdx8c-IFty5JvyDyX8eYgz7ydrEA-TXKmLQQ&s', '2024-08-11 06:31:35'),
(14, 'MÃ¨o Äi Hia- Äiá»u Æ¯á»›c Cuá»‘i CÃ¹ng (2022)', 0, 'https://drive.google.com/file/d/1OrA2o47xi_kiIzgQhGt3SbjM4xP88RBP/view?usp=drive_link', 'https://upload.wikimedia.org/wikipedia/vi/7/78/Puss_in_Boots_The_Last_Wish_poster.jpg', '2024-08-11 06:38:25'),
(15, 'NhÃ  Vá»‹t Di CÆ° - Migration (2023) FULL HD - Vietsub - Thuyáº¿t Minh', 0, 'https://drive.google.com/file/d/1r8OU8hqeSrenMnupm8D5MD6GXi_tNcgL/view?usp=drive_link', 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/4/7/470x700_6.jpg', '2024-08-11 06:32:48'),
(16, 'Nhá»¯ng Káº» Xáº¥u Xa- Má»™t GiÃ¡ng Sinh Ráº¥t Xáº¥u Xa', 0, 'https://drive.google.com/file/d/16d8pNVZN8HfAAFfReYFzYPniCdQ1oHMs/view?usp=drive_link', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWRP6KZe9buE2lXotT_X9dZn3p4j77WzMVFQ&s', '2024-08-11 06:38:12'),
(17, 'Tiá»ƒu QuÃ¡i Sonic 2 (Sonic The Hedgehog 2 2022) Táº­p FULL HD', 0, 'https://drive.google.com/file/d/1HQ1GZD8ehpXJLQ0ymrorCu7UuZ8EuOwW/view?usp=drive_link', 'https://m.media-amazon.com/images/M/MV5BODRlNTY5ZjktZjE0Ni00YjZhLTk3NTItYzk0ZjYxN2QxMWEzXkEyXkFqcGdeQXVyMjMwNDgzNjc@._V1_.jpg', '2024-08-11 06:33:40'),
(18, 'Xem Phim Nhá»¯ng Káº» Xáº¥u Xa Full HD - Phim The Bad Guys Full HD Vietsub Thuyáº¿t Minh', 0, 'https://drive.google.com/file/d/1rPjLIEJfGNLOMozYojk6ZJeSxBhmRJPi/view?usp=drive_link', 'https://mrwallpaper.com/images/hd/the-bad-guys-fiery-dark-poster-dsnn0q2s82hljod5.jpg', '2024-08-11 06:37:10'),
(20, 'Kung Fu Panda 4 (2024)', 0, 'https://drive.google.com/file/d/1hQd9DDdozJ84a_LeRBvBFvKwooM5G6bT/view?usp=drive_link', 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/4/7/470x700-kungfupanda4.jpg', '2024-08-12 04:56:22'),
(22, 'Doraemon- Nobita VÃ  VÃ¹ng Äáº¥t LÃ½ TÆ°á»Ÿng TrÃªn Báº§u Trá»i (2023)', 0, 'https://drive.google.com/file/d/1z30Ew8BcX_PCHywgeTVu1s9uxFyLcHqL/view?usp=sharing', 'https://cdn.galaxycine.vn/media/2023/5/15/doraemon-utopia-2_1684121814838.jpg', '2024-09-03 06:51:21'),
(23, 'Deadpool vÃ  Wolverine táº­p Full Vietsub HD', 0, 'https://drive.google.com/file/d/1Wy8yDWxSShFa2GuzablnRanw3SWWswVU/view?usp=sharing', 'https://m.media-amazon.com/images/M/MV5BNzRiMjg0MzUtNTQ1Mi00Y2Q5LWEwM2MtMzUwZDU5NmVjN2NkXkEyXkFqcGc@._V1_.jpg', '2024-09-03 07:09:29'),
(24, 'Doraemon- Nobita vÃ  báº£n giao hÆ°á»Ÿng Äá»‹a Cáº§u táº­p Full Vietsub HD', 0, 'https://drive.google.com/file/d/1A-5mxbRl2cHYRHPV4Yku8FRM5gWoZE2j/view?usp=sharing', 'https://cinema.momocdn.net/img/57932774564813069-sKwOXRajl9YfnXHoisxSScs36YS.jpg', '2024-09-03 07:09:47'),
(25, 'Nhá»¯ng Máº£nh GhÃ©p Cáº£m XÃºc 2 - Inside Out 2 (2024)', 0, 'https://drive.google.com/file/d/1Gy9mqnuq-eAjDMiCnHX11Uz55yMCnSbg/view?usp=sharing', 'https://m.media-amazon.com/images/M/MV5BYTc1MDQ3NjAtOWEzMi00YzE1LWI2OWUtNjQ0OWJkMzI3MDhmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg', '2024-09-03 07:09:11'),
(26, 'Conan Movie 26- TÃ u Ngáº§m Sáº¯t MÃ u Äen', 0, 'https://drive.google.com/file/d/16uaEGZdS8BA0TpjuwPWJdqVFBcGOG8pz/view?usp=sharing', 'https://photo2.tinhte.vn/data/attachment-files/2023/07/6496271_fkXxIK3PoyXu95VbZ5Blzlnxi5O.jpg', '2024-09-05 08:29:07'),
(27, 'Xá»© Sá»Ÿ CÃ¡c NguyÃªn Tá»‘ - Elemental (2023)', 0, 'https://drive.google.com/file/d/13BP1Wbim-bIm5SQygERUwbqIPX5J4k6q/view?usp=sharing', 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/p/o/poster_official_preiview.jpg', '2024-09-05 08:29:26'),
(28, 'Con LÃ  Umasou (You Are Umasou 2010)', 0, 'https://drive.google.com/file/d/1m0RmuICn-4WkbIwCb3ok5KJ92kLdfSR5/view?usp=sharing', 'https://m.media-amazon.com/images/M/MV5BMzhiOThlN2ItYWI2Ny00NTBjLTkzNjUtNGJkZmJhNmU4OTRhXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_FMjpg_UX1000_.jpg', '2024-09-05 08:29:48'),
(29, 'Ruby Thá»§y QuÃ¡i Tuá»•i Teen - Ruby Gillman, Teenage Kraken (2023)', 0, 'https://drive.google.com/file/d/1m0RmuICn-4WkbIwCb3ok5KJ92kLdfSR5/view?usp=sharing', 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/p/o/poster-kraken.jpg', '2024-09-05 08:30:05'),
(31, 'Godzilla Äáº¡i Chiáº¿n Kong (Godzilla Vs. Kong 2021) Táº­p FULL HD', 0, 'https://drive.google.com/file/d/1soXcTBv960fFJOTipPb3OWVjzpQ_tIKr/view?usp=drive_link', 'https://phimtho.net/storage/images/godzilla-dai-chien-kong/godzilla-dai-chien-kong-thumb.jpg', '2024-09-23 16:40:57'),
(32, 'Náº¿u Má»™t NgÃ y Tháº¿ Giá»›i KhÃ´ng CÃ³ Äiá»‡n - Survival Family (2016)', 0, 'https://drive.google.com/file/d/1pfDSM-W-D3LmNNdcK5_PhLmiKzXDAFmt/view?usp=drive_link', 'https://photo2.tinhte.vn/data/attachment-files/2022/08/6078662_0.jpg', '2024-10-03 13:40:25'),
(34, 'Äáº³ng Cáº¥p ThÃº CÆ°ng', 0, 'https://miplayvn.com/watch/movie/267', 'https://static2.vieon.vn/vieplay-image/poster_v4/2023/09/12/1wzm4zd5_660x946-dangcapthucung.png', '2024-10-06 12:40:03'),
(35, 'VÃ¹ng Ä‘áº¥t cÃ¢m láº·ng: NgÃ y má»™t 2024', 0, 'https://phimmoiiiz.net/phimmoi/vung-dat-cam-lang-ngay-mot/tap-full-464016?jwsource=cl', 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/a/q/aqpd1_teaser_glass_470x700.jpg', '2024-10-12 08:02:36'),
(36, 'robot hoang dÃ£ - the wild robot (2024)', 0, 'https://drive.google.com/file/d/1gBc9u10Fa80ba9YkYVsfMypXEf720H4O/view?usp=drive_link', 'https://touchcinema.com/uploads/slider-app/1200wx1800h-8-1728372724-poster.jpg', '2024-10-21 14:54:29'),
(37, 'Nhá»¯ng Káº» Xáº¥u Xa: Phi Vá»¥ Ma Ãm Lá»“ng Tiáº¿ng', 0, 'https://film.jenkastudiovn.net/2024/10/nhung-ke-xau-xa-phi-vu-ma-am-bad-guys.html#1', 'https://photo2.tinhte.vn/data/avatars/l/3045/3045951.jpg?1726998081', '2024-11-21 14:24:50'),
(38, 'Káºº TRá»˜M Máº¶T TRÄ‚NG - DESPICABLE ME 4 2024', 0, 'https://drive.google.com/file/d/1er3jkDY1DuIgsWw1TfNVUX2jHUC4s70D/view?usp=drive_link', 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/1800x/71252117777b696995f01934522c402d/d/m/dm4_teaser_700x1000.jpg', '2024-10-31 06:50:36'),
(39, 'Venom 3: VÅ© Äiá»‡u Cuá»‘i CÃ¹ng (2024) | Vietsub - Thuyáº¿t minh', 0, 'https://zingtvi.com/film/venom-3-vu-dieu-cuoi-cung/0', 'https://cdn.galaxycine.vn/media/2024/10/16/venom-sneak-500_1729048419589.jpg', '2024-11-03 06:21:30'),
(40, 'Joker 2- ÄiÃªn CÃ³ ÄÃ´i (2024)', 0, 'https://drive.google.com/file/d/1RCSuxljPiOELLav0lWSlMlRTqz0Yy8NU/view?usp=drive_link', 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/3/image/c5f0a1eff4c394a251036189ccddaacd/r/s/rsz_poster_payoff_joker_folie_a_deux_5_1_.jpg', '2024-11-03 06:20:41'),
(41, 'Hellboy: Äáº¡i Chiáº¿n Quá»· Dá»¯ - Hellboy: The Crooked Man (2024)', 0, 'https://phimmoiiiz.net/phimmoi/hellboy-dai-chien-quy-du/tap-full-486355', 'https://m.media-amazon.com/images/M/MV5BOWNmZTQ0Y2UtNDJhZC00Y2MwLWFjOWQtM2ZmNjFmMTU5Mjg5XkEyXkFqcGc@._V1_.jpg', '2024-11-03 08:34:27'),
(42, 'Ma SÃ³i - Family Pack 2024', 0, 'https://yeuphim.cc/phim/ma-soi-173009765091413/tap-full-239544', 'https://photo2.tinhte.vn/data/avatars/l/3046/3046020.jpg?1727002074', '2024-11-26 08:20:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
