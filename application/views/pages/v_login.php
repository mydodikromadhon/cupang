<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Sistem Management Asset dan Monitoring Penjualan Ikan Cupang" />
        <meta name="author" content="Sistem Management Asset dan Monitoring Penjualan Ikan Cupang" />
        <title>Sistem Management Asset dan Monitoring Penjualan Ikan Cupang</title>
        <link rel="shortcut icon" href="https://cupang.site/assets/assets/img/ico.png">
        <link href="<?= base_url();?>/assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-image: url('assets/assets/img/home.jpg'); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card shadow-lg border-0 rounded-lg mt-3">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><img src="<?= base_url();?>assets/assets/img/logona.png"></h3>
                                    <h4 style="text-align: center; text-transform: uppercase; font-weight: 600;">Sistem Management Asset dan Monitoring Penjualan Ikan Cupang</h4>    
                                    </div>
                                    <div class="card-body">
                                        <form action="<?= base_url('login/store');?>" method="POST">
                                            <?php if($this->session->flashdata('error')){?>
                                                <p class="alert alert-danger text-center">Incorrect username atau password salah</p>
                                            <?php } ?>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" name="email" type="email" placeholder="Enter email address" /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Enter password" /></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><!--<a class="small" href="password.html">Forgot Password?</a>--><button type="submit" class="btn btn-primary" >Login</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?= base_url('register')?>">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="align-items-center justify-content-between small">
                            <center><div class="text-muted">Copyright 2020 &copy; Sistem Management Asset dan Monitoring Penjualan Ikan Cupang</div></center>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url();?>assets/js/scripts.js"></script>
    </body>
</html>
