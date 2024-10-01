<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stylish Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #FFC0CB 0%, #FF69B4 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #f7f7f7;
            padding: 50px;
            border-radius: 18px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #FF69B4;
        }

        label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, select:focus {
            border-color: #FF69B4;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #FF69B4;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #e0549e;
        }

        button:active {
            background-color: #c84786;
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 30px;
            }
            h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>FORM</h2>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <label for="name">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Masukan nama anda" required>
            
            <label for="npm">NPM</label>
            <input type="text" name="npm" id="npm" placeholder="Masukan NPM anda" required>
            
            <label for="id_kelas">Kelas</label>
            <select name="kelas_id" id="kelas_id" required>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>     

            <button type="submit">Kirim</button>
        </form>
        
    </div>
</body>
</html>
