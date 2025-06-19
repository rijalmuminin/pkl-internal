<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Buku</h2>
    <form action="/buku/{{ $buku['id'] }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="judul" Value="{{ $buku['judul'] }}" required><br>
        <input type="number" name="harga" Value="{{ $buku['harga'] }}" required> <br>
        <select name="kategori" id="" required>
            <option>Pilih Kategori</option>
            <option value="Self Improvement" {{ $buku['kategori']=='Self Improvment'? 'selected' :'' }}> Self Improvement </option>
            <option value="Bacaan" {{ $buku['kategori']=='Bacaan'? 'selected' :'' }}>Bacaan</option>
            <option value="Teknologi" {{ $buku['kategori']=='Teknologi'? 'selected' :'' }}>Teknologi</option>
        </select> <br>
        <button type="submit">Simpan</button>
        <button type="reset">Refresh</button>
    </form>
</body>
</html>