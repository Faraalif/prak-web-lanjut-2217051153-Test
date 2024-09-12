<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?= htmlspecialchars($kelas, ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td><?= htmlspecialchars($npm, ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
    </table>
</body>
</html>