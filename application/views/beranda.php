<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/style.css">
</head>
<body>
    <header class="ob">
    <div class="atas">
    <div id="logo"><img style="width: 127px;margin-left: 40px;float: left;"
    src="<?=base_url()?>assets/logo.png" alt=""></div>
    <nav>
    <ul>
    <li> <a href="<?=base_url()?>index.php/welcome/utama"> Home </a></li>
    <li> <a href="<?=base_url()?>index.php/welcome/event"> Event </a> </li>
    <li> <a href="<?=base_url()?>index.php/welcome/gallery"> Gallery </a></li>
    <li> <a href="<?=base_url()?>index.php/welcome/contact"> Contact </a></li>
    <li> <a href="<?=base_url()?>index.php/welcome/profil"> MyProfil </a></li>
    </ul>
    </nav>
    </div>
    </header>
    <div class="bodyhtml">
    <h1 class="judul" align="center" style="color:white;text-align: left;font-size: 10.3mm;margin-top: 97px; margin-left: 12px; font-family: sans-serif;">Selamat Datang <?= $nama_lengkap?>
    <br> Anda bergabung dengan club motor di <?= $jenis_kelamin?></h1>

    <p >Mari bergabung bersama kami, kita galang persaudaraan sesama Honda mania.</p>
    <img style="width: 823px;margin-left: 518px;margin-top: -312px;}" src="assets/back.png" alt="">
    </div>

</body>
</html>