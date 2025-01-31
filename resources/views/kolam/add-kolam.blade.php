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
        <a href="/jenis-kolam" class="btn btn-outline-primary mb-4">
            <i class="bi bi-arrow-left"></i> Back
        </a>
        <section class="forms-container">
            <div class="form-section">
                <h2 class="pb-4 fw-bold">Tambah Kolam Baru</h2>
                <form class="input-form">
                    <div class="form-group">
                        <label for="itemName">Nama Kolam</label>
                        <input type="text" id="itemName" name="itemName" required />
                    </div>

                    <div class="form-group">
                        <label for="quantity">Jumlah</label>
                        <input type="number" id="quantity" name="quantity" min="0" required />
                    </div>
                    <button type="submit" class="btn-submit">Tambahkan Kolam</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
