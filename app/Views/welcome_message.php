<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<div class="container bg-white p-5 m-5">
	<ul class="list-group">
		<li class="list-group-item active">
			<h1 class="text-center">Aplikasi CRUD Person sederhana</h1>
		</li>
		<li class="list-group-item">Dibuat oleh : <b>Urffan Fadillah</b></li>
		<li class="list-group-item">Bahasa Pemrograman/Framework : <b>PHP/CodeIgniter</b></li>
		<li class="list-group-item">Versi PHP : <b>7.3.2</b></li>
		<li class="list-group-item">Versi CodeIgniter : <b>4.0.4</b></li>
		<li class="list-group-item">CSS Framework : <b>Bootstrap 4.5.2</b></li>
		<li class="list-group-item">DBMS : <b>phpmyadmin</b></li>
		<li class="list-group-item">Database Name : <b>latihan_crud</b></li>
	</ul>
	<div class="ml-auto mt-4">
		<a href="<?= base_url('person') ?>" class="btn btn-outline-success">Masuk ke aplikasi CRUD Person</a>
	</div>
</div>
<?= $this->endSection(); ?>