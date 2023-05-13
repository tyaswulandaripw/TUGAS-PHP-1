

CREATE PROCEDURE inputPelanggan(kode varchar(10), nama_pelanggan varchar(50), jk char(1), tmp_lahir varchar(30), tgl_lahir date, email varchar(45), alamat varchar(40), kartu_id int(11))
BEGIN
INSERT INTO pelanggan (kode,nama_pelanggan,jk,tmp_lahir,tgl_lahir,email,alamat,kartu_id) VALUES (kode,nama_pelanggan,jk,tmp_lahir,tgl_lahir,email,alamat,kartu_id);
END $$

DELIMITER ;
CALL inputPelanggan('011021','Silvia','P','Kediri','2009-03-01','silvia@gmail.com','kediri',1);

2. Buat fungsi showPelanggan(), setelah itu panggil fungsinya
DELIMITER $$

CREATE PROCEDURE showPelanggan()
BEGIN 
SELECT * FROM pelanggan;
END $$

DELIMITER ;
CALL showPelanggan();

+----+--------+----------------+------+------------+------------+-------------------+--------+----------+
| id | kode   | nama_pelanggan | jk   | tmp_lahir  | tgl_lahir  | email             | alamat | kartu_id |
+----+--------+----------------+------+------------+------------+-------------------+--------+----------+
|  1 | 011021 | Silvia         | P    | Kediri     | 2009-03-01 | silvia@gmail.com  | Kdr    |        1 |
|  2 | 011102 | Heby           | L    | Nganjuk    | 2009-01-03 | heby@gmail.com    | Ngk    |        1 |
|  3 | 011132 | Evilia         | P    | Nganjuk    | 2003-05-29 | evilia@gmail.com  | Ngk    |        2 |
|  4 | 011133 | Diego          | L    | Kediri     | 1992-01-01 | diego@gmail.com   | Kdr    |        2 |
|  5 | 011134 | Sila           | P    | Tulung Ag. | 1992-12-11 | sila@gmail.com    | Tlg Ag |        1 |
|  6 | 011135 | Regina         | P    | Malang     | 1995-11-14 | regina@gmail.com  | Mlg    |        1 |
|  7 | 011136 | Nila           | P    | Nganjuk    | 2004-04-02 | nila@gmail.com    | Ngk    |        3 |
|  8 | 011145 | Cintia Bela    | P    | Trenggalek | 2005-01-24 | cintia@gmail.com  | tr     |        1 |
+----+--------+----------------+------+------------+------------+-------------------+--------+----------+

3. Buat fungsi inputProduk(), setelah itu panggil fungsinya
DELIMITER $$

CREATE PROCEDURE inputProduk(kode varchar(10), nama varchar(45), harga_beli double, harga_jual double, stok int(11), min_stok int(11), jenis_produk_id int(11))
BEGIN
INSERT INTO produk (kode,nama,harga_beli,harga_jual,stok,min_stok,jenis_produk_id) VALUES (kode,nama,harga_beli,harga_jual,stok,min_stok,jenis_produk_id);
END $$

DELIMITER ;
CALL inputProduk('L001','Lemari',700000,800000,5,2,4);


4. Buat fungsi showProduk(), setelah itu panggil fungsinya
DELIMITER $$

CREATE PROCEDURE showProduk()
BEGIN 
SELECT * FROM produk;
END $$

DELIMITER ;
CALL showProduk();

+------------+------------+------------+
| nama       | harga_beli | harga_jual |
+------------+------------+------------+
| TV         |    3000000 |    4000000 |
| TV 11 Inch |    2000000 |    3000000 |
| Kulkas     |    4000000 |    5000000 |
| Meja Makan |    1000000 |    2000000 |
| Taro       |       4000 |       5000 |
| Teh Kotak  |       3000 |       4000 |
| Lemari     |     700000 |     800000 |
+------------+------------+------------+

5. Buat fungsi totalPesanan(), setelah itu panggil fungsinya
DELIMITER $$

CREATE PROCEDURE totalPesanan()
BEGIN
DECLARE total_pesanan DECIMAL(10,2);
SELECT SUM(total) INTO total_pesanan FROM pesanan;
SELECT total_pesanan;
END $$

DELIMITER ;
CALL totalPesanan();

+---------------+
| total_pesanan |
+---------------+
|     230000.00 |
+---------------+

6. Tampilkan seluruh pesanan dari semua pelanggan
DELIMITER $$ 

CREATE PROCEDURE seluruhPesanan()
BEGIN 
SELECT pesanan.id, pelanggan.nama_pelanggan, pesanan.tanggal, pesanan.total
FROM pesanan
INNER JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id;
END $$

DELIMITER ;
CALL seluruhPesanan();

+----+----------------+------------+--------+
| id | nama_pelanggan | tanggal    | total  |
+----+----------------+------------+--------+
|  1 | Silvia         | 2023-03-03 | 200000 |
|  2 | Silvia         | 2022-02-02 |  30000 |
+----+----------------+------------+--------+

7. Buatkan query panjang di atas menjadi sebuah view baru: pesanan_produk_vw (menggunakan join dari table pesanan,pelanggan dan produk)
CREATE VIEW pesanan_produk_vw AS 
SELECT pesanan.id, pesanan.tanggal, pesanan.total, 
pelanggan.kode AS kode_pelanggan, pelanggan.nama_pelanggan, pelanggan.jk, pelanggan.tmp_lahir, pelanggan.tgl_lahir, pelanggan.email, pelanggan.kartu_id,
produk.kode AS kode_produk, produk.nama AS nama_produk, produk.harga_jual, pesanan_items.harga
FROM pesanan 
INNER JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id
INNER JOIN pesanan_items ON pesanan.id = pesanan_items.pesanan_id
INNER JOIN produk ON pesanan_items.produk_id = produk.id;

SELECT * FROM pesanan_produk_vw;

Empty set (0.001 sec)