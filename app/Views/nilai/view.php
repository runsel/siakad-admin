<?= $this->extend('layouts') ?>

<?= $this->section('breadcrumbs') ?>
<h2 style="font-weight: normal;"><?php echo $title; ?></h2>
<div class="push">
    <ol class="breadcrumb">
        <li><i class='fa fa-home'></i> <a href="javascript:void(0)">Home </a></li>
        <li class="active"> / Data</li>
    </ol>
</div>
<!-- END Breadcumbs -->
<?= $this->endsection() ?>

<?= $this->section('content') ?>
<?php
echo anchor('/modul/nilai' . '/post', "<i class='fa fa-building-o'></i> New Record", array('class' => 'btn btn-danger   btn-sm', 'title' => 'Tambah Data'))
?>
<table id="example-datatables" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th width="7">No</th>
            <th>Grade</th>
            <th>Dari</th>
            <th>Sampai</th>
            <th>Keterangan</th>
            <th width="7"></th>
            <th width="7"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;

        foreach ($record->getResult() as $r) {
            echo "<tr><td>$no</td>
                                    <td width='20'>" .  strtoupper($r->grade) . "</td>
                                    <td width='20'>$r->dari</td>
                                    <td width='20'>$r->sampai</td>
                                    <td>$r->keterangan</td>
                                    <td>" . anchor(site_url() . '/modul/nilai/edit/' . $r->$pk, "Edit", array('title' => 'Edit')) . "</td>
                                    <td>" . anchor(site_url() . '/modul/nilai/delete/' . $r->$pk, "Delete", array('title' => 'Delete')) . "</td>
                                    </tr>";
            $no++;
        }
        ?>

    </tbody>
</table>
<?= $this->endsection() ?>