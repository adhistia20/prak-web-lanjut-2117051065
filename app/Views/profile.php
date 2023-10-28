<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini halaman profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9967a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-container {
            background-color: #deb887;
            border-radius: 12px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 25px;
            margin: 25px;
            max-width: 300px;
            
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }
        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .profile-info {
            margin-top: 20px;
        }
        .profile-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-image">
            <img src="https://i.pinimg.com/236x/b7/2a/87/b72a87b7a89f91b3f1ae7350e01576cb.jpg" alt="Foto Profil">
        </div>
        <div class="profile-info">
        <tr> 
    <td>Nama</td>
    <td>:</td>
    <td><?= $nama ?></td>
</tr><p>
<tr> 
    <td>Kelas</td>
    <td>:</td>
    <td><?= $kelas ?></td>
</tr><p>
<tr> 
    <td>Npm</td>
    <td>:</td>
    <td><?= $npm ?></td>
</tr>
        </div>
    </div>
</body>
</html>
