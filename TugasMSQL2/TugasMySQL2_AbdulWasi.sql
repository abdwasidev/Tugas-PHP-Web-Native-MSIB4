-- Active: 1681097317487@@127.0.0.1@3306@vendorposdb

-- INSERT DATA TO TABLE PELANGGAN
INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id) VALUES (
    '0001','Fitri','P','Pontianak','2000-01-01','fitri@gmail','Jl. Martabak Manis No.26', 1
    );

INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id) VALUES (
    '0002','Zeeta','L','Banjarmasin','2000-02-11','zeeta@gmail.com', 'Jl. Malam No.99', 2
    );

INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id) VALUES (
    '0003','Vicky','L','Ngimbang','1998-04-03','vicky@gmail.com', 'Jl. Ngawi Timur No.23', 3
    );

INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id) VALUES (
    '0004','Meii','P','Malang','2000-07-27','meii@gmail.com', 'Jl. Ngaglik Timur No.22', 4
    );

INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id) VALUES (
    '0005','Gilang','L','Borneo','2002-01-09','gilang@gmail.com','Jl. Suka Madu No.12', 5
    );

INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, alamat, kartu_id) VALUES (
    '0006','Made in Jahe','L','Bali','1999-06-19','kangjahe@gmail.com','Jl. Jahe Merah No.9', 6
    );

-- Menambahkan tabel karena tabel sebelumnya tidak ada kolom ket
 ALTER TABLE jenis_produk
        ADD COLUMN ket VARCHAR(40) AFTER nama;

-- INSERT DATA TO JENIS_PRODUK
INSERT INTO jenis_produk (nama, ket) VALUES 
    ('elektronik','tersedia'),
    ('makanan','tersedia'),
    ('minuman','tidak tersedia'),
    ('furniture',' tersedia')
    ;

-- INSERT DATA TO PRODUK
INSERT INTO produk (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id) VALUES 
    ('E001', 'Monitor 24 Inch', 2200000, 2400000, 30, 3, 1),
    ('E002', 'Laptop Lama Ram 2GB', 400000, 600000, 10, 1, 1),
    ('E003', 'Keyboard Mechanical', 200000, 240000, 60, 10, 1),
    ('F001', 'Meja Belajar Anak', 70000, 95000, 100, 3, 4),
    ('F002', 'Kursi Plastik Anak', 50000, 74000, 30, 5, 4),
    ('F003', 'Tas', 160000, 200000, 25, 4, 4)
    ;

-- SOAL 2.4 - 1 :: Tampilkan 2 data produk termahal
SELECT * FROM produk ORDER BY harga_beli DESC LIMIT 2;

-- SOAL 2.4 - 2 :: Tampilkan produk yang paling murah
SELECT * FROM produk ORDER BY harga_beli ASC LIMIT 1;

-- SOAL 2.4 - 3 :: Tampilkan produk yang stoknya paling banyak
SELECT * FROM produk ORDER BY stok DESC LIMIT 1;

-- SOAL 2.4 - 4 :: Tampilkan dua produk yang stoknya paling sedikit
SELECT * FROM produk ORDER BY stok ASC LIMIT 1;

-- SOAL 2.4 - 5 :: Tampilkan pelanggan yang paling muda
SELECT * FROM pelanggan ORDER BY DATE MIN(tgl_lahir) DESC LIMIT 1;

-- SOAL 2.4 - 6 :: Tampilkan pelanggan yang paling TUA
SELECT * FROM pelanggan ORDER BY DATE (tgl_lahir) ASC LIMIT 1;
