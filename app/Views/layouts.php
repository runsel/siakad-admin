<?php
    $session = session();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SIAKAD - ADMIN</title>
        <link rel="icon" href="<?= base_url('assets/dist/img/siakad-ico.png') ?>" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <?= $this->renderSection('css') ?>

        <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
    </head>

    <body class="hold-transition layout-top-nav layout-navbar-fixed">
        <div class="wrapper">
            <?= $this->include('_menu') ?>

            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <?= $this->renderSection('breadcrumbs') ?>
                    </div>
                </div>

                <div class="content">
                    <div class="container-fluid">
                        <?= $this->renderSection('content') ?>
                    </div>
                </div>
            </div>

            <footer class="main-footer">
                <strong>Copyright &copy; <?= date('Y') ?> <a href="#">Kelompok 2 - PPL</a>.</strong>
                All rights reserved.
            </footer>
        </div>

        <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/dist/js/adminlte.js') ?>"></script>
        <script>
            window.setTimeout(function() {
                $(".alert-data").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 5000);
        </script>

        <?= $this->renderSection('scripts') ?>
    </body>
</html>