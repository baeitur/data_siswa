<?= $this->extend('layout/index'); ?>

<?= $this->section('isi'); ?>

<?php //dd($data_siswa);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <a href="<?= base_url(); ?>/data_siswa/add" class="btn btn-danger btn-icon-split mb-4">
        <span class="icon text-white-50">
            <i class="fas fa-save"></i>
        </span>
        <span class="text">Tambah Data Siswa</span>
    </a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i; ?>
                        <?php foreach ($data_siswa as $d) : ?>
                            <tr>
                                <td></td>
                                <td><?= $d['nis'] ?></td>
                                <td><?= $d['nama_siswa'] ?></td>
                                <td><?= $d['jenis_kelamin'] ?></td>
                                <td><?= $d['tgl_lahir'] ?></td>
                                <td><?= $d['alamat'] ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>/data_siswa/delete/<?= $d['id'] ?>" onclick="return confirm('apakah anda yakin untuk di hapus.?')" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>