/*
 Navicat Premium Data Transfer

 Source Server         : MyServer
 Source Server Type    : MySQL
 Source Server Version : 80028 (8.0.28)
 Source Host           : localhost:3306
 Source Schema         : db_dodi

 Target Server Type    : MySQL
 Target Server Version : 80028 (8.0.28)
 File Encoding         : 65001

 Date: 24/06/2024 02:43:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_barang
-- ----------------------------
DROP TABLE IF EXISTS `tb_barang`;
CREATE TABLE `tb_barang`  (
  `id_barang` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_kategori` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nm_barang` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `harga` float NULL DEFAULT NULL,
  `satuan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT '',
  `berat` float NOT NULL,
  `stock` float NOT NULL,
  `foto_barang` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  PRIMARY KEY (`id_barang`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_barang
-- ----------------------------
INSERT INTO `tb_barang` VALUES ('B2400001', 'K00001', 'Baju Hem Kemeja Putih Polos Pria Kerah Shanghai Putih Full White Lengan Panjang Casual Slimfit 3345', 'Kondisi Barang\r\nBARU\r\nSpesifikasi\r\nKategori	:	Kemeja\r\nBerat	:	250 gram\r\nAsal Barang	:	Lokal\r\nBrand	:	Lainnya\r\nTipe	:	Lainnya\r\nUkuran	:	M, L, XL, XXL, Other Size\r\nDeskripsi\r\nJika kamu sedang mencari kemeja yang bahannya adem, nyerap keringat, tidak panas, dan dapat digunakan untuk acara formal maupun nonformal, berarti produk ini cocok buat kamu\r\n\r\nSpesifikasi :\r\n\r\nKerah tipe shanghai\r\nSize M L XL (Slimfit) Size XXL 3XL (Reguler Fit)\r\nBagian Pinggang dibentuk melengkung untuk yg slimfit\r\nModel Pakai Size L\r\nTinggi & Berat Model : 170 cm & 65kg\r\nBahan : 100% Cotton Poplin (halus dan tebal)\r\nKualitas jahitan rapi dan kokoh.\r\nKami merupakan supplier langsung tangan pertama, jadi harga yg kami tawarkan adalah \"HARGA TERBAIK DI KUALITAS TERBAIK\".\r\nDan jangan khawatir semua produk kami selalu di foto sendiri ya, jadi barang yang di terima sesuai dengan apa yang di tampilkan juga.\r\n\r\nReady SIZE M, L, XL, XXL, XXXL\r\n\r\nSpek ukuran\r\nM\r\nLebar dada 50cm\r\nPanjang Baju 70cm\r\nPanjang Lengan 60cm\r\nLingkar m\r\n\r\nL\r\nLebar dada 53cm\r\nPanjang Baju 72cm\r\nPanjang Lengan 61cm\r\nLingkar m\r\n\r\nXL\r\nLebar dada 56cm\r\nPanjang Baju 74cm\r\nPanjang Lengan 62cm\r\nLingkar dada 112cm\r\n\r\nXXL\r\nLebar dada 60cm\r\nPanjang Baju 76cm\r\nPanjang Lengan 66cm\r\nLingkar m\r\n\r\nXXXL\r\nLebar dada 65-66cm\r\nPanjang Baju 79cm\r\nPanjang Lengan 66cm\r\nLingkar dada 130-132cm\r\n\r\nCara ukur lebar dada : ukur dari ujung ketiak ke ujung ketiak satunya.\r\nCara ukur panjang baju : ukur dari bahu sampai ke bawah baju.\r\n\r\nEstimasi ukuran baju dengan berat badan user adalah sebagai berikut :\r\nM = 50-70kg\r\nL = 70-80kg\r\nXL =80-90kg\r\nXXL = 90-100kg\r\nXXXL =100-115kg\r\n(Estimasi ini sifatnya tidak mutlak, bisa berbeda, karena bentuk badan tiap orang juga berbeda, lebih baik sebelum beli bisa ukur dulu baju yg biasanya nyaman digunakan, supaya pas)\r\n\r\nHari efektif pengiriman Senin Sabtu. (Hari Minggu Dan Tanggal Merah Libur)\r\nPengiriman barang akan dilakukan dihari yang sama jika pembayaran terkonfirmasi sebelum pukul 16.30 WIB untuk hari Senin- Sabtu.\r\nMINGGU DAN TANGGAL MERAH LIBUR TIDAK ADA PENGIRIMAN.\r\n\r\nWajib pilih ukuran yang tersedia pada varian pada saat pemesanan,\r\n\r\nHappy Shopping', 95000, 'PCS', 0.25, 45, '1719009502720.png');
INSERT INTO `tb_barang` VALUES ('B2400002', 'K00001', 'Celana Hitam Polos', 'Kondisi: Baru\r\nMin. Pemesanan: 1 Buah\r\nEtalase: Celana Panjang\r\nCelana Panjang Bahan Kain Dasar Hitam Pria Standar Fit bahan tebal berkualitas, jahitan rapi bahan lebih bagus. Biasa digunakan untuk kantor atau acara acara formal.\r\n\r\nBahan : Katun Polyester(Tebal)\r\nWarna : Hitam\r\nsize : 27 28 29 30 31 32 33 34 35 36 37 38\r\n\r\nSilahkan tanyakan detail ukuran seperti lingkar pinggang dan panjang celana, kami akan ukur sesuai stok yang ada sehingga dapat memastikan ukuran yang tepat sesuai dengan spesifikasi anda dengan stok yang ada ^^\r\n\r\nMohon tanyakan terlebih dahulu stok sebelum order ^^', 100000, 'PCS', 0.4, 25, '1719023957708.jpg');
INSERT INTO `tb_barang` VALUES ('B2400003', 'K00001', 'Polo Shirt - Kaos Polo Navy', 'Kategori	Pakaian Pria\r\nMerk tidak ada merk\r\nGratis retur 15 hari (semua alasan)\r\n• Bahan : Katun Lacost Premium\r\n• Cutting : Slimfit\r\n• Warna : Navy\r\n• Ready Stock :\r\n• S, M, L, XL dan XXL\r\n• S : 69.2 x 48.3\r\n• M : 72.0 x 51.7\r\n• L : 74.5 x 53.4\r\n• XL : 76.2 x 55.5\r\n• XXL : 80.0 x 58.0', 92000, 'PCS', 0.6, 125, '1719024173415.png');
INSERT INTO `tb_barang` VALUES ('B2400004', 'K00001', 'Celana Tartan Abu-abu', 'Kondisi: Baru\r\nMin. Pemesanan: 1 Buah\r\nEtalase: Tartan\r\n✔️ Bahan : Katun Wol (tidak kusut, lembut dan nyaman)\r\n✔️ Model slimfit-skinny\r\n✔️ Resleting anti macet, anti karat & smooth\r\n✔️ Jahitan Rapi & Presisi\r\n✔️ Terdapat 4 saku (2 depan, 2 belakang)\r\n✔️ Merk Bapin (Local Brand)\r\n✔️ Cocok dipakai untuk kerja, hangout, traveling atau sehari-hari\r\n✔️ Jika kebesaran/kekecilan bisa ditukar\r\n\r\nDetail Ukuran :\r\nS setara 27-28 Lingar Pinggang 75cm, Lingkar Paha 54cm, Lingkar Kaki 32cm, Panjang 95cm\r\nM setara 29-3 Lingar Pinggang 80cm, Lingkar Paha 56cm, Lingkar Kaki 32cm, Panjang 96cm\r\nL setara 31-32 Lingar Pinggang 85cm, Lingkar Paha 58cm, Lingkar Kaki 34cm, Panjang 97cm\r\nXL setara 33-34 Lingar Pinggang 90cm, Lingkar Paha 59cm, Lingkar Kaki 35cm, Panjang 98cm\r\nXXL setara 35-36 Lingar Pinggang 94cm, Lingkar Paha 60cm, Lingkar Kaki 36cm, Panjang 99cm', 95000, 'PCS', 0.4, 45, '1719024289329.jpg');

-- ----------------------------
-- Table structure for tb_barang_keluar
-- ----------------------------
DROP TABLE IF EXISTS `tb_barang_keluar`;
CREATE TABLE `tb_barang_keluar`  (
  `id_barang_keluar` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_barang` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `doc_tipe` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tgl_barang_keluar` datetime NULL DEFAULT NULL,
  `ket_barang_keluar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `jumlah` float NULL DEFAULT NULL,
  `harga` float NULL DEFAULT NULL,
  `unit_pengukuran` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `doc_referensi` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_barang_keluar`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_barang_keluar
-- ----------------------------

-- ----------------------------
-- Table structure for tb_barang_masuk
-- ----------------------------
DROP TABLE IF EXISTS `tb_barang_masuk`;
CREATE TABLE `tb_barang_masuk`  (
  `id_barang_masuk` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_barang` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `doc_tipe` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tgl_barang_masuk` datetime NULL DEFAULT NULL,
  `ket_barang_masuk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `jumlah` float NULL DEFAULT NULL,
  `harga` float NULL DEFAULT NULL,
  `unit_pengukuran` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `doc_referensi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_barang_masuk`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_barang_masuk
-- ----------------------------

-- ----------------------------
-- Table structure for tb_dtl_penjualan
-- ----------------------------
DROP TABLE IF EXISTS `tb_dtl_penjualan`;
CREATE TABLE `tb_dtl_penjualan`  (
  `id_dtl_penjualan` int NOT NULL AUTO_INCREMENT,
  `id_penjualan` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `id_barang` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `jumlah` float NULL DEFAULT NULL,
  `harga` float NULL DEFAULT NULL,
  `subtotal` float NULL DEFAULT NULL,
  PRIMARY KEY (`id_dtl_penjualan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_dtl_penjualan
-- ----------------------------

-- ----------------------------
-- Table structure for tb_kategori_barang
-- ----------------------------
DROP TABLE IF EXISTS `tb_kategori_barang`;
CREATE TABLE `tb_kategori_barang`  (
  `id_kategori` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nm_kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_kategori_barang
-- ----------------------------
INSERT INTO `tb_kategori_barang` VALUES ('K00001', 'Pakaian Pria');

-- ----------------------------
-- Table structure for tb_pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pelanggan`;
CREATE TABLE `tb_pelanggan`  (
  `id_pelanggan` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `id_user` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `no_pelanggan` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nm_pelanggan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tgl_register` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pelanggan
-- ----------------------------
INSERT INTO `tb_pelanggan` VALUES ('P2400001', 'U2400002', 'dodi@test.com', '085766467875', 'Dodi', 'Kudus', '2024-06-22');

-- ----------------------------
-- Table structure for tb_penilaian
-- ----------------------------
DROP TABLE IF EXISTS `tb_penilaian`;
CREATE TABLE `tb_penilaian`  (
  `id_penilaian` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_penjualan` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tgl_penilaian` date NOT NULL,
  `id_barang` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `rating` int NULL DEFAULT NULL,
  `ulasan` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `id_user` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_penilaian`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_penilaian
-- ----------------------------

-- ----------------------------
-- Table structure for tb_penjualan
-- ----------------------------
DROP TABLE IF EXISTS `tb_penjualan`;
CREATE TABLE `tb_penjualan`  (
  `id_penjualan` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tgl_penjualan` datetime NULL DEFAULT NULL,
  `id_pelanggan` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `biaya_barang` float NULL DEFAULT NULL,
  `biaya_pengiriman` float NULL DEFAULT NULL,
  `tot_akhir` float NULL DEFAULT NULL,
  `ekspedisi` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status_penjualan` enum('ORDER','TERBAYAR','PACKING','KIRIM','DITERIMA') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `alamat_kirim` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nominal_bayar` float NULL DEFAULT NULL,
  PRIMARY KEY (`id_penjualan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_penjualan
-- ----------------------------

-- ----------------------------
-- Table structure for tb_setting_cross
-- ----------------------------
DROP TABLE IF EXISTS `tb_setting_cross`;
CREATE TABLE `tb_setting_cross`  (
  `id_setting_cross` int NOT NULL AUTO_INCREMENT,
  `id_barang` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `id_barang_rujukan` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_setting_cross`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_setting_cross
-- ----------------------------
INSERT INTO `tb_setting_cross` VALUES (1, 'B2400001', 'B2400002');

-- ----------------------------
-- Table structure for tb_setting_up
-- ----------------------------
DROP TABLE IF EXISTS `tb_setting_up`;
CREATE TABLE `tb_setting_up`  (
  `id_setting_up` int NOT NULL AUTO_INCREMENT,
  `id_barang` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `id_barang_rujukan` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `biaya` float NULL DEFAULT NULL,
  PRIMARY KEY (`id_setting_up`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_setting_up
-- ----------------------------
INSERT INTO `tb_setting_up` VALUES (1, 'B2400001', 'B2400004', 90000);

-- ----------------------------
-- Table structure for tb_temp_item
-- ----------------------------
DROP TABLE IF EXISTS `tb_temp_item`;
CREATE TABLE `tb_temp_item`  (
  `id_barang` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_user` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `qty` float NOT NULL,
  `harga` float NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_temp_item
-- ----------------------------

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `id_user` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nm_pengguna` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `level` enum('PELANGGAN','ADMIN_PENJUALAN','PEMILIK','SUPER USER') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('SU', 'Admin', 'admin', 'admin', 'SUPER USER');
INSERT INTO `tb_user` VALUES ('U2400001', 'Dodi', 'dodi', '12345678', 'ADMIN_PENJUALAN');
INSERT INTO `tb_user` VALUES ('U2400002', 'Dodi', 'dodi@test.com', '123456', 'PELANGGAN');

SET FOREIGN_KEY_CHECKS = 1;
