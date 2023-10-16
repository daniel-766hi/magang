# Mengimpor modul datetime untuk mengambil tanggal saat ini
import datetime

# Menerima input data pasien
nama_pasien = input("Masukkan nama pasien: ")
tanggal_lahir = input("Masukkan tanggal lahir pasien (YYYY-MM-DD): ")
alasan_sakit = input("Masukkan alasan sakit: ")

# Mengambil tanggal saat ini
tanggal_surat = datetime.datetime.now().strftime("%Y-%m-%d")

# Data dokter yang memberi surat
nama_dokter = "Amurato Sirutar"
posisi_dokter = "Dokter Umum"

#Pihak rumah sakit
pegawai = "Rosianta"
posisi_pegawai = "Pegawai Sentral"
nama_rs = "Rumah sakit Restu Ibu"

# Membuat isi surat sakit
isi_surat = f"""
{nama_rs}
Jl. Contoh No. 123
Kota Contoh

Surat Sakit

Kepada Yth. Dokter/Petugas Medis,

Nama Pasien: {nama_pasien}
Tanggal Lahir: {tanggal_lahir}
Alasan Sakit: {alasan_sakit}

Kami yang bertanda tangan di bawah ini, mengkonfirmasi bahwa pasien di atas sedang dalam perawatan medis di Rumah Sakit ABC. Pasien ini ditemui dalam kondisi yang memerlukan perawatan medis dan diagnosis lebih lanjut.

Harap berikan perawatan medis yang diperlukan kepada pasien kami. Kami akan sangat menghargai segala upaya yang Anda lakukan untuk memulihkan kesehatannya.

Tanggal Surat: {tanggal_surat}
Dokter yang Menandatangani:
{nama_dokter}
{posisi_dokter}

Hormat kami,
{pegawai}
{posisi_pegawai}
{nama_rs}
"""

# Menyimpan isi surat ke dalam file
nama_file = "SuratSakit_" + nama_pasien + ".txt"
with open(nama_file, "w") as file:
    file.write(isi_surat)

print(f"Surat sakit telah berhasil dibuat dalam file '{nama_file}'.")
