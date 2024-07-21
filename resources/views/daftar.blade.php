<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/daftar-styles/style-daftar.css"/>
</head>
<body>
    <nav class="navigation-container">
        <ul class="nav nav-underline">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#download">Download</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#beasiswa">Beasiswa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#regist-online">Register Online</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#regist-onsite">Register Onsite</a>
            </li>
        </ul>
    </nav>

    <section>
        <div id="download" class="welcome-section">
            <h1><i class="header-purple">Informasi Sistem Pendaftaran Mahasiswa Baru</i></h1>
            <h2>2024/2025</h2>
            <button class="btn-container">Download Aplikasi</button>
        </div>
    </section>

    <div id="beasiswa" class="beasiswa-container">
        <div class="beasiswa-text-container">
            <p><i>Jalur Beasiswa</i></p>
            <p2><i>IBI Kesatuan</i></p2>
        </div>
        <div class="img-container">
            <img src="{{ asset('images/jalur-beasiswa.png')}}" alt="Panduan Beasiswa Unggulan">
        </div>
    </div>

    <div id="regist-online" class="online-container">
        <div class="text-container">
        <h1><i>Register Online</i></h1>
        <div class="box-container">
            <p>Alur Pendaftaran Online</p>
            <p>Berikut adalah alur pendaftaran online</p>
            <ol>
                <li>Calon peserta mahasiswa baru membuat akun pada aplikasi PMB</li>
                <li>Calon peserta mahasiswa baru melakukan aktivasi akun</li>
                <li>Calon peserta mahasiswa baru login ke akun</li>
                <li>Calon peserta mahasiswa baru mengisi data diri</li>
                <li>Calon peserta mahasiswa baru melakukan pembelian token</li>
                <li>Calon peserta mahasiswa baru melakukan validasi token</li>
                <li>Calon peserta mahasiswa baru melakukan upload nilai</li>
                <li>Calon peserta mahasiswa baru memilih prodi</li>
                <li>Calon peserta mahasiswa baru mencetak kartu peserta</li>
                <li>Calon peserta mahasiswa baru <i style={{"color:red"}}>Download aplikasi RegistChatIbik
                    (untuk informasi tahapan lebih lanjut)</i></> </li>
            </ol>
        </div>
        </div>
    </div>

    <div id="regist-onsite" class="beasiswa-container">
        <div class="beasiswa-text-container">
            <p><i>Register Online</i></p>
        </div>
        <div class="img-container">
            <img src="{{ asset('images/Register-onsite.png')}}" alt="Panduan Register Onsite">
        </div>
    </div>

    @include('beranda.lokasi')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
