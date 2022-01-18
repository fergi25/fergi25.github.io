<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="wrapper">
            <div class="logo">
                <h1><a href=""><span>Mobile</span>Shop</a></h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="Belanja.php">Belanja</a></li>
                    <li class="active"><a href="#">Chart</a></li>
                    <li><a href="buku_tamu.php">Buku Tamu</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header -->
    <div class="pemesanan">
        <h2>FORM PEMESANAN</h2>
        <div class="frame">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div>
                <label>Nama Barang</label>
                </div>
                <div>
                    <input type="text" name="fnama">
                </div>
                <br>
                <div>
                    <label>Jumlah</label>
                </div>
                <div>
                    <input type="email" name="femail">
                </div>
                <br>
                <div>
                    <label>No HP</label>
                </div>
                <div>
                    <input type="angka" name="fnohp">
                </div>
                <br>
                <div>
                    <label>Alamat</label>
                </div>
                <div>
                    <textarea name="fpesan" style="height: 64px"></textarea>
                </div>
                <button onClick="myButton()" type="submit" name="submit">Kirim</button>
                <p id="demo"></p>
            </form>
        </div>
        <br><br>
    </div>
        <!-- Footer -->
        <div class="footer">
        <p>Fergi Putra Abiansa. &copy; 2022. All Right Reserved</p>
    </div>
    <!-- End Footer -->

</body>
</html>