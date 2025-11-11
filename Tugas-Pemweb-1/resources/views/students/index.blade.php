<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h2>Table Data Siswa</h2>

    <a href="{{ route('students.create') }}">+ Tambah Data</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        @foreach($students as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->email }}</td>
            <td>{{ $s->jurusan }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>