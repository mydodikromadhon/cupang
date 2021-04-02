<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Sistem Management Asset dan Monitoring Penjualan Ikan Cupang" />
        <meta name="author" content="Sistem Management Asset dan Monitoring Penjualan Ikan Cupang" />
        <title>Sistem Management Asset dan Monitoring Penjualan Ikan Cupang</title>
        <link rel="shortcut icon" href="<?= base_url();?>assets/assets/img/ico.png">
        <link href="<?= base_url();?>assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-image: url('assets/assets/img/register.jpg'); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="<?= base_url('register/store')?>" method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">First Name</label><input class="form-control py-4" name="firstname" id="inputFirstName" type="text" placeholder="Enter first name" required /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Last Name</label><input class="form-control py-4" name="lastname" id="inputLastName" type="text" placeholder="Enter last name" required/></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required/></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Enter password" required/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label><input class="form-control py-4" name="confirm_password" id="inputConfirmPassword" type="password" placeholder="Confirm password" required/></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputPosition">Position </label><select name="position" class="form-control py-4" required>
                                                     <option value="">Select Position</option>
                                                      <option value="admin">Admin</option>
                                                      <option value="financeakunting">Finance Akunting</option>
                                                      <option value="media">Media</option>
                                                      <option value="operasional">Operasional</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit">Create Account</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?= base_url('login')?>">Have an account? Go to login</a></div>
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
        <script src="<?= base_url()?>assets/js/scripts.js"></script>
    </body>
</html>
