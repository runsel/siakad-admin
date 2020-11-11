<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIAKAD| ADMIN</title>
        <link rel="icon" href="assets/dist/img/siakad-ico.png" type="image/png" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition login-page" style="background: #ffffff;">
        <div class="login-box">
            <div class="login-logo">
                <a href="./">
                    <img src="assets/dist/img/siakad-logo.png" alt="SIAKAD Logo" style="width: 80%;">
                </a>
            </div>

            <div class="card" style="border-radius: 15px; border: 1px solid #fbf2f2;">
                <div class="card-body login-card-body" style="border-radius: 15px;">
                    <p class="login-box-msg">Masukkan informasi kredensial Anda</p>
                    <?php
                        $session = session();
                        $errors = $session->getFlashdata('errors');
                    ?>
                    <form action="auth/login" method="post">
                        <div class="input-group mb-3">
                            <input name="username" type="text" class="form-control <?= isset($errors) && array_key_exists('username', $errors) ? 'is-invalid' : ''  ?>" placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <?php if(isset($errors) && array_key_exists('username', $errors)): ?>  
                                <span class="error invalid-feedback"><?= $errors['username'] ?></span>
                            <?php endif ?>
                        </div>
                        <div class="input-group mb-3">
                            <input name="password" type="password" class="form-control <?= isset($errors) && array_key_exists('password', $errors) ? 'is-invalid' : ''  ?>" placeholder="Kata Sandi">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <?php if(isset($errors) && array_key_exists('password', $errors)): ?>  
                                <span class="error invalid-feedback"><?= $errors['password'] ?></span>
                            <?php endif ?>
                            <?php if(isset($errors) && array_key_exists('denied', $errors)): ?>  
                                <span class="error invalid-feedback" style="display: block;"><?= $errors['denied'] ?></span>
                            <?php endif ?>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a href="lupa-sandi">Lupa Kata Sandi</a>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>