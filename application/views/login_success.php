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
                            <div class="card card-outline card-primary">
                                <div class="card-header text-center">
                                    <a href="<?= base_url()?>" class="h2">re<b>CAPTCHA</b></a>
                                </div>
                                <div class="card-body">
                                    
                                    <div class="alert alert-info alert-dismissible" style="font-size: 13px">
                                        <a><i class="icon fas fa-check"></i> <?php echo $result; ?></a>
                                    </div>
                                    

                                        <div class="input-group mb-3">
                                            Username : admin
                                        </div>
                                        
                                        <div class="input-group mb-3">
                                            Password : Admin123
                                        </div>
                                    
                                    <p></p>
                                    <p class="mb-0" style="font-size: 14px">
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
