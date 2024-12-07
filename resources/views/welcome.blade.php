<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        
        .container {
            background-color: #87A2FF;
            border: 1px solid #ccc;
            border-radius: 8px;
            text-align: center;
            padding: 30px;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        
        h1 {
            font-size: 32px;
            color: #00224D;
            margin-bottom: 10px;
        }

        
        .nim {
            font-size: 20px;
            color: #FF0080;
            margin-bottom: 5px;
            font-weight: bold;
        }

        
        .kelas {
            font-size: 24px;
            color: #e67e22;
            font-weight: bold;
            margin-bottom: 20px;
        }

        
        .btn {
            text-decoration: none;
            padding: 10px 20px;
            font-size: 15px;
            border: 1px solid #666;
            background-color: #C4D7FF;
            color: #00224D;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #FFF4B5;
        }

        /* Credit */
        .credit {
            margin-top: 20px;
            font-size: 14px;
            color: #e67e22;
        }

        .credit span {
            color: #00224D;
            font-weight: bold;
        }

        .credit a {
            color: #3498db;
            text-decoration: none;
            color: #FF0080;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang</h1>
        <div class="buttons">
            <a href="/daftar" class="btn">Daftar</a>
            <a href="/login" class="btn">Login</a>
        </div>
        <div class="credit">
            Created by <span>Lisa Amanda</span>, MI22A, 
            <a href="mailto:lisaamanda0220@gmail.com">2257401085</a>
        </div>
    </div>
</body>
</html>
