<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php');?>
        <title>reCAPTCHA | Login</title>
        
    </head>
    <body class="hold-transition login-page">
        
        <section class="h-100">
            <div class="conteiner h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper">
                        <div class="text-center p-3 my-3">
                            <img src="<?= base_url()?>assets/dist/img/AdminLTELogo.png" alt="logo" width="80" height="80">
                        </div>
                        <div class="login-box">
                            <!-- Message -->
                            <?php if($message){ ?>
                                <div class="alert alert-danger alert-dismissible" style="font-size: 13px">
                                    <button type="button" class="close" data-dsimis="alert" aria-hidden="ture">&times;</button>
                                    <a><i class="icon fas fa-ban"></i> <?php echo $message; ?></a>
                                </div>
                            <?php } ?>
                            <!-- /Message -->
                            <div class="card card-outline card-primary">
                                <div class="card-header text-center">
                                    <a href="<?= base_url()?>" class="h2">re<b>CAPTCHA</b></a>
                                </div>
                                <div class="card-body">
                                    <p class="login-box-msg" style="font-size: 14px">Sign in to start your session</p>
                                    <form action="<?=base_url('Login/auth')?>" method="post">

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                                <?php echo $captcha;?>
                                                <?php echo $script_captcha; ?>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p></p>
                                    <p class="mb-0" style="font-size: 14px">
                                        <!-- <a href="<?= base_url('Register')?>" class="text-center"> Register</a> -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('_partials/head.php');?>
    </body>
</html>
