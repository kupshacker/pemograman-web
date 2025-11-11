<!DOCTYPE html>
<html>
<head>
    <title>Form Input Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required> <br><br>

        <label>Email:</label>
        <input type="text" name="email" required> <br><br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan" required> <br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Kembali ke Tabel</a>
</body>
</html>