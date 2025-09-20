<!DOCTYPE html>
<html>
<head>
    <title>Data Matakuliah</title>
</head>
<body>
    <h1>Tambah Matakuliah</h1>
    <form method="POST" action="/matakuliah">
        @csrf
        <input type="text" name="matkul" placeholder="Matakuliah"><br>
        <input type="text" name="deskripsi" placeholder="Deskripsi"><br>
        <button type="submit">Simpan</button>
    </form>

    <h2>List matakuliah</h2>
    <ul>
        @foreach($data as $matakuliah)
            <li>{{ $matakuliah->matkul }} - {{ $matakuliah->deskripsi }}</li>
        @endforeach
    </ul>
</body>
</html>