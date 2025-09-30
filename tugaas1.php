<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kuis Pemrograman Web</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Global */
        * { box-sizing: border-box; }
        body { 
            font-family: 'Poppins', sans-serif;
            background: #f0f2f5; 
            margin: 0; 
            padding: 0;
        }
        h2 { 
            color: #2c3e50; 
            margin-bottom: 15px; 
            text-align: center;
        }
        .container {
            max-width: 750px; 
            margin: 40px auto;
            padding: 20px;
        }
        /* Header */
        .header {
            text-align: center;
            padding: 25px;
            background: linear-gradient(135deg, #3498db, #2ecc71);
            color: white;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .header h1 { margin: 0; font-size: 26px; }

        /* Card */
        .card {
            background: #fff; 
            border-radius: 12px; 
            padding: 25px; 
            margin-bottom: 25px;
            box-shadow: 0 6px 14px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-4px);
        }

        /* Input */
        label { font-weight: 600; }
        input[type=text], select, textarea {
            width: 100%; 
            padding: 12px; 
            margin: 6px 0 15px 0;
            border: 1px solid #ccc; 
            border-radius: 8px;
            transition: border 0.3s;
        }
        input[type=text]:focus, select:focus, textarea:focus {
            border-color: #3498db;
            outline: none;
        }
        input[type=radio], input[type=checkbox] {
            margin-right: 6px;
        }
        textarea { resize: vertical; }

        /* Button */
        input[type=submit] {
            background: #3498db; 
            color: #fff; 
            border: none; 
            padding: 12px 20px; 
            border-radius: 8px;
            cursor: pointer; 
            font-weight: 600;
            transition: background 0.3s, transform 0.2s;
        }
        input[type=submit]:hover {
            background: #2c80b4;
            transform: scale(1.05);
        }

        /* Table */
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td { 
            padding: 12px; 
            text-align: left;
        }
        th { 
            background: #3498db; 
            color: white; 
            font-weight: 600;
        }
        tr:nth-child(even) { background: #f9f9f9; }
        tr:hover { background: #f1f1f1; }

        /* Output box */
        .search-msg {
            background: #eaf4fc;
            border-left: 6px solid #3498db;
            padding: 14px;
            border-radius: 8px;
            margin-top: 15px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Kuis Pemrograman Web</h1>
            <p>Form Biodata & Pencarian Data</p>
        </div>

        <h2>Form Biodata Mahasiswa</h2>
        <div class="card">
            <form method="post">
                <label>Nama Lengkap:</label>
                <input type="text" name="nama" required>

                <label>NIM:</label>
                <input type="text" name="nim" required>

                <label>Program Studi:</label>
                <select name="prodi" required>
                    <option value="Informatika">Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                </select>

                <label>Jenis Kelamin:</label><br>
                <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
                <input type="radio" name="jk" value="Perempuan" required> Perempuan
                <br><br>

                <label>Hobi:</label><br>
                <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
                <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
                <input type="checkbox" name="hobi[]" value="Musik"> Musik
                <input type="checkbox" name="hobi[]" value="Gaming"> Gaming
                <br><br>

                <label>Alamat:</label>
                <textarea name="alamat" rows="3"></textarea>

                <input type="submit" value="Kirim Biodata">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama   = $_POST['nama'];
                $nim    = $_POST['nim'];
                $prodi  = $_POST['prodi'];
                $jk     = $_POST['jk'];
                $hobi   = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "-";
                $alamat = $_POST['alamat'];

                echo "<h3>Hasil Biodata</h3>";
                echo "<table>
                        <tr><th>Nama</th><td>$nama</td></tr>
                        <tr><th>NIM</th><td>$nim</td></tr>
                        <tr><th>Program Studi</th><td>$prodi</td></tr>
                        <tr><th>Jenis Kelamin</th><td>$jk</td></tr>
                        <tr><th>Hobi</th><td>$hobi</td></tr>
                        <tr><th>Alamat</th><td>$alamat</td></tr>
                      </table>";
            }
            ?>
        </div>

        <h2>Form Pencarian Data</h2>
        <div class="card">
            <form method="get">
                <label>Kata Kunci:</label>
                <input type="text" name="keyword" required>
                <input type="submit" value="Cari">
            </form>

            <?php
            if (isset($_GET['keyword'])) {
                $keyword = htmlspecialchars($_GET['keyword']);
                echo "<div class='search-msg'>Anda mencari data dengan kata kunci: <b>$keyword</b></div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
