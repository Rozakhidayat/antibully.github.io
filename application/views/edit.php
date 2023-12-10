<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Laporan Siswa</title>
</head>
<body>

<div class="content-wrapper">
    <section class="content">
        <?php foreach ($kelola as $kla) { ?>
            <form action="<?= base_url() . 'kelola/update'; ?>" method="post">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" name="id" class="form-control" value="<?= $kla->id ?>">
                    <input type="text" name="nama" class="form-control" value="<?= $kla->nama ?>">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" name="kelas" class="form-control" value="<?= $kla->kelas ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?= $kla->alamat ?>">
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="no_hp" class="form-control" value="<?= $kla->no_hp ?>">
                </div>
                <div class="form-group">
                    <label>Tanggal Kejadian</label>
                    <input type="date" name="tgl_kejadian" class="form-control" value="<?= $kla->tgl_kejadian ?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="<?= $kla->deskripsi ?>">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        <?php } ?>
    </section>
</div>

</body>
</html>
