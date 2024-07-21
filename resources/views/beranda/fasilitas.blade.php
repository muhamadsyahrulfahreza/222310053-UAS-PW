<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultas</title>
    <link rel="stylesheet" href="{{ asset('css/styles-fasilitas.css') }}">
</head>
<body>
    <section>
        <div id="fasilitas" class="fasilitas-container">
            <div class="text-container">
                <h1><i>Fasilitas</i></h1>
                <p>IBI Kesatuan</p>
                <p2><i>Swipe right untuk fasilitas lainnya</i></p2>
            </div>
            <div class="image-container">
                <div class="image-scroll-wrapper">
                    <figure>
                        <img src="{{ asset('images/Perpustakaan.png') }}" alt="Perpustakaan">
                        <figcaption>Perpustakaan</figcaption>
                    </figure>
                    <figure>
                        <img src="{{ asset('images/BankMini.png') }}" alt="Bank mini">
                        <figcaption>Bank mini</figcaption>
                    </figure>
                    <figure>
                        <img src="{{ asset('images/LabKomputer.png') }}" alt="Lab Komputer">
                        <figcaption>Lab Komputer</figcaption>
                    </figure>
                    <figure>
                        <img src="{{ asset('images/Ruang.png') }}" alt="Ruang Kelas">
                        <figcaption>Ruang Kelas</figcaption>
                    </figure>
                    <figure>
                        <img src="{{ asset('images/StandingMachine.png') }}" alt="Vanding Machine">
                        <figcaption>Vanding Machine</figcaption>
                    </figure>
                    <figure>
                        <img src="{{ asset('images/ATM.png') }}" alt="Mesin ATM">
                        <figcaption>Mesin ATM</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
