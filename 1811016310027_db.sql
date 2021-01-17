-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 04:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1811016310027_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `password`, `gambar`) VALUES
(1, 'Devin Syahputra', 'devinsptra@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` varchar(3) NOT NULL,
  `total` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('sedang dalam proses','diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `id_keranjang`, `id_user`, `nama_user`, `nama_produk`, `qty`, `size`, `total`, `alamat`, `no_telp`, `gambar`, `status`) VALUES
(11, 1, 1, 'User Satu', 'I LOVE BLORA', 1, 'L', 100000, 'Jl. Raya Distro RT.10/RW.13 No.110 Kel. Distro Timur, Kec. Distro, Kota Distro', '082170631152', 'blora.jpg', 'sedang dalam proses'),
(12, 8, 2, 'User Dua', 'BULLY', 1, 'L', 120000, 'Jl. Raya Distro RT.10/RW.13 No.111 Kel. Distro Timur, Kec. Distro, Kota Distro', '081991713388', 'cargoule-1.jpg', 'diterima'),
(13, 9, 3, 'User Tiga', 'BUT FIRST, COFFEE', 2, 'L', 100000, 'Jl. Raya Distro RT.10/RW.13 No.112 Kel. Distro Timur, Kec. Distro, Kota Distro', '085156085253', 'totebag-1.jpg', 'sedang dalam proses'),
(14, 10, 4, 'User Empat', 'TREAD', 1, 'XL', 450000, 'Jl. Raya Distro RT.10/RW.13 No.114 Kel. Distro Timur, Kec. Distro, Kota Distro', '082170631180', 'jaket-3.jpg', 'diterima'),
(15, 11, 5, 'User Lima', 'NEXIDE', 4, 'S', 400000, 'Jl. Raya Distro RT.10/RW.13 No.115 Kel. Distro Timur, Kec. Distro, Kota Distro', '081352748563', 'nexide.jpg', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `no_handphone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`nama`, `alamat`, `no_handphone`, `email`) VALUES
('Distro Clothing', ' Jl. Raya Distro RT.10/RW.13 No.110 Kel. Distro Timur, Kec. Distro, Kota Distro', '0800-0000-0000', 'distro@distro.com');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `harga` int(25) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `size` varchar(5) NOT NULL,
  `id_user` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_produk`, `nama_produk`, `quantity`, `harga`, `gambar`, `size`, `id_user`) VALUES
(2, 2, 'NEXIDE', 2, 100000, 'nexide.jpg', 'XL', '1'),
(3, 3, 'OFF TIME', 1, 100000, 'offtime.jpg', 'L', '1'),
(4, 5, 'BULLY', 1, 120000, 'cargoule-1.jpg', 'L', '1'),
(6, 1, 'I LOVE BLORA', 1, 100000, 'blora.jpg', 'L', '1'),
(7, 1, 'I LOVE BLORA', 1, 100000, 'blora.jpg', 'L', '1');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'I LOVE BLORA', 100000, 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nGaris Leher : Round  Neck\r\n\r\n\r\nTersedia SIZE S,M,L,XL (Panjang x Lebar)\r\nS = 58 x 38 cm \r\nM = 63 x 41 cm\r\nL = 69 x 50 cm\r\nXL = 71 x 53 cm\r\ntoleransi 2-3cm\r\nbarang yang sudah dibeli tidak dapat dikembalikan\r\ntulis size & warna di keterangan, bila tidak kami kirimkan stok yang ada\r\n', 'blora.jpg'),
(2, 'NEXIDE', 100000, 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nGaris Leher : Round  Neck\r\n\r\n\r\nTersedia SIZE S,M,L,XL (Panjang x Lebar)\r\nS = 58 x 38 cm \r\nM = 63 x 41 cm\r\nL = 69 x 50 cm\r\nXL = 71 x 53 cm\r\ntoleransi 2-3cm\r\nbarang yang sudah dibeli tidak dapat dikembalikan\r\ntulis size & warna di keterangan, bila tidak kami kirimkan stok yang ada\r\n', 'nexide.jpg'),
(3, 'OFF TIME', 100000, 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nGaris Leher : Round  Neck\r\n\r\n\r\nTersedia SIZE S,M,L,XL (Panjang x Lebar)\r\nS = 58 x 38 cm \r\nM = 63 x 41 cm\r\nL = 69 x 50 cm\r\nXL = 71 x 53 cm\r\ntoleransi 2-3cm\r\nbarang yang sudah dibeli tidak dapat dikembalikan\r\ntulis size & warna di keterangan, bila tidak kami kirimkan stok yang ada\r\n', 'offtime.jpg'),
(4, 'THE NEXT', 100000, 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nGaris Leher : Round  Neck\r\n\r\n\r\nTersedia SIZE S,M,L,XL (Panjang x Lebar)\r\nS = 58 x 38 cm \r\nM = 63 x 41 cm\r\nL = 69 x 50 cm\r\nXL = 71 x 53 cm\r\ntoleransi 2-3cm\r\nbarang yang sudah dibeli tidak dapat dikembalikan\r\ntulis size & warna di keterangan, bila tidak kami kirimkan stok yang ada\r\n', 'thenext.jpg'),
(5, 'BULLY', 120000, 'Material : Taslan milk di jamin adem\r\nSize : all size L fit to XL\r\nPanjang : 68 - 70 cm\r\nLebar dada : 56 - 58 cm.\r\n\r\nUntuk detail produk silahkan klik gambar \r\n99% foto real pict\r\nproduk original dengan kualitas terbaik, karena bagi kami kepuasan pelanggan menjadi tujuan utama bagi kami.', 'cargoule-1.jpg'),
(6, 'YIKES', 250000, 'Material : Fleece tebal, bahan tidak kasar lembut di pakai, bahan tidak luntur ketika di cuci, Bahan tidak berbulu, sangat cocok di gunakan sehari-hari\r\n\r\nSIZE :\r\nM  : lebar dada 52cm x panjang 65cm\r\nL   : lebar dada 55cm x panjang 68cm\r\nXL : lebar dada 58cm x panjang 71cm\r\nXxl ( BIG SIZE) ???\r\nXXL/ BIG SIZE JUGA ADA DISINI KLIK <a href=\"https://shopee.co.id/product/172743053/2708489859?v=c76&smtt=0.0.3\">LINK INI</a>\r\n\r\nUntuk detail produk silahkan klik gambar \r\n99% foto real pict\r\nproduk original dengan kualitas terbaik, karena bagi kami kepuasan pelanggan menjadi tujuan utama bagi kami.', 'yikes.jpg'),
(7, 'WORD WIDE', 300000, 'Material : Fleece tebal, bahan tidak kasar lembut di pakai, bahan tidak luntur ketika di cuci, Bahan tidak berbulu, sangat cocok di gunakan sehari-hari\r\n\r\nSIZE :\r\nM  : lebar dada 52cm x panjang 65cm\r\nL   : lebar dada 55cm x panjang 68cm\r\nXL : lebar dada 58cm x panjang 71cm\r\n\r\nUntuk detail produk silahkan klik gambar \r\n99% foto real pict\r\nproduk original dengan kualitas terbaik, karena bagi kami kepuasan pelanggan menjadi tujuan utama bagi kami.', 'word-wide.jpg'),
(8, 'WISE MINDS', 270000, 'Material : Fleece tebal, bahan tidak kasar lembut di pakai, bahan tidak luntur ketika di cuci, Bahan tidak berbulu, sangat cocok di gunakan sehari-hari\r\n\r\nSIZE :\r\nM  : lebar dada 52cm x panjang 65cm\r\nL   : lebar dada 55cm x panjang 68cm\r\nXL : lebar dada 58cm x panjang 71cm\r\n\r\n\r\nUntuk detail produk silahkan klik gambar \r\n99% foto real pict\r\nproduk original dengan kualitas terbaik, karena bagi kami kepuasan pelanggan menjadi tujuan utama bagi kami.', 'wise-minds.jpg'),
(9, 'SKIP SCHOOL', 280000, 'Material : Fleece tebal, bahan tidak kasar lembut di pakai, bahan tidak luntur ketika di cuci, Bahan tidak berbulu, sangat cocok di gunakan sehari-hari\r\n\r\nSIZE :\r\nM  : lebar dada 52cm x panjang 65cm\r\nL   : lebar dada 55cm x panjang 68cm\r\nXL : lebar dada 58cm x panjang 71cm\r\n\r\n\r\nUntuk detail produk silahkan klik gambar \r\n99% foto real pict\r\nproduk original dengan kualitas terbaik, karena bagi kami kepuasan pelanggan menjadi tujuan utama bagi kami.', 'skip-school.jpg'),
(10, 'NORTH WESTERN', 500000, 'Material : Fleece tebal, bahan tidak kasar lembut di pakai, bahan tidak luntur ketika di cuci, Bahan tidak berbulu, sangat cocok di gunakan sehari-hari\r\n\r\nSIZE :\r\nM  : lebar dada 52cm x panjang 65cm\r\nL   : lebar dada 55cm x panjang 68cm\r\nXL : lebar dada 58cm x panjang 71cm\r\n\r\n\r\nUntuk detail produk silahkan klik gambar \r\n99% foto real pict\r\nproduk original dengan kualitas terbaik, karena bagi kami kepuasan pelanggan menjadi tujuan utama bagi kami.', 'north-western.jpg'),
(11, 'TREAD', 450000, 'Material : Fleece tebal, bahan tidak kasar lembut di pakai, bahan tidak luntur ketika di cuci, Bahan tidak berbulu, sangat cocok di gunakan sehari-hari\r\n\r\nSIZE :\r\nM  : lebar dada 52cm x panjang 65cm\r\nL   : lebar dada 55cm x panjang 68cm\r\nXL : lebar dada 58cm x panjang 71cm\r\n\r\n\r\nUntuk detail produk silahkan klik gambar \r\n99% foto real pict\r\nproduk original dengan kualitas terbaik, karena bagi kami kepuasan pelanggan menjadi tujuan utama bagi kami.', 'jaket-3.jpg'),
(13, 'Distro Mask', 25000, 'masker kain ( AWET bisa dicuci )\r\nBahan Katun halus (tidak berbulu )\r\n3 lapis (Dijamin Nyaman)\r\nduckbill / earloop\r\n\r\nChat atau note untuk pilih motif \r\napabila tidak ada notes / stok habis kami random ya..\r\n\r\nsudah dipack dgn plastik bening\r\nHARAP DICUCI SEBELUM DIPAKAI ( DENGAN SABUN YA ) AGAR DEBU DAN SISA PRODUKSI BERSIH SBLM DIGUNAKAN\r\n\r\nTHANKS... HAPPY SHOPPING..', 'masker-1.jpg'),
(14, 'Mask Distro', 25000, 'masker kain ( AWET bisa dicuci )\r\nBahan Katun halus (tidak berbulu )\r\n3 lapis (Dijamin Nyaman)\r\nduckbill / earloop\r\n\r\nChat atau note untuk pilih motif \r\napabila tidak ada notes / stok habis kami random ya..\r\n\r\nsudah dipack dgn plastik bening\r\nHARAP DICUCI SEBELUM DIPAKAI ( DENGAN SABUN YA ) AGAR DEBU DAN SISA PRODUKSI BERSIH SBLM DIGUNAKAN\r\n\r\nTHANKS... HAPPY SHOPPING..', 'masker-2.jpg'),
(15, 'MASK', 25000, 'masker kain ( AWET bisa dicuci )\r\nBahan Katun halus (tidak berbulu )\r\n3 lapis (Dijamin Nyaman)\r\nduckbill / earloop\r\n\r\nChat atau note untuk pilih motif \r\napabila tidak ada notes / stok habis kami random ya..\r\n\r\nsudah dipack dgn plastik bening\r\nHARAP DICUCI SEBELUM DIPAKAI ( DENGAN SABUN YA ) AGAR DEBU DAN SISA PRODUKSI BERSIH SBLM DIGUNAKAN\r\n\r\nTHANKS... HAPPY SHOPPING..', 'masker-4.jpg'),
(16, 'BUT FIRST, COFFEE', 50000, 'Ukuran : P 27cm x T 36cm\r\nPanjang Tali : 60\r\nKondisi : Baru 100%\r\nBahan : D300 (Kanvas berlapis semi karet dibagian dalam)\r\nTerdiri dari 1 ruang besar\r\nBoneka (Rp.3.500) dan pompom (Rp.2.000)dapat dibeli terpisah, bisa cari di etalase toko kami\r\n\r\nProduk ini merupakan buatan konvesksi lokal sehingga memiliki harga yang terjangkau dengan kualitas terbaik dikelasnya\r\n\r\nBarang ready stock silahkan “tambah ke troli”\r\n\r\nSegala bentuk perubahan order melalui chat tidak dapat kami proses, kami akan melakukan pengiriman sesuai variasi dan alamat pada saat checkout\r\n\r\nProduk ini dapat dibayar di tempat (CASH ON DELIVERY) dengan estimasi pengiriman 2-7 hari kerja (tergantung kurir)\r\nMohon check kembali ulasan pesanan untuk menghindari doubel pesanan', 'totebag-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `gambar`) VALUES
(1, 'User Satu', 'user1@test.com', '6ad14ba9986e3615423dfca256d04e3f', 'default.jpg'),
(2, 'User Dua', 'user2@test.com', '6ad14ba9986e3615423dfca256d04e3f', 'default.jpg'),
(3, 'User Tiga', 'user3@test.com', '6ad14ba9986e3615423dfca256d04e3f', 'default.jpg'),
(4, 'User Empat', 'user4@test.com', '6ad14ba9986e3615423dfca256d04e3f', 'default.jpg'),
(5, 'User Lima', 'user5@test.com', '6ad14ba9986e3615423dfca256d04e3f', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
