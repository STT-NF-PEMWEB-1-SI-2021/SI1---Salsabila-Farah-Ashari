<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        h4{
            margin-left: 15px;
            margin-top: 15px;
        }

        form{
            margin: 80px 120px;
        }
        
    </style>

    <title>Form Nilai</title>
  </head>
  <body>

<!-- Navbar -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Sistem Penilaian</a>
    </nav>

    <!-- Header -->
    <h4>Form Nilai Siswa</h4>
    <hr/>

<div  class="container">
  <form method = "POST">
    <div class="form-group row">
        <label for="nama_lengkap" class="col-4 col-form-label"><b>Nama Lengkap</b></label> 
        <div class="col-8">
        <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label"><b>Mata Kuliah</b></label> 
        <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
            <option value="DDP">Dasar-Dasar Pemrograman</option>
            <option value="BDI">Basis Data 1</option>
            <option value="WEB1">Pemrograman Web</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai_uts" class="col-4 col-form-label"><b>Nilai UTS</b></label> 
        <div class="col-8">
        <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label"><b>Nilai UAS</b></label> 
        <div class="col-8">
        <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai_tugas" class="col-4 col-form-label"><b>Nilai Tugas/Praktikum</b></label> 
        <div class="col-8">
        <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </form>

<?php 
  include_once("libfungsi.php");
  $nama_lengkap = isset ($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
  $matkul = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
  $nilai_uts = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
  $nilai_uas = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
  $nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

  echo 'Nama Lengkap : '.$nama_lengkap;
  echo '<br/>Mata Kuliah : '.$matkul;
  echo '<br/>Nilai UTS : '.$nilai_uts;
  echo '<br/>Nilai UAS : '.$nilai_uas;
  echo '<br/>Nilai Tugas : '.$nilai_uas;
  $nilai_total = ((int)$nilai_uts+(int)$nilai_uas+(int)$nilai_tugas)/3;
  echo '<br/>Nilai Total : '.$nilai_total;
  $grade = grade($nilai_total);
  $predikat = predikat($grade);
  echo "<br/>Grade : ". $grade . " ". $predikat;
  $hasil = kelulusan($nilai_total);
  echo '<br/> Dinyatakan '.$hasil;
?>