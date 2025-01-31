<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Baru - Sistem Manajemen Inventaris</title>
    <link rel="stylesheet" href="../../css/styles.css" />
    <link rel="stylesheet" href="../../css/layout.css" />
    <link rel="stylesheet" href="../../css/forms.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <div class="logo">Aplikasi Monitoring Perikanan</div>
        </nav>
    </header>

    <main>
        <a href="/jenis-ikan" class="btn btn-outline-primary mb-4">
            <i class="bi bi-arrow-left"></i> Back
        </a>
        <section class="forms-container">
            <div class="form-section">
                <h2 class="fw-bold pb-4">Tambah Ikan</h2>
                <form action="" method="POST">
                    @csrf {{-- Token keamanan Laravel --}}

                    <div class="form-group">
                        <label for="nama">Jenis Ikan</label>
                        <input type="text" id="nama" name="nama" required />
                    </div>

                    <div class="form-group">
                        <label for="kategori">Jenis Kolam</label>
                        <select id="kategori" name="kategori" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Kolam Tanah">Kolam Tanah</option>
                            <option value="Kolam Terpal">Kolam Terpal</option>
                            <option value="Bioflok">Bioflok</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" id="jumlah" name="jumlah" min="0" required />
                    </div>

                    <div class="form-group">
                        <label for="tanggal_penebaran">Tanggal Penebaran</label>
                        <input type="date" id="tanggal_penebaran" name="tanggal_penebaran" required />
                    </div>

                    <button type="submit" class="btn-submit mt-4">Tambahkan</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
