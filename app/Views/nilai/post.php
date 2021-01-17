<?= $this->extend('layouts') ?>

<?= $this->section('breadcrumbs') ?>
<h2 style="font-weight: normal;"><?php echo $title; ?></h2>

<?= $this->endsection() ?>

<?php
helper('form');
echo form_open('modul/nilai/post');
?>

<?= $this->section('content') ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Entry Record</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">

            <tr>
                <td width="150">Grade</td>
                <td>
                    <div class='col-sm-4'>
                        <input type='text' name='grade' placeholder='Grade ..' class='form-control' required='required'>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="150">Dari ,Sampai</td>
                <td>
                    <div class='col-sm-3'><input type='text' name='dari' placeholder='Example 7.9 ..' class='form-control' required='required' value=''></div>
                    <div class='col-sm-3'><input type='text' name='sampai' placeholder='Example 6.0' class='form-control' required='required' value=''></div>
                </td>
                </td>
            </tr>
            <tr>
                <td width="150">Keterangan</td>
                <td>
                    <div class='col-sm-14'><input type='text' name='keterangan' placeholder='Keterangan ..' class='form-control' required='required' value=''></div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">
                    <input type="submit" name="submit" value="simpan" class="btn btn-danger  btn-sm">
                    <?php echo anchor('modul/nilai', 'kembali', array('class' => 'btn btn-danger btn-sm')); ?>
                </td>
            </tr>

        </table>
    </div>
</div>
</form>
<?= $this->endsection() ?>