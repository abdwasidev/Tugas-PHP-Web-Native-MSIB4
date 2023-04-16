-- Active: 1681097317487@@127.0.0.1@3306@vendorposdb

-- INSERT NEW DATA TO TABLE "PELANGGAN" ===================================================
-- ========================================================================================
INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id) VALUES 
    ('0007','Kovi','L','Medan','1998-12-29','kovi@gmail.com','Jl. Kopi Luwak No.65', 4),
    ('0008','Gita','P','Gresik','2001-10-03','gita@gmail.com','Jl. Jus Mangga No.5', 3),
    ('0009','Mitai','P','Solo','2000-02-18','mitai@gmail.com','Jl. Violet No.5', 3),
    ('0010','Dio','L','Makassar','2003-05-12','dio@gmail.com','Jl. Matahari Timur No.71', 2)
    ;

SELECT * FROM pelanggan;

-- INSERT NEW DATA TO TABLE "PRODUK" ======================================================
-- ========================================================================================

INSERT INTO produk (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id) VALUES 
    ('MA001', 'Pizza Combo Spesial', 2200000, 2400000, 65, 1, 2),
    ('MA002', 'Ayam Bakar Ngimbang', 120000, 135000, 35, 1, 2),
    ('MA003', 'Beef Lasagna', 60000, 72000, 90, 2, 2),
    ('E004', 'Smartphone Ram 4GB', 1400000, 1550000, 35, 1, 1),
    ('F004', 'Kursi Gaming', 3000000, 3400000, 40, 1, 4),
    ('E005', 'Smartphone Ram 8GB', 5000000, 5400000, 25, 1, 1)
    ;

SELECT * FROM produk;

-- INSERT NEW DATA TO TABLE "KARTU" ======================================================
-- ========================================================================================

INSERT INTO kartu (kode, nama, diskon, iuran) VALUES 
    ('BC000x', 'Bronce Card', 0, 10000),
    ('SC000x', 'Silver Card', 5, 50000),
    ('GC000x', 'Gold Card', 10, 150000),
    ('PC000x', 'Platinum Card', 20, 500000)
    ;

SELECT * FROM kartu;

-- WORKSHOP 3.1 ===========================================================================
-- ========================================================================================

-- SOAL 3.1 :: 1. Tampilkan produk yang asset nya diatas 10jt
SELECT *, SUM(harga_beli * stok) AS nilai_asset FROM produk GROUP BY id HAVING SUM(harga_beli * stok) > 20000000;

-- SOAL 3.1 :: 2.	Tampilkan data produk beserta selisih stok dengan minimal stok
SELECT *, SUM(stok - min_stok) AS selisih FROM produk GROUP BY id;

-- SOAL 3.1 :: 3.	Tampilkan total asset produk secara keseluruhan
SELECT SUM(harga_beli * stok) AS total_asset FROM produk;

-- SOAL 3.1 :: 4.	Tampilkan data pelanggan yang lahirnya antara tahun 1999 sampai 2004
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir) BETWEEN 1999 AND 2004 ORDER BY tgl_lahir ASC; 

-- SOAL 3.1 :: 5.	Tampilkan data pelanggan yang lahirnya tahun 1998
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir) = 1998 ORDER BY tgl_lahir ASC;

-- SOAL 3.1 :: 6.	Tampilkan data pelanggan yang berulang tahun bulan january
SELECT * FROM pelanggan WHERE MONTH(tgl_lahir) = 01 ORDER BY tgl_lahir ASC;

-- SOAL 3.1 :: 7.	Tampilkan data pelanggan : nama, tmp_lahir, tgl_lahir dan umur (selisih tahun sekarang dikurang tahun kelahiran)
SELECT nama_pelanggan, tmp_lahir, tgl_lahir, (YEAR(NOW())-YEAR(tgl_lahir)) AS umur FROM pelanggan ORDER BY tgl_lahir DESC;


-- WORKSHOP 3.2 ===========================================================================
-- ========================================================================================

-- SOAL 3.2 :: 1.	Berapa jumlah pelanggan yang tahun lahirnya 1998
SELECT SUM(YEAR(tgl_lahir) = 1998) AS banyak_pelanggan FROM pelanggan;

-- SOAL 3.2 :: 2.	Berapa jumlah pelanggan perempuan yang tempat lahirnya di Jakarta
SELECT SUM(tmp_lahir = 'Jakarta') AS banyak_pelanggan_dari_jakarta FROM pelanggan;

-- SOAL 3.2 :: 3.	Berapa jumlah total stok semua produk yang harga jualnya dibawah 10rb
SELECT IF(harga_jual < 10000, SUM(stok), 0) AS total_stok FROM produk;

-- SOAL 3.2 :: 4.	Ada berapa produk yang mempunyai kode awal K
SELECT * FROM produk WHERE nama LIKE 'K%';

-- SOAL 3.2 :: 5.	Berapa harga jual rata-rata produk yang diatas 1jt
SELECT IF(harga_jual > 1000000, AVG(harga_jual), 0) AS rata2_produk FROM produk;

-- SOAL 3.2 :: 6.	Tampilkan jumlah stok yang paling besar
SELECT * FROM produk ORDER BY stok DESC LIMIT 1;

-- SOAL 3.2 :: 7.	Ada berapa produk yang stoknya kurang dari minimal stok
SELECT * FROM produk WHERE stok < min_stok;

-- SOAL 3.2 :: 8.	Berapa total asset dari keseluruhan produk
SELECT SUM(harga_beli * stok) AS total_asset FROM produk;


-- WORKSHOP 3.3 ===========================================================================
-- ========================================================================================

-- SOAL 3.3 :: 1.	Tampilkan data produk : id, nama, stok dan informasi jika stok telah sampai batas minimal atau kurang dari minimum stok dengan informasi ‘segera belanja’ jika tidak ‘stok aman’.
SELECT id, nama, stok, 
CASE
    WHEN stok <= min_stok THEN 'segera belanja'
    ELSE 'stok aman'
END AS informasi
FROM produk;

-- SOAL 3.3 :: 2.	Tampilkan data pelanggan: id, nama, umur dan kategori umur : jika umur < 17 → ‘muda’ , 17-55 → ‘Dewasa’, selainnya ‘Tua’
SELECT id, nama_pelanggan, (YEAR(NOW())-YEAR(tgl_lahir)) AS umur, 
CASE
    WHEN (YEAR(NOW())-YEAR(tgl_lahir)) < 17 THEN 'Muda'
    WHEN (YEAR(NOW())-YEAR(tgl_lahir)) >= 17 AND (YEAR(NOW())-YEAR(tgl_lahir)) <= 55 THEN 'Dewasa'
    ELSE 'Tua'
END AS kategori
FROM pelanggan;

-- SOAL 3.3 :: 3.	Tampilkan data produk: id, kode, nama, dan bonus untuk kode ‘E001’ →’DVD Player’ , ‘F001’ → ‘Rice Cooker’ selain dari diatas ‘Tidak Ada’
SELECT id, kode, nama,
CASE
    WHEN kode = 'E001' THEN 'DVD Player'
    WHEN kode = 'F001' THEN 'Rice Cooker'
    ELSE 'Tidak Ada'
END AS bonus
FROM produk;


-- WORKSHOP 3.4 ===========================================================================
-- ========================================================================================

-- SOAL 3.4 :: 1.	Tampilkan data statistik jumlah tempat lahir pelanggan
SELECT COUNT(tmp_lahir) AS jumlah_tmp_lahir FROM pelanggan;

-- SOAL 3.4 :: 2.	Tampilkan jumlah statistik produk berdasarkan jenis produk
SELECT jenis_produk_id, COUNT(*) AS jumlah_data FROM produk GROUP BY jenis_produk_id;

-- SOAL 3.4 :: 3.	Tampilkan data pelanggan yang usianya dibawah rata usia pelanggan
SELECT nama_pelanggan, (YEAR(NOW())-YEAR(tgl_lahir)) AS umur FROM pelanggan WHERE (YEAR(NOW())-YEAR(tgl_lahir)) < (SELECT AVG((YEAR(NOW())-YEAR(tgl_lahir))) FROM pelanggan);

-- SOAL 3.4 :: 4.	Tampilkan data produk yang harganya diatas rata-rata harga produk
SELECT * FROM produk WHERE harga_jual > (SELECT AVG(harga_jual) FROM produk);

-- SOAL 3.4 :: 5.	Tampilkan data pelanggan yang memiliki kartu dimana iuran tahunan kartu diatas 90rb
SELECT * FROM pelanggan WHERE kartu_id IN (SELECT id FROM kartu WHERE iuran > 90000);

-- SOAL 3.4 :: 6.	Tampilkan statistik data produk dimana harga produknya dibawah rata-rata harga produk secara keseluruhan
SELECT COUNT(*) AS jumlah_produk, MIN(harga_jual) AS Harga_Terendah, MAX(harga_jual) AS Harga_Tertinggi, AVG(harga_jual) AS Harga_Rata2 FROM produk WHERE harga_jual < (SELECT AVG(harga_jual) FROM produk);

-- SOAL 3.4 :: 7.	Tampilkan data pelanggan yang memiliki kartu dimana diskon kartu yang diberikan diatas 3%
SELECT nama_pelanggan, jk, kartu_id as kartu FROM pelanggan WHERE kartu_id in (SELECT id FROM kartu WHERE diskon > 3);
