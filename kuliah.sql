DROP DATABASE IF EXISTS kuliah;

create database kuliah;

use kuliah;

create table mahasiswa(
npm char(13) primary key,
nama varchar(50),
jurusan enum('Teknik Informatika', 'Sistem Operasi'),
alamat text
);

create table krs(
id int(11) primary key auto_increment,
mahasiswa_npm char(13),
matakuliah_kodemk char(6)
);

create table matakuliah(
kodemk char(6) primary key,
nama varchar(50),
jumlah_sks int(3)
);

alter table krs
add foreign key (mahasiswa_npm) references mahasiswa(npm),
add foreign key (matakuliah_kodemk) references matakuliah(kodemk);
