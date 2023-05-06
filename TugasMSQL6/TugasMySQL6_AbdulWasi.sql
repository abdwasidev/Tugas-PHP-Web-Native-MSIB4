
-- Pelanggan memesan didalam table pesanan
INSERT INTO pesanan (tanggal, total, pelanggan_id) VALUES 
    ('2022-01-14', 530000, 3),
    ('2022-01-14', 270000, 1),
    ('2022-01-14', 710000, 1),
    ('2022-02-14', 900000, 2),
    ('2022-02-14', 1130000, 5)
;
-- Melanjutkan proses pembayaran pada table pembayaran
INSERT INTO pembayaran (nokuitansi, tanggal, jumlah, ke, pesanan_id) VALUES 
    ('QWE127', '2022-01-14', 530000, 1, 8),
    ('QWE128', '2022-01-14', 270000, 2, 9),
    ('QWE129', '2022-01-14', 710000, 3, 10),
    ('QWE130', '2022-02-14', 900000, 4, 11),
    ('QWE131', '2022-02-14', 1130000, 5, 12)
;

-- Menambahkan kolom status_pembayaran pada table pembayaran
ALTER TABLE pembayaran 
ADD COLUMN IF NOT EXISTS status_pembayaran VARCHAR(25) 
AFTER ke;

-- jika pesanan sudah dibayar maka status pembayaran akan berubah menjadi lunas
CREATE TRIGGER `onPayOrder`
BEFORE INSERT ON `pembayaran` FOR EACH ROW

BEGIN
    UPDATE pembayaran SET status_pembayaran = 'Lunas' WHERE id = NEW.pesanan_id;
END;

DELIMITER ;