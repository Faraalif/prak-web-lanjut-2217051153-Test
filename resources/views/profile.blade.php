<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Card</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #FFC0CB;
        }

        .profile-card {
            background-color: #f7f7f7;
            border-radius: 18px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            width: 380px;
            text-align: center;
            padding: 30px;
        }

        .profile-img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background-color: #ddd;
            margin: 0 auto 20px;
        }

        .profile-img img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .profile-info {
            margin-top: 15px;
        }

        .profile-info td {
            padding: 10px 0;
        }

        .profile-info td:first-child {
            font-weight: bold;
            color: black;
        }

        .profile-info td:nth-child(2) {
            padding: 0 12px;
        }

        .profile-info td:last-child {
            color: black;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <div class="profile-img">
            <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" alt="Profile Image">
        </div>
        <table action="{{ route('user.store') }}" method="POST" class="profile-info">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><?= $npm ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>{{$kelas_id ?? 'Kelas tidak ditemukan'}}</td>
            </tr>
        </table>
    </div>
</body>
</html>
