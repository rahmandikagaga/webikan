<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda - Sistem Monitoring Perikanan</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}" />
</head>
<body>
    <header>
        <nav>
            <div class="logo">Aplikasi Monitoring Perikanan</div>
            <ul class="nav-links">
                <li><a href="/" >Beranda</a></li>
                <li><a href="/jenis-ikan" class="active">Jenis Ikan</a></li>
                <li><a href="/jenis-kolam">Jenis Kolam</a></li>
                <li><a href="/pemanenan">Pemanenan</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="content">
            <h2>Daftar Jenis Ikan</h2>

            <a href="/tambah-ikan" class="btn-primary">Tambah Baru</a>

            <table style="margin-top: 30px">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Tanggal Penebaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ikan pindang</td>
                        <td>Bioflok</td>
                        <td>4</td>
                        <td>2024-01-15</td>
                        <td>
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Hapus</button>
                        </td>
                    </tr>

                    <!-- Tambahkan baris contoh lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
