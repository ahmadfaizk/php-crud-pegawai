<?php

require_once __DIR__.'/model/Pegawai.php';
$pegawai = new Pegawai();

switch ($_REQUEST['action']) {
    case 'new':
        $idDepartemen = $_REQUEST['id_departemen'];
        $nama = $_REQUEST['nama'];
        $tempatLahir = $_REQUEST['tempat_lahir'];
        $tglLahir = $_REQUEST['tgl_lahir'];
        $jenisKelamin = $_REQUEST['jenis_kelamin'];
        $alamat = $_REQUEST['alamat'];
        if ($pegawai->create($idDepartemen, $nama, $tempatLahir, $tglLahir, $jenisKelamin, $alamat)) {
            header('Location: list-pegawai.php');
        } else {
            die("Error Create Data");
        }
        break;
    case 'update':
        $id = $_REQUEST['id'];
        $idDepartemen = $_REQUEST['id_departemen'];
        $nama = $_REQUEST['nama'];
        $tempatLahir = $_REQUEST['tempat_lahir'];
        $tglLahir = $_REQUEST['tgl_lahir'];
        $jenisKelamin = $_REQUEST['jenis_kelamin'];
        $alamat = $_REQUEST['alamat'];
        if ($pegawai->update($id, $idDepartemen, $nama, $tempatLahir, $tglLahir, $jenisKelamin, $alamat)) {
            header('Location: list-pegawai.php');
        } else {
            die("Error Update Data");
        }
        break;
    case 'delete':
        $id = $_REQUEST['id'];
        if ($pegawai->delete($id)) {
            header('Location: list-pegawai.php');
        } else {
            die("Error Delete Data");
        }
        break;
    default:
        die('Action Error');
        break;
}