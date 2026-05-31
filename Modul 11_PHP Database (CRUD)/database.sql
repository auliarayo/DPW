-- buat database
CREATE DATABASE IF NOT EXISTS dpw;
USE dpw;

-- tabel t_dosen
CREATE TABLE IF NOT EXISTS t_dosen (
    idDosen INT AUTO_INCREMENT PRIMARY KEY,
    namaDosen VARCHAR(50),
    noHP VARCHAR(14)
);

-- tabel t_mahasiswa
CREATE TABLE IF NOT EXISTS t_mahasiswa (
    npm INT PRIMARY KEY,
    namaMhs VARCHAR(50),
    prodi VARCHAR(25),
    alamat VARCHAR(70),
    noHP VARCHAR(14)
);

-- tabel t_matakuliah
CREATE TABLE IF NOT EXISTS t_matakuliah (
    kodeMK INT PRIMARY KEY,
    namaMK VARCHAR(50),
    sks INT,
    jam INT
);

-- data contoh
INSERT INTO t_dosen (namaDosen, noHP) VALUES
('Lutfiyah Dwi Setia, S.Kom., M.Kom.', '082140690012'),
('Angger Binuko Paksi, M.Kom.', '085155442789'),
('Rahmania Kumalasari, S.Kom., M.Kom.', '082334399629');

INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES
(253307031, 'Habibbah Prima Risqullah', 'Teknologi Informasi', 'Jl. Gerilya No. 18, Madiun', '087864456141'),
(254308056, 'Kefayefta Ardiatma Sasangka Wibawa', 'Perkeretaapian', 'Jl. Panglima Sudirman No. 70, Gresik', '083897954201'),
(253101030, 'Shofyana Nur Khasanah', 'Administrasi Bisnis', 'Jl. Sumatra No. 5, Ponorogo', '085607109809');

INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES
(101, 'Pemrograman Berbasis Obyek', 3, 4),
(102, 'UI/UX Design', 2, 4),
(121, 'Agama Islam', 2, 6);