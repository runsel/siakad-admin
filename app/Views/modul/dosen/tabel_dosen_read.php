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
<div class="page-content">

    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">


            <h2 style="margin-top:0px">Detail Data <?php echo $nama_dosen; ?> </h2>
            <div class="panel panel-flat">
                <table class="table table table-xxs">
                    <tr class="border-solid">
                    <tr>
                        <td>Nidn</td>
                        <td><?php echo $nidn; ?></td>
                    </tr>
                    <tr>
                        <td>Nama Dosen</td>
                        <td><?php echo $nama_dosen; ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><?php echo $tempat_lahir; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><?php echo $tanggal_lahir; ?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td><?php echo $agama; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?php echo $jenis_kelamin; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?php echo $alamat; ?></td>
                    </tr>
                    <tr>
                        <td>Bidang Keahlian</td>
                        <td><?php echo $bidang_keahlian; ?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td><?php echo $jabatan; ?></td>
                    </tr>
                    <tr>
                        <td>Tlpn</td>
                        <td><?php echo $tlpn; ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><?php echo $status; ?></td>
                    </tr>
                </table>
            </div>
            <div class="text-right">
                <a href="<?php echo site_url('admin/dosen') ?>" class="btn btn-danger"><i class=" icon- icon-cancel-circle2"></i> Kembali</a>
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