<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="table-container">
 <table class="content-table">
<body>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <thead>
    <a href="<?= base_url('/profile/create') ?>">Tambah Data</a>
        <tr>
            <th>ID</th>
            <th>Kelas</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user){
        ?>
        <tr>
         <td><?= $kelas['id'] ?></td>
            <td><?= $kelas['nama_kelas'] ?></td>
            <td>
            <div class="aksi d-flex justify-content-center align-items-center">
            <a href="<?= base_url('/kelas/' . $kelas['id'] . '/edit') ?>" class="btn btn-primary me-2">Edit</a>
            <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="post">
                <input type="hidden" name="_method" value="DELETE">
                    <?= csrf_field() ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
            </td>  
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
<?= $this->endSection() ?>
