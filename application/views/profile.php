
<h1 class="text-center">My profile</h1>
<div class="card mb-3 mx-auto" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <!-- Tambahkan class img-fluid agar gambar responsif -->
            <img src="<?= base_url('assets/img/profile/') . $user['image'];?>" alt="..." class="img-fluid "
            style="max-height: 100% ; object-fit:cover;" >
        </div>
        <div class="col-md-8">
            <div class="card-body" style="margin-bottom: 0;">
                <h5 class="card-title"><?= $user['nama'];?></h5>
                <p class="card-text"><?= $user['email'];?></</p>
                <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created'])?></small></p>
            </div>
        </div>
    </div>
</div>
