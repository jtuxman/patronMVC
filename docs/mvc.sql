-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2018 at 04:01 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `autor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `editorial` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `url` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `editorial`, `url`) VALUES
(1, 'El dinero es mi amigo', 'Phil Laut', 'Grupo Editorial Tomo', '<a rel=\"nofollow\" href=\"http://www.amazon.com.mx/gp/product/9706661778/ref=as_li_qf_sp_asin_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=9706661778&linkCode=as2&tag=httppacoarcom-20\" target=\"_blank\"><img src=\"imagenes/eldineroesmiagigo.jpg\" width=\"120\"></a><img src=\"http://ir-mx.amazon-adsystem.com/e/ir?t=httppacoarcom-20&l=as2&o=34&a=9706661778\" width=\"1\" height=\"1\" border=\"0\" alt=\"\" style=\"border:none !important; margin:0px !important;\" />\n'),
(2, 'Saber Gastar', 'Gianco Abundiz Cabrero', 'Aguilar', '<a rel=\"nofollow\" href=\"http://www.amazon.com.mx/gp/product/B006GF4ZKY/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B006GF4ZKY&linkCode=as2&tag=httppacoarcom-20\" target=\"_blank\"><img src=\"imagenes/saberGastar.jpg\" width=\"140\"></a><img src=\"http://ir-mx.amazon-adsystem.com/e/ir?t=httppacoarcom-20&l=as2&o=34&a=B006GF4ZKY\" width=\"1\" height=\"1\" border=\"0\" alt=\"\" style=\"border:none !important; margin:0px !important;\" />\r\n'),
(3, 'Tu primer mill&oacute;n', 'Pedro Osvaldo Ramirez', 'Porrua', '<a rel=\"nofollow\" href=\"http://www.amazon.com.mx/gp/product/B00PZKOA9C/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B00PZKOA9C&linkCode=as2&tag=httppacoarcom-20\" target=\"_blank\"><img src=\"imagenes/tuPrimerMillon.jpg\" width=\"140\"></a></a><img src=\"http://ir-mx.amazon-adsystem.com/e/ir?t=httppacoarcom-20&l=as2&o=34&a=B00PZKOA9C\" width=\"1\" height=\"1\" border=\"0\" alt=\"\" style=\"border:none !important; margin:0px !important;\" />'),
(4, 'Los diez secretos de la riqueza abundante', 'Adam J. Jackson', 'Sirio', '<a rel=\"nofollow\" href=\"http://www.amazon.com.mx/gp/product/8478082433/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=8478082433&linkCode=as2&tag=httppacoarcom-20\" target=\"_blank\"><img src=\"imagenes/los10secretos.jpg\" width=\"140\"></a><img src=\"http://ir-mx.amazon-adsystem.com/e/ir?t=httppacoarcom-20&l=as2&o=34&a=8478082433\" width=\"1\" height=\"1\" border=\"0\" alt=\"\" style=\"border:none !important; margin:0px !important;\" />'),
(5, 'El millonario instant&aacute;neo', 'Mark Fisher ', 'Empresa Activa', '<a rel=\"nofollow\" href=\"http://www.amazon.com.mx/gp/product/8495787083/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=8495787083&linkCode=as2&tag=httppacoarcom-20\" target=\"_blank\"><img src=\"imagenes/elMillonario.jpg\" width=\"140\"></a><img src=\"http://ir-mx.amazon-adsystem.com/e/ir?t=httppacoarcom-20&l=as2&o=34&a=8495787083\" width=\"1\" height=\"1\" border=\"0\" alt=\"\" style=\"border:none !important; margin:0px !important;\" />'),
(6, 'Piense y h&aacute;gase rico', 'Napoleon Hill', 'Amazon', '<a rel=\"nofollow\" href=\"http://www.amazon.com.mx/gp/product/B008H7KEAO/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B008H7KEAO&linkCode=as2&tag=httppacoarcom-20\" target=\"_blank\"><img src=\"imagenes/piense.jpg\" width=\"140\"></a><img src=\"http://ir-mx.amazon-adsystem.com/e/ir?t=httppacoarcom-20&l=as2&o=34&a=B008H7KEAO\" width=\"1\" height=\"1\" border=\"0\" alt=\"\" style=\"border:none !important; margin:0px !important;\" />'),
(7, 'El hombre m&aacute;s rico de Babilonia', 'George Samuel Clason ', 'Obelisco', '<a rel=\"nofollow\" href=\"http://www.amazon.com.mx/gp/product/8477203717/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=8477203717&linkCode=as2&tag=httppacoarcom-20\" target=\"_blank\"><img src=\"imagenes/babilonia.jpg\" width=\"140\"></a><img src=\"http://ir-mx.amazon-adsystem.com/e/ir?t=httppacoarcom-20&l=as2&o=34&a=8477203717\" width=\"1\" height=\"1\" border=\"0\" alt=\"\" style=\"border:none !important; margin:0px !important;\" />'),
(8, 'Padre rico, padre pobre', 'Robert Kiyosaki', 'Aguilar', '<a rel=\"nofollow\" href=\"http://www.amazon.com.mx/gp/product/B007HPS120/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B007HPS120&linkCode=as2&tag=httppacoarcom-20\" target=\"_blank\"><img src=\"imagenes/padreRico.jpg\" width=\"140\"></a><img src=\"http://ir-mx.amazon-adsystem.com/e/ir?t=httppacoarcom-20&l=as2&o=34&a=B007HPS120\" width=\"1\" height=\"1\" border=\"0\" alt=\"\" style=\"border:none !important; margin:0px !important;\" />');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
