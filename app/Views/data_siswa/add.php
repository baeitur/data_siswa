<?= $this->extend('layout/index'); ?>

<?= $this->section('isi'); ?>

<?php //dd($data_siswa);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Form Tambah Data Siswa</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url() ?>/data_siswa/simpan" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nis')) ? 'is-invalid' : ''; ?>" id="nis" name="nis" value="<?= old('nis'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nis'); ?>
                    </div>
                </div>


                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_siswa')) ? 'is-invalid' : ''; ?>" id="nama_siswa" name="nama_siswa" value="<?= old('nama_siswa'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_siswa'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="jenis_Kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" name="jenis_kelamin" value="<?= old('jenis_kelamin'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('jenis_kelamin'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" id="tempat_lahir" name="tempat_lahir" value="<?= old('tempat_lahir'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tempat_lahir'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tgl">Tanggal Lahir</label>
                    <input type="date" class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" id="tgl" name="tgl_lahir" value="<?= old('tgl_lahir'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tgl_lahir'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" value="<?= old('agama'); ?>">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat') ?>">
                </div>

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?= old('asal_sekolah'); ?>">
                </div>

                <div class="form-group">
                    <label for="nama_ayah">Nama Ayah</label>
                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= old('nama_ayah'); ?>">
                </div>

                <div class="form-group">
                    <label for="nama_ibu">Nama Ibu</label>
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= old('nama_ibu'); ?>">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <div class="">
                        <input type="file" class="<?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" id="image" name="image">
                        <label class="" for="image"></label>

                        <div class="invalid-feedback">
                            <?= $validation->getError('image'); ?>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-danger btn-user btn-block">
                    Simpan Data Siswa
                </button>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>