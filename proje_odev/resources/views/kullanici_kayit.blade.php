<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/kayit_ol.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tablo.css') }}">
    <title>Evcil Hayvan Sahip Ol</title>
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
            <a class="yesil" href="/giris" rel="nofollow" ><img src="{{ asset('images/loginss.webp') }}"><span>Giriş Yap</span></a>
        </div>
    </div>
</div>
<div id="orta">
    <div id="kayit_ol_yazi">
        <h5>KAYIT OL</h5>
    </div>
    <form name="form" method="post">
        <div class="baslik"><h5>Kişisel bilgiler</h5></div>
        <div class="satir"><ul>Ad :</ul><input name="ad" type="text"><span>Lütfen gerçek adınızı yazın.</span></div>
        <div class="satir"><ul>Soyad :</ul><input name="soyad" type="text"><span>Gerçek soyadı bilgileri yazınız.</span></div>
        <div class="satir"><ul>Cinsiyet :</ul>
            <select name="cinsiyet">
                <option value="0"></option>
                <option value="1">Bay</option>
                <option value="2">Bayan</option>
            </select>
            <span>Size nasıl hitap edelim?</span>
        </div>
        <div class="satir">
            <ul>Şehir :</ul>
            <select class="konumbul il" name="il" rel="il">
                <option value="0"></option>
                <option value="1">ADANA</option>
                <option value="2">ADIYAMAN</option>
            </select>
        </div>
        <div class="baslik"><h5>Üyelik bilgileri</h5></div>
        <div class="satir"><ul>Kullanıcı adı</ul><input name="rumuz" type="text"><span>Üye girişinde kullanacağınız takma ad.</span></div>
        <div class="satir"><ul>Şifre :</ul><input name="sifre" type="password"></div>
        <div class="satir"><ul>Şifre (tekrar) :</ul><input name="sifre2" type="password"><span>Şifrenizi tekrar yazın.</span></div>
        <div class="baslik"><h5>İletişim</h5></div>
        <div class="satir"><ul>E-mail :</ul><input name="mail" type="text"><span>Kullandığınız bir mail adresi olmalıdır.</span></div>
        <div class="satir">
            <button type="submit" class="kayit">KAYIT OL</button>
        </div>
    </form>
</div>
<div id="sag">
    <div class="bilgiler">
        <h5>ZATEN KAYITLI MISIN?</h5>
        <ul><a href="">GİRİŞ YAP</a></ul>
        <ul><a class="sifremi_unuttum">BİLGİLERİ UNUTTUM</a></ul>
    </div>
</div>

</body>
</html>
