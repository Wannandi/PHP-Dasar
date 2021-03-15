
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
</head>
<body>
    <h1>Form Nilai Siswa</h1>
    <hr>
    </br>
    </br>
    <form  method="POST" action="array_siswa.php">
    Nama Lengkap  <input type="text"name="nama">
    <br/>
    </br>
    Mata Kuliah 
        <select name="matkul">
        <option value="DDP">Dasar-Dasar pemrograman</option>
        <option value="BD">Basis Data</option>
        <option value="WEB">Pemrograman Web</option></select>
        </br>
        </br>
    Nilai UTS<input type="text"name="nilaiuts">
    <br/>
    </br>
    Nilai UAS<input type="text"name="nilaiuas">
    <br/>
    </br>
    Nilai Tugas/Praktikum <input type="text" name="nilaitugas">
    <br/>
    </br>
     <input type="submit" value="Simpan">
    </form>

</body>
</html>


