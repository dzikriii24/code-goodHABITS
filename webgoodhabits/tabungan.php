<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>goodHABITS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <style>
         #search:hover {
            background-color: skyblue;
            transition: ease-in-out;
            transition-delay: 300ms;
            cursor: pointer;
        }
        #menu:hover {
            background-color: #f8f6f4;
            border-radius: 10px;
            transition: ease-in-out;
            transition-delay: 100ms;
        }
        #sv1:hover {
            background-color: skyblue;
            transition: ease-in-out;
            transition-delay: 300ms;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        #sv-rndm:hover{
            border:0.5px solid black ;
            border-right: none;
            border-left: none;
            border-radius: 15px;
            color: white;
            font-weight: bold;
        }
        #tabung:hover {
            background-color: skyblue;
            transition: ease-in-out;
            transition-delay: 200ms;
            cursor: pointer;


        }
        #link-a {
            color: black;
            text-decoration: none;

        }
        #datesv:hover {
            border: 0.5px solid white;
            border-right: none;
            border-left: none;
            border-radius: 5px;
        }


    </style>
    <div class="navbar">
        <a href="index.php"><img src="img/menu.png" alt="" id="menu"></a>
        <p id="logo">goodHABITS <br> make your life better</p>
        <input type="text" placeholder="what you need right now?" id="search">
        <a href=""><img src="img/search-interface-symbol.png" alt="" id="search2"></a>
    </div>
    <div class="save-money">
        <h2 id="jubes">Tabungan digitalmu</h2>
        <br>
        <p id="p1">Gunakan fitur ini untuk mengelola tabunganmu dirumah</p>
        <br><br>

        <p id="p2">Tanggal menabung</p>
        <br>
         <input type="date" id="datesv">
         <br><br><br><br>
         <h3 id="jubes-2">Nominal Tabungan</h3>
    </div>
    <div class="min-sv">
        <p id="sv1">Rp10.000</p>
        <p id="sv1">Rp25.000</p>
        <p id="sv1">Rp50.000</p>
    </div>
    <div class="min-sv2">
        <p id="sv1">Rp70.000</p>
        <p id="sv1">Rp100.000</p>
        <p id="sv1">Rp120.000</p>
    </div>
    <div class="new-sv">
        <br><br>
        <input type="text" placeholder="Lainnya" id="sv-rndm">
        <br><br>
        <button id="tabung">Tabung</button>
        <br><br>
        <p id="chek">Cek tabungan anda <a href="saldotab.php" id="link-a" >disini</a></p>
    </div>
    </div>

</body>
</html>