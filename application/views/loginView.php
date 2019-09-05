
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Sign In :: DashForge">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/favicon.png">

    <title>Sign In :: DashForge</title>

    <!-- vendor css -->
    <link href="<?= base_url() ?>/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/dashforge.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/dashforge.auth.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/app.css">
  </head>
  <body>

    

    <div class="content content-fixed content-auth">
      <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
          <div class="media-body align-items-center d-none d-lg-flex">
            <div class="mx-wd-600">
              <img src="<?= base_url() ?>/assets/img/log-scr.jpg" class="img-fluid" alt="">
            </div>
          </div><!-- media-body -->
          <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
            <div class="wd-100p">
              <h3 class="tx-color-01 mg-b-5">Sign In</h3>
              <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>
              
              <?php echo form_open('auth/signin'); ?>
              <div class="form-group">
                <label>Email address</label>
                <input type="text" class="form-control <?php if(form_error('username')){ echo 'border-danger'; }else if(set_value('username')!=''){echo 'border-success';} ?>" name="username" value="<?= set_value('username'); ?>" placeholder="yourname@yourmail.com">
                <div class="error-field"><?= form_error('username'); ?></div>
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Password</label>
                  <a href="" class="tx-13">Forgot password?</a>
                </div>
                <input type="password" class="form-control <?php if(form_error('password')){ echo 'border-danger'; }else if(set_value('username')!=''){echo 'border-success';} ?>" name="password" placeholder="Enter your password">
                <div class="error-field"><?= form_error('password'); ?></div>
              </div>
              <button class="btn btn-brand-02 btn-block">Sign In</button>
              <?= form_close(); ?>

              <div class="divider-text">or</div>
              <button class="btn btn-outline-facebook btn-block">Sign In With Facebook</button>
              <button class="btn btn-outline-twitter btn-block">Sign In With Twitter</button>
              <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="page-signup.html">Create an Account</a></div>
            </div>
          </div><!-- sign-wrapper -->
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content -->

    <script src="<?= base_url() ?>/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/lib/feather-icons/feather.min.js"></script>
    <script src="<?= base_url() ?>/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="<?= base_url() ?>/assets/js/dashforge.js"></script>

    <!-- append theme customizer -->
    <script src="<?= base_url() ?>/lib/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url() ?>/assets/js/dashforge.settings.js"></script>

  </body>
</html>
