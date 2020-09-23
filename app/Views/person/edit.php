<?= $this->extend('layout'); ?>

<?php $this->section('content'); ?>
<div class="container p-5 bg-white mt-5">
    <div class="container mb-3 d-flex justify-content-between p-2 border-bottom">
        <h4>Edit Person</h4>
        <a href="<?= base_url('person') ?>" class="btn btn-outline-danger">Kembali</a>
    </div>
    <form action="<?= base_url('person/update/' . $person['id']); ?>" method="post">

        <div class="form-group">
            <label for="">Nama Person</label>
            <input type="text" name="person_name" value="<?= $person['person_name']; ?>" class="form-control" placeholder="Nama Person">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" value="<?= $person['email']; ?>" class="form-control" placeholder="Nama Person">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" class="form-control" value="<?= $person['alamat']; ?>" placeholder="Alamat"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>