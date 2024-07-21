<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Tooltip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles-nav.css"/>
    <style>
        /* Custom CSS for tooltip text alignment */
        .tooltip-inner {
            text-align: left;
        }
    </style>
</head>
<body>
    <nav class="nav-container">
        <nav class="nav nav-pills flex-column flex-sm-row">
            <a class="flex-sm-fill text-sm-center nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>

            <a class="flex-sm-fill text-sm-center nav-link {{ Request::is('fakultas') ? 'active' : '' }}" href="#" data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom" title="<ul style='padding-left: 15px;'><li>Bisnis</li><li>Vokasi</li><li>Informatika dan Pariwisata</li><li>Program PascaSarjana</li></ul>">Fakultas</a>

            <a class="flex-sm-fill text-sm-center nav-link {{ Request::is('fasilitas') ? 'active' : '' }}" href="#fasilitas">Fasilitas</a>

            <a class="flex-sm-fill text-sm-center nav-link {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">Tentang Kami</a>

            <a class="flex-sm-fill text-sm-center nav-link daftar-disini {{ Request::is('daftar') ? 'active' : '' }}" href="/daftar">Daftar disini</a>
        </nav>
    </nav>


<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script>
    // Inisialisasi semua tooltip di halaman ini
    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });
</script>
</body>
</html>
