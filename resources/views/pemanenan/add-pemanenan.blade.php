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
        <a href="/pemanenan" class="btn btn-outline-primary mb-4">
            <i class="bi bi-arrow-left"></i> Back
        </a>
        <section class="forms-container">
            <div class="form-section">
                <h2 class="fw-bold pb-4">Jadwalkan Pemanenan</h2>
                <form class="input-form">
                    <div class="form-group">
                        <label for="category">Jenis Kolam</label>
                        <select id="category" name="category" required>
                            <option value="">Pilih Kategori</option>
                            <option value="1">Elektronik</option>
                            <option value="2">Furnitur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="itemName">Jenis Ikan</label>
                        <input type="text" id="itemName" name="itemName" required />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Jumlah</label>
                        <input type="number" id="quantity" name="quantity" min="0" required />
                    </div>
                    <div class="form-group">
                        <label for="dateAdded">Tanggal Panen</label>
                        <input type="date" id="dateAdded" name="dateAdded" required />
                    </div>
                    <button type="submit" class="btn-submit">Tambahkan Barang</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
