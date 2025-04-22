<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
</head>
<body>
    <h3>Form Mahasiswa</h3>
    <form action="#" method="post">
        @csrf
        <p>NIM</p>
        <input type="text" name="nim"><br>

        <p>Nama Lengkap</p>
        <input type="text" name="nama"><br>

        <p>Kelas</p>
        <input type="text" name="kelas"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
