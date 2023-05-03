-- Active: 1681097317487@@127.0.0.1@3306@vendorposdb

-- INPUT PELANGGAN
-- ===============================================================================
DELIMITER $$
CREATE PROCEDURE inputPelanggan(
    kode VARCHAR(10), nama_pelanggan VARCHAR(50), jk CHAR(1), 
    tmp_lahir VARCHAR(30), tgl_lahir DATE, email VARCHAR(45), alamat VARCHAR(40), kartu_id INT
)
BEGIN
    INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id)  
	VALUES (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id);
END;
DELIMITER;

CALL inputPelanggan('0011', 'Slamet', 'L', 'Surabaya', '2001-11-14', 'slamet@gmail.com', 'Jl. Merbabu Selatan No.44', 2);

-- SHOW PELANGGAN
-- ===============================================================================
DELIMITER $$
CREATE PROCEDURE showPelanggan()
BEGIN
    SELECT * FROM pelanggan;
END;
DELIMITER;

CALL showPelanggan();

-- INPUT PRODUK
-- ===============================================================================
DELIMITER $$
CREATE PROCEDURE inputProduk(
    kode VARCHAR(10), nama VARCHAR(45), harga_beli DOUBLE, harga_jual DOUBLE, stok INT, min_stok INT, jenis_produk_id INT
)
BEGIN
    INSERT INTO produk (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id)  
	VALUES (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id);
END;
DELIMITER;

CALL inputProduk('F006', 'Lemari Anak', 300000, 350000, 23, 2, 4);


-- SHOW PRODUK
-- ===============================================================================
DELIMITER $$
CREATE PROCEDURE showProduk()
BEGIN
    SELECT * FROM produk;
END;
DELIMITER;

CALL showProduk();


-- TOTAL PESANAN
-- ===============================================================================
DELIMITER $$
CREATE PROCEDURE totalPesanan()
BEGIN
    SELECT COUNT(harga) AS total_harga FROM pesanan_items GROUP BY harga;
END;
DELIMITER;

CALL totalPesanan();

-- ALL PESANAN
-- ===============================================================================

DELIMITER $$
CREATE PROCEDURE allPesanan()
BEGIN
    SELECT * FROM pesanan;
END;
DELIMITER;

CALL allPesanan();

-- VIEW => pesanan_produk_vw
-- ===============================================================================
CREATE VIEW pesanan_produk_vw AS 
SELECT
  pelanggan.id,
  pelanggan.nama_pelanggan,
  produk.jenis_produk_id,
  produk.nama AS 'nama_produk',
  produk.harga_beli
FROM produk
JOIN pesanan
  ON produk.id = pesanan.pelanggan_id
JOIN pelanggan
  ON pelanggan.id = pesanan.pelanggan_id;

SELECT * FROM pesanan_produk_vw;