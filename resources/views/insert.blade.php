<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <form action = "/Student/simpan" method= "POS">
        {{ csrf_field()}}
        Nama <input type= "Text" name="nama" required="required"> <br/> <br/>
        Alamat <input type= "Text" name="alamat" required="required"> <br/> <br/>
        Jurusan <input type= "Text" name="jurusan" required="required"> <br/> <br/>
        Telp <input type= "Text" name="no telp" required="required"> <br/> <br/>
        <input type= "submit" value="Simpen Data">
    </form>
</body>
</html>