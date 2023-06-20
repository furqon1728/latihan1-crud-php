USE kuliah;

INSERT INTO mahasiswa(npm, nama, jurusan, alamat) 
VALUES 
('2110631250059','Siska Putri','Sistem Operasi','Jakarta Selatan'),
('2110631250060','Ujang Aziz','Sistem Operasi','Subang'),
('2110631250061','Veronica Setyano','Teknik Informatika','Banten'),
('2110631250062','Rizka Nurmala Putri','Sistem Operasi','Jakarta Barat'),
('2110631250063','Eren Putra','Teknik Informatika','Karawang'),
('2110631250064','Putra Abdul Rachman','Teknik Informatika','Bekasi'),
('2110631250065','Rachmat Andriyani','Sistem Operasi','Tangerang'),
('2110631250066','Ayu Puspitasari','Sistem Operasi','Batak'),
('2110631250067','Putri Ayuni','Sistem Operasi','Jakarta Timur'),
('2110631250068','Andri Muhammad','Teknik Informatika','Depok');

INSERT INTO matakuliah(kodemk, nama, jumlah_sks)
VALUES
('BD01', 'Basis Data', 3),
('PBW02', 'Pemrograman Berbasis Web', 3),
('ASD03', 'Algoritma Struktur Data', 3),
('KJI04', 'Kajian Jurnal Informatika', 2);

INSERT INTO krs(mahasiswa_npm, matakuliah_kodemk)
VALUES
('2110631250059','BD01'),
('2110631250060','PBW02'),
('2110631250061','BD01'),
('2110631250062','ASD03'),
('2110631250063','KJI04'),
('2110631250064','BD01'),
('2110631250065','BD01'),
('2110631250066','PBW02'),
('2110631250067','PBW02'),
('2110631250068','ASD03');