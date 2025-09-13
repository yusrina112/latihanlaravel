<!DOCTYPE html>
<html>
    <head>
        <title>Data Kelas</title>
    </head>
    <body>
    <h1>Tambah Kelas</h1>
    <form method="POST" action="/kelas">
        @csrf
        <input type="text" name="nama_kelas" placeholder="Nama Kelas"><br>
        <input type="text" name="kapasitas" placeholder="Kapasitas"><br>
        <button type="submit">Simpan</button>
    </form>

    <h2>List Kelas</h2>
    <ul>
        @foreach($data as $kelas)
            <li>{{ $kelas->nama_kelas }} - {{ $kelas->kapasitas }}</li>
        @endforeach
    </ul>
</body>
</html>