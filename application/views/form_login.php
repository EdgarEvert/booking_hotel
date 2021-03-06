<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_auth') ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_auth') ?>/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">-</span></h4>
            
            <form method="POST" action="<?php echo base_url('index.php/auth/login') ?>">
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" autofocus>
                <?php echo form_error('email','<div class="text-small text-danger">','</div>') ?>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2">
                <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
              </div>

              <div class="form-group">
                <span><?php echo $captcha_image; ?></span>
                <a href="" onclick="parent.window.location.reload(true)">[perbaharui gambar]</a>
                <label for="captcha">Captcha</label>
                <input type="text" name="captcha" class="form-control" required>
                <?php echo form_error('captcha','<div class="text-small text-danger">','</div>') ?>
              </div>

              <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
              
              <div class="form-group text-right">
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              <div class="mt-5 text-center">
                Don't have an account? <a href="<?php echo base_url('index.php/register') ?>">Create new one</a>
              </div>
            </form>

          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?php echo base_url('assets/assets_auth/') ?>img/login-bg.jpg">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url('assets/assets_auth') ?>/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/assets_auth') ?>/js/scripts.js"></script>
  <script src="<?php echo base_url('assets/assets_auth') ?>/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url('assets/assets_auth') ?>/js/page/index-0.js"></script>
</body>
</html>
