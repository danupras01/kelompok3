<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Perpustakaan TNI</title>

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="<?= base_url();?>assets/login/css/animate.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/login/css/style.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>
  
<body id="my">
  <div class="container">
    <div class="top">
      <h1 id="title" class="hidden"><span id="logo">Perpustakaan <span> TNI</span></span></h1>
    </div>
      <?php 
          echo form_open('panel/login'); 
      ?>
    <div class="login-box animated fadeInUp">
      <div class="box-header">
        <h2>Log In</h2>

      </div>
    <?php if (isset($_SESSION['message'])) { ?>
    <?= $_SESSION['message']; ?>
    <?php } ?>
      <label for="username">Email</label>
      <br/>
      <input type="text" id="username" placeholder="<?= lang('login_email'); ?>" name="identity">
      <br/>
      <label for="password">Password</label>
      <br/>
      <input type="password" id="password" placeholder="<?= lang('login_password'); ?>" name="password">
      <br/>
      <button type="submit" name="submit">Sign In</button>
      <br/>
     
    </div>
          <?php echo form_close();?>  
  </div>
</body>

<script>
  $(document).ready(function () {
      $('#logo').addClass('animated fadeInDown');
      $("input:text:visible:first").focus();
  });
  $('#username').focus(function() {
    $('label[for="username"]').addClass('selected');
  });
  $('#username').blur(function() {
    $('label[for="username"]').removeClass('selected');
  });
  $('#password').focus(function() {
    $('label[for="password"]').addClass('selected');
  });
  $('#password').blur(function() {
    $('label[for="password"]').removeClass('selected');
  });
</script>

</html>
