<?php
     $nama_siswa = $_POST['nama'];
     $mata_kuliah = $_POST['matkul'];
     $nilai_uts = $_POST['nilaiuts'];
     $nilai_uas = $_POST['nilaiuas'];
     $nilai_tugas = $_POST['nilaitugas'];
    
     if(!empty($nama_siswa)) {
     echo '<br/>Nama : '.$nama_siswa;
     echo '<br/>Mata Kuliah : '.$mata_kuliah;
     echo '<br/>Nilai UTS : '.$nilai_uts;
     echo '<br/>Nilai UAS : '.$nilai_uas;
     echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
     }
    ?>