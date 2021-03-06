<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
      

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            Masuk
                                        </h2>
                                                
                                    </div>
                                    <div class="account-content">
                                        <form class="form-horizontal" action="/login" method="post">
                                            <?php if (session()->getFlashData('success')) : ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?= session()->getFlashData('success'); ?>
                                                </div>
                                            <?php elseif (session()->getFlashData('error')) : ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?= session()->getFlashData('error'); ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="username">Username</label>
                                                    <input class="form-control" type="text" name="username" id="username" required="" placeholder="Masukkan Username">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    
                                                    <label for="password">Kata Sandi</label>
                                                    <input class="form-control" type="password" name="password" required="" id="password" placeholder="Masukkan Kata Sandi">
                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-50">
                                                <div class="col-12">
                                                    <button class="btn btn-lg btn-block btn-primary waves-effect waves-light" type="submit">Masuk</button>
                                                </div>
                                            </div>

                                        </form>

                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
					 <div class="col-sm-4">

                        <div class="wrapper-page">

                            <div class="account-pages">
								
                                        <img src="assets/images/logoupn.png" alt="Image" height="250px">
								<h3> Selamat Datang</h3>
								<h3>di Website Penjamin Mutu</h3>
								<h3> UPN Veteran Jatim</h3>
                                        </div>
							
                                    </div>
                                </div>
                           
                            <!-- end card-box-->


                     

                    </div>
                </div>
           
          </section>
          <!-- END HOME -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>