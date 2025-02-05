<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magis-TBI</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: white;
        }
        .container {
            display: flex;
            align-items: center;
            background: white;
            border: 5px solid black;
            padding: 20px;
            position: relative;
            width: 80%;
            max-width: 900px;
        }
        .logo {
            flex: 1;
            text-align: center;
        }
        .separator {
            width: 2px;
            background-color: #0056b3;
            height: 80px;
        }
        .bottom-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 20px;
            background-color: #0056b3;
        }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="img/LOGO%20DOST-PCIEERD.jpg" alt="Logo 1">
        </div>
        <div class="separator"></div>
        <div class="logo">
            <img src="img/LOGO%20HEI.png" alt="Logo 2">
        </div>
        <div class="logo">
            <img src="img/LOGO%20Magis%20TBI.jpg" alt="Logo 3">
        </div>
        <div class="bottom-bar"></div>
    </div>
</body>
</html>
