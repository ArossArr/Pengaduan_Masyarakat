
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="<?=base_url()?>/css/styles.css" rel="stylesheet"  type="text/css"/>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                    </div>
                                    <?php if(!empty(session()->getFlashdata("error"))) : ?>
                                        <div class="alert alert-danger">
                                            <?=session()->getFlashdata("error")?>
                                        </div>
                                    <?php endif?>
                                    <div class="card-body">
                                        <form class="user" method="post" action="/savereg">
                                            
                                             <div class="col mb-3">
                                                  <div class="form-floating mb-3 mb-md-0">
                                                       <input class="form-control" id="nik" name="nik" type="text" placeholder="Enter your first Nik" />
                                                       <label for="nik">NIK</label>
                                                  </div>
                                             </div>
                                             <div class="col mb-3">
                                                  <div class="form-floating mb-3 mb-md-0">
                                                       <input class="form-control" id="nama" name="nama" type="text" placeholder="Enter your first full name" />
                                                       <label for="nama">Full Name</label>
                                                  </div>
                                             </div>
                                             <div class="col mb-3 ">
                                                  <div class="form-floating mb-3 mb-md-0">
                                                       <input class="form-control" id="username" name="username" type="text" placeholder="Enter your username" />
                                                       <label for="username">Username</label>
                                                  </div>
                                             </div>
                                             <div class="col mb-3">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="no_tlp" name="no_tlp" type="text" placeholder="Create a NO.Tlp/HP" />
                                                    <label for="no_tlp">No.Tlp</label>
                                                </div>
                                            </div>
                                             <div class="col mb-3">
                                                  <div class="form-floating mb-3 mb-md-0">
                                                       <input class="form-control" id="password" name="password" type="password" placeholder="Create a password" />
                                                       <label for="password">Password</label>
                                                  </div>
                                             </div>
                                            
                                             <div class="col mb-3">
                                                  <div class="form-floating mb-3 mb-md-0">
                                                       <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                       <label for="inputPasswordConfirm">Confirm Password</label>
                                                  </div>
                                             </div>
                                            
                                            <div class="mt-4 mb-0 btn-block">
                                                <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="/login">have an account? Login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>/js/scripts.js"></script>
    </body>
</html>
