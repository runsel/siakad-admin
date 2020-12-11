<?= $this->extend('layouts') ?>

<?= $this->section('css') ?>
    <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/css/select2.min.css') ?>">
<?= $this->endsection() ?>

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
                    <?php
                        $errors = \Config\Services::validation();
                    ?>
                    <?= form_open(base_url('pengaturan/pengguna/store')) ?>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <?= form_label('Nama Depan', 'first_name') ?>
                                <?= form_input(['value'=>old('first_name'), 'name'=>'first_name', 'id'=>'first_name', 'class'=>$errors->getError('first_name') ? 'form-control is-invalid' : 'form-control']) ?>
                                <?= $errors->getError('first_name') ? '<span class="error invalid-feedback">'.$errors->getError('first_name').'</span>' : '' ?>
                            </div>
                            <div class="form-group col-md-3">
                                <?= form_label('Nama Belakang', 'last_name') ?>
                                <?= form_input(['value'=>old('last_name'), 'name'=>'last_name', 'id'=>'last_name', 'class'=>$errors->getError('last_name') ? 'form-control is-invalid' : 'form-control']) ?>
                                <?= $errors->getError('last_name') ? '<span class="error invalid-feedback">'.$errors->getError('last_name').'</span>' : '' ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <?= form_label('Username', 'username') ?>
                                <?= form_input(['value'=>old('username'), 'name'=>'username', 'id'=>'username', 'class'=>$errors->getError('username') ? 'form-control is-invalid' : 'form-control']) ?>
                                <?= $errors->getError('username') ? '<span class="error invalid-feedback">'.$errors->getError('username').'</span>' : '' ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <?= form_label('Email', 'email') ?>
                                <?= form_input(['value'=>old('email'), 'name'=>'email', 'id'=>'email', 'class'=>$errors->getError('email') ? 'form-control is-invalid' : 'form-control', 'type'=>'email']) ?>
                                <?= $errors->getError('email') ? '<span class="error invalid-feedback">'.$errors->getError('email').'</span>' : '' ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <?= form_label('Hak Akses', 'id_group') ?>
                                <?=  form_dropdown('id_group', [''=>'', '1'=>'Administrator', '2'=>'Operator Jurusan'], old('id_group'), ['id'=>'id_group', 'style'=>'width: 100%;', 'class'=>$errors->getError('id_group') ? 'form-control select-data is-invalid' : 'form-control select-data']) ?>
                                <?= $errors->getError('id_group') ? '<span class="error invalid-feedback">'.$errors->getError('id_group').'</span>' : '' ?>
                            </div>
                            <div class="form-group col-md-3">
                                <?= form_label('Jurusan', 'kode_jurusan') ?>
                                <?=  form_dropdown('kode_jurusan', [''=>'']+$jurusan, old('kode_jurusan'), ['id'=>'kode_jurusan', 'style'=>'width: 100%;', 'class'=>$errors->getError('kode_jurusan') ? 'form-control select-data is-invalid' : 'form-control select-data']) ?>
                                <?= $errors->getError('kode_jurusan') ? '<span class="error invalid-feedback">'.$errors->getError('kode_jurusan').'</span>' : '' ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <?= form_label('Kata Sandi', 'password') ?>
                                <?= form_password(['name'=>'password', 'id'=>'password', 'class'=>$errors->getError('password') ? 'form-control is-invalid' : 'form-control', 'type'=>'password']) ?>
                                <?= $errors->getError('password') ? '<span class="error invalid-feedback">'.$errors->getError('password').'</span>' : '' ?>
                            </div>
                            <div class="form-group col-md-3">
                                <?= form_label('Ulangi Kata Sandi', 're_password') ?>
                                <?= form_password(['name'=>'re_password', 'id'=>'re_password', 'class'=>$errors->getError('re_password') ? 'form-control is-invalid' : 'form-control', 'type'=>'re_password']) ?>
                                <?= $errors->getError('re_password') ? '<span class="error invalid-feedback">'.$errors->getError('re_password').'</span>' : '' ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Simpan</button>
                        <a href="<?= base_url('pengaturan/pengguna') ?>" class="btn btn-sm btn-default"><i class="fas fa-undo"></i> Batal</a>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
    <script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js') ?>"></script>
    <script>
        "use strict"

        $('document').ready(function() {
            $('.select-data').select2({
                placeholder: 'Pilih...',
                minimumResultsForSearch: Infinity
            });

            $('#id_group').on('select2:select', function(e) {
                var data = e.params.data;
                $('#kode_jurusan').attr('disabled', 'disabled');
                if(data.id == 2)
                {
                    $('#kode_jurusan').removeAttr('disabled');
                }
            })
        });
    </script>
<?= $this->endsection() ?>