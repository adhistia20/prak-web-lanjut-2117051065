<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body> -->
<div class="navbar">
        <a href="list_kelas">List Kelas</a>
        <a href="list_user">List User</a>
    </div>
<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<form action="<?=base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><select name="kelas" id="kelas">
                <?php
                foreach ($kelas as $item) {
                ?>
                    <option value="<?= $item['id'] ?>">
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
            <td><input type="text" name="npm"></td>
        </tr>
        <tr>
        <td style="text-align: center;">
        <input type="submit" value="Simpan"></td>
        </tr>
        <tr>
        <input type='file' name='foto' />
        </tr>
    </form>
    <?= $this->endSection() ?>
<!-- 
</body>
</html> -->