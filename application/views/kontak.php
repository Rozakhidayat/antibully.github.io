<div class=" row justify-content-center">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                Kontak Kami
            </div>
            <div class="card-body">
                <form action="<?= base_url().'kontak/tambah';?>" method="post">
                <div class="form-group">
                <?= $this->session->flashdata('message')?>
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label for="kelas">email</label>
                    <input type="text" class="form-control" name="email" id="kelas">
                </div>
                <div class="form-group">
                    <label for="no_hp">No Hp</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Pesan</label>
                    <textarea class="form-control" name="pesan" rows="3" id="deksripsi"></textarea>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary float-right">Kirim</button>