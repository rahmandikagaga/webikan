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
                <li><a href="/jenis-ikan">Jenis Ikan</a></li>
                <li><a href="/jenis-kolam"class="active">Jenis Kolam</a></li>
                <li><a href="/pemanenan">Pemanenan</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="content">
            <h2>Daftar Jenis Kolam</h2>

            <a href="/add-kolam" class="btn-primary">Tambah Baru</a>

            <table style="margin-top: 30px">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jumlah Kolam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kolams as $kolam)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kolam->nama }}</td>
                            <td>{{ $kolam->jumlah }}</td>
                            <td>
                                <!-- Tombol Edit -->
                                <a href="{{ url('/update-kolam/'.$kolam->id) }}" class="btn-edit">Edit</a>

                                <!-- Tombol Delete (dalam form) -->
                                <form action="{{ url('/delete-kolam/'.$kolam->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn-delete" onclick="return confirm('Yakin ingin menghapus kolam ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
