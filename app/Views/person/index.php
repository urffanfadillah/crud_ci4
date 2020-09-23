<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<!-- content-->
<div class="container bg-white rounded shadow mb-3">
    <h1 class="text-center mt-5 px-5 py-3">PERSON CRUD</h1>
</div>
<div class="container mb-5 border-bottom py-4">
    <a href="<?= base_url('person/create') ?>" class="btn btn-outline-primary btn-lg">[+] Create a Person</a>
</div>
<div class="container">
    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif ?>

    <?php if (!empty(session()->getFlashdata('info'))) : ?>
        <div class="alert alert-info">
            <?= session()->getFlashdata('info') ?>
        </div>
    <?php endif ?>

    <?php if (!empty(session()->getFlashdata('warning'))) : ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('warning') ?>
        </div>
    <?php endif ?>
</div>
<!-- list person -->
<div class="container">
    <div class="col">
        <div class="row">
            <?php foreach ($person as $key => $data) : ?>
                <div class="card shadow  mx-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= "#" ?><?= $key + 1 ?> <span><?= $data['person_name'] ?></span>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $data['email'] ?></h6>
                        <p class="card-text"><?= $data['alamat'] ?></p>
                        <a href="<?= base_url('person/edit/' . $data['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="<?= base_url('person/delete/' . $data['id']) ?>" class="btn btn-danger btn-sm" onclick="alert('Apakah anda yakin mau hapus <?= $data['person_name'] ?>?');">Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>