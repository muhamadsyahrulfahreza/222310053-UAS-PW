<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang IBI Kesatuan</title>
    <link rel="stylesheet" href="css/tentang-styles/style-tentang.css">
</head>
<body>
    @include('layouts.nav.nav')

    <section>
        <div class="welcome-section">
            <h1>Tentang IBI Kesatuan</h1>
        </div>
    </section>

    <div class="pilihan-container">
        <div>
            <a class="klik-action" href="#sejarah">01 Sejarah</a>
        </div>
        <div>
            <a class="klik-action" href="#VisiMisi">02 Visi Misi</a>
        </div>
        <div>
            <a class="klik-action" href="#peta">03 Peta Lokasi</a>
        </div>
    </div>

    <div id="sejarah" class="sejarah-container">
        <h1><i>Sejarah</i></h1>
        <div class="sejarah-content">
            <img src="{{ asset('images/sejarah.png')}}" alt="Bangunan IBI Kesatuan dahulu">
            <p>The Foundation of Kesatuan which was established by notarial deed Mr. Sie Kwan Djioe dated September 26, 1953 as the Legal Entity Founder and Organizer of the Academy Management of Kesatuan, Bogor.
                Then in 1974 it developed into the Academy Management of Kesatuan (AMK) with 2 (two) Study Programs namely D3 Financial and Banking Management and D3 Marketing Management.
                Then in 1996 the Foundation of Kesatuan established the Higher School of Economics Kesatuan of Economics (STIE), with 2 Undergraduate Study Programs and 1 Diploma 3 Study Program, namely Management Degree 1, Accounting Degree 1, Accounting Diploma 3, with Establishment Decree Number 42/D/O/ 1996 dated July 17, 1996. In 2009, AMK was united under the auspices of the STIE Kesatuan and in 2019, the STIE Kesatuan changed to the Institute of Business and Informatics of Kesatuan (IBI Kesatuan).
            </p>
        </div>
        <button>Selengkapnya</button>
    </div>

    <div class="visikontak-container">
    <div id="VisiMisi">
        <div>
            <h1>Visi Misi</h1>
            <p style={{"color:#393c78"}}>Visi</p>
            <p>“PADA TAHUN 2039 MENJADI PERGURUAN TINGGI YANG UNGGUL DAN BERKUALITAS DI BIDANG BISNIS, INFORMATIKA DAN PARIWISATA DI TINGKAT INTERNASIONAL”</p>
            <p style={{"color:#393c78"}}>Misi</p>
            <p>Dalam mewujudkan visi tersebut, Institut Bisnis dan Informatika Kesatuan akan melaksanakan beberapa kegiatan yang disebut sebagai misi. Misi Institut Bisnis dan Informatika Kesatuan adalah :
                Menyelenggarakan proses pendidikan dan pengajaran berkualitas berdasarkan Standar Mutu Nasional dan Internasional;
                Menyelenggarakan kegiatan kajian, penelitian dan produk-produk/jasa intelektual bernilai ekonomi (intellectual economic value products);
                Melaksanakan kegiatan pelayanan dan pengabdian kepada masyarakat untuk mengembangkan kesejahteraan dan kemajuan bangsa Indonesia</p>
        </div>
    </div>

        <div class="contact-info">
            <p>E-MAIL: Kelompok2@gmail.com</p>
            <p>TELEPON: +62 8387326328</p>
            <p>WHATSAPP: +67 8376832873298</p>
        </div>
    </div>

    <div id="peta">
        @include('beranda.lokasi')
    </div>
</body>
</html>
