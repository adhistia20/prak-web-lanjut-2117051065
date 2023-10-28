<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
<div class="navbar">
    <a href="<?= base_url('home') ?>">Home</a>
    <a href="<?= base_url('list_user') ?>">User</a>
    <a href="<?= base_url('list_kelas') ?>">Kelas</a>
</div>
<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<form action="<?= base_url('user/' . $user['id']) ?>" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT">
<?= csrf_field() ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?= $user['nama'] ?>" id="nama" ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><select name="kelas" id="kelas">
                <?php
                foreach ($kelas as $item) {
                ?>
                    <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
                    <?= $item['nama_kelas'] ?>
                    </option>
                <?php
                }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td><input type="text" name="npm" value="<?= $user['npm'] ?>" id="npm" ?></td>
        </tr>
        <tr>
        <td style="text-align: center;">
        <input type="submit" value="Simpan"></td>
        </tr>
        <tr>
        <img src="<?= $user['foto'] ?? '<default-foto>' ?>">
        <input type='file' name='foto'  id='foto'/>
        </tr>
    </form>
    <?= $this->endSection() ?>

</body>
</html>