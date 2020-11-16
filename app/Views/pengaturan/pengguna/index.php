<?= $this->extend('layouts') ?>

<?= $this->section('css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
<?= $this->endsection() ?>

<?= $this->section('breadcrumbs') ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0 text-dark">Data Pengguna</h2>
        </div>
    </div>
<?= $this->endsection() ?>
    
<?= $this->section('content') ?>
    <div class="row mb-2">
        <div class="col-12">
            <div class="float-right">
                <a href="<?= base_url('pengaturan/pengguna/tambah') ?>" class="btn btn-success btn-flat"><i class="fas fa-user-plus"></i> Tambah</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Filter</h3>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover text-nowrap dtTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Hak Akses</th>
                                <th>Aktif</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($data as $i => $value) {
                            ?>
                                <tr>
                                    <td><?= $i+1 ?></td>
                                    <td><?= $value['first_name'].' '.$value['last_name'] ?></td>
                                    <td><?= $value['username'] ?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><?= $value['deskripsi'] ?></td>
                                    <td><span class="badge badge-success"><?= $value['aktif'] ?></span></td>
                                    <td>
                                        <div class="btn-group">
                                            <div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>
                                            <div class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
    <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $(".dtTable").DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian.json"
                }
            });
        });
    </script>
<?= $this->endsection() ?>