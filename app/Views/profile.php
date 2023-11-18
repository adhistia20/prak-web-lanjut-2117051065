<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>profile</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
<form action="<?=base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
    <div class="profile-container">
    <div class="profile-image">
      <div class="img">
        <img src="<?= $user['foto'] ?? '<default-foto>' ?>" width="100%" height="100%" alt="">
    </div>
        <div class="profile-info"><?= $user['nama'] ?></div>
        <div class="profile-info"><?= $user['npm'] ?></div>
        <div class="profile-info"><?= $user['nama_kelas'] ?></div>
        </div>
    </div>

</form>
</body>
</html>