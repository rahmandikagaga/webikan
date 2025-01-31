<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Beranda - Sistem Manajemen Inventaris</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/forms.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/tables.css') }}" />
        <style>
            .no-decoration {
              text-decoration: none;
              color: #000;
            }
        </style>

    </head>
    <body>
    <header>
        <nav>
            <div class="logo">Aplikasi Monitoring Perikanan</div>
            <ul class="nav-links">
                <li><a href="/" class="active">Beranda</a></li>
                <li><a href="/jenis-ikan">Jenis Ikan</a></li>
                <li><a href="/jenis-kolam">Jenis Kolam</a></li>
                <li><a href="/pemanenan">Pemanenan</a></li>
            </ul>
          </nav>

    </header>

    <main>
        <section class="hero">
            <h1>Selamat Datang di Website Monitoring Perikanan</h1>
            <p>Memonitoring sistem budidaya ikan.</p>
        </section>

        <section class="features">
        <div class="feature-card">
            <a href="/jenis-kolam" class="no-decoration">
                <h3>Jenis Kolam</h3>
                <p>Jenis kolam yang digunakan selama budidaya.</p>
            </a>
        </div>
        <div class="feature-card">
            <a href="/jenis-ikan" class="no-decoration">
                <h3>Jenis Ikan</h3>
                <p>Jenis ikan yang saat ini dibudidayakan.</p>
            </a>
        </div>
        <div class="feature-card">
            <a href="/pemanenan" class="no-decoration">
                <h3>Pemanenan</h3>
                <p>Prediksi dan tanggal panen.</p>
            </a>
        </div>
        </section>
    </main>
    </body>
</html>
