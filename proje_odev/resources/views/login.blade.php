<!DOCTYPE html>

<html lang="en">


<html>
<head>
    <title>
        login
    </title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <title>Evcil Hayvan Sahiplen</title>
</head>
<body>
<div class="petcil_line">
    <a><h1 style="color: aliceblue;">Evcil Hayvan Sahiplen</h1></a>
</div>
<div id="ust">
    <div id="tasiyici">
        <a title="evcilhayvan">
            <img class="logo" src="{{ asset('images/png-clipart-computer-icons-pet-friendly-hotels-paw-animal-icons-pet-paw (2).png') }}" >
        </a>
        <div id="menu">
            <ul class="navbar">
                <li><a href="/">Anasayfa</a></li>
                <li><a href="/ilan">İlanlar</a></li>
                <li><a href="/sorular">Sorular</a></li>
            </ul>
        </div>
        <div id="login">
            <a class="yesil" href="/giris" rel="nofollow" ><img src="{{ asset('images/loginss.webp') }}" alt="Logo"><span>Giriş Yap</span></a>
        </div>
    </div>
</div>
<div id="resim">
    <img src="{{ asset('images/pets.webp') }}" alt="Logo"><img src="pets.webp" alt="" srcset="">
</div>
<div id="arkaplan">
    <div id="tablo">
        <div id="loginyazisi">
            <h1>Üye Girişi</h1>
        </div>
        <form action="#" method="post" id="formlar" name="kayit">
            <input type="email" name="mail_adresi" id="e_mail" placeholder="E-posta" >
            <br>
            <br>
            <input type="password" name="şifre" id="sifre" placeholder="Şifre" >
            <br><br>
            <input type="submit" name="buton" id="girisbuton" placeholder="girsyap" value="Giriş" style="border-radius: 25px;">
        </form>

    </div>
</div>


</body>


</html>
