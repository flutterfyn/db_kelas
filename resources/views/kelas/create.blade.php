<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kelas</title>
</head>
<body>

<h2>Tambah Kelas</h2>

<form action="{{ route('kelas.store') }}" method="POST">
    @csrf

    <label>Nama Kelas</label><br>
    <input type="text" name="nama_kelas"><br><br>

    <label>Kompetensi Keahlian</label><br>
    <input type="text" name="kompetensi_keahlian"><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>
