<?= $this->extend('layouts') ?>

<?= $this->section('breadcrumbs') ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0 text-dark">Data Pengguna</h2>
        </div>
    </div>
<?= $this->endsection() ?>

<?= $this->section('content') ?>
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Tambah Pengguna</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('pengaturan/pengguna/store') ?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="first_name">Nama Depan</label>
                                <input type="text"  name="first_name" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="last_name">Nama Belakang</label>
                                <input type="text"  name="last_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="username">Username</label>
                                <input type="text"  name="username" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="email">Email</label>
                                <input type="email"  name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="password">Kata Sandi</label>
                                <input type="password"  name="password" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="re_password">Ulangi Kata Sandi</label>
                                <input type="password"  name="re_password" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Simpan</button>
                        <a href="<?= base_url('pengaturan/pengguna') ?>" class="btn btn-sm btn-default"><i class="fas fa-undo"></i> Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?= $this->endsection() ?>