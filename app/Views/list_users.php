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
            <th>NAMA</th>
            <th>NPM</th>
            <th>KELAS</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user){
        ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td>
                <a href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
                <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>">Edit</a>
                <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <?= csrf_field() ?>
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
<?= $this->endSection() ?>